<?php require_once '../app/views/includes/header.php' ?>
<?php require_once '../app/views/includes/masterpageheader.php' ?>
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container-fluid">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="row align-items-center mb-5">
                            <div class="col-lg-12 col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-md-7 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="member-table-search" />
                                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                                        </div>
                                    </div>
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
                                </div>
                            </div>
                        </div>
                        <div class="datatable datatable-bordered datatable-head-custom" id="member-table"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once '../app/views/includes/masterpagefooter.php' ?>
<?php require_once '../app/views/includes/footer.php' ?>
