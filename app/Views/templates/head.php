<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/css/util.css">
    <link rel="stylesheet" href="../vendor/fonts/font-awesome-5.15.1/css/all.css">
    <link rel="stylesheet" href="../vendor/css/custom.css">
    <link rel="stylesheet" href="../vendor/css/datatables.css">
    <link rel="stylesheet" href="../vendor/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../vendor/calendar/main.css">
    <link rel="shortcut icon" href="../favicon.ico" />
</head>

<script>
    if (localStorage.getItem('admin') === null) {
        window.location = '/admin';
    }
</script>

<body>
    <!-- uri for active classes -->
    <?php $uri = service('uri')?>
    <!-- end of uri -->
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-1 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" style="color: #fff" href="#">Voting System</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color: #08294d"></span>
        </button>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse"
                style="background-color: #04172c">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item mt-3 mb-4">
                            <div class="container" style="color:#8a8888">
                                <i class="fas fa-user-circle"></i> &nbsp;
                                <span id="adminName"></span> 
                                <!-- <small> ( <a href="/admin/profile">profile</a> )</small> -->
                                <hr color="#8a8888">
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($uri->getsegment(2) == 'dashboard'? 'active' : null)?>"
                                href="/admin/dashboard">
                                <i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard
                            </a>
                        </li>
                        <li class="nav-item" id="editingCandidatesId">
                            <a class="nav-link <?= ($uri->getsegment(2) == 'candidates'? 'active' : null)?>"
                                href="/admin/candidates">
                                <i class="fas fa-user-tie"></i>&nbsp;
                                Candidates &nbsp;&nbsp;<span class="badge badge-pill badge-light"
                                    id="candidatesnumNav">0</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($uri->getsegment(2) == 'voters'? 'active' : null)?>"
                                href="/admin/voters">
                                <i class="fas fa-users"></i>&nbsp;
                                Voters &nbsp;&nbsp;<span class="badge badge-pill badge-light"
                                    id="voternumNav">0</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown" id="settingsId">
                            <div id="accordion">
                                <button class="btn btn-link nav-link dropdown-toggle" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fas fa-cog"></i>&nbsp; Settings
                                </button>
                                <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <ul>
                                        <li style="list-style: none;">
                                            <a href="/admin/profile"
                                                class="nav-link <?= ($uri->getsegment(2) == 'profile'? 'active' : null)?>"><i
                                                    class="far fa-user"></i>&nbsp;My Profile</a>
                                        </li>
                                        <li style="list-style: none;">
                                            <a href="/admin/accounts" id="editUsersLink"
                                                class="nav-link <?= ($uri->getsegment(2) == 'accounts'? 'active' : null)?>"><i
                                                    class="fas fa-edit"></i>&nbsp;
                                                Other Accounts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" style="">
                            <a class="nav-link" href="../leaderboard">
                                <i class="fa fa-chart-bar"></i>&nbsp;&nbsp;Leader-Board</a>
                        </li>
                        <li class="nav-item" style="margin-top: 75px;">
                            <a class="nav-link" href="#" onclick="logout_admin()">
                                <i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a>
                        </li>
                        <!-- <div class="container ml-3 mb-0" style="margin-top: 500px; position: fixed; color: #ccc5">
                            <span id="adminName"></span> (Signed-In)</div> -->

                    </ul>
                </div>
            </nav>