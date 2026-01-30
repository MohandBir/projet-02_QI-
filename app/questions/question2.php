<?php 
session_start();

if (empty($_SESSION['ageVerified'])) {   // redirection tâche 1
    session_destroy();
    header('location: http://localhost:8080');
    exit();
}


if(!empty($_POST) ){
    $answer = strtolower(trim($_POST['reponse1']));
    if ($answer === 'dimanche') {
        $_SESSION['score'] = 20 ;
        $_SESSION['question1'] = true; // Veresion 2
    } else {
        $_SESSION['score'] = 0 ;
        $_SESSION['question1'] = true; // Veresion 2
    }
}

// redirection auto tâche 2
if (array_keys($_SESSION) !== ['ageVerified', 'score', 'question1'] ){  // redirection auto tâche 2
    session_destroy();
    header('location: http://localhost:8080');
    exit();
}

var_dump($_SESSION);

$title = 'Question 2';
require('../shared/openHtml.php'); 
?>
<main>

<div class="container">
    <h2>Question 2</h2>
    <div class="question1">
        <p> Qu'est-ce qu'un quart de deux tiers de 9000</p>
        <form action="question3.php" method="Post">
            <p>
                <label for="reponse2">Réponse : </label>
                <input type="number" name="reponse2" max="3000" min="1000" step="500" required>
            </p>
            <p><input type="submit" value="Valider" class="submit"   ></p>
        </form> 
    </div>
    
</div>

</main>
<?php require('../shared/closeHtml.php'); 

?>