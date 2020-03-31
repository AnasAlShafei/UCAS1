@extends('layouts.welcome')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">الأخبار</h1>
<p class="mb-4"></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">تعديل</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <form method="post" action="{{ action('products\ProductsController@update',$product->id) }}">
                @csrf
                @method('PUT')
                <label for="title">اسم المنتج</label>
                <input type="text" name="title" id="title" value="{{$product->title}}">
                <br>
                <label for="body">التفاصيل</label>
                <textarea name="body" id="body" cols="30" rows="10">{{$product->body}}</textarea>
                <br>
                <label for="image">صورة المنتج</label>
                <input type="file" name="image" id="image" value="{{$product->image}}">
                <button type="submit" class="btn btn-primary">تعديل</button>
            </form>

        </div>
    </div>
</div>

@endsection
