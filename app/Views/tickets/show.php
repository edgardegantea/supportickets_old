<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>

	<section class="section">
    La información mostrada corresponde al ticket de soporte

    <p class="is-size-1 has-text-link">
      <?= esc($ticket['title']); ?>
    </p>

    <span class="tag is-info">
      <?= echo $status; ?>
    </span>

  </section>

  <?= $this->endSection(); ?>
