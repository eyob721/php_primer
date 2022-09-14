<?php
    $title = "If Statement";
    include 'includes/header.php';
?>
        <h1><?php echo $title?></h1>
        <?php
            echo "<h2>If Statement</h2>";

            $grade = 80;
            // ===, ==, >, <, <=, >=, !=
            if ($grade >= 50) {
                echo "<h3 style='color: green'>You Have Passed</h3>";
            } else {
                echo "<h3 style='color: red'>You Have Failed</h3>";
            }
            $grade = 'A';
            if ($grade == 'A') {
                echo "<h2 style='color: green'>You are a Superstar</h2>";
            } else if ($grade == 'B') {
                echo "<h2 style='color: blue'>You did Well</h2>";
            } else {
                echo "<h2 style='color: red'>You are not there yet...</h2>";
            }
        ?>
<?php
    require 'includes/footer.php';
?>