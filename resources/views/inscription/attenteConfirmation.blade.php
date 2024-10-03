

    <input type="hidden" id="date" value="{{$user->created_at}}">
    <div id="rebours">

        {{--un compte a rebours pour la validité de l'email--}}
        <div class="box-rebours">
            <div class="box_heure">
                <div id="heure">00</div>
                <span id="heure_label">Heures</span>
            </div>
            <div class="box_minute">
                <div id="minute">00</div>
                <span id="minute_label">Minutes</span>
            </div>
            <div class="box_seconde">
                <div id="seconde">00</div>
                <span id="seconde_label">Secondes</span>
            </div>
        </div>

    </div>
    <h2 id="title"></h2>


