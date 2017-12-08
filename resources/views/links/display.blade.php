<div class="container my-5">
  @foreach($links->chunk(4) as $chunk)
    <div class="card-deck py-2">
      @foreach($chunk as $link)

        <div class="card link-card">
          <a href="{!! $link->link !!}">
            <img class="card-img-top link-img" src="{!! $link->imagePath !!}" style="" />
          </a>
          <div class="card-body text-center">
            <p>
             <a href="{!! $link->link !!}">
                {!! $link->name !!}
              </a>
            </p>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach
</div>
