<?php
include ('db.php');
$prov = mysqli_query($connect1,"SELECT * FROM `guest_001` WHERE id=1");
$prov1 = mysqli_fetch_assoc($prov);
echo $prov1;
if ($prov1 == false)
{
    mysqli_query($connect1,"INSERT INTO `guest_001` (id,dish,numbers,price) VALUES ('1','Mushroom soup','1','1400')");
}
else {
    mysqli_query($connect1,"UPDATE `guest_001` SET numbers=2 WHERE id=1");
}