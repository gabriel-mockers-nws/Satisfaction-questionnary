<strong> Projet de stage Manoir d'Argueil </strong>

Ce projet vise à la digitalisétion de formulaires de satisfaction clients pour ODCVL.

il auras pour but de digitaliser les formulaires existant sur papier pour les avoir sur tablette. Je fait le choix d'utiliser aussi tailwind pour plus de rapidité et de simplicité. npm -i pour réinstaller après un gitclone. Prière de remote remove origine. 

Le resultat de ces formulaires devra aussi être stocker dans une base de données (SQL) et apparaitre sous forme de tableau classé par types de formulaires. Un mail pourra être envoyé après un calcul de chaque questionnaire si la note totale est sous un seuil définie. 

Le choix de php pour ce projet se justifie par la collecte de base de données, mais aussi par mon niveau de maitrise sur les autres langages pouvant aussi être utilisés pour tel que node.js, que je connais bien moins que php. 

Projet réalisé en PHP, stylisé avec Taillwind CSS. 

Pour lancer un serveur accessible sur un autre appareil connecté au même réseau faire "php -S 0.0.0.0:8000" au lieu de php -S localhost:8000. Récup l'IPV4 et la mettre dans les barres de recheche http://[ton-ip-locale]:8000 ce qui peut donner par exemple http://192.168.12.15:8000 