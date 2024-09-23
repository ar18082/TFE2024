document.addEventListener('DOMContentLoaded', function() {
    if(window.location.pathname.includes('/inscription/')){
        var btnBabysitter = document.getElementById('btnBabysitter');
        var btnParent = document.getElementById('btnParent');
        var btnLesDeux = document.getElementById('btnLesDeux');
        var formBabysitter = document.getElementById('formBabysitter');
        var formParent = document.getElementById('formParent');
        var formChildren = document.getElementById('formChildren');
        var role = document.getElementById('role');





        btnBabysitter.addEventListener('click', function() {
            formParent.innerHTML = '';
            formChildren.innerHTML = '';
            formBabysitter.innerHTML = '';
            role.value = 'babysitter';
            axios.get('/ajax/inscription/form/description/' + role.value)
                .then(function(response) {
                    console.log(response);
                    formBabysitter.innerHTML = response.data;
                })
                .catch(function(error) {
                    console.log('non');
                });

            axios.get('/ajax/inscription/form/babysitter')
                .then(function(response) {
                    formBabysitter.innerHTML += response.data;
                })
                .catch(function(error) {
                    console.log('non');
                });


        });

        btnParent.addEventListener('click', function() {
            formParent.innerHTML = '';
            formChildren.innerHTML = '';
            formBabysitter.innerHTML = '';
            role.value = 'parent';
            axios.get('/ajax/inscription/form/description/' + role.value)
                .then(function(response) {
                    formParent.innerHTML= '';
                    formParent.innerHTML += response.data;

                })
                .catch(function(error) {

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
                        nbr_children.value;
                        console.log(nbr);
                        var contentFormChildren = document.getElementById('contentFormChild_'+ nbr);
                        //console.log(contentFormChildren);
                        contentFormChildren.remove();


                    });


                })
                .catch(function(error) {

                });


        });

        btnLesDeux.addEventListener('click', function() {
            formParent.innerHTML = '';
            formChildren.innerHTML = '';
            formBabysitter.innerHTML = '';
            role.value = 'lesdeux';
            axios.get('/ajax/inscription/form/description/babysitter')
                .then(function(response) {
                    formBabysitter.innerHTML += response.data;
                })
                .catch(function(error) {
                    console.log('non');
                });

            axios.get('/ajax/inscription/form/description/parent')
                .then(function(response) {
                    formParent.innerHTML= '';
                    formParent.innerHTML += response.data;
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


        });

    }


});
