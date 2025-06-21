<?php
session_start();
include 'navbar.php';

// Connexion à la base de données
try {
    $db = new PDO('mysql:host=localhost;dbname=archeo_it', 'root', '');
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

// Récupération des chantiers
$stmt = $db->query("SELECT * FROM chantiers ORDER BY id DESC");
$chantiers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Chantiers - Archéo-IT</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
    .chantier-title {
      color: #2c3e50;
      font-weight: bold;
    }
    .chantier-desc {
      font-size: 15px;
      color: #333;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h2 class="mb-4 text-center text-primary">Nos chantiers archéologiques</h2>

  <div class="row">
    <?php if (count($chantiers) > 0): ?>
      <?php foreach ($chantiers as $chantier): ?>
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm h-100">
            <?php if (!empty($chantier['image_url'])): ?>
              <img src="<?= htmlspecialchars($chantier['image_url']) ?>" class="card-img-top" alt="Image chantier">
            <?php endif; ?>
            <div class="card-body">
              <h5 class="chantier-title"><?= htmlspecialchars($chantier['lieu']) ?></h5>
              <p class="chantier-desc"><?= nl2br(htmlspecialchars($chantier['description'])) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="col-12 text-center">
        <div class="alert alert-warning">Aucun chantier n'est disponible pour le moment.</div>
      </div>
    <?php endif; ?>
  </div>
</div>

<footer class="text-center py-4 bg-dark text-light">
  &copy; <?= date('Y') ?> Archéo-IT. Tous droits réservés.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
