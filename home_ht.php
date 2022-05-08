<?php
    include_once 'header.php';
    include 'includes/dbh.inc.php';
    $item = $db -> query('SELECT * FROM item');
?>

<script>
    // jQuery functions to hide and show the div
    $(document).ready(function () {
        $("select").change(function () {
            $(this).find("option:selected")
                    .each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box").hide();
                }
            });
        }).change();
    });
</script>

<main>
    <div class="formulaire">
        <h2>Listes des Articles :</h2>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-secondary btn-sm" onclick="window.location.href = 'home.php';" type="button">Tous les Produits</button>
            <button class="btn btn-secondary btn-sm" onclick="window.location.href = 'home_ht.php';" type="button">High-Tech</button>
            <button class="btn btn-secondary btn-sm" onclick="window.location.href = 'home_l.php';" type="button">Livres</button>
            <button class="btn btn-secondary btn-sm" onclick="window.location.href = 'home_jv.php';" type="button">Jeux-Vidéo</button>
            <button class="btn btn-secondary btn-sm" onclick="window.location.href = 'home_v.php';" type="button">Voyage</button>
            <p> </p>
            <i class="fa-regular fa-cart-shopping-fast"></i>
            <p> </p>
        </div>
      
        <section>
<br>
            <section style="text-align: left">
            <div class="container">
                <div class="row">
                    <?php
                        $item = $db->query('SELECT * FROM item WHERE item_type="High-Tech" ORDER BY item_id DESC');
                    ?>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php while($Item = $item->fetch()) { ?>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <?php 
                                        if(empty($Item['item_image'])){
                                    ?>
                                            <h5 class="card-title"><?php echo $Item['item_name']; ?></h5>
                                            <p class="card-text"><?php echo $Item['item_description']; ?></p>
                                            <p class="card-text"><?php echo $Item['item_price_sell']; ?>€</p>
                                            <a href="#" class="btn btn-primary">Ajouter au Panier</a>
                                    <?php
                                        }else{
                                    ?>
                                            <img src="<?php echo $Item['item_image']; ?>" class="card-img-top" alt="...">
                                            <h5 class="card-title"><?php echo $Item['item_name']; ?></h5>
                                            <p class="card-text"><?php echo $Item['item_description']; ?></p>
                                            <p class="card-text"><?php echo $Item['item_price_sell']; ?>€</p>
                                            <a href="#" class="btn btn-primary">Ajouter au Panier</a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </section>
        <br><br>
    </div>
</main>

<?php
    include_once 'footer.php';
?>