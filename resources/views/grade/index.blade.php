@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')

        <style>
            .add-icon-btn {
                font-size: 22px;
                color: #007bff;
            }
            table {border: 1px solid #ddd;}
            .operation a:hover {text-decoration: none;}
            .operation a i {font-size: 16px;margin-left: 10px;}
            .operation a i.delete {color: #F70000}
            .operation a i.edit {color: #00ad02}
            .operation a i:hover {color: #ffc107}
        </style>

        <div id="index">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center professor_list_title">لیست مقاطع</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">

                    <div id="message">
                        @if(\Session::has('success'))
                            <div class="alert alert-success">{{ \Session::get('success') }}</div>
                        @endif

                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="text-danger">
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                    </div>

                    <table class="table float-right">
                        <thead>
                        <tr>
                            <th>
                                نام مقطع
                            </th>
                            <th class="text-left operation">
                                @can('add_grade')
                                    <a id="create-btn">
                                        <i class="fas fa-plus-circle add-icon-btn"></i>
                                    </a>
                                @endcan
                            </th>
                        </tr>
                        </thead>
                        <div>
                            {{csrf_field()}}

                            <tr id="create-form" class="display-none">
                                <td>
                                    <input class="form-control" id="title" name="title" autocomplete="off"/>
                                </td>
                                <td>
                                    <button id="add" class="btn btn-success col-md-12">ثبت</button>
                                </td>
                            </tr>

                        </div>
                        <tbody id="list">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function(){

                $('#create-btn').click(function () {
                    $('#create-form').show(300);
                });

                $(document).on('click', '.edit', function(){
                    var id = $(this).data("id");

                    $('#column_name_'+id).attr('contenteditable','true');
                    $('#column_name_'+id).focus();
                    $('.operation_'+ id +' a').hide(300);
                    $('.operation_'+ id +' button').show(300);

                });

                fetch_data();

                function fetch_data() {
                    $.ajax({
                        url: "{{route('grade.FetchData')}}",
                        dataType:"json",
                        method:"get",
                        success:function(data)
                        {
                            var html = '';

                            for(var count=0; count < data.length; count++)
                            {
                                html += '<tr>';
                                html += '<td id="column_name_'+data[count].id+'" data-id="'+data[count].id+'">'+data[count].title +' </td>';
                                html += '<td class="text-left operation operation_'+data[count].id+'">';
                                @can('delete_grade')
                                    html += '<a> <i class="fas fa-times delete" data-id="'+data[count].id+'"></i> </a>';
                                @endcan
                                @can('edit_grade')
                                    html += '<a> <i class="fas fa-edit edit" data-id="'+data[count].id+'"></i> </a>';
                                @endcan
                                html += '<button class="btn btn-primary btn_update display-none" data-id="'+data[count].id+'">ویرایش</button>';
                                html += '</td>';
                                html += '</tr>';
                            }
                            $('#list').html(html);
                        }
                    });
                }

                var _token = $('input[name="_token"]').val();

                $(document).on('click', '#add', function(){
                    var title = $('#title').val();
                    if(title != '')
                    {
                        $.ajax({
                            url: "{{route('grade.store')}}",
                            method:"POST",
                            data:{title:title,  _token:_token},
                            success:function(data)
                            {
                                $('#message').html(data);
                                fetch_data();
                                close_alert();
                                $('#title').val('');
                                $('#create-form').hide(2000);

                            }
                        });
                    }
                    else
                    {
                        $('#message').html("<div class='alert alert-danger'>Both Fields are required</div>");
                    }
                });

                $(document).on('click', '.btn_update', function(){

                    var id = $(this).data("id");
                    var title = $('#column_name_'+id).text();

                    if(title != '')
                    {
                        $.ajax({
                            url:"{{ route('grade.UpdateData') }}",
                            method:"POST",
                            data:{title:title, id:id, _token:_token},
                            success:function(data)
                            {
                                $('#message').html(data);
                                close_alert()
                            }
                        })
                    }
                    else
                        $('#message').html("<div class='alert alert-danger'>فیلد عنوان نمی تواند خالی باشد.</div>");

                    $('#column_name_'+id).attr('contenteditable','false');
                    $('#column_name_'+id).blur();
                    $('.operation_'+ id +' a').show(300);
                    $('.operation_'+ id +' button').hide(300);
                });

                $(document).on('click', '.delete', function(){

                    var id = $(this).data("id");

                    if(confirm("آیا می خواهید این مورد را حذف کنید؟"))
                    {
                        $.ajax({
                            url:'{{ route('grade.DeleteData') }}',
                            method:"POST",
                            data:{id:id, _token:_token},
                            success:function(data)
                            {
                                $('#message').html(data);
                                fetch_data();
                                close_alert()
                            }
                        });
                    }
                });

                function close_alert() {
                    window.setTimeout(function () {
                        $(".alert").fadeTo(1000, 0).slideUp(1000, function () {
                            $(this).remove();
                        });
                    }, 3000);
                }

            });
        </script>

    @endsection
@endcan
