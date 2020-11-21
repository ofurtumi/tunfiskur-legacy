

<!DOCTYPE html>
<html lang="is">
    <head>
        <title>subway Generator</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <!---->
        <style></style>
        <!---->
    </head>
    <body>
            <nav>
                <div class="nav-bg"></div>
                    <ul>
                        <li><a href="/verkefni%201/index.html">Verkefni 1</a></li>
                        <li><a href="/verkefni%202/andlit.html">Andlit</a></li>
                        <li><a href="/subwayFiles/subway.php?">Subway</a></li>
                        <li><a href="/index.html">Heim</a></li>
                    </ul>
            </nav>
        <center>
            <h1>
                <texti>Matarvenjur:</texti>
            </h1><!--skiptir ekki máli rn nema þú gerir random bát, finna not fyrir þetta, stroka út það em þarf ekki-->

            <br />

            <form action="subway.php" method="get">
                <button href="subway.php" class="button" input type="submit" name="matarvenjur" value="Vegan">
                    <h2>Vegan</h2>
                </button>
                <button href="subway.php" class="button" input type="submit" name="matarvenjur" value="Grænmetisæta">
                    <h2>Grænmetisæta</h2>
                </button>
                <button href="subway.php" class="button" input type="submit" name="matarvenjur" value="Allt">
                    <h2>Allt</h2>
                </button>
                <br />
                <button href="random.php" class="button" input type="submit" name="matarvenjur" value="v_random">
                    <h2>Vegan random</h2>
                </button>
                <button href="random.php" class="button" input type="submit" name="matarvenjur" value="g_random">
                    <h2>Grænmetis random</h2>
                </button>
                <button href="random.php" class="button" input type="submit" name="matarvenjur" value="random">
                    <h2>Alveg random</h2>
                </button>
                <br />
                <br />
            </form>
            <?php
            $html_allt = '
<table style="width:100%">
    <tr>
        <td style="width:45%"> </td>
        <td>
<form action="pontun.php" method="get">
    <texti>
<div class="takki">
<h2><center>Stærð báts:</center></h2>
    <label class="container" id="a"><div class="c">Lítill, 6"</div>
		<input type="radio" name="staerd" value="litill" />
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a"><div class="c">Stór, 12"</div>
		<input type="radio" name="staerd" value="stor" />
        <span class="checkmark" id="a"></span>
    </label>
</div>
</br>
<div class="takki">
<h2><center>Bátur:</center></h2>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Granmetissala" /><div class="c"> Grænmetissæla<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Granmetisbuff" /><div class="c"> Grænmetisbuff<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
        <input type="radio" name="batur" value="Buffalo_kjuklingur" /><div class="c"> Buffaló kjúklingur<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Rifid_grisakjot" /><div class="c"> Rifið grísakjöt<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Steik_og_ostur" /><div class="c"> Steik og ostur<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Kalkunn" /><div class="c"> Kalkúnabátur<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Grillud_kjuklingabringa" /><div class="c"> Grilluð kjúklingabringa<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Pizzabatur" /><div class="c"> Pizzabátur<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
        <input type="radio" name="batur" value="Kalkunn_og_skinka" /><div class="c"> Kalkúnn og skinka<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="BMT" /><div class="c"> Ítalskur B.M.T.<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Sterkur_italskur" /><div class="c"> Sterkur ítalskur<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Skinkubatur" /><div class="c"> Skinkubátur<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Hageldud_kjuklingabringa" /><div class="c"> Hægelduð kjúklingabringa<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Bradingur" /><div class="c"> Bræðingur<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Teriyaki_kjuklingur" /><div class="c"> Teriyaki kjúklingur<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="BLT" /><div class="c"> BLT<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Tunfisksalats" /><div class="c"> Túnfisksalat<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
</div>
</br>
<div class="takki">
<h2><center>Aukaálegg:</center></h2>
<label class="container" id="b">
        <input type="checkbox" name="aukadot 1" value="auka ostur" /><div class="c"> Auka ostur</br></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="aukadot 2" value="auka beikon" /><div class="c"> Auka beikon</br></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="aukadot 3" value="auka kjot" /><div class="c"> Auka kjöt</br></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="aukadot 4" value="auka kjuklingur" /><div class="c"> Auka kjúklingur</br></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="aukadot 5" value="auka granmetisbuff" /><div class="c"> Auka grænmetisbuff</br></div>
<span class="checkmark" id="b"></span>
</label>
</div>
</br>
<div class="takki">
<h2><center>Grænmeti:</center></h2>

<label class="container" id="b">
        <input type="checkbox" name="veggies 1" value="tomatar" /><div class="c"> Tómatar <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 2" value="gurka" /><div class="c"> Gúrga <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 3" value="kal" /><div class="c"> Kál <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 4" value="spinat" /><div class="c"> Spínat <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 5" value="laukur" /><div class="c"> Laukur <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 6" value="paprika" /><div class="c"> Paprika <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 7" value="jalapeno" /><div class="c"> Jalapeno <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 8" value="gular" /><div class="c"> Gular baunir <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 9" value="bananapipar" /><div class="c"> Bananapipar <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 10" value="surar" /><div class="c"> Súrar gúrgur <br /></div>
<span class="checkmark" id="b"></span>
</label>

</div>
</br>
<div class="takki">
<h2><center>Sósur:</center></h2>
<label class="container" id="b">
        <input type="checkbox" name="sosa 1" value="hunangssinep" /><div class="c"> Hunangssinnep <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 2" value="lett_mayo" /><div class="c"> Létt majónes <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 3" value="sterk_buffalo" /><div class="c"> Sterk buffalósósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 4" value="vegan_mayo" /><div class="c"> Vegan majónes <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 5" value="satt_sinnep" /><div class="c"> Sætt sinnep <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 6" value="satlauksosa" /><div class="c"> Sætlauksósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 7" value="raudvinsedik" /><div class="c"> Rauðvínsedik <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 8" value="chilli_mayo" /><div class="c"> Chilli majónes <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 9" value="sterkt_sinnep" /><div class="c"> Sterkt sinnep <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 10" value="bbq" /><div class="c"> BBQ sósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 11" value="olifuolia" /><div class="c"> Ólífuolía <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 12" value="bernaise" /><div class="c"> Bernessósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 13" value="ostasosa" /><div class="c"> Ostasósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 14" value="pizzasosa" /><div class="c"> Pizzasósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 15" value="southwest" /><div class="c"> Southwest sósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
