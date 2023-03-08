
<nav class="relative text-gray-500 hover:text-gray-700 focus:text-gray-700">

  <div class="items-center py-4 flex justify-center">

    <ul class="grid grid-cols-1 text-2xl hidden xl:block">
       
          <a href="{{route ('searchpage') }}"> 
            <button class="inline-block align-middle text-3xl border-4 border-[#181818] rounded-full bg-[#d53046] text-white font-bold shadow-md hover:shadow-lg focus:bg-[#f87721] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#f87721] active:shadow-lg transition duration-150 ease-in-out py-3 px-12 m-4 text-center">
            Búsqueda
          </button>
        </a>
        
          <a href="{{route ('mainpage') }}">
            <button class="bg-[#1b9df0] hover:bg-[#f87721] text-white font-bold py-3 px-10 rounded-full m-3">
              Home
            </button>
          </a>
        

        <a href="{{route ('backend.index') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] text-white font-bold py-3 px-10 rounded-full m-3">
          Backend
          </button>
        </a>
      
      @guest
      <a href="{{route ('register') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] text-white font-bold py-3 px-10 rounded-full m-3">
          Registrarse
        </button>
      </a>
      

        <a href="{{route ('login') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] text-white font-bold py-3 px-10 rounded-full m-3">
          Login
        </button>
      </a>

      
      @endguest

      @auth 

      <a href="{{route("account")}}" class="bg-[#1b9df0] hover:bg-[#f87721] text-[#181818] font-bold py-3 px-10 rounded-full m-3">{{ Auth::user()->name}}</a>
      
      
        <form class="inline-block" action="{{route('logout')}}" method="POST">
            @csrf
            <input type="submit" class="bg-[#1b9df0] hover:bg-[#f87721] text-[#181818] font-bold py-3 px-10 rounded-full m-3" value="Logout">
            
        </form>
      
          @endauth
      
        <a href="{{route ('help') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] text-[#181818] font-bold py-3 px-10 rounded-full m-3">
          Ayuda
        </button>
        </a>  
  </ul>

  </div>
      <div class="px-4 cursor-pointer xl:hidden items-center" id="burger">
        <svg class="w-12 stroke-[#f87721] bg-[#181818] rounded-lg my-5 ml-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
        </svg>
      </div>

    <ul class="grid grid-cols-1 md:grid-cols-2 items-center ml-6 px-6 text-2xl xl:hidden xl:block bg-[#181818]" id="menu">
       
        <a class="m-2" href="{{route ('searchpage') }}"> 
          <p class="text-[#f87721]">
          Búsqueda
          </p>
      </a>

      <a class="m-2" href="{{route ('mainpage') }}">
          <p class="text-[#f87721]">
          Home
          </p>
        
      </a>
    

      <a class="m-2" href="{{route ('backend.index') }}">
          <p class="text-[#f87721]">
        Backend
          </p>
      </a>
    
    @guest
    <a class="m-2" href="{{route ('register') }}">
          <p class="text-[#f87721]">
        Registrarse
          </p>
    </a>
    

      <a class="m-2" href="{{route ('login') }}">
          <p class="text-[#f87721]">
        Login
          </p>
    </a>

    
    @endguest
    @auth 

    <a href="{{route("account")}}" class="m-2 "><p class="text-[#f87721]">{{ Auth::user()->name}}</p></a>
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button class="m-2 text-[#f87721]">Logout</button>
      </form>
        @endauth
    
      <a class="m-2" href="{{route ('help') }}">
          <p class="text-[#f87721]">
        Ayuda
        </p>
        </a>  
      </ul>
    </div>
  </div>
    <script src="burger.js"></script>
</div>



</nav>