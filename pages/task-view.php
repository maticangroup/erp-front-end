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
    <div class="col-xl-4 col-lg-12 col-md-12">
        <div id="card1" class="card pb-5">
            <div class="flexbox align-items-center px-20 pt-20">
                <div class="dropdown">
                    <a aria-expanded="false" data-toggle="dropdown" href="#"><i
                                class="fas fa-ellipsis-h rotate-90 text-muted"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i>
                            Message</a> <a class="dropdown-item" href="#"><i
                                    class="fa fa-fw fa-phone"></i> Call</a>
                    </div>
                </div>
            </div>
            <div class="card-body text-center pt-1 ">
                <a href="#"><span class="avatar avatar-xxl brround cover-image m-2"
                                  data-image-src="../assets/images/users/male/20.jpg">
                            <span class="avatar-status bg-green"></span>
                        </span>
                </a>
                <h5 class="mt-2 mb-0"><a class="hover-primary" href="#">Requester</a></h5>
                <span>Nazanin Bayat</span>
                <div class="mt-3">
                    <span class="text-warning"><i class="fas fa-star"></i></span>
                    <span class="text-warning"><i class="fas fa-star"></i></span>
                    <span class="text-warning"><i class="fas fa-star"></i></span>
                    <span class="text-warning"><i class="fas fa-star"></i></span>
                    <span class="text-secondary"><i class="fas fa-star"></i></span>
                </div>
                <div class="mt-4">
                    <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                    <a href="#" class="btn btn-lime btn-sm"><i class="fas fa-phone"></i> Call</a>
                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-envelope"></i>
                        Massage</a>
                </div>
            </div>
        </div>
        <div id="card2" class="card pb-5">
            <div class="flexbox align-items-center px-20 pt-20">
                <div class="dropdown">
                    <a aria-expanded="false" data-toggle="dropdown" href="#"><i
                                class="fas fa-ellipsis-h rotate-90 text-muted"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i>
                            Message</a> <a class="dropdown-item" href="#"><i
                                    class="fa fa-fw fa-phone"></i> Call</a>
                    </div>
                </div>
            </div>
            <div class="card-body text-center pt-1 ">
                <a href="#">
                            <span class="avatar avatar-xxl brround cover-image m-2"
                                  data-image-src="../assets/images/users/male/20.jpg">
                        </span>
                </a>
                <h5 class="mt-2 mb-0"><a class="hover-primary" href="#">Owner</a></h5>
                <span>Operational Team One</span>
                <div class="mt-3">
                    <span class="text-warning"><i class="fas fa-star"></i></span>
                    <span class="text-warning"><i class="fas fa-star"></i></span>
                    <span class="text-warning"><i class="fas fa-star"></i></span>
                    <span class="text-warning"><i class="fas fa-star"></i></span>
                    <span class="text-secondary"><i class="fas fa-star"></i></span>
                </div>
                <div class="mt-4">
                    <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                    <a href="#" class="btn btn-lime btn-sm"><i class="fas fa-phone"></i> Call</a>
                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-envelope"></i>
                        Massage</a>
                </div>
            </div>
        </div>
    </div>
    <div id="Task Info" class="col-xl-8 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Task Info</h3>
            </div>
            <div class="card-body p-3">
                <div class="panel panel-primary">
                    <div class=" tab-menu-heading">
                        <div class="tabs-menu1 ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li class=""><a href="#tab5" class="active font-weight-bold" data-toggle="tab">Basic Info</a></li>
                                <li><a href="#tab6" class="font-weight-bold" data-toggle="tab">Task Times</a></li>
                                <li><a href="#tab7" class="font-weight-bold" data-toggle="tab">Descriptions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body tabs-menu-body">
                        <div class="tab-content">
                            <div class="tab-pane active " id="tab5">
                                <div id="basic info" class="p-3 text-left">
                                    <div class="media-list">
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-hashtag" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Title</h6><span
                                                        class="d-block">Coordination Meeting</span>
                                            </div>
                                        </div>
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-link" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Related To</h6>
                                                <span class="d-block">Project</span>
                                            </div>
                                        </div>
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-user-edit" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Requester</h6><span
                                                        class="d-block">Nazanin Bayat</span>
                                            </div>
                                        </div>
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-user" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Owner</h6><span
                                                        class="d-block">Operational Team</span>
                                            </div>
                                        </div>
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Execution
                                                    Place</h6><span class="d-block">Majnon Reception Hall</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="tab6">
                                <div id="task time" class="p-3 text-left">
                                    <div class="media-list">
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="far fa-calendar" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Start Date</h6>
                                                <span class="d-block">07 October 2019</span>
                                            </div>
                                        </div>
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="far fa-clock" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Start Time</h6>
                                                <span class="d-block">09:00 AM</span>
                                            </div>
                                        </div>
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="far fa-calendar" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">End Date</h6><span
                                                        class="d-block">07 October 2019</span>
                                            </div>
                                        </div>
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="far fa-clock" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">End Time</h6><span
                                                        class="d-block">10:45 AM</span>
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
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="tab7">
                                <div id="descriptions" class="p-3 text-left">
                                    <div class="media-list">
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-file-medical" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Descriptions</h6>
                                                <span class="d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
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

