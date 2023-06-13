


  <div class="navbar bg-base-100 items-center h-24 m-4 mb-3 py-1 flex justify-center -translate-y-2">

    <ul class="text-2xl hidden xl:block ">
       
          <a href="{{route ('searchpage') }}"> 
            <button class="inline-block text-3xl -translate-y-2  border-4 border-[#181818] rounded-full bg-[#d53046] text-white font-bold shadow-md hover:shadow-lg focus:bg-[#f87721] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#f87721] active:shadow-lg transition duration-150 ease-in-out py-3 px-12 m-4 text-center">
            Búsqueda
          </button>
        </a>
        
          <a href="{{route ('mainpage') }}">
            <button class="bg-[#1b9df0] hover:bg-[#f87721] -translate-y-2 text-white font-bold py-3 px-10 rounded-full m-3">
              Home
            </button>
          </a>
        
        @auth 

        <a href="{{route ('backend.index') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] -translate-y-2 text-white font-bold py-3 px-10 rounded-full m-3">
          Backend
          </button>
        </a>

        @endauth
      
      @guest
      <a href="{{route ('account_choose') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] -translate-y-2 text-white font-bold py-3 px-10 rounded-full m-3">
          Registrarse
        </button>
      </a>
      

        <a href="{{route ('login') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] -translate-y-2 text-white font-bold py-3 px-10 rounded-full m-3">
          Login
        </button>
      </a>

      
      @endguest

      <a href="{{route ('help') }}">
          <button class="bg-[#1b9df0] hover:bg-[#f87721] -translate-y-2 text-[#181818] font-bold py-3 px-10 rounded-full m-3">
          Ayuda
        </button>
        </a>

      @auth 

      <form class="inline-block" action="{{route('logout')}}" method="POST">
            @csrf
            <input type="submit" class="bg-[#1b9df0] hover:bg-[#f87721] -translate-y-2 text-[#181818] font-bold py-3 px-10 rounded-full m-3" value="Logout">
            
        </form>

        <div class="avatar m-2.5 translate-x-40">
          <div class="w-24 rounded-xl translate-y-9 ml-16">
      <a href="{{route("account")}}">
        <img src="{{ asset('images/' . Auth::user()->image) }}"/></a>
        </div>
      </div>
      
        
      
          @endauth
      
        
        

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
    

      <a class="m-2" href="{{route ('login') }}">
          <p class="text-[#f87721]">
        Login
          </p>
    </a>

    
    @endguest

    <a class="m-2" href="{{route ('help') }}">
      <p class="text-[#f87721]">
    Ayuda
      </p>
  </a>  

    @auth 
    <form action="{{route('logout')}}" method="POST">
      @csrf
      <button class="m-2 text-[#f87721]">Logout</button>
    </form>
    <a href="{{route("account")}}" class="m-2 avatar"></a>
    <div class="w-24 rounded-xl">
      <img src="{{Auth::user()->avatar}}" alt="imagen de usuario"/>
    </div>
  @endauth

        </div>
      </ul>
    </div>
  </div>
    <script src="burger.js"></script>
</div>



</nav>