<div class="flex justify-center">
    <div class="flex space-x-2 p-10">
        <!-- cote chauffeur -->
        <div class="grid grid-cols-2">
            <div class="col-span-2">Chauffeur</div>
            @for($i = 1; $i < 11; $i++) <button class="border border-gray-300 px-2 py-2 w-full">{{$i}}</button>
                @endfor
        </div>
        <!-- cote porte-->
        <div class="grid grid-cols-2">
            <div class="col-span-2">Porte</div>
            @for($i = 11; $i < 21 ; $i++) <button class="border border-gray-300 px-2 py-2 w-full">{{$i}}</button>
                @endfor
        </div>
    </div>
</div>