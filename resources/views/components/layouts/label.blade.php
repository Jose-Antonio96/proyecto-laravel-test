

    <br>
    <input name={{$name}} type={{$type}} value="{{old($value)}}">
    @error('name')
        <br>
        <small>*{{$message}}</small>
    @enderror



