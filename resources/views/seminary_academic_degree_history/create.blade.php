@extends('layouts.app')

@section('content')


    <h4 class="section-header">سوابق تحصیلات حوزوی</h4>
    <section class="section-padding">
        <nav>
            <ol class="cd-breadcrumb triangle">
                <li><label>مشخصات متقاضی</label></li>
                <li class="current"><label>سوابق تحصیلات حوزوی</label></li>
                <li><label>سوابق تحصیلات دانشگاهی</label></li>
                <li><label>سوابق آموزشی</label></li>
                <li><label>سوابق پژوهشی</label></li>
                <li><label>سوابق تبلیغی</label></li>
                <li><label>سوابق اشتغال</label></li>
                <li><label>مجوز تدریس دروس معارف</label></li>
                <li><label>مجوز تبلیغ در دانشگاه ها</label></li>
                <li><label>معرفان علمی</label></li>
            </ol>
        </nav>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" id="form" action="{{route('seminary_academic_degree_history.store')}}">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label class="control-label"><strong>پایه تحصیلی حوزوی/درس خارج</strong><i class="text-danger"> *</i></label>
                            <select name="seminary_grade_id" id="seminary_grade_id" class="form-control">
                                <option value="">لطفا آخرین پایه تحصیلی/درس خارج را انتخاب کنید</option>
                                @foreach( $seminaryGrades as $seminaryGrade)
                                    <option value="{{$seminaryGrade->id}}">{{$seminaryGrade->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-12">

                            @foreach($seminaryAcademicDegrees as $seminaryAcademicDegree)
                                <div class="row">

                                    <div class="form-group col-md-2">
                                        <label class="control-label text-center label-height {{$seminaryAcademicDegree->id==1?"display-block":"display-none"}}">
                                            <strong>مقطع تحصیلی</strong><i class="text-danger"> *</i></label>
                                        <input hidden name="seminary_academic_degree_id[]" id="seminary_academic_degree_id" value="{{$seminaryAcademicDegree->id}}"/>

                                        <input name="seminary_academic_degree_name[]" readonly id="average" class="form-control" value="{{$seminaryAcademicDegree->title}}"/>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="control-label text-center label-height {{$seminaryAcademicDegree->id==1?"display-block":"display-none"}}">
                                            <strong>رشته</strong><i class="text-danger"> *</i></label>
                                        <select name="seminary_field_of_study_id[]" id="seminary_field_of_study_id" class="form-control" data-id="{{$seminaryAcademicDegree->id}}">
                                            <option value="">لطفا رشته را انتخاب کنید</option>
                                            @foreach( $seminaryFieldOfStudies as $seminaryFieldOfStudy)
                                                <option value="{{$seminaryFieldOfStudy->id}}">{{$seminaryFieldOfStudy->title}}</option>
                                            @endforeach
                                            <option value="other">سایر</option>
                                        </select>

                                        <input name="seminary_field_of_study_title[]" type="hidden" id="seminary_field_of_study_title{{$seminaryAcademicDegree->id}}" class="form-control other-input-top"/>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label class="control-label text-center label-height {{$seminaryAcademicDegree->id==1?"display-block":"display-none"}}">
                                            <strong>معدل</strong><i class="text-danger"> *</i></label>
                                        <input name="average[]" id="average" class="form-control" type="number" min="10" max="20"/>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="control-label text-center label-height {{$seminaryAcademicDegree->id==1?"display-block":"display-none"}}">
                                            <strong>محل تحصیل</strong><i class="text-danger"> *</i></label>
                                        <select name="training_center_id[]" id="training_center_id" class="form-control" data-id="{{$seminaryAcademicDegree->id}}">
                                            <option value="">لطفا محل تحصیل را انتخاب کنید</option>
                                            @foreach( $trainingCenters as $trainingCenter)
                                                <option value="{{$trainingCenter->id}}">{{$trainingCenter->title}}</option>
                                            @endforeach
                                            <option value="other">سایر</option>
                                        </select>

                                        <input name="training_center_title[]" id="training_center_title{{$seminaryAcademicDegree->id}}" class="form-control other-input-top display-none"/>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label class="control-label text-center label-height {{$seminaryAcademicDegree->id==1?"display-block":"display-none"}}">
                                            <strong>تاریخ شروع</strong><i class="text-danger"> *</i></label>
                                        <input type="text" name="start_text[]" id="start_text{{$seminaryAcademicDegree->id}}"
                                               class="form-control DatePicker-input DatePicker-input-with" placeholder="انتخاب تاریخ"
                                               aria-label="date1" aria-describedby="date1" autocomplete="off">
                                        <input type="hidden" name="start_date[]" id="start_date{{$seminaryAcademicDegree->id}}"
                                               class="form-control" placeholder="Persian Calendar Date"
                                               aria-label="date11" aria-describedby="date11" autocomplete="off">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text cursor-pointer DatePicker-icon sdate"
                                                  id="sdate{{$seminaryAcademicDegree->id}}" data-id="{{$seminaryAcademicDegree->id}}">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="control-label text-center label-height {{$seminaryAcademicDegree->id==1?"display-block":"display-none"}}">
                                            <strong>تاریخ پایان</strong><i class="text-danger"> *</i></label>
                                        <input type="text" name="end_text[]" id="end_text{{$seminaryAcademicDegree->id}}"
                                               class="form-control DatePicker-input DatePicker-input-with" placeholder="انتخاب تاریخ"
                                               aria-label="date2" aria-describedby="date2" autocomplete="off">
                                        <input type="hidden" id="end_date{{$seminaryAcademicDegree->id}}" name="end_date[]"
                                               class="form-control" placeholder="Persian Calendar Date"
                                               aria-label="date12" aria-describedby="date12" autocomplete="off">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text cursor-pointer DatePicker-icon edate"
                                                  id="edate{{$seminaryAcademicDegree->id}}" data-id="{{$seminaryAcademicDegree->id}}">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label class="control-label text-center label-height {{$seminaryAcademicDegree->id==1?"display-block":"display-none"}}">
                                            <strong>مدرک رسمی</strong><i class="text-danger"> *</i></label>
                                        <input type="hidden" name="official_document[]" id="official_document{{$seminaryAcademicDegree->id}}" class="form-control" value="1"/>
                                        <input type="checkbox" name="official_document1[]" id="official_document" class="form-control official_document" checked data-id="{{$seminaryAcademicDegree->id}}"/>
                                    </div>

                                </div>

                            @endforeach

                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit"  value="ثبت" class="btn btn-success col-md-12"/>
                        </div>
                    </div>
                </form>
                <div id="client_error">

                </div>
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
        </div>
    </div>

    <script>
        $(document).ready(function() {



            $(document).on('change', '.official_document', function () {
                var id = $(this).data('id');
                $('#official_document' + id).val(this.checked ? 1 : 0);
            });

            $(document).on('change', '#seminary_field_of_study_id', function () {
                var id = $(this).data('id');
                if ($(this).val()/*find("option:selected").text() === "سایر"*/==='other') {
                    $('#seminary_field_of_study_title' + id).prop("type", "text");/*removeClass('display-none').addClass('display-block');*/
                    //$('#seminary_field_of_study_title' + id).val("");
                } else {
                    $('#seminary_field_of_study_title' + id).prop("type", "hidden");/*.removeClass('display-block').addClass('display-none');*/
                    //$('#seminary_field_of_study_title' + id).val("1");
                }
            });

            $(document).on('change', '#training_center_id', function () {
                var id = $(this).data('id');
                if ($(this).val()/*find("option:selected").text() === "سایر"*/==='other') {
                    $('#training_center_title' + id).removeClass('display-none').addClass('display-block');
                } else {
                    $('#training_center_title' + id).removeClass('display-block').addClass('display-none');
                }
            });


            $('form').on('submit',function () {

                $("#client_error").children().remove();

                var has_empty = false;

                $(this).find('select').each(function () {
                    var id = $(this).data('id');
                    if ($(this).val()/*find("option:selected").text() === "سایر"*/==='other') {
                        switch ($(this).attr('id')) {
                            case "seminary_field_of_study_id":
                                if (!$('#seminary_field_of_study_title' + id).val()) {
                                    $("#client_error").append('<label class="text-danger">لطفا رشته را وارد کنید</label>');
                                    has_empty = true;
                                    return false;
                                }
                                break;
                            case "training_center_id":
                                if (!$('#training_center_title' + id).val()) {
                                    $("#client_error").append('<label class="text-danger">لطفا محل تحصیل را وارد کنید</label>');
                                    has_empty = true;
                                    return false;
                                }
                                break;
                        }
                    }
                });

                if (has_empty) {
                    return false;
                }
            });



            $( ".sdate" ).each(function( i ) {
                var id = $(this).data('id');
                //alert(id);
                $('#sdate'+id).MdPersianDateTimePicker({
                    targetTextSelector: '#start_text'+id,
                    targetDateSelector: '#start_date'+id,
                    enableTimePicker: false,
                    dateFormat: 'yyyy-MM-dd',
                    textFormat: 'yyyy-MM-dd',
                });
            });
            $( ".edate" ).each(function( i ) {
                var id = $(this).data('id');
                //alert(i);
                $('#edate'+id).MdPersianDateTimePicker({
                    targetTextSelector: '#end_text'+id,
                    targetDateSelector: '#end_date'+id,
                    enableTimePicker: false,
                    dateFormat: 'yyyy-MM-dd',
                    textFormat: 'yyyy-MM-dd',
                });
            });

        });
    </script>
@endsection
