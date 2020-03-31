@extends('layouts.welcome')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">المنتجات</h1>
<p class="mb-4">
    <a href="{{Route('products.create')}}">إضافة منتج</a>
</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">المنتجات</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>إسم المستخدم</th>
                        <th>الايميل</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>إسم المستخدم</th>
                        <th>الايميل</th>
                        <th>العمليات</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($users as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>
                            <a class="btn btn-success fa fa-show" href="/products/user_id/{{$row->id}}">عرض جميع
                                المنتجات</a>
                            {{-- <a href="product/{{ $row->id }}/edit/" style="display: inline-block">تعديل</a> --}}
                            {{-- <form action="{{action('PoolController@destroy', $row->id)}}" method="post"
                                style="display: inline-block">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger"
                                    onclick="return confirm(' ؟  هل أنت متأكد من حذف{{ $row->title }}')"
                                    type="submit">حذف</button>
                            </form> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
