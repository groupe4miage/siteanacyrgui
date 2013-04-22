
<h1 class="blogconseil imageconseil">&nbsp;Laissez-vous guider par Claudine...</h1>


        
    

    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
    les informations des posts -->

    <?php foreach ($posts as $post): ?>
            <div class="bulle"> 
                <div class="titre_bulle"><?php echo $post['Post']['title' ]; ?></div> 
                <div class="date_bulle"> <?php echo $post['Post']['created']; ?></div>
                <div class="contenu_bulle"> <?php echo $post['Post']['body']; ?></div>
            </div>
            <br/>
    <?php endforeach; ?>
