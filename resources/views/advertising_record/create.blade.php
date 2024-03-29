@extends('layouts.app')
@section('content')
    <h4 class="section-header">سوابق تبلیغی</h4>
    <section class="section-padding">
        <nav>
            <ol class="cd-breadcrumb triangle">
                <li><label>مشخصات متقاضی</label></li>
                <li><label>سوابق تحصیلات حوزوی</label></li>
                <li><label>سوابق تحصیلات دانشگاهی</label></li>
                <li><label>سوابق آموزشی</label></li>
                <li><label>سوابق پژوهشی</label></li>
                <li class="current"><label>سوابق تبلیغی</label></li>
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
                <form method="post" action="{{route('advertising_record.store')}}">
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
                                    <label class="control-label {{--text-center label-height--}} ">
                                        <strong>نوع مرکز تبلیغی</strong><i class="text-danger"> *</i></label>
                                    <select name="training_center_type_id[]" id="training_center_type_id1"
                                            class="form-control training_center_type" data-id="1">
                                        <option value="">لطفا نوع مرکز تبلیغی را انتخاب کنید</option>
                                        @foreach( $trainingCenterTypes as $trainingCenterType)
                                            <option value="{{$trainingCenterType->id}}">{{$trainingCenterType->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="control-label {{--text-center label-height--}} ">
                                        <strong>نام مرکز تبلیغی</strong><i class="text-danger"> *</i></label>
                                    <select name="training_center_id[]" id="training_center_id1"
                                            class="form-control training_center" data-id="1">
                                        <option value="">لطفا نام مرکز تبلیغی را انتخاب کنید</option>
                                        {{--@foreach( $trainingCenters as $trainingCenter)
                                            <option value="{{$trainingCenter->id}}">{{$trainingCenter->title}}</option>
                                        @endforeach--}}
                                        <option value="other">سایر</option>
                                    </select>

                                    <input type="hidden" name="training_center_title[]" id="training_center_title1"
                                           class="form-control other-input-top"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="control-label {{--text-center label-height--}} ">
                                        <strong>محل تبلیغ</strong><i class="text-danger"> *</i></label>
                                    <select name="advertising_record_place_id[]" id="advertising_record_place_id1"
                                            class="form-control advertising_record_place" data-id="1" >
                                        <option value="">لطفا محل تبلیغ را انتخاب کنید</option>
                                        @foreach( $advertisingRecordPlaces as $advertisingRecordPlace)
                                            <option value="{{$advertisingRecordPlace->id}}">{{$advertisingRecordPlace->title}}</option>
                                        @endforeach
                                        <option value="other">سایر</option>
                                    </select>

                                    <input type="hidden" name="advertising_record_place_title[]" id="advertising_record_place_title1"
                                           class="form-control other-input-top"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="control-label{{-- text-center label-height--}} ">
                                        <strong>تاریخ شروع</strong><i class="text-danger"> *</i></label>
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
                                    <label class="control-label{{-- text-center label-height--}}">
                                        <strong>تاریخ پایان</strong><i class="text-danger"> *</i></label>
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
                                    <label class="control-label {{--text-center label-height--}} ">
                                        <strong>نشانی موسسه</strong><i class="text-danger"> *</i></label>
                                    <input name="address[]" id="address" class="form-control"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="control-label {{--text-center label-height--}} ">
                                        <strong>تلفن</strong><i class="text-danger"> *</i></label>
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

                $("#row"+val+" label").addClass('display-none');
                $("#row"+val+" .training_center_type").attr('data-id',val);
                $("#row"+val+" #training_center_id1").attr('id',"training_center_id"+val);

                $("#row"+val+" #training_center_title1").attr('id',"training_center_title"+val);
                $("#row"+val+" .training_center").attr('data-id',val);

                $("#row"+val+" #advertising_record_place_title1").attr('id',"advertising_record_place_title"+val);
                $("#row"+val+" .advertising_record_place").attr('data-id',val);

                $("#row"+val+" #training_center_title" + val).prop("type", "hidden");
                $("#row"+val+" #advertising_record_place_title" + val).prop("type", "hidden");

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

                $("#row"+val+" #address" ).val("");
                $("#row"+val+" #phone" ).val("");
                $("#row"+val+" #start_text"+val ).val("");
                $("#row"+val+" #start_date"+val ).val("");
                $("#row"+val+" #end_text"+val ).val("");
                $("#row"+val+" #end_date"+val ).val("");

                $("#row_count").val(val);
            });

            $(document).on('change', '.training_center_type', function() {

                var id = $(this).data('id');
                var trainingCenterTypeId= $(this).val();

                if (trainingCenterTypeId) {
                    $.ajax({
                        type: "GET",
                        url: "/alumni/getTrainingCenterList/"+trainingCenterTypeId,
                        success: function (res) {

                            if (res) {
                                $("#training_center_id"+id).empty();
                                $("#training_center_id"+id).append('<option>لطفا نام مرکز پژوهشی را انتخاب کنید</option>');
                                $.each(res, function (key, value) {
                                    $("#training_center_id"+id).append('<option value="' + key + '">' + value + '</option>');
                                });

                                $("#training_center_id"+id).append('<option value="other">سایر</option>');

                                $("#training_center_title" + id).prop("type", "hidden");

                            } else {
                                $("#training_center_id"+id).empty();
                            }
                        }
                    });
                } else {
                    $("#training_center_id"+id).empty();
                }

            });

            $(document).on('change', '.training_center', function () {
                var id = $(this).data('id');
                if ($(this).val()==='other') {
                    $('#training_center_title' + id).prop("type", "text");
                } else {
                    $('#training_center_title' + id).prop("type", "hidden");
                }
            });

            $(document).on('change', '.advertising_record_place', function () {
                var id = $(this).data('id');
                if ($(this).val()==='other') {
                    $('#advertising_record_place_title' + id).prop("type", "text");
                } else {
                    $('#advertising_record_place_title' + id).prop("type", "hidden");
                }
            });

            $('form').on('submit',function () {

                $("#client_error").children().remove();

                var has_empty = false;

                $(this).find('select').each(function () {
                    var id = $(this).data('id');
                    if ($(this).val()==='other') {
                        switch ($(this).attr('id')) {
                            case "training_center_id"+id:
                                if (!$('#training_center_title' + id).val()) {
                                    $("#client_error").append('<label class="text-danger">لطفا نام مرکز تبلیغی را وارد کنید</label>');
                                    has_empty = true;
                                    return false;
                                }
                                break;
                            case "advertising_record_place_id"+id:
                                if (!$('#advertising_record_place_title' + id).val()) {
                                    $("#client_error").append('<label class="text-danger">لطفا محل تبلیغ را وارد کنید</label>');
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
