@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center professor_list_title">لیست وضعیت تاهل</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <p>
                            <a class="btn btn-primary" href="{{route('marital_status.create')}}">جدید</a>
                        </p>
                        <table class="table float-right">
                            <thead>
                            <tr>
                                <th>
                                    عموان وضعیت تاهل
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($maritalStatuses as $maritalStatus)
                                <tr>
                                    <td>
                                        <a href="{{route('marital_status.detail',[$maritalStatus->id])}}">
                                            {{$maritalStatus->title}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('marital_status.delete',[$maritalStatus->id])}}" class="btn btn-danger">
                                            حذف
                                        </a>
                                        <a href="{{route('marital_status.edit',[$maritalStatus->id])}}" class="btn btn-warning">
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
