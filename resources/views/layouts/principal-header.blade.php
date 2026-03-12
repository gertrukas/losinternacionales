
       
    <div class="container max-w-full bg-white">
        <div class="wrapper grid grid-cols-2 py-1  mx-auto">
            <div class="pl-4 sm:pl-0">
                <p class="-copy mt-0">
                    <a href="tel:+525553362200">
                        <span class="inline-flex items-center space-x-2 whitespace-nowrap mr-4">
                            <i class="fa-solid fa-phone text-black"></i>   
                            <span class="text-black">+52(55) 5336 2200 </span>
                        </span>
                    </a>
                    <a href="mailto:info@losinternacionales.com">
                        <span class=" inline-flex items-center space-x-2 whitespace-nowrap">
                                <i class="fa-regular fa-envelope text-black"></i>
                                <span class="text-black">info@losinternacionales.com</span>
                        </span>
                    </a>
                    </p>
            </div>
            <div class="pr-4 text-right">
                <p class="-copy mt-0 text-black">La banda mas Internacional de México</p>
            </div>
        </div>
    </div>

<header>
    <nav class="bg-black px-4 py-0 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <a href="/" class="flex justify-center items-center p-4"><img src="{{ asset('images/los-internacionales.webp') }}" width="200" height="auto" alt="Los Internacionales"></a>
        </div>

        <!-- Burger -->
        <button id="menuBtn" class="flex items-center focus:outline-none">
             <i class="fa-solid fa-bars text-red-600 text-3xl"></i>
        </button>
    </nav>

    <!-- Menu -->
    <div id="mobileMenu" class="hidden bg-gray-800 shadow-lg border-t">
        <ul >
            <li><a href="#" class="-navButton block w-full ">Somos</a></li>
            <li><a href="#" class="-navButton block w-full ">Trayectoria</a></li>
            <li><a href="#" class="-navButton block w-full ">Servicios</a></li>
            <li><a href="#" class="-navButton block w-full ">Contacto</a></li>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('menuBtn');
            const menu = document.getElementById('mobileMenu');

            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        });
    </script>
        

    <div>
        <a href="https://wa.me/525553362200?text='hola%20"  target="_blank"
        class="fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition"><i class="fa-brands fa-whatsapp fa-2xl"></i></a>

    </div>

</header>
