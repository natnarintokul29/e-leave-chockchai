<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ลงทะเบียน</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="<?= base_url('asset/images/favicon.ico') ?>"> -->
    <link rel="stylesheet" href="<?= base_url('asset/libs/select2/select2.min.css'); ?>" type="text/css" />

    <!-- App css -->
    <link href="<?= base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="<?= base_url('asset/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('asset/css/app.min.css') ?>" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body>
    <div class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">
        <div class="home-btn d-none d-sm-block">
            <a href="<?= site_url('login/ctl_login') ?>" class="h2 text-white">เข้าระบบ</a>
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
                                            <!-- <a href="index.html">
                                                <img src="<?= base_url('asset/images/logo-dark.png') ?>" alt="" height="30">
                                            </a> -->
                                        </div>
                                        <h5 class="text-uppercase mb-1 mt-4 text-center">ลงทะเบียนเข้าระบบ</h5>
                                    </div>

                                    <div class="account-content mt-4">
                                        <form class="form-horizontal" autocomplete="off" id="login">

                                            <!-- <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="">ตำแหน่งงาน</label>
                                                    <select name="position" id="position" class="form-control position" required>
                                                        <option value="">ระบุตำแหน่งงาน</option>
                                                        <option value="programmer">programmer</option>
                                                        <option value="burger">burger</option>
                                                        <option value="warehouse">warehouse</option>
                                                        <option value="crmline">crmline</option>
                                                        <option value="admin">admin</option>
                                                    </select>
                                                </div>
                                            </div> -->

                                            <!-- <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="">ลักษณะงาน</label>
                                                    <select name="charactor" id="position" class="form-control position" required>
                                                        <option value="">ระบุลักษณะงาน</option>
                                                        <option value="แม่บ้าน">แม่บ้าน</option>
                                                        <option value="พนักงานออฟฟิศ">พนักงานออฟฟิศ</option>
                                                        <option value="พนักงานบริการ">พนักงานบริการ</option>
                                                        <option value="crmline">crmline</option>
                                                        <option value="admin">admin</option>
                                                    </select>
                                                </div>
                                            </div> -->

                                            <div class="col-lg-12">

                                                <div class="card-box">
                                                    <h4 class="header-title">Select2</h4>

                                                    <select class="form-control select2" data-toggle="select2" name="empid">
                                                        <option>Select</option>
                                                        <?php
                                                        foreach ($register as $data) {
                                                        ?>
                                                            <option value="<?= $data->ID; ?>"><?= $data->NAME ." ". $data->LASTNAME; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="">ชื่อ</label>
                                                    <input class="form-control" type="text" id="name" name="name" placeholder="ชื่อภาษาไทย" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="">นามสกุล</label>
                                                    <input class="form-control" type="text" id="lastname" name="lastname" placeholder="นามสกุลภาษาไทย" required>
                                                </div>
                                            </div> -->

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="">ชื่อผู้ใช้</label>
                                                    <input type="text" id="input_username" name="input_username" class="form-control" placeholder="ชื่อผู้ใช้" required>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="">รหัสผ่าน</label>
                                                    <input type="password" id="input_password" name="input_password" class="form-control" placeholder="รหัสผ่าน" required>

                                                </div>
                                            </div>

                                            <div class="form-group row text-center mt-2">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" id="btn_register" type="submit">ลงทะเบียน</button>
                                                </div>
                                            </div>

                                        </form>
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

    <script src="<?= base_url(); ?>asset/libs/select2/select2.min.js"></script>
    <!-- Sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // url
        let domain = window.location.protocol + '//' + window.location.hostname + '/' + window.location.pathname.split('/')[1] + '/'

        $(document).ready(function() {
            $(document).on('submit', '#login', function() {

                register();

                return false;
            })

            $('[data-toggle=select2]').select2();

            function register() {
                //serializeArray() สามารถส่งข้อมูล fromไปพร้อมกัน โดยไม่ต้องมาใส่ value ใน append ที่ละตัว
                var dataArray = $("#login").serializeArray(),
                    len = dataArray.length,
                    dataObj = {};
                //length ให้นับข้อมูลใน dataArray
                // console.log(dataArray);return false;

                let url = new URL('register/ctl_register/insert_data_staff', domain);

                let data = new FormData();
                for (i = 0; i < len; i++) {
                    data.append(dataArray[i].name, dataArray[i].value);
                }

                fetch(url, {
                        method: 'POST',
                        body: data
                    })
                    .then(res => res.json())
                    .then((resp) => {
                        if (resp.error == 1) {
                            swal.fire('ผิดพลาด', resp.txt, 'warning')
                        } else {
                            // swal.fire('สำเร็จ', resp.txt, 'success')

                            // window.location.reload();

                            let timerInterval
                            Swal.fire({
                                title: 'สำเร็จ',
                                html: resp.txt,
                                timer: 2000,
                                timerProgressBar: true,
                                didOpen: () => {
                                    Swal.showLoading()
                                    // const b = Swal.getHtmlContainer().querySelector('b')
                                    // timerInterval = setInterval(() => {
                                    //     b.textContent = Swal.getTimerLeft()
                                    // }, 100)
                                },
                                willClose: () => {
                                    // clearInterval(timerInterval)
                                }
                            }).then((result) => {
                                /* Read more about handling dismissals below */
                                // if (result.dismiss === Swal.DismissReason.timer) {
                                // }
                                window.location.reload();
                            })
                        }


                    });
            }




        });
    </script>


</body>

</html>