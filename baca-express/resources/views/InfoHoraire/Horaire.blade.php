@extends('Home')

@section('horaire')


<div class="container mx-auto p-10">
    <div class="container mx-auto sm:top-10 bg-white border border-gray-300 rounded shadow">
        @include('PagesAcceuil.SectionPageAcceuil.FormulaireReservation')
    </div>
    <div class="container mx-auto mt-2">
        <div class="">
            <div class="text-center bg-green-500 p-5">
                <h1 class="font-extrabold text-white uppercase serif text-lg">Ci-dessous les horaires des prochains voyages : {{$depart}} - {{$destination}}</h1>
            </div>
        </div>

    </div>


    @foreach($pays as $pays)
    <div class="justify-center my-4">
        <div class="font-bold font-serif uppercase">
            <span class="font-light text-sm font-serif lowercase">Pays de départ :</span>
            {{$pays->nom}}
        </div>
        @foreach($pays -> ville as $villes)

        <div class="justify-center my-4">
            <div class="font-bold font-serif uppercase">
                <span class="font-light text-sm font-serif lowercase">Ville d'embarquement : </span>
                {{$villes -> nom}}
            </div>
            @foreach($villes -> horaire as $horaire)
            <div class="sm:flex space-x-8 border border-gray-300 p-3">
                <div class="w-full font-bold font-serif uppercase text-center">
                    <h1 class="font-light text-sm font-serif lowercase">Date de depart : </h1>
                    {{$horaire -> dateDepart}}
                </div>
                <div class="w-full font-bold font-serif uppercase text-center">
                    <h1 class="font-light text-sm font-serif lowercase">Heure de depart :</h1>
                    {{$horaire -> heureDepart}}
                </div>
                <div class="w-full font-bold font-serif uppercase text-center">
                    <h1 class="font-light text-sm font-serif lowercase"> Prix </h1>
                    {{$prix}} <span>FCFA</span>
                </div>

                <div class="w-full flex items-center justify-center">
                    <a href="{{route('reservation')}}" class="w-full">
                        <button class="px-2 py-2 border border-gray-300 bg-yellow-500 rounded w-full">
                            Reservation <span>&#x27AA;</span>
                        </button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach

    </div>
    @endforeach
</div>

@endsection