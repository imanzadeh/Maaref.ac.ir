@can('users_manage')
@extends('layouts.DashboardLayout')

@section('content')
    <style>
        input, select {height: 30px !important;padding: 0 10px !important}
        .form-group {margin-bottom: 10px;}
    </style>
    <div class="container">
        {{--<div class="row">
            <div class="col-md-12">
                <h3 class="text-center professor_list_title">لیست اساتید هیأت علمی </h3>
            </div>
        </div>--}}
        <div class="row">
            <div class="col-md-8 offset-2 search_div fadein" id="menu">
                <section class="cd-intro">
                    <div class="cd-intro-content mask-2">
                        <div class="content-wrapper">
                            <h3 class="search_title">جستجوی اعضای هیأت علمی براساس:</h3>
                            <div>
                                <div class="form-group">
                                    {{csrf_field()}}
                                    <select class="form-control">
                                        <option value="" data-default>لطفا دانشکده را انتخاب کنید</option>
                                        <option>دانشکده مطالعات تاریخ و تمدن اسلامی </option>
                                        <option>دانشکده مطالعات انقلاب اسلامی</option>
                                        <option>دانشکده مطالعات اسلامی</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="group" id="group" class="form-control">
                                        <option value="" selected>لطفا گروه آموزشی را انتخاب کنید</option>
                                        @foreach($groups as $group)
                                            <option value="{{$group->id}}">گروه آموزشی  {{ $group->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="نام خانوادگی" aria-label="نام خانوادگی" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="input-group-text submit_btn" id="basic-addon2"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <div class="row">
                @foreach($professors as $pro)

                    <div class="col-lg-6 col-md-6">
                        <a href="{{ route('management.professor_edit_resumes', [$pro->id, 0]) }}">
                            <div class="row professor_div">
                                <div class="col-lg-5 col-5 text-center">
                                    <img src="/images/UsersPic/{{$pro->pic}}"
                                         class="professor_pic img-responsive">
                                </div>
                                <div class="col-lg-7 col-7" style="padding: 0">
                                    <label class="professor_name"> {{$pro->FirstName . " ". $pro->LastName}} </label>

                                    <label class="professor_email">  {{$pro->email}} </label>
                                    <label> <strong>گروه آموزشی: </strong> {{$pro->professor->getGroup($pro->professor->group_id)->title}} </label>
                                    <label> {{$pro->professor->getLevel($pro->professor->level_id)}} </label>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            <div class="col-lg-6 col-md-6">
                <a href="{{ route('management.Add_Professor_Form') }}">
                    <div class="row professor_div">
                        <div class="col-lg-5 col-5 text-center">
                            <img src="/images/UsersPic/plus.png" class="professor_pic img-responsive" style="background: #212529;">
                        </div>
                    </div>
                </a>
            </div>
            {{--</table>--}}
        </div>
    </div>
    <script>
        $('.submit_btn').click(function () {
            var group = $('#group').val();
            var lastname = $('#lastname').val();

            if (group == '')
                group = null;
            if (lastname == '')
                lastname = null;

            $.ajax({
                url: "/ProfessorsSearch/" + group + "/" + lastname,
                dataType:"json",
                method:"get",
                success:function(data)
                {
                    var html = '';
                    for(var count=0; count < data.length; count++)
                    {
                        html += '<div class="col-lg-4 col-md-6">';
                        html += '<a href="ProfessorResume/' + data[count].id + '" class="js-trigger-transition">';
                        html += '<div class="row professor_div">';
                        html += '<div class="col-lg-5 col-5 text-center">';
                        html += '<img src="{{ URL::asset('images') }}/UsersPic/'+data[count].pic+'" class="professor_pic img-responsive">';
                        html += '</div>';
                        html += '<div class="col-lg-7 col-7" style="padding: 0">';
                        html += '<label class="professor_name">' + data[count].FirstName + " "+ data[count].LastName + '</label>';

                        html += '<label class="professor_email">' + data[count].email +'</label>';
                        html += '<label> <strong>گروه آموزشی: </strong> '+ data[count].group +' </label>';
                        html += '<label> '+ data[count].level +' </label>';
                        html += '</div>';
                        html += '</div>';
                        html += '</a>';
                        html += '</div>';
                    }
                    $('#ProfessorsList').html(html);
                }
            });
        });
    </script>
@endsection
@endcan
