@extends('layouts.welcome')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">كمال الأجسام</h1>
<p class="mb-4">
  <a href="/Bodybuilding/create">إضافة جهاز للتمرين</a>
</p>
@if(Auth::user()->id == 1)
<form action="{{url('/Bodybuildingsearch')}}" method="post">
  {{ csrf_field() }}
  <input type="text" class="form-control" name="search" dir="rtl" placeholder=" ... إبحث عن حجز بواسطة التاريخ">
  <button type="submit" class="btn btn-success">! إبحث </button>
</form>
@endif
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">كمال الأجسام</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>رقم</th>
            <th>إسم الألة</th>
            <th>وقت البدء</th>
            <th>وقت الإنهاء</th>
            <th>حالة الطلب</th>
            @if (Auth::user()->id == 1)
            <th>الطالب</th>
            @endif
            <th>العمليات</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>رقم</th>
            <th>إسم الألة</th>
            <th>وقت البدء</th>
            <th>وقت الإنهاء</th>
            <th>حالة الطلب</th>
            @if (Auth::user()->id == 1)
            <th>الطالب</th>
            @endif
            <th>العمليات</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($data as $row)
          @if (Auth::user()->id == $row->user_id)
          <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name_machine }}</td>
            <td>{{$row->timea}}</td>
            <td>{{$row->timeb}}</td>
            <td>
              @if ($row->status == 0)
              مرفوض
              @else
              مقبول
              @endif
            </td>
            <td><a href="Bodybuilding/{{ $row->id }}/edit/">تعديل</a>
              <form action="{{action('BodybuildingController@destroy', $row->id)}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" onclick="return confirm(' ؟  هل أنت متأكد من حذف{{ $row->name }}')"
                  type="submit">حذف</button>
              </form>
            </td>
          </tr>
          @endif
          @if(Auth::user()->id == 1)
          <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name_machine }}</td>
            <td>{{$row->timea}}</td>
            <td>{{$row->timeb}}</td>
            <td>
              <form method="POST" action="Bodybuilding/{{$row->id}}">
                {{csrf_field()}}

                <select class="form-control" name="status" onchange="this.form.submit();" dir="rtl">
                  <option value="0" {{($row->status == 0) ? 'selected' : null}}>مرفوض</option>
                  <option value="1" {{($row->status == 1) ? 'selected' : null}}>مقبول</option>
                </select>
              </form>
            </td>
            <td>
              {{ App\User::find($row->user_id)->name}}
            </td>
            <td>
              <form action="{{action('BodybuildingController@destroy', $row->id)}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger"
                  onclick="return confirm(' ؟  هل أنت متأكد من حذف{{ $row->name_machine }}')" type="submit">حذف</button>
              </form>
            </td>
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection