<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Créé le : <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo nl2br(h($post['Post']['body'])); ?></p>

