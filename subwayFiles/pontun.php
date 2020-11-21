<!DOCTYPE html>
<HTML lang="is">
   <HEAD>
      <TITLE>Pöntunin þín</TITLE>
	  <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="style.css" />
   </HEAD>
<BODY>
    <texti>
<center>
    <h1>Pöntunin þín:</h1>
</center></texti>

    <?php
//bátastærð
    //GET bátur hérna til þess að fá rétta málfræði í litla bátnum
$batur = $_GET['batur'];

$staerd = $_GET['staerd'];
echo "<texti><center>";
echo "<div class='takki'>";
echo "<h2>Báturinn:</h2>";
if ($staerd == "litill" and $batur == "Granmetissala"){echo "<texti>Lítil ";}
elseif ($staerd == "litill"){echo "Lítill ";}
elseif ($staerd == "stor"){echo "Stór ";}

//bátagerð

if ($batur == 'Granmetissala'){echo "grænmetissæla ";}
if ($batur == 'Granmetisbuff'){echo "grænmetisbuff bátur ";}
if ($batur == 'Buffalo_kjuklingur'){echo "buffaló kjúklingabátur ";}
if ($batur == 'Rifid_grisakjot'){echo "rifið grísakjötsbátur ";}
if ($batur == 'Steik_og_ostur'){echo "steik og ostsbátur ";}
if ($batur == 'Kalkunn'){echo "kalkúnabátur ";}
if ($batur == 'Grillud_kjuklingabringa'){echo "grillaður kjúklingabringubátur ";}
if ($batur == 'Pizzabátur'){echo "pizzabátur ";}
if ($batur == 'Kalkunn_og_skinka'){echo "kalkúnn og skinkubátur ";}
if ($batur == 'BMT'){echo "Ítalskur B.M.T. ";}
if ($batur == 'Sterkur_italskur'){echo "sterkur ítalskur ";}
if ($batur == 'Skinkubatur'){echo "skinkubátur ";}
if ($batur == 'Hageldud_kjuklingabringa'){echo "hægelduð kjúklingabringubátur ";}
if ($batur == 'Bradingur'){echo "bræðingur ";}
if ($batur == 'Teriyaki_kjuklingur'){echo "teriyaki kjúklingabátur ";}
if ($batur == 'BLT'){echo "BLT ";}
if ($batur == 'Tunfisksalats'){echo "túnfisksalatsbátur ";}

//aukadót GET

if(isset($_GET["aukadot_1"]))
    $aukadot_1 = $_GET["aukadot_1"];

if(isset($_GET["aukadot_2"]))
    $aukadot_2 = $_GET["aukadot_2"];

if(isset($_GET["aukadot_3"]))
    $aukadot_3 = $_GET["aukadot_3"];

if(isset($_GET["aukadot_4"]))
    $aukadot_4 = $_GET["aukadot_4"];

if(isset($_GET["aukadot_5"]))
    $aukadot_5 = $_GET["aukadot_5"];

    //aukadot echo

if ($aukadot_1 == 'auka ostur' or $aukadot_2 == 'auka beikon' or $aukadot_3 == 'auka kjot' or $aukadot_4 == 'auka kjuklingur' or $aukadot_5 == 'auka granmetisbuff'){
    echo "með ";}

if ($aukadot_1 == 'auka ostur'){
    echo "auka ost";
    if ($aukadot_2 == 'auka beikon' or $aukadot_3 == 'auka kjot' or $aukadot_4 == 'auka kjuklingur' or $aukadot_5 == 'auka granmetisbuff'){
    echo ", ";}}

if ($aukadot_2 == 'auka beikon'){echo "auka beikoni";
    if ($aukadot_3 == 'auka kjot' or $aukadot_4 == 'auka kjuklingur' or $aukadot_5 == 'auka granmetisbuff'){
    echo ", ";}}

if ($aukadot_3 == 'auka kjot'){echo "auka kjöti";
    if ($aukadot_4 == 'auka kjuklingur' or $aukadot_5 == 'auka granmetisbuff'){
    echo ", ";}}

if ($aukadot_4 == 'auka kjuklingur'){echo "auka kjúkling";
    if ($aukadot_5 == 'auka granmetisbuff'){
    echo " og ";}}

if ($aukadot_5 == 'auka granmetisbuff'){echo "auka grænmetisbuffi";}

//grænmeti GET

echo "<h2>Grænmeti:</h2>";

if(isset($_GET["veggies_1"]))
    $veggies1 = $_GET["veggies_1"];

if(isset($_GET["veggies_2"]))
    $veggies2 = $_GET["veggies_2"];

if(isset($_GET["veggies_3"]))
    $veggies3 = $_GET["veggies_3"];

if(isset($_GET["veggies_4"]))
    $veggies4 = $_GET["veggies_4"];

if(isset($_GET["veggies_5"]))
    $veggies5 = $_GET["veggies_5"];

if(isset($_GET["veggies_6"]))
    $veggies6 = $_GET["veggies_6"];

