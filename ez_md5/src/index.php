<?php
include "flag.php";
$md5_1=$_GET['jiangsir1'];
$md5_2=$_POST['jiangsir2'];
$md5_3=$_POST['jiangsir3'];
$md5_4=$_POST['jiangsir4'];
$md5_5=$_POST['jiangsir5'];
if($md5_1 == 0&&!is_numeric($md5_1)&&!is_numeric($md5_2)&&md5($md5_2) == 0e1615313413546846894351431658416514351635153513216354168549846453134684354135212)
{
    if($md5_3==md5($md5_3)){
        if(md5($md5_4)==md5($md5_5) & $md5_4 != $md5_5)
        {
        echo $flag;
        }
        else{
            echo "jiangsir会告诉你快了块了";
        } 
    }
    else{
        echo "jiangsir一定会告诉你不xing的";
    }
}
else
{
    echo "jiangsir会告诉你nononono没学明白";
}
?>