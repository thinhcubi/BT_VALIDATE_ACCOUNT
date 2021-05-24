<?php

function checkAccount($str){
    $pattern = '/^[_a-z0-9]{6,}$/';
    if(preg_match($pattern,$str)){
        echo "Tai khoan $str hop le";
    } else {
        echo "Tai khoan $str khong hop le";
    }
}
checkAccount("123bc_");
echo "<br>";
checkAccount("_abc123");
echo "<br>";
checkAccount("______");
echo "<br>";
checkAccount("123456");
echo "<br>";
checkAccount("abcdefg");
echo "<br>";
checkAccount("@");
echo "<br>";
checkAccount("12345");
echo "<br>";
checkAccount("1234_");
echo "<br>";
checkAccount("abcde");
