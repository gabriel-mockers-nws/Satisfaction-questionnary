<?php 
$title = "Classes";
require_once "../elements/header.php";
?> 

<h1 class="text-5xl text-center mt-32">Classes découvertes</h1>
<form method="post" action="../methodes/createDATA.php" id="classe-découverte" class="mx-8 my-12 justify-items-center">

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold ">Administratif</h2>
        <div class="mb-8">
            <label for="construction-projet" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">
                Comment évaluez-vous la construction <br> de votre projet avec le siège ?
            </label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-1" value="1" class="radio-button" required>
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-1" value="2" class="radio-button" required>
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-1" value="3" class="radio-button" required>
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-1" value="4" class="radio-button" required>
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-1" value="5" class="radio-button" required>
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-1"
            id="construction-projet"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
        <div class="mb-8">
            <label for="suivis-admin" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5"">Comment évaluez-vous le suivis administratif <br> du séjour avec le siège ?</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-2"
            id="suivis-admin"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
        <div class="mb-8">
            <label for="satisfaction-orga" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Avez-vous été satisfait de l'organisation <br> du séjour avec notre équipe de maison ?</label>
            <textarea
            name="Remarque-3"
            id="satisfaction-orga"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
    </div>

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold text-center ">Le transport</h2>
        <div>
            <label class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Votre transport a-t-il été organisé par Odcvl ?</label>
            <label class="inline-flex items-center space-x-2 text-xl">
                <input type="radio" name="transportOrganise" value="oui" class="radio-button">
                <span>Oui</span>
            </label>
            <label class="inline-flex items-center space-x-2 ml-4">
                <input type="radio" name="transportOrganise" value="non" class="radio-button">
                <span>Non</span>
            </label>
        </div>
        <!-- Ici s'ajouteront dynamiquement les questions -->
    <div id="transport-reponses" class="mt-6 space-y-4"></div>
    </div>

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold  text-center">Notre maison tous séjour</h2>
        <div class="mb-8">
            <label for="premier-ressenti" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5"">Quel fut votre premier ressenti  lors de votre <br> arrivée dans notre maison tous séjours ?</label>
            <textarea
            name="Remarque-4"
            id="premier-ressenti"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label  class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 font-bold"">Comment évaluez-vous l'accueil, <br> la disponibilité  et l'écoute de :</label>
            <label for="responsable-de-maison" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5"">Notre responsable de maison</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-2" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-2" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-2" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-2" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-2" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-5"
            id="responsable-de-maison"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>

            <label for="agent-polyvalents" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5"">Nos agents polyvalents / cuisiniers</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-3" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-3" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-3" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-3" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-3" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-6"
            id="agent-polyvalents"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
        
        <div class="mb-8">
            <label class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 font-bold">Comment évaluez-vous la qualité <br> de notre maison tous séjour ?</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-4" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-4" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-4" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-4" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-4" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>

            <div class="mb-8">
                <label for="propreté-générale" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La propreté générale</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-5" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-5" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-5" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-5" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-5" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-7"
                id="propreté-générale"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>
            
            <div class="mb-8">
                <label for="chambres" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les chambres</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-6" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-6" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-6" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-6" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-6" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-8"
                id="chambres"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="rangements" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les rangements</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-7" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-7" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-7" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-7" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-7" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-9"
                id="rangements"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="sanitaires" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les sanitaires</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-8" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-8" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-8" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-8" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-8" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-10"
                id="sanitaires"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="chauffage" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Le chauffage</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-9" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-9" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-9" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-9" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-9" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-11"
                id="chauffage"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="salles-travail" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les salles de travail</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-10" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-10" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-10" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-10" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-10" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-12"
                id="salles-travail"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="salle-manger" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La salle à manger</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-11" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-11" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-11" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-11" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-11" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-13"
                id="salle-manger"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="exterieurs" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les extérieurs</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-12" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-12" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-12" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-12" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="note-12" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="Remarque-14"
                id="exterieurs"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>
        </div>

        <div>
            <label class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Avez-vous bénéficié de tous les équipements <br> dont vous aviez besoin ?</label>
            <label class="inline-flex items-center space-x-2 text-xl">
                <input type="radio" name="equipements" value="oui" class="radio-button">
                <span>Oui</span>
            </label>
            <label class="inline-flex items-center space-x-2 text-xl">
                <input type="radio" name="equipements" value="non" class="radio-button">
                <span>Non</span>
            </label>
        </div>
        <div id="manquant" class="mt-6 space-y-4"></div>
        </div>
    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold  text-center">La restauration</h2>
        <div class="mb-8">
            <label for="qual-plat" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Notez la qualité des plats (midi et soir)</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-13" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-13" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-13" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-13" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-13" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-15"
            id="qual-plat"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="qte" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Notez la quantité</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-14" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-14" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-14" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-14" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-14" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-16"
            id="qte"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="petit-déjeuner" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Notez les petit-déjeuners</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-15" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-15" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-15" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-15" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-15" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-17"
            id="petit-dejeuner"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="gouter" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Notez les goûters</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-16" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-16" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-16" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-16" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-16" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-18"
            id="gouter"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="variete" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La variété des menus</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-17" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-17" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-17" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-17" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-17" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-19"
            id="variete"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="regimes-alimentaire" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La prise en compte des régimes alimentaires <br> vous a-t-elle convenue ?</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-18" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-18" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-18" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-18" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-18" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-20"
            id="regimes-alimentaire"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="presentation-et-service" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">la présentation et le service <br> vous ont-ils convenu ?</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-19" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-19" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-19" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-19" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-19" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-21"
            id="presentation-et-service"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
    </div>

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold ">Mise en vie de votre projet</h2>
        <div class="mb-8">
            <label for="rythme" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Qu'avez-vous pensez du rythme <br> de votre séjour ?</label>
            <textarea
            name="Remarque-22"
            id="rythme"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="thematique" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Qu’avez-vous pensez de la thématique <br> de votre projet ?</label>
            <textarea
            name="Remarque-23"
            id="thematique"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="region" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Qu’avez-vous pensez de la région ?</label>
            <textarea
            name="Remarque-24"
            id="region"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8 flex flex-col items-center">
            <div class="inline-block" style="width: calc(45ch + 1rem);">
                <label
                for="amelioration"
                class="block text-base text-center leading-relaxed mt-4 mb-1.5"
                >
                En quête d’amélioration des animations co-créées par notre équipe pédagogique
                et notre cellule de développement pédagogique, votre regard nous intéresse.
                Auriez-vous des idées ou des remarques à formuler concernant les activités vécues durant le séjour
                (Contenu, format, durée, matériel, etc…) :
                </label>

                <textarea
                name="Remarque-25"
                id="amelioration"
                placeholder="Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md"
                ></textarea>
            </div>
        </div>


        <div class="mx-8 my-12 justify-items-center text-center">
            <h3 class="block text-2xl text-center mx-auto w-full leading-relaxed mt-4 mb-10 align-item-center font-bold">Le vivre ensemble à Odcvl <br> et la mise en animation de la vie quotidienne <br> est un axe important du projet Odcvl <br> Comment évaluez-vous l'organisation de ces temps ? :  </h3>

            <div class="mb-8">
                <label for="lever-et-ptidej" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 align-item-center">Le lever et le petit déjeuner</label>
                <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-20" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-20" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-20" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-20" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-20" value="5" class="radio-button">
                    <span>5</span>
                </label>
                </div>
                <textarea
                name="Remarque-26"
                id="lever-et-ptidej"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>  
            </div>

            <div class="mb-8"> 
                <label for="gestion-repas" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 align-item-center">La gestion des repas</label>
                <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-21" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-21" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-21" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-21" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-21" value="5" class="radio-button">
                    <span>5</span>
                </label>
                </div>
                <textarea
                name="Remarque-27"
                id="gestion-repas"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>  
            </div>

            <div class="mb-8">
                <label for="temps-libre-calme" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 align-item-center">Les temps libres/calmes</label>
                <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-22" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-22" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-22" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-22" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-22" value="5" class="radio-button">
                    <span>5</span>
                </label>
                </div>
                <textarea
                name="Remarque-28"
                id="temps-libre-calme"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>  
            </div>

            <div class="mb-8">
                <label for="douches" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 align-item-center">La gestion du temps des douches</label>
                <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-23" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-23" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-23" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-23" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-23" value="5" class="radio-button">
                    <span>5</span>
                </label>
                </div>
                <textarea
                name="Remarque-29"
                id="douches"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>  
            </div>

            <div class="mb-8">
                <label for="le-coucher" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 align-item-center">Le coucher</label>
                <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-24" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-24" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-24" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-24" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-24" value="5" class="radio-button">
                    <span>5</span>
                </label>
                </div>
                <textarea
                name="Remarque-30"
                id="le-coucher"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>  
            </div>
        </div>

        <div>
            <label class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-10 align-item-center font-bold"> Avez-vous bénéficié d'outils pédagogique durant la vie quotidienne ?</label>
            <label class="inline-flex items-center space-x-2 text-xl">
                <input type="radio" name="outils-pedago" value="oui" class="radio-button">
                <span>Oui</span>
            </label>
            <label class="inline-flex items-center space-x-2 text-xl">
                <input type="radio" name="outils-pedago" value="non" class="radio-button">
                <span>Non</span>
            </label>

            <label for="remarque-vie-quot" class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-10 align-item-center font-bold"> Avez-vous des remarques à nous apporter ?</label>
            <textarea
                name="Remarque-31"
                id="remarque-vie-quot"
                placeholder=" Entrez vos remarques ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
        
        <div class="mb-8">
            <h3 class="block text-2xl text-center mx-auto w-full leading-relaxed mt-4 mb-10 align-item-center font-bold">Comment évaluez-vous  de : </h3>
            <div>
            <h4 class="block text-center text-2xl mx-auto w-full leading-relaxed mt-4 mb-10 align-item-center">L'accueil et la pédagogie de:</h4>
                <div>
                    <label for="adjoint"  class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 align-item-center">L'adjoint pédagogique de maison</label>
                    <div class="flex justify-center gap-4 my-4">
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg" value="1" class="radio-button">
                            <span>1</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg" value="2" class="radio-button">
                            <span>2</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg" value="3" class="radio-button">
                            <span>3</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg" value="4" class="radio-button">
                            <span>4</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg" value="5" class="radio-button">
                            <span>5</span>
                        </label>
                    </div>
                    <textarea 
                        name="Remarque-32" 
                        id="adjoint"
                        placeholder=" Entrez vos remarques ici"
                        cols="45"
                        rows="2"
                        class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
                </div>

                <div>
                    <label for="equipe"  class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 align-item-center">L'équipe d'animation Odcvl</label>
                    <div class="flex justify-center gap-4 my-4">
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg1" value="1" class="radio-button">
                            <span>1</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg1" value="2" class="radio-button">
                            <span>2</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg1" value="3" class="radio-button">
                            <span>3</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg1" value="4" class="radio-button">
                            <span>4</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg1" value="5" class="radio-button">
                            <span>5</span>
                        </label>
                    </div>
                    <textarea 
                        name="Remarque-33" 
                        id="equipe"
                        placeholder=" Entrez vos remarques ici"
                        cols="45"
                        rows="2"
                        class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
                </div>

                <div>
                    <label for="inter-ext"  class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 align-item-center">Les intervenants extérieurs</label>
                    <div class="flex justify-center gap-4 my-4">
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg2" value="1" class="radio-button">
                            <span>1</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg2" value="2" class="radio-button">
                            <span>2</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg2" value="3" class="radio-button">
                            <span>3</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg2" value="4" class="radio-button">
                            <span>4</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg2" value="5" class="radio-button">
                            <span>5</span>
                        </label>
                    </div>
                    <textarea 
                        name="Remarque-34" 
                        id="inter-ext"
                        placeholder=" Entrez vos remarques ici"
                        cols="45"
                        rows="2"
                        class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
                </div>
            </div>
            <div>
                <h4 class="block text-2xl text-center mx-auto w-full leading-relaxed mt-4 mb-10 align-item-center">La disponibilité et l'écoute de:</h4>
                <div>
                    <label for="adjoint"  class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 align-item-center">L'adjoint pédagogique de maison</label>
                    <div class="flex justify-center gap-4 my-4">
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg3" value="1" class="radio-button" required>
                            <span>1</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg3" value="2" class="radio-button" required>
                            <span>2</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg3" value="3" class="radio-button" required>
                            <span>3</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg3" value="4" class="radio-button" required>
                            <span>4</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg3" value="5" class="radio-button" required>
                            <span>5</span>
                        </label>
                    </div>
                    <textarea 
                        name="Remarque-35" 
                        id="adjoint"
                        placeholder=" Entrez vos remarques ici"
                        cols="45"
                        rows="2"
                        class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
                </div>

                <div>
                    <label for="equipe"  class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 align-item-center">L'équipe d'animation Odcvl</label>
                    <div class="flex justify-center gap-4 my-4">
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg4" value="1" class="radio-button">
                            <span>1</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg4" value="2" class="radio-button">
                            <span>2</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg4" value="3" class="radio-button">
                            <span>3</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg4" value="4" class="radio-button">
                            <span>4</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg4" value="5" class="radio-button">
                            <span>5</span>
                        </label>
                    </div>
                    <textarea 
                        name="Remarque-36" 
                        id="equipe"
                        placeholder=" Entrez vos remarques ici"
                        cols="45"
                        rows="2"
                        class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
                </div>

                <div>
                    <label for="inter-ext"  class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 align-item-center">Les intervenants extérieurs</label>
                    <div class="flex justify-center gap-4 my-4">
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg5" value="1" class="radio-button">
                            <span>1</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg5" value="2" class="radio-button">
                            <span>2</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg5" value="3" class="radio-button">
                            <span>3</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg5" value="4" class="radio-button">
                            <span>4</span>
                        </label>
                        <label class="inline-flex items-center space-x-2 text-xl">
                            <input type="radio" name="note-satg5" value="5" class="radio-button">
                            <span>5</span>
                        </label>
                    </div>
                    <textarea 
                        name="Remarque-37" 
                        id="inter-ext"
                        placeholder=" Entrez vos remarques ici"
                        cols="45"
                        rows="2"
                        class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
                </div>
            </div>

        </div>
    </div>

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold ">Après votre séjour</h2>
        <div class="mb-8">
            <label for="sat-glob" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Êtes vous globalement satisfait de votre séjour ?</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-satg6" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-satg6" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-satg6" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-satg6" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-satg6" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-38"
            id="sat-glob"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>


        <div class="mb-8">
            <label for="attentes-sejour" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Au regard de vos orientations pédagogiques, <br> ce séjour à t'il répondu à vos attentes ? </label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-satg-1" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-satg-1" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-satg-1" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-satg-1" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="note-satg-1" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="Remarque-39"
            id="attentes-sejour"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="exploit" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Comment allez vous exploiter le séjour <br> à votre retour à l'école ? </label>
            <textarea
            name="Remarque-40"
            id="exploit"
            placeholder="Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        
        <div>
            <label class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Envisagez-vous un projet futur à Odcvl ?</label>
            <label class="inline-flex items-center space-x-2 text-xl">
                <input type="radio" name="projet-futur" value="oui" class="radio-button">
                <span>Oui</span>
            </label>
            <label class="inline-flex items-center space-x-2 text-xl">
                <input type="radio" name="projet-futur" value="non" class="radio-button">
                <span>Non</span>
            </label>
        </div>
        <div id="projet-maison" class="mt-6 space-y-4"></div>
        
        <div>
            <label class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Avez-vous déjà une idées d'une thématique ?</label>
            <label class="inline-flex items-center space-x-2 text-xl">
                <input type="radio" name="thematique" value="oui" class="radio-button">
                <span>Oui</span>
            </label>
            <label class="inline-flex items-center space-x-2 text-xl">
                <input type="radio" name="thematique" value="non" class="radio-button">
                <span>Non</span>
            </label>
            <div id="idée" class="mt-6 space-y-4"></div>
        </div>

        <div class="mb-8">
            <label for="date" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">
                Avez-vous une idée de date ?
            </label>
            <textarea
            name="Remarque-41"
            id="date"
            placeholder="Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
    </div>
    <button class="shadow-md w-64 py-4 rounded-lg bg-[#bf198c] text-white hover:bg-[#C73F67] " id="btn-sub" type="submit">
        Envoyer le formulaire
    </button>
</form>

<?php require "../elements/footer.php" ?> 
<script src="/js/transport.js"></script>
<script src="/JS/equipements.js"></script>
<script src="/JS/projet-futur.js"></script>
<script src="/JS/thematique.js"></script>
<!-- <script src="/JS/btn-reset.js"></script> -->