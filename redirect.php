<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$buscas=require 'buscas.php';
$q=@$_GET['q'];
$q=trim($q);
$q=urlencode($q);
$key=@$_GET['key'];
$removerDiacriticos=function($str){
    $table = array(//https://stackoverflow.com/a/3635581
    ' '=>'-', 'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj', 'Ž'=>'Z', 'ž'=>'z', 'C'=>'C', 'c'=>'c', 'C'=>'C', 'c'=>'c',
    'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
    'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
    'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
    'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
    'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
    'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
    'ÿ'=>'y', 'R'=>'R', 'r'=>'r', "'"=>'-', '"'=>'-'
    );
    //return strtr($str, $table);
    //https://stackoverflow.com/a/18669045
    return preg_replace('/&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml|caron);/i','$1',htmlentities($str));
};

if(isset($buscas[$key])){
    //https://www.php.net/manual/pt_BR/function.str-replace.php
    $str=$buscas[$key];
    if($key=='mercado livre'){
        $q=str_replace('+','-',$q);
        $q=urldecode($q);
        $q=$removerDiacriticos($q);
        //die($q);
    }
    if(
    $key=='tpb'
    ){
        $q=urldecode($q);
    }
    if(
    $key=='informal'
    ){
        $q=urldecode($q);
        $q=str_replace(" ","-",$q);
        $q=urlencode($q);
    }    
    $str=str_replace("%s",$q,$str);
    header('Location: '.$str);
}else{
    print '404';
}
?>
