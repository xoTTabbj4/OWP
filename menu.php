<?php
$menu_item = array("<a href=\"index.php\">Головна</a>", "<a href=\"university.php\">Університет</a>", "<a href=\"subjects.php\">Навчальний план</a>", "<a href=\"aboutme.php\">Про мене</a>");
shuffle($menu_item);
foreach ($menu_item as $menu){
    echo "$menu ";
}
?>
<?php
<<<<<<< HEAD
echo "<b class='color'>"."Час і дата: ".date('d.m.Y H.i')."</b>"; //Жирний текст
echo "<b class='color'>"."IP: ".$_SERVER['REMOTE_ADDR']."</b>";
?>
=======
echo "<flex class='color'>"."Час і дата: ".date('d.m.Y H.i')."</flex>";
echo "<flex class='color'>"."IP: ".$_SERVER['REMOTE_ADDR']."</flex>";
?>
>>>>>>> ffd8698a5e2d3099a48d4ad5f19c98f502a1ef89
