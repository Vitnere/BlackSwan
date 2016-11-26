<?php
header("HTTP 1.1/ 404 Not Found");
header("X-Powered-By: Darth Vader");
?>
<!--iznad kako modifikovati http header kako drugi ne bi vidjeli koju verziju
PHP koristim. Sigurnosni korak.-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>Headers</title>
</head>
<body>

<?php
// This won't work... unless you have output
// buffering turned on.
// header("HTTP 1.1/ 404 Not Found");
?>

<pre>
			<?php
            print_r(headers_list());
            ?>
		</pre>
<p><b>Super duper important. Header funkcija MORA ici na prvi red u dokumentu</b></p>
<img src="http://i.imgur.com/tz4C4Ze.jpg" alt="">
</body>
</html>
