<html>
<body>
<?php
function suma($edat, $i){
    return $edat +$i;
}
echo 'Hola' . $_POST['nom']; echo '<br>';
echo 'Tens ' . (int)$_POST['edat'] . ' anys.';
$edat = $_POST['edat'];

$i=1;
while ($i <= 10){
    $edatFutura = suma($edat, $i);
    if ($i===1){
        echo "<br>En <b>$i</b> any tindràs " . "<b>$edatFutura</b>" . ' anys';
    } else{
        echo "<br>En <b>$i</b> anys tindràs " . "<b>$edatFutura</b>" . ' anys';
    }
    $i++;
}
?>
</body>
</html>