</div>
</br>
</center>
    <br />
		<center><button href="pontun.php" class="button" input type="submit" name="submit" value="submit"><h1>Panta<h1></button></center>
        </texti>
	</form>
        </td>
        <td style="width:45%"> </td>
    </tr>
</table>';
            ?>

            <?php
            $html_veggies = '
<table style="width:100%">
    <tr>
        <td style="width:45%"> </td>
        <td>
<form action="pontun.php" method="get">
    <texti>
<div class="takki">
<h2><center>Stærð báts:</center></h2>
    <label class="container" id="a"><div class="c">Lítill, 6"</div>
		<input type="radio" name="staerd" value="litill" />
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a"><div class="c">Stór, 12"</div>
		<input type="radio" name="staerd" value="stor" />
        <span class="checkmark" id="a"></span>
    </label>
</div>
</br>
<div class="takki">
<h2><center>Bátur:</center></h2>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Granmetissala" /><div class="c"> Grænmetissæla<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Granmetisbuff" /><div class="c"> Grænmetisbuff<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
</div>
</br>

<div class="takki">
<h2><center>Aukaálegg:</center></h2>
<label class="container" id="b">
        <input type="checkbox" name="aukadot 1" value="auka ostur" /><div class="c"> Auka ostur</br></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="aukadot 5" value="auka granmetisbuff" /><div class="c"> Auka grænmetisbuff</br></div>
<span class="checkmark" id="b"></span>
</label>
</div>
</br>

<div class="takki">
<h2><center>Grænmeti:</center></h2>

<label class="container" id="b">
        <input type="checkbox" name="veggies 1" value="tomatar" /><div class="c"> Tómatar <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 2" value="gurka" /><div class="c"> Gúrga <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 3" value="kal" /><div class="c"> Kál <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 4" value="spinat" /><div class="c"> Spínat <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 5" value="laukur" /><div class="c"> Laukur <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 6" value="paprika" /><div class="c"> Paprika <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 7" value="jalapeno" /><div class="c"> Jalapeno <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 8" value="gular" /><div class="c"> Gular baunir <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 9" value="bananapipar" /><div class="c"> Bananapipar <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 10" value="surar" /><div class="c"> Súrar gúrgur <br /></div>
<span class="checkmark" id="b"></span>
</label>

</div>
</br>
<div class="takki">
<h2><center>Sósur:</center></h2>
<label class="container" id="b">
        <input type="checkbox" name="sosa 1" value="hunangssinep" /><div class="c"> Hunangssinnep <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 2" value="lett_mayo" /><div class="c"> Létt majónes <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 3" value="sterk_buffalo" /><div class="c"> Sterk buffalósósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 4" value="vegan_mayo" /><div class="c"> Vegan majónes <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 5" value="satt_sinnep" /><div class="c"> Sætt sinnep <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 6" value="satlauksosa" /><div class="c"> Sætlauksósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 7" value="raudvinsedik" /><div class="c"> Rauðvínsedik <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 8" value="chilli_mayo" /><div class="c"> Chilli majónes <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 9" value="sterkt_sinnep" /><div class="c"> Sterkt sinnep <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 10" value="bbq" /><div class="c"> BBQ sósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 11" value="olifuolia" /><div class="c"> Ólífuolía <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 12" value="bernaise" /><div class="c"> Bernessósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 13" value="ostasosa" /><div class="c"> Ostasósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 14" value="pizzasosa" /><div class="c"> Pizzasósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 15" value="southwest" /><div class="c"> Southwest sósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
</div>
</br>
</center>
    <br />
		<center><button href="pontun.php" class="button" input type="submit" name="submit" value="submit"><h1>Panta<h1></button></center>
        </texti>
	</form>
        </td>
        <td style="width:45%"> </td>
    </tr>
</table>';
            ?>

            <?php
            $html_vegan = '
<table style="width:100%">
    <tr>
        <td style="width:45%"> </td>
        <td>
<form action="pontun.php" method="get">
    <texti>
<div class="takki">
<h2><center>Stærð báts:</center></h2>
    <label class="container" id="a"><div class="c">Lítill, 6"</div>
		<input type="radio" name="staerd" value="litill" />
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a"><div class="c">Stór, 12"</div>
		<input type="radio" name="staerd" value="stor" />
        <span class="checkmark" id="a"></span>
    </label>
</div>
</br>
<div class="takki">
<h2><center>Bátur:</center></h2>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Granmetissala" /><div class="c"> Grænmetissæla<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
    <label class="container" id="a">
		<input type="radio" name="batur" value="Granmetisbuff" /><div class="c"> Grænmetisbuff<br /></div>
        <span class="checkmark" id="a"></span>
    </label>
</div>
</br>

<div class="takki">
<h2><center>Aukaálegg:</center></h2>
<label class="container" id="b">
        <input type="checkbox" name="aukadot 5" value="auka granmetisbuff" /><div class="c"> Auka grænmetisbuff</br></div>
<span class="checkmark" id="b"></span>
</label>
</div>
</br>

<div class="takki">
<h2><center>Grænmeti:</center></h2>