if(isset($_GET["veggies_7"]))
    $veggies7 = $_GET["veggies_7"];

if(isset($_GET["veggies_8"]))
    $veggies8 = $_GET["veggies_8"];

if(isset($_GET["veggies_9"]))
    $veggies9 = $_GET["veggies_9"];

if(isset($_GET["veggies_10"]))
    $veggies10 = $_GET["veggies_10"];

    //grænmeti echo

if ($veggies1 == 'tomatar'){
    echo "Tómatar<br />";}

if ($veggies2 == 'gurka'){
    echo "Gúrga<br />";}

if ($veggies3 == 'kal'){
    echo "Kál<br />";}

if ($veggies4 == 'spinat'){
    echo "Spínat<br />";}

if ($veggies5 == 'laukur'){
    echo "Laukur<br />";}

if ($veggies6 == 'paprika'){
    echo "Paprika<br />";}

if ($veggies7 == 'jalapeno'){
    echo "Jalapeño<br />";}

if ($veggies8 == 'gular'){
    echo "Gular baunir<br />";}

if ($veggies9 == 'bananapipar'){
    echo "Bananapipar<br />";}

if ($veggies10 == 'surar'){
    echo "Súrar gúrkur<br />";}

    //sósur GET

echo "<h2>Sósur:</h2>";

if(isset($_GET["sosa_1"]))
    $sosa1 = $_GET["sosa_1"];

if(isset($_GET["sosa_2"]))
    $sosa2 = $_GET["sosa_2"];

if(isset($_GET["sosa_3"]))
    $sosa3 = $_GET["sosa_3"];

if(isset($_GET["sosa_4"]))
    $sosa4 = $_GET["sosa_4"];

if(isset($_GET["sosa_5"]))
    $sosa5 = $_GET["sosa_5"];

if(isset($_GET["sosa_6"]))
    $sosa6 = $_GET["sosa_6"];

if(isset($_GET["sosa_7"]))
    $sosa7 = $_GET["sosa_7"];

if(isset($_GET["sosa_8"]))
    $sosa8 = $_GET["sosa_8"];

if(isset($_GET["sosa_9"]))
    $sosa9 = $_GET["sosa_9"];

if(isset($_GET["sosa_10"]))
    $sosa10 = $_GET["sosa_10"];

if(isset($_GET["sosa_11"]))
    $sosa11 = $_GET["sosa_11"];

if(isset($_GET["sosa_12"]))
    $sosa12 = $_GET["sosa_12"];

if(isset($_GET["sosa_13"]))
    $sosa13 = $_GET["sosa_13"];

if(isset($_GET["sosa_14"]))
    $sosa14 = $_GET["sosa_14"];

if(isset($_GET["sosa_15"]))
    $sosa15 = $_GET["sosa_15"];

    //sósur echo

if ($sosa1 == 'hunangssinep'){
    echo "Hunangssinnep<br />";}

if ($sosa2 == 'lett_mayo'){
    echo "Létt majónes<br />";}

if ($sosa3 == 'sterk_buffalo'){
    echo "Sterk buffalósósa<br />";}

if ($sosa4 == 'vegan_mayo'){
    echo "Vegan majónes<br />";}

if ($sosa5 == 'satt_sinnep'){
    echo "Sætt sinnep<br />";}

if ($sosa6 == 'satlauksosa'){
    echo "Sætlauksósa<br />";}

if ($sosa7 == 'raudvinsedik'){
    echo "Rauðvínsedik<br />";}

if ($sosa8 == 'chil_mayo'){
    echo "Chilly majónes<br />";}

if ($sosa9 == 'sterkt_sinnep'){
    echo "Sterkt sinnep<br />";}

if ($sosa10 == 'bbq'){
    echo "BBQ sósa<br />";}

if ($sosa11 == 'olifuolia'){
    echo "Ólífuolía<br />";}

if ($sosa12 == 'bernaise'){
    echo "Bernessósa<br />";}

if ($sosa13 == 'ostasosa'){
    echo "Ostasósa<br />";}

if ($sosa14 == 'pizzasosa'){
    echo "Pizzasósa<br />";}

if ($sosa15 == 'southwest'){
    echo "Southwest sósa<br />";}
echo "</div>";
echo "</center></texti>";
echo "</br>";
    ?>

<!--Hérna fyrir neðan kemur mail dótið-->
    <?php

    // Program to display URL of current page.

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $link = "https";
    else
        $link = "http";

    // Here append the common URL characters.
    $link .= "://";

    // Append the host(domain name, ip) to the URL.
    $link .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
    $link .= $_SERVER['REQUEST_URI'];
    ?>

    <div class'takki'>;
    <form action = 'linkshortener.php' method = 'get'>
    <center>
            <button href="linkshortener.php" class="button" input type="submit" name="linkur" value = <?php $link ?> >
                    <h2>Smelltu hér til að stytta slóðina</h2>
                </button>
    </center>
    </form>
    </div>"


</BODY>
</HTML>

