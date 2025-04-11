<?php 
require_once dirname(__DIR__) . '/functions/auth.php';
forcer_utilisateur_connecte(); 
require_once dirname(__DIR__) . '/elements/header.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'logout.php';
?>
<h1>test de titre</h1>
<?php if(est_connecte()): ?> 
              <li class="nav-item"><a href="/logout.php" class="nav-link">Se déconecter</a></li>
<?php endif ?> 



<?php require_once './elements/footer.php'; ?>