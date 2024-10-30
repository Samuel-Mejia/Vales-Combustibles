<body>
    

<!-- <script>
    // Define el tiempo en milisegundos (3 segundos)
    const inactivityTime = 3000;

    let inactivityTimer;

    // Función para redirigir al cierre de sesión
    function logout() {
        window.location.href = "{{ url('/logout') }}";
    }

    // Reinicia el temporizador al detectar actividad
    function resetTimer() {
        clearTimeout(inactivityTimer);
        inactivityTimer = setTimeout(logout, inactivityTime);
    }

    // Detecta eventos de actividad del usuario
    window.onload = resetTimer;
    document.onmousemove = resetTimer;
    document.onkeypress = resetTimer;
    document.onscroll = resetTimer;
    document.onclick = resetTimer;
</script> -->

</body>
<nav class="bg-[#f05454] border-gray-200 dark:bg-gray-900 relative z-10 w-full">
        <div class="w-full flex items-center justify-between mx-auto p-4">
        <!-- Contenedor para la imagen en la esquina izquierda -->
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <a href="{{ url('/') }}"><img  src="{{ asset('img/cruz-roja-logo.jpeg') }}" class="h-[4rem]" alt="Flowbite Logo"></a>
            
        </div>

        <div class="clock">
            <span id="hours">00</span>:<span id="minutes">00</span>:<span id="seconds">00</span>
            <span id="ampm">AM</span> <!-- Este nuevo span muestra AM o PM -->
        </div>
        

        <div class="flex flex-grow items-center justify-center space-x-3 -ml-24">
            <h2 class="text-black font-bold text-xl">VALES DE COMBUSTIBLE</h2>
            <img src="{{ asset('img/gas-station_icon.png') }}" alt="Gasolinera" class="w-7 h-7">
        </div>



        
       <!-- Right Side Of Navbar -->
<ul class="navbar-nav ms-auto">
    <!-- Authentication Links -->
    @if (!session()->has('user')) <!-- Verifica si no hay un usuario logueado -->
        <button type="button"
            class="text-white bg-[#30475e] hover:bg-[#465f79] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            <a href="{{ url('/login') }}">{{ __('Login') }}</a>
        </button>
    @else
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
            class="text-white bg-[#30475e] hover:bg-[#465f79] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            <span>{{ session('user')->username }}</span> <!-- Muestra el nombre del usuario desde la sesión -->
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdown"
            class="border border-blue-300 bg-[#30475e] hover:bg-[#465f79] z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-1 text-sm text-white rounded-lg bg-[#30475e] dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a class="block px-4 py-2 hover:bg-[#465f79] dark:hover:bg-gray-600 dark:hover:text-white" href="{{ url('/logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>
            </ul>
        </div>

        <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @endif
</ul>

    </div>

</nav>
