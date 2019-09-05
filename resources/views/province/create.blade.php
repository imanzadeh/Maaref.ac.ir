@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center professor_list_title">درج استان</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-4">
                        <form method="post" action="{{route('province.store')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label"><strong>نام کشور</strong></label>
                                <select class="form-control" id="country_id" name="country_id">
                                    <option value="">لطفا کشور را انتخاب کنید</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>نام استان</strong></label>
                                <input class="form-control" id="title" name="title"/>
                            </div>
                            <div class="form-group">
                                <input type="submit"  value="ثبت" class="btn btn-success col-md-12"/>
                            </div>
                        </form>
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
            </section>
        </div>
    @endsection
@endcan
