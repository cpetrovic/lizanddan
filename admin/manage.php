<?
spl_autoload_register('classLoader');
$test = "test";

function classLoader($className)
{
    $path = '../class/';
    include $path.$className.'.class.php';
}

$db = new db();
session_start();
if(!$_SESSION['logged'])
{
    header("Location: ../index.php");
    exit;
}

$songsArr = array();

$rows = $db -> select("SELECT tid, Title, Artist FROM Songs WHERE Type = 'New'");
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Liz And Dan</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="../css/ie/html5shiv.js"></script><![endif]-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/skel.min.js"></script>
    <script src="../js/skel-layers.min.js"></script>
    <script src="../js/init.js"></script>
        <link rel="stylesheet" href="../css/skel.css" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/style-xlarge.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="../js/slider/jquery.bxslider.min.js"></script>
    <link href="../js/slider/jquery.bxslider.css" rel="stylesheet" />
    <script>$(document).ready(function(){
            $('.bxslider').bxSlider({
                adaptiveHeight: true,
                mode: 'fade',
                pager: false    });
        });</script>
    <script language="JavaScript">
        function toggle(source)
        {
            checkboxes = document.getElementsByName('song[]');
            for(var i=0, n=checkboxes.length;i<n;i++)
            {
                checkboxes[i].checked = source.checked;
            }
        }
    </script>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Italianno" />
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body>
<div id="wrapper" class="container">
    <section id="header">
        <header>
        </header>
        <nav id="nav">
                <ul style="border-bottom: 1px solid #494949;">
                    <li style="font-family: 'Tomasso';"><a href="http://www.liz-and-dan.us/admin/manage.php">Manage</a></li><li style="font-family: 'Tomasso';"><a href="http://www.liz-and-dan.us/admin/allsongs.php">All Songs</a></li>
                </ul>
            <form action="update.php" method="post" id="songform" name="song">
            <ul>
                <?$count = 0;
                echo '<br /><br />';
                foreach($rows as $key=>$value)
                {
                    echo '<li><input id="song" type="checkbox" name="song[]" value="'.$value['tid'].'">'.$value['Title'].' - '.$value['Artist'].'</li><hr>';
                    $count++;
                }?>
            </ul>
            <br />
            Check All Boxes<input style="float: none; display: initial;"type="checkbox" onClick="toggle(this)" />
            <br />
            <br />
            <div style="width:600px; margin: 0 auto;">
                <span style="float:left">Mark As Read</span><input style="float: right;" name="markRead" type="submit" value="Go">
                <br />
                <br />
                <span style="float:left">Remove Songs From Database</span><input style="float:right" name="delete" type="submit" value="Go">
                <br />
            </div>
        </form>
        </nav>
    </section>
</div>
</body>
</html>
</body>
</html>
