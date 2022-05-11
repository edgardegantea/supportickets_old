<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bulma.min.css">

	<section class="section">
		<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="dtTickets">
			<thead>
				<tr class="has-text-centered">
					<th>Estado</th>
					<th>Asunto</th>
					<th>Descripción</th>
					<th>Acciones</th>
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
							echo '<tr class="has-background-danger-dark">';
						} else if ($ticket['status'] == 's04') {
							echo '<tr style="background: #45D9B9">';
						} else if ($ticket['status'] == 's05') {
							echo '<tr style="background: #45D9B9">';
						} else if ($ticket['status'] == 's06') {
							echo '<tr style="background: #45D9B9">';
						} else if ($ticket['status'] == 's07') {
							echo '<tr style="background: #45D9B9">';
						} else if ($ticket['status'] == 's08') {
							echo '<tr style="background: #45D9B9">';
						}
					?>

						
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

						<td width="20%" class="py-3"><p class="is-uppercase has-text-weight-semibold"><?= esc($ticket['title']) ?></p></td>
						<td width="50%" class="py-3 is-justify-content-flex-start"><?= esc($ticket['description']) ?></td>


						<td width="*" class="py-3">
							<div class="buttons has-addons">
								<a class="button is-info is-small" href="<?= base_url('tickets/show/'.$ticket['id']); ?>">
									Ver
								</a>
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
        }
      	});
  } );
</script>

<?= $this->endSection(); ?>
