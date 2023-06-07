@extends('Home')

@section('reservation')

<div class="container mx-auto ">
    <div class="lg:flex w-full bg-green-500 my-3">
        <!-- les information de reservation -->
        <div class="w-full">
            <!-- Le titre -->
            <div class="flex justify-center">
                <h1 class="font-medium font-serif text-xl text-white uppercase">Les informations reprises sur votre billet</h1>
            </div>
            <div>
            <p class="p-3 italic font-serif text-white text-center">
                Nous vous prions de bien vouloir vérifier attentivement toutes les informations avant de confirmer votre demande. Il est essentiel de s'assurer que toutes les données fournies sont correctes afin d'éviter toute confusion ou erreur ultérieure.
                </p>    
            </div>
            <div class="flex justify-center items-center w-full border border-gray-300 p-5">
                <div class="w-full flex justify-center p-3">
                    <form action="" method="post">
                        @csrf
                        <!-- #### informations deja sur le billet#### -->
                        <div class="">
                            <!-- pays de depart et de destination -->
                            <div>
                                <div class="flex">
                                    <div>
                                        <label for="pays">Pays de depart : </label> <br>
                                        <input type="text" name="paysDep" id="" class="border border-white" value="{{$paysDepart}}">
                                    </div>
                                    <div>
                                        <label for="pays">Pays de destination : </label> <br>
                                        <input type="text" name="paysDest" id="" class="border border-white" value="{{$paysDepart}}">
                                    </div>
                                </div>
                            </div>
                            <!-- ville de depart et ville de destination-->
                            <div>
                                <div class="flex">
                                    <div>
                                        <label for="pays">Ville de depart : </label> <br>
                                        <input type="text" name="paysDep" id="" class="border border-white" value="{{$villeDepart}}">
                                    </div>
                                    <div>
                                        <label for="pays">Ville de destination : </label> <br>
                                        <input type="text" name="paysDest" id="" class="border border-white" value="{{$villeDestination}}">
                                    </div>
                                </div>
                            </div>
                            <!-- Date de depart et heure de depart  -->
                            <div>
                                <div class="flex">
                                    <div>
                                        <label for="pays">Date de depart : </label> <br>
                                        <input type="text" name="paysDep" id="" class="border border-white" value="{{$dateDepart}}">
                                    </div>
                                    <div>
                                        <label for="pays"> Heure de depart : </label> <br>
                                        <input type="text" name="paysDest" id="" class="border border-white" value="{{$heureDepart}}">
                                    </div>
                                </div>
                            </div>
                            <!-- Le nombre de place resérvées et le prix total-->
                            <div>
                                <div class="flex">
                                    <div>
                                        <label for="pays"> Nombre de place reservées: </label> <br>
                                        <input type="text" name="paysDep" id="" class="border border-white" value="{{$nombreBillet}}">
                                    </div>
                                    <div>
                                        <label for="pays"> Prix total (FCFA): </label> <br>
                                        <input type="text" name="paysDest" id="" class="border border-white" value="{{$prixAchat}}">
                                    </div>
                                </div>
                            </div>
                            <!--#####-->
                        </div>
                        <!-- ##### Information a completer #### -->
                        <div class="flex justify-center m-2">
                            <h1 class="font-medium font-serif text-md text-white uppercase">Veuillez completer la reservation </h1>
                        </div>
                        <!-- Les information a completer -->
                        <div>
                            <!-- Le nom et prenom -->
                            <div class="flex space-x-2">
                                <!--nom-->
                                <div>
                                    <label for="nom">Nom</label> <br>
                                    <input type="text" name="nom" id="">
                                </div>
                                <!--Prenom-->
                                <div>
                                    <label for="prenom">prenom</label> <br>
                                    <input type="text" name="prenom" id="">
                                </div>
                            </div>
                            <!-- telephone et adresse  mail -->
                            <div class="flex space-x-2">
                                <!--nom-->
                                <div>
                                    <label for="Telephone">Telephone</label> <br>
                                    <input type="text" name="Telephone" id="">
                                </div>
                                <!--Prenom-->
                                <div>
                                    <label for="email">Adresse mail</label> <br>
                                    <input type="email" name="email" id="">
                                </div>
                            </div>
                            <!-- Le boutton de confirmation --> 
                            <div class="my-3">
                                <button class="px-2 py-2 w-full border border-gray-300 bg-yellow-500 ">Reserver</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Choix de la place -->
        <div class="w-full">
            <div class="flex justify-center" >
                <h1 class="font-medium font-serif text-xl text-white uppercase"> Bagage et autres marchandise de plus de 20kg</h1>
            </div>
            <div>
                Pas oublier de completer à voir fin de semaine 
            </div>

        </div>

    </div>
</div>

@endsection