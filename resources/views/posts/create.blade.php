<x-layout meta-title="Crear nuevo post" meta-description="Descripcion del nuevo post">

    <h1>{{ __('Create new post') }}</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        @include('posts.form-fields')

        <button type="submit">{{ __('Send') }}</button>
    </form>
    <br>

   <a href="{{ route('posts.index') }}">{{ __('back') }}</a>

</x-layout>