<div class="row">
    <div id="items" class="col-xl-4 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title font-weight-bold">Task Items</div>
            </div>
            <div class="card-body">
                <!-- content -->
                <div class="content vscroll mh-300">
                    <ul>
                        <li>
                            <div id="Files" class="card">
                                <div class="card-body text-center mr-1">
                                    <img src="../assets/images/svgs/png/058-logistic.png" alt="img"
                                         class="w-8 h-8 mb-4">
                                    <div class="svg-btn">
                                        <a class="btn btn-primary btn-pill" href="#">Files</a>
                                    </div>
                                    <h3 class="mt-4">41</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="equipment" class="card">
                                <div class="card-body text-center mr-1">
                                    <img src="../assets/images/svgs/png/088-package.png" alt="img"
                                         class="w-8 h-8 mb-4">
                                    <div class="svg-btn">
                                        <a class="btn btn-primary btn-pill" href="#">Equipment</a>
                                    </div>
                                    <h3 class="mt-4">71</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
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
                            <p>Et harum quidem rerum facilis est et expedita distinctio.</p>
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
</div>

<div class="row m-0">
    <div id="people" class="card col-12">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">Branch Employees</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="#">
                                            <span class="avatar avatar-xxl brround cover-image m-2"
                                                  data-image-src="../assets/images/users/male/20.jpg">
											<span class="avatar-status bg-red"></span>
										    </span>
                            </a>
                            <h4 class=" mb-1">Jalal Hemati</h4>
                            <p class="mb-1">Graphic designer</p>
                            <div class="mt-1 mb-4">
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="#">
                                            <span class="avatar avatar-xxl brround cover-image m-2"
                                                  data-image-src="../assets/images/users/male/20.jpg">
											<span class="avatar-status bg-red"></span>
										    </span>
                            </a>
                            <h4 class=" mb-1">Hamid Safinejad</h4>
                            <p class="mb-1">Cameraman</p>
                            <div class="mt-1 mb-4">
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="#">
                                            <span class="avatar avatar-xxl brround cover-image m-2"
                                                  data-image-src="../assets/images/users/male/20.jpg">
											<span class="avatar-status bg-green"></span>
										    </span>
                            </a>
                            <h4 class=" mb-1">Shamim Aghaie</h4>
                            <p class="mb-1">Photo Editor</p>
                            <div class="mt-1 mb-4">
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="#">
                                            <span class="avatar avatar-xxl brround cover-image m-2"
                                                  data-image-src="../assets/images/users/male/20.jpg">
											<span class="avatar-status bg-red"></span>
										    </span>
                            </a>
                            <h4 class=" mb-1">Hosein Shojaie</h4>
                            <p class="mb-1">Cameraman</p>
                            <div class="mt-1 mb-4">
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="#">
                                            <span class="avatar avatar-xxl brround cover-image m-2"
                                                  data-image-src="../assets/images/users/male/20.jpg">
											<span class="avatar-status bg-green"></span>
										    </span>
                            </a>
                            <h4 class=" mb-1">Saghar Kasiri</h4>
                            <p class="mb-1">Film Editor</p>
                            <div class="mt-1 mb-4">
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="#">
                                            <span class="avatar avatar-xxl brround cover-image m-2"
                                                  data-image-src="../assets/images/users/male/20.jpg">
											<span class="avatar-status bg-green"></span>
										    </span>
                            </a>
                            <h4 class=" mb-1">Baran Azimi</h4>
                            <p class="mb-1">Photo Editor</p>
                            <div class="mt-1 mb-4">
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="#">
                                            <span class="avatar avatar-xxl brround cover-image m-2"
                                                  data-image-src="../assets/images/users/male/20.jpg">
											<span class="avatar-status bg-red"></span>
										    </span>
                            </a>
                            <h4 class=" mb-1">Alireza Badran</h4>
                            <p class="mb-1">Quality Supervisor</p>
                            <div class="mt-1 mb-4">
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="#">
                                            <span class="avatar avatar-xxl brround cover-image m-2"
                                                  data-image-src="../assets/images/users/male/20.jpg">
											<span class="avatar-status bg-green"></span>
										    </span>
                            </a>
                            <h4 class=" mb-1">Sobhan Shafati</h4>
                            <p class="mb-1">Designer</p>
                            <div class="mt-1 mb-4">
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="#">
                                            <span class="avatar avatar-xxl brround cover-image m-2"
                                                  data-image-src="../assets/images/users/male/20.jpg">
											<span class="avatar-status bg-green"></span>
										    </span>
                            </a>
                            <h4 class=" mb-1">Asal Moghadam</h4>
                            <p class="mb-1">Designer</p>
                            <div class="mt-1 mb-4">
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="#">
                                            <span class="avatar avatar-xxl brround cover-image m-2"
                                                  data-image-src="../assets/images/users/male/20.jpg">
											<span class="avatar-status bg-green"></span>
										    </span>
                            </a>
                            <h4 class=" mb-1">Tina Soleimani</h4>
                            <p class="mb-1">Film Editor</p>
                            <div class="mt-1 mb-4">
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="#">
                                            <span class="avatar avatar-xxl brround cover-image m-2"
                                                  data-image-src="../assets/images/users/male/20.jpg">
											<span class="avatar-status bg-green"></span>
										    </span>
                            </a>
                            <h4 class=" mb-1">Hashem Safaie</h4>
                            <p class="mb-1">Photo Designer</p>
                            <div class="mt-1 mb-4">
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="#">
                                            <span class="avatar avatar-xxl brround cover-image m-2"
                                                  data-image-src="../assets/images/users/male/20.jpg">
											<span class="avatar-status bg-green"></span>
										    </span>
                            </a>
                            <h4 class=" mb-1">Sasan Saberi</h4>
                            <p class="mb-1">Quality Supervisor</p>
                            <div class="mt-1 mb-4">
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-warning"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                                <span class="text-secondary"><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>


            </div>
            <ul id="people pagination" class="pagination justify-content-center mb-5">
                <li class="page-item page-prev disabled">
                    <a class="page-link" href="#" tabindex="-1">Prev</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item page-next">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
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


