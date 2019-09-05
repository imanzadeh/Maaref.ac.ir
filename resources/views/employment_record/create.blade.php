@extends('layouts.app')
@section('content')
    <h4 class="section-header">سوابق اشتغال</h4>
    <section class="section-padding">
        <nav>
            <ol class="cd-breadcrumb triangle">
                <li><label>مشخصات متقاضی</label></li>
                <li><label>سوابق تحصیلات حوزوی</label></li>
                <li><label>سوابق تحصیلات دانشگاهی</label></li>
                <li><label>سوابق آموزشی</label></li>
                <li><label>سوابق پژوهشی</label></li>
                <li><label>سوابق تبلیغی</label></li>
                <li class="current"><label>سوابق اشتغال</label></li>
                <li><label>مجوز تدریس دروس معارف</label></li>
                <li><label>مجوز تبلیغ در دانشگاه ها</label></li>
                <li><label>معرفان علمی</label></li>
            </ol>
        </nav>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{route('employment_record.store')}}">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-md-6">
                            <input type="hidden" value="1" name="row_count" id="row_count"/>
                            <p>
                                <a class="btn btn-primary" id="new_row" >سطر جدید</a>
                            </p>
                        </div>
                        <div id="rows">
                            <div class="row border margin-bottom-20 background-div" id="row1">
                                <div class="form-group col-md-3">
                                    <label class="control-label {{--text-center label-height--}} "><strong>نام محل کار</strong><i class="text-danger"> *</i></label>
                                    <input name="workplace_name[]" id="workplace_name" class="form-control"/>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="control-label {{--text-center label-height--}} "><strong>نوع مسئولیت</strong><i class="text-danger"> *</i></label>
                                    <select name="responsibility_type_id[]" id="responsibility_type_id1"
                                            class="form-control responsibility_type" data-id="1">
                                        <option value="">لطفا نوع مسئولیت را انتخاب کنید</option>
                                        @foreach($responsibilityTypes as $responsibilityType)
                                            <option value="{{$responsibilityType->id}}">{{$responsibilityType->title}}</option>
                                        @endforeach
                                        <option value="other">سایر</option>
                                    </select>

                                    <input type="hidden" name="responsibility_type_title[]" id="responsibility_type_title1"
                                           class="form-control other-input-top"/>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="control-label {{--text-center label-height--}} "><strong>استان</strong><i class="text-danger"> *</i></label>
                                    <select name="province_id[]" id="province_id1" class="form-control province"
                                            data-id="1">
                                        <option value="">لطفا استان را انتخاب کنید</option>
                                        @foreach($provinces as $province)
                                            <option value="{{$province->id}}">{{$province->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="control-label {{--text-center label-height--}} "><strong>شهرستان</strong><i class="text-danger"> *</i></label>
                                    <select name="city_id[]" id="city_id1" class="form-control city"
                                            data-id="1">
                                        <option value="">لطفا شهرستان را انتخاب کنید</option>
                                        <option value="other">سایر</option>
                                    </select>

                                    <input type="hidden" name="city_title[]" id="city_title1"
                                           class="form-control other-input-top"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="control-label{{-- text-center label-height--}} "><strong>تاریخ شروع</strong><i class="text-danger"> *</i></label>
                                    <input type="text" name="start_text[]" id="start_text1"
                                           class="form-control DatePicker-input" placeholder="انتخاب تاریخ"
                                           aria-label="date1" aria-describedby="date1" autocomplete="off">
                                    <input type="hidden" name="start_date[]" id="start_date1"
                                           class="form-control" placeholder="Persian Calendar Date"
                                           aria-label="date11" aria-describedby="date11" autocomplete="off">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text cursor-pointer DatePicker-icon sdate" id="sdate1" data-id="1">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                    </div>

                                </div>

                                <div class="form-group col-md-3">
                                    <label class="control-label{{-- text-center label-height--}}"><strong>تاریخ پایان</strong><i class="text-danger"> *</i></label>
                                    <input type="text" name="end_text[]" id="end_text1"
                                           class="form-control DatePicker-input" placeholder="انتخاب تاریخ"
                                           aria-label="date2" aria-describedby="date2" autocomplete="off">
                                    <input type="hidden" name="end_date[]" id="end_date1"
                                           class="form-control" placeholder="Persian Calendar Date"
                                           aria-label="date12" aria-describedby="date12" autocomplete="off">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text cursor-pointer DatePicker-icon edate" id="edate1">
                                            <i class="fas fa-calendar-alt"></i>
                                        </span>
                                    </div>

                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label {{--text-center label-height--}} "><strong>نشانی موسسه</strong><i class="text-danger"> *</i></label>
                                    <input name="address[]" id="address" class="form-control"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="control-label {{--text-center label-height--}} "><strong>تلفن</strong><i class="text-danger"> *</i></label>
                                    <input name="phone[]" id="phone" class="form-control"/>
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

            $('#sdate1').MdPersianDateTimePicker({
                targetTextSelector: '#start_text1',
                targetDateSelector: '#start_date1',
                enableTimePicker: false,
                dateFormat: 'yyyy-MM-dd',
                textFormat: 'yyyy-MM-dd ',
            });
            $('#edate1').MdPersianDateTimePicker({
                targetTextSelector: '#end_text1',
                targetDateSelector: '#end_date1',
                enableTimePicker: false,
                dateFormat: 'yyyy-MM-dd',
                textFormat: 'yyyy-MM-dd ',
            });

            $("#new_row").click(function () {
                var val=$("#row_count").val();
                val++;


                $("#row1").clone().attr('id',"row"+val).appendTo("#rows");

                $("#row"+val+" label").addClass('display-none');//غیر فعال کردن عناوین در سطر دوم

                $("#row"+val+" .responsibility_type").attr('data-id',val);
                $("#row"+val+" #responsibility_type_title1").attr('id',"responsibility_type_title"+val);

                $("#row"+val+" .province").attr('data-id',val);

                $("#row"+val+" #city_id1").attr('id',"city_id"+val);
                $("#row"+val+" .city").attr('data-id',val);
                $("#row"+val+" #city_title1").attr('id',"city_title"+val);

                $("#row"+val+" #city_title" + val).prop("type", "hidden");
                $("#row"+val+" #responsibility_type_title" + val).prop("type", "hidden");

                $("#row"+val+" #start_text1").attr('id',"start_text"+val);
                $("#row"+val+" #start_date1").attr('id',"start_date"+val);
                $("#row"+val+" #sdate1").attr('id',"sdate"+val);
                $("#row"+val+" #sdate"+val).attr('data-id',val);

                $("#row"+val+" #end_text1").attr('id',"end_text"+val);
                $("#row"+val+" #end_date1").attr('id',"end_date"+val);
                $("#row"+val+" #edate1").attr('id',"edate"+val);
                $("#row"+val+" #edate"+val).attr('data-id',val);

                $('#sdate'+val).MdPersianDateTimePicker({
                    targetTextSelector: '#start_text'+val,
                    targetDateSelector: '#start_date'+val,
                    enableTimePicker: false,
                    dateFormat: 'yyyy-MM-dd',
                    textFormat: 'yyyy-MM-dd ',
                });

                $('#edate'+val).MdPersianDateTimePicker({
                    targetTextSelector: '#end_text'+val,
                    targetDateSelector: '#end_date'+val,
                    enableTimePicker: false,
                    dateFormat: 'yyyy-MM-dd',
                    textFormat: 'yyyy-MM-dd ',
                });

                $("#row"+val+" #workplace_name" ).val("");
                $("#row"+val+" #address" ).val("");
                $("#row"+val+" #phone" ).val("");
                $("#row"+val+" #start_text"+val ).val("");
                $("#row"+val+" #start_date"+val ).val("");
                $("#row"+val+" #end_text"+val ).val("");
                $("#row"+val+" #end_date"+val ).val("");


                $("#row_count").val(val);
            });

            $(document).on('change', '.province', function() {
                var id = $(this).data('id');
                var provinceId = $(this).val();

                if (provinceId) {
                    $.ajax({
                        type: "GET",
                        url: "/alumni/getCityList/"+provinceId,
                        success: function (res) {

                            if (res) {

                                $("#city_id"+id).empty();
                                $("#city_id"+id).append('<option>لطفا شهرستان را انتخاب کنید</option>');

                                $.each(res, function (key, value) {

                                    $("#city_id"+id).append('<option value="' + key + '">' + value + '</option>');
                                });

                                $("#city_id"+id).append('<option value="other">سایر</option>');

                                $("#city_title" + id).prop("type", "hidden");

                            } else {
                                $("#city_id"+id).empty();
                            }
                        }
                    });
                } else {
                    $("#city_id"+id).empty();
                }

            });

            $(document).on('change', '.responsibility_type', function () {
                var id = $(this).data('id');
                if ($(this).val()==='other') {
                    $('#responsibility_type_title' + id).prop("type", "text");
                } else {
                    $('#responsibility_type_title' + id).prop("type", "hidden");
                }
            });

            $(document).on('change', '.city', function () {
                var id = $(this).data('id');
                if ($(this).val()==='other') {
                    $('#city_title' + id).prop("type", "text");
                } else {
                    $('#city_title' + id).prop("type", "hidden");
                }
            });

            $('form').on('submit',function () {

                $("#client_error").children().remove();

                var has_empty = false;

                $(this).find('select').each(function () {
                    var id = $(this).data('id');
                    if ($(this).val()==='other') {
                        switch ($(this).attr('id')) {
                            case "responsibility_type_id"+id:
                                if (!$('#responsibility_type_title' + id).val()) {
                                    $("#client_error").append('<label class="text-danger">لطفا نوع مسئولیت را وارد کنید</label>');
                                    has_empty = true;
                                    return false;
                                }
                                break;
                            case "city_id"+id:
                                if (!$('#city_title' + id).val()) {
                                    $("#client_error").append('<label class="text-danger">لطفا شهرستان را وارد کنید</label>');
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
