<script>
    var thisAdmin = JSON.parse(localStorage.getItem('admin'));
    if (thisAdmin.role != "superadmin") {
        window.location = '/admin/dashboard';
    }
</script>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <span id="today_date" class="float-right"></span> <br>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Candidates</h1>
        <!-- <span class="float-right">
            <button type="submit" class="btn p-2 m-2" style="width: 150px; 
                background-color:#04172c; color: #fff"><i class="fas fa-plus"></i>&nbsp;ADD NEW</button>
        </span> -->

    </div>
    <div id="errr"></div>
    <div class="card">
        <!-- <div class="card-header">
            <h5 class="card-title"></h5>
        </div> -->
        <div class="card-body">

            <form id="form_id">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>FULL NAME:</label>
                        <input type="text" class="form-control form-control-md" placeholder="enter full name.."
                            id="adminAddFullname" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>POST:</label>
                        <span class="float-sm-right mr-3">
                            <a href="#" class="btn btn-link btn-sm" data-toggle="modal" data-target="#NewPostModal">
                                <i class="fas fa-plus"></i> add New</a>
                        </span>
                        <select id="adminAddPosition" class="form-control custom-control custom-select" required>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>PICTURE (optional):</label>
                        <input type="file" class="form-control form-control-sm" placeholder="enter full name.."
                            id="adminAddCandidatesImage" required>
                    </div>

                    <div class="col-md-2 mb-3 pt-2">
                        <button class="btn form-control form-control-md mt-4"
                            style="background-color:#04172c; color: #fff" id="addCandidate" type="submit"
                            onclick="addNewCandidate()"><i class="fas fa-arrow-down"></i>&nbsp;Add New</button>
                    </div>
                </div>
            </form> <br>
            <div class="table-responsive">
                <table class="table table-striped table-sm candidateTable">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th style="width: 50%">FULL NAME</th>
                            <th>POSITION</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody id="candidatesTable"></tbody>
                </table>
            </div>
        </div>
    </div>







<!-- add a position modal -->
    <div class="modal fade" id="NewPostModal" tabindex="-1" role="dialog" aria-labelledby="NewPostModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="form_id2">
                        <center><img src="../favicon.ico" alt="" style="width:50px; height: 50px;"></center> <br>
                        <div class="col-md-12 mb-3">
                        <div class="custom-head">ADD A POST</div>
                            <input type="text" class="form-control form-control-md" id="positionInput"
                                placeholder="enter Position..">
                        </div>
                        <div class="col-md-12 mb-3">
                            <center>
                                <button id="positionBtn" type="button" class="btn btn-primary btn-block"
                                    onclick="addNewPosition()">Save</button>
                            </center>
                        </div>
                        <div class="text-center w-auto text-danger" id="errormsg"></div>
                        <div style="float: right;">
                            <small type="button" class="btn btn-link" style="color:#000;"
                                data-dismiss="modal">close</small>
                        </div>
                    </form> <br>
                </div>
            </div>
        </div>
    </div>




<!-- edit a candidate modal -->
    <div class="modal fade" id="editCandidateModal" tabindex="-1" role="dialog" aria-labelledby="editCandidateModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="form_id3">
                        <center><img src="../favicon.ico" alt="" style="width:50px; height: 50px;"></center> <br>
                        <input type="text" id="editCandidateIdField" style="display: none;">
                        <div class="col-md-12 mb-3">
                        <div class="custom-head">EDIT CANDIDATE</div>
                            <input type="text" class="form-control form-control-md" id="editCandidateNameField">
                        </div>
                        <div class="col-md-12 mb-3">
                        <select id="adminAddPositionModal" class="form-control custom-control custom-select" required>
                        </select> 
                        </div>
                        <div class="col-md-12 mb-3">
                            <center>
                                <button id="editCanBtn" type="button" class="btn btn-primary btn-block"
                                    onclick="updateCandidate()">Save</button>
                            </center>
                        </div>
                        <div class="text-center w-auto text-danger" id="errormsg"></div>
                        <div style="float: right;">
                            <small type="button" class="btn btn-link" style="color:#000;" 
                                data-dismiss="modal">close</small>
                        </div>
                    </form> <br>
                </div>
            </div>
        </div>
    </div>




</main>
</div>
</div>