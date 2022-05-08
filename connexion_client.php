<?php
    include_once 'header.php';
    if(isset($_SESSION['client_id'])){
        header('Location: profile.php');
    }
?>

<main class="backgroundimage">
    <div class="formulaire">
    <h2>Connexion au compte Client</h2>
    <section>
        <section>
            <form action="includes/connexion_client.inc.php" method="post">
            <center>
            <?php
                if (isset($er_mail)){
            ?>
                <div><?= $er_mail ?></div>
            <?php
                }
            ?>
<br>
            <div>
                <label for="client_mail"></label>
                <input type="mail" id="client_mail" name="client_mail" placeholder="@mail">
            </div>  
            <?php
                if (isset($er_mail)){
            ?>
                <div><?= $er_mail ?></div>
            <?php
                }
            ?>
<br>
            <div>
                <label for="client_password"></label>
                <input type="password" id="client_password" name="client_password" placeholder="Mot de Passe"></input>
            </div>

            
<br>
<br>
<div>
                <input type="submit" name="envoi" id="submit" value="Se connecter"></input>
            </div>
<br>
            <div>
                <button><a href="inscription_client.php" style="color: black; text-decoration: none">Nouveau chez Nous ?</a></button>
            </div>
<br>
            </form>
        </section>
    </section>
<?php 
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Veuillez remplir tous les champs correctement !</p>";
        }else if($_GET["error"] == "wronglogin"){
            echo "<p>@Mail incorrect !</p>";
        }
    }
?>
</center>
</div>
</main>

<?php
    include_once 'footer.php';
?>
