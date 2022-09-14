<?php
    $title = "PHP Primer";
    include 'includes/header.php';
?>
        <!-- Basic HTML -->
        <h1><?php echo $title?></h1>
        <?php
            //printing to HTML using echo
            echo "Hello PHP";
            //you can echo HTML Tags
            echo '<br>';
            echo 'Second Line', '<br>';
        ?>

        <?php
            //declaring variables
            $name = "Eyob Melkamu";
            $age = 28;

            //echo Variables
            echo $name, "<br>";
            echo '<h3> My name is ' . $name . ' and I am ' . $age . ' years old.</h3>';
            echo "<h3>My name is $name and I am $age years old.</h3>";
        ?>
        <button type="button" class="btn btn-dark">Click Me</button>
<?php
    require 'includes/footer.php';
?>