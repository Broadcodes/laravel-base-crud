let delateInput = document.getElementById('deleteInput');
// let delateInput = document.querySelector('.deleteInput');

// delateInput.style.padding="20px";

delateInput.addEventListener('click', function () {
    if (!confirm('Vuoi davvero cancellare il fumetto?')) {
        delateInput.type="button";
    } else {
        delateInput.type="submit";
    }
});


