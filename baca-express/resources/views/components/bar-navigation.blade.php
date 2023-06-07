<div class="w-full bg-green-500">
    <div class="container mx-auto w-full">
        <!-- contenu de la bar de navigation -->
        <!--##### Contenu de l'ecran a partir de la taille < sm #### -->
        <div class="sm:hidden flex p-2">
            <div class="flex justify-center items-center px-3 w-1/3">
                <button class="outline-none mobile-menu-button">
                    <div class="space-y-2">
                        <span class="block w-8 h-1 bg-white"></span>
                        <span class="block w-8 h-1 bg-white"></span>
                        <span class="block w-8 h-1 bg-white"></span>
                    </div>
                </button>
            </div>
            <div class="flex justify-center items-center w-full">
                <a href="{{route('Home')}}">
                    <h1 class="font-extrabold uppercase text-white text-2xl">Baca-Express</h1>
                </a>
            </div>
        </div>
        <div class="absolute hidden sm:hidden transition duration-300 mobile-menu bg-green-500 w-full">
            <div class="p-2">
                <ul class="font-medium text-white text-xs font-serif uppercase space-y-1">
                    <li><a href="{{route('apropos')}}" class="flex py-2 px-2 w-full justify-center border border-yellow-500 rounded"> A propos </a> </li>
                    <li><a href="{{route('service')}}" class="flex py-2 px-2 w-full justify-center border border-yellow-500 rounded">Services </a></li>
                    <li><a href="{{route('contact')}}" class="flex py-2 px-2 w-full justify-center border border-yellow-500 rounded">Contact</a></li>
                    <li><a href="#" class="flex py-2 px-2 w-full justify-center border border-yellow-500 rounded">Langues</a></li>
                </ul>
            </div>            
        </div>

        <!--##### Contenu de l'ecran a partir de la taille > sm #### -->
        <div class="hidden sm:grid grid-rows lg:grid-cols-4 gap-4">
            <!--le logo -->
            <div class="flex justify-center items-center">
                <a href="{{route('Home')}}">
                    <h1 class="font-extrabold uppercase text-white text-2xl">Baca-Express</h1>
                </a>
            </div>
            <!-- les liens -->
            <div class="flex justify-center lg:col-span-2">
                <ul class="flex space-x-8 text-white font-medium font-serif text-sm uppercase">
                    <li class="inline-block flex justify-center rounded hover:bg-gray-400 hover:bg-opacity-25"><a href="{{route('Home')}}" class="py-5 px-2">Acceuil</a></li>
                    <li class="inline-block flex justify-center rounded hover:bg-gray-400 hover:bg-opacity-25"><a href="{{route('apropos')}}" class="py-5 px-2">A propos</a></li>
                    <!--Liens pour les services -->
                    <li class="inline-block py-5 px-2 rounded hover:bg-gray-400 hover:bg-opacity-25"><a href="#">Services <span class="px-1"> &#x23F7;</span> </a>
                        <!-- Lien de service dropdown -->
                        <ul class="dropdown justify-center mt-4 p-2 bg-green-500">
                            <li class="px-3 py-3 bg-green-500 hover:bg-gray-400 hover:bg-opacity-25 "><a href="{{route('service')}}">Tous les services</a></li>
                            <li class="px-3 py-3 hover:bg-gray-400 hover:bg-opacity-25 "><a href="#">Services à bord</a></li>

                        </ul>
                    </li>
                    <li class="inline-block flex justify-centerrounded hover:bg-gray-400 hover:bg-opacity-25"><a href="{{route('contact')}}" class=" py-5 px-2 ">Contact</a></li>

                    <!-- ####### Langue lorsque l'ecran est a md ######-->


                    <li class="inline-block lg:hidden py-5 px-2 text-white font-medium font-serif text-sm uppercase"><a href="#"> Langue <span> &#8595</span></a>
                        <ul class="dropdown mt-2 p-2 bg-green-500 ">
                            <li class="px-2 py-2 hover:bg-gray-400 hover:bg-opacity-25"><a href="#"><span>&#x1F1EB;&#x1F1F7;</span> Francais</a></li>
                            <li class="px-2 py-2 hover:bg-gray-400 hover:bg-opacity-25"><a href="#"><span>&#x1F1EC;&#x1F1E7;</span> Anglais</a></li>
                            <li class="px-2 py-2 hover:bg-gray-400 hover:bg-opacity-25"><a href="#"><span>&#x1F1F8;&#x1F1F3;</span> Wolof </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- ######### la langue ecran lg ######## -->
            <div class="hidden lg:flex justify-center items-center">
                <ul class="text-white font-medium font-serif text-sm uppercase">
                    <li class="inline-block py-5 px-2"><a href="#"> Langue <span> &#8595</span></a>
                        <ul class="dropdown mt-2 p-2 bg-green-500">
                            <li class="px-2 py-2 hover:bg-gray-400 hover:bg-opacity-25"><a href="#"><span>&#x1F1EB;&#x1F1F7;</span> Francais</a></li>
                            <li class="px-2 py-2 hover:bg-gray-400 hover:bg-opacity-25"><a href="#"><span>&#x1F1EC;&#x1F1E7;</span> Anglais</a></li>
                            <li class="px-2 py-2 hover:bg-gray-400 hover:bg-opacity-25"><a href="#"><span>&#x1F1F8;&#x1F1F3;</span> Wolof </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>