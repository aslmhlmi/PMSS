        <!-- Show ME Deployment  Modal-->
        <!-- Show D Modal-->
@foreach ($staffs as $staff)

<form  name=""  id="" action=" {{ url('engineer.update', $staff->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="modal fade" id="#ShowDModal-{{ $staff->id }}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Show Deployement </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                {{-- <form  name="form1" method="post" id="store" action="#">
                    {{ csrf_field() }} --}}
                        <div class="pl-lg-10">
                            <div class="row">
                            <div class="col-lg-2">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="addadminid" >No ID<span class="small text-danger">*</span></label>
                                        <input type="text" id="astaffid" class="form-control" name="astaffid" placeholder="No ID" value="#" disabled >
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="addaname">POC/Demo/Tender<span class="small text-danger">*</span></label>
                                        <input type="text" id="aname" class="form-control" name="aname" placeholder="Full Name" value="" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="agender" >End User<span class="small text-danger">*</span></label>
                                        <input type="text" id="aposition" class="form-control" name="aposition" placeholder="End User" value="" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="addanotel">Partner<span class="small text-danger">*</span></label>
                                        <input type="text" id="aposition" class="form-control" name="aposition" placeholder="Partner" value="" disabled>
                                        <!-- <input type="tel" id="anotel" class="form-control" name="anotel" pattern="[0-9]{11}" placeholder="No Tel 0122345678" value=""> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="adepartment">Account Manager<span class="small text-danger">*</span></label>
                                        <input type="text" id="aposition" class="form-control" name="aposition" placeholder="Account Manager" value="" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="aposition"> Assign Engineer<span class="small text-danger">*</span></label>
                                        <input type="text" id="aposition" class="form-control" name="aposition" placeholder="Engineer Name" value="" disabled>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="addaemail">ME Product<span class="small text-danger">*</span></label>
                                        <select id="role" class="form-control" name="role">
                                            <option value="" disabled selected>Choose Product</option>
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
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="role">Working Status<span class="small text-danger">*</span></label>
                                        <select id="role" class="form-control" name="role">
                                        <option value="" disabled selected>Choose your option</option>
                                            <option value="Onsite">		Onsite</option>
                                            <option value="Remote">		Remote</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="anric">Status<span class="small text-danger">*</span></label>
                                        <select id="astatus" class="form-control" name="astatus">
                                            <option value="" disabled selected>Choose your option</option>
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
                                        <label class="form-control-label" for="postatus">PO Status</label>


                                        <input type="text" class="form-control" id="postatus" name="postatus" placeholder="" disabled/>

                                        {{-- <select id="astatus" class="form-control" name="astatus">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="Due">	     Due</option>
                                            <option value="Pending">     Pending</option>
                                            <option value="In Progress"> In Progress</option>
                                            <option value="Completed">	 Completed</option>
                                        </select> --}}

                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="astartdate">Start Date</label>
                                        <input type="date" class="form-control" id="astartdate" name="astartdate" disabled/>
                                        <span class="input-group-addon glyphicon glyphicon-calendar" class="input-group-text" id="basic-addon2">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="enddate">End Date</label>
                                        <input type="date" class="form-control" id="enddate" name="enddate" disabled/>
                                        <span class="input-group-addon glyphicon glyphicon-calendar" class="input-group-text" id="basic-addon2">
                                        </span>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="pocupdate">POC Update</label>
                                        <input type="text" class="form-control" id="pocupdate" name="pocupdate" placeholder="" disabled/>

                                        {{-- <select id="astatus" class="form-control" name="astatus">
                                        <option value="" disabled selected>Choose your option</option>
                                            <option value="Due">	     Due</option>
                                            <option value="Pending">     Pending</option>
                                            <option value="In Progress"> In Progress</option>
                                            <option value="Completed">	 Completed</option>
                                        </select> --}}

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="apassword">M/day</label>
                                        <input type="text" class="form-control" id="apassword" name="apassword" placeholder="" disabled/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="arfid">Remark</label>
                                        <input type="text" class="form-control" id="remark" name="arfid" placeholder="" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- </form> --}}
                </div>
                <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Back</button>
                        {{-- <button class="btn btn-primary submitaddadmin " id= submitaddadmin type="button" value="" onclick="event.preventDefault();document.getElementById('create').submit();" disabled> Submit</button> --}}
                </div>
            </div>
        </div>
    </div>
</form>


@endforeach
