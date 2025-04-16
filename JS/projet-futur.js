document.addEventListener("DOMContentLoaded", () => {
    const radios = document.querySelectorAll('input[name="projet-futur"]');
    const container = document.getElementById("projet-maison");
  
    radios.forEach((radio) => {
      radio.addEventListener("change", () => {
        const value = radio.value;
        container.innerHTML = "";
  
        if (value === "oui") {
          container.innerHTML = `
            <div>
            <label class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Sur la même maison ?</label>
            <label class="inline-flex items-center space-x-2 text-xl">
                <input type="radio" name="meme-maison" value="oui" class="radio-button">
                <span>Oui</span>
            </label>
            <label class="inline-flex items-center space-x-2 text-xl">
                <input type="radio" name="meme-maison" value="non" class="radio-button">
                <span>Non</span>
            </label>
        </div>
          `;
        } else if (value === "non") {
          container.innerHTML = `
            <div>
              <label for="raisons" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Pour quelle raison ?</label>
              <textarea name="raisons" id="raisons" rows="5" cols="45" required class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md"></textarea>
            </div>
          `;
        }
      });
    });
  });