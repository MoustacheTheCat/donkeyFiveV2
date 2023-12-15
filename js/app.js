const pageTitle = document.querySelector('title');
const titlePage = pageTitle.textContent;
const resultFilter = document.querySelectorAll('section');
console.log(resultFilter);
if(titlePage.includes('Home')){
    
    // resultFilter.classList.add('') = "hidden";
    // resultFilter.appendChild(titleFilter);

    // let btnFilters = document.querySelectorAll('button');
    // btnFilters.forEach(btnFilter => {
    //     if(btnFilter.value == 'filter') {
    //         btnFilter.addEventListener('click', function() {
    //             resultFilter.style.visibily = "visible";
    //             const select = document.querySelector('select');
    //             const option = select.options[select.selectedIndex];
    //             const value = option.value;
    //             const centerId = value;
    //             fetch(`?path=filter&id=${centerId}`) 
    //             .then(response => {
    //                 if (!response.ok) {
    //                     throw new Error('Problème avec la requête Fetch');
    //                 }
    //                 return response.json();
    //             })
    //             .then(data => {
    //                 updateDOMWithResponse(data);
    //             })
    //             .catch(error => console.error('Erreur Fetch:', error));  
    //         });
    //     }
    // });
}

else if(titlePage.includes('Profil')){
    const btnDeleteProfil = document.querySelector('.deleteProfile');
const modalDeleteProfil = document.querySelector('.modalDeleteProfil');

const formDeleteProfil = document.createElement('form');
formDeleteProfil.setAttribute('method', 'POST');

formDeleteProfil.setAttribute('class', 'form-delete');
const labelDeleteProfil = document.createElement('label');
labelDeleteProfil.setAttribute('for', 'password');
labelDeleteProfil.textContent = 'renseigner votre password pour supprimer votre compte ?';
const inputDeleteProfil = document.createElement('input');
inputDeleteProfil.setAttribute('type', 'password');
inputDeleteProfil.setAttribute('name', 'password');
const btnConfirmDeleteProfil = document.createElement('button');
btnConfirmDeleteProfil.setAttribute('type', 'submit');
btnConfirmDeleteProfil.setAttribute('class', 'btn-confirm');
btnConfirmDeleteProfil.textContent = 'Confirmer';
const btnCancelDeleteProfil = document.createElement('button');
btnCancelDeleteProfil.setAttribute('type', 'button');
btnCancelDeleteProfil.setAttribute('class', 'btn-cancel');
btnCancelDeleteProfil.textContent = 'Annuler';



btnDeleteProfil.addEventListener('click', function() {
    modalDeleteProfil.classList.add("flex");
    if(btnDeleteProfil.value == 'admin') {
        formDeleteProfil.setAttribute('action', '?path=deleteuseradmin');
    }
    else {
        formDeleteProfil.setAttribute('action', '?path=deleteuser');
    }
    modalDeleteProfil.appendChild(formDeleteProfil);
    formDeleteProfil.appendChild(labelDeleteProfil);
    formDeleteProfil.appendChild(inputDeleteProfil);
    formDeleteProfil.appendChild(btnCancelDeleteProfil);
    formDeleteProfil.appendChild(btnConfirmDeleteProfil);
});

btnCancelDeleteProfil.addEventListener('click', function() {
    modalDeleteProfil.style.display ="none";
});
}

function updateDOMWithResponse(datas) {
    const tableBody = document.querySelector('tbody'); // Assurez-vous d'avoir un tbody avec cet ID dans votre HTML
    tableBody.innerHTML = ''; // Effacer les lignes précédentes

    datas.forEach(field => {
        console.log(field);
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td scope="row">${field.fieldName}</td>
            <td>${field.fieldTarifHourHT}</td>
            <td>${field.fieldTarifHourHT * 1.2}</td>
            <td><a href="/field?id=${field.fieldId}" class="btn btn-light">More</a></td>
            <td><a href="/field/rent?id=${field.fieldId}" class="btn btn-light">Rent field</a></td>
        `;
        tableBody.appendChild(tr);
    });
}
