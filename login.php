
<?php include 'navbar.php'; ?>
<?php
// login.php
session_start();
$error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $db = new PDO('mysql:host=localhost;dbname=archeo_it', 'root', '');
    $stmt = $db->prepare("SELECT * FROM utilisateurs WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['mot_de_passe'])) {
        $_SESSION['user'] = $user;
        header('Location: index.php');
        exit();
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion - Archéo-IT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="text-center mb-4">Connexion</h2>
    <?php if ($error): ?>
      <div class="alert alert-danger">Email ou mot de passe invalide.</div>
    <?php endif; ?>
    <form method="POST" class="card p-4 shadow-sm">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Se connecter</button>
    </form>
    <p class="text-center mt-3"><a href="inscription.php">S'inscrire</a></p>
  </div>
</body>
</html>
