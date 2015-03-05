<?
$colors = array('black', 'fuchsia','teal','silver','green','aqua','gray','lime','white','olive','maroon','yellow','red','navy','purple','blue');

?>

<table cellspacing=5px>
<?
foreach($colors as $color) {
	echo "<tr><td align=right>".$color."</td><td width=100px style='background-color:".$color." !important;'></td></tr>";

}
?>

</table>
