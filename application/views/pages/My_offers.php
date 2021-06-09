<?php
require_once 'Toggle.php';
?>
<div class="row">
    <div class="p-2">
        <div class="container">
            <?php foreach ($offers as $key => $offer) : ?>

                <?php if ($offer['user_id']  == $this->session->userdata('user_id')) : ?>

                <div class="card">
                    <div class="card-header">
                        <h4><?= $offer['title']; ?> </h4>
                    </div>
                    <div class="card-body d-flex justify-content-between">

                        <div>
                            <p><?= $offer['profession']  == 'sistemas' ? 'Ingenieria de Sistemas' : 'Ingenieria Industrial'; ?> </p>
                            <p><?= $offer['description']; ?> </p>
                        </div>

                        <div>
                            <p><?= $offer['date_start']; ?> </p>
                            <button class="btn btn-primary btn-sm m-2" data-toggle="modal" data-target="#put_services<?= $offer['id'] ?>">Detalles</button>


                            <div class="modal fade" id="put_services<?= $offer['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Actualizar Servicio</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card-body d-flex justify-content-between">
                                                        <div>
                                                            <div class="form-group">
                                                                <h5 for=""><?= $offer['title']; ?> </h5></br>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <p for=""><?= $offer['profession']  == 'sistemas' ? 'Ingenieria de Sistemas' : 'Ingenieria Industrial'; ?> </p></br>
                                                            </div>
                                                            <div class="form-group">
                                                                <p for="">Salario de $<?= $offer['price']; ?> </p></br>
                                                            </div>
                                                            <div class="form-group">
                                                                <p for=""><?= $offer['description']; ?> </p></br>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="form-group">
                                                                <p for="gender"><?= $offer['date_start']; ?> </p></br>
                                                            </div>
                                                            <div class="form-group">
                                                                <p for=""><?= $offer['date_finish']; ?> </p></br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
        <?php endif; ?>
                
            <?php endforeach; ?>
        </div>
    </div>
</div>