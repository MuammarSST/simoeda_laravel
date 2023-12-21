<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title> SIMOEDA
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" integrity="sha256-aUL5sUzmON2yonFVjFCojGULVNIOaPxlH648oUtA/ng=" crossorigin="anonymous" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />

</head>
<body class="container-fluid" style="background-image: url('../assets/img/bappeda.jpg');background-size: cover;" >

    <div class="wrapper ">

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>

                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card" style="opacity: 0.8;">
                                <div class="card-header card-header-success" style="text-align: center;">
                                    <h4 class="card-title">Login</h4>
                                    <p class="card-category">Silahkan Masukan Username dan Password</p>
                                </div>
                                <div class="card-body">

                                    <form method="POST" action="../proses/cek_login.php">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Username</label>
                                                    <input type="text" class="form-control" name="username" required />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Password</label>
                                                    <input type="password" class="form-control" name="password" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Silahkan Pilih Tahunan :</label>
                                            <select id="id_tahun" name="id_tahun" class="form-control" required></select>
                                            @foreach($data_tahun as $data)
                                            <option value="{{ $$data->id_tahun }}">{{ $$data->tahun }}</option>
                                            @endforeach
                                        </div>

                                </div>
                                <button type="submit" class="btn btn-success pull-right"><i class="fa fa-key"></i> Login</button>
                                <div class="clearfix"></div>
                               

                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
