

// Modal de suppression d'un user 

const btnDeleteUser = document.querySelector('.deleteUser');
const modalDeleteUser = document.querySelector('.modalDeleteUser');
const formDeleteUser = document.createElement('form');
formDeleteUser.setAttribute('method', 'POST');
formDeleteUser.setAttribute('action', '?path=deleteuser');
formDeleteUser.setAttribute('class', 'form-delete');
const labelDeleteUser = document.createElement('label');
labelDeleteUser.setAttribute('for', 'password');
labelDeleteUser.textContent = 'renseigner votre password pour supprimer votre compte ?';
const inputDeleteUser = document.createElement('input');
inputDeleteUser.setAttribute('type', 'password');
inputDeleteUser.setAttribute('name', 'password');
const btnConfirmDeleteUser = document.createElement('button');
btnConfirmDeleteUser.setAttribute('type', 'submit');
btnConfirmDeleteUser.setAttribute('class', 'btn-confirm');
btnConfirmDeleteUser.textContent = 'Confirmer';
const btnCancelDeleteUser = document.createElement('button');
btnCancelDeleteUser.setAttribute('type', 'button');
btnCancelDeleteUser.setAttribute('class', 'btn-cancel');
btnCancelDeleteUser.textContent = 'Annuler';
modalDeleteUser.appendChild(formDeleteUser);
formDeleteUser.appendChild(labelDeleteUser);
formDeleteUser.appendChild(inputDeleteUser);
formDeleteUser.appendChild(btnCancelDeleteUser);
formDeleteUser.appendChild(btnConfirmDeleteUser);


btnDeleteUser.addEventListener('click', function() {
    modalDeleteUser.classList.add("flex");
});

btnCancelDeleteUser.addEventListener('click', function() {
    modalDeleteUser.style.display ="none";
});
