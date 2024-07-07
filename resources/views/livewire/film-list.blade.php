<div class="px-3 lg:px-7">
    <div class="my-3">
        {{ $this->films->onEachSide(1)->links() }}
    </div>

    @foreach ($this->films as $film)
        <x-films.film-item :film="$film" />
    @endforeach

    <div class="my-3">
        {{ $this->films->onEachSide(1)->links() }}
    </div>
</div>
