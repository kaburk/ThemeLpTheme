<?php

/**
 * @var \BaserCore\View\AppView $this
 */
?>
<div class="mainimg">
  <?php $this->BcBaser->mainImage(['all' => true, 'num' => 5]) ?>
</div>

<main>
  <div class="catch">
    <h2><span class="under">キャッチフレーズ</span></h2>
    <p>
      <?php echo nl2br($this->BcBaser->getDescription()) ?>
    </p>
  </div>

  <?php $this->BcBaser->blogPosts('products', 6) ?>

  <?php $this->BcBaser->blogPosts('staff', 6) ?>

  <?php /* baserCMS 5.0.7 では this->BcBaser->page が動作していないが改修されたら別固定ページにするのも良さそう */ ?>
  <?php /* https://github.com/baserproject/basercms/issues/2916 */ ?>

  <?php // $this->BcBaser->page('/flow') ?>
  <?php // $this->BcBaser->page('/access') ?>
  <?php // $this->BcBaser->page('/inquiry') ?>

  <?php $this->BcBaser->content() ?>

  <section id="5">
    <h2 class="center">
      <span class="under">お問い合わせ</span>
    </h2>
    <div class="container">
      <div class="row">
        <div class="col span-12">
          <?php
            $this->Mail = new BcMail\View\Helper\MailHelper($this);
            echo $this->Mail->getForm(1);
          ?>
          </div>
      </div>
    </div>
  </section>
</main>
