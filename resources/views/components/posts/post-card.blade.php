@props(['post'])
<div class="md:col-span-1 col-span-3">
    <a wire:navigate href="{{ route('posts.show', $post->slug) }}">
        <div>
            <img class="w-full rounded-xl"
                src="{{ $post->getThumbImage() }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2 gap-2">
            @foreach ($post->categories as $category)
            <a href="{{ route('posts.index', ['category' => $category->title]) }}"
                class="bg-blue-600
                        text-white
                        rounded-xl px-3 py-1 text-base">
                {{$category->title}}</a>
        @endforeach
            <p class="text-gray-500 text-sm">{{ $post->published_at }}</p>
        </div>
        <a  wire:navigate href="{{ route('posts.show', $post->slug) }}" class="text-xl font-bold text-gray-900">{{ $post->title }}</a>
    </div>

</div>
