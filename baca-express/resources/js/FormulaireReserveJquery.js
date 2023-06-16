$(document).ready(function () {
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
                    '<option value="" selected>Choisir une ville de destination </option>'
                );
                $.each(data, function (id, value) {
                    // ajouts des balises (pas oublier le nom de la colone souhaité : name "pour le nom des villes")
                    $SelectIDVilleDepart.append(
                        '<option value="' + value + '">' + value + "</option>"
                    );
                });
            },
        
        });

        $('#SelectIdVilleDepart','#SelectIdPaysDestination').val("");
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
                $SelectIdPaysDestination.html('<option value="" selected>Choisir la destination </option>');
                $.each(data, function (id, value) {
                    // ajouts des balises (pas oublier le nom de la colone souhaité : name "pour le nom des villes")
                    $SelectIdPaysDestination.append(
                        '<option value="' + id + '">' + value + "</option>"
                    );
                });
            }
        })
        $("#divPaysDestination").removeClass("hidden");
    })
});
