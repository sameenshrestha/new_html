<?php
if(isset($_POST['num1']) && isset($_POST['num2']))
{
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$sum = $num1 + $num2;
echo "Here is the number =>" .$sum;
}else{
    echo"Please go back and fill the form";
}

?>