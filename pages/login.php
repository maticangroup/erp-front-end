<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="../assets/images/brand/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico"/>

    <!-- Title -->
    <title>Getren - Bootstrap4 Responsive Admin WebApp Dashboard Template</title>

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!--Font Awesome-->
    <link href="../assets/plugins/fontawesome-free/css/all.css" rel="stylesheet">

    <!-- Dashboard Css -->
    <link href="../assets/css/dashboard.css" rel="stylesheet"/>

    <!-- Custom scroll bar css-->
    <link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">

    <!-- Sidemenu Css -->
    <link href="../assets/plugins/toggle-sidebar/css/sidemenu-light.css" rel="stylesheet">

    <!-- Data table css -->
    <link href="../assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../assets/plugins/Datatable/css/buttons.bootstrap4.min.css">
    <link href="../assets/plugins/datatable/responsive.bootstrap4.min.css" rel="stylesheet"/>

    <!-- Slect2 css -->
    <link href="../assets/plugins/select2/select2.min.css" rel="stylesheet"/>

    <!---Font icons-->
    <link href="../assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet"/>

    <link href="../assets/plugins/iconfonts/plugin.css" rel="stylesheet"/>

    <!-- Time picker Plugin -->
    <link href="../assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet"/>

    <!-- Date Picker Plugin -->
    <link href="../assets/plugins/date-picker/spectrum.css" rel="stylesheet"/>

    <!--mutipleselect css-->
    <link rel="stylesheet" href="../assets/plugins/multipleselect/multiple-select.css">

    <!--Chartist css-->
    <link rel="stylesheet" href="../assets/plugins/chartist/chartist.css">
    <link rel="stylesheet" href="../assets/plugins/chartist/chartist-plugin-tooltip.css">


    <!-- Notifications  css -->
    <link href="../assets/plugins/notify/css/jquery.growl.css" rel="stylesheet"/>

    <!-- Horizontal-menu Css -->
    <link href="../assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
    <link href="../assets/plugins/horizontal-menu/webslidemenu.css" rel="stylesheet">

    <!-- c3 Charts css -->
    <link href="../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

    <!-- Tabs Style -->
    <link href="../assets/plugins/tabs/style.css" rel="stylesheet"/>

    <!-- Calendar Plugin -->
    <link href="../assets/plugins/calendar/clndr.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar/stylesheet.css" rel="stylesheet"/>

    <!--Calendar Css -->
    <link href="../assets/plugins/calendar2/css/tui-time-picker.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar2/css/tui-date-picker.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar2/css/tui-calendar.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar2/css/default.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar2/css/icons.css" rel="stylesheet"/>

    <!-- timeline Plugin -->
    <link href="../assets/plugins/timeline/timeline.min.css" rel="stylesheet"/>


    <!-- Accordion Css -->
    <link href="../assets/plugins/accordion/accordion.css" rel="stylesheet"/>

    <!-- WYSIWYG Editor css -->
    <link href="../assets/plugins/wysiwyag/richtext.min.css" rel="stylesheet"/>

    <!--Rangeslider css-->
    <link href="../assets/plugins/rangeslider/ion.rangeSlider.css" rel="stylesheet"/>
    <link href="../assets/plugins/rangeslider/ion.rangeSlider.skinHTML5.css" rel="stylesheet">

    <!-- Sidebar css -->
    <link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">
</head>
<body class="app sidebar-mini rtl">

<!-- Global Loader-->
<div id="global-loader"><img src="../assets/images/loader.svg" alt="loader"></div>

<div class="page">
    <div class="custompage">
        <div class="custom-content  mt-0">
            <div class="row">
                <div class="col d-block mx-auto">
                    <div class="row">
                        <div class="col-12">
                            <img src="../assets/images/brand/logo.png" class="header-brand-img mb-2 mt-2 mt-lg-0 "
                                 alt="logo">
                            <h3 class="text-left">Login to your Account</h3>
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="text-left form-group">
                                            <label for="exampleInputEmail1">Phone number</label>
                                            <input type="tel" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Enter your phone number ...">
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-warning">New Password</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="text-left form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                   placeholder="Password">
                                        </div>
                                        <div class="text-left mt-2 mb-0">
                                            <button type="submit" class="btn btn-gray-dark"><a
                                                    href="dashboard.html"></a>Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dashboard js -->
<script src="../assets/js/vendors/jquery-3.2.1.min.js"></script>
<script src="../assets/js/vendors/jquery.sparkline.min.js"></script>
<script src="../assets/js/vendors/selectize.min.js"></script>
<script src="../assets/js/vendors/jquery.tablesorter.min.js"></script>
<script src="../assets/js/vendors/circle-progress.min.js"></script>
<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

