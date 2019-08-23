<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Inventory View</h4>
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
    <div class="col-xl-4 col-md-12 col-lg-12">
        <div id="card" class="card pb-5">
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
                <h5 class="mt-2 mb-0"><a class="hover-primary" href="#">Inventory Keeper</a></h5>
                <span>Abbas Amiri</span>
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
        <div id="inventory items" class="card">
            <div class="card-header">
                <div class="card-title font-weight-bold">Inventory Items</div>
            </div>
            <div class="card-body">
                <!-- content -->
                <div class="content vscroll mh-300">
                    <ul>
                        <li>
                            <div id="letters" class="card">
                                <div class="card-body text-center">
                                    <img src="../assets/images/svgs/png/019-clipboard-2.png" alt="img"
                                         class="w-8 h-8 mb-4">
                                    <div class="svg-btn">
                                        <a class="btn btn-primary btn-pill" href="#">Letters</a>
                                    </div>
                                    <h3 class="mt-4">114</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="Transfer Deed" class="card">
                                <div class="card-body text-center">
                                    <img src="../assets/images/svgs/png/085-bill-1.png" alt="img"
                                         class="w-8 h-8 mb-4">
                                    <div class="svg-btn">
                                        <a class="btn btn-primary btn-pill" href="#">Equipment Transfer
                                            Deed</a>
                                    </div>
                                    <h3 class="mt-4">106</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="Safety Requirements" class="card">
                                <div class="card-body text-center">
                                    <img src="../assets/images/svgs/png/110-secure-1.png" alt="img"
                                         class="w-8 h-8 mb-4">
                                    <div class="svg-btn">
                                        <a class="btn btn-primary btn-pill" href="#">Safety
                                            Requirements</a>
                                    </div>
                                    <h3 class="mt-4">39</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="Inventory Info" class="col-xl-8 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Inventory Info</h3>
            </div>
            <div class="card-body p-3">
                <div class="panel panel-primary">
                    <div class=" tab-menu-heading">
                        <div class="tabs-menu1 ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li class=""><a href="#tab5" class="active font-weight-bold"
                                                data-toggle="tab">Basic Info</a></li>
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
                                                <i class="fas fa-font" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Name</h6><span
                                                        class="d-block">Number Five</span>
                                            </div>
                                        </div>
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-map-signs" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Type</h6><span
                                                        class="d-block">Office Equipment</span>
                                            </div>
                                        </div>
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-code-branch" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Branch</h6><span
                                                        class="d-block">Saadi</span>
                                            </div>
                                        </div>
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-people-carry" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Inventory
                                                    Keeper</h6><span class="d-block">Abbas Amiri</span>
                                            </div>
                                        </div>
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-boxes" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Stock</h6><span
                                                        class="d-block">
                                                                <div class="progress progress-md mb-3">
                                                                    <div class="progress-bar bg-success w-20 font-weight-bold">20%</div>
                                                                </div>
                                                            </span>
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

<div id="equipment table" class="row mt-5">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title mr-2 font-weight-bold">Equipment</div>
                <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal"
                        data-target="#add-modal"><i class="fas  fa-plus"></i></button>
                <div class="card-options d-none d-sm-block mr-1">
                    <a href="#" class="btn btn-outline-primary">Export <i
                                class="fas fa-file-export"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive ">
                    <table id="example-5" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="border-bottom-0">Name</th>
                            <th class="border-bottom-0 text-center">Label</th>
                            <th class="border-bottom-0 text-center">Zone</th>
                            <th class="border-bottom-0 text-center">Shelf</th>
                            <th class="border-bottom-0 text-center">Category</th>
                            <th class="border-bottom-0 text-center">Size(Cm)</th>
                            <th class="border-bottom-0 text-center">Weight(Kg)</th>
                            <th class="border-bottom-0 text-center">Status</th>
                            <th class="border-bottom-0 text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Camera</td>
                            <td class="text-center">12</td>
                            <td class="text-center">A</td>
                            <td class="text-center">03</td>
                            <td class="text-center">Digital</td>
                            <td class="text-center">65*85</td>
                            <td class="text-center">1.2</td>
                            <td class="text-center">Broken</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tv</td>
                            <td class="text-center">69</td>
                            <td class="text-center">D</td>
                            <td class="text-center">06</td>
                            <td class="text-center">Digital</td>
                            <td class="text-center">15*76</td>
                            <td class="text-center">9</td>
                            <td class="text-center">Available</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tablet</td>
                            <td class="text-center">119</td>
                            <td class="text-center">A</td>
                            <td class="text-center">01</td>
                            <td class="text-center">Digital</td>
                            <td class="text-center">94*56</td>
                            <td class="text-center">0.5</td>
                            <td class="text-center">In use</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Video camera</td>
                            <td class="text-center">51</td>
                            <td class="text-center">C</td>
                            <td class="text-center">13</td>
                            <td class="text-center">Digital</td>
                            <td class="text-center">40*12</td>
                            <td class="text-center">1.5</td>
                            <td class="text-center">Available</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Camera Stand</td>
                            <td class="text-center">88</td>
                            <td class="text-center">B</td>
                            <td class="text-center">09</td>
                            <td class="text-center">Digital</td>
                            <td class="text-center">195*56</td>
                            <td class="text-center">3</td>
                            <td class="text-center">In use</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
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

