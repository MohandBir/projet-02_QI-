<?php
session_start();

if (empty($_SESSION['ageVerified'])) {
    header('location: http://localhost:8080');
    exit();
}

if(!empty($_POST) && count($_POST) === 3){
    if (in_array('3', $_POST, true) && in_array('5', $_POST, true) && in_array('6', $_POST, true)) {
        $_SESSION['score'] += 20;
    }
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
<?php require('../shared/closeHtml.php'); ?>