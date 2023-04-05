<?php

    function testEnregistrerUtilisateurNomMotDePasseValides() {
        $nomUtilisateur = 'john';
        $motDePasse = 'secret';
        enregistrerUtilisateur($nomUtilisateur, $motDePasse);
        $resultatAttendu = $motDePasse;
        $resultat = file_get_contents($nomUtilisateur . '.txt');
        return ($resultat === $resultatAttendu);
    }

    function testEnregistrerUtilisateurNomVide() {
        $nomUtilisateur = '';
        $motDePasse = 'secret';
        enregistrerUtilisateur($nomUtilisateur, $motDePasse);
        return !file_exists($nomUtilisateur . '.txt');
    }

    function testEnregistrerUtilisateurMotDePasseVide() {
        $nomUtilisateur = 'john';
        $motDePasse = '';
        enregistrerUtilisateur($nomUtilisateur, $motDePasse);
        return !file_exists($nomUtilisateur . '.txt');
    }

    function testEnregistrerUtilisateurNomAvecCaracteresSpeciaux() {
        $nomUtilisateur = 'john!@#$%';
        $motDePasse = 'secret';
        enregistrerUtilisateur($nomUtilisateur, $motDePasse);
        return !file_exists($nomUtilisateur . '.txt');
    }

    function testEnregistrerUtilisateurNomAvecEspaces() {
        $nomUtilisateur = 'john doe';
        $motDePasse = 'secret';
        enregistrerUtilisateur($nomUtilisateur, $motDePasse);
        return !file_exists($nomUtilisateur . '.txt');
    }

    function testEnregistrerUtilisateurNomDejaExistant() {
        $nomUtilisateur = 'john';
        $motDePasse = 'secret';
        enregistrerUtilisateur($nomUtilisateur, $motDePasse);
        enregistrerUtilisateur($nomUtilisateur, 'nouveau_mot_de_passe');
        $resultatAttendu = $motDePasse;
        $resultat = file_get_contents($nomUtilisateur . '.txt');
        return ($resultat === $resultatAttendu);
    }

    function testEnregistrerUtilisateurFichierInaccessible() {
        $nomUtilisateur = 'john';
        $motDePasse = 'secret';
        chmod($nomUtilisateur . '.txt', 0444); // rendre le fichier en lecture seule
        enregistrerUtilisateur($nomUtilisateur, $motDePasse);
        chmod($nomUtilisateur . '.txt', 0644); // rétablir les permissions du fichier
        return !file_exists($nomUtil
    }

?>