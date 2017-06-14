<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/global/img/favicon.png" type="image/x-icon"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
	<?php echo link_tag(base_url('assets/global/img/favicon.png'), 'shortcut icon', 'image/ico'); ?>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!--<script src="<?php echo base_url() ?>assets/global/plugins/pace/pace.min.js" type="text/javascript"></script>-->
    <script src="<?php echo base_url() ?>assets/global/plugins/pace/pace.min_2.js" type="text/javascript"></script>
    <link href="<?php echo base_url() ?>assets/global/plugins/pace/themes/pace-theme-flash.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo base_url() ?>assets/global/fonts/fonts.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="<?php echo base_url() ?>assets/admin/pages/css/error.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/global/plugins/icheck/skins/all.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet"/>
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
    <!--<link href="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>-->
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="<?php echo base_url() ?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/global/plugins/select2/select2.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
    

    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?php echo base_url() ?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?php echo base_url() ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/layout/css/bootstrap-fileupload.min.css" />
    <!-- END THEME STYLES -->

    <script src="<?php echo base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/global/scripts/highchart/highcharts.js"></script>
    <?php /* ?>
	<script src="<?php echo base_url() ?>assets/global/scripts/highchart/modules/highcharts-3d.js"></script>
    <?php */ ?>
    <script src="<?php echo base_url() ?>assets/global/scripts/highchart/modules/exporting.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/pages/scripts/jssor.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/pages/scripts/jssor.slider.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/layout/css/jquery-ui.css" />
        <!--script src="<?php echo base_url(); ?>assets/admin/pages/scripts/jquery-1.9.1.js"></script-->
        <script src="<?php echo base_url(); ?>assets/admin/pages/scripts/jquery-ui.js"></script>
    <style>
        fieldset.scheduler-border {
            border: 1px groove #ddd !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
        }

        legend.scheduler-border {
            font-size: 1.2em !important;
            font-weight: bold !important;
            text-align: left !important;
            width:auto;
            padding:0 10px;
            border-bottom:none;
        }

        input[type="submit"] {
            font-family: FontAwesome, "Open Sans", Verdana, sans-serif;
        }
    </style>

    <script type="text/javascript">
		
									Highcharts.createElement('link', {
    href: '<?php echo site_url('assets/css/signika.css')?>',
    rel: 'stylesheet',
    type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);

// Add the background image to the container
Highcharts.wrap(Highcharts.Chart.prototype, 'getContainer', function (proceed) {
    proceed.call(this);
    this.container.style.background = 'url(<?php echo base_url()?>assets/sand.png)';
});


Highcharts.theme = {
    colors: ["#f45b5b", "#8085e9", "#8d4654", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
        "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
    chart: {
        backgroundColor: null,
        style: {
            fontFamily: "Signika, serif"
        }
    },
    credits: {
        enabled: false
    },
    title: {
        style: {
            color: 'black',
            fontSize: '16px',
            fontWeight: 'bold'
        }
    },
    subtitle: {
        style: {
            color: 'black'
        }
    },
    tooltip: {
        borderWidth: 0
    },
    legend: {
        itemStyle: {
            fontWeight: 'bold',
            fontSize: '13px'
        }
    },
    xAxis: {
        labels: {
            style: {
                color: '#6e6e70'
            }
        }
    },
    yAxis: {
        labels: {
            style: {
                color: '#6e6e70'
            }
        }
    },
    plotOptions: {
        series: {
            shadow: true
        },
        candlestick: {
            lineColor: '#404048'
        },
        map: {
            shadow: false
        }
    },

    // Highstock specific
    navigator: {
        xAxis: {
            gridLineColor: '#D0D0D8'
        }
    },
    rangeSelector: {
        buttonTheme: {
            fill: 'white',
            stroke: '#C0C0C8',
            'stroke-width': 1,
            states: {
                select: {
                    fill: '#D0D0D8'
                }
            }
        }
    },
    scrollbar: {
        trackBorderColor: '#C0C0C8'
    },

    // General
    background2: '#E0E0E8'

};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);

$(function () {
    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

});
	
        function MM_openBrWindow(theURL, winName, features) { //v2.0
            window.open(theURL, winName, features);
        }
        //grafik kedua

        $(function () {
            $('#container2').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'REKAPITULASI SDM BIDANG ORDIRGA'
                },
                subtitle: {
                    text: 'Masyarakat penggemar olahraga digantara'
                },
                xAxis: {
                    categories: [
                        'Terjun Payung',
                        'Terbang Layang',
                        'Microlight',
                        'Pesawat Bermotor',
                        'Layang Gantung',
                        'Pesawat Aerobatik',
                        'Pesawat Heli',
                        'Swayasa'
                    ]
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total'
                    }
                },
                legend: {
                    align: 'right',
                    x: 0,
                    verticalAlign: 'top',
                    y: 25,
                    floating: true,
                    backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                    borderColor: '#CCC',
                    borderWidth: 1,
                    shadow: false
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.0f} Orang</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                        name: 'SD',
                        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5]

                    }, {
                        name: 'SMP',
                        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3]

                    }, {
                        name: 'SMA',
                        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6]

                    }, {
                        name: 'PT',
                        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4]

                    }]
            });
        });
        $(function () {
            $('#container_penerbang').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'REKAPTULASI SDM BIDANG PENERBANGAN'
                },
                xAxis: {
                    categories: ['Pengisian bahan bakar pesawat dan ground handling',
                        'Tim Sar dan Pemadam Kebakaran', 'Personil Survay Udara', 'Personil Meteo',
                        'Operator dan Teknisi Komunikasi Navigasi', 'Operator dan Teknisi Radar',
                        'Teknisi Penyiap dan Pemeliharaan Pesawat', 'Penerbang/Pilot dan Awak Pesawat'],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah Anggota',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                legend: false,
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0"><b>:</b> </td>' +
                            '<td style="padding:0"><b> Jumlah {point.y}</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        dataLabels: {
                            enabled: false
                        }
                    }
                },
                series: [{
                        data: [107, 233, 323, 123, 423, 532, 101, 104]
                    }]
            });
        });

        $(function () {
            $('#container_penerbang2').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Data Penduduk Yang Memiliki Keahlian Bidang Maritim'
                },
                subtitle: {
                    text: 'Per Wilayah'
                },
                xAxis: {
                    categories: [
                        'Nahkoda',
                        'Mualim',
                        'Mesin Kapal',
                        'Navigasi'
                    ]
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah'
                    }
                },
                legend: false,
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        colorByPoint: true

                    }
                },
                series: [{
                        data: [49.9, 86.2, 106.4, 71.5],
                        dataLabels: {
                            enabled: true,
                            style: {
                                fontWeight: 'bold',
                                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                            }
                        }

                    }]
            });
        });

        $(function () {
            $('#container_luar_penerbang').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'REKAPITULASI SDM BIDANG ORDIRGA'
                },
                subtitle: {
                    text: 'Masyarakat penggemar olahraga digantara'
                },
                xAxis: {
                    categories: [
                        'Terjun Payung',
                        'Terbang Layang',
                        'Microlight',
                        'Pesawat Bermotor',
                        'Layang Gantung',
                        'Pesawat Aerobatik',
                        'Pesawat Heli',
                        'Swayasa'
                    ]
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total'
                    }
                },
                legend: {
                    align: 'right',
                    x: 0,
                    verticalAlign: 'top',
                    y: 25,
                    floating: true,
                    backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                    borderColor: '#CCC',
                    borderWidth: 1,
                    shadow: false
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.0f} Orang</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                        name: 'SD',
                        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5]

                    }, {
                        name: 'SMP',
                        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3]

                    }, {
                        name: 'SMA',
                        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6]

                    }, {
                        name: 'PT',
                        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4]

                    }]
            });
        });

   
    </script>

    <script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
                //Fade
                {$Duration: 1200, $Opacity: 2}
            ];

            var options = {
                $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1, //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 3000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true, //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20, //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1, //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0, //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1, //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1, //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 0, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {//[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$, //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions, //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1, //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },
                $BulletNavigatorOptions: {//[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$, //[Required] Class to create navigator instance
                    $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1, //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1, //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10, //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10, //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = $('#slider1_container').parent().width();
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(parentWidth);
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

<!--    <script>
        $(document).ready(function () {
            $("#PROVINSI_ID").change(function () {
                var provinsi_id = {provinsi_id: $("#PROVINSI_ID").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#PROVINSI_ID").attr('url'),
                    data: provinsi_id,
                    success: function (msg) {
                        $('#KOTA_ID').html(msg);
                        $('#KOTA_ID').prop("disabled", false);
                        $('#select2-chosen-2').html($("#KOTA_ID option:first").text());
                    }
                });
            });
            $("#JENIS_ID").change(function () {
                var jenis_id = {jenis_id: $("#JENIS_ID").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#JENIS_ID").attr('url'),
                    data: jenis_id,
                    success: function (msg) {
                        $('#KATEGORI_ID').html(msg);
                        $('#KATEGORI_ID').prop("disabled", false);
                        $('#select2-chosen-8').html($("#KATEGORI_ID option:first").text());
                    }
                });
            });
            $('#KORPS_ID').change(function () {
                var korps_id = {korps_id: $("#KORPS_ID").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#KORPS_ID").attr('url'),
                    data: korps_id,
                    success: function (msg) {
                        $('#PROFESI_ID').html(msg);
                        $('#PROFESI_ID').prop("disabled", false);
                        $('#select2-chosen-16').html($("#PROFESI_ID option:first").text());
                    }
                });
            });
        });
    </script>-->
</head>
<!-- END HEAD -->