<div id="Shelves table" class="row mt-5">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title mr-2 font-weight-bold">Shelves</div>
                <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal"
                        data-target="#add-modal"><i class="fas  fa-plus"></i></button>
                <div class="card-options d-none d-sm-block mr-1">
                    <a href="#" class="btn btn-outline-primary">Export <i
                                class="fas fa-file-export"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive ">
                    <table id="example-3" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="border-bottom-0">Name</th>
                            <th class="border-bottom-0 text-center">Inventory</th>
                            <th class="border-bottom-0 text-center">Zone</th>
                            <th class="border-bottom-0 text-center">Length (cm)</th>
                            <th class="border-bottom-0 text-center">Width (cm)</th>
                            <th class="border-bottom-0 text-center">Height (cm)</th>
                            <th class="border-bottom-0 text-center">Capacity</th>
                            <th class="border-bottom-0 text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>01</td>
                            <td class="text-center">Number Five</td>
                            <td class="text-center">A</td>
                            <td class="text-center">300</td>
                            <td class="text-center">30</td>
                            <td class="text-center">50</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-warning w-35 font-weight-bold">35%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td class="text-center">Number Five</td>
                            <td class="text-center">A</td>
                            <td class="text-center">120</td>
                            <td class="text-center">30</td>
                            <td class="text-center">60</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-danger w-90 font-weight-bold ">90%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td class="text-center">Number Five</td>
                            <td class="text-center">A</td>
                            <td class="text-center">800</td>
                            <td class="text-center">50</td>
                            <td class="text-center">120</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-danger w-70 font-weight-bold">70%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td class="text-center">Number Five</td>
                            <td class="text-center">A</td>
                            <td class="text-center">500</td>
                            <td class="text-center">30</td>
                            <td class="text-center">100</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-warning w-50 font-weight-bold">50%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td class="text-center">Number Five</td>
                            <td class="text-center">A</td>
                            <td class="text-center">180</td>
                            <td class="text-center">80</td>
                            <td class="text-center">150</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-success w-20 font-weight-bold">20%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
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

<div id="Zones table" class="row mt-5">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title mr-2 font-weight-bold">Zones</div>
                <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal"
                        data-target="#add-modal"><i class="fas  fa-plus"></i></button>
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
                            <th class="border-bottom-0">Name</th>
                            <th class="border-bottom-0 text-center">Inventory</th>
                            <th class="border-bottom-0 text-center">Num of Shelves</th>
                            <th class="border-bottom-0 text-center">Capacity</th>
                            <th class="border-bottom-0 text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>A</td>
                            <td class="text-center">Number Five</td>
                            <td class="text-center">13</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-success w-30 font-weight-bold">30%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td class="text-center">Number Five</td>
                            <td class="text-center">42</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-success w-5 font-weight-bold">5%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td class="text-center">Number Five</td>
                            <td class="text-center">69</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-red w-20 font-weight-bold">85%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td class="text-center">Number Five</td>
                            <td class="text-center">32</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-warning w-60 font-weight-bold">60%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                            class="fas fa-pen"></i> Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>E</td>
                            <td class="text-center">Number Five</td>
                            <td class="text-center">113</td>
                            <td class="text-center">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-red w-70 font-weight-bold">70%</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="inventory-view.html" class="btn btn-dark btn-sm"><i
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


<!--Modals-->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3-2">New Inventory</h5>
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
                                    <label for="Brand Name2"
                                           class="form-control-label mr-1 font-weight-bold">Name: </label>
                                    <input type="text" class="form-control" id="Brand Name2" step="0">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="type2" class="form-control-label mr-1 font-weight-bold">Type:</label>
                                    <select class="form-control" id="type2">
                                        <option>Office Equipment</option>
                                        <option>Foodstuffs</option>
                                        <option>Paper & Cardboard</option>
                                        <option>Digital</option>
                                        <option>Operating Equipment</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Branch2"
                                           class="form-control-label mr-1 font-weight-bold">Branch:</label>
                                    <select class="form-control" id="Branch2">
                                        <option>Velenjak</option>
                                        <option>Saadi</option>
                                        <option>Valiasr</option>
                                        <option>Bazar</option>
                                        <option>Mokhaberat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Inventory Keeper2"
                                           class="form-control-label mr-1 font-weight-bold">Inventory
                                        Keeper:</label>
                                    <select class="form-control" id="Inventory Keeper2">
                                        <option>Abbas Amiri</option>
                                        <option>Simin Najm</option>
                                        <option>Ali Motlagh</option>
                                        <option>Soheil Arab</option>
                                        <option>Saman Monzam</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Capacity2"
                                           class="form-control-label mr-1 font-weight-bold">Capacity:</label>
                                    <input type="text" class="form-control " id="Capacity2"
                                           placeholder="In cubic meters">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Number Of Zone2"
                                           class="form-control-label mr-1 font-weight-bold">Number Of
                                        Zone:</label>
                                    <input type="text" class="form-control " id="Number Of Zone2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3  mb-1 ">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-control-label mr-1 font-weight-bold">Safety
                                        Requirement:</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-check"></i> Save</button>
            </div>
        </div>
    </div>
</div>
