const radios = document.querySelectorAll('input[name="thematique"]');
const ideeContainer = document.getElementById("idée");

radios.forEach(radio => {
  radio.addEventListener("change", () => {
    if (radio.value === "oui" && radio.checked) {
      ideeContainer.innerHTML = `
        <div class="mb-8">
          <label for="exploit" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">
            Laquelle ?
          </label>
          <textarea
            name="Remarque-1"
            id="exploit"
            placeholder=" Entrez votre idée ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md">
          </textarea>
        </div>
      `;
    } else {
      // Si "non" est coché : on efface le contenu
      ideeContainer.innerHTML = "";
    }
  });
});