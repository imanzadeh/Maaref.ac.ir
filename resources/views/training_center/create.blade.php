@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center professor_list_title">درج مشخصات دانشگاه</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-4">
                        <form method="post" action="{{route('training_center.store')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label "><strong>نوع مرکز</strong><i class="text-danger"> *</i></label>
                                <select name="training_center_type_id" id="training_center_type_id" class="form-control">
                                    <option value="">لطفا نوع مرکز را انتخاب کنید</option>
                                    @foreach( $trainingCenterTypes as $trainingCenterType)
                                        <option value="{{$trainingCenterType->id}}">{{$trainingCenterType->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>عنوان مرکز</strong><i class="text-danger"> *</i></label>
                                <input class="form-control" id="title" name="title"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>آدرس</strong><i class="text-danger"> *</i></label>
                                <input class="form-control" id="address" name="address"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>تلفن</strong><i class="text-danger"> *</i></label>
                                <input class="form-control" id="phone" name="phone"/>
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
