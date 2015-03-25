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
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://tympanus.net/Development/Arctext/js/jquery.arctext.js"></script>
    <script src="js/slider/jquery.bxslider.min.js"></script>
    <link href="js/slider/jquery.bxslider.css" rel="stylesheet" />
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <script>
        $(document).ready(function()
        {
            $('.bxslider').bxSlider(
                {
                    adaptiveHeight: true,
                    mode: 'fade',
                    pager: false,
                    auto: true,
                    randomStart: true

                });

        });
    </script>
    <script>
        $().ready(function(){
            $('#datetime').arctext({radius: 300});
            $('#location').arctext({radius: 300});
            $('#parking').arctext({radius: 300});
            $('#dress').arctext({radius: 300});
            $('#weather').arctext({radius: 300});
            $('#hotel').arctext({radius: 300});


        });
    </script>

</head>
<body>
<div id="spacer"></div>
<div id="wrapper" class="container">
    <section id="header">
        <header>

            <h1 style="font-family: 'Maratre'; color: white; font-size: 50pt; letter-spacing: 0; text-transform: none !important;">
                You're strange and fascinating and <br />I've never met anyone like you.
            </h1>
            <p style="font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 7px;">
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
        <ul class="bxslider">
            <?foreach(glob('images/eng_pics/*.*') as $filename)
            {?>
                <li><img src="<?echo $filename;?>" /></li>
            <?}?>
        </ul>
    </section>

    <section class="main style1">
        <section>
            <h3 id="datetime" style="font-family: 'Engravers';">DATE & TIME</h3>

            <p style="font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 7px;">
                SATURDAY
            </p>

            <p style="font-family: 'Fraktur'; font-size: 30px; color: white;letter-spacing: 7px; margin: 0 0 1em 0;">
                09 <span style="font-size: 15px;">&bull;</span> 05 <span style="font-size: 15px;">&bull;</span> 15
            </p>

            <p style="font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 7px; margin: 0 0 1em 0;">
                FIVE O'CLOCK
            </p>

        </section>
        <section>
            <h3 id="location" style="  font-family: 'Engravers';">LOCATION</h3>
            <p style="font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 7px;">
                THE GUILD
            </p>
            <p style="font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 7px;">
                <span style="font-size:20px">1621</span> LOCUST STREET <br />
                KANSAS CITY, MO<br />
                <span style="font-size:20px">64108</span>
            </p>
        </section>
    </section>
    <section class="main style2">
        <header class="major">
            <p style="border-top:none;"><img width="100%" src="images/map.png" /></p>
        </header>
    </section>
    <section class="main style2">
        <footer class="major" style="padding: 0; border: none;">
            <h3 id="parking" style="font-family: 'Engravers';">PARKING</h3>

            <p style="font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 7px;">
                THERE IS A SMALL LOT, ACCESSIBLE BY ALLEY,<br />
                LOCATED BEHIND THE VENUE.</p>

            <p style="font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 7px;">
                LIMITED SPACES ARE ALSO AVAILABLE<br />
                ALONG THE SURROUNDING STREETS.<br />
                CARPOOLING ENCOURAGED</p>
        </footer>
    </section>

    <section class="main style1">
        <section>
            <h3 id="dress" style="font-family: 'Engravers';">DRESS CODE</h3>

            <p style="font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 7px;">
                COCKTAIL ATTIRE REQUESTED
            </p>

            <p style="font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 7px;">
                BUT PLEASE FEEL FREE<br />
                TO DRESS TO THE NINES<sup>1</sup><br />
                IF YOU FEEL SO INCLINED!
            </p>


        </section>
        <section>
            <h3 id="weather" style="  font-family: 'Engravers';">WEATHER</h3>
            <p style="font-family: 'MepCaps'; font-size: 10px; color: white;letter-spacing: 7px;">
                THE CEREMONY WILL<br />
                (HOPEFULLY) BE OUTDOORS<br />
                BUT WHO REALLY KNOWS<br />
                WHAT SEPTEMBER IN MISSOURI<br />
                WILL BE LIKE?
            </p>

        </section>
    </section>
    <section class="main style2">
        <footer class="major" style="padding: 0; border: none;">
            <h3 id="hotel" style="font-family: 'Engravers';">NEARBY HOTELS</h3>

            <p style="font-family: 'Maratre'; color: white; font-size: 25pt; letter-spacing: 0;text-transform: none; margin: 0;">
                Hotel Phillips
            </p>
            <p style="border-top: none; font-family: 'MepCaps'; font-size: 12px; color: white;letter-spacing: 5px; margin: 0;">
                <a href="http://www.hotelphillips.com">hotelphillips.com</a><br />
                816.221.7000<br />
                1.2 miles to the guild
            </p>

            <p style="font-family: 'Maratre'; color: white; font-size: 25pt; letter-spacing: 0;text-transform: none; margin:1em 0 0 0;">
                Hilton President Kansas City
            </p>
            <p style="border-top: none; font-family: 'MepCaps'; font-size: 12px; color: white;letter-spacing: 5px; margin: 0;">
                <a href="http://www.hilton.com">hilton.com</a><br />
                816.221.9490<br />
                .6 miles to the guild
            </p>

            <p style="font-family: 'Maratre'; color: white; font-size: 25pt; letter-spacing: 0;text-transform: none; margin:1em 0 0 0;">
                Sheraton Kansas City
            </p>
            <p style="border-top: none; font-family: 'MepCaps'; font-size: 12px; color: white;letter-spacing: 5px; margin: 0;">
                <a href="http://www.sheratonkansascityhotel.com">sheratonkansascityhotel.com</a><br />
                816.841.1000<br />
                .7 miles to the guild
            </p>




        </footer>
    </section>
    <section class="main style2" style="border-radius: 0 0 20px 20px;">
        <footer class="major" style="padding: 0; border: none;">
            <p style="font-family: 'MepCaps'; font-size: 11px; color: white;letter-spacing: 7px;">
                <sup>1</sup> ENGLISH IDIOM MEANING "TO PERFECTION" OR "TO THE<br />HIGHEST DEGREE" OR TO DRESS "BUOYANTLY AND HIGH CLASS"</p>
            <p style="font-family: 'MepCaps'; font-size: 9px; color: white;letter-spacing: 5px;">
                Evans, Bergen, and Cornelia Evans. A Dictionary of Contemporary American Usage. New Work: Random House, 1957. 145. Print.</p>

        </footer>
    </section>
</div>
</body>
</html>

