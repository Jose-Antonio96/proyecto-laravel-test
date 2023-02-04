
<nav class="relative items-center flex justify-between text-gray-500 hover:text-gray-700 focus:text-gray-700">
  <div class= "px-6 text-2xl">
    <div class="container-fluid flex justify-between mx-6">
      <i class="fa-solid fa-magnifying-glass"></i>

      <button type="button" class="relative border-4 border-[#181818] text-4xl rounded-full inline-block px-16  bg-[#d53046] text-white font-bold text-xs shadow-md hover:shadow-lg focus:bg-{#f87721} focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#f87721] active:shadow-lg transition duration-150 ease-in-out ml-8 my-8">
      <a href="{{route ('searchpage') }}">Búsqueda</a>
      </button> 

      <div class="container-fluid flex flex justify-center ml-28">

      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-12 rounded-full m-10">
        <a href="{{route ('searchpage') }}">Cuenta</a>
      </button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-12 rounded-full m-10">
        <a href="{{route ('searchpage') }}">Backend</a>
      </button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-12 rounded-full m-10">
        <a href="{{route ('searchpage') }}">Registrarse</a>
      </button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-12 rounded-full m-10">
        <a href="{{route ('searchpage') }}">Login</a>
      </button>
      <button class="bg-blue-500 hover:bg-blue-700 text-[#f87721] font-bold py-3 px-12 rounded-full m-10">
        <a href="{{route ('searchpage') }}">Ayuda</a>
      </button>
      </div>
    </div>
  </div>
</nav>