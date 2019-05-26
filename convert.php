<!DOCTYPE html>
<html>
<body>

<?php
// $s = '1.NAME : ANKIT KUMAR SAH 2.ACCOUNT NUMBER: 7847390284 3. ADDRESS : Hz 288 SAGARPUR NEW DELHI 4. COLLEGE NAME: NSIT';


// print_r(str_word_count($s,1));

// echo ucwords("HELLO WORLD ANKIT");

$lines = file("file.json");
echo '<br>';
$str = '{'.PHP_EOL;
for($k = 1; $k < count($lines); $k++){
    $key = '';
    $value = '';
    for($i = 0; $i < strlen($lines[$k]); $i++){
        if($lines[$k][$i] != ':'){
            $key .= $lines[$k][$i];
        }
        else{
            $i++;
            break;
        }
    }
    $count = str_word_count($key);
    $key = str_word_count($key,1);
    $str .= '    "';

    for($j = 0; $j < $count; $j++){
        $key[$j] = strtolower($key[$j]);
        $key[$j] = ucfirst($key[$j]);
        $str .= $key[$j];
        //echo $key1[$j].'<br>';
    }
    $str .= '" : "';
    for(; $i < strlen($lines[$k]); $i++){
        if($lines[$k][$i] != ' '){
            break;
        }
    }

    for(; $i < strlen($lines[$k])-1; $i++){
        echo $lines[$k][$i];
        $str .= $lines[$k][$i];
    }

    $str .= '",'.PHP_EOL;
 }
 $str .= '    "EndOfFile" : "True"'.PHP_EOL.'}';
 //echo $str.'<br>';
 file_put_contents('data.json',$str);
 header('location:data.json');
?>

</body>
</html>