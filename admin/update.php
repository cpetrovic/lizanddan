<?
    spl_autoload_register('classLoader');

    function classLoader($className)
    {
        $path = '../class/';
        include $path.$className.'.class.php';
    }

    $db = new db();


    $songString = "(";
    foreach($_POST['song'] as $song)
    {
        $songString .= $song;
        if($song != end($_POST['song']))
        {
            $songString .= ",";
        }
           
    }
    $songString .= ")";

        
    if($_POST['delete'] == "Go")
    {
        $query = "DELETE FROM Songs WHERE tid IN ".$songString;
        $db->query($query);
        echo "Deleted";
    }
    elseif($_POST['markRead'] == "Go")
    {
        $query = "UPDATE Songs SET Type='Read' WHERE tid IN ".$songString;
        $db->query($query);
        echo "Read";
    }

?>