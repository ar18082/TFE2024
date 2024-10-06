import {Chart} from "chart.js";


if(window.location.pathname == '/dashboard/admin') {

    axios.get('/ajax/listCriterias')
        .then(function (response) {

            const criterias = response.data;
            const labels = [];
            const counts = [];

            criterias.forEach((criteria, index) => {
                const label = criteria.custody_criteria.custody_criteria;
                if (!labels.includes(label)) {
                    labels.push(label);
                    counts[labels.indexOf(label)] = 0;
                }

                counts[labels.indexOf(label)]++;
            });


            var ctx = document.getElementById('criteriaChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Critères',
                        data: counts,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch(function (error) {
            console.error(error);
        });





};
