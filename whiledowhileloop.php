<?php
    $title = "While and Do While Loop";
    include 'includes/header.php';
?>
        <h1>While Loop</h1>
        <?php
            $grade = 0;
            //Infinite Loop
            /* while ($grade <= 10) {
                echo "<p>I am not 10 yet</p>";
            } */
            while ($grade < 10) {
                echo "<p>I am less than 10</p>";
                $grade++;
            }
        ?>
        <h1>Do While Loop</h1>
        <?php
            do {
                echo "<p>I am greater than 0</p>";
                $grade--;
            } while ($grade > 0)
        ?>
<?php
    require 'includes/footer.php';
?>