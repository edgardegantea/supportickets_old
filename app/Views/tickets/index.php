<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>

	<section class="section">

		<h1><?= esc($total) ?> registros</h1>

		<div class="columns is-multiline">

		<?php if (!empty($tickets) && is_array($tickets)): ?>
			<?php foreach ($tickets as $ticket): ?>

				<div class="column is-one-third">
					<div class="card">
						<header class="card-header has-background-link">
							<p class="card-header-title has-text-white">
								<?= esc($ticket['title']) ?>
							</p>
						</header>
						<div class="card-content">
							<p class="has-text-justified">
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
							<a class="card-footer-item">
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
