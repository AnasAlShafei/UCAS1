@extends('layouts.welcome')
@section('content')

<div class="card">
    <div class="card-header card-header-success text-right">
        <p class="text-center">
            البحث بالتاريخ
        </p>
    </div>
    <div class="card-body table-responsive">
        <div class="text-center">
        </div>
        <table class="table table-hover">
            <thead class="text-warning">
                <tr>
                    <th>رقم</th>
                    <th>إسم الملعب</th>
                    <th>وقت البدء </th>
                    <th>وقت الإنهاء </th>
                    <th>الطالب</th>
                    <th>حالة الطلب </th>
                </tr>
            </thead>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name_stadium}}</td>
                <td>{{ $row->timea }}</td>
                <td>{{ $row->timeb }}</td>
                <td> {{ App\User::find($row->user_id)->name }} </td>
                <td>
                    <form method="POST" action="Bodybuilding/{{$row->id}}">
                      {{csrf_field()}}
      
                      <select class="form-control" name="status" onchange="this.form.submit();" dir="rtl">
                        <option value="0" {{($row->status == 0) ? 'selected' : null}}>مرفوض</option>
                        <option value="1" {{($row->status == 1) ? 'selected' : null}}>مقبول</option>
                      </select>
                    </form>
                  </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection