<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Archéo-IT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="index.php">Accueil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="chantiers.php">Chantiers</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

        <?php if (isset($_SESSION['user']) && $_SESSION['user']['email'] === 'admin@archeo-it.fr'): ?>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin</a>
        </li>
        <?php endif; ?>

        <?php if (isset($_SESSION['user'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Se déconnecter</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">Inscription</a>
        </li>
        <?php endif; ?>

      </ul>
    </div>
  </div>
</nav>
