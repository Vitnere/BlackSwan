<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>Arrays</title>
</head>
<body>
<?php

$numbers=array(4, 8, 15, 16, 23, 42);/*arr init*/
echo $numbers[0];/*echo po indexu u arr*/
?>
<br/>

<?php $mixed=array(6, "fox", "dog", array("x", "y", "z")); ?>
<?php echo $mixed[2]; ?><br/>
<?php //echo $mixed[3]; ?><br/>
<?php //echo $mixed ?><br/>

<?php echo $mixed[3][1]; ?><br/><!--arr u arr, prvo indeks nesstovane arr, onda zeljeni ideks elementa u toj arr-->

<?php $mixed[2]="cat"; ?><!--dodavanje vrijednosti u arr-->
<?php $mixed[4]="mouse"; ?>
<?php $mixed[]="horse"; ?>

<pre>
		<?php echo print_r($mixed); ?><!--koristi se za debuggovanje arrays, i ne smije ici ovo useru-->
		</pre>

<?php
//PHP 5.4 added the short array syntax.
$array=[1, 2, 3];
?>



</body>
</html>
