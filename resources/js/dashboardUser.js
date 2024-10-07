if(window.location.pathname.includes('/dashboard') || window.location.pathname.includes('/event/ ' && '/edit')) {
    window.addEventListener('DOMContentLoaded', event => {
        var btnEditSubmitUser = document.getElementById('btnEditSubmitUser');
        var btnSubmitUser = document.getElementById('btnSubmitUser');
        var btnEditUser = document.getElementById('btnEditUser');
        var inputEditUser = document.getElementsByClassName('inputEditUser');
        var userTexArea = document.getElementById('userTexArea');
        var userSelect = document.getElementById('userSelect');
        var inputs = document.querySelectorAll('input');
        var valueUser = document.getElementsByClassName('valueUser');
        var postal_code_localite = document.getElementById('postal_code_localite');






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
                if(inputs[i].name !== 'user_id'){
                    inputs[i].type = 'text';
                }
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

            datas[userTexArea.name] = userTexArea.value;
            datas[postal_code_localite.name] = postal_code_localite.value;
            userTexArea.style.display = 'none';
            userSelect.style.display = 'none';

            // send the json object to the server
            axios.post('/ajax/ajaxUpdateUser', datas)
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
        });


    });
}
