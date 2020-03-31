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

      <form method="post" action="{{ Route('pool.update',$data->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">إسم المسبح</label>
          <input type="text" class="form-control" id="title" name="name" value="{{ $data->name }}"
            aria-describedby="emailHelp" placeholder="إسم المسبح">
        </div>

        <div class="col-sm-6">
          <label> إختار توقت البدء </label>
          <div class="form-group">
            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
              <input type="text" name="timea" value="{{ $data->timea }}" class=" form-control datetimepicker-input"
                data-target="#datetimepicker1" style=" max-width: 210px; " />
              <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <label> إختار توقت النهاية </label>
          <div class="form-group">
            <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
              <input type="text" name="timeb" value="{{ $data->timeb }}" class=" form-control datetimepicker-input"
                data-target="#datetimepicker2" style=" max-width: 210px; " />
              <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
        </div>

        @if (Auth::user()->id == 1)
        <select name="status">
          <option value="1">مقبول</option>
          <option value="0">مرفوض</option>
        </select>
        @endif

        <br />
        <button type="submit" class="btn btn-primary">تعديل</button>
      </form>

    </div>
  </div>
</div>

@endsection