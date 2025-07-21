document.addEventListener('DOMContentLoaded', () => {
    const buttonFilter = document.querySelector('#filtres');
    const filterContainer = document.querySelector('#filterContainer');

    buttonFilter.addEventListener('click', () => {
        filterContainer.classList.toggle('none');
    });
});