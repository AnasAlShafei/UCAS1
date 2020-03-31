@extends('layouts.welcome')
@section('content')
<div class="container">

    <form method="post" action="{{ Route('pool.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="input-group no-border">
                    <input type="text" name="name" class="form-control" placeholder="إسم المسبح">
                </div>
            </div>
            <div class="col-sm-6">
                <label> إختار توقت البدء </label>
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                        <input type="text" name="timea" class="form-control datetimepicker-input"
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
                        <input type="text" name="timeb" class="form-control datetimepicker-input"
                            data-target="#datetimepicker2" style=" max-width: 210px; " />
                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<button type="submit" class="btn btn-primary">إضافة</button>

</form>


@endsection