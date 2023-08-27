<nav id="main-nav">
    <ul class="second-nav">
        @forelse(categories() as $c)
            <li><a href="{{ route("singleCat", ['id' => $c->id]) }}"><i class="bi bi-house me-2"></i> {{ $c->name }}</a></li>
        @empty
            <div class="alert alert-warning" role="alert">
                No Data !
            </div>
        @endforelse
    </ul>
</nav>
