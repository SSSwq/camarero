<?php
$connect1 = mysqli_connect('192.168.1.142', 'root', '', 'camarero');
?>

<?php
$whl1 = mysqli_query($connect1,"SELECT * FROM 'guest_001'");
while ($whl2 = mysqli_fetch_assoc($whl1))
{
    $dish_now = mysqli_query($connect1,"SELECT 'dish' FROM 'hall_anview' WHERE 'id' = $whl2[id]");
    echo $dish_now . '              ' . whl2[numbers];
    echo '<hr/>';
}