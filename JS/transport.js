document.addEventListener("DOMContentLoaded", () => {
    const radios = document.querySelectorAll('input[name="transportOrganise"]');
    const container = document.getElementById("transport-reponses");
  
    radios.forEach((radio) => {
      radio.addEventListener("change", () => {
        const value = radio.value;
        container.innerHTML = "";
  
        if (value === "oui") {
          container.innerHTML = `
            <div>
              <label for="compagnie" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Quelle compagnie ?</label>
              <textarea name="compagnie" id="compagnie" rows="5" cols="45" class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md"></textarea>
            </div>
            <div>
              <label for="satisfaction" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Êtes-vous satisfait ?</label>
              <textarea name="satisfaction" id="satisfaction" rows="5" cols="45" class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md"></textarea>
            </div>
          `;
        } else if (value === "non") {
          container.innerHTML = `
            <div>
              <label for="raisons" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Pour quelle raison ?</label>
              <textarea name="raisons" id="raisons" rows="5" cols="45" class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md"></textarea>
            </div>
            <div>
              <label for="transporteur" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Quel était votre transporteur ?</label>
              <textarea name="transporteur" id="transporteur" rows="5" cols="45" class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md"></textarea>
            </div>
            <div>
              <label for="satisfaction-non" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Avez-vous été satisfait ?</label>
              <textarea name="satisfaction-non" id="satisfaction-non" rows="5" cols="45" class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md"></textarea>
            </div>
          `;
        }
      });
    });
  });