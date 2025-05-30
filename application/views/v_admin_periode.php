<?php 
function tgl_indo($tanggal){
        $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
//        return $pecahkan[1] . '/' . $pecahkan[2] . '/' . $pecahkan[0];
    }
?>
<html lang="en">
    <!--begin::Head-->
    <head>
        <!-- Google Tag Manager -->
        <!--<script>(function(w, d, s, l, i){w[l] = w[l] || []; w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'}); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer'?'&amp;l=' + l:''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');</script>-->
        <!-- End Google Tag Manager -->
        <meta charset="utf-8" />
        <title>PPM-Apps FSM</title>
        <meta name="description" content="Updates and statistics" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <!--begin::Fonts-->
        <link href=<?php echo base_url() . "dist/assets/css/font.css" ?> rel="stylesheet" type="text/css" />
        <!--end::Fonts-->
        <!--begin::Page Vendors Styles(used by this page)-->
        <link href=<?php echo base_url() . "dist/assets/plugins/custom/datatables/datatables.bundle.css" ?> rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href=<?php echo base_url() . "dist/assets/plugins/global/plugins.bundle.css?v=7.2.8" ?> rel="stylesheet" type="text/css" />
        <link href=<?php echo base_url() . "dist/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.2.8" ?> rel="stylesheet" type="text/css" />
        <link href=<?php echo base_url() . "dist/assets/css/style.bundle.css?v=7.2.8" ?> rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <!--end::Layout Themes-->
        <link rel="shortcut icon" href=<?php echo base_url() . "images/favicon-undip.ico" ?> />
        <!-- Hotjar Tracking Code for keenthemes.com -->
        <!--<script>(function(h, o, t, j, a, r){ h.hj = h.hj || function(){(h.hj.q = h.hj.q || []).push(arguments)}; h._hjSettings = {hjid:1070954, hjsv:6}; a = o.getElementsByTagName('head')[0]; r = o.createElement('script'); r.async = 1; r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv; a.appendChild(r); })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');</script>-->
        <style>
            input[type="file"] {
                display: none;
            }
            .bigdrop {
                width: 800px !important;
            }
        </style>
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" style="background-image: url(<?php echo base_url() . 'dist/assets/media/bg/bg-10.jpg' ?>)" class="page-loading-enabled page-loading quick-panel-right demo-panel-right offcanvas-right header-static subheader-enabled aside-enabled aside-static page-loading">
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
            <a href="index.html">
                <img alt="Logo" src=<?php echo base_url() . "images/logo-fsm.png" ?> class="logo-default max-h-30px" />
            </a>
            <!--end::Logo-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                    <span></span>
                </button>
                <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                    <span></span>
                </button>
                <button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
                    <span class="svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
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
                    <?php include('v_header.php'); ?>
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Subheader-->
                        <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
                            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap mr-1">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Title-->
                                        <h2 class="text-white font-weight-bold my-2 mr-5">Pengaturan Pendaftaran</h2>
                                        <!--end::Title-->
                                        <!--begin::Breadcrumb-->
                                        <div class="d-flex align-items-center font-weight-bold my-2">
                                            <!--begin::Item-->
                                            <a href="<?php echo base_url() . "index.php"; ?>" class="opacity-75 hover-opacity-100">
                                                <i class="flaticon2-shelter text-white icon-1x"></i>
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                            <a href="<?php echo base_url() . "index.php/c_admin_periode"; ?>" class="text-white text-hover-white opacity-75 hover-opacity-100">Penjadwalan Periode</a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
<!--                                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                            <a href="#" class="text-white text-hover-white opacity-75 hover-opacity-100"></a>-->
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Breadcrumb-->
                                    </div>
                                    <!--end::Heading-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Toolbar-->
                                <?php include 'v_toolbar_breadcrumb.php'; ?>
                                <!--end::Toolbar-->
                            </div>
                        </div>
                        <!--end::Subheader-->

                        <!--begin::Entry-->
                        <div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <div class="container-fluid">
                                <div class="d-lg-flex flex-row-fluid">
                                    <?php include 'v_asidemenu.php'; ?>
                                    <div class="content-wrapper flex-row-fluid">
                                        <!--begin::Dashboard-->
                                        <!--begin::Row-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!--begin::Card-->
                                                <div class="card card-custom">
                                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                                        <div class="card-title">
                                                            <h3 class="card-label">Penjadwalan Periode Pendaftaran
                                                                <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                                                        </div>
                                                        <div class="card-toolbar">
                                                            <?php 
                                                            $status="off";
                                                            if($periode!=null){
                                                                date_default_timezone_set('Asia/Jakarta');
                                                                $now = time();
                                                                $date_start = $periode[0]->start." 00:00:00"; #could be (almost) any string date
                                                                $date_end = $periode[0]->end." 23:59:59"; #could be (almost) any string date
                                                                if (strtotime($date_end) < $now) { 
                                                                    $status="on";
                                                                } 
                                                            }?>
                                                           <!--begin::Button-->
                                                            <a href="javascript:;" class="btn btn-primary font-weight-bolder periodebaru <?php if($status=="off"){echo "disabled";} ?>" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Klik untuk menambahkan penjadwalan periode pendaftaran baru">
                                                                <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo2\dist/../src/media/svg/icons\Code\Plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                                    <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"/>
                                                                    </g>
                                                                    </svg><!--end::Svg Icon--></span>
                                                                Periode Baru</a>
                                                            <!--end::Button-->
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <!--begin: Datatable-->
                                                        <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                                        <!--<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">-->
                                                            <thead>
                                                                <tr>
                                                                    <th title="Field #1">No</th>  
                                                                    <th title="Field #2">Periode</th>
                                                                    <th title="Field #3">Mulai Pendaftaran</th>
                                                                    <th title="Field #4">Akhir Pendaftaran</th>
                                                                    <th title="Field #5">Skema</th>
                                                                    <th title="Field #4">Batas Akhir Unggah Laporan & SPJ</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if($periode != null){
                                                                        $i=1;
                                                                        foreach($periode as $data):
                                                                ?>
                                                                <tr>
                                                                    <td class="text-center" width="5%"><?php echo $i++; ?></td>    
                                                                    <td width="20%">
                                                                        <textarea id="<?php echo $data->idperiode; ?>" rows="2" class="form-control namaperiode"><?php echo $data->nama;?></textarea>
                                                                    </td>
                                                                    <td width="15%">
                                                                        <?php if($i==2){ ?>
                                                                        <input name="start_edit" type="text" class="form-control editstartdate" id="kt_datepicker_3" readonly="readonly" placeholder="Pilih Tanggal" required="" value="<?php echo tgl_indo($data->start); ?>"/>
                                                                        <?php }else{ echo tgl_indo($data->start); } ?>
                                                                    </td>
                                                                    <td width="15%">
                                                                        <?php if($i==2){ ?>
                                                                        <input name="end_edit" type="text" class="form-control editenddate" id="kt_datepicker_3" readonly="readonly" placeholder="Pilih Tanggal" required="" value="<?php echo tgl_indo($data->end); ?>"/>
                                                                        <?php }else{ echo tgl_indo($data->end); } ?>
                                                                    </td>
                                                                    <td class="text-center" width="25%" nowrap="nowrap">
                                                                        <?php if(($i==2) && ($skema != null)){
                                                                            foreach($skema as $row): ?>
                                                                                <div class="checkbox-inline" style="padding-bottom:5px">
                                                                                    <label class="checkbox checkbox-outline checkbox-success">
                                                                                    <input type="checkbox" id="<?php echo $row->idskema; ?>" name="idskema" value="<?php echo $row->idskema; ?>" class="cekskema" <?php if($row->status=="aktif"){ echo "checked='checked'";} ?>/>
                                                                                    <span></span><?php echo $row->namaskema; ?></label>
                                                                                </div>
                                                                        <?php endforeach; }else{ echo "<span class='text-muted'>Tidak ada aksi</span>"; } ?>
                                                                    </td>
                                                                    <td width="20%">
                                                                        <input name="end_edit_laporan" type="text" class="form-control editenddatelaporan-<?=$data->idperiode?>" id="kt_datepicker_3" readonly="readonly" placeholder="Pilih Tanggal" required="" value="<?php if($data->end_laporan!='0000-00-00'){echo tgl_indo($data->end_laporan);}else{echo "Belum diatur";}  ?>"/>
                                                                     </td>
                                                                </tr>
                                                                <?php endforeach; } ?>
                                                            </tbody>
                                                        </table>
                                                        <!--end: Datatable-->
                                                    </div>
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--end::Dashboard-->
                                        <!--begin::Modal Edit Last Periode-->
                                        <div id="ModalPeriode" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Periode Pengajuan Proposal</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                        
                                                    </div>
                                                    <form class="form-horizontal" method="post" id="formtambahperiode">
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Nama Periode</label>
                                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                                    <input name="nama" type="text" class="form-control" placeholder="Nama Perode" required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Mulai</label>
                                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                                    <input name="start" type="text" class="form-control" id="kt_datepicker_3" readonly="readonly" placeholder="Pilih Tanggal" required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Berakhir</label>
                                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                                    <input name="end" type="text" class="form-control" id="kt_datepicker_3" readonly="readonly" placeholder="Pilih Tanggal" required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="submit" value="Simpan" class="btn btn-primary mr-2" >
                                                                <!--<button type="button" class="btn btn-primary" data-dismiss="modal">Daftar</button>-->
                                                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#ddd;">Tutup</button>
                                                            </div>
                                                        </div>
                                                    </form>    
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Modal Edit Last Periode-->
                                        
                                    </div>
                                </div>
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Entry-->
                    </div>
                    <!--end::Content-->
                    <?php include 'v_footer.php'; ?>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->
        <?php include 'v_panel.php'; ?>
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop">
            <span class="svg-icon">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
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
        <script src=<?php echo base_url() . "dist/assets/plugins/global/plugins.bundle.js?v=7.2.8" ?>></script>
        <script src=<?php echo base_url() . "dist/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.2.8" ?>></script>
        <script src=<?php echo base_url() . "dist/assets/js/scripts.bundle.js?v=7.2.8" ?>></script>
        <!--end::Global Theme Bundle-->
        <!--begin::Page Vendors(used by this page)-->
        <script src=<?php echo base_url() . "dist/assets/plugins/custom/datatables/datatables.bundle.js" ?>></script>
        <!--end::Page Vendors-->
        <!--begin::Page Scripts(used by this page)-->
        <script src=<?php echo base_url() . "dist/assets/js/pages/crud/forms/widgets/select2.js" ?>></script>
        <script src=<?php echo base_url() . "dist/assets/js/pages/crud/file-upload/dropzonejs.js" ?>></script>
        <script src=<?php // echo base_url() . "dist/assets/js/pages/crud/ktdatatable/base/html-table-usulan.js" ?>></script>
        <script src=<?php // echo base_url() . "dist/assets/js/pages/crud/datatables/data-sources/html.js" ?>></script>
        <script src=<?php echo base_url() . "dist/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" ?>></script>
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
                                                    targets: 4,
                                                    title: 'Skema Penelitian/Pengabdian',
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
            
            $(document).ready(function(){
                $('.cekskema').on('click', function(event){
                    if(this.checked){
                        var fd = new FormData();
                        var idskema = this.value;
                        fd.append('idskema',idskema);
                        $.ajax({
                            url: '<?php echo base_url('index.php/c_admin_periode/checkskema') ?>',
                            type: 'post',
                            data: fd,
                            contentType: false,
                            processData: false,
                            success: function(response){
//                                if(response != 0){
//                                    swal.fire({title: "Berhasil", text: "Skema baru berhasil disimpan.", icon: "success",buttonsStyling:true, confirmButtonText: "OK"},
//                                        ).then(function() {
//                                            location.reload();
//                                    });    
//                                }else{
//                                    swal.fire({title: "Oops...", text: "Skema baru gagal disimpan", icon: "error",buttonsStyling:true, confirmButtonText: "OK"},
//                                    );
//                                }
                            }
                        });
                        e.preventDefault(); 
                    }else{
                        var fd = new FormData();
                        var idskema = this.value;
                        fd.append('idskema',idskema);
                        $.ajax({
                            url: '<?php echo base_url('index.php/c_admin_periode/uncheckskema') ?>',
                            type: 'post',
                            data: fd,
                            contentType: false,
                            processData: false,
                            success: function(response){
                                
                            }
                        });
                        e.preventDefault(); 
                    }
                })
                $('.namaperiode').change(function(){
                    id = this.id;
                    value = this.value;

                    var fd = new FormData();
                    fd.append('idperiode',id);
                    fd.append('nama',value);

                    // AJAX request
                    $.ajax({
                        url: '<?php echo base_url('index.php/c_admin_periode/editnamaperiode') ?>',
                        type: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        success: function(response){
                        }
                    });
//                    e.preventDefault();    
                })
                $('.editstartdate').change(function(){
                    value = this.value;

                    var fd = new FormData();
                    fd.append('startdate',value);

                    // AJAX request
                    $.ajax({
                        url: '<?php echo base_url('index.php/c_admin_periode/editstartdate') ?>',
                        type: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        success: function(response){
                            if(response != 0){
//                                swal.fire({title: "Berhasil", text: "Perubahan tanggal mulai pendaftaran berhasil disimpan.", icon: "success",buttonsStyling:true, confirmButtonText: "OK"},
//                                    )
//                                    .then(function() {
                                        location.reload();
//                                    })
//                                ;
                            }else{
                                swal.fire({title: "Oops...", text: "Perubahan tanggal mulai pendaftaran gagal disimpan", icon: "error",buttonsStyling:true, confirmButtonText: "OK"},
                                        );
                            }
                        }
                    });
//                    e.preventDefault();    
                })
                $('.editenddate').change(function(){
                    value = this.value;

                    var fd = new FormData();
                    fd.append('enddate',value);

                    // AJAX request
                    $.ajax({
                        url: '<?php echo base_url('index.php/c_admin_periode/editenddate') ?>',
                        type: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        success: function(response){
                            if(response != 0){
//                                swal.fire({title: "Berhasil", text: "Perubahan tanggal mulai pendaftaran berhasil disimpan.", icon: "success",buttonsStyling:true, confirmButtonText: "OK"},
//                                    )
//                                    .then(function() {
                                        location.reload();
//                                    })
//                                ;
                            }else{
                                swal.fire({title: "Oops...", text: "Perubahan tanggal mulai pendaftaran gagal disimpan", icon: "error",buttonsStyling:true, confirmButtonText: "OK"},
                                        );
                            }
                        }
                    });
//                    e.preventDefault();    
                })
                <?php foreach($periode as $data): ?>
                $('.editenddatelaporan-<?=$data->idperiode?>').change(function(){
                    value = this.value;
                    
                    var fd = new FormData();
                    fd.append('enddate_laporan',value);
                    fd.append('idperiode',<?=$data->idperiode?>);

                    // AJAX request
                    $.ajax({
                        url: '<?php echo base_url('index.php/c_admin_periode/editenddate_laporan') ?>',
                        type: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        success: function(response){
                            if(response != 0){
//                                swal.fire({title: "Berhasil", text: "Perubahan tanggal mulai pendaftaran berhasil disimpan.", icon: "success",buttonsStyling:true, confirmButtonText: "OK"},
//                                    )
//                                    .then(function() {
                                        location.reload();
//                                    })
//                                ;
                            }else{
                                swal.fire({title: "Oops...", text: "Perubahan batas waktu unggah laporan gagal disimpan", icon: "error",buttonsStyling:true, confirmButtonText: "OK"},
                                        );
                            }
                        }
                    });
//                    e.preventDefault();    
                })
                <?php                     
                endforeach; ?>
                $(document).on("click", ".periodebaru", function () {
                    $('#ModalPeriode').modal('show');
                });
                $('#formtambahperiode').submit(function(e){
                    e.preventDefault(); 
                         $.ajax({
                             url:'<?php echo base_url();?>index.php/c_admin_periode/tambahperiode', //URL submit
                             type:"post", //method Submit
                             data:new FormData(this), //penggunaan FormData
                             processData:false,
                             contentType:false,
                             cache:false,
                             async:false,
                              success: function(response){
                                    if(response != 0){
                                        swal.fire({title: "Berhasil", text: "Penjadwalan periode baru berhasil disimpan.", icon: "success",buttonsStyling:true, confirmButtonText: "OK"},
                                            ).then(function() {
                                                location.reload();
                                        });    
                                    }else{
                                        swal.fire({title: "Oops...", text: "Penjadwalan periode baru gagal disimpan", icon: "error",buttonsStyling:true, confirmButtonText: "OK"},
                                        );
                                    }
                                }
                         });
                });
                
                
            }); 
        </script>
    </body>
    <!--end::Body-->
</html>
