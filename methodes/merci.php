<?php
$title = "Merci pour votre réponse";
?>

<?php require '../elements/header.php'; ?>

<div class="h-screen pt-[100px] flex items-center justify-center px-6 py-12">
  <div class="bg-white p-12 text-center max-w-lg w-full mx-4 shadow-lg rounded-lg border-4 border-pink-700">
    <h1 class="text-3xl font-bold ">Merci d’avoir répondu</h1>
    <p class="text-gray-700 mb-8">Vos informations ont bien été enregistrées.</p>
    <p class="text-gray-700 mb-6">Découvrez notre site :</p>
    <div class="flex flex-col gap-4">
      <a href="https://odcvl.org/" target="_blank"
         class= font-medium py-3 px-6 rounded-xl transition">
        Visiter notre site
      </a>
      <a href="../index.php"
         class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-3 px-6 rounded-xl transition">
        Retour à l’accueil
      </a>
    </div>
  </div>
</div>


<?php require '../elements/footer.php'; ?>
