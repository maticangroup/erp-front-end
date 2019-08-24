<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Call Overview</h4>
    </div>
</div>
<!--page header end-->

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title mr-2">Calls</div>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                        data-target="#add-modal"><i class="fas  fa-plus"></i></button>
                <div class="card-options d-none d-sm-block mr-1">
                    <a href="#" class="btn btn-outline-primary">Export <i
                                class="fas fa-file-export"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive ">
                    <table id="example-2" class="table table-striped table-bordered nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p border-bottom-0">Topic</th>
                            <th class="wd-15p border-bottom-0 text-center">Date</th>
                            <th class="wd-25p border-bottom-0 text-center">Time</th>
                            <th class="wd-25p border-bottom-0 text-center">Duration Time</th>
                            <th class="wd-25p border-bottom-0 text-center">From</th>
                            <th class="wd-25p border-bottom-0 text-center">To</th>
                            <th class="wd-25p border-bottom-0 text-center">Branch</th>
                            <th class="wd-25p border-bottom-0 text-center">Result Satisfaction Track
                            </th>
                            <th class="wd-25p border-bottom-0 text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Topic 1</td>
                            <td class="text-center">12 Septamber 2019</td>
                            <td class="text-center">01:20:36 PM</td>
                            <td class="text-center">11:04</td>
                            <td class="text-center">Ghobad abbasi</td>
                            <td class="text-center">Samir Nasir</td>
                            <td class="text-center">Shahrak Gharb</td>
                            <td class="text-center">Positive</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Topic 2</td>
                            <td class="text-center">02 May 2020</td>
                            <td class="text-center">10:20:42 AM</td>
                            <td class="text-center">02:04</td>
                            <td class="text-center">Maani Rahnama</td>
                            <td class="text-center">Soosan Fahim</td>
                            <td class="text-center">shapoor street</td>
                            <td class="text-center">Neutral</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Topic 3</td>
                            <td class="text-center">16 April 2019</td>
                            <td class="text-center">03:14:36 PM</td>
                            <td class="text-center">09:55</td>
                            <td class="text-center">Sadaf Khadem</td>
                            <td class="text-center">Shirin Salman</td>
                            <td class="text-center">Afrigha street</td>
                            <td class="text-center">Negative</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Topic 4</td>
                            <td class="text-center">12 April 2019</td>
                            <td class="text-center">09:20:36 AM</td>
                            <td class="text-center">07:23</td>
                            <td class="text-center">Amir Nojooki</td>
                            <td class="text-center">Naser Mohtasham</td>
                            <td class="text-center">Daneshgah street</td>
                            <td class="text-center">Neutral</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Topic 5</td>
                            <td class="text-center">05 May 2019</td>
                            <td class="text-center">10:43:31 AM</td>
                            <td class="text-center">00:29</td>
                            <td class="text-center">Zahra Sadegh</td>
                            <td class="text-center">Maryam Jalali</td>
                            <td class="text-center">Valiasr street</td>
                            <td class="text-center">Positive</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- table-wrapper -->
        </div>
        <!-- section-wrapper -->
    </div>
</div>

