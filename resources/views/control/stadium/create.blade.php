@extends('layouts.welcome')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">الملاعب</h1>
<p class="mb-4"></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">إضافة ملعب</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">

      <form method="post" action="{{ Route('stadium.store') }}">
        @csrf

        <div class="form-group">
          <label for="name_stadium">إسم الملعب</label>
          <input type="text" class="form-control" id="title" name="name_stadium" aria-describedby="emailHelp"
            placeholder="إسم الملعب">
        </div>


        <div class="col-sm-6">
          <label> إختار توقت البدء </label>
          <div class="form-group">
            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
              <input type="text" name="timea" class=" form-control datetimepicker-input" data-target="#datetimepicker1"
                style=" max-width: 210px; " />
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
              <input type="text" name="timeb" class=" form-control datetimepicker-input" data-target="#datetimepicker2"
                style=" max-width: 210px; " />
              <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
        </div>



        <button type="submit" class="btn btn-primary">إضافة</button>
      </form>

    </div>
  </div>
</div>

@endsection