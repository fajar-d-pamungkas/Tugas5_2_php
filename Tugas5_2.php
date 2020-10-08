<?php

$input11 = "Ayo";
$input12 = "Belajar";
$input21 = "Bersama";
$input22 = "Niomic";

$gabung1 = $input11." ".$input12;
$gabung2 = $input21." ".$input22;

echo "<h1>Operator String</h1>";

?>
<table border=1>
    <tr>
        <td>Input 1</td>
        <td>Input 2</td>
        <td>Hasil</td>
    </tr>
    <tr>
        <td><?php print_r($input11)?></td>
        <td><?php print_r($input12)?></td>
        <td><?php print_r($gabung1)?></td>
    </tr>
    <tr>
      <td><?php print_r($input21)?></td>
      <td><?php print_r($input22)?></td>
      <td><?php print_r($gabung2)?></td>
    </tr>
</table>
<?php echo "<br> Gabungan : ".$gabung1." ".$gabung2;
