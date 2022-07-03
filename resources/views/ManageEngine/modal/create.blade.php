    <!-- Add New ME Deployment  Modal-->
    <!-- Add New D Modal-->

<form  name=""  id="" action=" {{ route('projects.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade" id="DModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> New Proof-of-Concept </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                {{-- <form  name="form1" method="post" id="" action=" {{ route('projects.store') }}">
                    {{ csrf_field() }} --}}
                        <div class="pl-lg-10">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="team" >Team<span class="small text-danger">*</span></label>
                                        {{-- <input type="text" id="team" class="form-control" name="team" placeholder="Team" value=""  > --}}
                                        <select id="team" class="form-control" name="team">
                                            <option value="" disabled selected>Choose Team</option>
                                                <option value="ManageEngine">	ManageEngine</option>
                                                <option value="Binary Nexus">	Binary Nexus</option>
                                                <option value="Network Team">	Network Team</option>
                                                <option value="Cabling Team">	Cabling Team</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="presale">PreSale<span class="small text-danger">*</span></label>
                                        {{-- <input type="text" id="aname" class="form-control" name="aname" placeholder="Full Name" value=""> --}}
                                        <select id="presale" class="form-control" name="presale">
                                            <option value="" disabled selected>Choose PreSale</option>
                                                <option value="POC">	POC</option>
                                                <option value="Demo">	Demo</option>
                                                <option value="Tender">	Tender</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="enduser" >End User<span class="small text-danger">*</span></label>
                                        <input type="text" id="enduser" class="form-control" name="enduser" placeholder="End User" value="#">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="partner">Partner<span class="small text-danger">*</span></label>
                                        <input type="text" id="partner" class="form-control" name="partner" placeholder="Partner" value="#">
                                        <!-- <input type="tel" id="anotel" class="form-control" name="anotel" pattern="[0-9]{11}" placeholder="No Tel 0122345678" value=""> -->
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="product">ME Product<span class="small text-danger">*</span></label>
                                        <select id="product" class="form-control" name="product">
                                            <option value="#" disabled selected>Choose Product</option>
                                                <option value="MDM">		MDM</option>
                                                <option value="MDM Plus">	MDM Plus</option>
                                                <option value="OP">		    OP</option>
                                                <option value="OP Plus">	OP Plus</option>
                                                <option value="DC">		    DC</option>
                                                <option value="DC Plus">	DC Plus</option>
                                                <option value="PM">		    PM</option>
                                                <option value="PM Plus">	PM Plus</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="staff_id">Account Manager<span class="small text-danger">*</span></label>
                                        <input type="text" id="staff_id" class="form-control" name="staff_id" placeholder="Account Manager" value="#">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="staff_id"> Assign Engineer<span class="small text-danger">*</span></label>
                                        <input type="text" id="staff_id" class="form-control" name="staff_id" placeholder="Engineer Name" value="#">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="workingstatus">Working Status<span class="small text-danger">*</span></label>
                                        <select id="workingstatus" class="form-control" name="workingstatus">
                                        <option value="#" disabled selected>Choose your option</option>
                                            <option value="Onsite">		Onsite</option>
                                            <option value="Remote">		Remote</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="status">Status<span class="small text-danger">*</span></label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="#" disabled selected>Choose your option</option>
                                            <option value="Due">	     Due</option>
                                            <option value="Pending">     Pending</option>
                                            <option value="In Progress"> In Progress</option>
                                            <option value="Completed">	 Completed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="postatus">PO Status</label>
                                        <select id="postatus" class="form-control" name="postatus">
                                            <option value="#" disabled selected>Choose your option</option>
                                            <option value="Due">	     Due</option>
                                            <option value="Pending">     Pending</option>
                                            <option value="In Progress"> In Progress</option>
                                            <option value="Completed">	 Completed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="startdate">Start Date</label>
                                        <input type="date" class="form-control" id="startdate" name="startdate" value="#"/>
                                        <span class="input-group-addon glyphicon glyphicon-calendar" class="input-group-text" id="basic-addon2">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="enddate">End Date</label>
                                        <input type="date" class="form-control" id="enddate" name="enddate" value="#"/>
                                        <span class="input-group-addon glyphicon glyphicon-calendar" class="input-group-text" id="basic-addon2">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="mdays">M/day</label>
                                        <input type="text" class="form-control" id="mdays" name="mdays" placeholder="M/day" value="#">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="pocupdate">POC Update</label>
                                        <select id="pocupdate" class="form-control" name="pocupdate">
                                        <option value="#" disabled selected>Choose your option</option>
                                            <option value="Due">	     Due</option>
                                            <option value="Pending">     Pending</option>
                                            <option value="In Progress"> In Progress</option>
                                            <option value="Completed">	 Completed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="remark">Remark</label>
                                        <input type="text" class="form-control" id="remark" name="remark" placeholder="Remark" value="#">
                                    </div>
                                </div>

                            </div>
                        </div>
                    {{-- </form> --}}
                </div>
                <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit" data-dismiss="modal">Submit</button>
                        {{-- <button class="btn btn-primary" type="submit" value="" onclick="event.preventDefault();document.getElementById('create').button();" > Submit</button> --}}
                </div>
            </div>
        </div>
    </div>
