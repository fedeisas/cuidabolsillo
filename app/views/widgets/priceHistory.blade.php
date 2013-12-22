@if ($priceHistory->count())
  <div class="price-history">
      <div class="list-group">
        @foreach($priceHistory as $history)
          <div class="list-group-item">
            <h4 class="list-group-item-heading">$ {{{ number_format($history->price, 2) }}}</h4>
            @if($history->business_id)
              <p class="list-group-item-text">
                {{{ translateDiff($history->created_at->diffForHumans()) }}} en
                <a target="_blank" href="http://maps.google.com/maps?q={{{ $history->latitude }}},{{{ $history->longitude }}}" title="Ver mapa">
                  <strong><i class="glyphicon glyphicon-map-marker"></i> {{{ $history->business->name }}}, {{{ $history->business->location_address }}}</strong>
                </a>
              </p>
            @else
              <p class="list-group-item-text">
                {{{ translateDiff($history->created_at->diffForHumans()) }}} en
                <a target="_blank" href="http://maps.google.com/maps?q={{{ $history->latitude }}},{{{ $history->longitude }}}" title="Ver mapa">
                  <strong><i class="glyphicon glyphicon-map-marker"></i> {{{ $history->province->name }}}</strong>
                </a>
              </p>
            @endif
          </div>
        @endforeach
      </div>
  </div>
  <hr>
@endif