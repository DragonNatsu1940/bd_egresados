<div class="background-login">
    <div class="container-scroller m-5">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth ">
                    <div class="card col-lg-4 mx-auto bg-gradient-primary text-white pt-4">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <h2>REGISTRO</h2>
                                <!-- <img class="img-fluid" src="<?= base_url('assets/images/login.png'); ?>" /> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/actions/register') ?>" id="formLogin" method="POST">
                                <div class="row d-flex">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label class="form-label">Nombre:</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Cedula:</label>
                                            <input type="text" name="cc" class="form-control">
                                        </div>

                                        <div class="form-group ">
                                            <label class="form-label">Contraseña:</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Profesion:</label>
                                            <select id="category_product" name="profession" type="text" class="custom-select">
                                                <option value="sistemas">Ingenieria de Sistemas</option>
                                                <option value="industrial">Ingenieria Industrial</option>
                                            </select>
                                        </div>

                                        

                                        <div class="form-group">
                                            <label class="form-label">Generol:</label>
                                            <select id="category_product" name="gender" type="text" class="custom-select">
                                                <option value="m">Masculino</option>
                                                <option value="f">Femenino</option>
                                            </select>
                                        </div>
                                    </div>           
                                    <input type="text" name="role" value="2" class="d-none">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Apellidos:</label>
                                            <input type="text" name="last_name" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Telefono:</label>
                                            <input type="text" name="phone" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Repetir Contraseña:</label>
                                            <input type="password" name="Copassword" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Especializacion:</label>
                                            <input type="text" name="specialization" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Correo electronico:</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group align-items-center text-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label mt-2" style="color: #7af4c9 !important;">
                                            <input type="checkbox" class="form-check-input">
                                            Aceptas Terminos y Condiciones
                                        </label>
                                    </div>
                                </div>
                                <div class="text-center mt-2">
                                    <button type="submit" class="btn bg-light btn-light btn-block enter-btn">Iniciar sesion</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>