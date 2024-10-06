import {Chart} from "chart.js";


if(window.location.pathname == '/dashboard/admin') {

    axios.get('/ajax/listForum')
        .then(function (response) {

            const datas = response.data;
            const categories = [];
            const counts = [];

            datas.forEach((data, index) => {
                const label = data.category.name;
                if (!categories.includes(label)) {
                    categories.push(label);
                    counts[categories.indexOf(label)] = 0;
                }

                counts[categories.indexOf(label)]++;
            });


            var ctx = document.getElementById('nbrSubjects').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: categories,
                    datasets: [{
                        label: 'Sujets de discussion',
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
