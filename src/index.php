<?php
include "Entity/Client.php";
// include "functions/CreateClient.php";
// include "functions/CreateCommand.php";
// include "functions/BuyCommand.php";
// include "functions/DisplayCommands.php";
?>
<?php
echo "==============================
 SYSTEME DE PAIEMENT - MENU
==============================
";
echo "1. Create client\n";
echo "2. Create command\n";
echo "3. buy a command\n";
echo "4. display commands\n";
echo "0. exit\n";
$choice = readline('Enter your choice: ');
switch ($choice) {
    case '1':
        break;
    case '2':
        break;
    case '3':
        break;
    case '4':
        break;
    case '5':
        break;
    case '6':
        break;
    case '0':
        echo "goodbye !\n";
        exit();
    default:
        echo "wrong choice !";
}


?>