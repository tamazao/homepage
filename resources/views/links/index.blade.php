@extends('layout')
@section('title')
  Links
@endsection
@section('contents')
  <div class="jumbotron text-center">
    <h1 class="display-4">Navigation Links</h1>
  </div>
  <div class="container py-4">
    <button class="btn btn-success my-2 float-right" data-toggle="modal" data-target="#newLinkModal">New Link</button>
    <table class="table table-bordered table-striped ">
      <thead class="thead">
        <th scope="col">
          Name
        </th>
        <th scope="col">
          Link
        </th>
        <th scope="col">
          Image Path
        </th>
        <th scope="col">
        </th>
      </thead>
      <tbody>
        @foreach($links as $link)
          <tr>
            <td>
              {{ $link->name }}
            </td>
            <td>
              {{ $link->link }}
            </td>
            <td>
              {{ $link->imagePath }}
            </td>
            <td>
              <div class="btn-group" role="group">
                <button class="btn btn-primary btn-sm">edit</button>
                <a href="{{ action('ThumbnailController@retreve', [ 'id' => $link->id ]) }}" class="btn btn-warning btn-sm">add thumbnail</a>
                {{ Form::open( [ 'action' => ['LinkController@destroy', $link], 'method' => 'DELETE' ] ) }}
                  {{ Form::submit( 'delete', [ 'class' => 'btn btn-danger btn-sm' ] ) }}
                {{ Form::close() }}
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
<div class="modal fade" id="newLinkModal" tabindex="1" role="dialog" aria-labelledby="newLinkModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5>New Link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('links.form')
      </div>
    </div>
  </div>
</div>
@endsection
