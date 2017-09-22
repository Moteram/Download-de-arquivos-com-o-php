<?php
/**
 * Created by PhpStorm.
 * User: Cristiano.Moteram
 * Date: 25/05/2017
 * Time: 11:37
 */
?>
<ul>
<?php

foreach (glob("uploads/*.*") as $v){

	$name = basename($v);

	echo "<li><a href='baixar.php?file=$name'>".$name."</a></li>";

}

?>

</ul>
