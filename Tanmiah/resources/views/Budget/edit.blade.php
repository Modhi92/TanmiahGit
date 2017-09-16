<title>تعديل الاسر المنتجه</title>
@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.LeftMenu')
        <hr>
        <div class="min-dive">
            <div class="row">
                <div class="col-lg-12">
                    <form action="../UpdateBudget/{{$data->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id"  value="{{$data->id}}" required>
                        <div class="form-group">
                            <label>السنة: </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input type="text" name="year" class="form-control" value="{{$data->year}}" required>
                            </div>

                            <label>المبلغ : </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="text" name="amount" value="{{$data->amount}}"
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



