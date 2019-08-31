@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')
        <div class="container">
            <section>
                <h3>مشخصات دانشکده</h3>
                <div class="row">
                    <div class="col-md-4 offset-4">
                        <dl class="dl-horizontal">
                            <dt>
                                ردیف
                            </dt>
                            <dd>
                                {{$college->id}}
                            </dd>
                            <dt>
                                نام دانشکده
                            </dt>
                            <dd>
                                {{$college->title}}
                            </dd>
                            <dt>
                                تلفن
                            </dt>
                            <dd>
                                {{$college->phone}}
                            </dd>
                        </dl>
                    </div>
                </div>
            </section>
        </div>
    @endsection
@endcan
