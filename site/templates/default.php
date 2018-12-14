<?php snippet('header') ?>

  <main class="main" role="main">

    <header>
      <h1><?= $page->title()->html() ?></h1>
    </header>
      
    <section>
      <?= $page->text()->kirbytext() ?>
    </section>

  </main>

<?php snippet('footer') ?>