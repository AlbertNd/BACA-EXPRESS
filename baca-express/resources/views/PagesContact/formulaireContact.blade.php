@extends('Home')

@section('contact')

<div class="container mx-auto">
    <div class="flex justify-center items-center p-10">
        <h1 class="font-thin uppercase text-2xl text-green-800">Besoin d'aide ? Contactez-nous sans hésiter !</h1>
    </div>
    <div class="flex md:space-x-2 m-2">
        <!-- Description -->
        <div class="hidden md:block w-full shadow rounded">
            @include('PagesContact.textFormulaireContact')
        </div>
        <!-- formulaire de contact -->
        <div class="w-full p-2 mx-auto md:p-5 bg-green-500">
            <div class="">
                <form action="" method="post">
                    <!-- le nom et le prenom -->
                    <div class="sm:flex sm:space-x-4">
                        <div class="w-full">
                            <div>
                                <label for="nom" class="font-bold font-serif text-sm text-white">Nom</label>
                            </div>
                            <div>
                                <input type="text" name="nom" id="" class="border border-gray-300 w-full">
                            </div>
                        </div>
                        <div class="w-full">
                            <div>
                                <label for="prenom" class="font-bold font-serif text-sm text-white">prenom</label>
                            </div>
                            <div>
                                <input type="text" name="nom" id="" class="border border-gray-300 w-full">
                            </div>
                        </div>
                    </div>
                    <!-- telephone et adresse mail -->
                    <div class="sm:flex sm:space-x-4">
                        <div class="w-full">
                            <div>
                                <label for="telephone" class="font-bold font-serif text-sm text-white">Telephone</label>
                            </div>
                            <div>
                                <input type="text" name="telephone" id="" class="border border-gray-300 w-full">
                            </div>
                        </div>
                        <div class="w-full">
                            <div>
                                <label for="email" class="font-bold font-serif text-sm text-white">Adresse mail</label>
                            </div>
                            <div>
                                <input type="email" name="nom" id="" class="border border-gray-300 w-full">
                            </div>
                        </div>
                    </div>
                    <!--Le sujet du message-->
                    <div class="">
                        <div class="flex justify-center m-4 font-bold font-serif text-sm text-white">
                            <h1>Selectionnez le sujet de votre message</h1>
                        </div>
                        <select name="" id="" class="w-full">
                            <option value="">Demander un remboursement</option>
                            <option value="">Bagage</option>
                            <option value="">Problemes de paiement</option>
                            <option value="">Passagers en situation de handicap</option>
                            <option value="">Modifier votre reservation</option>
                            <option value="">Autres</option>
                        </select>
                    </div>
                    <!-- Espace de saisie du message -->
                    <div class="p-4">
                        <label for="message" class="font-bold font-serif text-sm text-white">Votre message</label>
                        <textarea name="message" id="" cols="30" rows="10" class="w-full"></textarea>
                    </div>

                    <!-- Boutton d'envois -->
                    <div>
                        <button class="mx-auto py-4 border border-green-500 w-full bg-yellow-500 hover:bg-yellow-600 rounded m-3 shadow-xl">Envoyer</button>
                    </div>
                </form>
            </div>
            <div>
                <p class="px-2 font-bold italic text-xs text-center m-3">
                    Veuillez noter que le délai de réponse peut varier en fonction de la charge de travail et des politiques de réponse de l'entité ou de l'entreprise concernée. Assurez-vous de vérifier régulièrement votre boîte de réception pour les éventuelles réponses.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection