<title>إضافات موظفه</title>
@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.LeftMenu')
        <hr>
        <div class="min-dive">
            <div class="row">
                <div class="col-lg-12">
                    <form action="insertAdvert" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>اسم الاعلان : </label>
                            <input type='text' name='name' class='form-control' value='{{old('name')}}' required>
                        </div>
                        <div class="form-group">
                            <label> النشاط : </label>
                            <select type='text' name='active_initiatives_id' class='form-control' value='{{old('active_initiatives_id') }}' >
                                <option value="">-- اختر النشاط -- </option>
                                @foreach($Active_Initiative as $item)
                                    <option value = '{{$item->id}}'>{{$item->name}}</option>
                                    @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label>الصوره : </label>
                            <input type='file' name='picture' class='form-control' value='{{old('picture')}}' required>
                        </div>
                        <br/>
                        <button class="btn btn-block  btn-success">إضافة</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



