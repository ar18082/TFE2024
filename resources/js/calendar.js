import {Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';


import axios from 'axios';
axios.get('/ajax/listEvents')
    .then(function (response) {
        const events = response.data;

        var calendarEl = document.getElementById('calendar');

        var calendar = new Calendar(calendarEl, {
            plugins: [dayGridPlugin, timeGridPlugin],
            locale: 'fr',
            timeZone: 'Europe/Paris',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'

            },
            initialView: 'dayGridMonth',
            buttonText: {
                today: 'Aujourd\'hui',
                month: 'Mois',
                week: 'Semaine',
                day: 'Jour',
            },
            nowIndicator: true,
            editable: true,
            droppable: true,
            selectable: true,
            events: events,
            // eventReceive: function(info){
            //     console.log(info.event);
            // },
            // eventDrop: function(info){
            //     console.log(info.event);
            // },
            // eventResize: function(info){
            //     console.log(info.event);
            // },
            // select: function(info){
            //     console.log(info);
            // },
            // eventClick: function(info){
            //     console.log(info.event);
            // }
        });
        calendar.render();
    })
    .catch(function (error) {
        console.log(error);
    })




