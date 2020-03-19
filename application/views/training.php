<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="box-shadow: 5px 5px 10px 5px #888888;">
            <form role="form" enctype="multipart/form-data" action="<?php echo site_url('training/add')?>" method="post">
                <h2>Register <small>บันทึกข้อมูลการเข้าอบรม</small></h2>
                <hr class="colorgraph">
                <div class="form-group text-center">
                    <b>รูปภาพ</b>
                    <input id="file-3" type="file" name="tr_img">
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="tr_fname"  class="form-control input-lg" placeholder="ชื่อ" tabindex="1">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="tr_lname"  class="form-control input-lg" placeholder="นามสกุล" tabindex="2">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="tr_nname"  class="form-control input-lg" placeholder="ชื่อเล่น" tabindex="3">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <div class="form-group">
                         <div class="input-group">
                            <div class="input-group-addon">วันเกิด</div>
                            <input type="date" name="tr_birthday"  class="form-control input-lg" placeholder="วันเกิด">
                            <!-- <span class="add-on"><i class="icon-th"></i></span> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="text" name="tr_agency"  class="form-control input-lg" placeholder="หน่วยงาน" tabindex="4">
            </div>
            <div class="form-group">
                <input type="text" name="tr_position"  class="form-control input-lg" placeholder="ตำแหน่ง" tabindex="4">
            </div>
            <div class="form-group">
                <input type="text" name="tr_address"  class="form-control input-lg" placeholder="ที่อยู่" tabindex="4">
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="email" name="tr_email"  class="form-control input-lg" placeholder="Email" tabindex="5">
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="tr_facebook"  class="form-control input-lg" placeholder="Facebook" tabindex="5">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="tr_tel"  class="form-control input-lg" placeholder="เบอร์โทร" tabindex="5">
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="tr_line"  class="form-control input-lg" placeholder="Line ID" tabindex="5">
                    </div>
                </div>
            </div>

                <hr class="colorgraph">
                <div class="row" style="margin-bottom: 30px">
                    <div class="col-xs-12 col-md-6"><input type="submit" value="บันทึกข้อมูล" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                    <div class="col-xs-12 col-md-6"><input type="reset" value="ยกเลิก" class="btn btn-default btn-block btn-lg" /></div>
                    <br/>
                </div>
            </form>
        </div>
    </div>

</div>


    <style>
        /* Credit to bootsnipp.com for the css for the color graph */
        .colorgraph {
            height: 5px;
            border-top: 0;
            background: #c4e17f;
            border-radius: 5px;
            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        }
    </style>

    <script>
        $(document).ready(function () {
                $('.datepicker').datepicker();

            $(function () {
                $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
        $button = $widget.find('button'),
        $checkbox = $widget.find('input:checkbox'),
        color = $button.data('color'),
        settings = {
            on: {
                icon: 'glyphicon glyphicon-check'
            },
            off: {
                icon: 'glyphicon glyphicon-unchecked'
            }
        };

    // Event Handlers
    $button.on('click', function () {
        $checkbox.prop('checked', !$checkbox.is(':checked'));
        $checkbox.triggerHandler('change');
        updateDisplay();
    });
    $checkbox.on('change', function () {
        updateDisplay();
    });

    // Actions
    function updateDisplay() {
        var isChecked = $checkbox.is(':checked');

        // Set the button's state
        $button.data('state', (isChecked) ? "on" : "off");

        // Set the button's icon
        $button.find('.state-icon')
        .removeClass()
        .addClass('state-icon ' + settings[$button.data('state')].icon);

        // Update the button's color
        if (isChecked) {
            $button
            .removeClass('btn-default')
            .addClass('btn-' + color + ' active');
        }
        else {
            $button
            .removeClass('btn-' + color + ' active')
            .addClass('btn-default');
        }
    }

    // Initialization
    function init() {

        updateDisplay();

        // Inject the icon if applicable
        if ($button.find('.state-icon').length == 0) {
            $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
        }
    }
    init();
    });
    });


    </script>

    <script>

        $("#file-3").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any"
        });

    </script>