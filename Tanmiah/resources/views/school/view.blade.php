<title>الموظفات</title>
@extends('layouts.app')
@section('content')

        <div class="container background-container">
            @include('layouts.LeftMenu')
            <div class="row">
                <div class="col-md-6" style="margin-left :-10% ">

                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class=" filterable">
                            <div class="panel-heading">
                                <h3 class="panel-title"></h3>
                                <div class="pull-right">
                                    <button class="btn btn-info btn-xs btn-filter"><span
                                                class="glyphicon glyphicon-filter"></span> بحث
                                    </button>
                                    <a href="createSchool" class="btn btn-success btn-xs "><span
                                                class="glyphicon glyphicon-plus-sign"></span> إضافه</a>
                                </div>
                            </div><br/>
                            <table class="table">
                                <thead>
                                <tr class="filters">
                                    <th></th>
                                    <th><input type="text" class="form-control" placeholder=الاسم disabled></th>
                                    <th><input type="text" class="form-control" placeholder=" الملاحظات" disabled></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($schools as $school)
                                    <tr>
                                        <td> </td>
                                        <td>{{$school->name}}</td>
                                        <td>{{$school->name}}</td>
                                        <td>
                                            <form id="delete-form" action="delete/school/{{$school->id}}" method="POST">
                                                {{ csrf_field() }}
                                                <button class="btn btn-danger btn-xs"
                                                        onclick="return confirm('هل انت متاكد من حذف  - {{$school->name}}?') ">
                                                    <span class=" glyphicon glyphicon-trash "></span>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-xs" href="editSchool/{{$school->id}}"><span
                                                        class=" glyphicon glyphicon-edit "></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('layouts.javascript')
@endsection

