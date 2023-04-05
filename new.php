<?php

        function create_user($login, $password) {
         // Vérifier que le nom d'utilisateur et le mot de passe ne sont pas vide
            if (!empty($login)) &&  (!empty($password)){
                try {
                    // Vérifier que le login ne contient pas de caractères spéciaux
                    if (!preg_match('/[^A-Za-z0-9]/', $login)) {
                        try {
                            // Vérifier que le mot de passe contient au moins 8 caractères
                            if (strlen($password) >= 8) {
                                try{
                                    // Vérifier que le mot de passe contient au moins un caractère spécial
                                    if (preg_match('/[^A-Za-z0-9]/', $password)) {
                                        try{
                                            if (file_exists($login)){
                                                try{
                                                    break;
                                                }catch (Exception $e) {
                                                    // Vérifier si une exception a été lancée avec le message d'erreur attendu
                                                    return $e->getMessage() === "Login déja existant.";
                                                }
                                            }else{
                                                try{
                                                    file_put_contents("/var/www/html/users/".$login, $password);
                                                    return true;
                                                    
                                                }catch (Exception $e) {
                                                    // Vérifier si une exception a été lancée avec le message d'erreur attendu
                                                    return $e->getMessage() === "Login déja existant.";
                                                }
                                            }
                                        }catch (Exception $e) {
                                            // Vérifier si une exception a été lancée avec le message d'erreur attendu
                                            return $e->getMessage() === "Le mot de passe ne contient pas au moins 1 caractere spécial";
                                        }
                                            
                                    }
                                }
                            }catch (Exception $e) {
                                // Vérifier si une exception a été lancée avec le message d'erreur attendu
                                return $e->getMessage() === "Le mot de passe ne contient pas au moins 8 caractere.";
                            }
                        }
                    }
                }catch (Exception $e) {
                // Vérifier si une exception a été lancée avec le message d'erreur attendu
                return $e->getMessage() === "Mot de passe ou non d'utilisateur vide";
                }           
            }  
                
        }

        create_user("admin", "toto");       

    // Tableau contenant toutes les fonctions de test
    $fonctions_de_test = array(
        'test_enregistrer_utilisateur_valide',
        'test_enregistrer_utilisateur_nom_vide',
        'test_enregistrer_utilisateur_mot_de_passe_vide'
        'test_enregistrer_utilisateur_caracteres_speciaux_mdp'
        'test_enregistrer_utilisateur_sans_caracteres_speciaux_login'
        'test_enregistrer_utilisateur_mdp_court'
        'test_enregistrer_utilisateur_login_court'
        'test_enregistrer_utilisateur_injection-impossibles'
    );

    // Tableau pour stocker les résultats des tests
    $resultats = array();

    // Lancer chaque fonction de test et stocker le résultat dans le tableau $resultats
    foreach ($fonctions_de_test as $fonction) {
        $resultat = call_user_func($fonction);
        $resultats[$fonction] = $resultat;
    }

    // Afficher les résultats
    foreach ($resultats as $fonction => $resultat) {
        echo $fonction . ' => ' . ($resultat ? 'true' : 'false') . "\n";
    }
        

?>
