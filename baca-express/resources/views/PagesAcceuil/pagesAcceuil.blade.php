@extends('Home')

@section('Acceuil')

<div class="w-full bg-gray-300">
    <div class="px-2 mx-auto flex justify-center">
        <div class="hidden sm:flex justify-center p-10 bg-red-500 w-full h-96 bg-fixed" style="background-image: url(https://images.pexels.com/photos/3608967/pexels-photo-3608967.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1); background-size: cover;">
            <div class="p-10 text-white">
                <h1 class="text-center text-2xl uppercase font-extrabold ">Votre satisfaction est notre destination ultime</h1>
            </div>
        </div>
        <!-- la section des information de voyage -->
        <div class="sm:absolute container mx-auto sm:top-72 bg-white border border-gray-300 rounded shadow-2xl">
            <div class="">
                <div class="text-center pt-5">
                    <h1 class="uppercase text-lg text-green-500 font-extrabold">Reservez votre billet et voyagez avec BacaExpress</h1>
                </div>
                <div class="p-2 sm:p-10 w-full">
                    <!-- Le formulaire de reservation -->
                    <form action="" method="post">
                        @csrf
                        <!--Section avec les button radio aller simple et retour et les destination -->
                        <div class=" w-full">
                            <!-- Bouttons radio aller simple et aller-retour -->
                            <div class="sm:flex sm:space-x-4 mb-3">
                                <div class="flex space-x-2 items-center m-2 ">
                                    <input type="radio" name="AllerRetour" id="AllerSimple" class="w-6 h-6 checked:bg-green-500 checked:hover:bg-green-500 checked:active:bg-green-500 checked:focus:bg-green-500 focus:bg-green-500 focus:outline-none focus:ring-1 focus:ring-green-500" checked>
                                    <label for="AllerSimple"> Aller simple</label>
                                </div>
                                <div class="flex space-x-2 items-center m-2">
                                    <input type="radio" name="AllerRetour" id="AllerRetour" class="w-6 h-6 checked:bg-green-500 checked:hover:bg-green-500 checked:active:bg-green-500 checked:focus:bg-green-500 focus:bg-green-500 focus:outline-none focus:ring-1 focus:ring-green-500">
                                    <label for="AllerRetour">Aller-retour</label>
                                </div>
                            </div>
                            <!-- les input de destination (depart et arrivé), le jour de départ, nombre de passagé et le button de recherge-->
                            <div class="lg:flex lg:space-x-2">
                                <!-- le ville de départ et ville destination -->
                                <div class="sm:flex sm:space-x-2 w-full">
                                    <!--Ville départ -->
                                    <div class="w-full">
                                        <label for="Depart">De</label> <br>
                                        <input type="text" name="Depart" id="" class="border border-gray-300 rounded w-full">
                                    </div>
                                    <div class="w-full">
                                        <label for="Destination">À</label> <br>
                                        <input type="text" name="Destination" id="" class="border border-gray-300 rounded w-full">
                                    </div>
                                </div>

                                <!-- Section avec la date de depart le nombre de voyageurs et button recherhe -->
                                <div class="w-full">
                                    <div class="sm:flex sm:space-x-2">
                                        <!--Date de depart et date de retour -->
                                        <div class="w-full">
                                            <div class="w-full">
                                                <label for="dateDepart">Départ</label> <br>
                                                <input type="date" name="dateDepart" id="" class="border border-gray-300 rounded w-full">
                                            </div>
                                        </div>
                                        <!--Nombre de passager -->
                                        <div class="w-full">
                                            <div class="">
                                                <label for="passagers">Voyageurs</label> <br>
                                                <select name="" id="passagers" class="border border-gray-300 rounded w-full">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="contactPassagers">+10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--button recherche -->
                                        <div class="w-full flex items-end">
                                            <div class="w-full p-2 sm:p-0">
                                                <button class="px-3 py-2 border border-gray-300 rounded bg-yellow-500 w-full">Recherche</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--section d'information sur le vayage -->
<div class="sm:mt-32 mt-5">
    <div class="container mx-auto px-10 flex justify-center">
        <div class="lg:flex lg:space-x-4 justify-center w-full md:w-1/2 lg:w-full">
            <div class="w-full text-center border border-gray-300 rounded">
                <a href="#">
                    <button class="px-2 py-5 border border-gray-300 rounded w-full">
                        <span class="px-5">&#x2635;</span> Consultez votre reservation
                    </button>
                </a>
            </div>
            <div class="w-full text-center border border-gray-300 rounded">
                <a href="#">
                    <button class="px-2 py-5 border border-gray-300 rounded w-full">
                        <span class="px-5">&#x2602;</span> Points d'arrete sur traject
                    </button>
                </a>
            </div>
            <div class="w-full text-center border border-gray-300 rounded">
                <a href="#">
                    <button class="px-2 py-5 border border-gray-300 rounded w-full">
                        <span class="px-5">&#x2600;</span> Service apres vente
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- titre de nos valeur -->
<div class="text-center mt-5">
    <h1 class="font-thin uppercase text-2xl">Nos valeurs </h1>
</div>
<!-- Nos valeurs-->
<div>
    <div class="container mx-auto sm:p-5 border-t border-gray-300 rounded">
        <div class="sm:flex sm:space-x-8 justify-center p-5">
            <div class="shadow text-center mb-2">
                <h1 class="text-center font-light uppercase font-serif">Sécurité</h1>
                <p class="font-light italic">
                    Un voyage sans tracas grâce aux normes de sécurité strictes et rigoureuses
                </p>

            </div>
            <div class="shadow text-center mb-2">
                <h1 class="text-center font-light uppercase font-serif">Confort</h1>
                <p class="font-light italic">
                    Le confort est notre promesse : voyagez comme vous le méritez
                </p>

            </div>
            <div class="shadow text-center mb-2">
                <h1 class="text-center font-light uppercase font-serif">Ponctualité</h1>
                <p class="font-light italic">
                    Nous valorisons votre temps, c'est pourquoi nous partons toujours à l'heure
                </p>

            </div>
            <div class="shadow text-center mb-2">
                <h1 class="text-center font-light uppercase font-serif">Fiabilité</h1>
                <p class="font-light italic">
                    La fiabilité est notre credo, votre tranquillité d'esprit est notre objectif
                </p>
            </div>
        </div>
    </div>
</div>



@endsection