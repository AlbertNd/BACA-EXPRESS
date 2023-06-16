<div class="">
    <div class="text-center pt-10 sm:pt-5">
        <h1 class="uppercase text-lg text-green-500 font-extrabold">Reservez votre billet et voyagez avec Baca-Express</h1>
    </div>
    <div class="p-2 sm:p-10 w-full">
        <!-- Le formulaire de reservation -->
        <form method="POST" action="{{route('HomeAcceuille')}}">
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
                                    <select id="SelectIdPaysdepart" class="w-full">
                                        <option value=""> </option>
                                        @foreach($pays as $pays)
                                            <option value="{{$pays->id}}">{{$pays->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!--Ville départ -->
                            <div class="w-full hidden" id="DivVilleDepart">
                                <div class="py-2">
                                    <label for="depart" class="font-light font-serif text-md"> Villle de depart</label>
                                </div>
                                <div>
                                    <select name="SelectNameVilleDepart" id="SelectIdVilleDepart" class="w-full">
                                        
                                    </select>
                                </div>
                            </div>
                        </div>



                        <!--########### Pays et ville de destination ########-->


                        <div class="w-full">
                            <!--pays de  destination -->
                            <div class=" w-full hidden" id="divPaysDestination">
                                <div class="py-2">
                                    <label for="depart" class="font-light font-serif text-md">Pays de depart</label>
                                </div>
                                <div>
                                    <select name="SelectNamePaysDestination" id="SelectIdPaysDestination" class="w-full">
                                        
                                    </select>
                                </div>
                            </div>
                            <!--Ville départ -->
                            <div class="w-full hidden" id="DivPaysDestination">
                                <div class="py-2">
                                    <label for="depart" class="font-light font-serif text-md"> Villle de depart</label>
                                </div>
                                <div>
                                    <select name="NameVilleDepart" id="NameVilleDepart" class="w-full">
                                        
                                    </select>
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


