<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <span id="today_date" class="float-right">
        

    </span> <br>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Voters</h1>
    </div>
    <div id="err"></div>
    <div class="card">
        <!-- <div class="card-header">
            <h5 class="card-title"></h5>
        </div> -->
        <div class="card-body">
            <form id="form_id">
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>FIRST NAME:</label>
                        <input type="text" class="form-control form-control-md" placeholder="enter firstname.."
                            id="firstname" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>LAST NAME:</label>
                        <input type="text" class="form-control form-control-md" placeholder="lastname.." id="lastname"
                            required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>CODE: <span class="ml-5"><a href="#" onclick="autoGenerateCode(6)">
                                    <i class="fas fa-recycle"></i>&nbsp;Generate Code</a></span></label>
                        <input type="text" class="form-control form-control-md" placeholder="generate code.." id="code"
                            reqiured disabled>
                    </div>
                    <div class="col-md-3 mb-3 pt-2">
                        <button class="btn form-control form-control-md mt-4"
                            style="background-color:#04172c; color: #fff" id="addVoter" type="submit" onclick="addNewVoter()"><i
                                class="fas fa-arrow-down"></i>&nbsp;Add New</button>
                    </div>
                </div>
            </form> <br>

            <div class="table-responsive">
                <table class="table table-striped p-2 table-sm voterTable">
                    <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">FIRST NAME</th>
                            <th scope="col">LAST NAME</th>
                            <th scope="col">CODE</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">DATE VOTED</th>
                            <th scope="col">TIME</th>
                            <th scope="col">DELETE</th>
                        </tr>
                    </thead>

                    <tbody id="voterTable"></tbody>

                </table>
            </div>
        </div>
    </div>
</main>
</div>
</div>




