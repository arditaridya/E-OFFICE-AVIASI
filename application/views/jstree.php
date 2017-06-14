<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>jsTree test</title>
        <!-- 2 load the theme CSS file -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/dist/themes/default/style.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/docs.css" />
        <!-- 4 include the jQuery library -->
        <script src="<?php echo base_url(); ?>assets/assets/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery.address-1.6.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/vakata.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/dist/jstree.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/docs.js"></script>

    </head>
    <body>
        <div class="col-md-6">
            <div id="using_json" class="demo"></div>
            <div id="using_json2" class="demo"></div>
            <script>
                $(function () {
                    $('#using_json2').jstree({'core': {
                            'data': <?php echo $dt; ?>
                        }});
                    $('#using_json').jstree({'core': {
                            'data': [
                                'Simple root node',
                                {
                                    'text': 'Root node 2',
                                    'children': [
                                        {'text': 'Child 1', 
                                         'children': [
                                        {'text': 'Child 1.1'},
                                        {'text': 'Child 1.2'}
                                    ]                        
                },
                                        {'text': 'Child 2'}
                                    ]
                                }
                            ]
                        }});
                });
            </script>
        </div>
    </body>
</html>