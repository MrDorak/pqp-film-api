<x-app-layout :title="$film->title">
    <article class="w-full col-span-4 py-5 mx-auto mt-10 md:col-span-3" style="max-width:700px">
        <div class="flex justify-center items-center mb-4">
            <img class="w-48" src="{{ $film->getThumbnailUrl() }}" alt="texte alternatif">
        </div>
        <h1 class="text-4xl font-bold text-left text-gray-800">
            {{ $film->title }}
        </h1>
        <div class="flex items-center justify-between mt-2">
            <div class="flex items-center">
                <span class="mr-2 text-gray-500">{{ $film->release_date->diffForHumans() }}</span>
            </div>
        </div>

        <div class="py-3 text-lg prose text-justify text-gray-800 article-content">
            {!! $film->overview !!}
        </div>
    </article>
</x-app-layout>
