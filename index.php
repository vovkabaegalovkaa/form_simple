<?php
$out = '';
if(isset($_POST['C'])){
    $c = string_secure($_POST['C']);
}
if(isset($_POST['F'])){
    $f = string_secure($_POST['F']);
}
if(is_numeric($c)){
    $f = round(($c * 9 / 5)+32, 1);
    $out = "$c градусов по Цельсию составляет $f градусов по Фаренгейту";
}
elseif(is_numeric($f)){
    $c = round(($f-32) * 5 / 9, 1);
    $out = "$f градусов по Фаренгейту составляет $c градусов по Цельсию";
}
echo<<<_END
<html>
    <head>
        <title>Little project</title>
    </head>
    <body>
        $out
        <form method='post' action='index.php'>
        Темепература в градусах по Цельсию:<input type='text' name='C'><br>
        Темепература в градусах по Фаренгейту:<input type='text' name='F'><br>
        <input type='submit'>
        </form>
    </body>
</html>
_END;
function string_secure($str){
    $str = htmlentities($str);
    return $str;
}