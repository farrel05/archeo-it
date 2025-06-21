<?php include 'navbar.php'; ?>
<?php
// inscription.php
session_start();
$default_password = 'farrel';
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($default_password, PASSWORD_BCRYPT);

    $db = new PDO('mysql:host=localhost;dbname=archeo_it', 'root', '');
    $stmt = $db->prepare("INSERT INTO utilisateurs (prenom, nom, email, mot_de_passe) VALUES (?, ?, ?, ?)");
    $success = $stmt->execute([$prenom, $nom, $email, $password]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription - Archéo-IT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="text-center mb-4">Inscription</h2>
    <?php if ($success): ?>
      <div class="alert alert-success">Inscription réussie ! Votre mot de passe est : <strong>farrel</strong></div>
    <?php endif; ?>
    <form method="POST" class="card p-4 shadow-sm">
      <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="prenom" required>
      </div>
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <button type="submit" class="btn btn-success w-100">S'inscrire</button>
    </form>
    <p class="text-center mt-3">Mot de passe par défaut : <strong>farrel</strong></p>
  </div>
</body>
</html>
