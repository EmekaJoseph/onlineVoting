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

    <style>
        body {
            background: #fff;
        }

        .login_image {
            width: 100%;
            height: auto;
        }

        .card-title {
            background-color: #ED7D2B;
            padding: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">VOTING SYSTEM</a>
        <span class="float-right">
            <div class="text-center" id="today_date" style="color: #fff"></div>
        </span>
    </nav>
    <!-- <img src="vendor/images/img.png" alt="..." style="height:50px; width:50px"> -->

    <div class="container row justify-content-center  mx-auto" style="margin-top: 100px; 
    height: 100%; background-color: #fff;">
        <div class="col-md-6 col-lg-6 col-xl-6">
            <img src="vendor/assets/images/voting.jpg" alt="img" class="d-sm-none d-md-block login_image">
            <div class="ml-3"> <b style="color: #1E3E71;"> Mini-eVoting System designed for small group Societies and
                    Organisations</b>
                ..<a href="#" data-toggle="modal" data-target="#exampleModalCenter">read More</a>
            </div>
        </div>


        <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="card-body">
                <h5 class="card-title" style="color: #fff"><b> VOTERS' CODE</b></h5>
                <p class="card-text"><b>NB:</b> You can ONLY vote once!<br>
                    If you dont have a code, Contact the administrator</p>
            </div>

            <div class="card-body">
                <div id="err" class="alert alert-info"> Enter given <b>6-Digit Code</b> here:</div>
                <form>
                    <div class="form-group">
                        <input type="password" class="form-control" id="code" placeholder="Enter Voting Code Here.."
                            autocomplete="off">
                    </div>
                    <div class="form-group ">
                        <input type="checkbox" onclick="showPass()">
                        <label>Show / Hide</label>
                    </div>
                    <center>
                        <button onclick="login()" class="btn btn-primary" id="voterIn"
                            style="width: 200px;">Submit</button> <br>
                        <br> <a href="/leaderboard">View leader Board &nbsp;<i class="fas fa-arrow-right"></i></a>
                    </center>
                </form>


            </div>
        </div>


    </div>



    <!-- Read-more' Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">eVoting System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-justify">
                    Mini-eVoting System designed for small group Societies and Organisations,
                    voters can only <b>view leader-board</b> and <b>vote</b>. The Admin on the other
                    hass all the privilleges to <b>Add/Delete new voters, Add/Delete new Candidates,
                        Register available positions</b> but <b>can not alter votes</b>. <br> <br>
                    <div style="color: #868e96;">iProffix | 08139590011</div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>
















    <div class=" row w-100 justify-content-center footer">
        &copy;&nbsp;2020 iProffix | 08139590011
    </div>

    <script src="/vendor/fonts/font-awesome-5.15.1/js/all.js"></script>
    <script src="/vendor/jquery/jquery-3.5.1.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/js/moment.min.js"></script>
    <script src="/vendor/js/sweetalert2.js"></script>

    <!-- <script src="../vendor/js/datatables.js"></script> -->
    <script src="/vendor/js/custom/voterControl.js"></script>
    <script src="/vendor/js/custom/System.js"></script>




</body>

</html>