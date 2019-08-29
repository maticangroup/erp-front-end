<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Deal View</h4>
        <div class="float-right ml-auto">
            <a class="icon" href="javascript:void(0)"></a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#edit-modal"
               class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Update</a>
        </div>
        <div class="float-right ml-1">
            <a href="#" class="btn btn-primary btn-sm bg-red"><i
                        class="fas fa-trash mr-1"></i>Delete</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card ">
            <div class="card-body text-center pt-3 ">
                <a href="#">
                    <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro11.jpg">
                        <span class="avatar-status bg-red"></span>
                    </span>
                </a>
                <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Asal Moghadam</a></h5>
                <span>Responsible Person</span>
                <div >
                    <span class="badge badge-default">management</span>
                    <span class="badge badge-default">leader</span>
                </div>
                <div class="mt-4">
                    <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                    <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                    <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card ">
            <div class="card-body text-center pt-3 ">
                <a href="#">
                    <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro13.jpg">
                        <span class="avatar-status bg-red"></span>
                    </span>
                </a>
                <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Sara Nazparvar</a></h5>
                <span>Owner</span>
                <div >
                    <span class="badge badge-default">religious</span>
                    <span class="badge badge-default">energetic</span>
                    <span class="badge badge-default">joyful</span>
                </div>
                <div class="mt-4">
                    <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                    <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                    <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="dash-2">
                            <h3 class="text-primary">$2,828</h3>
                            <span>Deal Value</span>
                        </div>
                    </div>
                    <div class="col col-auto">
                        <span class="sparkline23" ></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="dash-2">
                            <h3 class="text-info">70%</h3>
                            <span>Probabilities</span>
                        </div>
                    </div>
                    <div class="col col-auto">
                        <span class="sparkline_bar1 " ></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header ">
                <h2 class="card-title font-weight-bold">Deal Info</h2>
            </div>
            <div class="card-body p-3">
                <div class="panel panel-primary">
                    <div class="tab-menu-heading p-3 ">
                        <div class="tabs-menu ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li><a href="#tab1" class="active font-weight-bold" data-toggle="tab">Info</a></li>
                                <li><a href="#tab2" class="font-weight-bold"  data-toggle="tab">Task</a></li>
                                <li><a href="#tab3" class="font-weight-bold"  data-toggle="tab">Meeting</a></li>
                                <li><a href="#tab4" class="font-weight-bold"  data-toggle="tab">Calls</a></li>
                                <li><a href="#tab5" class="font-weight-bold"  data-toggle="tab">Letters</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body tabs-menu-body ">
                        <div class="tab-content">
                            <div class="tab-pane active " id="tab1">
                            </div>
                            <div class="tab-pane " id="tab2">
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
                            </div>
                            <div class="tab-pane " id="tab3">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title mr-2">Meetings</div>
                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                                        data-target="#exampleModal3"><i class="fas fa-plus"></i></button>

                                                <div class="card-options d-none d-sm-block mr-1">
                                                    <a href="#" class="btn btn-outline-primary">Export <i
                                                                class="fas fa-file-export"></i></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive ">
                                                    <table id="example-2" class="table table-striped table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0 text-center">Title</th>
                                                            <th class="wd-15p border-bottom-0 text-center">Type</th>
                                                            <th class="wd-10p border-bottom-0 text-center">Date</th>
                                                            <th class="wd-25p border-bottom-0 text-center">From time</th>
                                                            <th class="wd-25p border-bottom-0 text-center">Duration Time</th>
                                                            <th class="wd-15p border-bottom-0 text-center">Meeting Leader</th>
                                                            <th class="wd-25p border-bottom-0 text-center">Place</th>
                                                            <th class="border-bottom-0 text-center">Status</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="text-center">
                                                            <td>Mr. Rezvanian's wedding</td>
                                                            <td>Client ordering advice</td>
                                                            <td>2/3/93</td>
                                                            <td>13:00</td>
                                                            <td>2 Hours</td>
                                                            <td>Mr. Azimi</td>
                                                            <td>Tehran, Enqelab Square</td>
                                                            <td>Not Planned</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/meeting-view"
                                                                   class="btn btn-dark btn-sm"><i class="si si-eye"></i>
                                                                    View</a>
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a data-toggle="modal" data-target="#exampleModal3-2"
                                                                   class="btn btn-primary btn-sm text-white"><i
                                                                            class="si si-pencil"></i> Update</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Mr. Ahmadi's Formality</td>
                                                            <td>Client ordering advice</td>
                                                            <td>6/4/97</td>
                                                            <td>15:00</td>
                                                            <td>1 Hours</td>
                                                            <td>Mr. Azimi</td>
                                                            <td>Tehran, Enqelab Square</td>
                                                            <td>Planned</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/meeting-view"
                                                                   class="btn btn-dark btn-sm"><i class="si si-eye"></i>
                                                                    View</a>
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a data-toggle="modal" data-target="#exampleModal3-2"
                                                                   class="btn btn-primary btn-sm text-white"><i
                                                                            class="si si-pencil"></i> Update</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Mr. Rezvanian's wedding</td>
                                                            <td>Client ordering advice</td>
                                                            <td>2/3/93</td>
                                                            <td>13:00</td>
                                                            <td>2 Hours</td>
                                                            <td>Mr. Azimi</td>
                                                            <td>Tehran, Enqelab Square</td>
                                                            <td>Not Planned</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/meeting-view"
                                                                   class="btn btn-dark btn-sm"><i class="si si-eye"></i>
                                                                    View</a>
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a data-toggle="modal" data-target="#exampleModal3-2"
                                                                   class="btn btn-primary btn-sm text-white"><i
                                                                            class="si si-pencil"></i> Update</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Mr. Ahmadi's Formality</td>
                                                            <td>Client ordering advice</td>
                                                            <td>6/4/97</td>
                                                            <td>15:00</td>
                                                            <td>1 Hours</td>
                                                            <td>Mr. Azimi</td>
                                                            <td>Tehran, Enqelab Square</td>
                                                            <td>Planned</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/meeting-view"
                                                                   class="btn btn-dark btn-sm"><i class="si si-eye"></i>
                                                                    View</a>
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a data-toggle="modal" data-target="#exampleModal3-2"
                                                                   class="btn btn-primary btn-sm text-white"><i
                                                                            class="si si-pencil"></i> Update</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Mr. Rezvanian's wedding</td>
                                                            <td>Client ordering advice</td>
                                                            <td>2/3/93</td>
                                                            <td>13:00</td>
                                                            <td>2 Hours</td>
                                                            <td>Mr. Azimi</td>
                                                            <td>Tehran, Enqelab Square</td>
                                                            <td>Not Planned</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/meeting-view"
                                                                   class="btn btn-dark btn-sm"><i class="si si-eye"></i>
                                                                    View</a>
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a data-toggle="modal" data-target="#exampleModal3-2"
                                                                   class="btn btn-primary btn-sm text-white"><i
                                                                            class="si si-pencil"></i> Update</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Mr. Ahmadi's Formality</td>
                                                            <td>Client ordering advice</td>
                                                            <td>6/4/97</td>
                                                            <td>15:00</td>
                                                            <td>1 Hours</td>
                                                            <td>Mr. Azimi</td>
                                                            <td>Tehran, Enqelab Square</td>
                                                            <td>Planned</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/meeting-view"
                                                                   class="btn btn-dark btn-sm"><i class="si si-eye"></i>
                                                                    View</a>
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a data-toggle="modal" data-target="#exampleModal3-2"
                                                                   class="btn btn-primary btn-sm text-white"><i
                                                                            class="si si-pencil"></i> Update</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Mr. Rezvanian's wedding</td>
                                                            <td>Client ordering advice</td>
                                                            <td>2/3/93</td>
                                                            <td>13:00</td>
                                                            <td>2 Hours</td>
                                                            <td>Mr. Azimi</td>
                                                            <td>Tehran, Enqelab Square</td>
                                                            <td>Not Planned</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/meeting-view"
                                                                   class="btn btn-dark btn-sm"><i class="si si-eye"></i>
                                                                    View</a>
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a data-toggle="modal" data-target="#exampleModal3-2"
                                                                   class="btn btn-primary btn-sm text-white"><i
                                                                            class="si si-pencil"></i> Update</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Mr. Ahmadi's Formality</td>
                                                            <td>Client ordering advice</td>
                                                            <td>6/4/97</td>
                                                            <td>15:00</td>
                                                            <td>1 Hours</td>
                                                            <td>Mr. Azimi</td>
                                                            <td>Tehran, Enqelab Square</td>
                                                            <td>Planned</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/meeting-view"
                                                                   class="btn btn-dark btn-sm"><i class="si si-eye"></i>
                                                                    View</a>
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a data-toggle="modal" data-target="#exampleModal3-2"
                                                                   class="btn btn-primary btn-sm text-white"><i
                                                                            class="si si-pencil"></i> Update</a>
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
                            </div>
                            <div class="tab-pane " id="tab4">
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
                                                            <th class="wd-25p border-bottom-0 text-center">Call Method</th>
                                                            <th class="wd-25p border-bottom-0 text-center">From</th>
                                                            <th class="wd-25p border-bottom-0 text-center">To</th>
                                                            <th class="wd-25p border-bottom-0 text-center">Date</th>
                                                            <th class="wd-25p border-bottom-0 text-center">Time</th>
                                                            <th class="wd-25p border-bottom-0 text-center">Result
                                                            </th>
                                                            <th class="wd-25p border-bottom-0 text-center">Status</th>
                                                            <th class="wd-25p border-bottom-0 text-center"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Mr. Rezvanian's Wedding</td>
                                                            <td class="text-center">Telephone</td>
                                                            <td class="text-center">Ghobad abbasi</td>
                                                            <td class="text-center">Samir Nasir</td>
                                                            <td class="text-center">12/3/97</td>
                                                            <td class="text-center">11:04</td>
                                                            <td class="text-center">Positive</td>
                                                            <td class="text-center">Done</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="javascript:void(0)" data-toggle="modal"
                                                                   data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mr. Rezvanian's Wedding</td>
                                                            <td class="text-center">Telephone</td>
                                                            <td class="text-center">Ghobad abbasi</td>
                                                            <td class="text-center">Samir Nasir</td>
                                                            <td class="text-center">12/3/97</td>
                                                            <td class="text-center">11:04</td>
                                                            <td class="text-center">-</td>
                                                            <td class="text-center">Waiting to be made</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="javascript:void(0)" data-toggle="modal"
                                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                            class="fas fa-dot-circle"></i>Action</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mr. Rezvanian's Wedding</td>
                                                            <td class="text-center">Telephone</td>
                                                            <td class="text-center">Ghobad abbasi</td>
                                                            <td class="text-center">Samir Nasir</td>
                                                            <td class="text-center">12/3/97</td>
                                                            <td class="text-center">11:04</td>
                                                            <td class="text-center">Positive</td>
                                                            <td class="text-center">Done</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="javascript:void(0)" data-toggle="modal"
                                                                   data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mr. Rezvanian's Wedding</td>
                                                            <td class="text-center">Telephone</td>
                                                            <td class="text-center">Ghobad abbasi</td>
                                                            <td class="text-center">Samir Nasir</td>
                                                            <td class="text-center">12/3/97</td>
                                                            <td class="text-center">11:04</td>
                                                            <td class="text-center">-</td>
                                                            <td class="text-center">Waiting to be made</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="javascript:void(0)" data-toggle="modal"
                                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                            class="fas fa-dot-circle"></i>Action</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mr. Rezvanian's Wedding</td>
                                                            <td class="text-center">Telephone</td>
                                                            <td class="text-center">Ghobad abbasi</td>
                                                            <td class="text-center">Samir Nasir</td>
                                                            <td class="text-center">12/3/97</td>
                                                            <td class="text-center">11:04</td>
                                                            <td class="text-center">Positive</td>
                                                            <td class="text-center">Done</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="javascript:void(0)" data-toggle="modal"
                                                                   data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mr. Rezvanian's Wedding</td>
                                                            <td class="text-center">Telephone</td>
                                                            <td class="text-center">Ghobad abbasi</td>
                                                            <td class="text-center">Samir Nasir</td>
                                                            <td class="text-center">12/3/97</td>
                                                            <td class="text-center">11:04</td>
                                                            <td class="text-center">-</td>
                                                            <td class="text-center">Waiting to be made</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="javascript:void(0)" data-toggle="modal"
                                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                            class="fas fa-dot-circle"></i>Action</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mr. Rezvanian's Wedding</td>
                                                            <td class="text-center">Telephone</td>
                                                            <td class="text-center">Ghobad abbasi</td>
                                                            <td class="text-center">Samir Nasir</td>
                                                            <td class="text-center">12/3/97</td>
                                                            <td class="text-center">11:04</td>
                                                            <td class="text-center">Positive</td>
                                                            <td class="text-center">Done</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="javascript:void(0)" data-toggle="modal"
                                                                   data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mr. Rezvanian's Wedding</td>
                                                            <td class="text-center">Telephone</td>
                                                            <td class="text-center">Ghobad abbasi</td>
                                                            <td class="text-center">Samir Nasir</td>
                                                            <td class="text-center">12/3/97</td>
                                                            <td class="text-center">11:04</td>
                                                            <td class="text-center">-</td>
                                                            <td class="text-center">Waiting to be made</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="javascript:void(0)" data-toggle="modal"
                                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                            class="fas fa-dot-circle"></i>Action</a>
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
                            </div>
                            <div class="tab-pane " id="tab5">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title mr-2">Letters</div>
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
                                                            <th class="wd-10p border-bottom-0 text-center">Send Date</th>
                                                            <th class="wd-15p border-bottom-0 text-center">From</th>
                                                            <th class="wd-20p border-bottom-0 text-center">To</th>
                                                            <th class="wd-25p border-bottom-0 text-center">Priority</th>
                                                            <th class="wd-25p border-bottom-0 text-center">Status</th>
                                                            <th class="wd-25p border-bottom-0 text-center">Tracking Status</th>
                                                            <th class="wd-25p border-bottom-0 text-center">Options</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Catering Request</td>
                                                            <td class="text-center">Instant</td>
                                                            <td class="text-center">12 February 2020</td>
                                                            <td class="text-center">Somaieh Gholami</td>
                                                            <td class="text-center">Kosar Naiemi</td>
                                                            <td class="text-center">A</td>
                                                            <td class="text-center"><span class="status-icon bg-warning"></span></td>
                                                            <td class="text-center">Seen</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/letter-view" class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tablet request</td>
                                                            <td class="text-center">Instant</td>
                                                            <td class="text-center">29 July 2020</td>
                                                            <td class="text-center">Omid Jahan</td>
                                                            <td class="text-center">Mahdi Alavi</td>
                                                            <td class="text-center">C</td>
                                                            <td class="text-center"><span class="status-icon bg-danger"></span></td>
                                                            <td class="text-center">Delivered</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/letter-view" class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>salary increase</td>
                                                            <td class="text-center">Normal</td>
                                                            <td class="text-center">08 February 2018</td>
                                                            <td class="text-center">Hafez Asadi</td>
                                                            <td class="text-center">Nasrin Maghami</td>
                                                            <td class="text-center">A</td>
                                                            <td class="text-center"><span class="status-icon bg-success"></span></td>
                                                            <td class="text-center">Answered</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/letter-view" class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Deposit Bonus</td>
                                                            <td class="text-center">Instant</td>
                                                            <td class="text-center">23 January 2015</td>
                                                            <td class="text-center">ُShahab Hoseini</td>
                                                            <td class="text-center">Shahla Arasteh</td>
                                                            <td class="text-center">B</td>
                                                            <td class="text-center"><span class="status-icon bg-warning"></span></td>
                                                            <td class="text-center">Seen</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/letter-view" class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>employee recruitment</td>
                                                            <td class="text-center">Normal</td>
                                                            <td class="text-center">12 June 2021</td>
                                                            <td class="text-center">Sami Yuosefi</td>
                                                            <td class="text-center">Nasir Bashir</td>
                                                            <td class="text-center">B</td>
                                                            <td class="text-center"><span class="status-icon bg-danger"></span></td>
                                                            <td class="text-center">Delivered</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascript:void(0)"></a>
                                                                <a href="/letter-view" class="btn btn-dark btn-sm"><i
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Progress Rate</h3>
            </div>
            <div class="card-body">
                <canvas id="sales-chart" class="h-300"></canvas>
            </div>
        </div>
    </div>
