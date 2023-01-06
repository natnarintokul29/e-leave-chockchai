<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('asset/images/favicon.ico') ?>">

    <!-- App css -->
    <link href="<?= base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="<?= base_url('asset/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('asset/css/app.min.css') ?>" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body>
    <div class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">
        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="fas fa-home h2 text-white"></i></a>
        </div>

        <div class="account-pages w-100 mt-5 mb-5">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mb-0">

                            <div class="card-body p-4">

                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <div class="text-center">
                                            <a href="index.html">
                                                <img src="<?= base_url('asset/images/logo-dark.png') ?>" alt="" height="30">
                                            </a>
                                        </div>
                                        <h5 class="text-uppercase mb-1 mt-4">Register</h5>
                                        <p class="mb-0">Get access to our admin panel</p>
                                    </div>

                                    <div class="account-content mt-4">
                                        <form class="form-horizontal" autocomplete="off" id="login" >

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="">9</label>
                                                    <select name="position" id="position" class="form-control position" required>
                                                        <option value="">ระบุตำแหน่งงาน</option>
                                                        <option value="programmer">programmer</option>
                                                        <option value="burger">burger</option>
                                                        <option value="warehouse">warehouse</option>
                                                        <option value="crmline">crmline</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="text" id="name_eng" name="name_eng"  placeholder="ชื่ออังกฤษ">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="text" id="lastname_eng" name="lastname_eng"  placeholder="นามสกุลอังกฤษ">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="text" id="name_th" name="name_th"  placeholder="ชื่อไทย">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="text" id="lastname_th" name="lastname_th" placeholder="นามสกุลไทย">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="">llll</label>
                                                    <input type="text" id="input_username" name="input_username" class="form-control" placeholder="ชื่อผู้ใช้" >
                                                   
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your password?</small></a>
                                                    <input type="password" id="input_password" name="input_password" class="form-control"  placeholder="รหัสผ่าน">
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group row text-center mt-2">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" id="btn_register" type="submit">Sign Up Free</button>
                                                </div>
                                            </div>

                                        </form>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="text-center">
                                                    <button type="button" class="btn mr-1 btn-facebook waves-effect waves-light">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </button>
                                                    <button type="button" class="btn mr-1 btn-googleplus waves-effect waves-light">
                                                        <i class="fab fa-google"></i>
                                                    </button>
                                                    <button type="button" class="btn mr-1 btn-twitter waves-effect waves-light">
                                                        <i class="fab fa-twitter"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 pt-2">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted">Already have an account? <a href="page-login.html" class="text-dark ml-1"><b>Sign In</b></a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        // url
        let domain = window.location.protocol+'//'+window.location.hostname+'/'+window.location.pathname.split('/')[1]+'/'

        $(document).ready(function() {

            $(document).on('submit','#login',function(){
                
                register();

                return false;
            })


            function register() {

                let url = new URL('login/ctl_login/insert_data_staff',domain)        

                let data = new FormData();
                data.append("data",$('form#login').serialize())

                fetch(url, {
                        method: 'POST',
                        body: data
                    })
                    .then(res => res.json())
                    .then((resp) => {
                        console.log(resp)
                    });
            }
            



        })
    </script>


</body>

</html>