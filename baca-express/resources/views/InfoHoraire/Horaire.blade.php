@extends('Home')

@section('horaire')


<div class="lg:container mx-auto p-2">
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
            <div class="flex items-center">
                <span>
                    &#x21c9;
                </span>
                <span>
                    &#x21c9;
                </span>
            </div>
            @else
            <div class="flex items-center">
                <span>
                    &#x21c6;
                </span>
                <span>
                    &#x21c6;
                </span>
            </div>
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

    @foreach($villes as $villes)
    <div class="flex justify-center items-center">
        <!-- #### Section des horaire disponibles #### -->
        <div class="flex flex-wrap justify-center">
            @foreach($villes -> horaire as $horaires)
            <div class="min-w-full md:min-w-[45%] border border-gray-300 rounded m-3">
                <!--## information sur la date et l'heure de depart ##-->
                <div class="flex space-x-3 p-3 border-b border-gray-300 bg-green-400">
                    <!-- Date de depart-->
                    <div class="w-full">
                        <h1 class="font-thin font-serif text-xs uppercase italic">Date de départ</h1>
                        <div class="font-semibold font-serif text-md uppercase">
                            {{date('l d/m/y', strtotime($horaires -> dateDepart)) }}
                        </div>
                    </div>
                    <!-- heure de depart -->
                    <div class="w-full flex justify-center">
                        <div>
                            <h1 class="font-thin font-serif text-xs uppercase italic">Heure de départ</h1>
                            <div class="font-semibold font-serif text-md uppercase">
                                {{date('H:i',strtotime($horaires -> heureDepart))}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ## Informations des ville de depart et ville de destination provenant de la boucle parent -->
                <div class="flex bg-green-400 p-3">
                    <!-- ville de depart -->
                    <div class="w-full">
                        <h1 class="font-thin font-serif text-xs uppercase italic">Ville de départ </h1>
                        <div class="font-semibold font-serif text-md uppercase">
                            {{$villes -> nom}}
                        </div>
                    </div>
                    <!-- Les fleches -->

                    <!-- Ville d'arrivée -->
                    <div class="w-full flex justify-center">
                        <div>
                            <h1 class="font-thin font-serif text-xs uppercase italic">Ville de départ </h1>
                            <div class="font-semibold font-serif text-md uppercase">
                                {{$villeDestination}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- information sur les tarif -->
                <div class="flex space-x-3 p-3">

                    <!-- tarif sur place  en fonction du nombre des places reservées-->
                    <div class="w-full">
                        <h1 class="font-thin font-serif text-xs uppercase italic underline underline-offset-8">Tarif sur place</h1>
                        <div class="mt-2">
                            <div class="font-thin font-serif text-xs uppercase">
                                <span class="font-thin font-serif text-xs lowercase italic">Pour : </span> {{$nombreDeReservation}} <span>Voyageur(s)</span>
                            </div>
                            <div class="my-2 font-semibold font-serif text-lg uppercase">
                                {{$prix}} <span>FCFA</span>
                            </div>
                        </div>
                    </div>
                    <!-- tarif en ligne  en fonction du nombre des places reservées-->
                    <div class="w-full flex justify-center">
                        <div>
                            <h1 class="font-thin font-serif text-xs uppercase italic underline underline-offset-8">Tarif en ligne</h1>
                            <div class="mt-2">
                                <!-- Tarif en ligne -->
                                <div>
                                    <div class="font-thin font-serif text-xs uppercase">
                                        <span class="font-thin font-serif text-xs lowercase italic">Pour : </span> {{$nombreDeReservation}} <span>Voyageur(s)</span>
                                    </div>
                                    <div class="my-2 font-semibold font-serif text-lg uppercase">
                                        {{$prixLigne}} <span>FCFA</span>
                                    </div>
                                </div>
                                <!-- Button paiement en ligne -->
                                <div>
                                    <button class="font-thin font-serif text-sm uppercase px-2 py-2 shadow-lg border border-gray-300 shadow bg-yellow-400"> Payer en ligne </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full text-center">
                <span class="font-thin font-serif text-sm lowercase italic">
                    Bénéficiez de 10% de reduction en prenant vos billets 3 jours avant le départ
                </span>
                </div>

            </div>
            @endforeach
        </div>

    </div>
    @endforeach





</div>





@endsection