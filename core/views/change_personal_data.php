<!-- container -->
<!-- ===================================================================================================== -->
    <div class="container">
        <!-- row -->
        <!-- ===================================================================================================== -->
            <div class="row my-5">
                <!-- col-md-6 -->
                <!-- ===================================================================================================== -->
                    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-10 offset-1">
                        <!-- form -->
                        <!-- ===================================================================================================== -->
                            <form action="?a=change_admin_data_submit" method="post">
                                <!-- form-group  -->
                                <!-- ===================================================================================================== -->                            
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="email" maxlength="50" name="text_email" class="form-control" required value="<?= $data_personal->email ?>">
                                    </div>
                                <!-- ===================================================================================================== -->

                                <!-- form-group  -->
                                <!-- ===================================================================================================== -->
                                    <div class="form-group">
                                        <label>Full Name:</label>
                                        <input type="text" maxlength="50" name="text_full_name" class="form-control" required value="<?= $data_personal->full_name ?>">
                                    </div>
                                <!-- ===================================================================================================== -->

                                <!-- form-group  -->
                                <!-- ===================================================================================================== -->
                                    <div class="form-group">
                                        <label>address:</label>
                                        <input type="text" maxlength="100" name="text_address" class="form-control" required value="<?= $data_personal->address ?>">
                                <!-- ===================================================================================================== -->

                                <!-- form-group  -->
                                <!-- ===================================================================================================== -->
                                    <div class="form-group">
                                        <label>city:</label>
                                        <input type="text" maxlength="50" name="text_city" class="form-control" required value="<?= $data_personal->city ?>">
                                    </div>
                                <!-- ===================================================================================================== -->

                                <!-- form-group  -->
                                <!-- ===================================================================================================== -->
                                    <div class="form-group">
                                        <label>telephone:</label>
                                        <input type="text" maxlength="20" name="text_telephone" class="form-control" value="<?= $data_personal->telephone ?>">
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
            </div>
        <!-- ===================================================================================================== -->
    </div>
<!-- ===================================================================================================== -->