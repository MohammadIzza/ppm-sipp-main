<?php
function tgl_indo($tanggal) {
    $bulan = array(
        1 => 'Januari',
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

    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
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
        <script>(function(h, o, t, j, a, r){ h.hj = h.hj || function(){(h.hj.q = h.hj.q || []).push(arguments)}; h._hjSettings = {hjid:1070954, hjsv:6}; a = o.getElementsByTagName('head')[0]; r = o.createElement('script'); r.async = 1; r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv; a.appendChild(r); })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');</script>
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
                                        <h2 class="text-white font-weight-bold my-2 mr-5">Dashboard</h2>
                                        <!--end::Title-->
                                        <!--begin::Breadcrumb-->
                                        <div class="d-flex align-items-center font-weight-bold my-2">
                                            <!--begin::Item-->
                                            <a href="<?php echo base_url() . "index.php/"; ?>" class="opacity-75 hover-opacity-100">
                                                <i class="flaticon2-shelter text-white icon-1x"></i>
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                            <a href="#" class="text-white text-hover-white opacity-75 hover-opacity-100">
                                                <?php if($this->session->userdata['logged_in']['previledges']=='peneliti'){
                                                    echo "Info Terbaru";
                                                }else{
                                                    echo "Laporan Progres";
                                                }
                                                ?>
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Breadcrumb-->
                                    </div>
                                    <!--end::Heading-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Toolbar-->
                                    <?php include('v_toolbar_breadcrumb.php'); ?>
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
                                                <!--begin::Forms Widget 8-->
                                                <!--begin::Card-->
                                                <div class="card card-custom gutter-b">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <!--begin: Info-->
                                                            <div class="flex-grow-1">
                                                                <!--begin: Title-->
                                                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                    <div class="mr-3">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">Selamat Datang, <?php echo ucfirst($this->session->userdata['logged_in']['name']); ?>
                                                                            <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Contacts-->
                                                                        <div class="d-flex flex-wrap my-2">
                                                                            <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                    <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                                                                    <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                                                                    </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span><?php echo $this->session->userdata['logged_in']['username']; ?></a>
                                                                            <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <mask fill="white">
                                                                                        <use xlink:href="#path-1" />
                                                                                    </mask>
                                                                                    <g />
                                                                                    <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000" />
                                                                                    </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span><?php echo ucfirst($this->session->userdata['logged_in']['previledges']); if($this->session->userdata['logged_in']['previledges']=='admin prodi'){echo " ".$namaprodi; }?></a>
                                                                        </div>
                                                                        <!--end::Contacts-->
                                                                    </div>
<!--                                                                    <div class="my-lg-0 my-1">
                                                                            <a href="#" class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-3">Lihat Proposal</a>
                                                                            <a href="#" class="btn btn-sm btn-info font-weight-bolder text-uppercase">New Task</a>
                                                                    </div>-->
                                                                </div>
                                                                <!--end: Title-->
                                                                <!--begin: Content-->
                                                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                                                    <div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">
                                                                        <?php if($periode != null){
                                                                            if($this->session->userdata['logged_in']['previledges']=='peneliti'){
                                                                                echo "<br/>Penawaran Program Penelitian & Pengabdian pada periode <b>".$periode[0]->nama."</b>.<br/>";
                                                                            }else{
                                                                                echo "<br/>Rangkuman Progres Penelitian & Pengabdian pada periode <b>".$periode[0]->nama."</b>.<br/>";   
                                                                            }                                                                                                                                                     
                                                                            if($skema != null){
                                                                                echo "Skema yang ditawarkan :<br/>";
                                                                                echo "<ol>";
                                                                                foreach ($skema as $data):
                                                                                   echo "<li>".$data->namaskema."</li>"; 
                                                                                endforeach;
                                                                                echo "</ol>";
                                                                            }
                                                                        }else{
                                                                            if($this->session->userdata['logged_in']['previledges']=='peneliti'){
                                                                                echo "<br/>Belum ada info terbaru.<br/>";
                                                                            }else{
                                                                                echo "<br/>Belum ada progres kegiatan.<br/>";
                                                                            }
                                                                            
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                    <?php if($periode != null){ ?>
                                                                    <div class="d-flex flex-wrap align-items-center py-2">
                                                                        <div class="d-flex align-items-center mr-10">
                                                                            <div class="mr-6">
                                                                                <div class="font-weight-bold mb-2">Start Date</div>
                                                                                <span class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold"><?php echo tgl_indo($periode[0]->start);?></span>
                                                                            </div>
                                                                            <div class="">
                                                                                <div class="font-weight-bold mb-2">Due Date</div>
                                                                                <span class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold"><?php echo tgl_indo($periode[0]->end);?></span>
                                                                            </div>
                                                                        </div>
<!--                                                                        <div class="flex-grow-1 flex-shrink-0 w-150px w-xl-300px mt-4 mt-sm-0">
                                                                            <span class="font-weight-bold">Progress</span>
                                                                            <div class="progress progress-xs mt-2 mb-2">
                                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                            <span class="font-weight-bolder text-dark">78%</span>
                                                                        </div>-->
                                                                    </div>
                                                                    <?php } ?>
                                                                </div>
                                                                <!--end: Content-->
                                                            </div>
                                                            <!--end: Info-->
                                                        </div>
                                                        <?php if($this->session->userdata['logged_in']['previledges']!='peneliti'){ ?>
                                                        <div class="separator separator-solid my-7"></div>
                                                        <!--begin: Items-->
                                                        <div class="d-flex align-items-center flex-wrap">
                                                            <!--begin: Item-->                                                            
                                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                                <span class="mr-4">
                                                                    <i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
                                                                </span>
                                                                <div class="d-flex flex-column flex-lg-fill" data-toggle="popover" title="Informasi" data-html="true" data-placement="top" data-content="Peneliti mengajukan usulan penelitian/ pengabdian tetapi <b>belum berstatus Final</b> (Form usulan belum lengkap dan/atau Proposal belum diunggah). <?php if($this->session->userdata['logged_in']['previledges']=='admin prodi'){echo "<br/><b>Total</b> berisi informasi jumlah usulan yang beranggotakan Peneliti dari Prodi ".$namaprodi." baik sebagai Ketua maupun Anggota.";} ?>">
                                                                    <span class="text-dark-75 font-weight-bolder font-size-sm">Usulan Baru</span>
                                                                    <!--<a href="#" class="text-primary font-weight-bolder"></a>-->
                                                                    <span class="font-weight-bolder font-size-h8">
                                                                    <span class="text-dark-50 font-weight-bold">Total: </span><?php echo $usulanbaru;?></span>
                                                                </div>
                                                            </div>
                                                            <!--end: Item-->
                                                            <!--begin: Item-->
                                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                                <span class="mr-4">
                                                                    <i class="flaticon-folder-1 icon-2x text-muted font-weight-bold"></i>
                                                                </span>
                                                                <div class="d-flex flex-column flex-lg-fill" data-toggle="popover" title="Informasi" data-html="true" data-placement="top" data-content="Usulan berstatus <b>Final</b> (Form isian lengkap dan Proposal telah diunggah). <?php if($this->session->userdata['logged_in']['previledges']=='admin prodi'){echo "<br/><b>Total</b> berisi informasi jumlah Proposal Final terunggah yang beranggotakan Peneliti dari Prodi ".$namaprodi." baik sebagai Ketua maupun Anggota.";} ?>">
                                                                    <span class="font-weight-bolder font-size-sm">Proposal Diunggah</span>
                                                                    <span class="font-weight-bolder font-size-h8">
                                                                    <span class="text-dark-50 font-weight-bold">Total: </span><?php echo $usulanfinal;?></span>
                                                                </div>
                                                            </div>
                                                            <!--end: Item-->
                                                            <!--begin: Item-->
                                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                                <span class="mr-4">
                                                                    <i class="flaticon-coins icon-2x text-muted font-weight-bold"></i>
                                                                </span>
                                                                <div class="d-flex flex-column flex-lg-fill" data-toggle="popover" title="Informasi" data-html="true" data-placement="top" data-content="Proposal Penelitian/Pengabdian yang telah <b>lolos seleksi</b> dan <b>didanai</b>. <?php if($this->session->userdata['logged_in']['previledges']=='admin prodi'){echo "<br/><b>Total</b> berisi informasi jumlah Proposal Didanai yang beranggotakan Peneliti dari Prodi ".$namaprodi." baik sebagai Ketua maupun Anggota.";} ?>">
                                                                    <span class="font-weight-bolder font-size-sm">Didanai</span>
                                                                    <span class="font-weight-bolder font-size-h8">
                                                                    <span class="text-dark-50 font-weight-bold">Total: </span><?php echo $usulandidanai;?></span>
                                                                </div>
                                                            </div>
                                                            <!--end: Item-->
                                                            <!--begin: Item-->
                                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                                <span class="mr-4">
                                                                    <i class="flaticon-open-box icon-2x text-muted font-weight-bold"></i>
                                                                </span>
                                                                <div class="d-flex flex-column flex-lg-fill" data-toggle="popover" title="Informasi" data-html="true" data-placement="top" data-content="Proposal Penelitian/Pengabdian yang <b>tidak lolos seleksi</b>. <?php if($this->session->userdata['logged_in']['previledges']=='admin prodi'){echo "<br/><b>Total</b> berisi informasi jumlah Proposal Tidak Lolos Seleksi yang beranggotakan Peneliti dari Prodi ".$namaprodi." baik sebagai Ketua maupun Anggota.";} ?>">
                                                                    <span class="font-weight-bolder font-size-sm">Ditolak</span>
                                                                    <span class="font-weight-bolder font-size-h8">
                                                                    <span class="text-dark-50 font-weight-bold">Total: </span><?php echo $usulanditolak;?></span>
                                                                </div>
                                                            </div>
                                                            <!--end: Item-->                                                            
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <!--end::Card-->
                                                <!--end::Forms Widget 8-->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--end::Dashboard-->
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
        <script src=<?php // echo base_url() . "dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.2.8"   ?>></script>
        <!--end::Page Vendors-->
        <!--begin::Page Scripts(used by this page)-->
        <!--end::Page Scripts-->
    </body>
    <!--end::Body
</html>