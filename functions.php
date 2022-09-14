<?php
    $title = "Functions";
    include 'includes/header.php';
?>
        <h1><?php echo $title?></h1>
        <?php
            function writeMessage() {
                echo "You are really a nice person, have a nice time.<br>";
            }
            writeMessage();
            
            function addNum($num1, $num2) {
                $sum = $num1 + $num2;
                echo "The sum of $num1 and $num2 is $sum. <br>";
            }
            addNum(3, 7);

            //Pass by reference
            function changeNum(&$num){
                $num = $num + 10;
            }
            $num = 500;
            addNum(3, $num);
            addNum("10","30");
                        
            changeNum($num);
            echo $num."<br>";

            function returnProduct($num1, $num2) {
                return ($num1 * $num2);
            }
            $product = returnProduct(3, 7);
            echo $product."<br";
        ?>
<?php
    require 'includes/footer.php';
?>