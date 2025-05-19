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
                                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                            <a href="<?php echo base_url() . "index.php/c_admin_generate/template"; ?>" class="text-white text-hover-white opacity-75 hover-opacity-100">Template</a>
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
                                                            <h3 class="card-label">Template SK Penelitian dan Pengabdian
                                                                <span class="d-block text-muted pt-2 font-size-sm">Unggah Template untuk Generate Surat Keputusan Dekan Fakultas Sains dan Matematika</span></h3>
                                                        </div>
                                                        <div class="card-toolbar">
                                                            <div class="dropdown dropdown-inline mr-2">
                                                                <!--begin::Button-->
                                                                <a href="<?php echo base_url('index.php/c_admin_generate') ?>" class="btn btn-secondary font-light-bolder">
                                                                    <span class="svg-icon svg-icon-md svg-icon-default"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo2\dist/../src/media/svg/icons\Navigation\Angle-double-left.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                                                            <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                                                                            <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                                                                        </g>
                                                                    </svg><!--end::Svg Icon--></span>
                                                                    Kembali</a>
                                                                <!--end::Button-->
                                                            </div>
                                                            <div class="dropdown dropdown-inline mr-2">
                                                                <!--begin::Button-->
                                                                <a href="javascript:;" class="btn btn-primary font-weight-bolder unggahtemplate" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Klik untuk menambahkan template SK">
                                                                    <span class="svg-icon svg-icon-md svg-icon-default">
                                                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo2\dist/../src/media/svg/icons\Files\Uploaded-file.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                                                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                                            <path d="M8.95128003,13.8153448 L10.9077535,13.8153448 L10.9077535,15.8230161 C10.9077535,16.0991584 11.1316112,16.3230161 11.4077535,16.3230161 L12.4310522,16.3230161 C12.7071946,16.3230161 12.9310522,16.0991584 12.9310522,15.8230161 L12.9310522,13.8153448 L14.8875257,13.8153448 C15.1636681,13.8153448 15.3875257,13.5914871 15.3875257,13.3153448 C15.3875257,13.1970331 15.345572,13.0825545 15.2691225,12.9922598 L12.3009997,9.48659872 C12.1225648,9.27584861 11.8070681,9.24965194 11.596318,9.42808682 C11.5752308,9.44594059 11.5556598,9.46551156 11.5378061,9.48659872 L8.56968321,12.9922598 C8.39124833,13.2030099 8.417445,13.5185067 8.62819511,13.6969416 C8.71848979,13.773391 8.8329684,13.8153448 8.95128003,13.8153448 Z" fill="#000000"/>
                                                                        </g>
                                                                    </svg><!--end::Svg Icon--></span>
                                                                    Unggah Template Baru</a>
                                                                <!--end::Button-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <!--begin: Petunjuk-->
                                                        <div class="alert alert-success mb-5 p-5" role="alert">
                                                            <h4 class="alert-heading">Petunjuk Unggah Template</h4>
                                                            <div class="border-bottom border-white opacity-20 mb-5"></div>
                                                            <p class="mb-0">Pastikan dokumen Template berupa file Ms. Word format .docx</p>
                                                            <p class="mb-0">Ganti setiap indikator berikut sesuai format :
                                                            <ul>
                                                                <li>
                                                                    Nomor SK menjadi <b>${nosk}</b>
                                                                </li>
                                                                <li>
                                                                    Judul SK menjadi <b>${judul}</b>
                                                                </li>
                                                                <li>
                                                                    Sumberdana menjadi <b>${sumberdana}</b>
                                                                </li>
                                                                <li>
                                                                    Tanggal dimulai berlakunya SK menjadi <b>${tanggalmulai}</b>
                                                                </li>
                                                                <li>
                                                                    Tanggal berakhirnya SK menjadi <b>${tanggalakhir}</b>
                                                                </li>
                                                                <li>
                                                                    Tanggal Penetapan SK menjadi <b>${tanggalpenetapan}</b>
                                                                </li>
                                                                <li>
                                                                    Nama Dekan menjadi <b>${namadekan}</b>
                                                                </li><li>
                                                                    NIP SK menjadi <b>${nipdekan}</b>
                                                                </li>
                                                                <li>
                                                                    Tabel Lampiran SK menjadi <b>${table}</b>
                                                                </li>
                                                                
                                                            </ul>
                                                            </p>
                                                        </div>
                                                        <!-- end: Petunjuk__>
                                                        <!--begin: Datatable-->
                                                        <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                                        <!--<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">-->
                                                            <thead>
                                                                <tr>
                                                                    <th title="Field #1">No</th>
                                                                    <th title="Field #2">Nama File Template</th>
                                                                    <th title="Field #3">Keterangan</th>
                                                                    <th title="Field #4">Skema</th>
                                                                    <th title="Field #5">Diunggah</th>
                                                                    <th title="Field #6">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if($template != null){
                                                                        $i=1;
                                                                        foreach($template as $data):
                                                                ?>
                                                                <tr>
                                                                    <td class="text-center" width="5%"><?php echo $i++; ?></td>
                                                                    <td width="25%" class="text-justify">
                                                                        <a href="<?php echo base_url().$data->fileloc; ?>" title="Klik untuk melihat dokumen" data-toggle="tooltip" >
                                                                            <?php echo $data->namatemplate; ?>
                                                                        </a>
                                                                    </td>
                                                                    <td width="30%" class="text-justify"><?php echo $data->keterangan; ?></td>
                                                                    <td class="text-center" width="20%" nowrap="nowrap">
                                                                        <?php if($skema != null){
                                                                            foreach($skema as $row): ?>
                                                                                <div class="checkbox-inline" style="padding-bottom:5px">
                                                                                    <label class="checkbox checkbox-outline checkbox-success">
                                                                                    <input type="checkbox" id="<?php echo $row->idtemplate; ?>" name="id" value="<?php echo $row->idskema."-".$data->idtemplate; ?>" class="cekskema" <?php if($row->idtemplate==$data->idtemplate){ echo "checked='checked'";} ?>/>
                                                                                    <span></span><?php echo $row->namaskema; ?></label>
                                                                                </div>
                                                                        <?php endforeach; }else{ echo "<span class='text-muted'>Tidak ada aksi</span>"; } ?>
                                                                    </td>
                                                                    <td width="15%" class="text-justify"><?php echo tgl_indo($data->tglunggah); ?></td>
                                                                    <td width="5%" align="center" nowrap="nowrap">
                                                                        <a href="javascript:;" class="btn btn-sm btn-warning btn-clean btn-icon item_edit" title="Perbarui Template" data-toggle="tooltip" id="idtemplate" data="<?php echo $data->idtemplate;?>"><i class="la la-edit"></i></a>
                                                                        <!--<a href="javascript:;" class="btn btn-sm btn-danger btn-clean btn-icon item_hapus" title="Hapus Hapus" data-toggle="tooltip" id="idtemplate" data="<?php echo $data->idtemplate;?>"><i class="la la-trash"></i></a>-->
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
                                        <!--begin::Modal Tambah Template-->
                                        <div id="Modaltemplatebaru" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Unggah Template SK Dekan</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                        
                                                    </div>
                                                    <form class="form-horizontal" method="post" id="formunggahtemplate">
                                                        <div class="modal-body">
                                                            <div data-scroll="true" data-height="500">
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-left col-lg-3 col-sm-12">Nama File Template</label>
                                                                <input name="namatemplate" type="text" class="form-control col-lg-8" placeholder="Masukkan nama unik untuk tiap template. Contoh: template_penelitian_dosen" required=""/>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-left col-lg-3 col-sm-12"><b>Keterangan Template</b></label>
                                                                <textarea name="keterangan" class="form-control col-lg-8" required="" rows="4" placeholder="Keterangan mengenai informasi isi template SK "></textarea>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-left col-lg-3 col-sm-12"><b>Unggah Template</b></label>
                                                                <label class="btn btn-outline-success">
                                                                    <input type="file" name="file" id="file_baru"><i class="flaticon-upload"></i> Pilih File                                                                    
                                                                </label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-left col-lg-3 col-sm-12"><b>File yang dipilih</b></label>
                                                                <label class="col-form-label text-left col-lg-8 col-sm-12 dropzone dropzone-default dropzone-success" id="display"></label>
                                                            </div>
                                                            <label class="col-form-label text-left col-lg-3 col-sm-12"></label>
                                                            Keterangan :
                                                            <br/><label class="col-form-label text-left col-lg-3 col-sm-12"></label>
                                                            <span class="svg-icon svg-icon-success">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                                                                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
                                                                            </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                            </span>
                                                            Jenis File Word Document (.docx)
                                                            <br/><label class="col-form-label text-left col-lg-3 col-sm-12"></label>
                                                            <span class="svg-icon svg-icon-success">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                                                                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
                                                                            </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                            </span>Ukuran File maksimum 5 Mb
                                                            <br/><br/>
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
                                        <!--end::Modal Tambah Template-->
                                        <!--begin::Modal Edit Template-->
                                        <div id="Modaledittemplate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Template SK Dekan</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                        
                                                    </div>
                                                    <form class="form-horizontal" method="post" id="formuedittemplate">
                                                        <!--<form class="form-horizontal" method="post" action='<?php echo base_url();?>index.php/c_admin_generate/editsk'>-->
                                                        <div class="modal-body">
                                                            <div data-scroll="true" data-height="500">
                                                            <input name="idtemplate_edit" class="form-control" type="hidden">
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-left col-lg-3 col-sm-12">Nama File Template</label>
                                                                <input name="namatemplate_edit" type="text" class="form-control col-lg-8" placeholder="Masukkan nama unik untuk tiap template. Contoh: template_penelitian_dosen" required=""/>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-left col-lg-3 col-sm-12"><b>Keterangan Template</b></label>
                                                                <textarea name="keterangan_edit" class="form-control col-lg-8" required="" rows="4" placeholder="Keterangan mengenai informasi isi template SK "></textarea>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-left col-lg-3 col-sm-12"><b>Dokumen Terunggah</b></label>
                                                                <input name="template_edit" class="form-control col-lg-8" type="text" disabled="">
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-left col-lg-3 col-sm-12"><b>Unggah Template</b></label>
                                                                <label class="btn btn-outline-success">
                                                                    <input type="file" name="file_edit" id="file_edit"><i class="flaticon-upload"></i> Pilih File                                                               
                                                                </label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label text-left col-lg-3 col-sm-12"><b>File yang dipilih</b></label>
                                                                <label class="col-form-label text-left col-lg-8 col-sm-12 dropzone dropzone-default dropzone-success" id="display_edit"></label>
                                                                <input type="hidden" id="uploadedfile" name="uploadedfile">
                                                            </div>
                                                            <label class="col-form-label text-left col-lg-3 col-sm-12"></label>
                                                            Keterangan :
                                                            <br/><label class="col-form-label text-left col-lg-3 col-sm-12"></label>
                                                            <span class="svg-icon svg-icon-success">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                                                                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
                                                                            </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                            </span>
                                                            Jenis File Word Document (.docx)
                                                            <br/><label class="col-form-label text-left col-lg-3 col-sm-12"></label>
                                                            <span class="svg-icon svg-icon-success">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                                                                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
                                                                            </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                            </span>Ukuran File maksimum 5 Mb
                                                            <br/><br/>
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
                                        <!--end::Modal Edit Template-->
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
                                                    targets: 3,
                                                    title: 'Skema',
                                                    orderable: false,
                                            },
                                            {
                                                    targets: 5,
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
                $(document).on("click", ".unggahtemplate", function () {
                    $('#Modaltemplatebaru').modal('show');
                });
                $(document).on("click", ".unggahfile", function () {
                    var idusulan = $(this).attr('data');
                    $('#Modalunggahfile').modal('show');
                    $('[name="idusulan"]').val(idusulan);
                });
                $('#file_baru').change(function(e){
                    var fileName = e.target.files[0].name;
                    document.getElementById('display').innerHTML=fileName;
                });
                $('#file_edit').change(function(e){
                    var fileName = e.target.files[0].name;
                    document.getElementById('display_edit').innerHTML=fileName;
                    $('[name="uploadedfile"]').val(fileName); 
                });
                $('#formunggahtemplate').submit(function(e){
                    e.preventDefault(); 
                         $.ajax({
                             url:'<?php echo base_url();?>index.php/c_admin_generate/uploadtemplate', //URL submit
                             type:"post", //method Submit
                             data:new FormData(this), //penggunaan FormData
                             processData:false,
                             contentType:false,
                             cache:false,
                             async:false,
                              success: function(response){
                                    if(response != 0){
                                        swal.fire({title: "Berhasil", text: "Template SK berhasil diunggah.", icon: "success",buttonsStyling:true, confirmButtonText: "OK"},
                                            ).then(function() {
                                                location.reload();
                                        });    
                                    }else{
                                        swal.fire({title: "Oops...", text: "Template SK gagal diunggah.", icon: "error",buttonsStyling:true, confirmButtonText: "OK"},
                                        );
                                    }
                                }
                         });
                });
                $(document).on("click", ".item_edit", function () {
                      var idtemplate = $(this).attr('data');
                      $.ajax({
                          type: "GET",
                          url: "<?php echo base_url('index.php/c_admin_generate/gettemplate') ?>",
                          dataType: "JSON",
                          data: {idtemplate: idtemplate},
                          success: function (data) {
                              $.each(data, function (idtemplate, namatemplate, keterangan, template) {
                                  $('#Modaledittemplate').modal('show');
                                  $('[name="idtemplate_edit"]').val(data.idtemplate);
                                  $('[name="namatemplate_edit"]').val(data.namatemplate);
                                  $('[name="keterangan_edit"]').val(data.keterangan);
                                  $('[name="template_edit"]').val(data.template);
//                                  $('[name="file_edit"]').val(data.fileloc);
                                  
                              });
                          }
                      });
                      return false;
                  });
                $('#formuedittemplate').submit(function(e){
                    e.preventDefault(); 
                         $.ajax({
                             url:'<?php echo base_url();?>index.php/c_admin_generate/edittemplate', //URL submit
                             type:"post", //method Submit
                             data:new FormData(this), //penggunaan FormData
                             processData:false,
                             contentType:false,
                             cache:false,
                             async:false,
                              success: function(response){
                                    if(response != 0){
                                        swal.fire({title: "Berhasil", text: "Template SK berhasil disimpan.", icon: "success",buttonsStyling:true, confirmButtonText: "OK"},
                                            ).then(function() {
                                                location.reload();
                                        });    
                                    }else{
                                        swal.fire({title: "Oops...", text: "Template SK gagal disimpan", icon: "error",buttonsStyling:true, confirmButtonText: "OK"},
                                        );
                                    }
                                }
                         });
                });
                $('.cekskema').on('click', function(event){
                    if(this.checked){
                        var fd = new FormData();
                        var id = this.value;                        
                        fd.append('id',id);
                        
                        $.ajax({
                            url: '<?php echo base_url('index.php/c_admin_generate/checkskema') ?>',
                            type: 'post',
                            data: fd,
                            contentType: false,
                            processData: false,
                            success: function(response){
                                if(response != 0){
                                    swal.fire({title: "Berhasil", text: "Skema yang anda pilih telah dipindah ke template ini.", icon: "success",buttonsStyling:true, confirmButtonText: "OK"},
                                        ).then(function() {
                                            location.reload();
                                    });    
                                }else{
                                    swal.fire({title: "Oops...", text: "Skema yang anda pilih gagal dipindah ke template ini.", icon: "error",buttonsStyling:true, confirmButtonText: "OK"},
                                    );
                                }
                            }
                        });
                        e.preventDefault(); 
                    }else{
                        var fd = new FormData();
                        var id = this.value;                        
                        fd.append('id',id);
                        
                        $.ajax({
                            url: '<?php echo base_url('index.php/c_admin_generate/uncheckskema') ?>',
                            type: 'post',
                            data: fd,
                            contentType: false,
                            processData: false,
                            success: function(response){
                                if(response != 0){
                                    swal.fire({title: "Berhasil", text: "Skema berhasil dihapus dari template ini.", icon: "success",buttonsStyling:true, confirmButtonText: "OK"},
                                        ).then(function() {
                                            location.reload();
                                    });    
                                }else{
                                    swal.fire({title: "Oops...", text: "Skema gagal dihapus dari template ini.", icon: "error",buttonsStyling:true, confirmButtonText: "OK"},
                                    );
                                }
                            }
                        });
                        e.preventDefault(); 
                    }
                })
                //---------------------------------------
                $(document).on("click", ".generate", function () {
                    $('#Modalgenerate').modal('show');
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