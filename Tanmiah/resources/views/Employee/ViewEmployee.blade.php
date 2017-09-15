<title>الموظفات</title>
@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.LeftMenu')
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <a href="{{url('AddEmployee')}}" ><span class="glyphicon glyphicon-plus"></span></a>

                <!--<a href="'DestroyEmployee'" ><span class="glyphicon glyphicon-trash"></span></a>-->

            </div>
            <br>
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title" >الموظفات </h3>
                    <div class="pull-left" style=" margin-top: -18px;">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> بحث</button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="الاسم " disabled></th>
                        <th><input type="text" class="form-control" placeholder="رقم الجوال" disabled></th>
                        <!-- <th>حذف</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Employees as $Employee)
                        <tr>
                            <td><a href = 'EmployeeEdit/{{$Employee->id}}'>{{$Employee->name}}</a></td>
                            <td>{{$Employee->phone_number}}</td>
                            <!-- <td><input type="checkbox"></td>-->
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('layouts.javascript')
@endsection

