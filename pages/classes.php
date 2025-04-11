<?php 
$title = "Classes";
require_once "../elements/header.php";
?> 

<h1 class="text-5xl text-center mt-32">Classes découvertes</h1>
<form action="POST" id="classe-découverte" class="mx-8 my-12 justify-items-center">

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold ">Administratif</h2>
        <div class="mb-8">
            <label for="construction-projet" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">
                Comment évaluez-vous la construction <br> de votre projet avec le siège ?
            </label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-1"
            id="construction-projet"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
        <div class="mb-8">
            <label for="suivis-admin" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5"">Comment évaluez-vous le suivis administratif <br> du séjour avec le siège ?</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-1"
            id="suivis-admin"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
        <div class="mb-8">
            <label for="satisfaction-orga" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Avez-vous été satidfait de l'organisation <br> du séjour avec notre équipe de maison ?</label>
            <textarea
            name="Remarque-1"
            id="satisfaction-orga"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
    </div>

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold text-center ">Le transport</h2>
        <div>
            <label class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Votre transport a-t-il été organisé par Odcvl ?</label>
            <label class="inline-flex items-center space-x-2 ">
                <input type="radio" name="transportOrganise" value="oui">
                <span>Oui</span>
            </label>
            <label class="inline-flex items-center space-x-2 ml-4">
                <input type="radio" name="transportOrganise" value="non">
                <span>Non</span>
            </label>
        </div>
        <!-- Ici s'ajouteront dynamiquement les questions -->
    <div id="transport-reponses" class="mt-6 space-y-4"></div>
    </div>

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold  text-center">Notre maison tous séjour</h2>
        <div class="mb-8">
            <label for="premier-ressenti" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5"">Quel fut votre premier ressenti  lors de votre <br> arrivée dans notre maison tous séjours ?</label>
            <textarea
            name="Remarque-1"
            id="premier-ressenti"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label  class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 font-bold"">Comment évaluez-vous l'accueil, <br> la disponibilité  et l'écoute de :</label>
            <label for="responsable-de-maison" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5"">Notre responsable de maison</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-1"
            id="responsable-de-maison"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>

            <label for="agent-polyvalents" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5"">Nos agents polyvalents / cuisiniers</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-1"
            id="agent-polyvalents"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
        
        <div class="mb-8">
            <label class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 font-bold">Comment évaluez-vous la qualité <br> de notre maison tous séjour ?</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
            </div>

            <div class="mb-8">
                <label for="propreté-générale" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La propreté générale</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="1">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="2">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="3">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="4">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="5">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-1"
                id="propreté-générale"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>
            
            <div class="mb-8">
                <label for="chambres" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les chambres</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="1">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="2">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="3">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="4">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="5">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-1"
                id="chambres"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="rangements" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les rangements</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="1">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="2">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="3">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="4">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="5">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-1"
                id="rangements"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="sanitaires" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les sanitaires</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="1">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="2">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="3">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="4">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="5">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-1"
                id="sanitaires"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="chauffage" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Le chauffage</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="1">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="2">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="3">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="4">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="5">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-1"
                id="chauffage"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="salles-travail" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les salles de travail</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="1">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="2">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="3">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="4">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="5">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-1"
                id="salles-travail"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="salle-manger" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La salle à manger</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="1">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="2">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="3">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="4">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="5">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-1"
                id="salle-manger"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="exterieurs" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les extérieurs</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="1">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="2">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="3">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="4">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-1">
                        <input type="radio" name="note" value="5">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-1"
                id="exterieurs"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>
        </div>

        <div>
            <label class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Avez-vous bénéficié de tous les équipements <br> dont vous aviez besoin ?</label>
            <label class="inline-flex items-center space-x-2 ">
                <input type="radio" name="equipements" value="oui">
                <span>Oui</span>
            </label>
            <label class="inline-flex items-center space-x-2 ml-4">
                <input type="radio" name="equipements" value="non">
                <span>Non</span>
            </label>
        </div>
        <div id="manquant" class="mt-6 space-y-4"></div>
    </div>
    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold  text-center">La restauration</h2>
        <div class="mb-8">
            <label for="qual-plat" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Notez la qualité des plats (midi et soir)</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-1"
            id="qual-plat"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="qte" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Notez la quantité</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-1"
            id="qte"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="petit-déjeuner" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Notez les petit-déjeuners</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-1"
            id="petit-dejeuner"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="gouter" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Notez les goûters</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-1"
            id="gouter"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="variete" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La variété des menus</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-1"
            id="variete"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="regimes-alimentaire" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La prise en compte des régimes alimentaires <br> vous a-t-elle convenue ?</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-1"
            id="regimes-alimentaire"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="presentation-et-service" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">la présentation et le service <br> vous ont-ils convenu ?</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-1"
            id="presentation-et-service"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
    </div>

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold ">Mise en vie de votre projet</h2>
        <div class="mb-8">
            <label for="rythme" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Qu'avez-vous pensez du rythme <br> de votre séjour ?</label>
            <textarea
            name="Remarque-1"
            id="rythme"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="thematique" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Qu’avez-vous pensez de la thématique <br> de votre projet ?</label>
            <textarea
            name="Remarque-1"
            id="thematique"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="region" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Qu’avez-vous pensez de la région ?</label>
            <textarea
            name="Remarque-1"
            id="region"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="amelioration" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 align-item-center">
            En quête d’amélioration des animations co-créées par notre équipe pédagogique <br> et notre cellule de développement pédagogique votre regard nous intéresse. <br>
            Auriez vous des idées ou des remarques à formuler concernant Les activités vécues durant le séjour <br> (Contenu, format, durée, matériel etc…) :  
            </label>
            <textarea
            name="Remarque-1"
            id="amelioration"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="5"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mx-8 my-12 justify-items-center text-center">
            <label class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-10 align-item-center font-bold">Le vivre ensemble à Odcvl <br> et la mise en animation de la vie quotidienne <br> est un axe important du projet Odcvl <br> Comment évaluez-vous l'organisation de ces temps ? :  </label>

            <div class="mb-8">
                <label for="lever-et-ptidej">Le lever et le petit déjeuner</label>
                <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
                </div>
                <textarea
                name="Remarque-1"
                id="lever-et-ptidej"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>  
            </div>

            <div class="mb-8">
                <label for="gestion-repas">La gestion des repas</label>
                <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
                </div>
                <textarea
                name="Remarque-1"
                id="gestion-repas"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>  
            </div>

            <div class="mb-8">
                <label for="temps-libre-calme">Les temps libres/calmes</label>
                <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
                </div>
                <textarea
                name="Remarque-1"
                id="temps-libre-calme"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>  
            </div>

            <div class="mb-8">
                <label for="douches">La gestion du temps des douches</label>
                <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
                </div>
                <textarea
                name="Remarque-1"
                id="douches"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>  
            </div>

            <div class="mb-8">
                <label for="le-coucher">Le coucher</label>
                <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="1">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="2">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="3">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="4">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-1">
                    <input type="radio" name="note" value="5">
                    <span>5</span>
                </label>
                </div>
                <textarea
                name="Remarque-1"
                id="le-coucher"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="5"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>  
            </div>

        </div>

    </div>
</form>

<?php require "../elements/footer.php" ?> 
<script src="/js/transport.js"></script>
<script src="/JS/equipements.js"></script>