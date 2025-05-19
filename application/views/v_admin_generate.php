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
                                        <h2 class="text-white font-weight-bold my-2 mr-5">Penelitian & Pengabdian</h2>
                                        <!--end::Title-->
                                        <!--begin::Breadcrumb-->
                                        <div class="d-flex align-items-center font-weight-bold my-2">
                                            <!--begin::Item-->
                                            <a href="#" class="opacity-75 hover-opacity-100">
                                                <i class="flaticon2-shelter text-white icon-1x"></i>
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                            <a href="<?php echo base_url() . "index.php/c_admin_generate"; ?>" class="text-white text-hover-white opacity-75 hover-opacity-100">Generate SK</a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
<!--                                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Latest Updated</a>-->
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
                                                            <h3 class="card-label">SK Penelitian dan Pengabdian
                                                                <span class="d-block text-muted pt-2 font-size-sm">Generate Surat Keputusan Dekan Fakultas Sains dan Matematika</span></h3>
                                                        </div>
                                                        <div class="card-toolbar">
                                                            <div class="dropdown dropdown-inline mr-2">
                                                                <!--begin::Button-->
                                                                <a href="javascript:;" class="btn btn-primary font-weight-bolder generate" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Buat SK Dekan Baru">
                                                                    <span class="svg-icon svg-icon-md svg-icon-default">
                                                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo2\dist/../src/media/svg/icons\Shopping\Barcode.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                            <path d="M13,5 L15,5 L15,20 L13,20 L13,5 Z M5,5 L5,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,6 C2,5.44771525 2.44771525,5 3,5 L5,5 Z M16,5 L18,5 L18,20 L16,20 L16,5 Z M20,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,19 C22,19.5522847 21.5522847,20 21,20 L20,20 L20,5 Z" fill="#000000"/>
                                                                            <polygon fill="#000000" opacity="0.3" points="9 5 9 20 7 20 7 5"/>
                                                                        </g>
                                                                        </svg><!--end::Svg Icon-->
                                                                    </span>
                                                                    Generate SK</a>
                                                                <!--end::Button-->
                                                            </div>
                                                            <div class="dropdown dropdown-inline mr-2">
                                                                <!--begin::Button-->
                                                                <a href="<?php echo base_url('index.php/c_admin_generate/template') ?>" class="btn btn-light-primary font-weight-bolder" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Unggah Template SK Baru">
                                                                    <span class="svg-icon svg-icon-md">
                                                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo2\dist/../src/media/svg/icons\General\Clipboard.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                                <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                                                                <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                                                                <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"/>
                                                                                <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"/>
                                                                            </g>
                                                                        </svg><!--end::Svg Icon--></span>
                                                                    Template SK</a>
                                                                <!--end::Button-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <!--begin: Datatable-->
                                                        <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                                        <!--<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">-->
                                                            <thead>
                                                                <tr>
                                                                    <th title="Field #1">No</th>
                                                                    <th title="Field #2">No. SK</th>
                                                                    <th title="Field #3">SK Tentang</th>
                                                                    <th title="Field #4">Ditetapkan</th>
                                                                    <th title="Field #5">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if($sk != null){
                                                                        $i=1;
                                                                        foreach($sk as $data):
                                                                ?>
                                                                <tr>
                                                                    <td class="text-center" width="5%"><?php echo $i++; ?></td>
                                                                    <td width="15%" class="text-justify"><?php echo $data->nosk; ?></td>
                                                                    <td width="50%" class="text-justify"><?php echo $data->judul; ?></td>
                                                                    <td width="15%" class="text-justify"><?php echo tgl_indo($data->tanggalpenetapan); ?></td>
                                                                    <td width="15%" align="center" nowrap="nowrap">
                                                                        <a href="<?php echo base_url() . $data->fileloc; ?>" title="Unduh SK Dekan" class="btn btn-success font-weight-bolder" data-toggle="tooltip">
                                                                            <i class="la la-download"></i> Unduh SK
                                                                        </a>
                                                                        <a href="javascript:;" class="btn btn-sm btn-warning btn-clean btn-icon item_edit" title="Edit SK" data-toggle="tooltip" id="idsk" data="<?php echo $data->idsk;?>"><i class="la la-edit"></i></a>
                                                                        <a href="javascript:;" class="btn btn-sm btn-danger btn-clean btn-icon item_hapus" title="Hapus SK" data-toggle="tooltip" id="idsk" data="<?php echo $data->idsk;?>"><i class="la la-trash"></i></a>
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
                                        <!--begin::Modal Tambah SK-->
                                        <div id="Modalgenerate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Generate SK Dekan</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                        
                                                    </div>
                                                    <!--<form class="form-horizontal" method="post" id="formbuatsk">-->
                                                    <form class="form-horizontal" method="post" action='<?php echo base_url();?>index.php/c_admin_generate/buatsk'>
                                                        <div class="modal-body">
                                                            <div data-scroll="true" data-height="600">
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12"><h5>Template SK</h5></label>
                                                            </div>                                                            
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">Periode</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <select name="idperiode" class="form-control" required="">
                                                                        <option value="">Semua Periode</option>
                                                                        <?php if($periode!=null){foreach($periode as $data): ?>
                                                                            <option value="<?php echo $data->idperiode; ?>"><?php echo $data->nama; ?></option>
                                                                        <?php endforeach; } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">Template SK</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <select name="idtemplate" class="form-control" required="">
                                                                        <option value="">Semua Template SK</option>
                                                                        <?php if($template!=null){foreach($template as $data): ?>
                                                                            <option value="<?php echo $data->idtemplate; ?>"><?php echo $data->namatemplate; ?></option>
                                                                        <?php endforeach; } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12"><h5>Informasi SK</h5></label>
                                                            </div> 
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">SK NO.</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <input name="nosk" type="text" class="form-control" placeholder="Contoh: 111/UN7.5.8.2/HK/2021" required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">SK Tentang</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <textarea name="judul" class="form-control" rows="3" placeholder="Contoh: ALOKASI DANA PENELITIAN DI LINGKUNGAN FAKULTAS SAINS DAN MATEMATIKA UNIVERSITAS DIPONEGORO" required=""></textarea>
                                                                </div>                                                                
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">Sumberdana</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <input name="sumberdana" type="text" class="form-control" placeholder="Contoh: DPA FSM Undip Tahun 2021" required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row"> 
                                                                <label class="col-form-label col-2 text-lg-right">Pemberlakuan SK dari</label>
                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <input name="tanggalmulai" type="text" class="form-control" id="kt_datepicker_3" readonly="readonly" placeholder="Pilih Tanggal" required=""/>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <label class="col-form-label col-2 text-lg-center"> sampai dengan </label>
                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <input name="tanggalakhir" type="text" class="form-control" id="kt_datepicker_3" readonly="readonly" placeholder="Pilih Tanggal" required=""/>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">Ditetapkan pada</label>
                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                    <input name="tanggalpenetapan" type="text" class="form-control" id="kt_datepicker_3" readonly="readonly" placeholder="Pilih Tanggal" required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">Nama Dekan</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <input name="namadekan" type="text" class="form-control" placeholder="Contoh: PROF. DR. WIDOWATI, S.SI., M.SI." required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">NIP Dekan</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <input name="nipdekan" type="text" class="form-control" placeholder="Contoh: 196902141994032002" required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="submit" value="Generate" class="btn btn-primary mr-2" >
                                                                <!--<button type="button" class="btn btn-primary" data-dismiss="modal">Daftar</button>-->
                                                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#ddd;">Tutup</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </form>    
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Modal Tambah SK-->
                                        <!--begin::Modal Edit SK-->
                                        <div id="Modaleditsk" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit SK Dekan</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                        
                                                    </div>
                                                    <form class="form-horizontal" method="post" id="formueditsk">
                                                        <!--<form class="form-horizontal" method="post" action='<?php echo base_url();?>index.php/c_admin_generate/editsk'>-->
                                                        <div class="modal-body">
                                                            <div data-scroll="true" data-height="600">
                                                            <input name="idsk_edit" class="form-control" type="hidden">
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12"><h5>Template SK</h5></label>
                                                            </div>                                                            
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">Periode</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <select name="idperiode_edit" class="form-control" required="">
                                                                        <option value="">Semua Periode</option>
                                                                        <?php if($periode!=null){foreach($periode as $data): ?>
                                                                            <option value="<?php echo $data->idperiode; ?>"><?php echo $data->nama; ?></option>
                                                                        <?php endforeach; } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">Template SK</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <select name="idtemplate_edit" class="form-control" required="">
                                                                        <option value="">Semua Template SK</option>
                                                                        <?php if($template!=null){foreach($template as $data): ?>
                                                                            <option value="<?php echo $data->idtemplate; ?>"><?php echo $data->namatemplate; ?></option>
                                                                        <?php endforeach; } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12"><h5>Informasi SK</h5></label>
                                                            </div> 
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">SK NO.</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <input name="nosk_edit" type="text" class="form-control" placeholder="Contoh: 111/UN7.5.8.2/HK/2021" required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">SK Tentang</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <textarea name="judul_edit" class="form-control" rows="3" placeholder="Contoh: ALOKASI DANA PENELITIAN DI LINGKUNGAN FAKULTAS SAINS DAN MATEMATIKA UNIVERSITAS DIPONEGORO" required=""></textarea>
                                                                </div>                                                                
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">Sumberdana</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <input name="sumberdana_edit" type="text" class="form-control" placeholder="Contoh: DPA FSM Undip Tahun 2021" required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row"> 
                                                                <label class="col-form-label col-2 text-lg-right">Pemberlakuan SK dari</label>
                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <input name="tanggalmulai_edit" type="text" class="form-control" id="kt_datepicker_3" readonly="readonly" placeholder="Pilih Tanggal" required=""/>
                                                                        <span class="form-text text-muted">Format: Bulan / Tanggal / Tahun</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <label class="col-form-label col-2 text-lg-center"> sampai dengan </label>
                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <input name="tanggalakhir_edit" type="text" class="form-control" id="kt_datepicker_3" readonly="readonly" placeholder="Pilih Tanggal" required=""/>
                                                                        <span class="form-text text-muted">Format: Bulan / Tanggal / Tahun</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">Ditetapkan pada</label>
                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                    <input name="tanggalpenetapan_edit" type="text" class="form-control" id="kt_datepicker_3" readonly="readonly" placeholder="Pilih Tanggal" required=""/>
                                                                    <span class="form-text text-muted">Format: Bulan / Tanggal / Tahun</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">Nama Dekan</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <input name="namadekan_edit" type="text" class="form-control" placeholder="Contoh: PROF. DR. WIDOWATI, S.SI., M.SI." required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-right col-lg-2 col-sm-12">NIP Dekan</label>
                                                                <div class="col-lg-9 col-md-12 col-sm-12">
                                                                    <input name="nipdekan_edit" type="text" class="form-control" placeholder="Contoh: 196902141994032002" required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="submit" value="Simpan" class="btn btn-primary mr-2" >
                                                                <!--<button type="button" class="btn btn-primary" data-dismiss="modal">Daftar</button>-->
                                                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#ddd;">Tutup</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </form>    
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Modal Edit SK-->
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
        <script src=<?php // echo base_url() . "dist/assets/js/pages/crud/datatables/data-sources/html.js" ?>></script>
        <script src=<?php // echo base_url() . "dist/assets/js/pages/crud/ktdatatable/base/html-table-usulan.js" ?>></script>
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
                                                    title: 'Aksi',
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
                $(document).on("click", ".generate", function () {
                    $('#Modalgenerate').modal('show');
                });
                $('#formbuatsk').submit(function(e){
                    e.preventDefault(); 
                         $.ajax({
                             url:'<?php echo base_url();?>index.php/c_admin_generate/buatsk', //URL submit
                             type:"post", //method Submit
                             data:new FormData(this), //penggunaan FormData
                             processData:false,
                             contentType:false,
                             cache:false,
                             async:false,
                              success: function(response){
                                    if(response != 0){
                                        swal.fire({title: "Berhasil", text: "Generate SK Dekan berhasil.", icon: "success",buttonsStyling:true, confirmButtonText: "OK"},
                                            ).then(function() {
                                                location.reload();
                                        });    
                                    }else{
                                        swal.fire({title: "Oops...", text: "Generate SK Dekan gagal.", icon: "error",buttonsStyling:true, confirmButtonText: "OK"},
                                        );
                                    }
                                }
                         });
                });
                $(document).on("click", ".item_edit", function () {
                      var idsk = $(this).attr('data');
                      $.ajax({
                          type: "GET",
                          url: "<?php echo base_url('index.php/c_admin_generate/getsk') ?>",
                          dataType: "JSON",
                          data: {idsk: idsk},
                          success: function (data) {
                              $.each(data, function (idsk, idperiode, idtemplate, nosk, judul, sumberdana, tanggalmulai,tanggalakhir,tanggalpenetapan,namadekan,nipdekan) {
                                  $('#Modaleditsk').modal('show');
                                  $('[name="idsk_edit"]').val(data.idsk);
                                  $('[name="idperiode_edit"]').val(data.idperiode);
                                  $('[name="idtemplate_edit"]').val(data.idtemplate);
                                  $('[name="nosk_edit"]').val(data.nosk);
                                  $('[name="judul_edit"]').val(data.judul);
                                  $('[name="sumberdana_edit"]').val(data.sumberdana);
                                  $('[name="tanggalmulai_edit"]').val(data.tanggalmulai);
                                  $('[name="tanggalakhir_edit"]').val(data.tanggalakhir);
                                  $('[name="tanggalpenetapan_edit"]').val(data.tanggalpenetapan);
                                  $('[name="namadekan_edit"]').val(data.namadekan);
                                  $('[name="nipdekan_edit"]').val(data.nipdekan);
                                  
                              });
                          }
                      });
                      return false;
                  });
                  $('#formueditsk').submit(function(e){
                    e.preventDefault(); 
                         $.ajax({
                             url:'<?php echo base_url();?>index.php/c_admin_generate/editsk', 
                             type:"post", 
                             data:new FormData(this),
                             processData:false,
                             contentType:false,
                             cache:false,
                             async:false,
                              success: function(response){
                                    if(response != 0){
                                        swal.fire({title: "Berhasil", text: "Perubahan data SK berhasil disimpan.", icon: "success",buttonsStyling:true, confirmButtonText: "OK"},
                                            ).then(function() {
                                                location.reload();
                                        });    
                                    }else{
                                        swal.fire({title: "Oops...", text: "Perubahan data SK gagal disimpan", icon: "error",buttonsStyling:true, confirmButtonText: "OK"},
                                        );
                                    }
                                }
                         });
                });
                $(document).on("click", ".item_hapus", function() {
                    var id = $(this).attr('data');                    
                    Swal.fire({
                        title: "Hapus SK Dekan",
                        text: "Apakah anda yakin akan menghapus SK Dekan ini ?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Ya, hapus",
                        cancelButtonText: "Tidak, batalkan",
                        reverseButtons: true
                    }).then(function (result) {
                            if (result.value) {
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url() . "index.php/c_admin_generate/hapussk"; ?>",
                                    dataType: "JSON",
                                    data: {id: id},
                                    success: function(response) {
                                        if(response != 0){
                                            $("tr[data-id='" + id + "']").fadeOut("fast", function() {
                                                $(this).remove();
                                            });
                                            Swal.fire(
                                                "Terhapus",
                                                "SK Dekan telah terhapus",
                                                "success"
                                            ).then(function() {
                                                    location.reload();
                                            });    
                                        }else{
                                            Swal.fire({title: "Oops...", text: "SK Dekan gagal dihapus.", icon: "error",buttonsStyling:true, confirmButtonText: "OK"},
                                                function(){ 
                                                    location.reload();
                                                }
                                             );
                                        }    
                                    }
                                });
                            } else if (result.dismiss === 'cancel') {
                                Swal.fire(
                                        'Dibatalkan',
                                        'Aksi hapus dibatalkan.',
                                        'error'
                                )
                            }
                    });

                });  
                    
            }); 
        </script>
    </body>
    <!--end::Body-->
</html>