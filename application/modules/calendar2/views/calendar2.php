                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                                            <li class="breadcrumb-item active">Calendar</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Calendar</h4>
                                </div>
                            </div>
                        </div>      -->
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-primary btn-block waves-effect mt-2 waves-light">
                                                <i class="fa fa-plus"></i> Create New
                                            </a>
                                            <div id="external-events" class="mt-3">
                                                <br>
                                                <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                                <div class="external-event bg-soft-success text-success" data-class="bg-success">
                                                    <i class="mdi mdi-checkbox-blank-circle mr-1 vertical-middle"></i>New Theme Release
                                                </div>
                                                <div class="external-event bg-soft-info text-info" data-class="bg-info">
                                                    <i class="mdi mdi-checkbox-blank-circle mr-1 vertical-middle"></i>My Event
                                                </div>
                                                <div class="external-event bg-soft-warning text-warning" data-class="bg-warning">
                                                    <i class="mdi mdi-checkbox-blank-circle mr-1 vertical-middle"></i>Meet manager
                                                </div>
                                                <div class="external-event bg-soft-purple text-purple" data-class="bg-purple">
                                                    <i class="mdi mdi-checkbox-blank-circle mr-1 vertical-middle"></i>Create New theme
                                                </div>
                                            </div>

                                            <!-- checkbox -->
                                            <div class="checkbox checkbox-primary mt-4">
                                                <input type="checkbox" id="drop-remove">
                                                <label for="drop-remove">
                                                    Remove after drop
                                                </label>
                                            </div>
                                        </div> <!-- end col-->
                                        <div class="col-lg-9">
                                            <div id="calendar"></div>
                                        </div> <!-- end col -->
                                    </div>  <!-- end row -->
                                </div>

                                <!-- BEGIN MODAL -->
                                <div class="modal fade none-border" id="event-modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Add New Event</h4>
                                            </div>
                                            <div class="modal-body pb-0"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class="modal fade none-border" id="add-category" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Add a category</h4>
                                            </div>
                                            <div class="modal-body pb-0">
                                                <form class="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Category Name</label>
                                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Choose Category Color</label>
                                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                            <option value="success">Success</option>
                                                            <option value="danger">Danger</option>
                                                            <option value="info">Info</option>
                                                            <option value="pink">Pink</option>
                                                            <option value="primary">Primary</option>
                                                            <option value="warning">Warning</option>
                                                            <option value="inverse">Inverse</option>
                                                        </select>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->
                
