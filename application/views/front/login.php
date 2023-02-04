<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $title; ?></title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>/assets2/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>/assets2/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>/assets2/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>/assets2/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">DISKOMINFO</a>
            <small></small>
        </div>
        <div class="card">
            <div class="body">
                <?php echo form_open('login/proseslogin'); ?>
                <form id="sign_in" method="POST">
                    <div class="msg">Silahkan Login Terlebih Dulu!</div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row clearfix">
                                <div class="col-sm-12">  
                                    <?php if(isset($pesan)){
                                        echo '<p class="alert alert-danger">';
                                        echo $pesan;  
                                        } ?>
                                </div>
                            </div>
                    </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">mail</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="E-mail" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-indigo waves-effect" type="submit">Masuk</button>
                        </div>
                    </div>
                </form>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>/assets2/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>/assets2/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>/assets2/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url(); ?>/assets2/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>/assets2/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>/assets2/js/pages/examples/sign-in.js"></script>
</body>

</html>