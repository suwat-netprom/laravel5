@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>ประเภทอาหาร</h4> จำนวน {{$count}} รายการ</div>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>รหัส</th>
                                <th>ประเภท</th>
                                <th>เครื่องมือ</th>
                            </tr>
                            @foreach($typefoods as $typefood)
                            <tr>
                                <td>{{$typefood->id}}</td>
                                <td>{{$typefood->name}}</td>
                                <td>
                                    <a href="{{url('typefood/show/'.$typefood->id)}}">ดูลยละเอียด</a>
                                    <a href="{{url('typefood/delete/'.$typefood->id)}}">ลบ</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                        {!! $typefoods->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection