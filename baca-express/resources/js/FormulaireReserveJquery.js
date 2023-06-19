$(document).ready(function () {
    // La section des pays quie declanche les villes de depart 

    $("#SelectIdPaysdepart").change(function () {
        var AjaxIdPays = $(this).val();
        var _token = $('input[type="hidden"]').attr("value");

        var $SelectIDVilleDepart = $("#SelectIdVilleDepart");

        $.ajax({
            url: "Villes",
            data: {
                AjaxIdPays,
                _token,
            },
            method: "POST",
            dataType: "json",
            success: function (data) {
                //console.log(data);
                
                $SelectIDVilleDepart.html(
                    '<option value="" selected>Choisir une ville de départ </option>'
                );
                $.each(data, function (id, value) {
                    // ajouts des balises (pas oublier le nom de la colone souhaité : name "pour le nom des villes")
                    $SelectIDVilleDepart.append(
                        '<option value="' + value + '">' + value + "</option>"
                    );
                });
            },
        
        });

        
        $("#DivVilleDepart").removeClass("hidden");
    });
    
    // Le section des ville qui declanche les pays de destination 


    $('#SelectIdVilleDepart').change(function(){
        var idVille = $(this).val();
        console.log(idVille);
        var _token = $('input[type="hidden"]').attr("value");
        
        var $SelectIdPaysDestination =$('#SelectIdPaysDestination');
        
        $.ajax({
            url: "Pays",
            data : {
                idVille,
                _token
            },
            method: "POST",
            dataType: "json",
            
            success: function(data){
                $SelectIdPaysDestination.html('<option value="" selected>Choisir un pays de destination </option>');
                $.each(data, function (id, value) {
                    // ajouts des balises (pas oublier le nom de la colone souhaité : name "pour le nom des villes")
                    $SelectIdPaysDestination.append(
                        '<option value="' + id + '">' + value + "</option>"
                    );
                });
            },
        });
        
        $("#divPaysDestination").removeClass("hidden");
    });

    // La section des pays de destination qui declanches les villes de destination 

    $('#SelectIdPaysDestination').change(function(){
        var IdpaysDestination = $(this).val();
        console.log(IdpaysDestination);
        var _token = $('input[type="hidden"]').attr("value");
        var $SelectIdVilleDestination = $('#SelectIdVilleDestination');
        $.ajax({
            url: "VilesDestination",
            data : {
                IdpaysDestination,
                _token
            },
            method: "POST",
            dataType: "json",
            
            success: function(data){
                $SelectIdVilleDestination.html('<option value="" selected>Choisir une ville de destination </option>');
                $.each(data, function (id, value) {
                    // ajouts des balises (pas oublier le nom de la colone souhaité : name "pour le nom des villes")
                    $SelectIdVilleDestination.append(
                        '<option value="' + value + '">' + value + "</option>"
                    );
                });
            },
        });
        $("#DivVilleDestination").removeClass("hidden");
    });

    // Declachement de la section des dates

    $('#DivVilleDestination').change(function(){
        $('#DivDateAllerRetour').removeClass('hidden');
        $('#DivNombrePlaceBtnRech').removeClass('hidden');
    });
});
