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
                <article class="message is-warning">
                    <div class="message-header">
                        <p>Por hacer</p>

<!--                        <button class="delete" aria-label="delete"></button>-->

                    </div>
                    <div class="message-body">

                        <?php if (!empty($ts01) && is_array($ts01)): ?>
                            <?php foreach ($ts01 as $t): ?>

                                <div class="board-item">
                                    <div class="board-item-content mt-5"><span><?= esc($t['title']) ?></span></div>
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
                <article class="message is-primary">
                    <div class="message-header">
                        <p>Haciendo</p>
<!--                        <button class="delete" aria-label="delete"></button>-->
                    </div>
                    <div class="message-body">
                        <?php if (!empty($ts02) && is_array($ts02)): ?>
                            <?php foreach ($ts02 as $t2): ?>

                                <div class="board-item">
                                    <div class="board-item-content mt-5"><span><?= esc($t2['title']) ?></span></div>
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
                        <!--                        <button class="delete" aria-label="delete"></button>-->
                    </div>
                    <div class="message-body">
                        <?php if (!empty($ts03) && is_array($ts03)): ?>
                            <?php foreach ($ts03 as $t3): ?>

                                <div class="board-item">
                                    <div class="board-item-content mt-5"><span><?= esc($t3['title']) ?></span></div>
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
