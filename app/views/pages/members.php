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
                                            <label class="mr-3 mb-0 d-none d-md-block">Group:</label>
                                            <select class="form-control" id="member-table-group-filter">
                                                <option value="">All</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 my-2 my-md-0 d-none">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Active:</label>
                                            <select class="form-control" id="member-table-active-filter">
                                                <option value="">All</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 my-2 my-md-0">
                                        <button class="btn btn-success float-right" id="btn-init-member-add"><i class="fas fa-user-plus"></i>Add Member</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="width:5px;">#</th>
                                    <th>Full Name</th>
                                    <th>Group</th>
                                    <th>Email</th>
                                    <th>Contact No.</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody id="member-table"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once '../app/views/includes/masterpagefooter.php' ?>
<?php require_once '../app/views/includes/footer.php' ?>
