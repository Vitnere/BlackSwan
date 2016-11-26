<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>Associative Arrays</title>
</head>
<body>
<!--obicne arr gdje je red podataka vazan pa
 se sa tim u vidu koriste indeksi

 associtave arr se koriste gdje taj red nije vazan
 i kao kljuc/label se koristi proizvoljan naziv

 P.S: Associative arr se ne moze deklarisati sa
 indeksom kao na liniji 24-->

<?php $assoc=array("first_name"=>"Kevin", "last_name"=>"Skoglund"); ?>
<?php echo $assoc["first_name"]; ?><br/>
<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br/>

<?php $assoc["first_name"]="Larry"; ?>
<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br/>

<?php // echo $assoc[0]; ?><br/>

<?php $numbers=array(4, 8, 15, 16, 23, 42); ?>
<?php $numbers=array(0=>4, 1=>8, 2=>15, 3=>16, 4=>23, 5=>42); ?>
<?php echo $numbers[0]; ?>

</body>
</html>
