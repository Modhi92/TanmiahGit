<title>تعديل الاسر المنتجه</title>
@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.LeftMenu')
        <hr>
        <div class="min-dive">
            <div class="row">
                <div class="col-lg-12">
                    <form action="../UpdateSupervisor/{{$data->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id"  value="{{$data->id}}" required>
                        <div class="form-group">
                            <label>اسم المشرفة : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input type="text" name="name" class="form-control" value="{{$data->name}}" required>
                            </div>

                            <label>الهاتف : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="number" name="phone_number" value="0{{$data->phone_number}}"
                                       class="form-control" required>
                            </div>


                        </div>
                        <button class="btn btn-info btn-block" type="submit ">تعديل</button>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