<label class="container" id="b">
        <input type="checkbox" name="veggies 1" value="tomatar" /><div class="c"> Tómatar <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 2" value="gurka" /><div class="c"> Gúrga <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 3" value="kal" /><div class="c"> Kál <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 4" value="spinat" /><div class="c"> Spínat <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 5" value="laukur" /><div class="c"> Laukur <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 6" value="paprika" /><div class="c"> Paprika <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 7" value="jalapeno" /><div class="c"> Jalapeno <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 8" value="gular" /><div class="c"> Gular baunir <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 9" value="bananapipar" /><div class="c"> Bananapipar <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="veggies 10" value="surar" /><div class="c"> Súrar gúrgur <br /></div>
<span class="checkmark" id="b"></span>
</label>

</div>
</br>
<div class="takki">
<h2><center>Sósur:</center></h2>
<label class="container" id="b">
        <input type="checkbox" name="sosa 1" value="hunangssinep" /><div class="c"> Hunangssinnep <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 4" value="vegan_mayo" /><div class="c"> Vegan majónes <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 5" value="satt_sinnep" /><div class="c"> Sætt sinnep <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 6" value="satlauksosa" /><div class="c"> Sætlauksósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 7" value="raudvinsedik" /><div class="c"> Rauðvínsedik <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 9" value="sterkt_sinnep" /><div class="c"> Sterkt sinnep <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 11" value="olifuolia" /><div class="c"> Ólífuolía <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 14" value="pizzasosa" /><div class="c"> Pizzasósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
<label class="container" id="b">
        <input type="checkbox" name="sosa 15" value="southwest" /><div class="c"> Southwest sósa <br /></div>
<span class="checkmark" id="b"></span>
</label>
</div>
</br>
</center>
    <br />
		<center><button href="pontun.php" class="button" input type="submit" name="submit" value="submit"><h1>Panta<h1></button></center>
        </texti>
	</form>
        </td>
        <td style="width:45%"> </td>
    </tr>
</table>';
            ?>


            <!--Switch dótið er hér fyrir neðan, ekki fokka allt of mikið í því-->
        </center>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

    <script src="js/index.js"></script>
    </body>
