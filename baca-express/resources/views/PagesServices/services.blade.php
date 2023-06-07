@extends('Home')

@section('service')

<div>
    <div class="container mx-auto">
        <div class="flex justify-center p-10">
            <h1 class="text-2xl font-thin uppercase"> Les Services </h1>
        </div>
        <div class="md:flex flex-wrap justify-center">
            <!--demande remboursement-->
            <div class="p-2 md:p-5 md:w-1/2 mx-auto">
                <div class="border border-gray-300">
                    <!--Titre-->
                    <div class="p-5 flex justify-center items-center bg-green-500">
                        <h1 class="font-bold text-white font-serif text-xs uppercase "> Reclamtion et demande de remboursement </h1>
                    </div>
                    <div class="p-2">
                        <p class="font-light font-serif text-sm text-center">
                            Si vous avez rencontré un problème pendant votre voyage, tel qu'un retard important, une annulation, des perturbations majeures ou tout autre incident qui a impacté votre expérience de manière négative, nous vous encourageons vivement à nous contacter pour faire part de votre réclamation. Nous prendrons le temps d'examiner attentivement votre demande et de trouver une solution satisfaisante.
                        </p>
                    </div>
                    <div class="flex justify-center p-3">
                        <hr class="w-1/3 border-t border-green-400">
                    </div>
                    <div class="p-2">
                        <a href="#" class="text-xs text-green-500 underline underline-offset-8">
                            Contactez nos services
                        </a>
                    </div>
                </div>
            </div>
            <!--marchandise et bagage-->
            <div class="p-2 md:p-5 md:w-1/2 mx-auto">
                <div class="border border-gray-300">
                    <!--Titre-->
                    <div class="p-5 flex justify-center items-center bg-green-500">
                        <h1 class="font-bold text-white font-serif text-xs uppercase "> Marchandise et bagage </h1>
                    </div>
                    <div class="p-2">
                        <p class="font-light font-serif text-sm text-center">
                            Chaque passager est autorisé à enregistrer un certain nombre de bagages en fonction de sa destination. Les informations spécifiques sur les limites de poids et de taille des bagages peuvent être consultées en contactant notre service clientèle. Des frais supplémentaires peuvent s'appliquer si vous dépassez ces limites, il est donc conseillé de les vérifier avant votre voyage
                        </p>
                    </div>
                    <div class="flex justify-center p-3">
                        <hr class="w-1/3 border-t border-green-400">
                    </div>
                    <div class="p-2">
                        <a href="#" class="text-xs text-green-500 underline underline-offset-8">
                            Contactez nos services
                        </a>
                    </div>
                </div>
            </div>
            <!--Modification de la reservation-->
            <div class="p-2 md:p-5 md:w-1/2 mx-auto">
                <div class="border border-gray-300">
                    <!--Titre-->
                    <div class="p-5 flex justify-center items-center bg-green-500">
                        <h1 class="font-bold text-white font-serif text-xs uppercase "> Modification de votre reservation </h1>
                    </div>
                    <div class="p-2">
                        <p class="font-light font-serif text-sm text-center">
                            Nous comprenons que des circonstances imprévues peuvent vous obliger à ajuster votre date de voyage, votre destination ou même votre itinéraire. Nous voulons vous offrir la flexibilité nécessaire pour répondre à vos besoins changeants. contactez notre service clientèle pour un apercus de points importants concernant la modification de votre réservation.
                        </p>
                    </div>
                    <div class="flex justify-center p-3">
                        <hr class="w-1/3 border-t border-green-400">
                    </div>
                    <div class="p-2">
                        <a href="#" class="text-xs text-green-500 underline underline-offset-8">
                            Contactez nos services
                        </a>
                    </div>
                </div>
            </div>
            <!--Probleme de paiement-->
            <div class="p-2 md:p-5 md:w-1/2 mx-auto">
                <div class="border border-gray-300">
                    <!--Titre-->
                    <div class="p-5 flex justify-center items-center bg-green-500 ">
                        <h1 class="font-bold text-white font-serif text-xs uppercase "> Probleme de paiement </h1>
                    </div>
                    <div class="p-2">
                        <p class="font-light font-serif text-sm text-center">
                            Nous comprenons que des problèmes de paiement peuvent survenir pour diverses raisons et nous sommes là pour vous aider à les résoudre de la meilleure façon possible. En cas de probleme de paiement veuillez nous contacter dès que possible pour discuter de la situation et trouver une solution appropriée..
                        </p>
                    </div>
                    <div class="flex justify-center p-3">
                        <hr class="w-1/3 border-t border-green-400">
                    </div>
                    <div class="p-2">
                        <a href="#" class="text-xs text-green-500 underline underline-offset-8">
                            Contactez nos services
                        </a>
                    </div>
                </div>
            </div>
            <!-- Passager en situation d'handicap-->
                <div class="p-2 md:p-5 md:w-1/2 mx-auto">
                    <div class="border border-gray-300">
                        <!--Titre-->
                        <div class="p-5 flex justify-center items-center bg-green-500 ">
                            <h1 class="font-bold text-white font-serif text-xs uppercase "> Passager en situation de mobilité reduite</h1>
                        </div>
                        <div class="p-2">
                            <p class="font-light font-serif text-sm text-center">
                                Si vous avez des besoins particuliers en raison d'une mobilité réduite, veuillez nous en informer dès que possible. Nous mettons à votre disposition des services d'assistance spéciale pour vous aider tout au long de votre voyage, de l'enregistrement jusqu'à l'arrivée à destination. Cela peut inclure l'assistance pour les déplacements dans les bus, l'embarquement prioritaire, les services de portage des bagages et d'autres besoins spécifiques.
                            </p>
                        </div>
                        <div class="flex justify-center p-3">
                            <hr class="w-1/3 border-t border-green-400">
                        </div>
                        <div class="p-2">
                            <a href="#" class="text-xs text-green-500 underline underline-offset-8">
                                Contactez nos services
                            </a>
                        </div>
                    </div>
                </div>
        
            <!-- Reserver une place -->
            
                <div class="p-2 md:p-5 md:w-1/2 mx-auto">
                    <div class="border border-gray-300">
                        <!--Titre-->
                        <div class="p-5 flex justify-center items-center bg-green-500 ">
                            <h1 class="font-bold text-white font-serif text-xs uppercase "> Reserver une place </h1>
                        </div>
                        <div class="p-2">
                            <p class="font-light font-serif text-sm text-center">
                                Nous tenons à vous assurer que nous accordons une attention particulière aux passagers en situation de mobilité réduite. Notre compagnie est engagée à fournir un service de voyage inclusif et accessible à tous nos clients, et nous souhaitons vous offrir une expérience de voyage confortable et agréable.
                            </p>
                        </div>
                        <div class="flex justify-center p-3">
                            <hr class="w-1/3 border-t border-green-400">
                        </div>
                        <div class="p-2">
                            <a href="#" class="text-xs text-green-500 underline underline-offset-8">
                                Contactez nos services
                            </a>
                        </div>
                    </div>
                </div>
        
        </div>
    </div>
</div>

@endsection