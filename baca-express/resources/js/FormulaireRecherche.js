/* Controle affiche de la div retour */ 
const typeInputs = document.querySelectorAll('input[name="AllerRetour"]');
const tvaInput = document.querySelector('#statuImput');

typeInputs.forEach(input => {
    input.addEventListener('change', () => {
        if (input.value === 'Retour') {
            tvaInput.style.display = 'block';
        } else {
            tvaInput.style.display = 'none';
        }
    });
});

