import './bootstrap';
import axios from 'axios';
import _ from 'lodash';

// Exemple d'utilisation
axios.get('/api/some-endpoint')
    .then(response => {
        console.log(response.data);
    })
    .catch(error => {
        console.error(error);
    });

console.log(_.join(['Hello', 'World'], ' '));
