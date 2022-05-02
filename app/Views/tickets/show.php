<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>

	<section class="section">
    La información mostrada corresponde al ticket de soporte

	<div class="">
		<!-- Main container -->
		<nav class="level">
		  <!-- Left side -->
		  <div class="level-left">
		    <div class="level-item">

		  		  <?php if ($ticket['status'] == 's01'): ?>
					  <span class="tag is-light is-bordered is-large">
		  			  	Estado: NO INICIADO
					  </span>
		  		  <?php elseif ($ticket['status'] == 's02'): ?>
					  <span class="tag is-link is-large">
		  			  	Estado: INICIADO
					  </span>
		  		  <?php else: ?>
					  <span class="tag is-primary is-large">
		  			  	Estado: EN PROCESO
					  </span>
		  		  <?php endif; ?>

		    </div>
		    <div class="level-item">
				<p class="is-size-1 has-text-link">
		  		<?= esc($ticket['title']); ?>
		  	  </p>
		    </div>
		  </div>

		  <!-- Right side -->
		  <div class="level-right">
		    <p class="level-item"><a>Seguimiento</a></p>
		    <p class="level-item is-large">
				<a class="button is-success">Contactar</a>
			</p>
		  </div>
		</nav>

	</div>

	<div class="content">
		Detalles:
		<p class="mx-5 my-5 is-size-4 has-text-justify"><?= esc($ticket['description']); ?></p>
	</div>

	<div class="content">
		Evidencia:
		<p class="mx-5 my-5 is-size-5"><?= esc($ticket['evidence']); ?></p>
	</div>



  </section>

  <?= $this->endSection(); ?>
