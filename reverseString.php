<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse String</title>
</head>
<body>
    <form action="" method="POST">
        <label for="insert">Enter String:</label>
        <input type="text" name="insert" placeholder="">
        <input type="submit" value="Reverse" name="rev">
    </form>
</body>
</html>

<?php
    if(isset($_POST['rev'])) {
        $str = $_POST['insert'];
        function rev_str($str){
            $len = strlen($str);
            if($len == 0)
                echo "You have not enter anything to reverse.";
            elseif($str == " "){
                echo "You have not enter anything to reverse.";
            }
            else{
                $len = strlen($str);                
                if($len == 1){
                    echo $str;
                }
                else{
                    for($i=$len-1;$i>=0;$i--){
                        echo $str[$i];
                    }
                }
            }
        }
        rev_str($str);
    }
?>