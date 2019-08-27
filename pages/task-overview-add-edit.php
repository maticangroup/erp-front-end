<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Task Overview</h4>
    </div>
</div>
<!--page header end-->
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title mr-2">Tasks</div>
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
                            <th class="wd-15p border-bottom-0 text-left">Title</th>
                            <th class="wd-15p border-bottom-0 text-center">Type</th>
                            <th class="wd-10p border-bottom-0 text-center">Requester</th>
                            <th class="wd-15p border-bottom-0 text-center">Owner</th>
                            <th class="wd-20p border-bottom-0 text-center">From Date</th>
                            <th class="wd-25p border-bottom-0 text-center">Deadline</th>
                            <th class="wd-25p border-bottom-0 text-center">Estimation Time</th>
                            <th class="wd-25p border-bottom-0 text-center">Priority</th>
                            <th class="wd-25p border-bottom-0 text-center">Progress</th>
                            <th class="wd-25p border-bottom-0 text-center">Status</th>
                            <th class="wd-25p border-bottom-0 text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Sending attachments</td>
                            <td class="text-center">Solo</td>
                            <td class="text-center">Majid Salehi</td>
                            <td class="text-center">Nikoo Gharib</td>
                            <td class="text-center">12 December 2019</td>
                            <td class="text-center">04 February 2020</td>
                            <td class="text-center">8h 45m</td>
                            <td class="text-center">Medium</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-info w-0 font-weight-bold ">0%
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Not Planned</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="/task-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#edit-modal" class="btn btn-primary btn-sm"> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Training Meeting</td>
                            <td class="text-center">Meeting</td>
                            <td class="text-center">Javad Motala</td>
                            <td class="text-center">Yasaman Taghvaie</td>
                            <td class="text-center">12 December 2019</td>
                            <td class="text-center">04 February 2020</td>
                            <td class="text-center">4h</td>
                            <td class="text-center">Low</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-info w-5 font-weight-bold ">5%
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Accepted</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="/task-view" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Coordination Meeting</td>
                            <td class="text-center">Meeting</td>
                            <td class="text-center">Nezam Zaker</td>
                            <td class="text-center">Mahdi Ardalan</td>
                            <td class="text-center">12 December 2019</td>
                            <td class="text-center">04 February 2020</td>
                            <td class="text-center">16h 30m</td>
                            <td class="text-center">High</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-info w-45 font-weight-bold ">45%
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Rejected</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="/task-view" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Video Editing</td>
                            <td class="text-center">Edit</td>
                            <td class="text-center">Majid Salehi</td>
                            <td class="text-center">Shamsi Saberi</td>
                            <td class="text-center">12 December 2019</td>
                            <td class="text-center">04 February 2020</td>
                            <td class="text-center">7h 15m</td>
                            <td class="text-center">Medium</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-info w-100 font-weight-bold ">100%
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Finished</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="/task-view" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Birthday filming</td>
                            <td class="text-center">filming</td>
                            <td class="text-center">Alireza Dabir</td>
                            <td class="text-center">Motahareh Moalem</td>
                            <td class="text-center">12 December 2019</td>
                            <td class="text-center">04 February 2020</td>
                            <td class="text-center">10h</td>
                            <td class="text-center">High</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-info w-25 font-weight-bold ">25%
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Paused</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="/task-view" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
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
                <h5 class="modal-title" id="example-Modal3-1">New Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card mb-0">
                            <div class="panel panel-primary ">
                                <div class="tab-menu-heading border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#tab1" class="active font-weight-bold" data-toggle="tab">Basic Info</a></li>
                                            <li><a href="#tab2" class="font-weight-bold"  data-toggle="tab">Timing</a></li>
                                            <li><a href="#tab3" class="font-weight-bold"  data-toggle="tab">Execution Place</a></li>
                                            <li><a href="#tab4" class="font-weight-bold"  data-toggle="tab">Relation</a></li>
                                            <li><a href="#tab5" class="font-weight-bold"  data-toggle="tab">Requirements</a></li>
                                            <li><a href="#tab6" class="font-weight-bold"  data-toggle="tab">Notification</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body  border-left-0 border-right-0 border-bottom-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active " id="tab1">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="title">Title :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="title" name="title" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Priority">Priority :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="Priority">
                                                                    <option>High</option>
                                                                    <option>Medium</option>
                                                                    <option>Low</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="branch">Branch :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="branch">
                                                                    <option>Pasdaran</option>
                                                                    <option>Shariati</option>
                                                                    <option>Shoosh</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Owner">Owner :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <!-- Accordion begin -->
                                                                <ul class="demo-accordion accordionjs m-0" data-active-index="false">
                                                                    <!-- Section 1 -->
                                                                    <li>
                                                                        <div><h3 id="">Customer</h3></div>
                                                                        <div>
                                                                            <div class="form-group ">
                                                                                <select class="form-control select2-show-search " data-placeholder="Choose one">
                                                                                    <option value="p1">project 1</option>
                                                                                    <option value="p2">project 2</option>
                                                                                    <option value="p3">project 3</option>
                                                                                    <option value="p4">project 4</option>
                                                                                    <option value="p5">project 5</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 2 -->
                                                                    <li>
                                                                        <div><h3>Employee</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 3 -->
                                                                    <li>
                                                                        <div><h3>Branch</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 4 -->
                                                                    <li>
                                                                        <div><h3>Companies</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Descriptions">Descriptions :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="text here.." id="Descriptions"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="FromDate">From Date :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-calendar tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker" id="FromDate" placeholder="MM/DD/YYYY" type="date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="DeadlineDate">Deadline Date :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-calendar-check tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="DeadlineDate" name="DeadlineDate" type="date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="FromTime">From Time :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-clock tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="FromTime" name="FromTime" type="time">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="toTime">To Time :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-clock tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="toTime" name="toTime" type="time">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="EstimationTime">Estimation Time :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-clock tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="EstimationTime" name="EstimationTime" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Address">Address :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-map-signs tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker" id="Address" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Location">Location :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-map-marker-alt tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker" id="Location" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab4">
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="form-group clearfix">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="relation">Related To :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <!-- Accordion begin -->
                                                                <ul class="demo-accordion accordionjs m-0" data-active-index="false">
                                                                    <!-- Section 1 -->
                                                                    <li>
                                                                        <div><h3 id="">Deal</h3></div>
                                                                        <div>
                                                                            <div class="form-group ">
                                                                                <select class="form-control select2-show-search " id="relation" data-placeholder="Choose one">
                                                                                    <option value="p1">Deal 1</option>
                                                                                    <option value="p2">Deal 2</option>
                                                                                    <option value="p3">Deal 3</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 2 -->
                                                                    <li>
                                                                        <div><h3>Project</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 3 -->
                                                                    <li>
                                                                        <div><h3>Organization</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab5">
                                            <div class="row ">
                                                <div class="col-12">
                                                    <div class="form-group  clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" >Bloker :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control">
                                                                    <option></option>
                                                                    <option></option>
                                                                    <option></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" >Equipment Category :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control select2-show-search" data-placeholder="Choose one (with optgroup)">
                                                                    <option >Digital</option>
                                                                    <option >Electronic</option>
                                                                    <option >Foodstuffs</option>
                                                                    <option >Paper & Cardboard</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col-md-12 col-lg-12">
                                                            <div class="table-responsive ">
                                                                <table class="table card-table table-vcenter text-nowrap table-primary border" >
                                                                    <thead class="bg-primary text-white">
                                                                    <tr>
                                                                        <th class="text-white">ID</th>
                                                                        <th class="text-white">Name</th>
                                                                        <th class="text-white">Status</th>
                                                                        <th class="text-white"></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Heli shot NI370</td>
                                                                        <td>Intact</td>
                                                                        <td>
                                                                            <button href="#" class="btn-pill btn-outline-secondary btn-sm">Select</button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>Camera Nikon D3400</td>
                                                                        <td>Destroyed</td>
                                                                        <td>
                                                                            <button href="#" class="btn-pill btn-outline-secondary btn-sm">Select</button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Tripod stand F50</td>
                                                                        <td>Ready to use</td>
                                                                        <td>
                                                                            <button href="#" class="btn-pill btn-outline-secondary btn-sm">Select</button>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix mt-5">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" >File Attachment :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="example-file-input-custom">
                                                                    <label class="custom-file-label">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Inform">Inform :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select multiple="multiple" class="multi-select" id="Inform">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-check"></i> Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3-1">Edit Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card mb-0">
                            <div class="panel panel-primary ">
                                <div class="tab-menu-heading border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#tab1-1-1" class="active font-weight-bold" data-toggle="tab">Basic Info</a></li>
                                            <li><a href="#tab2-2-2" class="font-weight-bold"  data-toggle="tab">Timing</a></li>
                                            <li><a href="#tab3-3-3" class="font-weight-bold"  data-toggle="tab">Execution Place</a></li>
                                            <li><a href="#tab4-4-4" class="font-weight-bold"  data-toggle="tab">Relation</a></li>
                                            <li><a href="#tab5-5-5" class="font-weight-bold"  data-toggle="tab">Requirements</a></li>
                                            <li><a href="#tab6-6-6" class="font-weight-bold"  data-toggle="tab">Notification</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body  border-left-0 border-right-0 border-bottom-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active " id="tab1-1-1">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="title">Title :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="title" name="title" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Priority">Priority :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="Priority">
                                                                    <option>High</option>
                                                                    <option>Medium</option>
                                                                    <option>Low</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="branch">Branch :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="branch">
                                                                    <option>Pasdaran</option>
                                                                    <option>Shariati</option>
                                                                    <option>Shoosh</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Owner">Owner :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <!-- Accordion begin -->
                                                                <ul class="demo-accordion accordionjs m-0" data-active-index="false">
                                                                    <!-- Section 1 -->
                                                                    <li>
                                                                        <div><h3 id="">Customer</h3></div>
                                                                        <div>
                                                                            <div class="form-group ">
                                                                                <select class="form-control select2-show-search " data-placeholder="Choose one">
                                                                                    <option value="p1">project 1</option>
                                                                                    <option value="p2">project 2</option>
                                                                                    <option value="p3">project 3</option>
                                                                                    <option value="p4">project 4</option>
                                                                                    <option value="p5">project 5</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 2 -->
                                                                    <li>
                                                                        <div><h3>Employee</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 3 -->
                                                                    <li>
                                                                        <div><h3>Branch</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 4 -->
                                                                    <li>
                                                                        <div><h3>Companies</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Descriptions">Descriptions :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="text here.." id="Descriptions"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2-2-2">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="FromDate">From Date :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-calendar tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker" id="FromDate" placeholder="MM/DD/YYYY" type="date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="DeadlineDate">Deadline Date :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-calendar-check tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="DeadlineDate" name="DeadlineDate" type="date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="FromTime">From Time :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-clock tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="FromTime" name="FromTime" type="time">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="toTime">To Time :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-clock tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="toTime" name="toTime" type="time">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="EstimationTime">Estimation Time :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-clock tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="EstimationTime" name="EstimationTime" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3-3-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Address">Address :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-map-signs tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker" id="Address" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Location">Location :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-map-marker-alt tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker" id="Location" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab4-4-4">
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="form-group clearfix">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="relation">Related To :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <!-- Accordion begin -->
                                                                <ul class="demo-accordion accordionjs m-0" data-active-index="false">
                                                                    <!-- Section 1 -->
                                                                    <li>
                                                                        <div><h3 id="">Deal</h3></div>
                                                                        <div>
                                                                            <div class="form-group ">
                                                                                <select class="form-control select2-show-search " id="relation" data-placeholder="Choose one">
                                                                                    <option value="p1">Deal 1</option>
                                                                                    <option value="p2">Deal 2</option>
                                                                                    <option value="p3">Deal 3</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 2 -->
                                                                    <li>
                                                                        <div><h3>Project</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 3 -->
                                                                    <li>
                                                                        <div><h3>Organization</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab5-5-5">
                                            <div class="row ">
                                                <div class="col-12">
                                                    <div class="form-group  clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" >Bloker :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control">
                                                                    <option></option>
                                                                    <option></option>
                                                                    <option></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" >Equipment Category :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control select2-show-search" data-placeholder="Choose one (with optgroup)">
                                                                    <option >Digital</option>
                                                                    <option >Electronic</option>
                                                                    <option >Foodstuffs</option>
                                                                    <option >Paper & Cardboard</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col-md-12 col-lg-12">
                                                            <div class="table-responsive ">
                                                                <table class="table card-table table-vcenter text-nowrap table-primary border" >
                                                                    <thead class="bg-primary text-white">
                                                                    <tr>
                                                                        <th class="text-white">ID</th>
                                                                        <th class="text-white">Name</th>
                                                                        <th class="text-white">Status</th>
                                                                        <th class="text-white"></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Heli shot NI370</td>
                                                                        <td>Intact</td>
                                                                        <td>
                                                                            <button href="#" class="btn-pill btn-outline-secondary btn-sm">Select</button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>Camera Nikon D3400</td>
                                                                        <td>Destroyed</td>
                                                                        <td>
                                                                            <button href="#" class="btn-pill btn-outline-secondary btn-sm">Select</button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Tripod stand F50</td>
                                                                        <td>Ready to use</td>
                                                                        <td>
                                                                            <button href="#" class="btn-pill btn-outline-secondary btn-sm">Select</button>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix mt-5">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" >File Attachment :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="example-file-input-custom">
                                                                    <label class="custom-file-label">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab6-6-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Inform">Inform :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select multiple="multiple" class="multi-select" id="Inform">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-check"></i> Save</button>
            </div>
        </div>
    </div>
</div>
