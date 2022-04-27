<?php 
function titleManager($product_name)
{
$string = strip_tags($product_name);
if (strlen($string) > 50) {
$stringCut = substr($string, 0, 50);
$endPoint = strrpos($stringCut, ' ');
$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
$string .= '...';
}
echo $string;
}
?>