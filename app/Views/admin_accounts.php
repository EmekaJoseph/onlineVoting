<script>
    var thisAdmin = JSON.parse(localStorage.getItem('admin'));
    if (thisAdmin.role != "superadmin") {
        window.location = '/admin/dashboard';
    }
</script>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <span id="today_date" class="float-right">


    </span> <br>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Other Accounts</h1>
    </div>
    <!-- <div id="err"></div> -->
    <div class="card-deck">
        <div class="card">
            <div class="card-body">
                <div class="card-header"><b>ADD NEW USER</b></div> <br>
                <form id="form_newUser">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nickname" id="nick">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Username" id="username">
                        </div>
                    </div> <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Password" id="password1">
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Repeat password" id="password2">
                        </div>
                    </div> <br>
                    <center>
                        <button type="button" class="btn btn-primary" id="btn_save" onclick="addNewUser()"
                            style="background-color:#04172c; width: 200px">
                            <i class="fas fa-save"></i>&nbsp;Save</button>
                    </center>
                </form> <br>
                <div id="newAdminMsg" class="alert alert-warning"> These users can ONLY add/edit voters
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr style="background-color: #F7F7F7;">
                                <td>S/N</td>
                                <td>NICKNAME</td>
                                <td>USERNAME</td>
                                <td>STATUS</td>
                                <td>ACTION</td>
                            </tr>
                        </thead>
                        <tbody id="usersTable"></tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>




    <!-- modal for editUser -->
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="form_edit_user">
                        <center><img src="../favicon.ico" alt="" style="width:50px; height: 50px;"></center> <br>
                        <input type="text" id="editUserIdField" style="display: none;">
                        <div class="col-md-12 mb-3">
                        <div class="custom-head">EDIT USER</div>
                            <label>Nick Name:</label>
                            <input type="text" class="form-control form-control-md" id="editUserNickField">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Username:</label>
                            <input type="text" class="form-control form-control-md" id="editUserUsernameField">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Password:</label>
                            <input type="text" class="form-control form-control-md" id="editUserPasswordField">
                        </div>
                        <div style="float: right;">
                            <button type="button" class="btn btn-primary" onclick="updateUser()">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form> <br>
                </div>
            </div>
        </div>
    </div>




</main>
</div>
</div>