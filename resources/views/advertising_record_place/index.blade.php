@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center professor_list_title">لیست محل تبلیغ</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <p>
                            <a class="btn btn-primary" href="{{route('advertising_record_place.create')}}">جدید</a>
                        </p>
                        <table class="table float-right">
                            <thead>
                            <tr>
                                <th>
                                    عنوان محل تبلیغ
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($advertisingRecordPlaces as $advertisingRecordPlace)
                                        <tr>
                                            <td>
                                        <a href="{{route('advertising_record_place.detail',[$advertisingRecordPlace->id])}}">
                                            {{$advertisingRecordPlace->title}}
                                        </a>
                                            </td>
                                            <td>
                                        <a href="{{route('advertising_record_place.delete',[$advertisingRecordPlace->id])}}" class="btn btn-danger">
                                            حذف
                                        </a>
                                        <a href="{{route('advertising_record_place.edit',[$advertisingRecordPlace->id])}}" class="btn btn-warning">
                                            ویرایش
                                        </a>
                                            </td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    @endsection
@endcan
