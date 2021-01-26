<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/css/util.css">
    <link rel="stylesheet" href="vendor/fonts/font-awesome-5.15.1/css/all.css">
    <link rel="stylesheet" href="vendor/css/custom.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<style>
.head{
    font-family: 'Dancing Script', cursive;
}
</style>

<script>
    if (sessionStorage.getItem('voter') == null) {
            window.location = '/';
        }
</script>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">VOTING SYSTEM</a>
        <span class="float-right">
            <div class="text-center" id="today_date" style="color: #fff"></div>
        </span>
    </nav> <br><br><br>

    <div class="container">
        <div class="text-center mt-3">
            <span class="mt-3 head h4">Welcome,</span> <br>
            <span id="voter_name" style="font-size: 1.5rem;" class="badge badge-secondary px-4"></span>
        </div>
    </div>

    <div class="container" style="padding-top: 20px;">
        <div class="row justify-content-center" id="voting_cards"></div>
        <hr>


        <center>
            <button id="voteBtn" class="btn btn-primary p-2 m-2" style="width: 300px;" onclick="castVotes()" disabled>CAST VOTE</button> <br>
            <a href="#" style="color: brown;" onclick="logout_voter()"><i class="fas fa-times"></i>&nbsp;I am not ready
                to vote</a>
        </center>
        <!-- end of voting page -->

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

        
<!-- <script>

var items = [{Id: "91263", Name: "cake"},
{Id: "91264", Name: "sand"},
{Id: "91263", Name: "cake"},
{Id: "91264", Name: "sand"},
{Id: "91264", Name: "sand"},
{Id: "91264", Name: "sa"},
{Id: "91265", Name: "newItem"}];

var obj = {};
items = items.filter((thing, index, self) =>
  index === self.findIndex((t) => (
    t.id === thing.id && t.Name === thing.Name
  ))
)

console.log(items);

</script> -->
</body>


</html>

</html>