<div class="">
    <div class="text-center pt-10 sm:pt-5">
        <h1 class="uppercase text-lg text-green-500 font-extrabold">Reservez votre billet et voyagez avec Baca-Express</h1>
    </div>
    <div class="p-2 sm:p-2 w-full">
        <!-- Le formulaire de reservation -->
        <form method="POST" action="{{route('horaire')}}">
            @csrf
            <!--Section avec les button radio aller simple et retour et les destination -->
            <div class=" w-full">
                <!-- Bouttons radio aller simple et aller-retour -->
                @include('PagesAcceuil.SectionFormulaireReserveBillet.ComposantFormulaireReserveBillet.ButtonRadioTrajet')
                <!-- les input de destination (depart et arrivé), le jour de départ, nombre de passagé et le button de recherge-->
                <div class="lg:flex lg:space-x-2">
                    <!-- Sestion de la ville de départ et ville de destination -->
                    <div class="sm:flex sm:space-x-2 w-full mb-5 sm:mb-2">

                        <!-- ########### Pays et ville de depart ###### -->


                        <div class="w-full">
                            <!--Ville départ -->
                            <div class=" w-full">
                                <div class="py-2">
                                    <label for="depart" class="font-light font-serif text-md">Pays de depart</label>
                                </div>
                                <div>
                                    <select name="SelectNamePaysdepart" id="SelectIdPaysdepart" class="w-full">
                                        <option value="">Choisir un pays de départ </option>
                                        @foreach($pays as $pays)
                                        <option value="{{$pays->id}}">{{$pays->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!--Ville départ -->
                            <div class="w-full hidden" id="DivVilleDepart">
                                <div class="py-2">
                                    <label for="depart" class="font-light font-serif text-md"> Ville de depart</label>
                                </div>
                                <div>
                                    <select name="SelectNameVilleDepart" id="SelectIdVilleDepart" class="w-full">

                                    </select>
                                </div>
                            </div>
                        </div>



                        <!--########### Pays et ville de destination ########-->


                        <div class="w-full hidden" id="divPaysDestination">
                            <!--pays de  destination -->
                            <div class=" w-full ">
                                <div class="py-2">
                                    <label for="depart" class="font-light font-serif text-md">Pays de destination</label>
                                </div>
                                <div>
                                    <select name="SelectNamePaysDestination" id="SelectIdPaysDestination" class="w-full">

                                    </select>
                                </div>
                            </div>
                            <!--Ville départ -->
                            <div class="w-full hidden" id="DivVilleDestination">
                                <div class="py-2">
                                    <label for="depart" class="font-light font-serif text-md"> Ville de destination</label>
                                </div>
                                <div>
                                    <select name="SelectNameVilleDestination" id="SelectIdVilleDestination" class="w-full">

                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--########### Date de depart et de retour ########-->

                        <div class="w-auto hidden" id="DivDateAllerRetour">
                            <!-- date depart-->
                            <div class="w-full" id="divDateDepart">
                                <div class="py-2">
                                    <label for="depart" class="font-light font-serif text-md"> Date de depart</label>
                                </div>
                                <div>
                                    <input type="date" name="InputNameDateDepart" id="InputIdDateDepart">
                                </div>
                            </div>

                            <!-- date retour-->
                            <div class="w-full" id="DivDateRetour" style="display:none;">
                                <div class="py-2">
                                    <label for="depart" class="font-light font-serif text-md"> Date de retour</label>
                                </div>
                                <div>
                                    <input type="date" name="InputNameDateRetour" id="InputIdDateRetour">
                                </div>
                            </div>

                        </div>


                        <!--########### Nombre de place et bouton rechercher ########-->

                        <div class=" hidden w-full flex justify-center items-center" id="DivNombrePlaceBtnRech">
                            <div>
                                <!-- Nombre de place -->
                                <div class="w-full" id="DivNombrePlace">
                                    <div class="py-2 text-center">
                                        <label for="NombrePlace" class="font-light font-serif text-md "> nombre de personnes</label>
                                    </div>
                                    <div>
                                        <div class="grid grid-cols-3 ">
                                            <div class="flex justify-center items-center">
                                                <span id="buttonDown" class="border border-green-500 rounded bg-green-500 hover:bg-green-300 px-3 text-white"> &#x21cA; </span>
                                            </div>
                                            <div class="text-center mx-1" id="">
                                                <input type="text" name="nombreReservation" id="nombreReservation" value="1" class="w-10 px-2 text-center border-none">
                                            </div>
                                            <div class="flex justify-center items-center">
                                                <span id="buttonUP" class="border border-green-500 rounded bg-green-500 hover:bg-green-300 px-3 text-white"> &#x21c8; </span>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <!-- Boutton de recherche -->
                                <div class="m-2">
                                    <button class="w-full px-2 py-3 border border-gray-300 bg-yellow-500 hover:bg-yellow-600 rounded">
                                        recherche
                                    </button>
                                </div>
                            </div>

                        </div>














                    </div>

                    <!-- Section du nombre de personne sur la reservation et le button recherche -->

                </div>
            </div>
        </form>
    </div>
</div>