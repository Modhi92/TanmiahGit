<title>إضافات موظفه</title>
@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.LeftMenu')
        <hr>
        <div class="min-dive">
            <div class="row">
                <div class="col-lg-12">
                    <form action="insertNewEmployee" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>اسم الموظفة : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                            </div>

                            <label>رقم االموظفة : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="number" name="phone_number" value="{{ old('phone_number') }}"
                                       class="form-control" required>
                            </div>
                            <label>التخصص : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="Specialization" value="{{ old('Specialization') }}"
                                       class="form-control" required>
                            </div>
                            <label>تاريخ العقد : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="date" name="data_contract" value="{{ old('data_contract') }}"
                                       class="form-control" required>
                            </div>
                            <label>نهاية العقد : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="date" name="end_contract" value="{{ old('end_contract') }}"
                                       class="form-control" required>
                            </div>
                        </div>
                        <input type="hidden" name="type" value="2">

                        <button class="btn btn-success btn-block" type="submit ">إضافه</button>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



