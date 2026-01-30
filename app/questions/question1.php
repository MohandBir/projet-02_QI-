<?php
session_start();

if (empty($_SESSION['ageVerified'])) {   // redirection tâche 1
    session_destroy();
    header('location: http://localhost:8080');
    exit();
}

// redirection auto tâche 2
if (array_keys($_SESSION) !== ['ageVerified'] ){  // redirection auto tâche 2
    session_destroy();
    header('location: http://localhost:8080');
    exit();
}

var_dump($_SESSION);
// import de header...

$title = 'Question 1';
require('../shared/openHtml.php'); 
?>

<main>

    <div class="container">
        <h2>Question 1</h2>
        <div class="question1">
            <p> Quel jour serons-nous demain si mercredi était il y a trois jours ?</p>
            <form action="question2.php" method="Post">
                <p>
                    <label for="reponse1">Réponse : </label>
                    <input type="text" name="reponse1" required>
                </p>
                <p><input type="submit" value="Valider" class="submit"   ></p>
            </form> 
        </div>
        
    </div>

</main>

<!-- import de header...-->
<?php require('../shared/closeHtml.php'); ?>
