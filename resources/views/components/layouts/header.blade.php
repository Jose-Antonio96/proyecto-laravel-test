
<nav class="items-center flex justify-between text-gray-500 hover:text-gray-700 focus:text-gray-700">
  <div>
    <div class="container-fluid flex mx-6">
      <i class="fa-solid fa-magnifying-glass"></i>
      
      <a href="{{route ('searchpage') }}"> 
        <button class="text-4xl border-4 border-[#181818] rounded-full bg-[#d53046] text-white font-bold shadow-md hover:shadow-lg focus:bg-[#f87721] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#f87721] active:shadow-lg transition duration-150 ease-in-out py-4 px-20 ml-12 my-7 mr-12">
        Búsqueda
      </button>
    </a>
     

      <div class="ml-6 px-6 text-2xl container-fluid flex justify-center">

        <a href="{{route ('account') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] text-white font-bold py-3 px-12 rounded-full m-10">
            Cuenta
          </button>
        </a>
      

        <a href="{{route ('backend') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] text-white font-bold py-3 px-12 rounded-full m-10">
          Backend
          </button>
        </a>
      
      @guest
      <a href="{{route ('register') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] text-white font-bold py-3 px-12 rounded-full m-10">
          Registrarse
        </button>
      </a>
      

        <a href="{{route ('login') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] text-white font-bold py-3 px-12 rounded-full m-10">
          Login
        </button>
      </a>

      
      @endguest
      @auth 

      <a href="account" class="bg-[#1b9df0] hover:bg-[#f87721] text-[#181818] font-bold py-3 px-12 rounded-full m-10">{{ Auth::user()->name}}</a>
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button class="bg-[#1b9df0] hover:bg-[#f87721] text-[#181818] font-bold py-3 px-12 rounded-full m-10">Logout</button>
      </form>
        @endauth
      
        <a href="{{route ('help') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] text-[#181818] font-bold py-3 px-12 rounded-full m-10">
          Ayuda
        </button>
      </a>  
    </div>
    </div>
  </div>
</nav>