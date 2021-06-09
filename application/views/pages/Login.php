<div class="background-login">
<div class="container-scroller m-5">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth ">
                <div class="card col-lg-4 mx-auto bg-gradient-primary text-white pt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <img class="img-fluid" src="<?= base_url('assets/images/login.png'); ?>" />
                        </div>
                    </div>
                    <div class="card-body px-5 pb-5 pt-4">
                        <form action="<?= base_url('admin/validate_login') ?>" id="formLogin" method="POST">
                            <div class="form-group">
                                <label>Correo electronico*</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label>Contraseña*</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group align-items-center text-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label mt-2" style="color: #7af4c9 !important;">
                                        <input type="checkbox" class="form-check-input" > 
                                        Recuerdame
                                    </label>
                                </div>
								<div class="mt-2">
									<a href="<?= base_url('admin/forgot_password'); ?>" class="forgot-pass" style="color: #7af4c9 !important;">Olvidaste tu contraseña?</a>
								</div>
								<div class="mt-2">
									<a href="<?= base_url('admin/register'); ?>" class="forgot-pass" style="color: #7af4c9 !important;">No tienes una cuenta?</a>
								</div>
                            </div>
                            <div class="text-center mt-2">
                                <button type="submit" class="btn bg-light btn-light btn-block enter-btn" >Iniciar sesion</button>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>