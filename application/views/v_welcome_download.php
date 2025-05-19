<html lang="en">
    <!--begin::Head-->
    <head>
        <!-- Google Tag Manager -->
        <!--<script>(function(w, d, s, l, i){w[l] = w[l] || []; w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'}); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer'?'&amp;l=' + l:''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');</script>-->
        <!-- End Google Tag Manager -->
        <meta charset="utf-8" />
        <title>PPM-Apps FSM</title>
        <meta name="description" content="Layout options builder" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <!--begin::Fonts-->
        <link href=<?php echo base_url() . "dist/assets/plugins/custom/datatables/datatables.bundle.css" ?> rel="stylesheet" type="text/css" />
        <!--end::Fonts-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href=<?php echo base_url() . "dist/assets/plugins/global/plugins.bundle.css?v=7.2.8"?> rel="stylesheet" type="text/css" />
        <link href=<?php echo base_url() . "dist/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.2.8"?> rel="stylesheet" type="text/css" />
        <link href=<?php echo base_url() . "dist/assets/css/style.bundle.css?v=7.2.8"?> rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <!--end::Layout Themes-->
        <link rel="shortcut icon" href=<?php echo base_url() . "images/favicon-undip.ico"?> />
        <!-- Hotjar Tracking Code for keenthemes.com -->
        <!--<script>(function(h, o, t, j, a, r){ h.hj = h.hj || function(){(h.hj.q = h.hj.q || []).push(arguments)}; h._hjSettings = {hjid:1070954, hjsv:6}; a = o.getElementsByTagName('head')[0]; r = o.createElement('script'); r.async = 1; r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv; a.appendChild(r); })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');</script>-->
    <style>
        .pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#6993FF;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:2;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:3;color:#fff;cursor:default;background-color:#6993FF;border-color:#6993FF}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}.pager{padding-left:0;margin:20px 0;text-align:center;list-style:none}.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:focus,.pager li>a:hover{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:focus,.pager .disabled>a:hover,.pager .disabled>span{color:#777;cursor:not-allowed;background-color:#fff}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:focus,.label-default[href]:hover{background-color:#5e5e5e}
    </style>
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" style="background-image: url(<?php echo base_url() .'dist/assets/media/bg/bg-10.jpg'?>)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
        <!-- Google Tag Manager (noscript) -->
<!--        <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>-->
        <!-- End Google Tag Manager (noscript) -->
        <?php include 'loader.php'; ?>
        <!--begin::Main-->
        <!--begin::Header Mobile-->
        <div id="kt_header_mobile" class="header-mobile">
            <!--begin::Logo-->
            <a href=<?php echo base_url() . "index.php/" ?>>
                <img alt="Logo" src='<?php echo base_url() . "images/logo-fsm.png"?>' class="logo-default max-h-30px" />
            </a>
            <!--end::Logo-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                    <span></span>
                </button>
                <button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
                    <span class="svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/General/User.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </button>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header Mobile-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <!--begin::Header-->
                    <?php include 'v_header.php'; ?>
                    <!--end::Header-->
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Subheader-->
                        <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
                            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap mr-1">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Title-->
                                        <h2 class="text-white font-weight-bold my-2 mr-5">Aplikasi PPM Fakultas Sains dan Matematika</h2>
                                        <h3 class="text-white font-weight-bold my-1 mr-5">Universitas Diponegoro</h3>
                                        <!--end::Title-->
                                        <!--begin::Breadcrumb-->
<!--                                        <div class="d-flex align-items-center font-weight-bold my-2">
                                            begin::Item
                                            <a href="#" class="opacity-75 hover-opacity-100">
                                                <i class="flaticon2-shelter text-white icon-1x"></i>
                                            </a>
                                            end::Item
                                            begin::Item
                                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Beranda</a>
                                            end::Item
                                        </div>-->
                                        <!--end::Breadcrumb-->
                                    </div>
                                    <!--end::Heading-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Toolbar-->
                                
                                <!--end::Toolbar-->
                            </div>
                        </div>
                        <!--end::Subheader-->
                        <!--begin::Entry-->
                        <div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <div class="container">
                                <!--begin::Hero Body-->
                                <?php include 'v_welcome_search.php'; ?>
                                <!--begin::Notice-->
<!--                                <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                                    <div class="alert-icon alert-icon-top">
                                        <span class="svg-icon svg-icon-3x svg-icon-primary mt-4">
                                            begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Tools/Tools.svg
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M15.9497475,3.80761184 L13.0246125,6.73274681 C12.2435639,7.51379539 12.2435639,8.78012535 13.0246125,9.56117394 L14.4388261,10.9753875 C15.2198746,11.7564361 16.4862046,11.7564361 17.2672532,10.9753875 L20.1923882,8.05025253 C20.7341101,10.0447871 20.2295941,12.2556873 18.674559,13.8107223 C16.8453326,15.6399488 14.1085592,16.0155296 11.8839934,14.9444337 L6.75735931,20.0710678 C5.97631073,20.8521164 4.70998077,20.8521164 3.92893219,20.0710678 C3.1478836,19.2900192 3.1478836,18.0236893 3.92893219,17.2426407 L9.05556629,12.1160066 C7.98447038,9.89144078 8.36005124,7.15466739 10.1892777,5.32544095 C11.7443127,3.77040588 13.9552129,3.26588995 15.9497475,3.80761184 Z" fill="#000000" />
                                            <path d="M16.6568542,5.92893219 L18.0710678,7.34314575 C18.4615921,7.73367004 18.4615921,8.36683502 18.0710678,8.75735931 L16.6913928,10.1370344 C16.3008685,10.5275587 15.6677035,10.5275587 15.2771792,10.1370344 L13.8629656,8.7228208 C13.4724413,8.33229651 13.4724413,7.69913153 13.8629656,7.30860724 L15.2426407,5.92893219 C15.633165,5.5384079 16.26633,5.5384079 16.6568542,5.92893219 Z" fill="#000000" opacity="0.3" />
                                            </g>
                                            </svg>
                                            end::Svg Icon
                                        </span>
                                    </div>
                                    <div class="alert-text">
                                        <p>The layout builder is to assist your set and configure your preferred project layout specifications and preview it in real time. The configured layout options will be saved until you change or reset them. To use the layout builder, choose the layout options and click the 
                                            <code>Preview</code>button to preview the changes and click the 
                                            <code>Export</code>button to download the HTML template with its includable partials of this demo. In the downloaded folder the partials(header, footer, aside, topbar, etc) will be placed seperated from the base layout to allow you to integrate base layout into your application</p>
                                        <p>
                                            <span class="label label-inline label-pill label-danger label-rounded mr-2">NOTE:</span>The downloaded version does not include the assets folder since the layout builder's main purpose is to help to generate the final HTML code without hassle.</p>
                                    </div>
                                </div>-->
                                <!--end::Notice-->
                                <!--begin::Card-->
                                <!--begin::Card-->
                                <?php // if(isset($_SESSION['menu'])){ 
//                                    if($_SESSION['menu']=='beranda'){
                                    ?>
                                <div  id="pengumuman" class="card card-custom gutter-b">
                                    <div class="card-header card-header-left ribbon ribbon-clip ribbon-left">
                                            <div class="ribbon-target" style="top: 15px; height: 45px;">
                                                <span class="ribbon-inner bg-primary"></span><i class="fa fa-star text-white"></i>
                                            </div>
                                        <span class="card-title h2" style="padding-left:30px">
                                            Download Area
                                        </span>  
                                    </div>
                                    <div class="card-body">
                                        <!--begin: Datatable-->
                                        <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                        <!--<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">-->
                                            <thead>
                                                <tr>
                                                    <th title="Field #1">No</th>                                                                    
                                                    <th title="Field #2">Nama Dokumen</th>
                                                    <th title="Field #3">Download</th>
                                                    <th title="Field #4">Tanggal Unggah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($file != null){
                                                        $i=1;
                                                        foreach($file as $data):
                                                ?>
                                                <tr>
                                                    <td class="text-center" width="5%"><?php echo $i++; ?></td>                                                                    
                                                    <td>
                                                        <?php echo $data->namalampiran; ?>
                                                    </td>
                                                    <td class="text-center" width="10%">
                                                        <?php 
                                                        if($data->lampiran != ""){ ?>
                                                            <a href="<?php echo base_url().$data->lampiran; ?>" target="_blank" title="Klik untuk mengunduh dokumen" data-toggle="tooltip" >
                                                                <img alt="" class="max-h-55px" src="<?php echo base_url() . 'dist/assets/media/svg/files/pdf.svg'?>"/>
                                                            </a>
                                                        <?php }else{ ?>
                                                            <i class="fa la-file-pdf icon-4x" title="Dokumen tidak tersedia" data-toggle="tooltip" ></i>
                                                        <?php } ?>
                                                    </td>
                                                    <td width="10%"><?php echo $data->tglpos; ?></td>
                                                </tr>
                                                <?php endforeach; } ?>
                                            </tbody>
                                        </table>
                                        <!--end: Datatable-->
                                    </div>
                                </div>
                                <?php // }else if($_SESSION['menu']=='pencarian'){ ?>
                                
                                <?php // } }?>
                                <!--end::Card-->
                                <!--end::Card-->
                                <!--begin::Modal-->
<!--                                <div class="modal fade kt-modal-purchase" id="kt-modal-purchase" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">reCaptcha Verification</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form">
                                                    <div class="form-group">
                                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                                        <div class="g-recaptcha" data-sitekey="6Lf92jMUAAAAANk8wz68r73rA2uPGr4_e0gn96BL"></div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="submit-verify">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <!--end::Modal-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Entry-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Footer-->
                    <?php include 'v_footer.php'; ?>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop">
            <span class="svg-icon">
                <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24" />
                <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </div>
        <!--end::Scrolltop-->
        <script>var HOST_URL = "/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
        <!--end::Global Config-->
        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src=<?php echo base_url() . "dist/assets/plugins/global/plugins.bundle.js?v=7.2.8";?>></script>
        <script src=<?php echo base_url() . "dist/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.2.8";?>></script>
        <script src=<?php echo base_url() . "dist/assets/js/scripts.bundle.js?v=7.2.8";?>></script>
        <!--end::Global Theme Bundle-->
        <!--begin::Page Scripts(used by this page)-->
        <script src=<?php echo base_url() . "dist/assets/js/pages/widgets.js";?>></script>
        <script src=<?php echo base_url() . "dist/assets/plugins/custom/datatables/datatables.bundle.js" ?>></script>
        <!--end::Page Scripts-->
        <script type="text/javascript">
            var KTDatatablesDataSourceHtml = function() {

                    var initTable1 = function() {
                            var table = $('#kt_datatable');

                            // begin first table
                            table.DataTable({
                                    responsive: true,
                                    columnDefs: [
                                            {
                                                    targets: 2,
                                                    title: 'Download',
                                                    orderable: false,
                                            },
                                            
                                    ],
                            });

                    };

                    return {

                            //main function to initiate the module
                            init: function() {
                                    initTable1();
                            },

                    };

            }();

            jQuery(document).ready(function() {
                    KTDatatablesDataSourceHtml.init();
            });
        </script>
    </body>
    <!--end::Body-->
</html>