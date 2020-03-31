@extends('layouts.welcome')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <h2 class="title">{{$product->title}}</h2>
        @if($product->image != "NULL")
        @else
        <img src="images/{{$product->image}}" alt="">
        @endif
        <br>
        <p>{{$product->body}}</p>
        <br>
        <h1>{{App\User::find($product->user_id)->name}}</h1>
    </div>
</div>

@endsection
