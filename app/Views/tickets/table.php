<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>

	<section class="section">
		<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
			<thead>
				<tr class="has-text-centered">
					<th>Asunto</th>
					<th>Descripción</th>
					<th>Estado</th>
					<th>Acciones</th>
				</tr>
			</thead>

			<tbody>
			<?php if (!empty($tickets) && is_array($tickets)): ?>
				<?php foreach ($tickets as $ticket): ?>
					<tr>
						<td width="20%" class="py-3"><p class="is-uppercase has-text-weight-semibold"><?= esc($ticket['title']) ?></p></td>
						<td width="50%" class="py-3 is-justify-content-flex-start"><?= esc($ticket['description']) ?></td>
						<td width="10%" class="py-3">
							<div class="has-text-centered">
								<?php
									if ($ticket['status'] == 's01') {
										echo 'No iniciado';
									} else if ($ticket['status'] == 's02') {
										echo 'Iniciado';
									} else if ($ticket['status'] == 's03') {
										echo 'En revisión';
									} else if ($ticket['status'] == 's04') {
										echo 'En proceso';
									} else if ($ticket['status'] == 's05') {
										echo 'Finalizado';
									} else if ($ticket['status'] == 's06') {
										echo 'Abierto';
									} else if ($ticket['status'] == 's07') {
										echo 'Re-abierto';
									} else if ($ticket['status'] == 's08') {
										echo 'Cerrado';
									}
								?>
							</div>
						</td>
						<td width="*" class="py-3">
							<div class="buttons has-addons">
								<a href="#" class="button is-info is-small">Ver</a>
								<a href="#" class="button is-info is-small">Editar</a>
								<a href="#" class="button is-danger is-small">Eliminar</a>
							</div>
						</td>
					</tr>
				<?php endforeach ?>
			<?php endif ?>
			</tbody>
		</table>


	</section>

<?= $this->endSection(); ?>
