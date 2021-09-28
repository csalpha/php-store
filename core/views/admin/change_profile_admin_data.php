<?php
// ===========================================================
    // classes carregadas
        namespace core\controllers;
        use core\classes\Database;
        use core\classes\SendEmail;
        use core\classes\PDF;
        use core\classes\Store;
        use core\models\AdminModel;
    // ===========================================================
    ?>


<!-- container -->
<!-- ===================================================================================================== -->
    <div class="container-fluid">
        <!-- row -->
        <!-- ===================================================================================================== -->
            <div class="row mt-3">

                <!-- col-md-2 -->
                <!-- ===================================================================================================== -->
                    <div class="col-md-2">
                        <?php include(__DIR__ . '/layouts/admin_menu.php') ?>
                    </div>
                <!-- ===================================================================================================== -->
                
                <!-- col-md-10 -->
                <!-- ===================================================================================================== -->
                    <div class="col-md-10">
                        <!-- row mt-3 -->
                        <!-- ===================================================================================================== -->
                            <div class="row mt-3">

                                    <?php //Store::printData($data_admin); ?>

                                        <div class="col text-center">
                                            <a href="?a=change_profile_admin_data&c=<?= Store::aes_encrypt($_SESSION['admin']) ?>" class="mb-3 btn btn-black text-uppercase filter-btn m-2 m-1"><i class="fas fa-edit"></i> Alterar dados pessoais</a>
                                            <a href="?a=change_password_admin_profile" class="mb-3 btn btn-black text-uppercase filter-btn m-2 m-1"><i class="fas fa-key"></i> Alterar a password</a>
                                      <!--      <a href="?a=order_history" class="mb-3 btn btn-black text-uppercase filter-btn m-2 m-1"><i class="far fa-list-alt"></i> Histórico de orders</a> -->
                                        </div>

                                        <!-- form -->
                                        <!-- ===================================================================================================== -->
                                                <form action="?a=change_profile_admin_data_submit" method="post">
                                                    <!-- form-group  -->
                                                    <!-- ===================================================================================================== -->   
                                                    <?php //Store::printData($data_admin) ?>                         
                                                        <div class="form-group">
                                                            <label>Email:</label>
                                                            <input type="email" maxlength="50" name="text_email" class="form-control" required value="<?= $data_admin->user ?>">
                                                            <input type="text"  name="text_id_admin" class="form-control"  value="<?= $data_admin->id_admin ?>">
                                                        </div>
                                                    <!-- ===================================================================================================== -->

                                                    <!-- form-group  -->
                                                    <!-- ===================================================================================================== -->
                                                        <div class="form-group">
                                                            <label>Full Name:</label>
                                                            <input type="text" maxlength="50" name="text_full_name" class="form-control" required value="<?= $data_admin->full_name ?>">
                                                        </div>
                                                    <!-- ===================================================================================================== -->

                                                    <!-- form-group  -->
                                                    <!-- ===================================================================================================== -->
                                                        <div class="form-group">
                                                            <label>address:</label>
                                                            <input type="text" maxlength="100" name="text_address" class="form-control" required value="<?= $data_admin->address ?>">
                                                    <!-- ===================================================================================================== -->

                                                    <!-- form-group  -->
                                                    <!-- ===================================================================================================== -->
                                                        <div class="form-group">
                                                            <label>city:</label>
                                                            <input type="text" maxlength="50" name="text_city" class="form-control" required value="<?= $data_admin->city ?>">
                                                        </div>
                                                    <!-- ===================================================================================================== -->

                                                    <!-- form-group  -->
                                                    <!-- ===================================================================================================== -->
                                                        <div class="form-group">
                                                            <label>telephone:</label>
                                                            <input type="text" maxlength="20" name="text_telephone" class="form-control" value="<?= $data_admin->telephone ?>">
                                                        </div>
                                                    <!-- ===================================================================================================== -->

                                                    <!-- buttons-div  -->
                                                    <!-- ===================================================================================================== -->
                                                        <div class="text-center my-4">
                                                            <a href="?a=profile" class="mb-3 btn btn-black text-uppercase filter-btn m-2 btn-100">Cancelar</a>
                                                            <input type="submit" value="Salvar" class="mb-3 btn btn-black text-uppercase filter-btn m-2 btn-100">
                                                        </div>
                                                    <!-- ===================================================================================================== -->
                                                </form>
                                        <!-- ===================================================================================================== -->
                                        
                                        <!-- se a variavel erro estiver definida na sessao -->
                                        <!-- ===================================================================================================== -->
                                                <?php if(isset($_SESSION['erro'])):?>
                                                    <!-- show alert danger -->
                                                    <!-- ===================================================================================================== -->                                
                                                        <div class="alert alert-danger text-center p-2">
                                                            <?= $_SESSION['erro'] ?>
                                                            <?php unset($_SESSION['erro']) ?>
                                                        </div>
                                                    <!-- ===================================================================================================== -->                                
                                                <?php endif; ?>
                                        <!-- ===================================================================================================== -->
                            
                            </div>
                        <!-- ===================================================================================================== -->
                        
                        <!-- espaco em branco -->
                        <!-- ===================================================================================================== -->
                            <div class="row">
                                <div class="col">
                                </div>
                                <div class="col">
                                    <div class="mb-3 row">
                                    </div>
                                </div>
                            </div>
                        <!-- ===================================================================================================== -->                                                                                     
                        </div> 
                        <!-- ===================================================================================================== -->                                                                                     
                    </div>
                <!-- ===================================================================================================== -->
            </div>
        <!-- ===================================================================================================== -->
    </div>
<!-- ===================================================================================================== -->