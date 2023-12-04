<?php
/**
 * @var \BaserCore\View\AppView $this
 */
?>
<header>
  <div class="container">
    <div class="row">
      <div class="col span-12 header">
        <h1><?php $this->BcBaser->logo() ?></h1>
        <div class="header-box">
          <?php $this->BcBaser->link('<span class="contact-button">お問い合わせ</span>', '/contact/', ['escape' => false]) ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col span-12">
        <nav>
          <div id="open"></div>
          <div id="close"></div>
          <div id="navi">
            <?php if (\BaserCore\Utility\BcUtil::isInstalled()): ?>
              <?php $this->BcBaser->globalMenu() ?>
            <?php endif ?>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
