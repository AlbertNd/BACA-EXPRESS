/* Controle affiche de la div retour */
const typeInputs = document.querySelectorAll('input[name="AllerRetour"]');
const tvaInput = document.querySelector("#DivDateRetour");

typeInputs.forEach((input) => {
    input.addEventListener("change", () => {
        if (input.value === "Aller retour") {
            tvaInput.style.display = "block";
        } else {
            tvaInput.style.display = "none";
        }
    });
});

/* 
|Le compteur pour le nombre des reservation 
*/

var nombreclick = 1;

// augmentation du nombre
function comptageUp() {
    nombreclick++;
    document.getElementById("nombreReservation").value = nombreclick;
}
document.getElementById("buttonUP").addEventListener("click", comptageUp);

// Diminution du nombre
function comptageDown() {
    if (nombreclick > 1) {
        nombreclick--;
        document.getElementById("nombreReservation").value = nombreclick;
    }
}
document.getElementById("buttonDown").addEventListener("click", comptageDown);
