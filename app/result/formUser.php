<?php

session_start();

// traitement question 5
if(!empty($_POST) && count($_POST) === 3){
    if (in_array('3', $_POST, true) && in_array('5', $_POST, true) && in_array('6', $_POST, true)) {
        $_SESSION['score'] += 20;
        $_SESSION['question5'] = true; // Veresion 2
    }
} else {
    $_SESSION['question5'] = true; // Veresion 2
}

// redirection auto tâche 2
if (array_keys($_SESSION) !== ['ageVerified', 'score', 'question1', 'question2', 'question3', 'question4', 'question5'] ){  
    session_destroy();
    header('location: http://localhost:8080');
    exit();
}




$title = 'Informations Utilisateur';
require('../shared/openHtml.php'); 

?>

<main>
    <div class="container-form">
        <h2>Information personnelles</h2>

        <form action="result.php" method="post" >
            <div class="feild">
                <p><label for="nom">Saisir votre nom</label></p>
                <input type="text" name="nom" placeholder="Ex: Alain">                
            </div>
            <div class="feild">
                <p><label for="email">Saisir votre courriel</label></p>
                <input type="email" name="email" placeholder="Ex: toto@gmail.com" required>                
            </div>
            <div class="feild">
                <p><label for="birthDate">Saisir votre date de naissance</label></p>
                <input type="date" name="birthDate" required>                
            </div>
            
            <p><input type="submit" class="form-submit" value="Voir votre résultat" ></p>
               
        </form>        
    </div>    
</main>



<?php require('../shared/closeHtml.php') ?>
    
