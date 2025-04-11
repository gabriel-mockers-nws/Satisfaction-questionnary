document.addEventListener("DOMContentLoaded", function () {
    const equipementsInputs = document.querySelectorAll("input[name='equipements']");
    const manquantDiv = document.getElementById("manquant");

    equipementsInputs.forEach(input => {
        input.addEventListener("change", function () {
            if (document.querySelector("input[name='equipements']:checked") && document.querySelector("input[name='equipements']:checked").value.toLowerCase() === "non") {
                manquantDiv.innerHTML = '<label for="manques"class="block text-lg mb-1 text-center">Quels sont les manques ?</label><textarea name="compagnie" id="compagnie" rows="5" cols="45" class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md"></textarea>';
            } else {
                manquantDiv.innerHTML = '';
            }
        });
    });
});