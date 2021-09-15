require('./bootstrap');

const deleteSure = document.querySelectorAll('.you-sure');

deleteSure.forEach(item => {
    item.addEventListener('submit', function(e) {
        const resp = confirm('sicuro di volerlo cancellare?');

        if(!resp){
            e.preventDefault();
        }
    })
});