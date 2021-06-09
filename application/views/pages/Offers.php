<?php
require_once 'Toggle.php';
?>

<div class="offers-c">
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Crear Oferta</h3>
                <div class="card">
                    <form class="form-card mt-2 p-5" action="<?= base_url('admin/actions/add_offer') ?>" method="POST">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Titulo de la Oferta
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" name="title">
                            </div>
                            <input class="d-none" type="text" name="user_id" value="<?= $this->session->userdata('user_id') ?>">

                        </div>                        

                        <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Fecha de Hoy
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="datetime" name="date_start" value="<?php echo date("Y-m-d");?>">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Fecha de Finalizacion
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="date" name="date_finish" placeholder="date('l jS \of F Y h:i:s A');">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Salario
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" name="price" placeholder="1000000">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Profesion
                                    <span class="text-danger"> *</span>
                                </label>
                                <select class="custom-select mr-sm-2" name="profession" id="inlineFormCustomSelect">
                                    <option value="sistemas">Ingenieria de Sistemas</option>
                                    <option value="industrial">Ingenieria Industrial</option>
                                </select>
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Descripcion de la oferta
                                    <span class="text-danger"> *</span>
                                </label>
                                <textarea name="description" cols="10" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6">
                                <button type="submit" class="btn-block btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>