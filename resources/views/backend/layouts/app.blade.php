<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Homepage 2 | Obama - Responsive admin template.</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="{{ url('backend/css/bootstrap.min.css') }}" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="{{ url('backend/css/style.css') }}" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="{{ url('backend/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="{{ url('backend/plugins/switchery/switchery.min.css') }}" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="{{ url('backend/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
        <!--Bootstrap Table [ OPTIONAL ]-->
        <link href="{{ url('backend/plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
        <link href="{{ url('backend/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
       
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <link href="{{ url('backend/plugins/bootstrap-validator/bootstrapValidator.min.css') }}" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="{{ url('backend/css/demo/jquery-steps.min.css') }}" rel="stylesheet">
        <!--Summernote [ OPTIONAL ]-->
        <!-- <link href="{{ url('backend/plugins/summernote/summernote.min.css') }}" rel="stylesheet"> -->
        <!--Demo [ DEMONSTRATION ]-->
        <link href="{{ url('backend/css/demo/jasmine.css') }}" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <!-- <link href="{{ url('backend/plugins/pace/pace.min.css') }}" rel="stylesheet"> -->
        <!-- <script src="{{ url('backend/plugins/pace/pace.min.js') }}"></script> -->
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="effect mainnav-sm navbar-fixed mainnav-fixed">
            <!--NAVBAR-->
            <!--===================================================-->
            @include('backend.layouts.header')
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                    @yield('content')
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                @include('backend.layouts.sidebar')
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <!-- Visible when footer positions are fixed -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="show-fixed pull-right">
                    <ul class="footer-list list-inline">
                        <li>
                            <p class="text-sm">SEO Proggres</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </li>
                        <li>
                            <p class="text-sm">Online Tutorial</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                        </li>
                    </ul>
                </div>
                <!-- Visible when footer positions are static -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <p class="pad-lft">&#0169; 2015 Your Company</p>
            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="{{ url('backend/js/jquery-2.1.1.min.js') }}"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="{{ url('backend/js/bootstrap.min.js') }}"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="{{ url('backend/plugins/fast-click/fastclick.min.js') }}"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="{{ url('backend/plugins/nanoscrollerjs/jquery.nanoscroller.min.js') }}"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="{{ url('backend/plugins/metismenu/metismenu.min.js') }}"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="{{ url('backend/js/scripts.js') }}"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="{{ url('backend/plugins/switchery/switchery.min.js') }}"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <!-- <script src="{{ url('backend/plugins/parsley/parsley.min.js') }}"></script> -->
        <!--Jquery Steps [ OPTIONAL ]-->
        <!-- <script src="{{ url('backend/plugins/jquery-steps/jquery-steps.min.js') }}"></script> -->
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="{{ url('backend/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
        <!--Bootstrap Wizard [ OPTIONAL ]-->
        <!-- <script src="{{ url('backend/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script> -->
        <!--Masked Input [ OPTIONAL ]-->
        <!-- <script src="{{ url('backend/plugins/masked-input/bootstrap-inputmask.min.js') }}"></script> -->
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="{{ url('backend/plugins/bootstrap-validator/bootstrapValidator.min.js') }}"></script>
        <!--Flot Chart [ OPTIONAL ]-->
        <script src="{{ url('backend/plugins/flot-charts/jquery.flot.min.js') }}"></script>
        <script src="{{ url('backend/plugins/flot-charts/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ url('backend/plugins/flot-charts/jquery.flot.spline.js') }}"></script>
        <script src="{{ url('backend/plugins/flot-charts/jquery.flot.pie.min.js') }}"></script>
        <script src="{{ url('backend/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ url('backend/plugins/moment-range/moment-range.js') }}"></script>
        <script src="{{ url('backend/plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
        <!--Flot Order Bars Chart [ OPTIONAL ]-->
        <script src="{{ url('backend/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
       
       <!--Summernote [ OPTIONAL ]-->
        <!-- <script src="{{ url('backend/plugins/summernote/summernote.min.js') }}"></script> -->
        
        <!--Form Wizard [ SAMPLE ]-->
        <!-- <script src="{{ url('backend/js/demo/wizard.js') }}"></script> -->
        <!--Form Wizard [ SAMPLE ]-->
        <!-- <script src="{{ url('backend/js/demo/dashboard-v2.js') }}"></script> -->
         <!--DataTables [ OPTIONAL ]-->
         <script src="{{ url('backend/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
        <script src="{{ url('backend/plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ url('backend/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{ url('backend/plugins/screenfull/screenfull.js') }}"></script>
        <!--DataTables Sample [ SAMPLE ]-->
        <script src="{{ url('backend/js/demo/tables-datatables.js') }}"></script>

        @yield('jsCode')
      
    </body>
</html>