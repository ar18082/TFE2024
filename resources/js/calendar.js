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
                left: 'prev,next',
                center: 'title',
                right: 'dayGridMonth',

            },
            initialView: 'dayGridMonth',
            buttonText: {
                month: 'Mois',
            },
            nowIndicator: true,
            editable: false,
            droppable: false,
            selectable: false,
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




