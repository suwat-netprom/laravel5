@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ยินดีต้อนรับ</div>

                <div class="panel-body">
                    <img src="{{asset('images/logo.jpg')}}" width="50" height="50">
                    ยินดีต้อนรับทุกท่าน
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
