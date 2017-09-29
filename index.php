<?php

for($i=0;$i<=9;$i++){
    for($f=8-$i;$f>=0;$f--){
        echo '<span>&ensp;</span>';
    }
    for($j=0;$j<=$i;$j++) {
        echo $i;
    }
    echo "<br>";
    $str='';
}

?>