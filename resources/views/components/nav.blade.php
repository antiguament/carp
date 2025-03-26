


<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">4ntiguament3</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline">(57) 312 8658195</a>

            <a href="{{ route('login') }}" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>

            <a href="{{ route('register') }}" class="text-blue-600 hover:text-pink-400 transition duration-300">Registrar</a>
        </div>
    </div>
</nav>
<nav class="bg-gray-50 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row flex-wrap font-medium mt-0 gap-4 md:gap-8 rtl:space-x-reverse text-sm">
                <!-- Primera línea -->
                <li>
                    <a href="{{ route('welcome') }}" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Inicio</a>
                </li>
              
               
                
                <!-- Segunda línea -->
                <li>
                    <a href="{{ route('capoeira') }}" class="text-gray-900 dark:text-white hover:underline">Capoeira</a>
                </li>
                <li>
                    <a href="{{ route('breackdance') }}" class="text-gray-900 dark:text-white hover:underline">Breackdance</a>
                </li>
                <li>
                    <a href="{{ route('parkour') }}" class="text-gray-900 dark:text-white hover:underline">Parkour</a>
                </li>
                <li>
                    <a href="{{ route('freerunning') }}" class="text-gray-900 dark:text-white hover:underline">Freerunning</a>
                </li>
                <li>
                    <a href="{{ route('calistenia') }}" class="text-gray-900 dark:text-white hover:underline">Calistenia</a>
                </li>
                <li>
                    <a href="{{ route('cliffjumping') }}" class="text-gray-900 dark:text-white hover:underline">Cliff Jumping</a>
                </li>
                <li>
                    <a href="{{ route('contacto') }}" class="text-gray-900 dark:text-white hover:underline">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>






