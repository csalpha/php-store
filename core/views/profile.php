<!-- container -->
<!-- ===================================================================================================== -->
    <div class="container">
        <!-- row -->
        <!-- ===================================================================================================== -->
            <div class="row my-5">
                <!-- col -->
                <!-- ===================================================================================================== -->
                    <div class="col">
                        <!-- table -->
                        <!-- ===================================================================================================== -->                    
                            <table class="table table-striped">
                                <!-- dados cliente -->
                                <!-- ===================================================================================================== -->                                    
                                    <?php foreach($data_customer as $key=>$value): ?>
                                        <tr>
                                            <td class="text-end" width="40%"><?= $key ?>:</td>
                                            <td width="60%"><strong><?= $value ?></strong></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <!-- ===================================================================================================== -->                                    
                            </table>
                        <!-- ===================================================================================================== -->    
                    </div>
            </div>
        <!-- ===================================================================================================== -->
    </div>
<!-- ===================================================================================================== -->