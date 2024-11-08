<label for="">

    {{ __('Title') }} <br>

    <input name="title" type="text" value="{{ old('title', $post->title) }}"> <br>
    @error('title')
        <small style="color: red">{{ $message }}</small>
    @enderror
    <br>
</label>

<label for="">
    {{ __('Body') }}<br>
    <textarea name="body">{{ old('body', $post->body) }}</textarea> <br>
    @error('body')
        <small style="color: red">{{ $message }}</small>
    @enderror
    <br>
</label>

