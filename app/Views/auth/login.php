<link rel="stylesheet" href="<?= base_url('assets/css/bulma.min.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<section class="hero is-link is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                    <form action="" class="box">
                        <div class="field">
                            <label for="" class="label">Correo electrónico</label>
                            <div class="control has-icons-left">
                                <input type="email" placeholder="mail@mail.com" class="input" required>
                                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label for="" class="label">Contraseña</label>
                            <div class="control has-icons-left">
                                <input type="password" placeholder="*******" class="input" required>
                                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label for="" class="checkbox">
                                <input type="checkbox">
                                Recordarme
                            </label>
                        </div>
                        <div class="field">
                            <button class="button is-success" href="tickets">
                                Iniciar sesión
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>