<!--Bootstrap.min js-->
<script src="../assets/plugins/bootstrap/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom scroll bar js-->
<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--Peitychart js-->
<script src="../assets/plugins/peitychart/jquery.peity.min.js"></script>

<!--Counters js-->
<script src="../assets/plugins/counters/counterup.min.js"></script>
<script src="../assets/plugins/counters/waypoints.min.js"></script>

<!-- Custom js -->
<script src="../assets/js/custom.js"></script>
=======
<body class="login-img custom-bg" style="background-image: url(); ">
<!-- Global Loader-->
<div id="global-loader"><img src="../assets/images/loader.svg" alt="loader"></div>

<div class="page">
    <div class="custompage">
        <div class="custom-content  mt-0" style="opacity: 0.9;">
            <div class="row">
                <div class="col d-block mx-auto">
                    <div class="row">
                        <div class="col-12">
                            <img src="../assets/images/brand/logo.png" class="header-brand-img mb-2 mt-2 mt-lg-0 "
                                 alt="logo">
                            <h3 class="text-left">Login to your Account</h3>
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="text-left form-group">
                                            <label for="exampleInputEmail1">Phone number</label>
                                            <input type="tel" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Enter your phone number ...">
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-warning">New Password</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="text-left form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                   placeholder="Password">
                                        </div>
                                        <div class="text-left mt-2 mb-0">
                                            <button type="submit" class="btn btn-gray-dark" href="dashboard.html">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Dashboard js -->
<script src="../assets/js/vendors/jquery-3.2.1.min.js"></script>
<script src="../assets/js/vendors/jquery.sparkline.min.js"></script>
<script src="../assets/js/vendors/bootstrap.bundle.min.js"></script>
<script src="../assets/js/vendors/selectize.min.js"></script>
<script src="../assets/js/vendors/jquery.tablesorter.min.js"></script>
<script src="../assets/js/vendors/circle-progress.min.js"></script>
<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

<!--Bootstrap.min js-->
<script src="../assets/plugins/bootstrap/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Side menu js -->
<script src="../assets/plugins/toggle-sidebar/js/sidemenu.js"></script>

<!-- Custom scroll bar Js-->
<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- peitychart -->
<script src="../assets/plugins/peitychart/jquery.peity.min.js"></script>

<!---Tabs JS-->
<script src="../assets/plugins/tabs/jquery.multipurpose_tabcontent.js"></script>

<!---Tabs scripts-->
<script src="../assets/js/tabs.js"></script>

<!-- Input Mask Plugin -->
<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

<!-- Google Maps js-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAykAdIIsNMu0V2wyGOMQcguo8zKngWlyM"></script>
<script src="../assets/plugins/maps-google/jquery.googlemap.js"></script>
<script src="../assets/plugins/maps-google/map.js"></script>

<!-- Vector Map js-->
<script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../assets/plugins/jvectormap/gdp-data.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
<script src="../assets/js/jvectormap.js"></script>

<!-- Chart js -->
<script src="../assets/plugins/chart/chart.bundle.js"></script>
<script src="../assets/plugins/chart/utils.js"></script>
<script src="../assets/js/chart.js"></script>

<!-- ApexChart -->
<script src="../assets/js/apexcharts.js"></script>

<!-- Data tables -->
<script src="../assets/plugins/Datatable/js/jquery.dataTables.js"></script>
<script src="../assets/plugins/Datatable/js/dataTables.bootstrap4.js"></script>
<script src="../assets/plugins/Datatable/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/Datatable/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/Datatable/js/jszip.min.js"></script>
<script src="../assets/plugins/Datatable/js/pdfmake.min.js"></script>
<script src="../assets/plugins/Datatable/js/vfs_fonts.js"></script>
<script src="../assets/plugins/Datatable/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/Datatable/js/buttons.print.min.js"></script>
<script src="../assets/plugins/Datatable/js/buttons.colVis.min.js"></script>
<script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatable/responsive.bootstrap4.min.js"></script>

<!-- Data table js -->
<script src="../assets/js/datatable.js"></script>

<!--Horizontalmenu js-->
<script src="../assets/plugins/horizontal-menu/webslidemenu.js"></script>

<!-- Default calendar -->
<script src="../assets/plugins/calendar/underscore-min.js"></script>
<script src="../assets/plugins/calendar/moment.js"></script>
<script src="../assets/plugins/calendar/clndr.js"></script>
<script src="../assets/plugins/calendar/demo.js"></script>
<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>
<script src='../assets/plugins/calendar/calendar.min.js'></script>
<script src='../assets/plugins/calendar/defalutcal.js'></script>

