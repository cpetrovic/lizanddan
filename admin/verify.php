<?php
spl_autoload_register('classLoader');
$test = "test";

function classLoader($className)
{
    $path = '../class/';
    include $path.$className.'.class.php';
}

$db = new db();

$_POST['username'] = "elizabeth";
$_POST['password'] = "welcome$1";

if(isset($_POST['submit']))
{
    $usr = $db->quote($_POST['username']);
    $pas = $db->quote($_POST['password']);

    $sql = $db->select("SELECT * FROM users_table WHERE username=$usr AND password = PASSWORD($pas) LIMIT 1");

    if(isset($sql[0]['tid']))
    {
        session_start();
        $_SESSION['username'] = $sql[0]['username'];
        $_SESSION['logged'] = TRUE;
        header("Location: manage.php");
        exit;
    }else{
        header("Location: ./index.php");
        exit;
    }
}else{
    header("Location: index.php");
    exit;
}
?>