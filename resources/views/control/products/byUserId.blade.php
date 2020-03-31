@extends('layouts.welcome')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        @foreach ($product as $row)
        <h2 class="title">{{$row->title}}</h2>
        @if($row->image != "NULL")
        @else
        <img src="images/{{$row->image}}" alt="">
        @endif
        <br>
        <p>{{$row->body}}</p>
        <br>
        <a href="/products/{{$row->id}}">عرض</a>
        @endforeach
    </div>
</div>

@endsection
