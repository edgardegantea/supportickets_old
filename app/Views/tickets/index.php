<?= $this->extend('layout/main'); ?>


<?= $this->section('botones') ?>
    <div class="">
        <a href="/tickets/new" class="button is-link">Nuevo</a>
    </div>
<?= $this->endSection() ?>



<?= $this->section('content'); ?>

	<section class="section">

		<h1><?= esc($total) ?> registros</h1>




		<div class="columns is-multiline">

		<?php if (!empty($tickets) && is_array($tickets)): ?>
			<?php foreach ($tickets as $ticket): ?>

				<div class="column is-one-third">
					<div class="card">
						<a href="<?= base_url('tickets/show/'.$ticket['id']); ?>">

						<?php if ($ticket['status'] == 's01'): ?>
	  					  <header class="card-header has-background-link">
	  		  		  	<?php elseif ($ticket['status'] == 's02'): ?>
	  					  <header class="card-header has-background-info">
						<?php elseif ($ticket['status'] == 's05'): ?>
  	  					  <header class="card-header has-background-primary">
						<?php else: ?>
	  					  <header class="card-header has-background-dark">
	  		  		  	<?php endif; ?>
							<p class="card-header-title has-text-white">
								<?= esc($ticket['title']) ?>
							</p>
						</header>

					</a>

						<div class="card-content">
							<p class="has-text-justified" style="width: 500px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; -webkit-line-clamp: 3; hover: #000; ">
								<?= esc($ticket['description']) ?>
							</p>

							<p class="has-text-centered">

								<?php
									if ($ticket['status'] == 's01') {
										echo 'Estado 1';
									} else if ($ticket['status'] == 's02') {
										echo 'Estado 2';
									} else if ($ticket['status'] == 's03') {
											echo 'Estado 3';
									} else if ($ticket['status'] == 's04') {
										echo 'Estado 4';
									} else {
										echo 'Otro estado';
									}
								?>
							</p>
						</div>


						<footer class="card-footer">
							<a class="card-footer-item" href="<?= base_url('tickets/show/'.$ticket['id']); ?>">
								Ver
							</a>
							<a class="card-footer-item">
								Editar
							</a>
							<a class="card-footer-item">
								Eliminar
							</a>
						</footer>
					</div>


				</div>

			<?php endforeach ?>

		<?php else: ?>
			<div class="has-text-centered is-align-content-center">
				<p class="subtitle is-center">No hay información de tickets de soporte en la base de datos.</p>

				<a class="button is-link" href="/tickets/new">+ Nuevo</a>
			</div>
		<?php endif ?>

		</div>

	</section>

<?= $this->endSection(); ?>
