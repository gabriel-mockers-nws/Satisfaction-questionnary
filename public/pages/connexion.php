<?php 
$title = "Connexion";
require_once dirname(__DIR__) . '/elements/header.php';
?>

<?php
$password = '$2y$12$kd8RL5Sw08BiczaOiJzFNe.2opNXK8Q7rvERb2/8X/mZS/hw7oAEm';
if(!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'Legiolf' && password_verify($_POST['motdepasse'], $password)) {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /admin.php');
    } else {
        $erreur = "Identifiants incorrects"; 
    }
}

require_once dirname(__DIR__) . '/functions/auth.php';
if (est_connecte()) {
    header('Location: /admin.php');
    exit(); 
}
?>

<form action="POST" class="flex flex-col items-center my-10 h-screen space-y-4">
    <h1 class="text-5xl text-center mt-32 py-12">Connexion à la partie administrateur</h1>
    <label for="email">Email</label>
    <input type="email" class="border-2 border-solid rounded-md "> 
    <label for="password">Password</label>
    <input type="password" class="border-2 border-solid rounded-md">
    <input type="button" value="Connexion" class=" shadow-md w-30 py-1.5 rounded-lg bg-[#C73F67] text-white hover:bg-[#CC5276] ">
    <a href="../index.php" class="hover:underline underline-offset-1">Revenir à l'accueil</a>
</form>
<?= require_once dirname(__DIR__) . '/elements/footer.php'  ?>
