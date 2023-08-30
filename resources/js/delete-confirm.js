const deleteForm = document.querySelectorAll('.delete-form');

deleteForm.forEach(form => {
    form.addEventListener('submit', e => {
        e.preventDefault();
        const name = form.dataset.name;
        const confirmed = confirm(`Sei sicuro di voler eliminare ${name}?`);
        if (confirmed) form.submit();
    })
})

