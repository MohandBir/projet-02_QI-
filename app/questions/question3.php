<?php
session_start();

if (empty($_SESSION['ageVerified'])) {   // redirection tâche 1
    session_destroy();
    header('location: http://localhost:8080');
    exit();
}

if(!empty($_POST)){
    $answer = ($_POST['reponse2']);
    if ($answer == 1500) {
        $_SESSION['score'] += 20 ;
        $_SESSION['question2'] = true; // Veresion 2 
    } else {
        $_SESSION['question2'] = true; // Veresion 2
    }
}

// redirection auto tâche 2
if (array_keys($_SESSION) !== ['ageVerified', 'score', 'question1', 'question2'] ){  // redirection auto tâche 2
    session_destroy();
    header('location: http://localhost:8080');
    exit();
}
var_dump($_SESSION);

$title = 'Question 3';
require('../shared/openHtml.php'); 
?>
<main>

<div class="container3">
    <div class="question3">
        <div>
            <h2>Question 3</h2>
            <img src="../images/dice.jpg" alt="image question 3">

        </div>
        <div class="question1 question1-3">
            <p> À quoi ressemblera le cube fini ?</p>
            <form action="question4.php" method="Post">
                <div>
                    <input type="radio" name="reponse3" value="a" required>
                    <label for="reponse3">A</label> 
                </div>         
                <div>
                    <input type="radio" name="reponse3" value="b" required>
                    <label for="reponse3">B</label>
                </div>         
                <div>
                    <input type="radio" name="reponse3" value="c" required>
                    <label for="reponse3">C</label>
                </div>         
                <div>
                    <input type="radio" name="reponse3" value="d" required>
                    <label for="reponse3">D</label>
                </div>         

                <p><input type="submit" value="Valider" class="submit"   ></p>
            </form> 
        </div>
    </div>

    
</div>

</main>
<?php require('../shared/closeHtml.php'); 

?>