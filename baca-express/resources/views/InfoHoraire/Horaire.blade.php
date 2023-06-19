@extends('Home')

@section('horaire')


<div class="container mx-auto p-2">
    <!--######## Le contenu du cadre du debut de la page #######--->
    <div class="container mx-auto sm:top-10 bg-white border border-gray-300 rounded shadow">
        <div class="text-center">
            <h1 class="text-lg font-serif font-thin uppercase ">les horaires des prochains départ </h1>
        </div>
        <div class="text-lg font-serif font-thin uppercase text-center">
            {{$statusVoyage}}
        </div>
        <div class="text-center flex">
            <div class="w-full text-lg font-serif font-thin uppercase">
                {{$villeDepart}} <br>
                @foreach($paysDep as $lepays)
                <span class="text-xs italic capitalize">({{$lepays -> nom}})</span>
                @endforeach
            </div>
            @if($statusVoyage === "Aller simple")
            <span>
                &#x21c9;
            </span>
            @else
            <span>
                &#x21c6;
            </span>
            @endif
            <div class="w-full text-lg font-serif font-thin uppercase">
                {{$villeDestination}}<br>
                @foreach($paysDest as $lepays)
                <span class="text-xs italic capitalize">({{$lepays -> nom}})</span>
                @endforeach
            </div>
        </div>
    </div>
    <!--######## Le contenu des horaires #######--->
    <div>
        @foreach($villes as $villes)
        <div>
            {{$villes -> nom}}
        </div>
        <div>
        @foreach($villes -> horaire as $horaire)
        <div class="flex">
            <div>
                {{ $horaire -> dateDepart}}
            </div>
            <div>
                {{$horaire -> heureDepart}}
            </div> 
        </div>
        @endforeach
        </div>
        @endforeach
    </div>





</div>





@endsection