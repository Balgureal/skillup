
<h1>hello world</h1>

<?php

$currentDate = time();
$yesterday = $currentDate - 60 * 60 * 24;
echo $currentDate . "<br />";
echo date('d.m.Y.H.i.S') . '<br />';
echo date('d.m.Y.H.i.S', $yesterday);

require_once 'template.php';
?>

<p>dfgdfg  <?= $currentDate ?></p>

