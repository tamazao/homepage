@extends('layout')
@section('contents')
  {!! Form::open( ['url' => 'links', 'files' => true] ) !!}
  <div class="form-group">
    {!! Form::label('name','Name')!!}
    {!! Form::text('name', ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('link','URL')!!}
    {!! Form::text('link') !!}
  </div>
  <div class="form-group">
    {!! Form::label('imagePath','Path to Image')!!}
    {!! Form::text('imagePath') !!}
  </div>

  {!! Form:close() !!}

@endsection
