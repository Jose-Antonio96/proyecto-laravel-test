     <div class="mb-4">
      <label class="block text-[#181818] text-sm font-bold mb-2">
        Nombre
      </label>
      <input class="shadow appearance-none border border-[#f87721] rounded w-full py-2 px-3 text-[#181818] mb-3 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" value="{{old('name', $user->name)}}">
    @error('name')
        <br>
        <small>*{{$message}}</small>
    @enderror
    </div>

    <div class="mb-4">
      <label class="block text-[#181818] text-sm font-bold mb-2">
        Email
      </label>
      <input class="shadow appearance-none border border-[#f87721] rounded w-full py-2 px-3 text-[#181818] mb-3 leading-tight focus:outline-none focus:shadow-outline" name="email" type="email" value="{{old('email', $user->email)}}">
    @error('email')
        <br>
        <small>*{{$message}}</small>
    @enderror
    </div>
    <div class="mb-6">
      <label class="block text-sm font-bold mb-2 text-[#181818]">
        Nueva contraseña
      </label>
      <input class="shadow appearance-none border border-[#f87721] rounded w-full py-2 px-3 text-[#181818] mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" value="{{old('password', $user->password)}}">
    </div>
    
