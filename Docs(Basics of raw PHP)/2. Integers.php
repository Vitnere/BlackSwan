<?php
/**
 * Created by PhpStorm.
 * User: Vitnere
 * Date: 03-Nov-16
 * Time: 12:18 PM
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>untitled</title>
</head>
<body>
<?php
$var1=3;
$var2=4;
?>
Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br/>

<br/>
Absolute value: <?php echo abs(0 - 300); ?><br/>
Exponential: <?php echo pow(2, 8); ?><br/>
Square root: <?php echo sqrt(100); ?><br/>
Modulo:<!--ostatak pri djeljenju--> <?php echo fmod(20, 7); ?><br/>
Random: <?php echo rand(); ?><br/>
Random (min,max): <?php echo rand(1, 10); ?><br/>
<br/>
+= : <?php $var2+=4;/*x = var2+4*/
echo $var2; ?><br/>
-= : <?php $var2-=4;/*x-4=y*/
echo $var2; ?><br/>
*= : <?php $var2*=3;/*y*3=z*/
echo $var2; ?><br/>
/= : <?php $var2/=4;/*t=z/4*/
echo $var2; ?><br/>
<br/>
Increment: <?php $var2++;/*+1*/
echo $var2; ?><br/>
Decrement: <?php $var2--;/*-1*/
echo $var2; ?><br/>
<br/>
<?php
// PHP will convert a string to an integer
// but it is sloppy programming
echo 1 + "2 houses";
?>
</body>
</html>

