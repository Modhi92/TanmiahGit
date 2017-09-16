<title>إضافات موظفه</title>
@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.LeftMenu')
        <hr>
        <div class="min-dive">
            <div class="row">
                <div class="col-lg-12">
                    <form action="insertBudget" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label> السنة : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="year" class="form-control" value="{{ old('year') }}" placeholder="2017" required>
                            </div>

                            <label>الميزانيه : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="text" name="amount" value="{{ old('amount') }}"
                                       class="form-control" placeholder="22 الف " required>
                            </div>

                        </div>
                        <button class="btn btn-success btn-block" type="submit ">إضافه</button>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



