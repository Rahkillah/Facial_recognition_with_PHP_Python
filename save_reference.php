<?php
$src = './images/capture.png';
$dest = './images/reference.png';

if (!file_exists($src)) {
    echo "❌ Aucune image capturée à enregistrer.";
    exit;
}

if (copy($src, $dest)) {
    echo "✅ Image enregistrée comme référence.";
} else {
    echo "❌ Erreur enregistrement de la référence.";
}
