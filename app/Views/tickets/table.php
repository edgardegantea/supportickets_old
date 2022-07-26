<?= $this->extend('layout/main'); ?>


<?= $this->section('botones') ?>
<div class="">
    <a href="/tickets/new" class="button is-link">Nuevo</a>
</div>
<?= $this->endSection() ?>


<?= $this->section('content'); ?>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bulma.min.css">

	<section class="section">
		<div class="">
			<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="dtTickets">
				<thead>
					<tr class="has-text-centered">
						<th width="10%">Estado</th>
						<th width="15%">Asunto</th>
						<th width="*">Descripción</th>
						<th width="10%">Acciones</th>
					</tr>
				</thead>

				<tbody>
				<?php if (!empty($tickets) && is_array($tickets)): ?>
					<?php foreach ($tickets as $ticket): ?>
						<?php
							if ($ticket['status'] == 's01') {
								echo '<tr class="has-background-danger-light">';
							} else if ($ticket['status'] == 's02') {
								echo '<tr class="has-background-info-light">';
							} else if ($ticket['status'] == 's03') {
								echo '<tr class="has-background-danger-light">';
							} else if ($ticket['status'] == 's04') {
								echo '<tr class="has-background-light">';
							} else if ($ticket['status'] == 's05') {
								echo '<tr class="has-background-light">';
							} else if ($ticket['status'] == 's06') {
								echo '<tr class="has-background-light">';
							} else if ($ticket['status'] == 's07') {
								echo '<tr class="has-background-light">';
							} else if ($ticket['status'] == 's08') {
								echo '<tr class="has-background-light">';
							}
						?>

							
							<td width="">
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

							<td class="">
								<p class="is-uppercase has-text-weight-semibold"><?= esc($ticket['title']) ?></p>
							</td>

							<td class="is-justify-content-flex-start">
								<?= esc($ticket['description']) ?>
							</td>

							<td class="">
								<div class="buttons has-addons is-centered">
									<a class="button is-small" href="<?= base_url('tickets/show/'.$ticket['id']); ?>">
										<span class="mdi mdi-16px mdi-eye"></span>
									</a>
									<a href="#" class="button is-small"><span class="mdi mdi-16px mdi-file-document-edit"></span></a>
									<a href="#" class="button is-small is-danger is-selected">
										<span class="mdi mdi-16px mdi-delete-circle"></span>
									</a>
								</div>


								<!-- <div class="buttons has-addons is-centered">
									<a class="button" href="<?= base_url('tickets/show/'.$ticket['id']); ?>">
										<span class="mdi mdi-24px mdi-eye"></span>
									</a>
									<a href="#" class="button"><span class="mdi mdi-24px mdi-file-document-edit"></span></a>
									<a href="#" class="button is-danger is-selected">
										<span class="mdi mdi-24px mdi-delete-circle"></span>
									</a>
								</div> -->
							</td>
						</tr>
					<?php endforeach ?>
				<?php endif ?>
				</tbody>
			</table>
		</div>

	</section>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bulma.min.js"></script>

	<script>
    	$(document).ready( function () {
      		$('#dtTickets').DataTable({
      			"language": {
            	"url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            }});
    	});
	</script>

<?= $this->endSection(); ?>
