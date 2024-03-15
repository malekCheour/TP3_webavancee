<?php

require __DIR__ ."/vendor/autoload.php";
use Dompdf\Dompdf;
use App\Models\Client;

if (isset($_GET['id'])) {
    $clientId = $_GET['id'];

    $clientModel = new Client();

    $clientData = $clientModel->selectId($clientId);

    if ($clientData) {
        $html = "
            <p>Name: {$clientData['nom']}</p>
            <p>Adresse: {$clientData['adresse']}</p>
            <p>Phone: {$clientData['phone']}</p>
            <p>Email: {$clientData['courriel']}</p>
        ";

        // Générez le PDF
        $dompdf = new Dompdf;
        $dompdf->loadHtml($html);
        $dompdf->render();

        // Stream du PDF
        $fichier = "info-client.pdf";
        $dompdf->stream($fichier);
    } else {
        // Gérez le cas où aucune donnée de client n'a été trouvée
        echo "Aucune donnée de client trouvée.";
    }
} else {
    // Gérez le cas où l'ID du client n'est pas passé dans l'URL
    echo "ID du client non spécifié.";
}
?>
