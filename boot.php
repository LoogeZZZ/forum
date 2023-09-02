<?php
const IS_DEBUG = false;

// Инициализируем сессию
session_start();

// Простой способ сделать глобально доступным подключение в БД
function pdo(): PDO
{
    static $pdo;

    if (!$pdo) {
        $config = include __DIR__.'/config.php';
        // Подключение к БД
        $dsn = 'mysql:dbname='.$config['db_name'].';host='.$config['db_host'];
        $pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $pdo;
}

function flash(?string $message = null)
{
    if ($message) {
        $_SESSION['flash'] = $message;
    } else {
        if (!empty($_SESSION['flash'])) { ?>
          <div class="alert alert-danger mb-3">
              <?=$_SESSION['flash']?>
          </div>
        <?php }
        unset($_SESSION['flash']);
    }
}

function check_auth(): bool
{
    return !!($_SESSION['user_id'] ?? false);
}

function error_handler($no, $msg, $file, $line) {
    if(IS_DEBUG):
        echo $msg;
    endif;

    switch($no):
        case E_USER_NOTICE:
        case E_USER_WARNING:
            echo $msg; break;
        case E_USER_ERROR:
            echo $msg; exit;
    endswitch;
}

const MSG_ON_DB_CONN_ERROR = "Проблема с бд";
const MSG_ON_READ_DATA_ERROR = "Проблема с чтением данных";
const MSG_ON_CREATE_DATA_ERROR = "Проблема с добавлением записи";
const MSG_ON_UPDATE_DATA_ERROR = "Проблема с изменением записи";
const MSG_ON_DELETE_DATA_ERROR = "Проблема с удалением записи";

set_error_handler("error_handler");

?>