</html>
<?php
switch ($_GET["matarvenjur"]) {
    case "Vegan":
        echo "<texti><center><strong><h1>Vegan valkostir</h1></strong></center></texti>";
        echo $html_vegan;
        break;

    case "Grænmetisæta":
        echo "<texti><center><strong><h1>Grænmetisætu valkostir</h1></strong></center></texti>";
        echo $html_veggies;
        break;

    case "Allt":
        echo "<texti><center><strong><h1>Allir valkostir</h1></strong></center></texti>";
        echo $html_allt;
        break;

    case "random":
        echo "<texti><center><strong><h1>Random bátur</h1></strong></center></texti>";
        //staerd velur random stærð 1 er lítill 2 er stór
        $staerd = rand(1,2);
        //$batur velur random bát
        $batur = rand(1,17);
        //$e er fjöldi aukaálegga
        $e = rand(0,3);
        //$g er fjöldi grænmetis
        $g = rand(0,10);
        //$s er fjöldi sósa, sósurnar eru 15 í heildina en nemó fólki fannst það full mikið þannig ég minnka þær niður í 5
        $s = rand(0, 6);

        echo "<center><texti><div class='takki'>";
        echo "<h2>Stærð:</h2>";
        if ($staerd == 1){echo 'Lítill, 6"';}
        if ($staerd == 2){echo 'Stór, 12"';}
        echo "</div>";
        echo "</br>";
        echo "<div class='takki'>";

        echo "<h2>Bátategund:</h2>";
        //
        if ($batur == 1){echo "Grænmetissæla";}
        if ($batur == 2){echo "Grænmetisbuff";}
        if ($batur == 3){echo "Buffaló kjúklingur";}
        if ($batur == 4){echo "Rifið grísakjöt";}
        if ($batur == 5){echo "Steik og ostur";}
        if ($batur == 6){echo "Kalkúnabátur ";}
        if ($batur == 7){echo "Grilluð kjúklingabringa";}
        if ($batur == 8){echo "Pizzabátur";}
        if ($batur == 9){echo "Kalkúnn og skinka";}
        if ($batur == 10){echo "Ítalskur B.M.T.";}
        if ($batur == 11){echo "Sterkur ítalskur ";}
        if ($batur == 12){echo "Skinkubátur ";}
        if ($batur == 13){echo "Hægelduð kjúklingabringa";}
        if ($batur == 14){echo "Bræðingur ";}
        if ($batur == 15){echo "Teriyaki kjúklingur";}
        if ($batur == 16){echo "BLT";}
        if ($batur == 17){echo "Túnfisksalat";}
        //
        echo "</div>";
        echo "</br>";
        echo "<div class='takki'>";

        echo "<h2><h2>Aukaálegg:</h2></h2>";

        switch ($e){
            case 0:
                echo "Ekkert aukaálegg";

                break;

            case 1:
                $aukadot_1 = rand(1,5);
                break;

            case 2:
                $aukadot_1 = rand(1,5);
                $aukadot_2 = rand(1,5);
                break;

            case 3:
                $aukadot_1 = rand(1,5);
                $aukadot_2 = rand(1,5);
                $aukadot_3 = rand(1,5);
                break;
        }
?>
<?php

        if ($aukadot_1 == 1 or $aukadot_2 == 1 or $aukadot_3 == 1 or $aukadot_4 == 1 or $aukadot_5 == 1){
            echo "Auka ostur<br />";
        }

        if ($aukadot_1 == 2 or $aukadot_2 == 2 or $aukadot_3 == 2 or $aukadot_4 == 2 or $aukadot_5 == 2){
            echo "Auka beikon<br />";
        }

        if ($aukadot_1 == 3 or $aukadot_2 == 3 or $aukadot_3 == 3 or $aukadot_4 == 3 or $aukadot_5 == 3){
            echo "Auka kjötálegg<br />";
        }

        if ($aukadot_1 == 4 or $aukadot_2 == 4 or $aukadot_3 == 4 or $aukadot_4 == 4 or $aukadot_5 == 4){
            echo "Auka kjúklingur<br />";
        }

        if ($aukadot_1 == 5 or $aukadot_2 == 5 or $aukadot_3 == 5 or $aukadot_4 == 5 or $aukadot_5 == 5){
            echo "Auka grænmetisbuff<br />";
        }

?>
<?php
        echo "</div>";
        echo "</br>";
        echo "<div class='takki'>";
        echo "<h2>Grænmeti:</h2>";

        switch($g){
            case 0:
                echo "Ekkert grænmeti";

                break;

            case 1:
                $veggies1 = rand(1,10);
                break;

            case 2:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                break;

            case 3:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                break;

            case 4:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                break;

            case 5:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                break;

            case 6:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                break;

            case 7:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                $veggies7 = rand(1,10);
                break;

            case 8:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                $veggies7 = rand(1,10);
                $veggies8 = rand(1,10);
                break;

            case 9:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                $veggies7 = rand(1,10);
                $veggies8 = rand(1,10);
                $veggies9 = rand(1,10);
                break;

            case 10:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                $veggies7 = rand(1,10);
                $veggies8 = rand(1,10);
                $veggies9 = rand(1,10);
                $veggies10 = rand(1,10);
                break;


        }
?>
<?php

        //grænmeti echo

        if ($veggies1 == 1 or $veggies2 == 1 or $veggies3 == 1 or $veggies4 == 1 or $veggies5 == 1 or $veggies6 == 1 or $veggies7 == 1 or $veggies8 == 1 or $veggies9 == 1 or $veggies10 == 1){
            echo "Tómatar<br />";
        }

        if ($veggies1 ==2 or $veggies2 ==2 or $veggies3 == 2 or $veggies4 ==2 or $veggies5 ==2 or $veggies6 ==2 or $veggies7 ==2 or $veggies8 ==2 or $veggies9 ==2 or $veggies10 ==2){
            echo "Gúrga<br />";
        }

        if ($veggies1 ==3 or $veggies2 ==3 or $veggies3 == 3 or $veggies4 ==3 or $veggies5 ==3 or $veggies6 ==3 or $veggies7 ==3 or $veggies8 ==3 or $veggies9 ==3 or $veggies10 ==3){
            echo "Kál<br />";
        }

        if ($veggies1 ==4 or $veggies2 ==4 or $veggies3 == 4 or $veggies4 ==4 or $veggies5 ==4 or $veggies6 ==4 or $veggies7 ==4 or $veggies8 ==4 or $veggies9 ==4 or $veggies10 ==4){
            echo "Spínat<br />";
        }

        if ($veggies1 == 5 or $veggies2 == 5 or $veggies3 == 5 or $veggies4 == 5 or $veggies5 == 5 or $veggies6 == 5 or $veggies7 == 5 or $veggies8 == 5 or $veggies9 == 5 or $veggies10 == 5){
            echo "Laukur<br />";
        }

        if ($veggies1 == 6 or $veggies2 == 6 or $veggies3 == 6 or $veggies4 == 6 or $veggies5 == 6 or $veggies6 == 6 or $veggies7 == 6 or $veggies8 == 6 or $veggies9 == 6 or $veggies10 == 6){
            echo "Paprika<br />";
        }

        if ($veggies1 == 7 or $veggies2 == 7 or $veggies3 == 7 or $veggies4 == 7 or $veggies5 == 7 or $veggies6 == 7 or $veggies7 == 7 or $veggies8 == 7 or $veggies9 == 7 or $veggies10 == 7){
            echo "Jalapeño<br />";
        }

        if ($veggies1 ==8 or $veggies2 ==8 or $veggies3 == 8 or $veggies4 ==8 or $veggies5 ==8 or $veggies6 ==8 or $veggies7 ==8 or $veggies8 ==8 or $veggies9 ==8 or $veggies10 ==8){
            echo "Gular baunir<br />";
        }

        if ($veggies1 ==9 or $veggies2 ==9 or $veggies3 == 9 or $veggies4 ==9 or $veggies5 ==9 or $veggies6 ==9 or $veggies7 ==9 or $veggies8 ==9 or $veggies9 ==9 or $veggies10 ==9){
            echo "Bananapipar<br />";
        }

        if ($veggies1 == 10 or $veggies2 == 10 or $veggies3 == 10 or $veggies4 == 10 or $veggies5 == 10 or $veggies6 == 10 or $veggies7 == 10 or $veggies8 == 10 or $veggies9 == 10 or $veggies100 == 10){
            echo "Súrar gúrkur<br />";
        }

?>
<?php
        echo "</div>";
        echo "</br>";
        echo "<div class='takki'>";
        echo "<h2>Sósur:</h2>";

        switch ($s){
            case 0:
                echo "Engin sósa";

                break;

            case 1:
                $sosa1 = rand(1,15);
                break;

            case 2:
                $sosa1 = rand(1,15);
                $sosa2 = rand(1,15);
                break;

            case 3:
                $sosa1 = rand(1,15);
                $sosa2 = rand(1,15);
                $sosa3 = rand(1,15);
                break;

            case 4:
                $sosa1 = rand(1,15);
                $sosa2 = rand(1,15);
                $sosa3 = rand(1,15);
                $sosa4 = rand(1,15);
                break;

            case 5:
                $sosa1 = rand(1,15);
                $sosa2 = rand(1,15);
                $sosa3 = rand(1,15);
                $sosa4 = rand(1,15);
                $sosa5 = rand(1,15);
                break;

            case 6:
                $sosa1 = rand(1,15);
                $sosa2 = rand(1,15);
                $sosa3 = rand(1,15);
                $sosa4 = rand(1,15);
                $sosa5 = rand(1,15);
                $sosa6 = rand(1,15);
                break;
        }
?>

<?php


        //sósur echo


        if ($sosa1 == 1 or $sosa2 == 1 or $sosa3 == 1 or $sosa4 == 1 or $sosa5 == 1 or $sosa6 == 1){
            echo "Hunangssinnep<br />";
        }

        if ($sosa1 == 2 or $sosa2 == 2 or $sosa3 == 2 or $sosa4 == 2 or $sosa5 == 2 or $sosa6 == 2){
            echo "Létt majónes<br />";
        }

        if ($sosa1 == 3 or $sosa2 == 3 or $sosa3 == 3 or $sosa4 == 3 or $sosa5 == 3 or $sosa6 == 3){
            echo "Sterk buffalósósa<br />";
        }

        if ($sosa1 == 4 or $sosa2 == 4 or $sosa3 == 4 or $sosa4 == 4 or $sosa5 == 4 or $sosa6 == 4){
            echo "Vegan majónes<br />";
        }

        if ($sosa1 == 5 or $sosa2 == 5 or $sosa3 == 5 or $sosa4 == 5 or $sosa5 == 5 or $sosa6 == 5){
            echo "Sætt sinnep<br />";
        }

        if ($sosa1 == 6 or $sosa2 == 6 or $sosa3 == 6 or $sosa4 == 6 or $sosa5 == 6 or $sosa6 == 6){
            echo "Sætlauksósa<br />";
        }

        if ($sosa1 == 7 or $sosa2 == 7 or $sosa3 == 7 or $sosa4 == 7 or $sosa5 == 7 or $sosa6 == 7){
            echo "Rauðvínsedik<br />";
        }

        if ($sosa1 == 8 or $sosa2 == 8 or $sosa3 == 8 or $sosa4 == 8 or $sosa5 == 8 or $sosa6 == 8){
            echo "Chilly majónes<br />";
        }

        if ($sosa1 == 9 or $sosa2 == 1 or $sosa3 == 1 or $sosa4 == 1 or $sosa5 == 1 or $sosa6 == 1){
            echo "Sterkt sinnep<br />";
        }

        if ($sosa1 == 10 or $sosa2 == 10 or $sosa3 == 10 or $sosa4 == 10 or $sosa5 == 10 or $sosa6 == 10){
            echo "BBQ sósa<br />";
        }

        if ($sosa1 == 11 or $sosa2 == 11 or $sosa3 == 11 or $sosa4 == 11 or $sosa5 == 11 or $sosa6 == 11){
            echo "Ólífuolía<br />";
        }

        if ($sosa1 == 12 or $sosa2 == 12 or $sosa3 == 12 or $sosa4 == 12 or $sosa5 == 12 or $sosa6 == 12){
            echo "Bernessósa<br />";
        }

        if ($sosa1 == 13 or $sosa2 == 13 or $sosa3 == 13 or $sosa4 == 13 or $sosa5 == 13 or $sosa6 == 13){
            echo "Ostasósa<br />";
        }

        if ($sosa1 == 14 or $sosa2 == 14 or $sosa3 == 14 or $sosa4 == 14 or $sosa5 == 14 or $sosa6 == 14){
            echo "Pizzasósa<br />";
        }

        if ($sosa1 == 15 or $sosa2 == 15 or $sosa3 == 15 or $sosa4 == 15 or $sosa5 == 15 or $sosa6 == 15){
            echo "Southwest sósa<br />";
        }
        echo "</div>";
        break;

    //case random fyrir grænmetisætur
    case "g_random":
        echo "<texti><center><strong><h1>Random grænmetisætu bátur</h1></strong></center></texti>";
        //staerd velur random stærð 1 er lítill 2 er stór
        $staerd = rand(1,2);
        //$batur velur random bát
        $batur = rand(1,2);
        //$e er fjöldi aukaálegga
        $e = rand(0,2);
        //$g er fjöldi grænmetis
        $g = rand(0,10);
        //$s er fjöldi sósa, sósurnar eru 15 í heildina en nemó fólki fannst það full mikið þannig ég minnka þær niður í 5
        $s = rand(0, 6);


        echo "<center><texti><div class='takki'>";
        echo "<h2>Stærð:</h2>";
        if ($staerd == 1){echo 'Lítill, 6"';}
        if ($staerd == 2){echo 'Stór, 12"';}

        echo "</div>";
        echo "</br>";
        echo "<div class='takki'>";
        echo "<h2>Bátategund:</h2>";
        //
        if ($batur == 1){echo "Grænmetissæla";}
        if ($batur == 2){echo "Grænmetisbuff";}
        //

        echo "</div>";
        echo "</br>";
        echo "<div class='takki'>";
        echo "<h2><h2>Aukaálegg:</h2></h2>";


        switch ($e){
            case 0:
                echo "Ekkert aukaálegg";

                break;

            case 1:
                $aukadot_1 = rand(1,2);
                break;

            case 2:
                $aukadot_1 = rand(1,2);
                $aukadot_2 = rand(1,2);
                break;
        }
?>
<?php

        if ($aukadot_1 == 1 or $aukadot_2 == 1 or $aukadot_3 == 1 or $aukadot_4 == 1 or $aukadot_5 == 1){
            echo "Auka ostur<br />";
        }

        if ($aukadot_1 == 2 or $aukadot_2 == 2 or $aukadot_3 == 2 or $aukadot_4 == 2 or $aukadot_5 == 2){
            echo "Auka grænmetisbuff<br />";
        }

?>
<?php
        echo "</div>";
        echo "</br>";
        echo "<div class='takki'>";
        echo "<h2>Grænmeti:</h2>";


        switch($g){
            case 0:
                echo "Ekkert grænmeti";

                break;

            case 1:
                $veggies1 = rand(1,10);
                break;

            case 2:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                break;

            case 3:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                break;

            case 4:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                break;

            case 5:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                break;

            case 6:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                break;

            case 7:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                $veggies7 = rand(1,10);
                break;

            case 8:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                $veggies7 = rand(1,10);
                $veggies8 = rand(1,10);
                break;

            case 9:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                $veggies7 = rand(1,10);
                $veggies8 = rand(1,10);
                $veggies9 = rand(1,10);
                break;

            case 10:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                $veggies7 = rand(1,10);
                $veggies8 = rand(1,10);
                $veggies9 = rand(1,10);
                $veggies10 = rand(1,10);
                break;


        }
?>
<?php

        //grænmeti echo

        if ($veggies1 == 1 or $veggies2 == 1 or $veggies3 == 1 or $veggies4 == 1 or $veggies5 == 1 or $veggies6 == 1 or $veggies7 == 1 or $veggies8 == 1 or $veggies9 == 1 or $veggies10 == 1){
            echo "Tómatar<br />";
        }

        if ($veggies1 ==2 or $veggies2 ==2 or $veggies3 == 2 or $veggies4 ==2 or $veggies5 ==2 or $veggies6 ==2 or $veggies7 ==2 or $veggies8 ==2 or $veggies9 ==2 or $veggies10 ==2){
            echo "Gúrga<br />";
        }

        if ($veggies1 ==3 or $veggies2 ==3 or $veggies3 == 3 or $veggies4 ==3 or $veggies5 ==3 or $veggies6 ==3 or $veggies7 ==3 or $veggies8 ==3 or $veggies9 ==3 or $veggies10 ==3){
            echo "Kál<br />";
        }

        if ($veggies1 ==4 or $veggies2 ==4 or $veggies3 == 4 or $veggies4 ==4 or $veggies5 ==4 or $veggies6 ==4 or $veggies7 ==4 or $veggies8 ==4 or $veggies9 ==4 or $veggies10 ==4){
            echo "Spínat<br />";
        }

        if ($veggies1 == 5 or $veggies2 == 5 or $veggies3 == 5 or $veggies4 == 5 or $veggies5 == 5 or $veggies6 == 5 or $veggies7 == 5 or $veggies8 == 5 or $veggies9 == 5 or $veggies10 == 5){
            echo "Laukur<br />";
        }

        if ($veggies1 == 6 or $veggies2 == 6 or $veggies3 == 6 or $veggies4 == 6 or $veggies5 == 6 or $veggies6 == 6 or $veggies7 == 6 or $veggies8 == 6 or $veggies9 == 6 or $veggies10 == 6){
            echo "Paprika<br />";
        }

        if ($veggies1 == 7 or $veggies2 == 7 or $veggies3 == 7 or $veggies4 == 7 or $veggies5 == 7 or $veggies6 == 7 or $veggies7 == 7 or $veggies8 == 7 or $veggies9 == 7 or $veggies10 == 7){
            echo "Jalapeño<br />";
        }

        if ($veggies1 ==8 or $veggies2 ==8 or $veggies3 == 8 or $veggies4 ==8 or $veggies5 ==8 or $veggies6 ==8 or $veggies7 ==8 or $veggies8 ==8 or $veggies9 ==8 or $veggies10 ==8){
            echo "Gular baunir<br />";
        }

        if ($veggies1 ==9 or $veggies2 ==9 or $veggies3 == 9 or $veggies4 ==9 or $veggies5 ==9 or $veggies6 ==9 or $veggies7 ==9 or $veggies8 ==9 or $veggies9 ==9 or $veggies10 ==9){
            echo "Bananapipar<br />";
        }

        if ($veggies1 == 10 or $veggies2 == 10 or $veggies3 == 10 or $veggies4 == 10 or $veggies5 == 10 or $veggies6 == 10 or $veggies7 == 10 or $veggies8 == 10 or $veggies9 == 10 or $veggies100 == 10){
            echo "Súrar gúrkur<br />";
        }

?>
<?php
        echo "</div>";
        echo "</br>";
        echo "<div class='takki'>";
        echo "<h2>Sósur:</h2>";


        switch ($s){
            case 0:
                echo "Engin sósa";

                break;

            case 1:
                $sosa1 = rand(1,15);
                break;

            case 2:
                $sosa1 = rand(1,15);
                $sosa2 = rand(1,15);
                break;

            case 3:
                $sosa1 = rand(1,15);
                $sosa2 = rand(1,15);
                $sosa3 = rand(1,15);
                break;

            case 4:
                $sosa1 = rand(1,15);
                $sosa2 = rand(1,15);
                $sosa3 = rand(1,15);
                $sosa4 = rand(1,15);
                break;

            case 5:
                $sosa1 = rand(1,15);
                $sosa2 = rand(1,15);
                $sosa3 = rand(1,15);
                $sosa4 = rand(1,15);
                $sosa5 = rand(1,15);
                break;

            case 6:
                $sosa1 = rand(1,15);
                $sosa2 = rand(1,15);
                $sosa3 = rand(1,15);
                $sosa4 = rand(1,15);
                $sosa5 = rand(1,15);
                $sosa6 = rand(1,15);
                break;
        }
?>

<?php


        //sósur echo


        if ($sosa1 == 1 or $sosa2 == 1 or $sosa3 == 1 or $sosa4 == 1 or $sosa5 == 1 or $sosa6 == 1){
            echo "Hunangssinnep<br />";
        }

        if ($sosa1 == 2 or $sosa2 == 2 or $sosa3 == 2 or $sosa4 == 2 or $sosa5 == 2 or $sosa6 == 2){
            echo "Létt majónes<br />";
        }

        if ($sosa1 == 3 or $sosa2 == 3 or $sosa3 == 3 or $sosa4 == 3 or $sosa5 == 3 or $sosa6 == 3){
            echo "Sterk buffalósósa<br />";
        }

        if ($sosa1 == 4 or $sosa2 == 4 or $sosa3 == 4 or $sosa4 == 4 or $sosa5 == 4 or $sosa6 == 4){
            echo "Vegan majónes<br />";
        }

        if ($sosa1 == 5 or $sosa2 == 5 or $sosa3 == 5 or $sosa4 == 5 or $sosa5 == 5 or $sosa6 == 5){
            echo "Sætt sinnep<br />";
        }

        if ($sosa1 == 6 or $sosa2 == 6 or $sosa3 == 6 or $sosa4 == 6 or $sosa5 == 6 or $sosa6 == 6){
            echo "Sætlauksósa<br />";
        }

        if ($sosa1 == 7 or $sosa2 == 7 or $sosa3 == 7 or $sosa4 == 7 or $sosa5 == 7 or $sosa6 == 7){
            echo "Rauðvínsedik<br />";
        }

        if ($sosa1 == 8 or $sosa2 == 8 or $sosa3 == 8 or $sosa4 == 8 or $sosa5 == 8 or $sosa6 == 8){
            echo "Chilly majónes<br />";
        }

        if ($sosa1 == 9 or $sosa2 == 1 or $sosa3 == 1 or $sosa4 == 1 or $sosa5 == 1 or $sosa6 == 1){
            echo "Sterkt sinnep<br />";
        }

        if ($sosa1 == 10 or $sosa2 == 10 or $sosa3 == 10 or $sosa4 == 10 or $sosa5 == 10 or $sosa6 == 10){
            echo "BBQ sósa<br />";
        }

        if ($sosa1 == 11 or $sosa2 == 11 or $sosa3 == 11 or $sosa4 == 11 or $sosa5 == 11 or $sosa6 == 11){
            echo "Ólífuolía<br />";
        }

        if ($sosa1 == 12 or $sosa2 == 12 or $sosa3 == 12 or $sosa4 == 12 or $sosa5 == 12 or $sosa6 == 12){
            echo "Bernessósa<br />";
        }

        if ($sosa1 == 13 or $sosa2 == 13 or $sosa3 == 13 or $sosa4 == 13 or $sosa5 == 13 or $sosa6 == 13){
            echo "Ostasósa<br />";
        }

        if ($sosa1 == 14 or $sosa2 == 14 or $sosa3 == 14 or $sosa4 == 14 or $sosa5 == 14 or $sosa6 == 14){
            echo "Pizzasósa<br />";
        }

        if ($sosa1 == 15 or $sosa2 == 15 or $sosa3 == 15 or $sosa4 == 15 or $sosa5 == 15 or $sosa6 == 15){
            echo "Southwest sósa<br />";
        }
        echo "</div>";
        break;

    //case random fyrir vegan
    case "v_random":
        echo "<texti><center><strong><h1>Random vegan bátur</h1></strong></center></texti>";
        //staerd velur random stærð 1 er lítill 2 er stór
        $staerd = rand(1,2);
        //$batur velur random bát
        $batur = rand(1,2);
        //$e er fjöldi aukaálegga
        $e = rand(0,1);
        //$g er fjöldi grænmetis
        $g = rand(0,10);
        //$s er fjöldi sósa, sósurnar eru 15 í heildina en nemó fólki fannst það full mikið þannig ég minnka þær niður í 5
        $s = rand(0, 6);

        echo "<center><texti><div class='takki'>";
        echo "<h2>Stærð:</h2>";

        if ($staerd == 1){echo 'Lítill, 6"';}
        if ($staerd == 2){echo 'Stór, 12"';}

        echo "</div>";
        echo "</br>";
        echo "<div class='takki'>";
        echo "<h2>Bátategund:</h2>";

        //
        if ($batur == 1){echo "Grænmetissæla";}
        if ($batur == 2){echo "Grænmetisbuff";}
        //

        echo "</div>";
        echo "</br>";
        echo "<div class='takki'>";
        echo "<h2><h2>Aukaálegg:</h2></h2>";


        switch ($e){
            case 0:
                echo "Ekkert aukaálegg";

                break;

            case 1:
                echo "Auka grænmetisbuff";

                break;

        }
?>

<?php
        echo "</div>";
        echo "</br>";
        echo "<div class='takki'>";
        echo "<h2>Grænmeti:</h2>";


        switch($g){
            case 0:
                echo "Ekkert grænmeti";

                break;

            case 1:
                $veggies1 = rand(1,10);
                break;

            case 2:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                break;

            case 3:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                break;

            case 4:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                break;

            case 5:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                break;

            case 6:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                break;

            case 7:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                $veggies7 = rand(1,10);
                break;

            case 8:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                $veggies7 = rand(1,10);
                $veggies8 = rand(1,10);
                break;

            case 9:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                $veggies7 = rand(1,10);
                $veggies8 = rand(1,10);
                $veggies9 = rand(1,10);
                break;

            case 10:
                $veggies1 = rand(1,10);
                $veggies2 = rand(1,10);
                $veggies3 = rand(1,10);
                $veggies4 = rand(1,10);
                $veggies5 = rand(1,10);
                $veggies6 = rand(1,10);
                $veggies7 = rand(1,10);
                $veggies8 = rand(1,10);
                $veggies9 = rand(1,10);
                $veggies10 = rand(1,10);
                break;


        }
?>
<?php

        //grænmeti echo

        if ($veggies1 == 1 or $veggies2 == 1 or $veggies3 == 1 or $veggies4 == 1 or $veggies5 == 1 or $veggies6 == 1 or $veggies7 == 1 or $veggies8 == 1 or $veggies9 == 1 or $veggies10 == 1){
            echo "Tómatar<br />";
        }

        if ($veggies1 ==2 or $veggies2 ==2 or $veggies3 == 2 or $veggies4 ==2 or $veggies5 ==2 or $veggies6 ==2 or $veggies7 ==2 or $veggies8 ==2 or $veggies9 ==2 or $veggies10 ==2){
            echo "Gúrga<br />";
        }

        if ($veggies1 ==3 or $veggies2 ==3 or $veggies3 == 3 or $veggies4 ==3 or $veggies5 ==3 or $veggies6 ==3 or $veggies7 ==3 or $veggies8 ==3 or $veggies9 ==3 or $veggies10 ==3){
            echo "Kál<br />";
        }

        if ($veggies1 ==4 or $veggies2 ==4 or $veggies3 == 4 or $veggies4 ==4 or $veggies5 ==4 or $veggies6 ==4 or $veggies7 ==4 or $veggies8 ==4 or $veggies9 ==4 or $veggies10 ==4){
            echo "Spínat<br />";
        }

        if ($veggies1 == 5 or $veggies2 == 5 or $veggies3 == 5 or $veggies4 == 5 or $veggies5 == 5 or $veggies6 == 5 or $veggies7 == 5 or $veggies8 == 5 or $veggies9 == 5 or $veggies10 == 5){
            echo "Laukur<br />";
        }

        if ($veggies1 == 6 or $veggies2 == 6 or $veggies3 == 6 or $veggies4 == 6 or $veggies5 == 6 or $veggies6 == 6 or $veggies7 == 6 or $veggies8 == 6 or $veggies9 == 6 or $veggies10 == 6){
            echo "Paprika<br />";
        }

        if ($veggies1 == 7 or $veggies2 == 7 or $veggies3 == 7 or $veggies4 == 7 or $veggies5 == 7 or $veggies6 == 7 or $veggies7 == 7 or $veggies8 == 7 or $veggies9 == 7 or $veggies10 == 7){
            echo "Jalapeño<br />";
        }

        if ($veggies1 ==8 or $veggies2 ==8 or $veggies3 == 8 or $veggies4 ==8 or $veggies5 ==8 or $veggies6 ==8 or $veggies7 ==8 or $veggies8 ==8 or $veggies9 ==8 or $veggies10 ==8){
            echo "Gular baunir<br />";
        }

        if ($veggies1 ==9 or $veggies2 ==9 or $veggies3 == 9 or $veggies4 ==9 or $veggies5 ==9 or $veggies6 ==9 or $veggies7 ==9 or $veggies8 ==9 or $veggies9 ==9 or $veggies10 ==9){
            echo "Bananapipar<br />";
        }

        if ($veggies1 == 10 or $veggies2 == 10 or $veggies3 == 10 or $veggies4 == 10 or $veggies5 == 10 or $veggies6 == 10 or $veggies7 == 10 or $veggies8 == 10 or $veggies9 == 10 or $veggies100 == 10){
            echo "Súrar gúrkur<br />";
        }

?>
<?php
        echo "</div>";
        echo "</br>";
        echo "<div class='takki'>";
        echo "<h2>Sósur:</h2>";


        switch ($s){
            case 0:
                echo "Engin sósa";

                break;

            case 1:
                $sosa1 = rand(1,8);
                break;

            case 2:
                $sosa1 = rand(1,8);
                $sosa2 = rand(1,8);
                break;

            case 3:
                $sosa1 = rand(1,8);
                $sosa2 = rand(1,8);
                $sosa3 = rand(1,8);
                break;

            case 4:
                $sosa1 = rand(1,8);
                $sosa2 = rand(1,8);
                $sosa3 = rand(1,8);
                $sosa4 = rand(1,8);
                break;

            case 5:
                $sosa1 = rand(1,8);
                $sosa2 = rand(1,8);
                $sosa3 = rand(1,8);
                $sosa4 = rand(1,8);
                $sosa5 = rand(1,8);
                break;

            case 6:
                $sosa1 = rand(1,8);
                $sosa2 = rand(1,8);
                $sosa3 = rand(1,8);
                $sosa4 = rand(1,8);
                $sosa5 = rand(1,8);
                $sosa6 = rand(1,8);
                break;
        }
?>

<?php


        //sósur echo


        if ($sosa1 == 1 or $sosa2 == 1 or $sosa3 == 1 or $sosa4 == 1 or $sosa5 == 1 or $sosa6 == 1){
            echo "Hunangssinnep<br />";
        }

        if ($sosa1 == 2 or $sosa2 == 2 or $sosa3 == 2 or $sosa4 == 2 or $sosa5 == 2 or $sosa6 == 2){
            echo "Vegan majónes<br />";
        }

        if ($sosa1 == 3 or $sosa2 == 3 or $sosa3 == 3 or $sosa4 == 3 or $sosa5 == 3 or $sosa6 == 3){
            echo "Sætt sinnep<br />";
        }

        if ($sosa1 == 4 or $sosa2 == 4 or $sosa3 == 4 or $sosa4 == 4 or $sosa5 == 4 or $sosa6 == 4){
            echo "Sætlauksósa<br />";
        }

        if ($sosa1 == 5 or $sosa2 == 5 or $sosa3 == 5 or $sosa4 == 5 or $sosa5 == 5 or $sosa6 == 5){
            echo "Rauðvínsedik<br />";
        }

        if ($sosa1 == 6 or $sosa2 == 6 or $sosa3 == 6 or $sosa4 == 6 or $sosa5 == 6 or $sosa6 == 6){
            echo "Sterkt sinnep<br />";
        }

        if ($sosa1 == 7 or $sosa2 == 7 or $sosa3 == 7 or $sosa4 == 7 or $sosa5 == 7 or $sosa6 == 7){
            echo "Ólífuolía<br />";
        }

        if ($sosa1 == 8 or $sosa2 == 8 or $sosa3 == 8 or $sosa4 == 8 or $sosa5 == 8 or $sosa6 == 8){
            echo "Pizzasósa<br />";
        }
        echo "</div>";
        break;

    default:
        echo "<texti><center><strong><h1>Ekkert valið</h1></strong></center></texti>";
}
?>


<?php
/*
echo "<pre>";
print_r($_GET);
echo "</pre>";*/
?>

