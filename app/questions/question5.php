<?php
session_start();
// redirection tâche 1
if (empty($_SESSION['ageVerified'])) {   
    session_destroy();
    header('location: http://localhost:8080');
    exit();
}

// Traitement question 4
if(!empty($_POST)){
    $answer = ($_POST['reponse4']);
    if ($answer === '2') {
        $_SESSION['score'] += 20 ; 
        $_SESSION['question4'] = true; // Veresion 2
    } else {
        $_SESSION['question4'] = true; // Veresion 2
    }
}

// redirection auto tâche 2
if (array_keys($_SESSION) !== ['ageVerified', 'score', 'question1', 'question2', 'question3', 'question4'] ){  
    session_destroy();
    header('location: http://localhost:8080');
    exit();
}

var_dump($_SESSION);


$title = 'Question 5 ';
require('../shared/openHtml.php'); 
?>
<main>

<div class="container">
    <h2>Question 5</h2>
    <div class="question1">
        <p>Quel sont les nombres qui n'ont pas de racine carré entière ?</p>
        
        <form action="../result/formUser.php" method="Post" class="form5">
        
            <p>
                <input type="checkbox" name="reponse5-1" value="1">
                <label for="reponse5"> 1 </label>
            </p>
            <p>
                <input type="checkbox" name="reponse5-2" value="2">
                <label for="reponse5"> 9 </label>
            </p>
            <p>
                <input type="checkbox" name="reponse5-3" value="3">
                <label for="reponse5"> 18 </label>
            </p>
            <p>
                <input type="checkbox" name="reponse5-4" value="4">
                <label for="reponse5"> 49 </label>
            </p>
            <p>
                <input type="checkbox" name="reponse5-5" value="5">
                <label for="reponse5"> 116 </label>
            </p>
            <p>
                <input type="checkbox" name="reponse5-6" value="6">
                <label for="reponse5"> 1000 </label>
            </p>
            
            
            
            
        
            <p><input type="submit" value="Valider" class="submit"   ></p>
        </form> 
    </div>
    
</div>

</main>
<?php require('../shared/closeHtml.php'); ?>
