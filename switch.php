<html>
    <body>
    <form action="switch.php" method="get">
        <p>Monat: 
        <input type="text" name="auswahl"/><br>
        <input type="submit" value="Suchen"/>
        </p>
    </form>
    </body>
</html>
<?php
$monat = $_GET['auswahl'];

switch($monat) {  
    case "januar":
        echo "Der $monat hat 31 Tage";
        break;
    case "februar":
        echo "Der $monat hat 28 Tage";
        break;
    case "märz":
        echo "Der $monat hat 31 Tage";
        break;
    case "april":
        echo "Der $monat hat 30 Tage";
        break;
    case "mai":
        echo "Der $monat hat 31 Tage";
        break;
    case "juni":
        echo "Der $monat hat 30 Tage";
        break;
    case "juli":
        echo "Der $monat hat 31 Tage";
        break;
    case "august":
        echo "Der $monat hat 31 Tage";
        break;
    case "september":
        echo "Der $monat hat 30 Tage";
        break;
    case "oktober":
        echo "Der $monat hat 31 Tage";
        break;
    case "november":
        echo "Der $monat hat 30 Tage";
        break;
    case "dezember":
        echo "Der $monat hat 31 Tage";
        break;
    default:
        echo "ETWAS IST SCHIEFGELAUFEN!!!";
        break;
}            

?>