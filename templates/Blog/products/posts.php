<?php
/**
 * @var \BaserCore\View\BcFrontAppView $this
 * @var \BcBlog\View\BlogFrontAppView $this
 * @var \Cake\ORM\ResultSet $posts
 */
?>
<?php if ($posts->count()): ?>
  <section id="1" class="gray-back">
    <h2 class="center"><span class="under"><?php echo h($this->BcBaser->getBlogTitle()) ?></span></h2>
    <div class="container center">
      <div class="row">
        <?php foreach($posts as $key => $post): ?>
          <div class="col span-4">
            <a href="<?php echo $this->BcBaser->getBlogPostLinkUrl($post) ?>">
              <?php $this->BcBaser->blogPostEyeCatch($post, ['link' => false, 'title' => $this->Blog->getPostTitle($post, false), 'noimage' => 'noimage.jpg']); ?>
              <h3><?php $this->BcBaser->blogPostTitle($post, false) ?></h3>
              <p><?php $this->BcBaser->blogPostContent($post, true) ?></p>
            </a>
          </div>
          <?php if ($key % 3 === 2): ?>
            </div>
            <div class="row">
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>
  </section>
<?php endif ?>

