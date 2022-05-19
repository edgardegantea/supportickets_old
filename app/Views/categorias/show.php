<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>

<section class="section">
    La información mostrada corresponde a la categoría seleccionada

    <div class="">

        <?= esc($categoria['name']); ?>

    </div>



</section>

<?= $this->endSection(); ?>
