<?php
/*vrijednost cookija koja ide useru, zato dvaput refresh
kod promjene stanja cookia. Nema sinc izmedu odlazne i
dolazne komunikacije po pitanju cookija izmedu servera
i klijenta.*/

// REMEMBER: Setting cookies must be before *any* HTML output
//           unless output buffering is turned on.
$name="test";
$value=236;
$expire=time() + (60 * 60 * 24 * 7); // add seconds
setcookie($name, $value, $expire);

// Three ways to unset cookies:
// 1. setcookie($name);
// 2. setcookie($name, null, $expire);
// 3. setcookie($name, $value, time() - 3600);

// Kevin's recommendation for unsetting:
//setcookie($name, null, time() - 3600);

/*kod promjene stanja cookia dvaput uraditi refresh*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>Cookies</title>
</head>
<body>

<?php
/*vrijednost cookija koja dolazi od usera*/
$test=isset($_COOKIE["test"]) ? $_COOKIE["test"] :"";

echo $test;
?>

</body>
</html>
