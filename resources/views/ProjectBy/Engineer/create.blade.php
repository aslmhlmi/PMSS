    <!-- Add New Project By Engineer Modal-->
    <!-- Add New D Modal-->

<form  name=""  id="" action=" {{ route('engineer.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade" id="DModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> New Engnineer (Project By) </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="pl-lg-10">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name" >End User<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Name User" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="position">Position<span class="small text-danger">*</span></label>
                                        {{-- <input type="text" id="aname" class="form-control" name="aname" placeholder="Full Name" value=""> --}}
                                        <select id="position" class="form-control" name="position">
                                            <option value="" disabled selected>Choose Position</option>
                                                <option value="Account Manager">	Account Manager</option>
                                                <option value="Engineer">	        Engineer</option>
                                        </select>
                                    </div>
                                </div>
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
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="department">Department<span class="small text-danger">*</span></label>
                                        <input type="text" id="department" class="form-control" name="department" placeholder="Department" value="">
                                        <!-- <input type="tel" id="anotel" class="form-control" name="anotel" pattern="[0-9]{11}" placeholder="No Tel 0122345678" value=""> -->
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="type">Type<span class="small text-danger">*</span></label>
                                        <select id="type" class="form-control" name="type">
                                            <option value="#" disabled selected>Choose Product</option>
                                                <option value="Account Manager">	Account Manager</option>
                                                <option value="Engineer">	        Engineer</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="back" >Cancel</button>
                        <button class="btn btn-primary" type="submit" >Submit</button>
                        {{-- <button class="btn btn-primary" type="submit" value="" onclick="event.preventDefault();document.getElementById('create').button();" > Submit</button> --}}
                </div>
            </div>
        </div>
    </div>
</form>
