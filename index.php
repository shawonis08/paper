<?php
include('simple_html_dom.php');
$html = new simple_html_dom();
$html->load_file('http://www.jugantor.com/');
$place = $html->find('div[class=topLead]',0);
$v = $place->find('h2 a',0);
#$v1=$v->innertext;
echo $v;
?>