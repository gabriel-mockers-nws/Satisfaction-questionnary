<?php
// Afficher toutes les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'dbConnect.php';
$pdoManager = new DBManager('odcvl');
$pdo = $pdoManager->getPDO();

function getPost($key) {
    return isset($_POST[$key]) ? $_POST[$key] : null;
}


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $donnee7 = null;
    $donnee8 = null;
    $donnee9 = null;
    $donnee10 = null;
    $donnee11 = null;
    $donnee35 = null;
    $donnee84 = null;
    $donnee85 = null;
    $donnee87 = null;


    $donnee1 = $_POST['note-1'];
    $donnee2 = getPost('Remarque-1');
    $donnee3 = $_POST['note'];
    $donnee4 = getPost('Remarque-2');
    $donnee5 = getPost('Remarque-3');
    $donnee6 = $_POST['transportOrganise'];
    if ($donnee6 == 'oui') {
        $donnee7 = getPost('compagnie');
        $donnee8 = getPost('satisfaction');
    } else {
        $donnee9 = getPost('raisons');
        $donnee10 = getPost('transporteur');
        $donnee11 = getPost('satisfaction-non');
    }
    $donnee12 = getPost('Remarque-4');
    $donnee13 = $_POST['note-2'];
    $donnee14 = getPost('Remarque-5');
    $donnee15 = $_POST['note-3'];
    $donnee16 = getPost('Remarque-6');
    $donnee17 = $_POST['note-4'];
    $donnee18 = $_POST['note-5'];
    $donnee19 = getPost('Remarque-7');
    $donnee20 = $_POST['note-6'];
    $donnee21 = getPost('Remarque-8');
    $donnee22 = $_POST['note-7'];
    $donnee23 = getPost('Remarque-9');
    $donnee24 = $_POST['note-8'];
    $donnee25 = getPost('Remarque-10');
    $donnee26 = $_POST['note-9'];
    $donnee27 = getPost('Remarque-11');
    $donnee28 = $_POST['note-10'];
    $donnee29 = getPost('Remarque-12');
    $donnee30 = $_POST['note-11'];
    $donnee31 = getPost('Remarque-13');
    $donnee32 = $_POST['note-12'];
    $donnee33 = getPost('Remarque-14');
    $donnee34 = $_POST['equipements'];
    if ($donnee34 == 'non') {
        $donnee35 = getPost('manques');
    } else {
        $donnee35 = null;  // Pas de manques si les équipements sont présents
    }
    $donnee36 = $_POST['note-13'];
    $donnee37 = getPost('Remarque-15');
    $donnee38 = $_POST['note-14'];
    $donnee39 = getPost('Remarque-16');
    $donnee40 = $_POST['note-15'];
    $donnee41 = getPost('Remarque-17');
    $donnee42 = $_POST['note-16'];
    $donnee43 = getPost('Remarque-18');
    $donnee44 = $_POST['note-17'];
    $donnee45 = getPost('Remarque-19');
    $donnee46 = $_POST['note-18'];
    $donnee47 = getPost('Remarque-20');
    $donnee48 = $_POST['note-19'];
    $donnee49 = getPost('Remarque-21');
    $donnee50 = getPost('Remarque-22');
    $donnee51 = getPost('Remarque-23');
    $donnee52 = getPost('Remarque-24');
    $donnee53 = getPost('Remarque-25');
    $donnee54 = $_POST['note-20'];
    $donnee55 = getPost('Remarque-26');
    $donnee56 = $_POST['note-21'];
    $donnee57 = getPost('Remarque-27');
    $donnee58 = $_POST['note-22'];
    $donnee59 = getPost('Remarque-28');
    $donnee60 = $_POST['note-23'];
    $donnee61 = getPost('Remarque-29');
    $donnee62 = $_POST['note-24'];
    $donnee63 = getPost('Remarque-30');
    $donnee64 = $_POST['outils-pedago'];
    $donnee65 = getPost('Remarque-31');
    $donnee66 = $_POST['note-satg'];
    $donnee67 = getPost('Remarque-32');
    $donnee68 = $_POST['note-satg1'];
    $donnee69 = getPost('Remarque-33');
    $donnee70 = $_POST['note-satg2'];
    // $donnee71 = getPost('Remarque-34');
    $donnee71 = $_POST['note-satg3'];
    $donnee72 = getPost('Remarque-35');
    $donnee73 = $_POST['note-satg4'];
    $donnee74 = getPost('Remarque-36');
    $donnee75 = $_POST['note-satg5'];
    $donnee76 = getPost('Remarque-37');
    $donnee77 = $_POST['note-satg6'];
    $donnee78 = getPost('Remarque-38');
    $donnee79 = $_POST['note-satg-1'];
    $donnee80 = getPost('Remarque-39');
    $donnee81 = getPost('Remarque-40');
    $donnee82 = $_POST['projet-futur']; // projetfuturbool
    if ($donnee82 === 'oui') {
        $donnee83 = null;                     // raisonsnotext
        $donnee84 = getPost('meme-maison');   // mememaisonbool
    } else {
        $donnee83 = getPost('raison-non');    // raisonsnotext
        $donnee84 = null;                     // mememaisonbool
    }    
    $donnee85 = $_POST['thematique'];
    if ($donnee85 == 'oui') {
        $donnee86 = getPost('laquelle');
    } else {
        $donnee86 = null;  // Pas de "laquelle" si thématique est "non"
    }
    $donnee87 = getPost('Remarque-41');
    $donnee88 = getPost('Remarque-34');


    $stmt = $pdo->prepare("INSERT INTO classe (constructionnotes, contructiontext, administratifnote, administratiftext, organisationtext, transportbool, compagnietext, satisfaittext, raisontext, transporteurtext, satisfactionautretext, premierressentittext, accueilresponsablenote, accueilresponsabletext, accueilagentsnote, accueilagentstext, qualitemaisongeneralenote, propretegeneralenote, propretegeneraletext, chambrenote, chambretext, rangementsnote, rangementtext, sanitairesnotes, sanitairestext, chauffagenote, chauffagetext, salletravailnote, salletravailtext, sallemangernote, sallemangertext, exterieursnote, exterieurstext, equipementsbool, manquestext, qualplatmidisoirnote, qualplatmidisoirtext, quantitenote, quantitetext, petidejnote, petitdejtext, goutersnote, goutertext, varmenusnote, varmenustext, regimenote, regimetext, presservicenote, presservicetext, rythmetext, thematiquetext, regiontext, ameliorationstext, leverptidejnote, leverptidejtext, gestrepasnote, gestrepastext, tempslibresnote, tempslibrestext, douchesnote, douchestext, couchernote, couchertext, outilspedagobool, remarquestext, acpeadjointnote, acpeadjointtext, acpeequipeanimnote, acpeequipeanimtext, acpeintervnote, disecadjointnote, disecadjointtext, disecequipeanimnote, disecequipeanimtext, desecintervnote, disecintervtext, satisfglobnote, satifglobtext, attentesnote, attentetext, exploittext, projetfuturbool, raisonsnotext, mememaisonbool, thematiquebool, laquelle, datefuture, acpeintervtext) VALUES (" . rtrim(str_repeat('?,', 88), ',') . ")");

    $stmt->execute([$donnee1, $donnee2, $donnee3, $donnee4, $donnee5, $donnee6, $donnee7, $donnee8, $donnee9, $donnee10, $donnee11, $donnee12, $donnee13, $donnee14, $donnee15, $donnee16, $donnee17, $donnee18, $donnee19, $donnee20, $donnee21, $donnee22, $donnee23, $donnee24, $donnee25, $donnee26, $donnee27, $donnee28, $donnee29, $donnee30, $donnee31, $donnee32, $donnee33, $donnee34, $donnee35, $donnee36, $donnee37, $donnee38, $donnee39, $donnee40, $donnee41, $donnee42, $donnee43, $donnee44, $donnee45, $donnee46, $donnee47, $donnee48, $donnee49, $donnee50, $donnee51, $donnee52, $donnee53, $donnee54, $donnee55, $donnee56, $donnee57, $donnee58, $donnee59, $donnee60, $donnee61, $donnee62, $donnee63, $donnee64, $donnee65, $donnee66, $donnee67, $donnee68, $donnee69, $donnee70, $donnee71, $donnee72, $donnee73, $donnee74, $donnee75, $donnee76, $donnee77, $donnee78, $donnee79, $donnee80, $donnee81, $donnee82, $donnee83, $donnee84, $donnee85, $donnee86, $donnee87, $donnee88]);  
    
    $lastInsertId = $pdo->lastInsertId();

    require_once 'export_csv.php';
    $formType = 'classe'; // ou 'groupes' si c’est le bon formulaire
    $csvContent = exportCSVContent($pdo, $formType, (int)$lastInsertId);

    require_once 'send_mail.php';
    sendMailWithRawCSV($csvContent, "export_{$formType}_{$lastInsertId}.csv");
 

};

?>