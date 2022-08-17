<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>
<body>
    <form action="" method="POST">
        <label for="insert">Enter a positive number:</label>
        <input type="number" name="insert" placeholder="">
        <input type="submit" value="Print" name="print">
    </form>
</body>
</html>

<?php
    if(isset($_POST['print'])) {
        $num = $_POST['insert'];
        $num1 = intval($num);
        function fib_series_upto($num1){
            if($num1 == 0)
                echo "0";
            else{
                $a = 0;
                $b = 1;
                $c = $a + $b;
                echo "$a $b";
                while($c<=$num1){
                    echo "$c";
                    $a = $b;
                    $b = $c;
                    $c = $a + $b;
                }
            }
        }
        fib_series_upto($num1);
    }
?>