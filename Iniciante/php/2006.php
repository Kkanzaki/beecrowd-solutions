<?php
$tea = trim(fgets(STDIN));
$guess = trim(fgets(STDIN));
$glist = explode(" ",$guess);
$j = 0;
for($i = 0;$i < count($glist);$i++){
    if($glist[$i] === $tea){
        $j++;
    }
}
echo "$j\n";
?>