import { Loader } from "@googlemaps/js-api-loader";
import axios from 'axios';

const loader = new Loader({
    apiKey: import.meta.env.VITE_GOOGLE_MAPS_API_KEY,
    version: "weekly",
    libraries: ["core"],
});

function initMap() {
    const belgium = { lat: 50.6402809, lng: 4.6667145 };
    const mapOptions = {
        zoom: 9,
        center: belgium
    };

    var user_id = document.getElementsByClassName('user_id');
    var user_id_array = [];

    // recuperer l'id authentifié
    var auth_user = AuthenticatorResponse;

    for (var i = 0; i < user_id.length; i++) {
        user_id_array.push(user_id[i].value);
    }

    const mapElement = document.getElementById("map");
    if (mapElement) {
        let map = new google.maps.Map(mapElement, mapOptions);

        axios.get('/ajax/ajaxGeographicCordinate')
            .then(function (response) {
                const datas = response.data;

                //console.log(datas);
                datas.forEach(data => {
                    console.log(data);
                    if (data.latitude && data.longitude && user_id_array.includes(data.user_id)) {
                        const position = {lat: data.latitude, lng: data.longitude};
                        new google.maps.Marker({
                            position: position,
                            map: map,
                            title: data.user.name + " " + data.user.firstname
                        });
                    }
                });
            })
            .catch(function (error) {
                console.error("Error loading users", error);
            });



    } else {
        console.error("Map element not found");
    }
}

loader.load().then(() => {
    initMap();
}).catch(e => {
    console.error("Error loading Google Maps API", e);
});
