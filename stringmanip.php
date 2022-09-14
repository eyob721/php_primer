<?php
    $title = "String Manipulation";
    include 'includes/header.php';
?>
        <h1><?php echo $title?></h1>
        <?php
            //Concatenation of Strings
            $phrase1 = "student who came late";
            $phrase2 = "in class, stand with Rock";
            $name = "eyob melkamu";
            echo $phrase1, ", named Tiffany, ", $phrase2;
            echo "<br>";
            echo "<hr>";
            //String transformation
            echo 'Uppercase first letter only: '.ucfirst($name).'<br>';
            echo 'Uppercase first letter of each word: '.ucwords($name).'<br>';
            echo 'Uppercase: '.strtoupper($name).'<br>';
            echo 'Lowercase: '.strtolower("THIS WAS ALL UPPERCASE").'<br>';
            echo "<hr>";
            echo "Repeat String: ".str_repeat('a', 10).'<br>';
            echo "Repeat String - Nested Function: ".strtoupper(str_repeat('a', 10)).'<br>';
            echo "<hr>";
            echo "Get a substring: ".substr($name, 3, 5).'<br>';
            echo "Get a position of a string: ".strpos($name, 'k')."<br>";
            echo "Get a position of a string: ".strpos($name, 'z').'<br>';//Returns Null
            echo "Find character 'e': ".strchr($name, 'e')."<br>";
            echo "Find character 'z': ".strchr($name, 'z')."<br>";//Return null
            echo "Find character 'm': ".strchr($name, 'm')."<br>";
            echo "Find character 'o': ".strchr($name, 'O')."<br>";//case sensitive
            echo "<hr>";
            echo "Length of a string: ".strlen($name).'<br>';
            echo "Without Trim: ".'A'."  B C D  "."E".'<br>';
            echo "Trim spaces on both sides: ".'A'.trim("  B C D  ")."E".'<br>';
            echo "Trim spaces on the left: ".'A'.ltrim("  B C D  ")."E".'<br>';
            echo "Trim spaces on the right: ".'A'.rtrim("  B C D  ")."E".'<br>';
            echo "<hr>";
            echo "Replace string with another string: ".str_replace("stand", "sit", $phrase2).'<br>';
            //str_replace(string_you_want_to_replace, string_replacement, string)
        ?>
<?php
    require 'includes/footer.php';
?>