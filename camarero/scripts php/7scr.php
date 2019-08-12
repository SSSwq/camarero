<?php
include ('db.php');
$prov = mysqli_query($connect1,"SELECT * FROM `guest_001` WHERE id=7");
$prov1 = mysqli_fetch_assoc($prov);
echo $prov1;
if ($prov1 == false)
{
    mysqli_query($connect1,"INSERT INTO `guest_001` (id,dish,numbers,price) VALUES ('7','Salmon','1','600')");
}
else {
    mysqli_query($connect1,"UPDATE `guest_001` SET numbers=2 WHERE id=7");
}