
<div id="sign_form" class="container">
    <form action="?page=home" method="post">
        <fieldset>
            <legend>Les informations relatives à votre activité</legend>
            <div class="row">
                <label class="six columns">Nom de l'entreprise <input type="text" name="corp_name" id="corp_name" required></label>
            </div>
            <div class="row">
                <label class="six columns">Votre prénom <input type="text" name="firstname" id="firstname" required></label>
                <label class="six columns">Numéro de téléphone <input type="tel" name="phone_number" id="phone_number" required></label>
            </div>
        </fieldset>
        <fieldset>
            <legend>Vos informations personnelles</legend>
            <div class="row">
                <label class="six columns">Votre nom<input type="text" name="lastname" id="lastname" required></label>
                <label class="six columns">Votre prénom<input type="text" name="firstname" id="firstname" required></label>
            </div>
            <div class="row">
                <label class="six columns">Numéro de téléphone<input type="tel" name="phone_number" id="phone_number" required></label>
                <label class="six columns">Adresse email<input type="email" name="email" id="email" required></label>
            </div>
        </fieldset>
    </form>
</div>