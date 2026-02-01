<?php


session_start();



// vérifier l'age

$hide = 'start-hide';

if ( !empty($_POST) ) {
    $age = (int) $_POST['age'];
    if ($age >= 18){
        $_SESSION['ageVerified'] = true;
        $hide = 'start';
    } else {
        header('location: verifierAge/age.php');
        exit();
    }   
} else {
    session_destroy();
    $_SESSION = [];
}
var_dump($_SESSION);




$title = 'TEST QI';
require('shared/openHtml.php'); 


?>

    <main>
        <div class="container">
            <p class="paragraphe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui neque alias in eligendi modi magni assumenda error quasi! Minus, corrupti! Fuga aliquam sit at porro pariatur quae! Vel, perferendis nobis!
            Amet assumenda hic libero. Perferendis dolorem, facilis eos nam consequatur enim totam rem minima! Laborum ducimus,consequatur enim totam rem minima! Laborum ducimus, Perferendis dolorem, facilis eos nam consequatur enim totam rem minima! Laborum ducimusillo vitae Perferendis dolorem, facilis eos nam consequatur enim totam rem minima! Laborum ducimus, illo vitae dignissimos perferendis quae tenetur quos voluptatem repellendus libero nulla, repudiandae sequatur pariatur deserunt, dignissimos esse dolor molestias quo tempore harum. 
            </p>
            
            <div class="verif-age">

                <form action="" method="post">
                    <label for="age">Veuillez vérifier d'abord votre Age :</label>
                    <p>
                        <input type="number" name="age" min="5" required >
                        <input type="submit" value="Valider" class="submit" >
                    </p>
                </form>
                
            </div>
            
            <p class="<?php echo $hide; ?>"><a href="questions/question1.php">Commencer le test</a></p> 
        </div>
        
    </main>

    <?php require('shared/closeHtml.php') ?>
    
