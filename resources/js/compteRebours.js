document.addEventListener('DOMContentLoaded', function() {
    if (window.location.pathname === '/inscription/attenteConfirmation') {
        let rebours = document.getElementById("rebours"),
            heure = document.getElementById("heure"),
            minute = document.getElementById("minute"),
            seconde = document.getElementById("seconde");

        let fin = localStorage.getItem('fin') ? new Date(localStorage.getItem('fin')) : new Date(new Date().getTime() + 1 * 60 * 60 * 1000);
        localStorage.setItem('fin', fin);

        let total_secondes = (fin - new Date()) / 1000;

        if (total_secondes > 0) {
            let timer = setInterval(function() {
                total_secondes--;
                if (total_secondes > 0) {
                    let nb_heures = Math.floor(total_secondes / (60 * 60));
                    let nb_minutes = Math.floor((total_secondes - (nb_heures * 60 * 60)) / 60);
                    let nb_secondes = Math.floor(total_secondes - (nb_heures * 60 * 60 + nb_minutes * 60));
                    heure.innerHTML = nb_heures < 10 ? "0" + nb_heures : nb_heures;
                    minute.innerHTML = nb_minutes < 10 ? "0" + nb_minutes : nb_minutes;
                    seconde.innerHTML = nb_secondes < 10 ? "0" + nb_secondes : nb_secondes;
                } else {
                    clearInterval(timer);
                    rebours.innerHTML = "Le temps est écoulé";
                }
            }, 1000);
        } else {
            rebours.innerHTML = "Le temps est écoulé";
        }
    }
});
