<?php 
$title = "Groupes packagés";
require_once __DIR__ . '/../elements/header.php';
?> 
<h1 class="text-5xl text-center mt-32">Groupes packagés</h1>
<form method="post" action="" id="groupes-packages" class="mx-8 my-12">
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold ">Informations générales</h2>
        <div class="mb-8">
            <label for="groupe" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Nom de votre groupe</label>
            <textarea
            name="nom_groupe"
            id="groupe"
            placeholder=" Entrez nom groupe ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md " 
            required></textarea>
        </div>

        <div class="mb-8">
            <label for="email" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Votre mail</label>
            <textarea
            name="email"
            id="email"
            placeholder=" Entrez votre mail ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md " 
            required></textarea>
        </div>

        <div class="mb-8">
            <label for="adresse" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Votre adresse</label>
            <textarea
            name="adresse"
            id="adresse"
            placeholder=" Entrez votre adresse ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md " 
            required></textarea>
        </div>

        <div class="mb-8">
            <label for="type_groupe" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Vous êtes venu :</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="type_groupe" value="famille" class="radio-button" required>
                    <span>En Famille</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="type_groupe" value="groupe" class="radio-button" required>
                    <span>En groupe</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="type_groupe" value="amis" class="radio-button" required>
                    <span>Entre amis</span>
                </label>
            </div>
        </div>

        <div class="mb-8">
            <label for="but_sejour" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">But de votre séjour :</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="but_sejour" value="Vacances" class="radio-button" required>
                    <span>Vacances</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="but_sejour" value="Formation" class="radio-button" required>
                    <span>Formation</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="but_sejour" value="Stage sportif" class="radio-button" required>
                    <span>Stage sportif</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="but_sejour" value="Raisons professionnelles" class="radio-button" required>
                    <span>Raisons professionnelles</span>
                </label>
            </div>
        </div>

        <div class="mb-8">
            <label for="centre" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Centre</label>
            <select 
            name="Centre" 
            id="centre"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md text-center"
            required>
            <option value="">-- Selectionnez une option --</option>
            <option value="Le Pavillon des Officiers - Mont-Dauphin">Le Pavillon des Officiers</option>
            <option value="Les Coussoules - Leucate">Les Coussoules</option>
            <option value="Le Steredenn - Douarnenez">Le Steredenn</option>
            <option value="L'Estuaire - Le Verdon-sur-Mer">L'Estuaire</option>
            <option value="La Jument Verte - Courlan">La Jument Verte</option>
            <option value="La Fermeraie - Luttenbach-Près-Munster">La Fermeraie</option>
            <option value="Le Manoir d'Argueil  - Argueil">Le Manoir d'Argueil</option>
            <option value="La Maisondici - Les Voivres">La Maisondici</option>
            <option value="Le Chalet d'Artimont - La Bresses">Le Chalet d'Artimont</option>
            <option value="Le Haut du Tôt - Sapois">Le Haut du Tôt</option>
            <option value="Le Pont du Metty - La Bresse">Le Pont du Metty</option>
            <option value="Le Tremplin de la Mauselaine - Gérardmer">Le Tremplin de la Mauselaine</option>
            <option value="Centre Partenaires">Centres Partenaires</option>
            </select>
        </div>
        
        <div class="mb-8">
            <label for="dates" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Dates du séjour</label>
            <div class="inline-flex items-center space-x-2 text-xl">
                <input 
                type="date" 
                name="date-debut" 
                id="dates-deb" 
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md ">
                </input>
                <p>au</p>
                <input 
                type="date" 
                name="date-fin" 
                id="dates-fin" 
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md ">
                </input>
            </div>
        </div>
    </div>

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold ">Informations avant séjour</h2>
        <div class="mb-8">
            <label for="destination" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La destination</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <span>1</span>
                    <input type="radio" name="destination" value="1" class="radio-button" required>

                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="destination" value="2" class="radio-button" required>
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="destination" value="3" class="radio-button" required>
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="destination" value="4" class="radio-button" required>
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="destination" value="5" class="radio-button" required>
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="destination-text"
            id="destination"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="centre-info" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Sur le centre</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="centre-info" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="centre-info" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="centre-info" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="centre-info" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="centre-info" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="centre-info-text"
            id="centre-info"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
        
        <div class="mb-8">
            <label for="accessibilite" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">L'accessibilité</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="accessibilite" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="accessibilite" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="accessibilite" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="accessibilite" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="accessibilite" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="accessibilite-text"
            id="accessibilite"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="contact" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Contact avant séjour</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="contact" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="contact" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="contact" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="contact" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="contact" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="contact-text"
            id="contact"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="activites" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les activités et leurs tarifs</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="activites-text"
            id="activites"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

    </div>

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold  text-center">Notre maison tous séjour</h2>
        <div class="mb-8">
            <label for="premier-ressenti" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5"">Quel fut votre premier ressenti  lors de votre <br> arrivée dans notre maison tous séjours ?</label>
            <textarea
            name="premier-ressenti-text"
            id="premier-ressenti"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <h2 class="text-2xl font-bold  text-center">Notre Equipe</h2>
        <div class="mb-8">
            <label  class="block text-lg text-center mx-auto w-full leading-relaxed mt-4 mb-1.5 font-bold"">Comment évaluez-vous l'accueil, <br> la disponibilité  et l'écoute de :</label>
            <label for="equipe" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5"">Notre équipe</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="equipe" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="equipe" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="equipe" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="equipe" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="equipe" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="equipe-text"
            id="equipe"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>

            <label for="responsable-de-maison" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Notre responsable de maison ou Adjoint ou Chargé d’accueil :</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="responsable-de-maison" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="responsable-de-maison" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="responsable-de-maison" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="responsable-de-maison" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="responsable-de-maison" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="responsable-de-maison-text"
            id="responsable-de-maison"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>

            <label for="agent-polyvalents" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5"">Nos agents polyvalents / cuisiniers</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="agent-polyvalents" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="agent-polyvalents" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="agent-polyvalents" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="agent-polyvalents" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="agent-polyvalents" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="agent-polyvalents-text"
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
                    <input type="radio" name="qualite-maison" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="qualite-maison" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="qualite-maison" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="qualite-maison" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="qualite-maison" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>

            <div class="mb-8">
                <label for="propreté-générale" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La propreté générale</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="proprete-generale" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="proprete-generale" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="proprete-generale" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="proprete-generale" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="proprete-generale" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="propreté-générale-text"
                id="propreté-générale"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>
            
            <div class="mb-8">
                <label for="chambres" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les chambres (confort / literie /propreté)</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="chambres" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="chambres" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="chambres" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="chambres" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="chambres" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="chambres-text"
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
                        <input type="radio" name="rangements" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="rangements" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="rangements" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="rangements" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="rangements" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="rangements-text"
                id="rangements"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="espaces-communs" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les espaces communs (salles d’activités, accueil, sanitaires)</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="espaces-communs" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="espaces-communs" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="espaces-communs" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="espaces-communs" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="espaces-communs" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="espaces-communs-text"
                id="espaces-communs"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <h2 class="text-2xl font-bold  text-center">L'entretien pendant le séjour : </h2>
            <div class="mb-8">
                <label for="salles-activites" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les salles d'activités</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="salles-activites" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="salles-activites" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="salles-activites" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="salles-activites" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="salles-activites" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="salles-activites-text"
                id="salles-activites"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
            </div>

            <div class="mb-8">
                <label for="salle-manger" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La salle à manger</label>
                <div class="flex justify-center gap-4 my-4">
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="salle-manger" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="salle-manger" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="salle-manger" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="salle-manger" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="salle-manger" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="salle-manger-text"
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
                        <input type="radio" name="exterieurs" value="1" class="radio-button">
                        <span>1</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="exterieurs" value="2" class="radio-button">
                        <span>2</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="exterieurs" value="3" class="radio-button">
                        <span>3</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="exterieurs" value="4" class="radio-button">
                        <span>4</span>
                    </label>
                    <label class="inline-flex items-center space-x-2 text-xl">
                        <input type="radio" name="exterieurs" value="5" class="radio-button">
                        <span>5</span>
                    </label>
                </div>
                <textarea
                name="exterieurs-text"
                id="exterieurs"
                placeholder=" Entrez votre avis ici"
                cols="45"
                rows="2"
                class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
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
    </div>
    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold  text-center">La restauration</h2>
        <div class="mb-8">
            <label for="qualite" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Notez la qualité des plats (midi et soir)</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="qualite" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="qualite" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="qualite" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="qualite" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="qualite" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="qualite-text"
            id="qualite"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="quantite" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Notez la quantité</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="quantite" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="quantite" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="quantite" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="quantite" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="quantite" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="quantite-text"
            id="quantite"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="petit-déjeuner" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Notez les petit-déjeuners</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="petit-dejeuner" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="petit-dejeuner" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="petit-dejeuner" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="petit-dejeuner" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="petit-dejeuner" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="petit-dejeuner-text"
            id="petit-dejeuner"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="variete" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La variété des menus</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="variete" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="variete" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="variete" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="variete" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="variete" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="variete-text"
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
                    <input type="radio" name="regimes-alimentaire" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="regimes-alimentaire" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="regimes-alimentaire" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="regimes-alimentaire" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="regimes-alimentaire" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="regimes-alimentaire-text"
            id="regimes-alimentaire"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="presentation-et-service" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La présentation et le service <br> vous ont-ils convenu ?</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="presentation-et-service" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="presentation-et-service" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="presentation-et-service" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="presentation-et-service" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="presentation-et-service" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="presentation-et-service-text"
            id="presentation-et-service"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
    </div>

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold  text-center">Activités pendant le séjour</h2>
        <div class="mb-8">
            <label for="location-materiel" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Location de matériel Odcvl ou à l’extérieur</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="location-materiel" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="location-materiel" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="location-materiel" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="location-materiel" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="location-materiel" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="location-materiel-text"
            id="location-materiel"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="activites-encadrees" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Activités encadrées </label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites-encadrees" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites-encadrees" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites-encadrees" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites-encadrees" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites-encadrees" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="activites-encadrees-text"
            id="activites-encadrees"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="activites-libres" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Activités libres mises en place</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites-libres" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites-libres" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites-libres" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites-libres" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="activites-libres" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="activites-libres-text"
            id="activites-libres"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <h3 class="font-bold text-lg text-center mt-6 mb-4">Vos attentes</h3>
        <div class="mb-8">
            <label for="autres-activites" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Quelles autres activités aimeriez-vous pratiquer ?</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="autres-activites" value="Autonomie" class="radio-button">
                    <span>En autonomie</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="autres-activites" value="Encadrée" class="radio-button">
                    <span>Encadrée par un professionnel</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="autres-activites" value="Avec prêt de matériel" class="radio-button">
                    <span>Avec prêt de matériel</span>
                </label>
            </div>
            <textarea
            name="autres-activites-text"
            id="autres-activites"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div> 
    </div>

    <h2 class="text-2xl font-bold  text-center">Si vous aviez des suggestions pour améliorer votre séjour</h2>
    <div class="mx-8 my-12 justify-items-center text-center">
        <div class="mb-8">
            <label for="coherence-communication" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La cohérence de notre communication</label>
            <textarea
            name="coherence-communication-text"
            id="coherence-communication"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="informations-recue" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les informations reçues avant séjour</label>
            <textarea
            name="informations-recue-text"
            id="informations-recue"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="convivialite-accueil" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">La convivialité de notre accueil</label>
            <textarea
            name="convivialite-accueil-text"
            id="convivialite-accueil"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="confort" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Le confort de notre Maison (literie, etc)</label>
            <textarea
            name="confort-text"
            id="confort"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="conseils-region" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les conseils sur la région</label>
            <textarea
            name="conseils-region-text"
            id="conseils-region"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>

        <div class="mb-8">
            <label for="conseils-activites" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Les conseils sur les activités Maison, (à faire sur place sans la voiture ou le Car)</label>
            <textarea
            name="conseils-activites-text"
            id="conseils-activites"
            placeholder=" Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
    </div>

    <div class="mx-8 my-12 justify-items-center text-center">
        <h2 class="text-3xl font-bold ">Après votre séjour</h2>
        <div class="mb-8">
            <label for="satisfaction-global" class="block text-base text-center mx-auto w-full leading-relaxed mt-4 mb-1.5">Êtes vous globalement satisfait de votre séjour ?</label>
            <div class="flex justify-center gap-4 my-4">
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="satisfaction-global" value="1" class="radio-button">
                    <span>1</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="satisfaction-global" value="2" class="radio-button">
                    <span>2</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="satisfaction-global" value="3" class="radio-button">
                    <span>3</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="satisfaction-global" value="4" class="radio-button">
                    <span>4</span>
                </label>
                <label class="inline-flex items-center space-x-2 text-xl">
                    <input type="radio" name="satisfaction-global" value="5" class="radio-button">
                    <span>5</span>
                </label>
            </div>
            <textarea
            name="satisfaction-global-text"
            id="satisfaction-global"
            placeholder=" Entrez votre avis ici"
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
            name="date-text"
            id="date"
            placeholder="Entrez votre avis ici"
            cols="45"
            rows="2"
            class="rounded-lg border-solid border-[#bf198c] border-2 shadow-[#C73F67] shadow-md "></textarea>
        </div>
    </div>
    <div class="flex justify-center mt-4">
        <button class="shadow-md w-64 py-4 rounded-lg bg-[#bf198c] text-white hover:bg-[#C73F67]" id="btn-sub" type="submit">
            Envoyer le formulaire
        </button>
    </div>
</form>

<?php require __DIR__ . '/../elements/footer.php'; ?> 
<script src="../JS/equipements.js"></script>
<script src="../JS/projet-futur.js"></script>
<script src="../JS/thematique.js"></script>
