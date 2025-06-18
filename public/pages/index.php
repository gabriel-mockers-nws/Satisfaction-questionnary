<?php 
$title = "Page d'accueil";
require_once __DIR__ . '/../elements/header.php';
require_once __DIR__ . '/../../methodes/dbConnect.php';
$pdoManager = new DBManager('odcvl');
$pdo = $pdoManager->getPDO();
?> 
<div class="text-center mt-32 space-y-4"> 
<h1 class="text-5xl font-vista ">Questionnaires de satisfaction</h1>
<p class="italic font-extrabold">Selection du bilan à chaud</p>
</div>

<nav class="flex flex-col items-center my-10 h-screen space-y-4">
    <a 
        href="/pages/classes-form.php" 
        class="shadow-md w-64 py-4 rounded-lg bg-[#bf198c] text-white hover:bg-[#C73F67] text-center"
        >Classes
    </a>

    <a 
        href="/pages/groupes-packages.php"
        class="shadow-md w-64 py-4 rounded-lg bg-[#bf198c] text-white hover:bg-[#C73F67] text-center"
        >Groupes packagés
    </a>


    <a 
        href="/pages/groupe-sejour.php"
        class="shadow-md w-64 py-4 rounded-lg bg-[#bf198c] text-white hover:bg-[#C73F67] text-center"
        >Groupes Pension Complète
    </a>


    <a 
        href="/pages/colonies.php" 
        class="shadow-md w-64 py-4 rounded-lg bg-[#bf198c] text-white hover:bg-[#C73F67] text-center"
        >Colonies
    </a>
</nav>

<?php require_once __DIR__ . '/../elements/footer.php';  ?> 