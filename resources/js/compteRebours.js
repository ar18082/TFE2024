document.addEventListener('DOMContentLoaded', function() {
    if (window.location.pathname.includes('/')) {
        let modal = document.getElementById('modal');
        modal.style.display = 'block';

        let btn_close = document.getElementById('btn_close');
        btn_close.addEventListener('click', function() {
            modal.style.display = 'none';
            // logout


        });

        let rebours = document.getElementById("rebours"),
            title = document.getElementById("title"),
            heure = document.getElementById("heure"),
            minute = document.getElementById("minute"),
            seconde = document.getElementById("seconde");

        let debut = document.getElementById('date').value;
        console.log(debut);

        let debutDate = new Date(debut);
        let finDate = new Date(debutDate.getTime() + 60 * 60 * 1000);
        let now = new Date();

        let total_secondes = ((finDate.getTime() - debutDate.getTime()) / 1000)-((now.getTime() - debutDate.getTime()) / 1000);
        console.log(total_secondes);
        total_secondes = 9;
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
                    console.log(total_secondes);


                } else {
                    clearInterval(timer);
                    title.innerText = "Le temps est écoulé";
                    heure.innerHTML = "00" ;
                    minute.innerHTML = "00" ;
                    seconde.innerHTML = "00" ;
                    let userId = document.getElementById('userId').value;
                    // envoyer une requête ajax pour supprimer le compte
                    axios.get("ajax/inscription/aborded/" + userId)
                        .then(function(response) {
                            location.reload();
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                }
            }, 1000);
        } else {
            rebours.innerHTML = "Le temps est écoulé";
            // envoyer une requête ajax pour supprimer le compte

        }
    }
});
