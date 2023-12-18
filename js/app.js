const pageTitle = document.querySelector('title');
const titlePage = pageTitle.textContent;

if(titlePage.includes('Home')){
    const resultFilter = document.querySelectorAll('section')[3];
    resultFilter.classList.add('display-filter-hiden');
    let btnFilters = document.querySelectorAll('button');
    btnFilters.forEach(btnFilter => {
        if(btnFilter.value == 'filter') {
            btnFilter.addEventListener('click', function() {
                resultFilter.classList.remove('display-filter-hiden');
                resultFilter.classList.add('display-filter-show');
                resultFilter.style.visibily = "visible";
                const select = document.querySelector('select');
                const option = select.options[select.selectedIndex];
                const value = option.value;
                const centerId = value;
                fetch(`?path=filter&id=${centerId}`) 
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Problème avec la requête Fetch');
                    }
                    return response.json();
                })
                .then(datas => {
                    if(datas.error == 'Aucune donnée trouvée'){
                        resultFilter.classList.remove('display-filter-show');
                        resultFilter.classList.add('display-filter-hiden');
                        return;
                    }
                    const tableBody = document.querySelector('tbody');
                    tableBody.innerHTML = '';
                    datas.forEach(field => {
                        const tr = document.createElement('tr');
                        tr.innerHTML = `
                            <td scope="row">${field.fieldName}</td>
                            <td>${field.fieldTarifHourHT}</td>
                            <td>${field.fieldTarifHourHT * 1.2}</td>
                            <td><a href="?path=field&id=${field.fieldId}" class="btn btn-light">More</a></td>
                        `;
                        tableBody.appendChild(tr);
                    });
                })
                .catch(error => console.error('Erreur Fetch:', error));  
            });
        }
    });
}

