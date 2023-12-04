<?php
/**
 * @var \BaserCore\View\BcFrontAppView $this
 * @var \BcBlog\View\BlogFrontAppView $this
 * @var \Cake\ORM\ResultSet $posts
 */
$this->BcBaser->setDescription($this->Blog->getDescription());
$this->BcBaser->setTableToUpload('BcBlog.BlogPosts');
$this->BcBaser->setTitle($this->BcBaser->getBlogTitle());
?>

<h2><?php echo h($this->Blog->getTitle()) ?></h2>

<?php if ($this->BcBaser->blogDescriptionExists()): ?>
<div class="bs-blog-description"><?php $this->BcBaser->blogDescription() ?></div>
<?php endif ?>

<section class="bs-blog-post">
<?php if ($posts->count()): ?>
	<?php foreach ($posts as $post): ?>
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
	<?php endforeach; ?>
<?php else: ?>
  <p class="bs-blog-no-data"><?php echo __d('baser_core', '記事がありません。'); ?></p>
<?php endif ?>
</section>


<!-- /Elements/paginations/simple.php -->
<?php $this->BcBaser->pagination('simple'); ?>
