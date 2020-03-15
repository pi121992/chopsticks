<img class="rounded-circle" src="{{ $imgsrc }}" width="140" height="140">
<h2>{{ $title ?? 'titles' }}</h2>
<p>{{ $slot }}</p>
<p><a class="btn btn-secondary" href="/location/{{ $link }}" role="button">View details &raquo;</a></p>
   