<script>
    $(document).ready(function() {

        $('#date_start , #date_end').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
        });

        $(document).on('change', '#date_end', function() {
            let date_start = $('#date_start').val()
            let date_end = $(this).val()

            if (date_end < date_start) {
                $(this).datepicker('setDate', new Date(date_start));
            }
        })
        $(document).on('change', '#date_start', function() {
            let date_start = $(this).val()
            let date_end = $('#date_end').val()

            if (date_end < date_start) {
                $('#date_end').datepicker('setDate', new Date(date_start));
            }
        })


        $("#leave").change(function() {

            let val = $(this).val();

            $(".leave").removeAttr('disabled', 'disabled')
            // console.log(val)
            let array_leave = ['4', '3', '5', '6', '7']
            if (array_leave.indexOf(val) != -1) {
                setdefault_fulltime();
            }

        });

    })

    /**
     * 
     * * set default
     * 
     */


    function setdefault_fulltime() {


        $(".leave").val('1').triggerHandler('change')
        // $(".leave").attr('disabled', 'disabled')

    }
    /* select emp change to time_s and time_e */
    $("#leave_type_name").change(function() {
        let val_type = $(this).val();
        switch (val_type) {
            case '1':
                $("#description").attr('required', 'required')
            break;
            case '2':
                $("#description").attr('required', 'required')
            break;
            case '3':
                $("#description").removeAttr('required', 'required')
            break;
            case '4':
                $("#description").attr('required', 'required')
            break;
            case '5':
                $("#description").attr('required', 'required')
            break;
            case '6':
                $("#description").attr('required', 'required')
            break;
        }
        console.log(val_type)
    });
    // .val('3').triggerHandler('change')
    // 

    /* select emp change to time_s and time_e */
    $(".employee_name").change(function() {
        $(".leave").triggerHandler('change')
    });

    $(".leave").change(function() {
        let val = $(this).val();
        $(".list_day").removeClass('d-none')

        $('.employee_name').val();

        console.log($(this).val())

        switch (val) {
            case '4':
                switch ($('.employee_name').val()) {

                    case '1':
                        $("#time_start_hour").val('3')
                        $("#time_end_hour").val('4')

                        break;

                    case '2':
                        $("#time_start_hour").val('1')
                        $("#time_end_hour").val('2')

                        break;

                    case 'default':
                        $("#time_start_hour").val('3')
                        $("#time_end_hour").val('21')
                        break;
                }
        }

        switch (val) {
            case '1':

                switch ($('.employee_name').val()) {

                    case '1':
                        $("#time_start_hour").val('3')
                        $("#time_end_hour").val('21')
                        break;

                    case '2':
                        $("#time_start_hour").val('1')
                        $("#time_end_hour").val('20')
                        break;

                    case 'default':
                        $("#time_start_hour").val('3')
                        $("#time_end_hour").val('21')
                        break;
                }

                break;

            case '2':

                switch ($('.employee_name').val()) {

                    case '1':
                        $("#time_start_hour").val('3')
                        $("#time_end_hour").val('11')
                        break;

                    case '2':
                        $("#time_start_hour").val('1')
                        $("#time_end_hour").val('11')
                        break;

                    case 'default':
                        $("#time_start_hour").val('3')
                        $("#time_end_hour").val('11')
                        break;
                }
                break;

            case '3':

                switch ($('.employee_name').val()) {

                    case '1':
                        $("#time_start_hour").val('12')
                        $("#time_end_hour").val('21')
                        break;

                    case '2':
                        $("#time_start_hour").val('12')
                        $("#time_end_hour").val('20')
                        break;

                    case 'default':
                        $("#time_start_hour").val('12')
                        $("#time_end_hour").val('21')
                        break;
                }
                break;
        }


        // ปิดตัวเลือกเวลา  ***4=รายชั่วโมง
        // $("#time_start_hour,#time_end_hour").attr('disabled', 'disabled')
        if (val != '4') {
            $("#time_start_hour,#time_end_hour").attr('disabled', 'disabled')
        } else {
            $("#time_start_hour").removeAttr('disabled', 'disabled')
        }

    })

    /* set select ลาแบบ รายชั่วโมง=4 */
    $("#time_start_hour").change(function() {
        $("#time_end_hour").removeAttr('disabled', 'disabled')
        $("#time_end_hour").find('option').removeClass('d-none');

        let val = $(this).val()
        // console.log(val)
        let next = parseInt(val) + 1;
        console.log(next)
        for (var i = 1; i <= val; i++) {

            $("#time_end_hour").find('option[value=' + i + ']').addClass('d-none');
        }

        // $("#time_end_hour").find('option[value=' + val + ']').removeClass('d-none');

        $("#time_end_hour").val(next)
    })

    // * domain = e_navbar.php
    async function get_data() {
        let url_calendar = new URL('calendar/event_calendars/get_data', domain);
        const response = await fetch(url_calendar, {})

        return response.json()
    }
    // test();

    // function test() {
    //     console.log("test");
    // }

    get_data()
        .then((data) => {
            // JSON data parsed by `data.json()` call

            var set_event = [];
            $.each(data.result, function(key, value) {
                let class_name = '';
                if (value.LEAVE_ID == 1) {
                    class_name = 'bg-primary';
                } else if (value.LEAVE_ID == 2) {
                    class_name = 'bg-warning';
                } else if (value.LEAVE_ID == 3) {
                    class_name = 'bg-danger';
                }else if (value.LEAVE_ID == 4) {
                    class_name = 'bg-info';
                }else if (value.LEAVE_ID == 5) {
                    class_name = 'bg-pink';
                }else if (value.LEAVE_ID == 6) {
                    class_name = 'bg-purple';
                }

                set_event.push({
                    id: value.ID,
                    emp: value.EMP_ID,
                    leave: value.LEAVE_ID,
                    title: value.DESCRIPTION,
                    start: value.DATE_START,
                    end: value.DATE_END,
                    l_n: value.LEAVE_TYPE_ID,
                    t_s: value.TIME_S_ID,
                    t_e: value.TIME_E_ID,
                    end_less: value.DATE_END_LESS,
                    image: value.IMAGE,
                    c_id: value.CALENDAR_ID,
                    className: class_name
                    // color: '#0dcaf0',
                })


            })
            //console.log(set_event[0].title)
            // console.log(set_event)

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: set_event,

                eventClick: function(event) {

                    if (event.id) {

                        let html_img = ''
                        event.image.map(function(item, key) {
                            html_img += `<div class='card '>
                                <button type='button' class='btn-close btn-delete-item align-self-end' data-id='${item.id}'></button>
                                <img class='img-thumbnail' src='${item.name}' >
                                </div>`
                            // $('#form_leave').find('#file_img').append(html_img);
                        })


                        $('#form_leave').modal('show');

                        $('#form_leave').find('#user-id').val(event.id);
                        $('#form_leave').find('#leave_type_name').val(event.leave);
                        $('#form_leave').find('#description').val(event.title);
                        $('#form_leave').find('#date_start').datepicker('setDate', event.start._i);
                        $('#form_leave').find('#date_end').datepicker('setDate', event.end_less);
                        $('#form_leave').find('.employee_name').val(event.emp).triggerHandler('change');
                        $('#form_leave').find('#leave').val(event.l_n);

                        $('#time_start_hour option[data-time="' + event.t_s + '"]').prop('selected', true);
                        $('#form_leave').find('#time_end_hour option[data-time="' + event.t_e + '"]').prop('selected', true);

                        $('#form_leave').find('#file_img_data').html(html_img);


                        // $('#form_leave').find('#time_end_hour').val(event.t_e);

                    }
                }

            });
        });

    $("#delete-event").click(function() {
        // let item2 = 'item';
        // swal_delete(iem2)
        swal_delete('item')
        return false;
        // alert('คุณต้องการลบข้อมูลนี้ใช่ไหม !')
    })
    $(document).on('click', '.btn-delete-item', function() {

        swal_delete('image', $(this).attr('data-id'))
    })

    function swal_delete(item, id = false) {

        Swal.fire({
            title: 'โปรดยืนยัน?',
            text: "คุณต้องการลบข้อมูลนี้!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#64c5b1',
            cancelButtonColor: '#d33',
            cancelButtonText: 'ยกเลิก',
            confirmButtonText: 'ใช่ ต้องการลบ'
        }).then((result) => {
            if (result.value) {

                // callback
                if (item == 'item') {
                    item_delete()
                }

                if (item == 'image') {
                    image_delete(id)
                }

            }

        })
    }

    function image_delete(id) {

        let delete_data = new FormData();

        delete_data.append("id", id);



        fetch('event_calendars/delete_image_data', {
                method: 'POST',
                body: delete_data
            })
            .then(res => res.json())
            .then((resp) => {
                if (resp.status) {
                    swal.fire(
                        "ลบเสร็จแล้ว",
                        "",
                        "success"
                    )

                    $('.btn-delete-item[data-id=' + id + ']').parent('div').remove()
                }

            });
    }

    function item_delete() {
        let delete_data = new FormData();

        delete_data.append("user_id_up", $("#user-id").val());
        delete_data.append("leave_type_name_up", $("#leave_type_name").val());
        delete_data.append("description_up", $("#description").val());
        delete_data.append("date_start_up", $("#date_start").val());
        delete_data.append("date_end_up", $("#date_end").val());
        delete_data.append("emp_name_up", $("#emp_name").val());
        delete_data.append("leave_up", $("#leave").val());
        delete_data.append("time_start_hour_up", $("#time_start_hour").val());
        delete_data.append("time_end_hour_up", $("#time_end_hour").val());

        fetch('event_calendars/delete_data', {
                method: 'POST',
                body: delete_data
            })
            .then(res => res.json())
            .then((resp) => {


                window.location.reload()
            });
    }


    $("#btn-leave-modal").click(function() {
        $("#method_edit").val('')
        // $("#form_valid_leave").trigger("reset");
    });

    $('#form_leave').on('hidden.bs.modal', function(e) {

        $('#file_img').html('')
        $("#form_valid_leave").trigger("reset");
    })




    $("#save-event").click(function() {

        if ($("#method_edit").val() == "edit") {
            let update_data = new FormData();

            update_data.append("user_id_up", $("#user-id").val());
            update_data.append("leave_type_name_up", $("#leave_type_name").val());
            update_data.append("description_up", $("#description").val());
            update_data.append("date_start_up", $("#date_start").val());
            update_data.append("date_end_up", $("#date_end").val());
            update_data.append("emp_name_up", $("#emp_name").val());
            update_data.append("leave_up", $("#leave").val());
            update_data.append("time_start_hour_up", $("#time_start_hour").val());
            update_data.append("time_end_hour_up", $("#time_end_hour").val());
            var totalfiles = document.getElementById('files').files.length;
            for (var index = 0; index < totalfiles; index++) {
                update_data.append("files[]", $("#files")[0].files[index]);
            }



            fetch('event_calendars/update_data', {
                    method: 'POST',
                    body: update_data
                })
                .then(res => res.json())
                .then((resp) => {

                    var events = [];

                    $.each(resp.query, function(key, value) {
                        //  console.log(key + '=====' + value.DESCRIPTION);

                        events = [{
                            id: value.ID,
                            emp: value.EMP_ID,
                            leave: value.LEAVE_ID,
                            title: value.DESCRIPTION,
                            start: value.DATE_START,
                            end: value.DATE_END,
                            l_n: value.LEAVE_TYPE_ID,
                            t_s: value.TIME_S_ID,
                            t_e: value.TIME_E_ID,
                            end_less: value.DATE_END_LESS,
                            image: value.IMAGE,
                            c_id: value.CALENDAR_ID,
                            // start: value.start + 'T09:00:00',
                            // end: `${value.end}T00:00:00`
                        }]
                        console.log(events)
                        // $('#calendar').fullCalendar('updateEvent', events);
                        $('#calendar').fullCalendar('removeEvents', value.ID);
                        $('#calendar').fullCalendar('addEventSource', events);

                        $('.modal').modal('hide')
                        // $('#calendar').fullCalendar('refetchEvents');
                    });

                    //window.location.reload()
                });

        } else {


            emp_name = $("#emp_name").val(),
                leave_type_name = $("#leave_type_name").val(),
                description = $("#description").val(),
                date_start = $("#date_start").val(),
                date_end = $("#date_end").val(),
                leave = $("#leave").val(),
                time_start_hour = $("#time_start_hour").val(),
                time_end_hour = $("#time_end_hour").val()

            if (emp_name == '' || leave == '' || 
                date_start == '' || date_end == '' || leave_type_name == '' ||
                time_start_hour == '' || time_end_hour == '') {
                alert('กรุณากรอกข้อมูลให้ครบ')
                //description == '' ||

            } else {


                let data = new FormData();
                data.append("emp_name", $("#emp_name").val());
                data.append("leave_type_name", $("#leave_type_name").val());
                data.append("description", $("#description").val());
                data.append("date_start", $("#date_start").val());
                data.append("date_end", $("#date_end").val());
                data.append("leave", $("#leave").val());
                data.append("time_start_hour", $("#time_start_hour").val());
                data.append("time_end_hour", $("#time_end_hour").val());


                var totalfiles = document.getElementById('files').files.length;
                for (var index = 0; index < totalfiles; index++) {
                    data.append("files[]", $("#files")[0].files[index]);
                }

                // console.log(totalfiles)
                // console.log($("#files"))
                // data.append("emp_name", 2);
                // data.append("leave_type_name", 1);
                // data.append("description", "lll11111");
                // data.append("date_start", "2022-12-16");
                // data.append("date_end", "2022-12-16");
                // data.append("leave", 4);
                // data.append("time_start_hour", 3);
                // data.append("time_end_hour", 5);

                fetch('event_calendars/insert_data', { //insert_data ชื่อ controller
                        method: 'POST',
                        body: data //ส่งข้อมูลที่ชื่อ data ไปยัง controller ที่ชื่อ Eleave ในชื่อ function insert_data
                    })
                    .then(res => res.json())
                    .then((resp) => {
                        // console.log(resp);
                        // console.log(resp.status);
                        // alert(resp.status + resp.id); //เข้าถึงข้อมูลแบบ json  jsonผลลัพธ์จะเป็นสตริง ไม่สามารถเข้าถึงข้อมูลแบบ arrayได้
                        // window.location.reload()
                        var events = [];

                        $.each(resp.query, function(key, value) {
                            //  console.log(key + '=====' + value.DESCRIPTION);

                            events = [{
                                id: value.ID,
                                emp: value.EMP_ID,
                                leave: value.LEAVE_ID,
                                title: value.DESCRIPTION,
                                start: value.DATE_START,
                                end: value.DATE_END,
                                l_n: value.LEAVE_TYPE_ID,
                                t_s: value.TIME_S_ID,
                                t_e: value.TIME_E_ID,
                                end_less: value.DATE_END_LESS,
                                image: value.IMAGE,
                                c_id: value.CALENDAR_ID,
                                // start: value.start + 'T09:00:00',
                                // end: `${value.end}T00:00:00`
                            }]
                            $('#calendar').fullCalendar('addEventSource', events);
                        });
                        $('.modal').modal('hide')
                        window.location.reload()
                    })
            }

        }

    })


    //  image 
    $(document).on('change', '#files', function(event) {
        let image_file = $(this);
        var length = (image_file[0].files.length - 1);
        var html = "";
        for (var i = 0; i <= length; i++) {

            if (image_file[0].files[i]) {

                //  check extension
                let fileName = image_file[0].files[i].name,
                    idxDot = fileName.lastIndexOf(".") + 1,
                    extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
                if (extFile == "jpg" || extFile == "jpeg" || extFile == "png") {
                    //TO DO
                    html += '<img id="img-' + i + '" src="' + window.URL.createObjectURL(image_file[0].files[i]) + '" class="img">';
                    $('#file_img').html(html);
                } else {
                    //  error
                    swal.fire('ข้อมูลไม่ถูกต้อง', 'บันทึกเฉพาะไฟล์รูปภาพ', 'warning');
                    clearImage(); // Reset the input so no files are uploaded

                    return false;
                }
            }
        }
    });



    function formatDate(input) { // แปลงค่า format carlendar  dd/mm/yyyy  เป็น  yyyy/mm/dd
        var datePart = input.match(/\d+/g),
            day = datePart[0],
            month = datePart[1],
            year = datePart[2];
        hour = datePart[3];
        minute = datePart[4];
        //   console.log(datePart)

        return year + '/' + month + '/' + day + ' ' + hour + ':' + minute;
    }

    function formatDate_database(input) { // แปลงค่า format carlendar  dd/mm/yyyy  เป็น  yyyy/mm/dd
        var datePart = input.match(/\d+/g),
            day = datePart[0],
            month = datePart[1],
            year = datePart[2];
        hour = datePart[3];
        minute = datePart[4];

        return year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':00';
    }
</script>