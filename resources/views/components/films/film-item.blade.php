@props(['film'])
<article class="my-5">
    <div class="flex">
        <div class="flex items-center article-thumbnail">
            <a wire:navigate href="{{ route('films.show', $film->id) }}">
                <img style="max-width: 200px" class="mx-auto mw-100 rounded-l" src="{{ $film->getThumbnailUrl() }}" alt="thumbnail">
            </a>
        </div>
        <div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <div class="text-gray-900 font-bold text-xl mb-2">{{ $film->title }}</div>
                <p class="text-gray-700 text-base">
                    {{ $film->overview }}
                </p>
            </div>
            <span class="text-sm text-gray-500"> {{ $film->release_date->format('d-m-Y') }} - {{ $film->release_date->diffForHumans() }} </span>
        </div>
    </div>
</article>
