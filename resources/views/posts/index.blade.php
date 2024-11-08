<x-layout meta-title="Blog title" meta-description="Home description">

    <h1>Mi blog</h1>

    <a href="{{ route('posts.create') }}">{{ __('Create new post') }}</a>

    @foreach ($posts as $post)

    <div style="display: flex; align-items: baseline">
        <h2>
            <a href="{{ route('posts.show', $post)}}">
            {{ $post->title }}
            </a>
        </h2> &nbsp;

        <a href="{{ route('posts.edit', $post) }}">{{ __('Edit') }}</a>

        &nbsp;

        <form action="{{ route('posts.destroy', $post) }}" method="post">

            @csrf @method('DELETE')

            <button type="submit">Delete</button>
           </form>
    </div>

    @endforeach

</x-layout>

