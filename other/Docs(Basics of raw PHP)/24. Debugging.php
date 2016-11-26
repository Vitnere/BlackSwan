<html<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>Debugging</title>
</head>
<body>

<hr>
<p><b>Ako nema outputa na klijent strani</b></p>
<ul>
    <ol>1.Pokrenuti HTML page i time provjeriti da li je server operativan</ol>
    <ol>2.Napraviti osnovnu PHP stranicu, i pokusati je pokrenuti kako bi se testirao server Koristiti "phpinfo(*);"
        funkciju na ovoj stranici.
    </ol>
    <ol>3.Potvrditi da je error_repporting on i namjesteno</ol>
    <ol>4.Provjeriti Typos, semicolons, zagrade i navodne znakove</ol>
    <ol>5.Provjeriti da li su sve varjable lower case ili camelCase u zavinsoti od stila programiranja</ol>
    <ol>6.Provjeriti = vs == vs ===</ol>
</ul>
<hr>
<p><b>Errors</b></p>
<ul>
    <ol>1.php.ini file<br/>
        - display_errors = On<br/>
        - error_reporting = E_ALL<br/><br/>
    </ol>
    <ol>2.U php kodu<br/>
        - ini_set('display_errors','On');<br/>
        - error_reporting(E_ALL);<br/><br/>
    </ol>
    <ol>*Ostale postavke</ol>
    <img src="http://i.imgur.com/fGBUFMw.jpg" alt="">
    <p>Koristan <a href="http://php.net/manual/en/reserved.constants.php" target="_blank">link</a> o rezervisanim
        kostantama</p>
    <hr>
    <p><b>*Vrste gresaka:</b></p>
    <ul>
        <ol>1.Fatal errors - PHP razumije kod, ali ga ne moze izvrsiti. Najcesce kod zvanja nedefinisanih klasa ili
            funkcija
        </ol>
        <br/>
        <ol>2.Syntax Errors - ne razumije kod, greska u kucanju koda. Cesto prikaz linije na kojoj je greska fula za
            jedan, tj greska je na liniji iznad one koja je prijavljena
        </ol>
        <br/>
        <ol>3.Warnings - PHP nasao je problem, ali je ga je uspio otkloniti. Npr kad se djeli sa nulom.</ol>
        <br/>
        <ol>4.Notices - PHP savjetuje. Cesto je prikaz loseg kodiranja, bagova, zastarjeli kod koji ce uskoro biti
            odbacen
        </ol>
        <br/>
        <ol>*Log o greskama sa moze naci u Xampp control panelu, dokumen php_error.log<br/>
            Kod Apache ta lokacija se nalazi u /etc/apache2/httpd.conf
        </ol>
        <br/>
        <ol>*Provjeriti ove error logove da bi se znalo koje probleme imaju korisnici pri koristenju web app</ol>
    </ul>
</ul>
<hr>
<p><b>Korisne PHP komande pri debuggovanju</b></p>
<ul>
    <ol>1.echo $var; //vrijednost varjable</ol>
    <ol>2.(ova izjava okruzena HTML tag pre) print_r($array); //printa preformatiran arr</ol>
    <ol>3.gettype($variable); //prikazuje tip varjable</ol>
    <ol>4.var_dump($variable); //variable type and value</ol>
    <ol>5.get_defined_vars(); //array of defined variable</ol>
    <ol>6.debug_backtrace(); //show backtrace, log svih odradenih koraka</ol>
</ul>
<hr>
<p> Ispod su primjeri funkcija koje su opisane iznad.Vise info u source codu strane</p><br/>
<hr>
<?php
$number=99;
$string="Bug?";
$array=array(1=>"Homepage",
    2=>"About Us",
    3=>"Services");

var_dump($number);
var_dump($string);
?>
<br/>
<pre>
    <?php var_dump($array); ?>
</pre>
<br/>
		<pre>
		<?php
        //print_r(get_defined_vars()); sve varjable
        ?>
		</pre>

<?php

function say_hello_to($word)
{
    echo "Hello {$word}!<br />";
    ?>
    <pre>
<?php
var_dump(debug_backtrace());//log of functions calls
?>
</pre>
    <?php
}

say_hello_to('Everyone');
?>

</body>
</html>
