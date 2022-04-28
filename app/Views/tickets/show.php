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
		<span class="tag is-info is-large">
  		  <?php if ($ticket['status'] == 's01'): ?>
  			  Estado: NO INICIADO
  		  <?php elseif ($ticket['status'] == 's02'): ?>
  			  Estado: INICIADO
  		  <?php else: ?>
  			  Estado: EN PROCESO
  		  <?php endif; ?>
  	  </span>
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
    <p class="level-item"><a class="button is-success">Contactar</a></p>
  </div>
</nav>

	</div>




  </section>

  <?= $this->endSection(); ?>
