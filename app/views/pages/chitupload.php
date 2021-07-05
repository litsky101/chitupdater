
<?php require_once '../app/views/includes/header.php' ?>
<?php require_once '../app/views/includes/masterpageheader.php' ?>
<?php require_once '../app/helpers/PHPExcel/IOFactory.php' ?>
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container-fluid">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="row align-items-center mb-5">
                            <div class="col-lg-12 col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Branch:</label>
                                            <select class="form-control" id="branchselect">
                                                <?php
                                                    foreach ($data['branches'] as $row) {
                                                        echo "<option value='" . $row['IPADDRESS'] . "'>" . $row['BRANCHNAME'] . "</option>";
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-0 my-2 my-md-0">
                                        <!-- <button class="btn btn-success float-right" id="btnUpdate" data-toggle="modal" data-target="#confimationModal"><i></i>Update</button> -->
                                        <button class="btn btn-success float-right" id="btnUpdate"><i></i>Update</button>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6 my-2 my-md-0">
                                        <br>
                                        <input type="file" id="fileupload" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <table class="table table-hover" id="memberlist">

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confimationModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to update chit details?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-success font-weight-bold" id="updateConfirm">Yes</button>
                <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal" id="closeModal">No</button>
            </div>
        </div>
    </div>
</div>

<?php require_once '../app/views/includes/masterpagefooter.php' ?>
<?php require_once '../app/views/includes/footer.php' ?>
