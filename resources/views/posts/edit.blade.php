<x-layout meta-title="Crear nuevo post" meta-description="Descripcion del nuevo post">

    <h1>{{ __('Edit post') }}</h1>

    <form action="{{ route('posts.update', $post) }}" method="post">

        @csrf @method('PATCH')

        @include('posts.form-fields')

        <button type="submit">{{ __('Edit') }}</button>
    </form>
    <br>

   <a href="{{ route('posts.show', $post) }}">{{ __('back') }}</a>

</x-layout>
