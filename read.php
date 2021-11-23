<?php
date_default_timezone_set("Europe/Helsinki");

// 1: Hae lomakkeelta tulevat tiedot vaikka muuttujiin
$nimi = $_POST['Name'];
$email = $_POST['Email'];
$palaute = $_POST['Feedback'];
$aika = date('h:i a', time());




// 2. Tallenna tiedot XML -tiedostoon
$xml = simplexml_load_file("palaute.xml");
$uusiPalaute = $xml->addChild("palaute");
$uusiPalaute->addChild("nimi", $nimi);
$uusiPalaute->addChild("sposti", $email);
$uusiPalaute->addChild("teksti", $palaute);
$uusiPalaute->addChild("aika", $aika);

$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save("palaute.xml");

header('Location: main.html');
?>
// 3. ...?
<?php
$var = 'Metallica';
?>
<script>
   <?php
       echo "var jsvar ='$var';";
   ?>
   console.log(jsvar); 
</script>
