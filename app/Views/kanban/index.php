<?= $this->extend('layout/main'); ?>


<?= $this->section('botones') ?>
<div class="">
    <a href="/tickets/new" class="button is-light">Nuevo ticket</a>
</div>
<?= $this->endSection() ?>



<?= $this->section('content'); ?>


<section class="section">
    <div class="">
        <div class="columns is-multiline is-centered cards-container" id="sectioncontainer">
            <div class="column is-one-third">
                <article class="message is-primary">
                    <div class="message-header">
                        <p>Por hacer</p>
                    </div>
                    <div class="message-body">

                        <?php if (!empty($ts01) && is_array($ts01)): ?>
                            <?php foreach ($ts01 as $t): ?>
                                <div class="box">
                                    <a href="<?= base_url('tickets/show/' . $t['id']); ?>" style="text-decoration: none">
                                        <?= esc($t['title']) ?>
                                    </a>
                                </div>
                            <?php endforeach ?>

                        <?php else: ?>
                            <div class="has-text-centered is-align-content-center">
                                <p class="subtitle is-center">No hay información de tickets de soporte en la base de
                                    datos.</p>

                                <a class="button is-link" href="/tickets/new">+ Nuevo</a>
                            </div>
                        <?php endif ?>


                    </div>
                </article>
            </div>


            <div class="column is-one-third">
                <article class="message is-link">
                    <div class="message-header">
                        <p>Haciendo</p>
                    </div>
                    <div class="message-body">
                        <?php if (!empty($ts02) && is_array($ts02)): ?>
                            <?php foreach ($ts02 as $t2): ?>
                                <div class="box">
                                    <a href="<?= base_url('tickets/show/' . $t2['id']); ?>" style="text-decoration: none">
                                        <?= esc($t2['title']) ?>
                                    </a>
                                </div>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </div>
                </article>
            </div>
            <div class="column is-one-third">

                <article class="message is-dark">
                    <div class="message-header">
                        <p>Hecho</p>
                    </div>
                    <div class="message-body">
                        <?php if (!empty($ts03) && is_array($ts03)): ?>
                            <?php foreach ($ts03 as $t3): ?>
                                <div class="box">
                                    <a href="<?= base_url('tickets/show/' . $t3['id']); ?>" style="text-decoration: none">
                                        <?= esc($t3['title']) ?>
                                    </a>
                                </div>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>



<?= $this->endSection(); ?>
