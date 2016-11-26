<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>NULL</title>
</head>
<body>
<!--Notice su drugacije nego warning u PHP.
U ovom slucaju notice iskace jer nije proglasena
varjabla koja se prikazuje na liniji 18-->
<?php
$var1=null;/*nista, prazno, nema vrijednost*/
$var2="";/*prazna varjabla*/
?>
var1 null? <?php echo is_null($var1); ?><br/><!--da li je null-->
var2 null? <?php echo is_null($var2); ?><br/>
var3 null? <?php echo is_null($var3); ?><br/>
<br/>
var1 is set? <?php echo isset($var1); ?><br/><!--da li je setovana?-->
var2 is set? <?php echo isset($var2); ?><br/>
var3 is set? <?php echo isset($var3); ?><br/>
<br/>

<?php // empty: "", null, 0, 0.0, "0", false, array()
//iznad su stvari koje se stvaraju praznima u PHP
//  ?>

<?php $var3="0"; ?>
var1 empty? <?php echo empty($var1); ?><br/><!--da li je prazno?-->
var2 empty? <?php echo empty($var2); ?><br/>
var3 empty? <?php echo empty($var3); ?><br/>

</body>
</html>
