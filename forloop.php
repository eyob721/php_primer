<?php
    $title = "For Loop";
    include 'includes/header.php';
?>
        <h1><?php echo $title?></h1>
        <?php
            //For Loops
            for ($i=0; $i < 10; $i++) { 
                echo "<p>Hello PHP!!!</p>";
            }
            for ($i=0; $i < 10; $i++) { 
                echo "<p>The count is $i</p>";
            }
        ?>
<?php
    require 'includes/footer.php';
?>