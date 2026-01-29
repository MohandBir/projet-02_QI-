<?php
session_start();

if(!empty($_POST)){
    $answer = ($_POST['reponse3']);
    if ($answer === 'c') {
        $_SESSION['score'] += 20 ; 
    } 
}



$title = 'Question 4 ';
require('../shared/openHtml.php'); 
?>
<main>

<div class="container">
    <h2>Question 4</h2>
    <div class="question1">
        <p>
            Kate, Joanna et Natalie sont toutes les trois soeurs. si les affirmation suivantes sont touts vraies, laquelle d'entre elles est la plus jeune ?
        </p>
        <ul class="ul-qst4">
            <li>Kate est la plus âgée.</li>
            <li>Natalie n'est pas la plus âgée.</li>
            <li>Joanne n'est pas la plus jeune.</li>
        </ul>
        <form action="question5.php" method="Post">
            <label for="reponse4">Réponse : </label>
            <select name="reponse4" required>
                <option value=""> &nbsp;-- Choisir la bonne réponse --</option>
                <option value="1" >Kate</option>
                <option value="2" >Natalie</option>
                <option value="3" >Joanne</option>
            </select>
            <p><input type="submit" value="Valider" class="submit"   ></p>
        </form> 
    </div>
    
</div>

</main>
<?php require('../shared/closeHtml.php'); ?>