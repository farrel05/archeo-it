<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Archéo-IT - Accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f5f5f5;
    }
    header {
      background-color: #2c3e50;
      color: white;
      padding: 2rem 0;
      text-align: center;
    }
    .actualite-card {
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      margin-bottom: 2rem;
    }
    .btn-inscription {
      background-color: #27ae60;
      color: white;
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
  <header>
    <h1>Bienvenue sur Archéo-IT</h1>
    <p>Plongez au cœur des fouilles archéologiques en France</p>
  </header>

  <div class="container py-5">
    <div class="d-flex justify-content-between mb-4">
      <h2 class="fw-bold">Actualités Récentes</h2>
      <a href="inscription.php" class="btn btn-inscription">S'inscrire</a>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="card actualite-card">
          <img src="https://source.unsplash.com/400x200/?archaeology,site" class="card-img-top" alt="fouille">
          <div class="card-body">
            <h5 class="card-title">Fouille à Nîmes</h5>
            <p class="card-text">Une équipe d'experts met au jour un site gallo-romain près du centre historique.</p>
            <a href="#" class="btn btn-outline-primary btn-sm">Lire plus</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card actualite-card">
          <img src="https://source.unsplash.com/400x200/?archaeology,excavation" class="card-img-top" alt="chantier">
          <div class="card-body">
            <h5 class="card-title">Reprise du chantier de Lyon</h5>
            <p class="card-text">Le chantier de la Croix-Rousse reprend après une pause hivernale, avec de nouvelles découvertes prévues.</p>
            <a href="#" class="btn btn-outline-primary btn-sm">Lire plus</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card actualite-card">
          <img src="https://source.unsplash.com/400x200/?history,dig" class="card-img-top" alt="vestiges">
          <div class="card-body">
            <h5 class="card-title">Stage pour étudiants</h5>
            <p class="card-text">Les inscriptions sont ouvertes pour participer aux fouilles cet été en tant qu'étudiant bénévole.</p>
            <a href="#" class="btn btn-outline-primary btn-sm">Lire plus</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <h2 class="fw-bold mb-4">Accéder aux outils</h2>
    <div class="d-flex gap-3 flex-wrap">
      <a href="login.php" class="btn btn-primary">Connexion</a>
      <a href="admin.php" class="btn btn-secondary">Admin</a>
      <a href="chantiers.php" class="btn btn-outline-dark">Chantiers</a>
      <a href="contact.php" class="btn btn-outline-info">Contact</a>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Archéo-IT. Tous droits réservés. | Projet réalisé par BATOCHIN NGENA FARREL</p>
  </footer>
</body>
</html>
