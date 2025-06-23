<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Récupération des données
    $response = $_POST['g-recaptcha-response'] ?? '';
    $secret = '6Ldv4GorAAAAAGLWvEFyZYd2myQZQR50oIjtl0LF'; // remplace par ta vraie clé secrète

    // Vérification côté Google
    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . urlencode($secret) . "&response=" . urlencode($response));
    $captcha_success = json_decode($verifyResponse);

    // Traitement
    if ($captcha_success && $captcha_success->success) {
        // ✅ Le captcha est valide
        echo "CAPTCHA validé ! Formulaire accepté.";
        // Ici, tu peux traiter le reste du formulaire
    } else {
        // ❌ Le captcha a échoué
        echo "CAPTCHA invalide. Veuillez réessayer.";
    }

} else {
    echo "Méthode non autorisée.";
}
?>
