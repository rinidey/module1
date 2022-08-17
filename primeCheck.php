<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Prime Number</title>
</head>
<body>
    <form action="" method="POST">
        <label for="insert">Enter a number:</label>
        <input type="number" name="insert" placeholder="">
        <input type="submit" value="Check Prime" name="check">
    </form>
</body>
</html>

<?php
    if(isset($_POST['check'])) {
        $num = $_POST['insert'];
        $num1 = intval($num);
        function check_prime($num1){
            if($num1 == 1)
                return 0;
            for($i=2;$i<=$num1/2;$i++)
            {
                if($num1%$i == 0)
                    return 0;
            }
            return 1;
        }
        $flag = check_prime($num1);

        if($flag == 1)
            echo "It is a prime number";
        else
            echo "It is not a prime number";
    }
?>
