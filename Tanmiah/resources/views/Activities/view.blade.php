

<title>الانشطه </title>
@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.LeftMenu')
        <hr>
        <form action="ActiveDestroy" method="post">
            {{ csrf_field()}}
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{url('AddEmployee')}}" ><span class="glyphicon glyphicon-plus"></span></a>
                    |
                    <button type="submit"><span class="glyphicon glyphicon-trash"></span></button>

                </div>
                <br>
                <div class="panel panel-primary filterable">
                    <div class="panel-heading">
                        <h3 class="panel-title" >الانشطه </h3>
                        <div class="pull-left" style=" margin-top: -18px;">
                            <a class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> بحث</a>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder="الاسم " disabled></th>
                            <th><input type="text" class="form-control" placeholder="التاريخ" disabled></th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Actives as $Active)
                            <tr>
                                <td><a href = 'ActiveEdit/{{$Active->id}}'>{{$Active->name}}</a></td>
                                <td>{{$Active->Date}}</td>
                                <td><input type="checkbox" name="delete[]" value="{{$Active->id}}"></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
    @include('layouts.javascript')
@endsection






