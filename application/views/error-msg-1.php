<html lang="en">
    <!--begin::Head-->
    <head><base href="../../../">
        <meta charset="utf-8" />
        <title>Redirecting Page</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <!--begin::Fonts-->
        <link href=<?php echo base_url() . "dist/assets/css/font.css" ?> rel="stylesheet" type="text/css" />
        <!--end::Fonts-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href=<?php echo base_url() . "dist/assets/plugins/global/plugins.bundle.css" ?> rel="stylesheet" type="text/css" />
        <link href=<?php echo base_url() . "dist/assets/plugins/custom/prismjs/prismjs.bundle.css" ?> rel="stylesheet" type="text/css" />
        <link href=<?php echo base_url() . "dist/assets/css/style.bundle.css" ?> rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <!--end::Layout Themes-->
        <link rel="shortcut icon" href=<?php echo base_url() . "images/favicon-undip.ico" ?> />
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" style="background-image: url(<?php echo base_url() . 'dist/assets/media/bg/bg-10.jpg' ?>)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
        <?php include 'loader.php'; ?>
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Error-->
            <div class="d-flex flex-row-fluid flex-column bgi-size-cover bgi-position-center bgi-no-repeat p-10 p-sm-30" style="background-image: url(<?php echo base_url() . 'dist/assets/media/error/bg1.jpg' ?>);">
                <!--begin::Content-->
                <h1 class="font-weight-boldest text-dark-75 mt-15" style="font-size: 10rem">Sukses !</h1>
                <p class="font-size-h3 text-muted font-weight-normal"><?php echo $msg1; ?></p>
                <p class="font-size-h3 text-muted font-weight-normal"><?php echo $msg2; ?></p>
                <!--end::Content-->
            </div>
            <!--end::Error-->
        </div>
        <!--end::Main-->
        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
        <!--end::Global Config-->
        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src=<?php echo base_url() . "dist/assets/plugins/global/plugins.bundle.js" ?>></script>
        <script src=<?php echo base_url() . "dist/assets/plugins/custom/prismjs/prismjs.bundle.js" ?>></script>
        <script src=<?php echo base_url() . "dist/assets/js/scripts.bundle.js" ?>></script>
        <!--end::Global Theme Bundle-->
    </body>
    <!--end::Body-->
</html>