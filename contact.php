<?php include 'navbar.php'; ?>
<?php
// contact.php
$success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $sujet = $_POST['sujet'];
    $message = htmlspecialchars($_POST['message']);

    $db = new PDO('mysql:host=localhost;dbname=archeo_it', 'root', '');
    $stmt = $db->prepare("INSERT INTO messages_contact (nom, prenom, email, sujet, message) VALUES (?, ?, ?, ?, ?)");
    $success = $stmt->execute([$nom, $prenom, $email, $sujet, $message]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Contact - Archéo-IT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="text-center mb-4">Contactez-nous</h2>
    <?php if ($success): ?>
      <div class="alert alert-success">Message envoyé avec succès !</div>
    <?php endif; ?>
    <form method="POST" class="card p-4 shadow-sm">
      <div class="row mb-3">
        <div class="col">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" name="prenom" required>
        </div>
        <div class="col">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="mb-3">
        <label for="sujet" class="form-label">Sujet</label>
        <select class="form-select" name="sujet">
          <option value="Demande d'infos">Demande d'infos</option>
          <option value="Demande de rendez-vous">Demande de rendez-vous</option>
          <option value="Autre">Autre</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary w-100">Envoyer</button>
    </form>
  </div>
</body>
</html>
