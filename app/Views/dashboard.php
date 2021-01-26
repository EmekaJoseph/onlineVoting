
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <span id="today_date" class="float-right"></span> <br>

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>

    </div>


    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-deck">
                        <div class="card mb-1 p-2">
                            <h1 class="card-text" id="voternumDashboard" style="color: #1c5999"></h1>
                            <div>Number of Registered Voters</div>
                        </div>

                        <div class="card mb-1 p-2">
                            <h1 class="card-text" id="votersvotedDashboard" style="color: #1c5999"></h1>
                            <div>Number of Votes</div>
                        </div>

                        <div class="card mb-1 p-2">
                            <h1 class="card-text" id="candidatesnumDashboard" style="color: #1c5999"></h1>
                            <div>Number of Candidates</div>
                        </div>

                        <div class="card mb-1 p-2">
                            <h1 class="card-text" id="noOfPositions" style="color: #1c5999">0</h1>
                            <div>Available Positions</div>
                        </div>

                        <!--  -->

                    </div>
                </div>
            </div>
        </div>
    </div> <br>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-deck">
                        <div class="card mb-1">
                            <h5 class="card-header" style="background-color:#c5d7eb; color:#000">Add / Remove Positions:
                            </h5> <br>
                            <div class="card-deck p-2">
                                <div class="card mb-1">
                                    <div class="card-body m-auto" style="width:220px">
                                        <form id="form_id">
                                            <input type="text" class="form-control w-100" id="positionInput"> <br>
                                            <button id="positionBtn" class="btn btn-sm btn-primary w-100" onclick="addNewPosition()">Add
                                                new
                                                &nbsp<span class="fas fa-arrow-right"></span> </button>
                                        </form> <br>
                                        <div class="text-center w-auto text-danger" id="errormsg"></div>
                                    </div>
                                    <!-- <div class="loader" id="loader"></div> -->
                                </div>

                                <div class="card mb-1">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-sm">
                                                <thead>
                                                    <tr>
                                                        <td>S/N</td>
                                                        <td>POSITIONS</td>
                                                        <td>DEL</td>
                                                    </tr>
                                                </thead>
                                                <tbody id="positionsTable"></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--  -->
                        <div class="card p-4">
                        <div id="calendar"></div>
                            <!-- <h5 class="card-header" style="background-color:#c5d7eb; color:#000">Info:</h5>
                            <div class="card-body">
                                <div class="card-text alert alert-warning"> This Project is designed by: <br>
                                    <b>Iwuji Chukwuemeka Joseph.</b><br>
                                    Any attempt to copy or re-use this Code / Application, should be attributed to
                                    its<b> Original Designer:</b><br> <br>
                                    <div class="alert alert-secondary">
                                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp;iProffix<br>
                                            <i class="fa fa-envelope"
                                                aria-hidden="true"></i>&nbsp;Josephiwuji@gmail.com<br>
                                            <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;08139590011<br>
                                        
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
</div>
</div>