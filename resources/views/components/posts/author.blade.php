@props(['post'])
<img class="w-7 h-7 rounded-full mr-3" src="{{ $post->author->profile_photo_url }}" alt="{{ $post->author->name }}">
<span class="mr-1 text-xs">{{ $post->author->name }}</span>
