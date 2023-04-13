   <?php include_once('data/oeuvres.php');?>
   <?php include_once('includes/head.php'); ?>
   <?php include_once('includes/header.php'); ?>
    
    <main>
        <div id="liste-oeuvres">
            
            <?php foreach($oeuvres as $oeuvre) : ?>
                <article class="oeuvre">
                    <a href="<?php echo "oeuvre.php?id=". $oeuvre['id']; ?>">
                        <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                        <h2><?php echo $oeuvre['artiste']; ?></h2>
                        <p class="description"><?php echo $oeuvre['titre']; ?></p>
                    </a>
                </article>
            <?php endforeach ?>
        </div>
        
    </main>
    <?php include_once('includes/footer.php'); ?>
