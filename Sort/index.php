<?php
<?php
$arr=[
    'page51.php',
    'page4000.php',
    'page9.php'
];
$str='';
$arr2=array();
foreach($arr as $key=>$value){
    foreach(str_split($value) as $a){
        if ($a>='0' && $a<='9'){
            $str.=$a;
        }
    }
    settype($str,"integer");
    $arr2[$str]=$value;
    $str='';
}
ksort($arr2);
foreach($arr2 as $value){
    echo $value."<br>";
}
?>