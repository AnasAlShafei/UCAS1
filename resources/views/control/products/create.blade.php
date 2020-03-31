@extends('layouts.welcome')
@section('content')
<div class="container">

    <form method="post" action="{{ Route('product.store') }}">
        @csrf
        <label for="title">اسم المنتج</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="details">الوصف</label>
        <textarea name="body" id="details" cols="30" rows="10"></textarea>
        <br>
        <label for="image">صورة المنتج</label>
        <input type="file" name="image" id="image">

        <button type="submit" class="btn btn-primary">إضافة</button>

    </form>
</div>


@endsection
