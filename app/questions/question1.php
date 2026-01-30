<?php
session_start();

if (empty($_SESSION['ageVerified'])) {
    header('location: http://localhost:8080');
    exit();
}
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
