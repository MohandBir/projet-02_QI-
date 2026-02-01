<?php
session_start();


 // redirection tâche 1
if (empty($_SESSION['ageVerified'])) {  
    session_destroy();
    header('location: http://localhost:8080');
    exit();
}

$_SESSION['userChecked'] = true;

// redirection auto tâche 2
if (array_keys($_SESSION) !== ['ageVerified', 'score', 'question1', 'question2', 'question3', 'question4', 'question5', 'userChecked'] ){  
    session_destroy();
    header('location: http://localhost:8080');
    exit();
}

// stockage information d'utilisateurs
if (!empty($_POST)) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $cleanedEmail = str_replace(['@', '.'], '',$email);
    $birthDate = $_POST['birthDate'];
    $filePath = "../data/$cleanedEmail.txt";
    $score = $_SESSION['score'];

    $data ='Nom : '.$nom ."\n".'email : '.$email ."\n". 'date de naissance : '.$birthDate ."\n".'Score : '.$score ."\n" ;
    
    file_put_contents($filePath, $data, FILE_APPEND);

}





$QI = $_SESSION['score'] + 60;

$title = 'Résultat ';
require('../shared/openHtml.php'); 
?>
<main>

<div class="container-result">
    <div class="title-result">
        <h2>Votre résultat <h2>
    </div>
    
    <div class="result">
        <div class="result-text">
            <?php if ($QI === 60){?>
            <p><?php echo'Vous avez un quotient intellectuel de '.$QI.'.'; ?></p>
            <p><?php echo'Si vous avez réponsu au hazard, vous n\'avez vraimment pas eu de chance.'; ?></p>
            <?php  } ?>

            <?php if ($QI === 80){?>
            <p><?php echo'Vous avez un quotient intellectuel de '.$QI.'.'; ?></p>
            <p><?php echo'Il est temps de remettre votre cerveau au travail'; ?></p>
            <?php  } ?>
            
            <?php if ($QI === 100){?>
            <p><?php echo'Vous avez un quotient intellectuel de '.$QI.'.'; ?></p>
            <p><?php echo'Vous êtes pile dans la moyenne !'; ?></p>
            <?php  } ?>
            
            <?php if ($QI === 120){?>
            <p><?php echo'Vous avez un quotient intellectuel de '.$QI.'.'; ?></p>
            <p><?php echo'Vous êtes dôté d\'une intéligence superieure.'; ?></p>
            <?php  } ?>
            
            <?php if ($QI === 140){?>
            <p><?php echo'Vous avez un quotient intellectuel de '.$QI.'.'; ?></p>
            <p><?php echo'Un tel score est rare, vous êtes HPI !'; ?></p>
            <?php  } ?>
            
            <?php if ($QI === 160){?>
            <p><?php echo'Vous avez un quotient intellectuel de '.$QI.'.'; ?></p>
            <p><?php echo'Vous pouvez vous assoir à la table des Einstein et consort !'; ?></p>
            <?php  } ?>
        </div>
        

        <p>Pour passer un test de QI grandeur nature, n'hésitez pas à contacter M. Cuy psychologue de l'esprit au 06.01.01.01.01</p>
     
        <a href="../index.php">Retour à l'accueil</a>
    </div>
    
</div>

</main>
<?php 
    require('../shared/closeHtml.php'); 
    
?>