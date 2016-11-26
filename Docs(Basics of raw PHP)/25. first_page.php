<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>First Page</title>
</head>
<body>

<?php $link_name = "Second Page"; ?>
<?php $id = 5; ?>
<?php $company = "Johnson & Johnson"; ?>

<a href="25. second_page.php?id=<?php echo $id; ?>&company=<?php echo rawurlencode($company); ?>"><?php echo $link_name; ?></a>

<p>Reserve Charachters in URLs</p>
<img src="http://i.imgur.com/fdqaDO3.jpg" alt="">

<p>funkcija urlencode - konvertuje URL u serveru citljiv oblik</p>
<img src="http://i.imgur.com/MepRXlB.jpg" alt="">

<p>rawurlencode</p>
<img src="http://i.imgur.com/CWcx4Td.jpg" alt="">
<br />
<img src="http://i.imgur.com/krrad6Y.jpg" alt="">
</body>
</html>

