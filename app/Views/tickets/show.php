<?= $this->extend('layout/main'); ?>


<?= $this->section('botones') ?>
<div class="">
    <a href="/tickets/" class="button is-light">Regresar</a>
</div>
<?= $this->endSection() ?>



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



		    <!-- REVISAR PARA SOLUCIONAR ENVÍO DE EMAIL -->
		    <?php

		    	$correo_destino = esc($ticket['email']);
		    	$asunto = 'Mensaje de prueba';
		    	$mensaje = 'Contenido del mensaje de prueba';
				// mail($correo_destino, $asunto, $mensaje);
			?>
			<!-- -------------------------------------- -->

		    <p class="level-item is-large">
				<a href="mailto:<?= esc($correo_destino); ?>" class="button is-link">
					<span class="icon-text has-text-light">
					<span class="icon">
				    	<i class="fa-solid fa-envelope"></i>
					</span>
					<span>Enviar email</span>
					</span>
				</a>
			</p>



			<?php

				$segm1 = "https://api.whatsapp.com/send?phone=+521";
				$numero = esc($ticket['phone']);
				$segm2 = "&text=Hola, Esta es una prueba de conexión desde PHP. Supportickets 1.0";

				$cadena = '' . $segm1 . '' . $numero . '' . $segm2;

			?>

			<p class="level-item is-large">
				
				<a target="_blank" href="<?= esc($cadena); ?>" class="button is-link">
					<span class="icon-text has-text-light">
					<span class="icon">
				    	<i class="fa-brands fa-whatsapp"></i>
					</span>
					<span>WhatsApp</span>
				</span>
				</a>
			</p>


			<!--
			<p class="level-item is-large">
				<a target="_blank" href="https://api.whatsapp.com/send?phone=+5212312339545&text=Hola, Esta es una prueba de conexión desde PHP. Supportickets 1.0" class="button is-primary">WhatsApp</a>
			</p>
			<a href="whatsapp://send?text=Hola, Index.pe&phone=+5212312066656&abid=+12 346 678 910">+12 346 678 910</a>
			-->
		  
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
