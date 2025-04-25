<?php
$cmd = "python compare_faces.py 2>&1"; // exécute et récupère aussi les erreurs
$output = shell_exec($cmd);

if (strpos($output, 'MATCH') !== false) {
    echo "✅ Visage reconnu (correspondance)";
} elseif (strpos($output, 'NO_MATCH') !== false) {
    echo "❌ Visage non reconnu";
} else {
    echo "❌ Erreur : " . $output;
}
