<?php
include '../db.php';

$queryfirst = "SELECT
product.id as 'id',
product.name as 'name',

COUNT(command.id_product) as total,
command.statut as 'statut',
command.id_product,
command.quantity as 'quantity'

FROM product, command
WHERE product.id = command.id_product AND command.statut = 'paid'";
$resultfirst = $connection->query($queryfirst);
if ($resultfirst->num_rows > 0) {
  // output data of each row
  while($rowfirst = $resultfirst->fetch_assoc()) {
        $name = $rowfirst['name'];
        $total = $rowfirst['total'];

    ?>
     <h5><?php echo "$name" . " : " . "$total"; ?></h5>
     <?php }} ?>
