@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center professor_list_title">لیست کشور</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <p>
                            <a class="btn btn-primary" href="{{route('country.create')}}">جدید</a>
                        </p>
                        <table class="table float-right">
                            <thead>
                            <tr>
                                <th>
                                    نام کشور
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($countries as $country)
                                <tr>
                                    <td>
                                        <a href="{{route('country.detail',[$country->id])}}">
                                            {{$country->title}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('country.delete',[$country->id])}}" class="btn btn-danger">
                                            حذف
                                        </a>
                                        <a href="{{route('country.edit',[$country->id])}}" class="btn btn-warning">
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
