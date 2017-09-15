<title> إضافة نشاط </title>
<script src="//cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>
@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.LeftMenu')
        <hr>
        <div class="min-dive">
            <div class="row">
                <div class="col-lg-12">
                    <form action="insertAddActives" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">

                                    <label>اسم النشاط : </label>
                                    <div class="col-lg-12">
                                       <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                               required>
                                </div>
                            <div class="col-lg-12">
                                <label>صورة النشاط : </label>
                                <input type="file" name="picture" class="form-control" value="{{ old('picture') }}"
                                       required>
                            </div>
                                <div class="col-lg-12">
                                    <label>وصف النشاط : </label>
                                    <div><textarea name="sub"></textarea>
                                        <script>
                                            CKEDITOR.replace('sub');
                                        </script>
                                    </div>
                                </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading"> التفاصيل</div>
                            <div class="panel-body">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>الميزانيه</label>
                                        <input type='number' required class="form-control" name="budget"
                                               value="{{ old('budget') }}">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>المصروف </label>
                                        <input type='number' required class="form-control" name="Expense"
                                               value="{{ old('Expense') }}">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>المتبقي  </label>
                                        <input type='number' required class="form-control" name="Remainder"
                                               value="{{ old('Remainder') }}">
                                    </div>
                                    <div class="col-lg-6">
                                        <label>المديره </label>
                                        <input type='text' required class="form-control" name="manager"
                                               value="{{ old('manager') }}">
                                    </div>
                                    <div class="col-lg-6">
                                        <label>المشرفة </label>
                                        <input type='text' required class="form-control" name="Specialization"
                                               value="{{ old('Specialization') }}">
                                    </div>
                                    <div class="col-lg-6">
                                        <label>عدد الساعات </label>
                                        <input type='text' required class="form-control" name="hours"
                                               value="{{ old('hours') }}">
                                    </div>
                                    <div class="col-lg-6">
                                        <label>الوقت </label>
                                        <input type='date' required class="form-control" name="Date"
                                               value="{{ old('Date') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="types_id" value="1">
                        <button class="btn btn-success btn-block" type="submit ">إضافه</button>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



