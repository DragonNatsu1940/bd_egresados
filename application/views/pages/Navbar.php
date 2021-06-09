<nav class="navbar-dark bg-gradient-primary navbar-expand-md justify-content-center">
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/'); ?>">INICIO</a>
            </li>
            <?php if ($this->session->userdata('name')) : ?>
                <li class="nav-item">                
                    <a class="nav-link" href="<?= base_url('admin/home'); ?>">CUENTA</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/logout'); ?>">CERRAR SESION</a>
                </li>

            <?php else : ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/help'); ?>">AYUDA</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/login'); ?>">INICIAR SESION</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/register'); ?>">REGISTRO</a>
                </li>

            <?php endif; ?>

        </ul>
    </div>
</nav>