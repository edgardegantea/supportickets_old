<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>

<section class="section">

    <h1><?= esc($total) ?> categorías registradas en la base de datos</h1>

    <div class="columns is-multiline">

        <?php if (!empty($categorias) && is_array($categorias)): ?>
            <?php foreach ($categorias as $categoria): ?>

                <div class="column is-one-third">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-title">
                                <p><?= esc($categoria['name'])?></p>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="is-primary">
                                <?= esc($categoria['description']) ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a class="card-footer-item" href="<?= base_url('categorias/show/'.$categoria['id']); ?>">
                                Ver
                            </a>
                            <a class="card-footer-item">
                                Editar
                            </a>
                            <a class="card-footer-item">
                                Eliminar
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
    </div>

        <?php else: ?>
            <div class="has-text-centered is-align-content-center">
                <p class="subtitle is-center">No hay información de tickets de soporte en la base de datos.</p>

                <a class="button is-link" href="/tickets/new">+ Nuevo</a>
            </div>
        <?php endif ?>

    </div>

</section>

<?= $this->endSection(); ?>
