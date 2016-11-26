<?php
	include("28. included_functions.php");
	include("28. included_header.php");
?>
	The header has been included.
	<br />
	<?php echo hello("Everyone"); ?><br />
<img src="http://i.imgur.com/hs1VDZ7.jpg" alt="">

<p><b>Razlika izmedu include() i require() je ako include ne trazi definisani fajl
    nastavice dalje sa izvrsavanjem stranice. require ako ne nade trazeni php stranicu
    izbacice fatal error.</b></p>
	</body>
</html>
