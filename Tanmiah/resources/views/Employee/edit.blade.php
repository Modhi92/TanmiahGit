<title>تعديل بيانات موظفه </title>
@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.LeftMenu')
        <hr>
        <div class="min-dive">
            <div class="row">
                <div class="col-lg-12">
                    <form action='../EmployeeUpdate/{{ $Employee->id}}' method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>اسم الموظفة : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="name" class="form-control" value="{{ $Employee->name }}" required>
                            </div>

                            <label>رقم االموظفة : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="number" name="phone_number" value="{{ $Employee->phone_number }}"
                                       class="form-control" required>
                            </div>
                            <label>التخصص : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="Specialization" value="{{ $Employee->Specialization }}"
                                       class="form-control" required>
                            </div>
                            <label>تاريخ العقد : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input type="date" name="data_contract" value="{{$Employee->data_contract }}"
                                       class="form-control" required>
                            </div>
                            <label>نهاية العقد : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input type="date" name="end_contract" value="{{ $Employee->end_contract }}"
                                       class="form-control" required>
                            </div>
                        </div>
                        <input type="hidden" name="type" value="2">

                        <button class="btn btn-warning btn-block" type="submit ">تعديل</button>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



