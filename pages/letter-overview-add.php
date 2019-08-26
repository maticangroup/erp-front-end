<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Letter Overview</h4>
    </div>
</div>
<!--page header-->

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

<!-- Message Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3-1">Add Letter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="panel panel-primary">
                            <div class=" tab-menu-heading">
                                <div class="tabs-menu1 ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class=""><a href="#tab5" class="active font-weight-bold"
                                                        data-toggle="tab">New Letter</a></li>
                                        <li><a href="#tab6" class="font-weight-bold" data-toggle="tab">Ready
                                                To Use</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                    <div class="tab-pane active " id="tab5">
                                        <form autocomplete="off">
                                            <div class="card p-3  mb-1 ">
                                                <div class="form-group">
                                                    <div class="row mt-2">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="Project Title"
                                                                       class="form-control-label mr-1 font-weight-bold">Title: </label>
                                                                <input type="text" class="form-control"
                                                                       id="Project Title" step="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="type"
                                                                       class="form-control-label mr-1 font-weight-bold">Type:</label>
                                                                <input type="text" class="form-control "
                                                                       id="type">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="Priority"
                                                                       class="form-control-label mr-1 font-weight-bold">Priority:</label>
                                                                <select class="form-control"
                                                                        id="Priority">
                                                                    <option>A</option>
                                                                    <option>B</option>
                                                                    <option>C</option>
                                                                    <option>D</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="language"
                                                                       class="form-control-label mr-1 font-weight-bold">Language:</label>
                                                                <select class="form-control"
                                                                        id="language">
                                                                    <option>Persian</option>
                                                                    <option>English</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="from"
                                                                       class="form-control-label mr-1 font-weight-bold">From: </label>
                                                                <input type="text" class="form-control"
                                                                       id="from" step="0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="form-control-label mr-1 font-weight-bold">To:</label>
                                                                <div class="card-body p-0">
                                                                    <div class="panel panel-primary">
                                                                        <div class=" tab-menu-heading">
                                                                            <div class="tabs-menu1 ">
                                                                                <!-- Tabs -->
                                                                                <ul class="nav panel-tabs">
                                                                                    <li class=""><a
                                                                                                href="#tab1"
                                                                                                class="active text-dark"
                                                                                                data-toggle="tab">Employee</a>
                                                                                    </li>
                                                                                    <li><a href="#tab2"
                                                                                           data-toggle="tab"
                                                                                           class="text-dark">Operation
                                                                                            Team</a></li>
                                                                                    <li><a href="#tab3"
                                                                                           data-toggle="tab"
                                                                                           class="text-dark">Unit</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel-body tabs-menu-body">
                                                                            <div class="tab-content">
                                                                                <!--
                                                                                <div class="tab-pane active " id="tab1">
                                                                                    <div id="basic info" class="p-3 text-left">
                                                                                        <div class="media-list">
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-hashtag" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Title</h6><span class="d-block">Coordination Meeting</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-link" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Related To</h6><span class="d-block">Project</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-user-edit" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Requester</h6><span class="d-block">Nazanin Bayat</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-shield-alt" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Owner</h6><span class="d-block">Operational Team</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Execution Place</h6><span class="d-block">Majnon Reception Hall</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane " id="tab2">
                                                                                    <div id="task time" class="p-3 text-left">
                                                                                        <div class="media-list">
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="far fa-calendar" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Start Date</h6><span class="d-block">07 October 2019</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-clock" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Start Time</h6><span class="d-block">09:00 AM</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="far fa-calendar" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">End Date</h6><span class="d-block">07 October 2019</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-clock" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">End Time</h6><span class="d-block">10:45 AM</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="far fa-calendar-check" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Deadline Date</h6><span class="d-block">12 February 2020</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane " id="tab3">
                                                                                    <div id="descriptions" class="p-3 text-left">
                                                                                        <div class="media-list">
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-file-medical" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Descriptions</h6><span class="d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                                                    <li class=""><a
                                                                                                href="#tab1"
                                                                                                class="active text-dark"
                                                                                                data-toggle="tab">Project</a>
                                                                                    </li>
                                                                                    <li><a href="#tab2"
                                                                                           data-toggle="tab"
                                                                                           class="text-dark">Deal</a>
                                                                                    </li>
                                                                                    <li><a href="#tab3"
                                                                                           data-toggle="tab"
                                                                                           class="text-dark">Organization</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel-body tabs-menu-body">
                                                                            <div class="tab-content">
                                                                                <!--
                                                                                <div class="tab-pane active " id="tab1">
                                                                                    <div id="basic info" class="p-3 text-left">
                                                                                        <div class="media-list">
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-hashtag" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Title</h6><span class="d-block">Coordination Meeting</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-link" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Related To</h6><span class="d-block">Project</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-user-edit" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Requester</h6><span class="d-block">Nazanin Bayat</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-shield-alt" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Owner</h6><span class="d-block">Operational Team</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Execution Place</h6><span class="d-block">Majnon Reception Hall</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane " id="tab2">
                                                                                    <div id="task time" class="p-3 text-left">
                                                                                        <div class="media-list">
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="far fa-calendar" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Start Date</h6><span class="d-block">07 October 2019</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-clock" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Start Time</h6><span class="d-block">09:00 AM</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="far fa-calendar" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">End Date</h6><span class="d-block">07 October 2019</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-clock" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">End Time</h6><span class="d-block">10:45 AM</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="far fa-calendar-check" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Deadline Date</h6><span class="d-block">12 February 2020</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane " id="tab3">
                                                                                    <div id="descriptions" class="p-3 text-left">
                                                                                        <div class="media-list">
                                                                                            <div class="media mt-1 pb-2">
                                                                                                <div class="mediaicon">
                                                                                                    <i class="fas fa-file-medical" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <div class="media-body ml-5 mt-1">
                                                                                                    <h6 class="mediafont text-dark mb-1">Descriptions</h6><span class="d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row ">
                                                <div class="col-12">
                                                    <div class="card mb-0">
                                                        <div class="card-header">
                                                            <div class="card-title">Letter Text:</div>
                                                        </div>
                                                        <div class="card-body">
                                                            <textarea class="p-0" id="elm1"
                                                                      name="area">Hello!....</textarea>
                                                            <div class="form-group mt-5 p-0">
                                                                <div class="form-label ml-1 font-weight-bold">
                                                                    Attachment:
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file"
                                                                           class="custom-file-input"
                                                                           name="example-file-input-custom">
                                                                    <label class="custom-file-label ">Choose
                                                                        File</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-12">
                                                    <div class="card  mt-0 mb-0 ">
                                                        <div class="card-header">
                                                            <div class="card-title">Scheduling:<span
                                                                        class="font-weight-light text-lightgreen"> (Optional)</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="wd-200">
                                                                        <label for="Date"
                                                                               class="form-control-label mr-1 font-weight-bold">Date:</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <i class="far fa-calendar tx-16 lh-0 op-6"></i>
                                                                                </div>
                                                                            </div>
                                                                            <input class="form-control"
                                                                                   id="Date"
                                                                                   type="date">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="wd-200">
                                                                        <label for="time"
                                                                               class="form-control-label mr-1 font-weight-bold">Time:</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <i class="fas fa-clock  tx-16 lh-0 op-6"></i>
                                                                                </div>
                                                                            </div>
                                                                            <input class="form-control"
                                                                                   id="time"
                                                                                   type="time">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane " id="tab6">
                                        <!--
                                        .
                                        .
                                        tab2 content
                                        .
                                        .
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-check"></i> Submit
                </button>
            </div>
        </div>
    </div>
</div>
