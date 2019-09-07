<!-- WYSIWYG Editor css -->
<link href="../assets/plugins/wysiwyag/richtext.min.css" rel="stylesheet"/>

<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Contract</h4>
        <div class="float-right ml-auto">
            <a class="icon" href="javascript:void(0)"></a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal3-2"
               class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Edit</a>
        </div>
        <div class="float-right ml-1">
            <a href="#" class="btn btn-primary btn-sm bg-red"><i
                        class="fas fa-trash mr-1"></i>Delete</a>
            <a href="#" class="btn btn-primary btn-sm bg-info"><i
                        class="fas fa-print mr-1"></i>Preview & Print</a>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-6 ">
        <div class="card">
            <div class="card-header">
                Basic info
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label">Contract Title</label>
                            <input type="text" class="form-control" name="example-text-input"
                                   placeholder="Name" value="This is a title">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">From Company</label>
                            <select type="text" class="form-control">
                                <option value="#">Choose</option>
                                <option value="#">Company</option>
                                <option value="#">Company</option>
                                <option value="#">Company</option>
                                <option value="#">Company</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">From Person</label>
                            <select type="text" class="form-control">
                                <option value="#">Person</option>
                                <option value="#">Person</option>
                                <option value="#">Person</option>
                                <option value="#">Person</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">To Company</label>
                            <select type="text" class="form-control">
                                <option value="#">Choose</option>
                                <option value="#">Company</option>
                                <option value="#">Company</option>
                                <option value="#">Company</option>
                                <option value="#">Company</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">To Person</label>
                            <select type="text" class="form-control">
                                <option value="#">Person</option>
                                <option value="#">Person</option>
                                <option value="#">Person</option>
                                <option value="#">Person</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Object of contract
            </div>
            <div class="card-body">
                <div class="panel panel-primary">
                    <ul class="list-group mt-5">
                        <li class="list-group-item">
                            Nam libero tempore, cum soluta
                            <a class="text-danger"
                               href="#">
                                <i class="fas fa-close"></i>
                            </a>
                        </li>
                        <li class="list-group-item">
                            Nam libero tempore, cum soluta
                            <a class="text-danger"
                               href="#">
                                <i class="fas fa-close"></i>
                            </a>
                        </li>
                        <li class="list-group-item">
                            Nam libero tempore, cum soluta
                            <a class="text-danger"
                               href="#">
                                <i class="fas fa-close"></i>
                            </a>
                        </li>
                        <li class="list-group-item">
                            Nam libero tempore, cum soluta
                            <a class="text-danger"
                               href="#">
                                <i class="fas fa-close"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="form-group mt-3">
                        <label class="form-label"></label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Note & Exception here">
                            <span class="input-group-append">
															<button class="btn btn-success"
                                                                    type="button">Add new object</button>
														</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Timing
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Start</label>
                            <input type="date" class="form-control" name="example-text-input"
                                   placeholder="Name" value="This is a title">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Deadline</label>
                            <input type="date" class="form-control" name="example-text-input"
                                   placeholder="Name" value="This is a title">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Working days</label>
                            <input type="number" class="form-control" name="example-text-input"
                                   placeholder="Days">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Financial</h3>
                <div class="card-options d-none d-sm-block">
                    <a href="#" class="btn btn-secondary btn-sm" data-target="#modal_save_as_template"
                       data-toggle="modal">View invoice</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">Total Price</label>
                            <input type="text" class="form-control" name="example-text-input"
                                   placeholder="e.g: 1,000,000">
                        </div>
                        <p>Unscheduled amount: <strong>2,500,000</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter table-hover">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">Step</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Method</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-success">
                                    <th scope="row">1</th>
                                    <td class="text-center">Joan Powell</td>
                                    <td class="text-center">12-12-12</td>
                                    <td class="text-center">Cache</td>
                                    <td class="text-center">$450,870</td>
                                    <td class="text-center">
                                        <a href="#" class="text-danger">
                                            <i class="fas fa-close"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="bg-danger">
                                    <th scope="row">2</th>
                                    <td class="text-center">Gavin Gibson</td>
                                    <td class="text-center">12-12-12</td>
                                    <td class="text-center">Cheque</td>
                                    <td class="text-center">$230,540</td>
                                    <td class="text-center">
                                        <a href="#" class="text-danger">
                                            <i class="fas fa-close"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="bg-yellow">
                                    <th scope="row">3</th>
                                    <td class="text-center">Julian Kerr</td>
                                    <td class="text-center">12-12-12</td>
                                    <td class="text-center">POS</td>
                                    <td class="text-center">$55,300</td>
                                    <td class="text-center">
                                        <a href="#" class="text-danger">
                                            <i class="fas fa-close"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="bg-yellow">
                                    <th scope="row">4</th>
                                    <td class="text-center">Cedric Kelly</td>
                                    <td class="text-center">12-12-12</td>
                                    <td class="text-center">Cheque</td>
                                    <td class="text-center">$234,100</td>
                                    <td class="text-center">
                                        <a href="#" class="text-danger">
                                            <i class="fas fa-close"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td></td>
                                    <td>


                                        <input type="text" class="form-control" name="example-text-input"
                                               placeholder="e.g: 1,000,000">

                                    </td>
                                    <td>

                                        <input type="text" class="form-control" name="example-text-input"
                                               placeholder="e.g: 1,000,000">

                                    </td>
                                    <td>

                                        <select type="text" class="form-control">
                                            <option value="">
                                                Payment method
                                            </option>
                                            <option value="">
                                                Payment method
                                            </option>
                                            <option value="">
                                                Payment method
                                            </option>
                                        </select>

                                    </td>
                                    <td>


                                        <input type="text" class="form-control" name="example-text-input"
                                               placeholder="e.g: 1,000,000">

                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-success">Add</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-6 ">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Basic info</h3>
                <div class="card-options d-none d-sm-block">
                    <a href="#" class="btn btn-secondary btn-sm" data-target="#modal_save_as_template"
                       data-toggle="modal">Edit</a>
                </div>
            </div>
            <div class="card-body">
                <div class="panel panel-primary">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum eligendi error fuga
                        ipsa minima nam quae repellat veniam voluptatum.
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Objects of contract</h3>
                <div class="card-options d-none d-sm-block">
                    <a href="#" class="btn btn-secondary btn-sm" data-target="#modal_save_as_template"
                       data-toggle="modal">Edit</a>
                </div>
            </div>
            <div class="card-body">
                <div class="panel panel-primary">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum eligendi error fuga
                        ipsa minima nam quae repellat veniam voluptatum.
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Timing</h3>
                <div class="card-options d-none d-sm-block">
                    <a href="#" class="btn btn-secondary btn-sm" data-target="#modal_save_as_template"
                       data-toggle="modal">Edit</a>
                </div>
            </div>
            <div class="card-body">
                <div class="panel panel-primary">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum eligendi error fuga
                        ipsa minima nam quae repellat veniam voluptatum.
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Financial</h3>
                <div class="card-options d-none d-sm-block">
                    <a href="#" class="btn btn-secondary btn-sm" data-target="#modal_save_as_template"
                       data-toggle="modal">Edit</a>
                </div>
            </div>
            <div class="card-body">
                <div class="panel panel-primary">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum eligendi error fuga
                        ipsa minima nam quae repellat veniam voluptatum.
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Article example</h3>
                <div class="card-options d-none d-sm-block">
                    <a href="#" class="btn btn-secondary btn-sm" data-target="#modal_save_as_template"
                       data-toggle="modal">Edit</a>
                    <a href="#" class="btn btn-primary btn-sm" data-target="#modal_save_as_template"
                       data-toggle="modal">Save as template</a>

                </div>
            </div>
            <div class="card-body">
                <div class="panel panel-primary">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum eligendi error fuga
                        ipsa minima nam quae repellat veniam voluptatum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eius eligendi, inventore
                        iusto modi nihil nobis placeat quisquam tempora temporibus? Aliquam cum doloribus error illo
                        inventore maxime obcaecati odio repellendus.
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Add new article
            </div>
            <div class="card-body">
                <div class="panel panel-primary">
                    <a href="#" class="btn btn-primary">Import template</a>
                    <a href="#" class="btn btn-secondary" data-toggle="modal"
                       data-target="#modal_add_new_article">New</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!--modal-->
