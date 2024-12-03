document.getElementById('block1').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('scripts/send_reg_bd.php', { 
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data); 
    })
    .catch(error => console.error('Ошибка:', error));
});

document.addEventListener("DOMContentLoaded", function(){
    const form = document.getElementById("block1");
    form.onsubmit = async function (event) {
        event.preventDefault();
        const response = await fetch('scripts/send_reg_bd.php',{
            method: 'POST',
            body: new FormData(form)
        });
        const result = await response.text();
        if (!result.error){
            alert("Вы успешно зарегистрировались!");
        }
        else{
            alert("Что-то пошло не так :(");
        }
    };
});