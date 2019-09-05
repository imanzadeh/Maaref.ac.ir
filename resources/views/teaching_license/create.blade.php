@extends('layouts.app')
@section('content')
    <h4 class="section-header">مجوز تدریس دروس معارف</h4>
    <section class="section-padding">
        <nav>
            <ol class="cd-breadcrumb triangle">
                <li><label>مشخصات متقاضی</label></li>
                <li><label>سوابق تحصیلات حوزوی</label></li>
                <li><label>سوابق تحصیلات دانشگاهی</label></li>
                <li><label>سوابق آموزشی</label></li>
                <li><label>سوابق پژوهشی</label></li>
                <li><label>سوابق تبلیغی</label></li>
                <li><label>سوابق اشتغال</label></li>
                <li class="current"><label>مجوز تدریس دروس معارف</label></li>
                <li><label>مجوز تبلیغ در دانشگاه ها</label></li>
                <li><label>معرفان علمی</label></li>
            </ol>
        </nav>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form method="post" action="{{route('teaching_license.store')}}">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-md-6">
                            <input type="hidden" value="1" name="row_count" id="row_count"/>
                            <p>
                                <a class="btn btn-primary" id="new_row" >سطر جدید</a>
                            </p>
                        </div>
                        <div id="rows">
                            <div class="row" id="row1">
                                <div class="form-group col-md-4">
                                    <label class="control-label text-center label-height "><strong>عنوان درس</strong><i class="text-danger"> *</i></label>
                                    <select name="lesson_id[]" id="lesson_id1"
                                            class="form-control lesson" data-id="1">
                                        <option value="">لطفا عنوان درس را انتخاب کنید</option>
                                        @foreach($lessons as $lesson)
                                            <option value="{{$lesson->id}}">{{$lesson->title}}</option>
                                        @endforeach
                                        <option value="other">سایر</option>
                                    </select>
                                    <input type="hidden" name="lesson_title[]" id="lesson_title1"
                                           class="form-control other-input-top"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="control-label text-center label-height "><strong>شماره مجوز</strong><i class="text-danger"> *</i></label>
                                    <input name="license_number[]" id="license_number" class="form-control"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="control-label text-center label-height "><strong>تاریخ صدور</strong><i class="text-danger"> *</i></label>
                                    <input type="text" name="issue_text[]" id="issue_text1"
                                           class="form-control DatePicker-input" placeholder="انتخاب تاریخ"
                                           aria-label="date1" aria-describedby="date1" autocomplete="off">
                                    <input type="hidden" name="issue_date[]" id="issue_date1"
                                           class="form-control" placeholder="Persian Calendar Date"
                                           aria-label="date11" aria-describedby="date11" autocomplete="off">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text cursor-pointer DatePicker-icon issue-date" id="idate1" data-id="1">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                    </div>
                                </div>
                            </div>
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

            $('#idate1').MdPersianDateTimePicker({
                targetTextSelector: '#issue_text1',
                targetDateSelector: '#issue_date1',
                enableTimePicker: false,
                dateFormat: 'yyyy-MM-dd',
                textFormat: 'yyyy-MM-dd ',
            });

            $("#new_row").click(function () {
                var val=$("#row_count").val();
                val++;


                $("#row1").clone().attr('id',"row"+val).appendTo("#rows");

                $("#row"+val+" label").addClass('display-none');//غیر فعال کردن عناوین در سطر دوم

                $("#row"+val+" .lesson").attr('data-id',val);
                $("#row"+val+" #lesson_title1").attr('id',"lesson_title"+val);

                $("#row"+val+" #lesson_title" + val).prop("type", "hidden");

                $("#row"+val+" #issue_text1").attr('id',"issue_text"+val);
                $("#row"+val+" #issue_date1").attr('id',"issue_date"+val);
                $("#row"+val+" #idate1").attr('id',"idate"+val);
                $("#row"+val+" #idate"+val).attr('data-id',val);

                $('#idate'+val).MdPersianDateTimePicker({
                    targetTextSelector: '#issue_text'+val,
                    targetDateSelector: '#issue_date'+val,
                    enableTimePicker: false,
                    dateFormat: 'yyyy-MM-dd',
                    textFormat: 'yyyy-MM-dd ',
                });

                $("#row"+val+" #license_number" ).val("");
                $("#row"+val+" #issue_text"+val ).val("");
                $("#row"+val+" #issue_date"+val ).val("");


                $("#row_count").val(val);
            });

            $(document).on('change', '.lesson', function () {
                var id = $(this).data('id');
                if ($(this).val()==='other') {
                    $('#lesson_title' + id).prop("type", "text");
                } else {
                    $('#lesson_title' + id).prop("type", "hidden");
                }
            });

            $('form').on('submit',function () {

                $("#client_error").children().remove();

                var has_empty = false;

                $(this).find('select').each(function () {
                    var id = $(this).data('id');
                    if ($(this).val()==='other') {
                        switch ($(this).attr('id')) {
                            case "lesson_id"+id:
                                if (!$('#lesson_title' + id).val()) {
                                    $("#client_error").append('<label class="text-danger">لطفا نام درس را وارد کنید</label>');
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
        });
    </script>
@endsection
