<?php
$img1;
function  nombreImgUno() {
    trim($img1 = $tag->item(rand(0, 10))->textContent);
}

function nombreImgDos() {
    $img2 = $tag->item(rand(0, 10))->textContent;
    return $img2;
}

$directorio = "http://stokpic.com/wp-content/uploads/2015/08/";
$doc = new DOMDocument();
libxml_use_internal_errors(true);
$doc->loadHTML(file_get_contents($directorio));
$tag = $doc->getElementsByTagName('a');

if (isset($_REQUEST['votaUno'])) {
    
} elseif (isset($_REQUEST['votaUno'])) {
    
} else {
       
    echo "<script language=\"JavaScript\" type=\"text/javascript\">$(\"#imgUno\").attr(\"src\",\"" . $directorio . trim($tag->item(rand(0, 20))->textContent) . "\").attr({'height': 300, 'width': 400});</script>";
    echo "<script language=\"JavaScript\" type=\"text/javascript\">$(\"#imgDos\").attr(\"src\",\"" . $directorio . trim($tag->item(rand(20, 40))->textContent) . "\").attr({'height': 300, 'width': 400});</script>";
}

