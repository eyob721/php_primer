<?php
    $title = "Date and Time Manipulation";
    include 'includes/header.php';
?>
        <h1><?php echo $title?></h1>
        <?php
            $datenow = getdate();
            echo "<b>Today's Date: </b><br>";
            echo $datenow['mday'].'<br>';
            echo $datenow['mon'].'<br>';
            echo $datenow['year'].'<br>';
            echo "Today's Date (d/m/y): "
                    .$datenow['mday'].'/'
                    .$datenow['mon'].'/'
                    .$datenow['year'].'<br>';
            $timenow = time();
            echo "Time: ".$timenow."<br>";
            echo "<hr>";
            //Formatted date
            echo date("d/m/y")."<br>";
            echo date("d-m-y")."<br>";
            echo date("d/m/y G.i:s<br>", time())."<br>";
            print ("Today is ");
            print date("j of F Y, \a\\t g.i a", time());

            
        

        ?>
<?php
    require 'includes/footer.php';
?>