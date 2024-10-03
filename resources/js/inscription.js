document.addEventListener('DOMContentLoaded', function() {
    if(window.location.pathname.includes('/inscription')){

        var formBabysitter = document.getElementById('formBabysitter');
        var formParent = document.getElementById('formParent');
        var fromDescriptionParent = document.getElementById('fromDescriptionParent');
        var formChildren = document.getElementById('formChildren');
        var role = document.getElementById('role');
        var contentFormSpe = document.getElementById('contentFormSpe');

        contentFormSpe.style.display = 'none';
        console.log(role.value);


        role.addEventListener('change', function() {

            formParent.innerHTML = '';
            formChildren.innerHTML = '';
            formBabysitter.innerHTML = '';
            switch (role.value) {
                case 'babysitter':
                    contentFormSpe.style.display = 'block';
                    axios.get('/ajax/inscription/form/babysitter')
                        .then(function(response) {
                            formBabysitter.innerHTML += response.data;
                        })
                        .catch(function(error) {
                            console.log('non');
                        });

                break;
                case 'parent':
                    contentFormSpe.style.display = 'block';

                    axios.get('/ajax/inscription/form/' +  role.value)
                        .then(function(response) {

                            formParent.innerHTML += response.data;
                            var btnAddChild = document.getElementById('btn+');
                            var btnRemoveChild = document.getElementById('btn-');
                            var nbr_children = document.getElementById('nbr_children');

                            btnAddChild.addEventListener('click', function () {
                                var nbr = nbr_children.value;
                                nbr++;
                                nbr_children.value = nbr;
                                formChildren.innerHTML = '';
                                for (var i = 1; i <= nbr; i++) {
                                    axios.get('/ajax/inscription/form/children/' + i)
                                        .then(function (response) {
                                            formChildren.innerHTML += response.data;
                                        })
                                        .catch(function (error) {
                                            console.log(error);
                                        });
                                }
                            });
                        })
                        .catch(function(error) {

                        });
                break;
                case 'lesDeux':
                    contentFormSpe.style.display = 'block';
                    axios.get('/ajax/inscription/form/description/parent')
                        .then(function(response) {
                            fromDescriptionParent.innerHTML= '';
                            fromDescriptionParent.innerHTML += response.data;
                        })
                        .catch(function(error) {
                            console.log('non');
                        });

                    axios.get('/ajax/inscription/form/parent')
                        .then(function(response) {
                            formParent.innerHTML += response.data;
                            var btnAddChild = document.getElementById('btn+');
                            var btnRemoveChild = document.getElementById('btn-');
                            var nbr_children = document.getElementById('nbr_children');

                            btnAddChild.addEventListener('click', function() {
                                var nbr = nbr_children.value;
                                nbr++;
                                nbr_children.value = nbr;
                                formChildren.innerHTML = '';
                                for(var i = 1; i <= nbr; i++) {
                                    axios.get('/ajax/inscription/form/children/' + i)
                                        .then(function(response) {
                                            formChildren.innerHTML += response.data;
                                        })
                                        .catch(function(error) {
                                            console.log(error);
                                        });
                                }
                            });


                            btnRemoveChild.addEventListener('click', function() {
                                var nbr = nbr_children.value;
                                nbr_children.value--;
                                console.log(nbr);
                                var contentFormChildren = document.getElementById('contentFormChild_'+ nbr);
                                //console.log(contentFormChildren);
                                contentFormChildren.remove();


                            });
                        })
                        .catch(function(error) {

                        });
                    axios.get('/ajax/inscription/form/babysitter')
                        .then(function(response) {
                            formBabysitter.innerHTML += response.data;
                        })
                        .catch(function(error) {
                            console.log('non');
                        });

                break;
                default :
                    contentFormSpe.style.display = 'none';

            }
        });

    }

});
