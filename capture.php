<?php
$dir = './images/';
if (!is_dir($dir)) {
    mkdir($dir, 0755, true);
}

if (isset($_POST['image'])) {
    $data = $_POST['image'];
    $data = str_replace('data:image/png;base64,', '', $data);
    $data = str_replace(' ', '+', $data);
    $imageData = base64_decode($data);
    $filename = $dir . 'capture.png';

    if (file_put_contents($filename, $imageData)) {
        echo "✅ Image capturée avec succès.";
    } else {
        echo "❌ Erreur lors de l'enregistrement.";
    }
} else {
    echo "❌ Aucune image reçue.";
}
