<?php
session_start();
$is_logged_in = isset($_SESSION['user']);
$is_admin = $is_logged_in && $_SESSION['user']['email'] === 'admin@archeo-it.fr';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Archéo-IT - Accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
    }
    .hero {
      background: url('assets/images/hero-banner.jpg') center/cover no-repeat;
      color: white;
      text-shadow: 1px 1px 2px black;
      padding: 100px 0;
      text-align: center;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    .actualite-card img {
      height: 180px;
      object-fit: cover;
    }
    footer {
      background-color: #2c3e50;
      color: white;
      padding: 1rem;
      text-align: center;
      margin-top: 4rem;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><i class="fas fa-digging me-2"></i>Archéo-IT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="chantiers.php">Chantiers</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <?php if ($is_admin): ?>
            <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
          <?php endif; ?>
        </ul>
        <ul class="navbar-nav">
          <?php if ($is_logged_in): ?>
            <li class="nav-item"><a class="nav-link" href="logout.php">Se déconnecter</a></li>
          <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="login.php">Connexion</a></li>
            <li class="nav-item"><a class="nav-link" href="inscription.php">Inscription</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero">
    <div class="container">
      <h1>Bienvenue sur Archéo-IT</h1>
      <p class="lead">Plongez au coeur des fouilles archéologiques en France</p>
    </div>
  </section>

  <div class="container py-5">
    <h2 class="fw-bold mb-4">Actualités</h2>
    <div class="row">
      <?php
      try {
        $db = new PDO('mysql:host=localhost;dbname=archeo_it', 'root', '');
        $sql = $is_logged_in ? "SELECT * FROM actualites ORDER BY date_publication DESC" : "SELECT * FROM actualites ORDER BY date_publication DESC LIMIT 3";
        $stmt = $db->query($sql);
        $actus = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($actus)) {
          echo "<p class='text-muted'>Aucune actualité disponible pour le moment.</p>";
        }

        foreach ($actus as $actu): ?>
          <div class="col-md-4">
            <div class="card actualite-card shadow-sm mb-4">
              <?php if (!empty($actu['image_url'])): ?>
                <img src="<?= htmlspecialchars($actu['image_url']) ?>" class="card-img-top" alt="Image actu">
              <?php endif; ?>
              <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($actu['titre']) ?></h5>
                <p class="card-text"><?= htmlspecialchars($actu['contenu']) ?></p>
                <p class="text-muted small">Publié le <?= $actu['date_publication'] ?></p>
              </div>
            </div>
          </div>
        <?php endforeach;
      } catch (PDOException $e) {
        echo "<div class='alert alert-danger'>Erreur : ".$e->getMessage()."</div>";
      }
      ?>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Archéo-IT. Tous droits réservés. | Projet réalisé par BATOCHIN NGENA FARREL</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
