<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Task View</h4>
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
<!--page header-->

<div class="row">
    <div class="col-xl-5 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <h2 class="card-title font-weight-bold">Title: Documentation process</h2>
            </div>
            <div class="card-body p-3">
                <div class="panel panel-primary">
                    <div class="tab-menu-heading p-3 ">
                        <div class="tabs-menu d-flex justify-content-center">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li><a href="#tab1" class="active font-weight-bold" data-toggle="tab">Timing</a></li>
                                <li><a href="#tab2" class="font-weight-bold"  data-toggle="tab">Description</a></li>
                                <li><a href="#tab3" class="font-weight-bold"  data-toggle="tab">Other Info</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body tabs-menu-body ">
                        <div class="tab-content">
                            <div class="tab-pane active " id="tab1">
                                <div class="media mt-1 pb-2">
                                    <div class="mediaicon">
                                        <i class="far fa-calendar" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5 mt-1">
                                        <h6 class="mediafont text-dark mb-1">From Date</h6>
                                        <span class="d-block">07 October 2019</span>
                                    </div>
                                </div>
                                <div class="media mt-1 pb-2">
                                    <div class="mediaicon">
                                        <i class="far fa-calendar-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5 mt-1">
                                        <h6 class="mediafont text-dark mb-1">Deadline Date</h6>
                                        <span class="d-block">12 February 2020</span>
                                    </div>
                                </div>
                                <div class="media mt-1 pb-2">
                                    <div class="mediaicon">
                                        <i class="far fa-clock" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5 mt-1">
                                        <h6 class="mediafont text-dark mb-1">From Time</h6>
                                        <span class="d-block">09:00 AM</span>
                                    </div>
                                </div>
                                <div class="media mt-1 pb-2">
                                    <div class="mediaicon">
                                        <i class="far fa-clock" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5 mt-1">
                                        <h6 class="mediafont text-dark mb-1">To Time</h6><span
                                                class="d-block">09:15 PM</span>
                                    </div>
                                </div>
                                <div class="media mt-1 pb-2">
                                    <div class="mediaicon">
                                        <i class="fas fa-clock" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5 mt-1">
                                        <h6 class="mediafont text-dark mb-1">Estimation Time</h6><span class="d-block">12h 15m</span>
                                    </div>
                                </div>
                                <div class="media mt-1 pb-2">
                                    <div class="mediaicon">
                                        <i class="fas fa-chart-line" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5 mt-1">
                                        <h6 class="mediafont text-dark mb-1">Progress</h6><div class="progress-bar bg-dark w-35 font-weight-bold">35%</div>
                                    </div>
                                </div>
                                <div class="mt-7 mb-5">
                                    <div id="timer-countup" class="p-4 bg-gradient-primary text-white br-7 text-center h4"></div>
                                    <div class="text-center">
                                        <button class=" btn-outline-dark btn-sm font-weight-bold w-25">Start</button>
                                        <button class=" btn-outline-dark btn-sm font-weight-bold w-25">Paused</button>
                                        <button class="btn-outline-dark btn-sm font-weight-bold w-25">Finished</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="tab2">
                                <blockquote class="blockquote mb-0 card-body">
                                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Praesent semper
                                        feugiat nibh sed. Neque aliquam vestibulum morbi blandit. Ipsum consequat nisl
                                        vel pretium lectus quam id leo in. </p>
                                    <footer class="blockquote-footer">
                                        <small class="text-muted font-weight-bold mb-3">Saghar Nikpoor <cite title="Source Title">public relations expert</cite></small>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="tab-pane " id="tab3">
                                <div class="media mt-1 pb-2">
                                    <div class="mediaicon">
                                        <i class="fas fa-project-diagram" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5 mt-1">
                                        <h6 class="mediafont text-dark mb-1">Project</h6>
                                        <span class="d-block">FH 3400 </span>
                                    </div>
                                </div>
                                <div class="media mt-1 pb-2">
                                    <div class="mediaicon">
                                        <i class="fas fa-list" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5 mt-1">
                                        <h6 class="mediafont text-dark mb-1">Milestone</h6>
                                        <span class="d-block">ML 1600f622 </span>
                                    </div>
                                </div>
                                <div class="media mt-1 pb-2">
                                    <div class="mediaicon">
                                        <i class="fas fa-map-signs" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5 mt-1">
                                        <h6 class="mediafont text-dark mb-1">Address</h6><span class="d-block">Shariati street, Ladan Alley, Majnon Reception Hall</span>
                                    </div>
                                </div>
                                <div class="media mt-1 pb-2">
                                    <div class="mediaicon">
                                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body ml-5 mt-1">
                                        <h6 class="mediafont text-dark mb-1">Location</h6>
                                        <div class="map-header">
                                            <div class="map-header-layer" id="map2"></div>
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
    <div class="col-xl-7 col-lg-6 col-md-12">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card ">
                    <div class="card-body text-center pt-3 ">
                        <a href="#">
                    <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro9.jpg">
                        <span class="avatar-status bg-green"></span>
                    </span>
                        </a>
                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Abbas Ghaderi</a></h5>
                        <span>Requester</span>
                        <div >
                            <span class="badge badge-default">manager</span>
                            <span class="badge badge-default">supervisor</span>
                        </div>
                        <div class="mt-4">
                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card ">
                    <div class="card-body text-center pt-3 ">
                        <a href="#">
                    <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro14.jpg">
                        <span class="avatar-status bg-green"></span>
                    </span>
                        </a>
                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Ali Hatami</a></h5>
                        <span>Owner</span>
                        <div >
                            <span class="badge badge-default">Religious</span>
                            <span class="badge badge-default">sullen</span>
                        </div>
                        <div class="mt-4">
                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-xl-12 col-lg-12 col-md-12 p-0">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="calendar1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div id="equipment" class="card">
            <div class="card-body d-flex">
                <img src="../assets/images/svgs/png/058-logistic.png" alt="img" class="w-8 h-8">
                <div class="svg-icons float-right text-right ml-auto">
                    <h2>64</h2>
                    <button href="#" class=" btn-pill btn-outline-primary btn-sm font-weight-bold">Files</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div id="equipment" class="card">
            <div class="card-body d-flex">
                <img src="../assets/images/svgs/png/088-package.png" alt="img" class="w-8 h-8">
                <div class="svg-icons float-right text-right ml-auto">
                    <h2>203</h2>
                    <button href="#" class=" btn-pill btn-outline-primary btn-sm font-weight-bold">Equipment</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div id="Services" class="card">
            <div class="card-body d-flex">
                <img src="../assets/images/svgs/png/095-box-14.png" alt="img" class="w-8 h-8">
                <div class="svg-icons float-right text-right ml-auto">
                    <h2>8</h2>
                    <button href="#" class=" btn-pill btn-outline-primary btn-sm font-weight-bold">Services</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div id="calls section" class="col-xl-4 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title font-weight-bold">Calls</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th>From</th>
                            <th>To</th>
                            <th>Time</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Ehsan Rezvanian</td>
                            <td>Hossein Azimi</td>
                            <td>3:10</td>
                            <td><a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Ehsan Rezvanian</td>
                            <td>Hossein Azimi</td>
                            <td>3:10</td>
                            <td><a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ehsan Rezvanian</td>
                            <td>Hossein Azimi</td>
                            <td>3:10</td>
                            <td><a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Ehsan Rezvanian</td>
                            <td>Hossein Azimi</td>
                            <td>3:10</td>
                            <td><a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Ehsan Rezvanian</td>
                            <td>Hossein Azimi</td>
                            <td>3:10</td>
                            <td><a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="comments section" class="col-xl-8 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Comments</h3>
            </div>
            <div class="card-body">
                <div class="content vscroll mh-300">
                    <div class="media mt-0">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object brround"
                                     src="../assets/images/photos/media2.jpg" alt="media1">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Nasrin Maghami</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object brround"
                                             src="../assets/images/photos/media3.jpg" alt="media1">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Abolfazl Naseh</h4>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                    quae ab illo inventore veritatis et quasi architecto beatae vitae
                                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
                                    eos qui ratione voluptatem sequi nesciunt
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media  mb-2">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object brround"
                                     src="../assets/images/photos/media1.jpg" alt="topmedia">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Hashem Rafiei</h4>
                            <p>Et harum quidem rerum facilis est et expedita quo minus id quod maxime
                                placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                                repellendus.</p>
                        </div>
                    </div>
                    <div class="media  mb-2">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object brround"
                                     src="../assets/images/photos/media1.jpg" alt="topmedia">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Yasi Samimi</h4>
                            <p>Et harum quidem rerum facilis est et expedita quo minus id quod maxime
                                placea.</p>
                        </div>
                    </div>
                    <div class="media mb-2">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object brround"
                                     src="../assets/images/photos/media2.jpg" alt="media1">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Hasan Abbasi</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object brround"
                                             src="../assets/images/photos/media3.jpg" alt="media1">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mohamad Najafi</h4>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                    quae ab illo inventore veritatis et quasi architecto beatae vitae
                                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
                                    eos qui ratione voluptatem sequi nesciunt
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media  mb-2">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object brround"
                                     src="../assets/images/photos/media1.jpg" alt="topmedia">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Maani Rahnama</h4>
                            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                                tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                minus id quod maxime placeat facere possimus, omnis voluptas assumenda
                                est, omnis dolor repellendus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Modals-->
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