</div>


<!--modal-->
<div class="modal fade" id="exampleModal3-2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3">Edit Deal</h5>
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
                                            <li class=""><a href="#tab1-1" class="active font-weight-bold"
                                                            data-toggle="tab">Basic Info</a></li>
                                            <li><a href="#tab2-2" class="font-weight-bold"
                                                   data-toggle="tab"> company activity</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body  border-left-0 border-right-0 border-bottom-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active " id="tab1-1">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="form-label">Title :</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                               name="example-text-input"
                                                               placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="form-label">Branch</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <select class="form-control custom-select"
                                                                data-placeholder="">
                                                            <option> Tehran</option>
                                                            <option> Turkey</option>
                                                            <option> Tabriz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="form-label">Responsible :</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <select class="form-control custom-select" data-placeholder="">
                                                            <option> Ali Azimi</option>
                                                            <option> Hossein Azimi</option>
                                                            <option> Ehsan Rezvanian</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="form-label">Customer :</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <select class="form-control custom-select"
                                                                data-placeholder="">
                                                            <option> Customer</option>
                                                            <option> Company</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="form-label">Value :</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control"
                                                               name="example-text-input"
                                                               placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="ServiceCategory">Source :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control select2-show-search" id="ServiceCategory" data-placeholder="Choose one (with optgroup)">
                                                                    <option>Instagram</option>
                                                                    <option>Website</option>
                                                                    <option>Telegram</option>
                                                                    <option>E-mail</option>
                                                                    <option>Advertisement</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2-2">
                                            <div class="form-group clearfix mt-3">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <label class="control-label form-label font-weight-bold"
                                                               for="Inform">Company Activity:</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <select multiple="multiple" class="multi-select" id="Inform">
                                                            <option value="1">Photography</option>
                                                            <option value="2">Video</option>
                                                            <option value="3">Design & Editing</option>
                                                            <option value="4">Professional Printing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-lg-3">
                                                        <label class="form-label">Tag :</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <select class="form-control custom-select"
                                                                    data-placeholder="">
                                                                <option> Marriage ceremony</option>
                                                                <option> Wedding reception</option>
                                                                <option> Formality</option>
                                                                <option> Birthday</option>
                                                                <option> Funeral</option>
                                                                <option> Family party</option>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-check"></i>
                    Save Changes
                </button>
            </div>
        </div>
    </div>
</div>