<!-- Message Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3-1">New Call</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="card p-3  mb-1 ">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Topic" class="form-control-label mr-1 font-weight-bold">Topic: </label>
                                    <input type="text" class="form-control" id="Topic" step="0">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bold">From: </label>
                                    <select class="form-control select2-show-search"
                                            data-placeholder="Choose one (with searchbox)">
                                        <optgroup>
                                            <option>Ali Mosalman</option>
                                            <option>Shahin molaie</option>
                                            <option>Nasim Mohasel</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bold">To: </label>
                                    <select class="form-control select2-show-search"
                                            data-placeholder="Choose one (with searchbox)">
                                        <optgroup>
                                            <option>Shahin molaie</option>
                                            <option>Ali Mosalman</option>
                                            <option>Nasim Mohasel</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3  mb-1 ">
                        <div class="row">
                            <div class="col-6">
                                <div class="wd-200">
                                    <label for="Start Date"
                                           class="form-control-label mr-1 font-weight-bold">Start
                                        Date:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="far fa-calendar tx-16 lh-0 op-6"></i>
                                            </div>
                                        </div>
                                        <input class="form-control" id="Start Date" type="date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="wd-200">
                                    <label for="Time" class="form-control-label mr-1 font-weight-bold">Time:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-clock tx-16 lh-0 op-6"></i>
                                            </div>
                                        </div>
                                        <input class="form-control" id="Time" type="time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-3">
                            <div class="col-6">
                                <div class="wd-200">
                                    <label for="Duration Time2"
                                           class="form-control-label mr-1 font-weight-bold">Duration
                                        Time:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-clock tx-16 lh-0 op-6"></i>
                                            </div>
                                        </div>
                                        <input class="form-control" id="Duration Time2" type="time">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3  mb-1 ">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-control-label mr-1 font-weight-bold">Related
                                        to:</label>
                                    <div class="card-body p-0">
                                        <div class="panel panel-primary">
                                            <div class=" tab-menu-heading">
                                                <div class="tabs-menu1 ">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs">
                                                        <li class=""><a href="#tab1"
                                                                        class="active text-dark"
                                                                        data-toggle="tab">Project</a>
                                                        </li>
                                                        <li><a href="#tab2" data-toggle="tab"
                                                               class="text-dark">Deal</a></li>
                                                        <li><a href="#tab3" data-toggle="tab"
                                                               class="text-dark">Organization</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body tabs-menu-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane active " id="tab1">
                                                        <div class="form-group ">
                                                            <select class="form-control select2-show-search "
                                                                    data-placeholder="Choose one">
                                                                <option value="p1">project 1</option>
                                                                <option value="p2">project 2</option>
                                                                <option value="p3">project 3</option>
                                                                <option value="p4">project 4</option>
                                                                <option value="p5">project 5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane " id="tab2">
                                                        <div class="form-group">
                                                            <select class="form-control select2-show-search"
                                                                    data-placeholder="Choose one (with searchbox)">
                                                                <option value="d1">Deal 1</option>
                                                                <option value="d2">Deal 2</option>
                                                                <option value="d3">Deal 3</option>
                                                                <option value="d4">Deal 4</option>
                                                                <option value="d5">Deal 5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane " id="tab3">
                                                        <div class="form-group">
                                                            <select class="form-control select2-show-search"
                                                                    data-placeholder="Choose one (with searchbox)">
                                                                <option value="s1">Section 1</option>
                                                                <option value="s2">Section 2</option>
                                                                <option value="s3">Section 3</option>
                                                                <option value="s4">Section 4</option>
                                                                <option value="s5">Section 5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bold"> Meeting:</label>
                                    <select class="form-control select2-show-search"
                                            data-placeholder="Choose one (with searchbox)">
                                        <optgroup>
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bold"> Milestone:</label>
                                    <select class="form-control select2-show-search"
                                            data-placeholder="Choose one (with searchbox)">
                                        <optgroup>
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label font-weight-bold"> Task:</label>
                                    <select class="form-control select2-show-search"
                                            data-placeholder="Choose one (with searchbox)">
                                        <optgroup>
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3  mb-1 ">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Type" class="form-control-label mr-1 font-weight-bold">Result
                                        Satisfaction Track :</label>
                                    <select class="form-control" id="Type">
                                        <option>Positive</option>
                                        <option>Neutral</option>
                                        <option>Negative</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label font-weight-bold">Description:</label>
                                    <textarea class="form-control" name="example-textarea-input"
                                              rows="6" placeholder="text here.."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3  mb-1 ">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="font-weight-bold">Inform</label>
                                    <select multiple="multiple" class="multi-select">
                                        <option value="1">Ali Javadi</option>
                                        <option value="2">Mohsen Salami</option>
                                        <option value="3">Amir Ghane</option>
                                        <option value="4">Sahar Salimi</option>
                                        <option value="5">Rima mahan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-check mr-2 text-white"></i>Save
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Save</a>
                                <a class="dropdown-item" href="javascript:void(0)">Save & Add Call</a>
                                <a class="dropdown-item" href="javascript:void(0)">Save & Add Task</a>
                                <a class="dropdown-item" href="javascript:void(0)">Save & Add Meeting</a>
                                <a class="dropdown-item" href="javascript:void(0)">Save & Add Deal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="view-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example-Modal3-2">Call View</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body table-responsive border-bottom-0 mb-5">
                                <table class="table card-table table-vcenter text-nowrap table-bordered">
                                    <thead class="border-top">
                                    <tr>
                                        <td colspan="3">
                                            <div class="border-bottom pb-2"><strong class="font-weight-bold">Date
                                                    :</strong> 25 December 2019 <br></div>
                                            <div class="border-bottom pb-2 pt-2"><strong
                                                        class="font-weight-bold">Time :</strong> 09:49:20 PM
                                            </div>
                                            <div class="pt-2"><strong class="font-weight-bold">Call ID
                                                    :</strong> CID 2008201903
                                            </div>
                                        </td>
                                        <td colspan="3" class="text-center font-weight-bold "><strong
                                                    class="font-weight-bold">Topic : </strong><br>Track equipment
                                            transfer
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th colspan="3" class="text-center font-weight-bold bg-indigo-lighter">
                                            <strong class="font-weight-bold">From</strong></th>
                                        <th colspan="3" class="text-center font-weight-bold bg-indigo-lighter">
                                            <strong class="font-weight-bold">To</strong></th>
                                    </tr>
                                    <tr>
                                        <td colspan="3" rowspan="4" class="text-center">
                                            <div><span class="avatar avatar-xxl brround cover-image m-4"
                                                       data-image-src="../assets/images/photos/exe1.jpg"></span>
                                            </div>
                                            <div class="font-weight-bold ">Simin Behbahani</div>
                                            <div><span class="font-weight-bold">Org Code :</span> EM 001233
                                            </div>
                                            <div><span class="font-weight-bold">Role : </span>TQM expert unit
                                            </div>
                                            <div class="mb-3"><span class="font-weight-bold">Branch :</span>
                                                pasdaran
                                            </div>
                                        </td>
                                        <td colspan="3" rowspan="4" class="text-center">
                                            <div><span class="avatar avatar-xxl brround cover-image m-4"
                                                       data-image-src="../assets/images/photos/exe4.jpg"></span>
                                            </div>
                                            <div class="font-weight-bold "> Ehsan Rezvanian</div>
                                            <div><span class="font-weight-bold">Org code :</span> EM 0010506
                                            </div>
                                            <div><span class="font-weight-bold">Role :</span> driver</div>
                                            <div class="mb-3"><span class="font-weight-bold">Inventory :</span>
                                                pasdaran
                                            </div>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body table-responsive border-top-0 mb-5">
                                <table class="table card-table table-vcenter text-nowrap table-bordered">
                                    <tbody>
                                    <tr>
                                        <th colspan="2" class="text-center bg-indigo-lighter font-weight-bold ">
                                            <strong class="font-weight-bold">Call Info</strong></th>
                                        <th colspan="4" class="text-center bg-indigo-lighter font-weight-bold ">
                                            <strong class="font-weight-bold">Description </strong></th>
                                    </tr>
                                    <tr>
                                        <th class="bg-indigo-lighter font-weight-bold ">Duration time</th>
                                        <td class="text-center">00:04:30</td>
                                        <td rowspan="6" class="pb-0">
                                            Lorem ipsum dolor sit amet, consectetur,<br>
                                            sed do eiusmod tempor incididunt ut labore<br>
                                            et dolore magna aliqua. Ut enim ad minim<br>
                                            veniam, quis nostrud exercitation ullamco<br>
                                            laboris nisi ut aliquip ex ea desta.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-indigo-lighter font-weight-bold ">Satisfaction Track</th>
                                        <td class="text-center">Positive</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-indigo-lighter font-weight-bold ">Related To</th>
                                        <td class="text-center">Project F 34500</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-indigo-lighter font-weight-bold ">Milestone</th>
                                        <td class="text-center">F 34500 design</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-indigo-lighter font-weight-bold ">Task</th>
                                        <td class="text-center">TK 1256</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-indigo-lighter font-weight-bold ">Meeting</th>
                                        <td class="text-center"> -</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-primary"><i
                                    class="fas fa-check"></i> Ok
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
