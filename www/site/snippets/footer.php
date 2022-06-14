</body>

<footer>

  <?= $page->text()->kirbytext() ?>

  <span><a href="<?= $pages->find('imprint')->url() ?>">Imprint</a>, Privacy policy, Contact</span>
</footer>

<?= js('assets/builds/bundle.js') ?>


</html>