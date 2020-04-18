<?php require APPROOT . '/views/inc/header.php'; ?>
<h1>I am the real home page</h1>
<h2><?php echo $data['title']; ?></h2>
<h1>Posts</h1>
<ul>
  <?php foreach($data['posts'] as $post) : ?>
    <li><?php echo $post->title ?></li>
  <?php endforeach; ?>
</ul>
<?php require APPROOT . '/views/inc/footer.php'; ?>  