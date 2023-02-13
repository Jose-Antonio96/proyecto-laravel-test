<label>
    Nombre <br>
    <input name="name" type="text" value="{{old('name', $user->name)}}">
    @error('name')
        <br>
        <small>*{{$message}}</small>
    @enderror

</label><br>

<label>
    Email <br>
    <input name="email" type="text" value="{{old('email', $user->email)}}"></input>
    @error('email')
        <br>
        <small>*{{$message}}</small>
    @enderror
</label><br>


<label>
    Contraseña <br>
    <input name="password" type="password" value="{{old('password', $user->password)}}">
    @error('password')
        <br>
        <small>*{{$message}}</small>
    @enderror
</label><br>