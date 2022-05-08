<?php
    include_once 'header.php';
    include 'includes/dbh.inc.php';
?>

<main class="backgroundimage">
    <div class="formulaire">
        <h2>Bienvenue <?php echo $_SESSION['client_name'];?> <?php echo $_SESSION['client_firstname'];?></h2>
        <section>
            <section>
                <?php
                    $fidelity_card = $db->query('SELECT * FROM fidelity_card WHERE id_client = '.$_SESSION['client_id']);
                    if($fidelity_card->rowCount() == 0){
                ?>
                        <button style="margin-top: 3rem; margin-bottom: 3rem;"><a href="includes/cfidelity_card.inc.php" style="color: black; text-decoration: none">Pas de Carte Fidélité ?</a></button>
                <?php
                    }else{
                ?>
                        <button style="margin-top: 3rem; margin-bottom: 3rem;"><a href="profile.php" style="color: black; text-decoration: none">Votre Page de Profil</a></button>
                <?php
                    }
                ?>
            </section>
        </section>
    </div>
</main>

<?php
    include_once 'footer.php';
?>