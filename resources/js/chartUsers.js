import {Chart} from "chart.js";
import axios from "axios";
import theme from "tailwindcss/defaultTheme.js";


if(window.location.pathname == '/dashboard/admin') {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

    axios.get('/ajax/listUsers')
        .then(function (response) {

            const users = response.data;
            var babysitter = [];
            var parent = [];
            var children = [];
            var years = [];



            users.forEach(user => {
                const creationDate = new Date(user.created_at);
                const creationYear = creationDate.getFullYear();
                if (!years.includes(creationYear)) {
                    years.push(creationYear);
                    babysitter[years.indexOf(creationYear)] = 0;
                    parent[years.indexOf(creationYear)] = 0;
                    children[years.indexOf(creationYear)] = 0;
                }

                if (user.babysitter_user_id != null) {
                    const index = years.indexOf(creationYear);
                    babysitter[index]++;
                } else if (user.parent_user_id != null) {
                    const index = years.indexOf(creationYear);
                    parent[index]++;
                    children[index] += user.parent_user.Nbr_children;
                }
            });

            var babysitterChart = document.getElementById('babysitterChart').getContext('2d');
            new Chart(babysitterChart, {
                type: 'bar',
                data: {
                    labels: years,
                    datasets: [{
                        label: 'Baby-sitter',
                        data: babysitter,
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
            var parentChart = document.getElementById('parentChart').getContext('2d');
            new Chart(parentChart, {
                type: 'line',
                data: {
                    labels: years,
                    datasets: [{
                        label: 'Parents',
                        data: parent,
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
            var childrenChart = document.getElementById('childrenChart').getContext('2d');
            new Chart(childrenChart, {
                type: 'bar',
                data: {
                    labels: years, // Replace with your data labels
                    datasets: [{
                        label: 'Enfants',
                        data: children,
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
            console.log(error);
        });



};

if(window.location.pathname.includes('/dashboard/babysitter') || window.location.pathname.includes('/event/ ' && '/edit')) {
    window.addEventListener('DOMContentLoaded', event => {
        var userId = document.getElementById('userId').value;

        axios.get('/ajax/AjaxUserComments/${userId}')
            .then(function (response) {
                const comments = response.data;
                var months = [];
                var notes = [];
                const year = new Date().getFullYear();
                comments.forEach(comment => {
                    const creationDate = new Date(comment.created_at);
                    const creationMonth = creationDate.getMonth();
                    const creationYear = creationDate.getFullYear();
                    if (creationYear === year) {
                        if (!months.includes(creationMonth)) {
                            months.push(creationMonth);
                            notes[months.indexOf(creationMonth)] = 0;
                        }
                        const index = months.indexOf(creationMonth);
                        notes[index] += comment.note;
                    }
                });
                var commentChart = document.getElementById('CommentChart').getContext('2d');
                new Chart(commentChart, {
                    type: 'bar',
                    data: {
                        labels: months,
                        datasets: [{
                            label: 'Commentaires',
                            data: notes,
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
                console.log(error);
            });

    });
}
