<!DOCTYPE html>
<html lang="is">
    <head>
        <title>test</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <center>
            <br />
                <form action="random.php" method="get">
                    <button href="random.php" class="button bouncy" input type="submit">
                        <h2>Annar</h2>
                    </button>
                </form>
        </center>

        <?php
//staerd velur random stærð 1 er lítill 2 er stór
$staerd = rand(1,2);
//$batur velur random bát
$batur = rand(1,17);
//$e er fjöldi aukaálegga
$e = rand(0,5);
//$g er fjöldi grænmetis
$g = rand(0,10);
//$s er fjöldi sósa, sósurnar eru 15 í heildina en nemó fólki fannst það full mikið þannig ég minnka þær niður í 5
$s = rand(0, 6);

echo "<center><texti><h2>Stærð:</h2>";
if ($staerd == 1){echo 'Lítill, 6"';}
if ($staerd == 2){echo 'Stór, 12"';}
echo "<br />";
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
echo "<br />";
echo "<br />";
echo "<h2>Aukadót:</h2>";

switch ($e){
    case 0:
        echo "Ekkert aukaálegg";
        echo "<br />";
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

    case 4:
        $aukadot_1 = rand(1,5);
        $aukadot_2 = rand(1,5);
        $aukadot_3 = rand(1,5);
        $aukadot_4 = rand(1,5);
        break;

    case 5:
        $aukadot_1 = rand(1,5);
        $aukadot_2 = rand(1,5);
        $aukadot_3 = rand(1,5);
        $aukadot_4 = rand(1,5);
        $aukadot_5 = rand(1,5);
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
            echo "Auka kjöt<br />";
        }

        if ($aukadot_1 == 4 or $aukadot_2 == 4 or $aukadot_3 == 4 or $aukadot_4 == 4 or $aukadot_5 == 4){
            echo "Auka kjúklingur<br />";
        }

        if ($aukadot_1 == 5 or $aukadot_2 == 5 or $aukadot_3 == 5 or $aukadot_4 == 5 or $aukadot_5 == 5){
            echo "Auka grænmetisbuff<br />";
        }

        ?>
        <?php
echo "<h2>Grænmeti:</h2>";

switch($g){
    case 0:
        echo "Ekkert grænmeti";
        echo "<br />";
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
echo "<h2>Sósur:</h2>";

switch ($s){
    case 0:
        echo "Engin sósa";
        echo "<br />";
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

        ?>
    </body>
</html>