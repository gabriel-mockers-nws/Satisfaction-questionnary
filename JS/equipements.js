document.addEventListener("DOMContentLoaded", function () {
    const equipementsInputs = document.querySelectorAll("input[name='equipements']");
    const manquantDiv = document.getElementById("manquant");

    equipementsInputs.forEach(input => {
        input.addEventListener("change", function () {
            if (document.querySelector("input[name='equipements']:checked") && document.querySelector("input[name='equipements']:checked").value.toLowerCase() === "non") {
                manquantDiv.innerHTML = '<label for="manques"class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Quels sont les manques ?</label><textarea name="manques" id="compagnie" rows="5" cols="45" class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md"></textarea>';
            } else {
                manquantDiv.innerHTML = '';
            }
        });
    });
});