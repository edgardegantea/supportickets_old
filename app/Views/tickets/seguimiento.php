<?= $this->extend('layout/main'); ?>


<?= $this->section('botones') ?>
<div class="">
    <a href="/tickets/show" class="button is-light">Regresar</a>
</div>
<?= $this->endSection() ?>


<?= $this->section('content'); ?>

	<section class="section is-fullheight">
		<p class="is-size-1">
			Aquí habrá una bitácora de seguimiento...
		</p>
	</section>

<?= $this->endSection(); ?>
