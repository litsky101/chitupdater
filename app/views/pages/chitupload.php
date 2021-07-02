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
                                    <div class="col-md-2 my-2 my-md-0">
                                        <button class="btn btn-success float-right" id="btnImport"><i class="fas fa-user-plus"></i>Import</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover" id="table-members">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Section/Branch</th>
                                    <th>Employment Status</th>
                                    <th>Chit Value</th>
                                </tr>
                            </thead>
                            <tbody id="member-table">
                                <tr>
                                    <th>SIDC2226</th>
                                    <th>De Sagun, Angelito De Leon</th>
                                    <th>MIS/Main Office</th>
                                    <th>Probationary</th>
                                    <th>2500</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once '../app/views/includes/masterpagefooter.php' ?>
<?php require_once '../app/views/includes/footer.php' ?>
