<?
spl_autoload_register('classLoader');

function classLoader($className)
{
    $path = '../class/';
    include $path.$className.'.class.php';
}

$db = new db();
$result = 0;


if(isset($_POST['submit']))
{
    $title = $db -> quote($_POST['title']);
    $artist = $db -> quote($_POST['artist']);
    $result = $db -> query("INSERT INTO Songs (Title, Artist, Type) VALUES (" . $title . "," . $artist . ", 'New')");
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Liz And Dan</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/jquery.arctext.js"></script>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://tympanus.net/Development/Arctext/js/jquery.arctext.js"></script>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <script>
        $().ready(function(){
            $('#requests').arctext({radius: 500});
            $('#registry').arctext({radius: 400});
            $('#parking').arctext({radius: 300});
        });
    </script>
</head>
<body>
<div id="spacer"></div>
<div id="wrapper" class="container">
    <section id="header">
        <header>
            <h1 style="font-family: 'Maratre'; color: white; font-size: 50pt; text-transform: none; letter-spacing: 0;">
                You're strange and fascinating and <br />
                I've never met anyone like you.
            </h1>
            <p style="font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 7px; margin: 0 0 1em 0;">
                XKCD
            </p>
        </header>
        <nav id="nav">
            <ul>
                <li style="font-family: 'Tomasso';"><a href="http://www.liz-and-dan.us/">Details</a></li><li style="font-family: 'Tomasso';"><a href="http://www.liz-and-dan.us/funstuff/">FUN STUFF</a></li>
            </ul>
        </nav>
    </section>

    <section id="banner">
        <h3 id="requests" class="curveBanner">SONG REQUESTS</h3>
        <?
        if(isset($_POST['submit']))
        {?>
            <section id="footer">
                <p style="font-family: 'MepCaps'; font-size: 15pt; line-height: 14pt; letter-spacing: 6px;">
                    Thanks! Your Song Has been Stored!</p>
                <p style="border-top: none; font-family: 'MepCaps'; font-size: 11pt; color: white;letter-spacing: 5px;">
                    We know you have some sweet moves.<br />
                    tell us a song (or two!) you’d like to dance to<br />
                    and we’ll do our best to make it happen!<br />
                </p>
                <form action="http://www.liz-and-dan.us/funstuff/" method="post">
                    <div class="row uniform 50%">

                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="title" id="title" placeholder="Title" />
                        </div>

                        <div class="6u$ 12u$(xsmall)">
                            <input type="text" name="artist" id="artist" placeholder="Artist" />
                        </div>

                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Submit" name="submit"/></li>
                            </ul>
                        </div>

                    </div>
                </form>
            </section>
        <?}
        else
        {?>
            <p style="border-top: none; font-family: 'MepCaps'; font-size: 11pt; color: white;letter-spacing: 5px;">
                we know you have some sweet moves.<br />
                tell us a song (or two!) you’d like to dance to<br />
                and we’ll do our best to make it happen!<br />
                </p>
                <form action="http://www.liz-and-dan.us/funstuff/" method="post">
                    <div class="row uniform 50%">

                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="title" id="title" placeholder="Title" />
                        </div>

                        <div class="6u$ 12u$(xsmall)">
                            <input type="text" name="artist" id="artist" placeholder="Artist" />
                        </div>

                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Submit" name="submit"/></li>
                            </ul>
                        </div>

                    </div>
                </form>
        <?}?>
    </section>
    <section class="main style1">
    </section>
    <section class="main style2">
        <header class="major">
            <h3 id="registry" style="letter-spacing 5px; font-family: 'Engravers';">REGISTRIES</h3>
                <p style="border-top: none; font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 5px;">
                    <a href="https://www-secure.target.com/gift-registry/giftgiver?registryId=LVnqbT6YExuAiRkthuH9EA&registryType=WEDDING">TARGET</a>  AND  <a href="http://www.crateandbarrel.com/Gift-Registry/liz-schulte-and-dan-blumeyer/r5277494">CRATE & BARREL</a>
                </p>
                <p style="border-top: none; font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 5px;">
                    gift cards to <br /><a href="//www.etsy.com">etsy.com</a> (for vintage home goods!)<br />
                    and <a href="//www.sweetmarias.com">sweetmarias.com</a> (for an espresso machine!)<br />are also welcome.
                </p>
        </header>
    </section>
    <section class="main style2">
        <footer class="major" style="padding: 0; border: none;">

        </footer>
    </section>
    <section class="main style2" style="border-radius: 0 0 20px 20px;">
        <footer class="major" style="padding: 0; border: none;">
            <p style="font-family: 'Tomasso'; margin: -2em 0 0 0; color: white; font-size: 15pt; letter-spacing: 5px;">#BLUPARTYOF2</p>
        </footer>
    </section>
</div>
</body>
</html>

