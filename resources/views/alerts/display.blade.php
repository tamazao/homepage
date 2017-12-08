
@foreach($alerts as $alert)
  <div class="alert alert-{{ $alert->priority }} alert-dismissible fade show" role="alert">
    <h5 class="display-5">{{ $alert->summary }}</h3>
    <p>
      <a href="#" class="alert-link" data-toggle="modal" data-target="#modal-{{$alert->id}}">Click here for more information.</a>
    </p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endforeach
@foreach($alerts as $alert)
    <div class="modal" id="modal-{{ $alert->id }}" tabindex={{ $alert->id }} role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">{{ $alert->summary}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              {{ $alert->details }}
            </p>
          </div>
        </div>
      </div>
    </div>
@endforeach
