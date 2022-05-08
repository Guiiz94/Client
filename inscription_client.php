<?php
    include_once 'header.php';
?>
    <main class="backgroundimage">
        <div class="formulaire">
            <h2>Inscription</h2>
<br>
             <section>
                <form action="includes/inscription_client.inc.php" method="post">
                        <label for="nom">
                            <center>
                                <div>
                                    <?php
                                        if(isset($er_client_name)){
                                    ?>
                                        <?=$er_client_name?>
                                    <?php
                                        }
                                    ?>
                                    <input type="text" placeholder="Votre nom" name="client_name" id="client_name" value="<?php if(isset($client_name)){echo $client_name; }?>" required> 
                                </div>
                            </center>
                        </label>
<br><br>
                        <label for="prenom">
                            <div>
                                <?php
                                    if(isset($er_client_firstname)){
                                ?>
                                        <?= $er_client_firstname ?>
                                <?php
                                    }
                                ?>
                                <input type="text" placeholder="Votre prénom" name="client_firstname" id="client_firstname" value="<?php if(isset($client_firstname)){ echo $client_firstname; }?>" required>
                            </div>
                        </label>
<br><br>
                        <label for="email">  
                            <div>
                                <?php
                                    if(isset($er_client_mail)){
                                ?>
                                        <?= $er_client_mail ?>
                                <?php
                                    }
                                ?>
                                <input type="email" placeholder="Adresse mail" name="client_mail" id="client_mail" value="<?php if(isset($client_mail)){ echo $client_mail; }?>" required>
                            </div>
                        </label>
<br><br>
                        <label for="numero">  
                            <div>
                                <?php
                                    if(isset($er_client_num)){
                                ?>
                                        <?= $er_client_num ?>
                                <?php
                                    }
                                ?>
                                <input type="numero" placeholder="Numéro de téléphone" name="client_num" id="client_num" value="<?php if(isset($client_num)){ echo $client_num; }?>" required>
                            </div>
                        </label>
<br><br>
                        <label for="genre">  
                            <div>
                                <?php
                                    if(isset($er_client_gender)){
                                ?>
                                        <?= $er_client_gender ?>
                                <?php
                                    }
                                ?>
                                <input type="text" placeholder="Votre Genre" name="client_gender" id="client_gender" value="<?php if(isset($client_gender)){ echo $client_gender; }?>" required>
                            </div>
                        </label>
<br><br>
                        <label for="pays">  
                            <div>
                                <?php
                                    if(isset($er_client_country)){
                                ?>
                                        <?= $er_client_country ?>
                                <?php
                                    }
                                ?>
                                <input type="text" placeholder="Pays" name="client_country" id="client_country" value="<?php if(isset($client_country)){ echo $client_country; }?>" required>
                            </div>
                        </label>
<br><br>
                        <label for="ville">  
                            <div>
                                <?php
                                    if(isset($er_client_city)){
                                ?>
                                        <?= $er_client_city ?>
                                <?php
                                    }
                                ?>
                                <input type="text" placeholder="Ville" name="client_city" id="client_city" value="<?php if(isset($client_city)){ echo $client_city; }?>" required>
                            </div>
                        </label>
<br><br>
                        <label for="rue">  
                            <div>
                                <?php
                                    if(isset($er_client_street)){
                                ?>
                                        <?= $er_client_street ?>
                                <?php
                                    }
                                ?>
                                <input type="text" placeholder="Rue" name="client_street" id="client_street" value="<?php if(isset($client_street)){ echo $client_street; }?>" required>
                            </div>
                        </label>
<br><br>
                        <label for="numro">  
                            <div>
                                <?php
                                    if(isset($er_client_num_street)){
                                ?>
                                    <?= $er_client_num_street ?>
                                <?php
                                    }
                                ?>
                                    <input type="int" placeholder="Numéro de Rue" name="client_num_street" id="client_num_street" value="<?php if(isset($client_num_street)){ echo $client_num_street; }?>" required>
                            </div>
                        </label>
<br><br>
                        <label for="mdp">
                            <div>
                                <?php
                                    if(isset($er_mdp)){
                                ?>
                                     <?= $er_mdp ?>
                                <?php
                                    }
                                ?>
                                 <input type="password" placeholder="Mot de passe" name="client_password" id="client_password" value="<?php if(isset($client_password)){ echo $client_password; }?>" required>
<br><br>
                                 <input type="password" placeholder="Confirmer le mot de passe" name="confmdp" value="<?php if(isset($confmdp)){ echo $confmdp; }?>" required>
<br><br>
                            </div>
                            <input type="date" style="visibility:hidden;" placeholder="Date d'inscription du Client" name="client_date_inscription" id="client_date_inscription" value="<?php if(isset($client_date_inscription)){echo $client_date_inscription; }?>">
<br>
                        <button type="submit" name="inscription">Envoyer</button>
<br><br>
                        <button><a href="connexion_client.php" style="color: black; text-decoration: none">Retour</a></button>
<br><br>
                            
                        </label>
                    </section>
                </form>
        </div>
    </main>



<?php
    include_once 'footer.php';
?>

