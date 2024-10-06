import {Chart} from "chart.js";


if(window.location.pathname == '/dashboard/admin') {

    axios.get('/ajax/listActivities')
        .then(function (response) {

            const activities = response.data;
            var nbActivity = [];
            var particiants = [];
            var years = [];


            activities.forEach(activity => {


                const date_activity = new Date(activity.date_activity);
                const creationYear = date_activity.getFullYear();
                if (!years.includes(creationYear)) {
                    years.push(creationYear);
                    nbActivity[years.indexOf(creationYear)] = 0;
                    particiants[years.indexOf(creationYear)] = 0;
                }

                const index = years.indexOf(creationYear);
                nbActivity[index]++;
                particiants[index] += activity.nbr_children;
            });

            var NbrActivitiesChart = document.getElementById('NbrActivitiesChart').getContext('2d');
            new Chart(NbrActivitiesChart, {
                type: 'bar',
                data: {
                    labels: years,
                    datasets: [{
                        label: 'Activités',
                        data: nbActivity,
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

            var NbrParticipantChart = document.getElementById('NbrParticipantChart').getContext('2d');
            new Chart(NbrParticipantChart, {
                type: 'bar',
                data: {
                    labels: years,
                    datasets: [{
                        label: 'Participants',
                        data: particiants,
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
