<?php

$s = $_POST['data'];
//echo $s;
echo str_replace(PHP_EOL," ",$s,$num);
echo $num;
file_put_contents('./test.json',$s);
$output = '';
$file = "./test.json";
$i = 0;
$j = 1;
//is_numeric($char)
while($i < strlen($s)){
    if($s[$i] == $j && $s[$i+1] == '.'){
        $output = $output.PHP_EOL;
        $j++;
        $i = $i+2;
    }
    $output = $output.$s[$i];
    $i++;
}

$output .= PHP_EOL;

//echo $output;


file_put_contents($file,$output);
file_put_contents('file.json',
    preg_replace(
        '/\R+/',
        "\n",
        file_get_contents('test.json')
    )
);

//header('location:convert.php');
header('location:test.json')
?>