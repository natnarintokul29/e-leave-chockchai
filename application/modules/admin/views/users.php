<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">admin</a></li>
                            <li class="breadcrumb-item active">ผู้ใช้งาน</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Users</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="col-12">
            <div class="card-box table-responsive">
                <table id="datatable_users" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ตำแหน่ง</th>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>ชื่อผู้ใช้</th>
                            <th>วันที่สมัคร</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- end row -->

    </div> <!-- end container-fluid -->

</div> <!-- end content -->



<!-- Modal -->
<div id="btn_edit_user_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ลงทะเบียนเข้าระบบ</h4>
            </div>
            <div class="modal-body">
                <!-- เพื่อเก็บข้อมูลเลข ไอดี  จากปุ่มแก้ไข -->
                <input type="hidden" id="hidden_id">

                <form class="form-horizontal" autocomplete="off" id="update_data_user">

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="">ตำแหน่งงาน</label>
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
                            <label for="">ชื่อ</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="ชื่อภาษาไทย" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="">นามสกุล</label>
                            <input class="form-control" type="text" id="lastname" name="lastname" placeholder="นามสกุลภาษาไทย" required>
                        </div>
                    </div>

                    <div class="form-group row text-center mt-2">
                        <div class="col-12">
                            <button class="btn btn-md btn-block btn-primary waves-effect waves-light" id="btn_update_user" type="submit">บันทึก</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </div>
</div>




<script>
    $(document).ready(function() {
        let url_user = new URL('admin/ctl_user/fetch_data', domain);

        $('#datatable_users').DataTable({
            ajax: {
                url: url_user,
                type: 'get',
                dataType: 'json'
            },

            "createdRow": function(row, data, index) {
                let table_btn_edit_user =
                    `
                <button type="button" class="btn btn-primary btn_edit_user" data-id="${data['ID']}" data-toggle="modal" data-target="#btn_edit_user_modal">แก้ไข</button>
                <button type="button" class="btn btn-danger btn_delete_user" data-id="${data['ID']}">ลบ</button>
                `
                $('td', row).eq(5).html(table_btn_edit_user)
            },

            dom: datatable_dom,
            buttons: datatable_button,
        })


        $(document).on('click', '.btn_edit_user', function() {

            let url_get_user = new URL('admin/ctl_user/get_user?id=' + $(this).attr('data-id'), domain);
            fetch(url_get_user)
                .then(res => res.json())
                .then((resp) => {
                    modal_input_data(resp.data)

                    $("#hidden_id").val($(this).attr('data-id'));
                });
        })

        function modal_input_data(data = []) {

            $(".modal #position").val(data.POSITION)
            $(".modal #name").val(data.NAME)
            $(".modal #lastname").val(data.LASTNAME)
        }

        $(document).on('submit', '#update_data_user', function() {
            let data_hidden_id = $("#hidden_id").val();
            console.log(data_hidden_id)
            let url_update_user = new URL('admin/ctl_user/update_user', domain);

            var data = new FormData();
            data.append('id', data_hidden_id);
            data.append('position', $("#position").val());
            data.append('name', $("#name").val());
            data.append('lastname', $("#lastname").val());

            let option = {
                method: 'POST',
                body: data,
            }
            fetch(url_update_user, option)
                .then(res => res.json())
                .then((resp) => {

                    let table_tr = $('.btn_edit_user[data-id=' + data_hidden_id + ']').parents('tr');

                    table_tr.children('td').eq(0).html(resp.data.position)
                    table_tr.children('td').eq(1).html(resp.data.name)
                    table_tr.children('td').eq(2).html(resp.data.last_name)

                    $('#btn_edit_user_modal').modal('hide')

                })

            return false;
        })

        $(document).on('click', '.btn_delete_user', function() {
            $("#hidden_id").val($(this).attr('data-id'))
            let hidden_id = $("#hidden_id").val();

            let table_tr = $('.btn_edit_user[data-id=' + hidden_id + ']').parents('tr');
            let user_name = table_tr.children('td').eq(1).text()+' '+table_tr.children('td').eq(2).text()

            Swal.fire({
                title: 'ยืนยันการลบ',
                text: "คุณต้องการลบข้อมูลนี้ "+user_name,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#64c5b1',
                cancelButtonColor: '#f96a74',
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.value) {
                    confirm_delete(hidden_id)
                }
            })
        })

        function confirm_delete(id = null) {

            if (id) {
                let url_delete_user = new URL('admin/ctl_user/delete_user', domain);

                var delete_data = new FormData();
                delete_data.append('id', id);
                fetch(url_delete_user, {
                        method: 'POST',
                        body: delete_data
                    })
                    .then(res => res.json())
                    .then((resp) => {
                        if (resp.data.error == 0) {
                            let table_tr = $('.btn_delete_user[data-id=' + id + ']').parents('tr');
                            if (table_tr) {
                                table_tr.remove()
                            }

                            Swal.fire(
                                'สำเร็จ',
                                resp.data.text,
                                'success'
                            )
                        } else {
                            Swal.fire(
                                'ผิดพลาด',
                                resp.data.text,
                                'warning'
                            )
                        }

                        //window.location.reload()
                    });
            }

        }


    })
</script>