    {!! Form::open( ['url' => 'links'] ) !!}
    <div class="form-group">
      {!! Form::label('name','Name')!!}
      {!! Form::text('name','', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('link','URL')!!}
      {!! Form::text('link','', ['class' => 'form-control'] ) !!}
    </div>
    <div class="form-group">
      {!! Form::label('imagePath','Path to Image')!!}
      {!! Form::text('imagePath','', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('thumbnail', 'Thumbnail')!!}
      <input type='file' class="form-control-file" id="thumbnail" />
    </div>
    {!! Form::submit('Create Link', ['class' => 'btn btn-primary float-right']) !!}
    {!! Form::close() !!}
