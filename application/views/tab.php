<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>
            /******* CSS *********/
            .previous-tab,
            .next-tab{
                display: inline-block;
                border: 1px solid #444348;
                border-radius: 3px;
                margin: 5px;
                color: #444348;
                font-size: 14px;
                padding: 10px 15px;
                cursor: pointer;
            }
        </style>
    </head>
    <!-- HTML -->
    <body>


        <ul class="nav nav-tabs" id="myTabs" role="tablist">
            <li role="presentation" class="active"><a href="#step1" aria-controls="step1" role="tab" data-toggle="tab">Step1</a></li>
            <li role="presentation"><a href="#step2" aria-controls="step2" role="tab" data-toggle="tab">Step2</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="step1">
                <p>tab1 content</p>
                <p>//Include next prev buttons in the tab-content</p>
                <span class="previous-tab">previous</span>
                <span class="next-tab">next</span>
            </div>
            <div role="tabpanel" class="tab-pane" id="step2">
                <p>tab2 content</p>
                <p>//Include next prev buttons in the tab-content</p>
                <span class="previous-tab">previous</span>
                <span class="next-tab">next</span>
            </div>
        </div>
        <script type="text/javascript">
            /**** JQuery *******/
            jQuery('body').on('click', '.next-tab', function () {
                var next = jQuery('.nav-tabs > .active').next('li');
                if (next.length) {
                    next.find('a').trigger('click');
                } else {
                    jQuery('#myTabs a:first').tab('show');
                }
            });

            jQuery('body').on('click', '.previous-tab', function () {
                var prev = jQuery('.nav-tabs > .active').prev('li')
                if (prev.length) {
                    prev.find('a').trigger('click');
                } else {
                    jQuery('#myTabs a:last').tab('show');
                }
            });
        </script>
    </body>
</html>