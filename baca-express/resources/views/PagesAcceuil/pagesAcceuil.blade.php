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
        @include('PagesAcceuil.SectionPageAcceuil.FormulaireReservation')
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