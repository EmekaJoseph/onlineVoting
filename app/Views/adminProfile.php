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
        <h1 class="h2">My Profile</h1>
    </div>
    <!-- <div id="err"></div> -->
    <div class="card-deck">
        <div class="card">
            <div class="card-body">
                <div class="container row justify-content-center">
                    <div class="col-md-9 mb-3">
                        <label>NICK NAME:</label>
                        <input type="text" class="form-control form-control-md" id="adminProfileNick" disabled>
                    </div>
                    <div class="col-md-9 mb-5">
                        <label>USER NAME:</label>
                        <input type="text" class="form-control form-control-md" id="adminProfileUsername" disabled>
                    </div>
                    <div class="col-md-9 mt-3">
                        <div id="changePwdMsg" class="alert alert-warning"> You can ONLY change your admin Password
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form id="form_change">
                    <div class="col-md-9 mb-3">
                        <label>EXISTING PASSWORD:</label>
                        <input type="password" class="form-control form-control-md" id="adminOldPassword">
                    </div>
                    <div class="col-md-9 mb-3">
                        <label>NEW PASSWORD:</label>
                        <input type="password" class="form-control form-control-md" id="adminNewPassword">
                    </div>
                    <div class="col-md-9 mb-3">
                        <label>REPEAT NEW PASSWORD:</label>
                        <input type="password" class="form-control form-control-md" id="adminNewPassword2">
                    </div>

                    <div class="col-md-9 mb-1">
                        <button class="btn form-control form-control-md mt-4"
                            style="background-color:#04172c; color: #fff" id="changePasswrd" type="submit"
                            onclick="changePassword()"><i class="fas fa-lock"></i>&nbsp;Change
                            Password</button>
                    </div>
                </form> <br>
            </div>
        </div>
    </div>

</main>
</div>
</div>