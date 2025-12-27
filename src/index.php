<?php
include "Entity/Client.php";
include "Repository/ClientRepository.php";
include "Repository/CommandeRepository.php";
include "Repository/PaiementRepository.php";
include "Database/DatabaseConnection.php";
function PassInputs()
{
    $email = readline('Enter your email: ');
    $name = readline('Enter your name: ');
    $client = new Client($email, $name);
    $clientRepo = new ClientRepository();
    $clientRepo->createClient($name, $email);
}
function DisplayAllClients()
{
    $clientRepo = new ClientRepository();
    $clients = $clientRepo->getAllClients();
    foreach ($clients as $client) {
        echo "ID: {$client['id']}\n____________\n Name: {$client['name']}\n____________\n Email: {$client['email']}\n____________\n";
    }
}
function PassCommandInputs()
{
    DisplayAllClients();
    $clientId = readline('Enter client ID: ');
    $montant = readline('Enter amount: ');
    $commandeRepo = new CommandeRepository();
    $commandeRepo->createCommande($clientId, $montant);
    echo "Command created successfully!\n";
}

function buyCommand()
{
    $commandeId = readline('Enter command ID: ');
    $paymentType = readline('Enter payment type (1-Card, 2-Paypal, 3-Transfer): ');
    $paiementRepo = new PaiementRepository();
    $paiementRepo->processPayment($commandeId, $paymentType);
    echo "Payment processed!\n";
}
function DisplayAllCommands()
{
    $commandeRepo = new CommandeRepository();
    $commandes = $commandeRepo->getAllCommandes();
    foreach ($commandes as $commande) {
        echo "ID: {$commande['id']}, Client ID: {$commande['client_id']}, Amount: {$commande['montant']}\n";
    }
}
echo "==============================
 SYSTEME DE PAIEMENT - MENU
==============================
";
echo "1. Create client\n";
echo "2. Display all clients\n";
echo "3. Create command\n";
echo "4. buy a command\n";
echo "5. display commands\n";
echo "0. exit\n";
$choice = readline('Enter your choice : ');
InitApp($choice);
function InitApp($choice)
{
    switch ($choice) {
        case '1':
            PassInputs();

            break;
        case '2':
            DisplayAllClients();
            break;
        case '3':
            PassCommandInputs();
            break;
        case '4':
            buyCommand();
            break;
        case '5':
            DisplayAllCommands();
            break;
        case '0':
            echo "goodbye !\n";
            exit(0);
        default:
            echo "wrong choice !";
    }
}


?>