@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center professor_list_title">درج نام پایه تحصیلی حوزوی</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-4">
                        <form method="post" action="{{route('seminary_grade.store')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label"><strong>نام پایه تحصیلی حوزوی</strong><i class="text-danger"> *</i></label>
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