else if(titlePage.includes('Profile')){
    const btnDelete = document.querySelector('.delete');
    const modalDelete = document.querySelector('.modalDelete');

    const formDelete = document.createElement('form');
    formDelete.setAttribute('method', 'POST');
    formDelete.setAttribute('class', 'form-delete');

    const labelDelete = document.createElement('label');
    labelDelete.setAttribute('for', 'password');
    
    
    const inputDelete = document.createElement('input');
    inputDelete.setAttribute('type', 'password');
    inputDelete.setAttribute('name', 'password');

    const btnConfirmDelete = document.createElement('button');
    btnConfirmDelete.setAttribute('type', 'submit');
    btnConfirmDelete.setAttribute('class', 'btn-confirm');
    btnConfirmDelete.textContent = 'Confirmer';

    const btnCancelDelete = document.createElement('button');
    btnCancelDelete.setAttribute('type', 'button');
    btnCancelDelete.setAttribute('class', 'btn-cancel');
    btnCancelDelete.textContent = 'Annuler';

    btnDelete.addEventListener('click', function() {
        modalDelete.classList.add("flex");
        if(btnDelete.value == 'admin') {
            formDelete.setAttribute('action', '?path=deleteuseradmin');
            labelDelete.textContent = 'renseigner votre password pour supprimer votre compte ?';
        }
        else if(btnDelete.value == 'user'){
            formDelete.setAttribute('action', '?path=deleteuser');
            labelDelete.textContent = 'renseigner votre password pour supprimer votre compte ?';
        }
        
        modalDelete.appendChild(formDelete);
        formDelete.appendChild(labelDelete);
        formDelete.appendChild(inputDelete);
        formDelete.appendChild(btnCancelDelete);
        formDelete.appendChild(btnConfirmDelete);
    });

    btnCancelDelete.addEventListener('click', function() {
        modalDelete.style.display ="none";
        location.reload();
    });
}
else if(titlePage.includes('Field')){
    const btnRent = document.querySelector('.rent');
    console.log(btnRent);
    btnRent.addEventListener('click', function() {
        const modalRent = document.querySelector('.modalRent');
        modalRent.classList.add("flex");
        const formRent = document.createElement('form');
        const h2 = document.createElement('h2');
        h2.textContent = 'Réservation';
        formRent.appendChild(h2);
        const ul = document.createElement('ul');
        const ultitle = document.createElement('h3');
        ultitle.textContent = 'Options';
        formRent.appendChild(ultitle);
        formRent.appendChild(ul);
        formRent.setAttribute('method', 'POST');
        formRent.setAttribute('class', 'form-rent');
        formRent.setAttribute('action', '?path=addrent');
        fetch('?path=optionlist')
        .then(response => {
            if (!response.ok) {
                throw new Error('Problème avec la requête Fetch');
            }
            return response.json();
        })
        .then(datas => {
            datas.forEach(option => {
                const li = document.createElement('li');
                const input = document.createElement('input');
                input.setAttribute('type', 'checkbox');
                input.setAttribute('name', 'option[]');
                input.setAttribute('value', option.optionId);
                li.appendChild(input);
                const label = document.createElement('label');
                label.setAttribute('for', option.optionName);
                label.textContent = option.optionName;
                li.appendChild(label);
                ul.appendChild(li);
            });
            
        }
        )
        .catch(error => console.error('Erreur Fetch:', error));

        const labelRentDateStart = document.createElement('label');
        labelRentDateStart.setAttribute('class', 'label-date-start');
        labelRentDateStart.setAttribute('for', 'dateStart');
        labelRentDateStart.textContent = 'Date de début de réservation';
        const inputRentDateStart = document.createElement('input');
        inputRentDateStart.setAttribute('class', 'input-date-start');
        inputRentDateStart.setAttribute('type', 'date');
        inputRentDateStart.setAttribute('name', 'dateStart');

        const labelRentDateEnd = document.createElement('label');
        labelRentDateEnd.setAttribute('for', 'dateEnd');
        labelRentDateEnd.setAttribute('class', 'label-date-end');
        labelRentDateEnd.textContent = 'Date de fin de réservation';
        const inputRentDateEnd = document.createElement('input');
        inputRentDateEnd.setAttribute('class', 'input-date-end');
        inputRentDateEnd.setAttribute('type', 'date');
        inputRentDateEnd.setAttribute('name', 'dateEnd');

        const labelRentHourStart = document.createElement('label');
        labelRentHourStart.setAttribute('class', 'label-hour-start');
        labelRentHourStart.setAttribute('for', 'hourStart');
        labelRentHourStart.textContent = 'Heure de début de réservation';
        const inputRentHourStart = document.createElement('input');
        inputRentHourStart.setAttribute('class', 'input-hour-start');
        inputRentHourStart.setAttribute('type', 'time');
        inputRentHourStart.setAttribute('name', 'hourStart');

        const labelRentHourEnd = document.createElement('label');
        labelRentHourEnd.setAttribute('class', 'label-hour-end');
        labelRentHourEnd.setAttribute('for', 'hourEnd');
        labelRentHourEnd.textContent = 'Heure de fin de réservation';
        const inputRentHourEnd = document.createElement('input');
        inputRentHourEnd.setAttribute('class', 'input-hour-end');
        inputRentHourEnd.setAttribute('type', 'time');
        inputRentHourEnd.setAttribute('name', 'hourEnd');

        const btnConfirmRent = document.createElement('button');
        btnConfirmRent.setAttribute('type', 'submit');
        btnConfirmRent.setAttribute('class', 'btn-confirm');
        btnConfirmRent.textContent = 'Confirmer';
        const btnCancelRent = document.createElement('button');
        btnCancelRent.setAttribute('type', 'button');
        btnCancelRent.setAttribute('class', 'btn-cancel');
        btnCancelRent.textContent = 'Annuler';
        modalRent.appendChild(formRent);
        formRent.appendChild(labelRentDateStart);
        formRent.appendChild(inputRentDateStart);
        formRent.appendChild(labelRentDateEnd);
        formRent.appendChild(inputRentDateEnd);
        formRent.appendChild(labelRentHourStart);
        formRent.appendChild(inputRentHourStart);
        formRent.appendChild(labelRentHourEnd);
        formRent.appendChild(inputRentHourEnd);
        formRent.appendChild(btnCancelRent);
        formRent.appendChild(btnConfirmRent);
        btnCancelRent.addEventListener('click', function() {
            modalRent.style.display ="none";
            location.reload();
        });
    
    });
}
