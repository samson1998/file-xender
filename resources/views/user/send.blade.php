@extends('layouts.app')
@section('title','Xend File | FileXender')
@section('content')
<div class="container">
    {!! Form::open(['action'=>'DocumentController@store', 'method' => 'POST', 'enctype'=>"multipart/form-data"]) !!}
<div class="form-group">
    {{Form::label("Recipient's E-mail",  "Recipient's E-mail")}}
    {{Form::text('recipient_email','', ['class' =>'form-control', 'placeholder' => "Recipient's E-mail"])}}
</div>
<div class="form-group">
    <label> Content </label>
    <textarea style="height:250px;" class="form-control" name="message"></textarea>
</div>
<div class="form-group">
    <label for="">File Select</label>
    <input required type="file" class="form-control" name="file[]" multiple="multiple">
    {{-- <div class="progress">
        <div class="bar"></div >
        <div class="percent">0%</div >
    </div> --}}
</div>
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea',
        width: 900,
        height: 300
    });
</script>
