<?php
$str='';
for($i=0;$i<=9;$i++){
    for($f=8-$i;$f>=0;$f--){
        $str.='<span>&ensp;</span>';
    }
    for($j=0;$j<=$i;$j++) {
        $str.=$i;
    }
    echo $str."<br>";
    $str='';
}

?>