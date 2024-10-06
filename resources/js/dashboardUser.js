if(window.location.pathname.includes('/dashboard')){
    window.addEventListener('DOMContentLoaded', event => {
        var btnEditSubmitUser = document.getElementById('btnEditSubmitUser');
        var btnSubmitUser = document.getElementById('btnSubmitUser');
        var btnEditUser = document.getElementById('btnEditUser');
        var inputEditUser = document.getElementsByClassName('inputEditUser');
        var userTexArea = document.getElementById('userTexArea');
        var userSelect = document.getElementById('userSelect');
        var inputs = document.querySelectorAll('input');
        var valueUser = document.getElementsByClassName('valueUser');






        btnEditSubmitUser.style.display = 'block';
        btnSubmitUser.style.display = 'none';
        btnEditUser.style.display = 'block';

        btnEditUser.addEventListener('click', event => {
            btnEditSubmitUser.style.display = 'block';
            btnSubmitUser.style.display = 'block';
            btnEditUser.style.display = 'none';
            for (let i = 0; i < valueUser.length; i++) {
                valueUser[i].style.display = 'none';
            }
            for (let i = 0; i < inputEditUser.length; i++) {
                inputEditUser[i].style.display = 'block';
            }
            for(let i = 0; i < inputs.length; i++){
                inputs[i].type = 'text';
            }
            userTexArea.style.display = 'block';
            userSelect.style.display = 'block';
        });

        btnSubmitUser.addEventListener('click', event => {
            btnEditSubmitUser.style.display = 'block';
            btnSubmitUser.style.display = 'none';
            btnEditUser.style.display = 'block';
            // create a json object to send to the server
            var datas = {};

            for (let i = 0; i < valueUser.length; i++) {
                valueUser[i].style.display = 'block';
            }
            for (let i = 0; i < inputEditUser.length; i++) {
                inputEditUser[i].style.display = 'none';
            }
            for(let i = 0; i < inputs.length; i++){
                // take the value of the inputs and put in the json object
                datas[inputs[i].name] = inputs[i].value;
                inputs[i].type = 'hidden';
            }
            userTexArea.style.display = 'none';
            userSelect.style.display = 'block';
            console.log(datas);
        });


    });
}
