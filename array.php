<?php
    $title = "Arrays and Printout";
    include 'includes/header.php';
?>
        <h1><?php echo $title?></h1>
        <?php
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 101, 20, 65, 78, 4, 67, 76, 76, 745, 21);
        //echo $numbers[0];
        $size = count($numbers);

        for ($i=0; $i < $size; $i++) { 
            echo "<p>$numbers[$i]</p>";
        }
        
    ?>
<?php
    require 'includes/footer.php';
?>