<!-- Calendar js -->
<script src="../assets/plugins/calendar2/js/tui-code-snippet.min.js"></script>
<script src="../assets/plugins/calendar2/js/tui-time-picker.min.js"></script>
<script src="../assets/plugins/calendar2/js/tui-date-picker.min.js"></script>
<script src="../assets/plugins/calendar2/js/moment.min.js"></script>
<script src="../assets/plugins/calendar2/js/chance.min.js"></script>
<script src="../assets/plugins/calendar2/js/tui-calendar.js"></script>
<script src="../assets/plugins/calendar2/js/calendars.js"></script>
<script src="../assets/plugins/calendar2/js/schedules.js"></script>
<script src="../assets/plugins/calendar2/js/dooray.js"></script>
<script src="../assets/plugins/calendar2/js/default.js"></script>

<!--Datepicker Js-->
<script src="../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


<!--Time Counter -->
<script src="../assets/plugins/counters/jquery.missofis-countdown.js"></script>
<script src="../assets/plugins/counters/counter.js"></script>

<!--Counters -->
<script src="../assets/plugins/counters/counterup.min.js"></script>
<script src="../assets/plugins/counters/waypoints.min.js"></script>

<!-- popover js -->
<script src="../assets/js/popover.js"></script>

<!---Accordion Js-->
<script src="../assets/plugins/accordion/accordion.min.js"></script>
<script src="../assets/plugins/accordion/accor.js"></script>

<!-- Notifications js -->
<script src="../assets/plugins/notify/js/rainbow.js"></script>
<script src="../assets/plugins/notify/js/sample.js"></script>
<script src="../assets/plugins/notify/js/jquery.growl.js"></script>
<script src="../assets/plugins/notify/js/notify.js"></script>

<!-- Scripts -->
<script src="../assets/js/index2.js"></script>
<script src="../assets/js/index3.js"></script>

<!-- Notify js -->
<script src="../assets/js/notify.js"></script>

<!--Morris.js Charts Plugin -->
<script src="../assets/plugins/morris/morris.min.js"></script>
<script src="../assets/plugins/morris/raphael.min.js"></script>

<!-- Index Scripts -->
<script src="../assets/js/morris.js"></script>
<script src="../assets/js/flot.js"></script>


<!--Echart Plugin -->
<script src="../assets/plugins/echart/echart.js"></script>
<script src="../assets/js/echarts.js"></script>

<!-- Chartist.js -->
<script src="../assets/plugins/chartist/chartist.js"></script>
<script src="../assets/plugins/chartist/chart.chartist.js"></script>
<script src="../assets/plugins/chartist/chartist-plugin-tooltip.js"></script>


<!--Rang slider js-->
<script src="../assets/plugins/rangeslider/ion.rangeSlider.js"></script>
<script src="../assets/js/rangeslider.js"></script>

<!--Highcharts Plugin -->
<script src="../assets/plugins/highcharts/highcharts.js"></script>
<script src="../assets/plugins/highcharts/highcharts-3d.js"></script>
<script src="../assets/plugins/highcharts/exporting.js"></script>
<script src="../assets/plugins/highcharts/export-data.js"></script>
<script src="../assets/plugins/highcharts/histogram-bellcurve.js"></script>
<script src="../assets/js/highcharts.js"></script>

<!-- Sweet alert Plugin -->
<script src="../assets/plugins/sweet-alert/sweetalert.min.js"></script>
<script src="../assets/js/sweet-alert.js"></script>

<!-- Timepicker js -->
<script src="../assets/plugins/time-picker/jquery.timepicker.js"></script>
<script src="../assets/plugins/time-picker/toggles.min.js"></script>

<!--Accordion-Wizard-Form js-->
<script src="../assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js"></script>
<script src="../assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<script src="../assets/js/wizard.js"></script>


<!-- Datepicker js -->
<script src="../assets/plugins/date-picker/spectrum.js"></script>
<script src="../assets/plugins/date-picker/jquery-ui.js"></script>
<script src="../assets/plugins/input-mask/jquery.maskedinput.js"></script>

<!--MutipleSelect js-->
<script src="../assets/plugins/multipleselect/multiple-select.js"></script>
<script src="../assets/plugins/multipleselect/multi-select.js"></script>

<!-- Inline js -->
<script src="../assets/js/select2.js"></script>

<!--Rating js-->
<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

<!-- WYSIWYG Editor js -->
<script src="../assets/plugins/wysiwyag/jquery.richtext.js"></script>
<script src="../assets/plugins/wysiwyag/richText1.js"></script>

<!--ckeditor js-->
<script src="../assets/plugins/tinymce/tinymce.min.js"></script>

<!-- Richtext js -->
<script src="../assets/js/richtext.js"></script>
<!-- Timeline js -->
<script src="../assets/plugins/timeline/timeline.min.js"></script>
<script src="../assets/js/timeline.js"></script>

<!-- Sidebar js -->
<script src="../assets/plugins/sidebar/sidebar.js"></script>

<!-- Custom js -->
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/index3.js"></script>

</body>

</html>