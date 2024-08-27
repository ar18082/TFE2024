

// Assurez-vous que le DOM est chargé avant d'initialiser Select2

    $('.SelectCpLocalite').select2({
        placeholder: 'Sélectionner un code Postal ou une localité',

        ajax: {
            url: '/select/searchByCPOrLocalite',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.postCode + ' ' + item.localite,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

