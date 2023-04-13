<?php include_once('data/oeuvres.php');?>
<?php include_once('includes/head.php'); ?>
<?php include_once('includes/header.php'); ?>

<main>
    
    <?php if (isset($_GET['id'])):?>

        <?php  $exist=false; ?>
        
        <?php  foreach ($oeuvres as $oeuvre) : ?>
   
            <?php if (array_key_exists('id', $oeuvre) && ($oeuvre['id'] == $_GET['id'])) : ?>

                    <article id="detail-oeuvre">
                        <div id="img-oeuvre">
                        <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                        </div>
                        <div id="contenu-oeuvre">
                            <h1><?php echo $oeuvre['titre']; ?></h1>
                            <p class="description"><?php echo $oeuvre['artiste']; ?></p>
                            <p class="description-complete">
                            <?php echo $oeuvre['description']; ?>
                            </p>
                        </div>
                    </article>
                    <?Php  $exist=true; ?>

            <?php endif; ?> 

        <?php endforeach; ?>

        <?Php if (!$exist) : ?>
            <p class="description">Désolé oeuvre non trouvée</p>
        <?php endif; ?>

    <?php else: ?>
            <p class="description">Désolé Id non trouvé</p>

    <?php endif; ?>

</main>
<?php include_once('includes/footer.php'); ?>
