@props(['post'])
<article class="[&:not(:last-child)]:border-b border-gray-100 pb-10">
    <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">
        <div class="article-thumbnail col-span-4 flex items-center">
            <a wire:navigate href="{{ route('posts.show', $post->slug) }}">
                <img class="mw-100 mx-auto rounded-xl" src="{{ $post->getThumbImage() }}" alt="thumbnail">
            </a>
        </div>
        <div class="col-span-8">
            <div class="article-meta flex py-1 text-sm items-center">
                o
                <span class="text-gray-500 text-xs">{{ $post->published_at->diffForHumans() }}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a wire:navigate href="{{ route('posts.show', $post->slug) }}">
                    {{ $post->title }}
                </a>
            </h2>

            <p class="mt-2 text-base text-gray-700 font-light">
                {{ $post->getExcerpt() }}
            </p>
            <div class="article-actions-bar mt-6 flex items-center justify-between">
                <div>
                    @foreach ($post->categories as $category)
                        <a href="#"
                            class="bg-blue-600
                    text-white
                    rounded-xl px-3 py-1 text-base">
                            {{ $category->title }}</a>
                    @endforeach
                </div>
                <div>

                    <livewire:like-button :key="$post->id" :$post/>
                </div>
            </div>
        </div>
    </div>
</article>