<div class="modal fade" id="modal_save_as_template" tabindex="-1" role="dialog" aria-hidden="true">
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
                        <div class="card">
                            <div class="card-header">
                                Preview
                            </div>
                            <div class="card-body">
                                <div class="panel panel-primary">
                                    <h3>Article example</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum
                                        eligendi error fuga
                                        ipsa minima nam quae repellat veniam voluptatum.
                                    </p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!
                                        </li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!
                                        </li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!
                                        </li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!
                                        </li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sit!
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Save as</label>
                                    <input type="text" class="form-control" name="example-text-input"
                                           placeholder="Name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-check"></i>
                    Save template
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_add_new_article" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3">Edit / Add Article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="example-text-input"
                                           placeholder="Name" value="This is a title">
                                </div>
                                <label>
                                    <textarea class="content" name="example">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, quo?
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi fugiat incidunt ipsa itaque labore minima officiis sed vitae. Deserunt esse facilis natus quod voluptates? Atque consequatur consequuntur distinctio doloremque enim eos, in incidunt magni natus quidem, repellat rerum saepe veniam?
                                    </textarea>
                                </label>

                                <ul class="list-group mt-5">
                                    <li class="list-group-item">
                                        Nam libero tempore, cum soluta
                                        <a class="text-danger"
                                           href="#">
                                            <i class="fas fa-close"></i>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        Nam libero tempore, cum soluta
                                        <a class="text-danger"
                                           href="#">
                                            <i class="fas fa-close"></i>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        Nam libero tempore, cum soluta
                                        <a class="text-danger"
                                           href="#">
                                            <i class="fas fa-close"></i>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        Nam libero tempore, cum soluta
                                        <a class="text-danger"
                                           href="#">
                                            <i class="fas fa-close"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="form-group mt-3">
                                    <label class="form-label"></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Note & Exception here">
                                        <span class="input-group-append">
															<button class="btn btn-success"
                                                                    type="button">Add new Note</button>
														</span>
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
                    Edit or Save
                </button>
            </div>
        </div>
    </div>
</div>

<?php

$scripts = [
    '/assets/plugins/wysiwyag/jquery.richtext.js',
    '/assets/plugins/wysiwyag/richText1.js'
];

?>