<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section class="section">
	
	<form action="<?php echo base_url('tickets/') ?>" method="post" enctype="">
		<?= csrf_field(); ?>

		<div class="field">
			<label class="label">Asunto:</label>
			<div class="control">
				<input class="input" type="text" name="title" style="font-size: x-large">
			</div>
		</div>

        <div class="columns">

            <div class="column">
                <div class="field">
                    <label class="label">Categoría:</label>
                    <div class="control">
                        <div class="select">
                            <select name="category">

                                <option disabled selected>Seleccione la categoría</option>
                                <?php foreach ($categories as $c): ?>
                                    <option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
                                <?php endforeach ?>

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="field">
                    <label class="label">Prioridad:</label>
                    <div class="control">
                        <div class="select">
                            <select name="priority">

                                <option disabled selected>Seleccione la prioridad</option>
                                <?php foreach ($priorities as $p): ?>
                                    <option value="<?= $p['id'] ?>"><?= $p['name'] ?></option>
                                <?php endforeach ?>

                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="field">
			<label class="label">Descripción de la falla o situación:</label>
			<div class="control">
				<textarea class="textarea" name="description"></textarea>
			</div>
		</div>

		<div class="field">
			<label class="label">Evidencia:</label>
			<div class="control">
				<div class="file is-info has-name">
					<label class="file-label">
						<input class="file-input" type="file" name="evidence">
						<span class="file-cta">
							<span class="file-icon">
								<i class="fas fa-upload"></i>
							</span>
							<span class="file-label">
								Evidencia
							</span>
						</span>
		    			<span class="file-name">
		      				---
		    			</span>
		  			</label>
				</div>
			</div>
		</div>

		<div class="field">
			<label class="label">URL:</label>
			<div class="control">
				<input class="input" type="url" name="url">
			</div>
		</div>


		<!--<div class="field">
			<label class="label">Estado:</label>
			<div class="control">
				<div class="select">
					<select name="status">

						<option disabled selected>Seleccione el estado del ticket</option>
						<?php /*foreach ($status as $s): */?>
							<option value="<?/*= $s['id'] */?>"><?/*= $s['name'] */?></option>
						<?php /*endforeach */?>

					</select>
				</div>
			</div>
		</div>
        -->

        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">Teléfono de contacto:</label>
                    <div class="control">
                        <input class="input" type="phone" name="phone">
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">Correo electrónico:</label>
                    <div class="control">
                        <input class="input" type="email" name="email">
                    </div>
                </div>
            </div>
        </div>



		<div class="field is-grouped is-left">
			<div class="control">
				<input class="button is-link is-light" type="reset">
			</div>
			<div class="control">
				<input class="button is-link" type="submit" name="" value="Guardar">
			</div>
		</div>

	</form>

</section>


<?= $this->endSection() ?>
