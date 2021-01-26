<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/css/util.css">
    <link rel="stylesheet" href="vendor/fonts/font-awesome-5.15.1/css/all.css">
    <link rel="stylesheet" href="vendor/css/custom.css">
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<script>
    if (localStorage.getItem('admin') !== null) {
            window.location = '/admin/dashboard';
        }
</script>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">VOTING SYSTEM</a>
        <span class="float-right">
            <div class="text-center" id="today_date" style="color: #fff"></div>
        </span>
    </nav>

    <div class="container row justify-content-center mx-auto" style="margin-top: 75px;">
        <div class="card" style="width: 25rem">
            <div class="card-body">
                <h5 class="card-title">ADMIN SIGN-IN</h5>
                <p class="card-text">Sign-In to add voters and candidates</p>
            </div>

            <div class="card-body">
            <div id="err" class="alert alert-info">Enter Admin Credentials</div>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-group form-control" id="username"
                            placeholder="Username">
                        <input type="password" class=" form-group form-control" id="password"
                            placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="showPass()"/>
                        <label> &nbsp;Show Password</label>
                    </div>
                    <center><button type="submit" class="btn btn-primary" id="adminIn" style="width: 200px;" onclick="loginAdmin()">Submit&nbsp;<i
                                class="fas fa-arrow-right"></i></button></center>
                </form>

            </div>
        </div>


    </div>


    <div class=" row w-100 justify-content-center footer">
        &copy;&nbsp;2020 iProffix | 08139590011
    </div>

</body>

<script src="/vendor/fonts/font-awesome-5.15.1/js/all.js"></script>
<script src="/vendor/jquery/jquery-3.5.1.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/js/moment.min.js"></script>
<script src="/vendor/js/sweetalert2.js"></script>
<script src="/vendor/js/custom/System.js"></script>


</html>