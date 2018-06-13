<div class="contact-form-container" style="">
    <div class="contact-form-inner-container" style="">
        <form id="contact-us-form" method="post">
            <h2 class="contact-form-title">{{ pll__('En savoir plus ? Contactez-nous.') }}<a href="#" class="close-contact-form">{{ pll__('FERMER') }}&nbsp;<img class="arrow-right" src="{{ themosis_assets() . '/images/icon/icon-chevron-white.svg' }}"/></a></h2>

            <p class="contact-success-message" style="display: none;">{{ pll__('Merci de votre intérêt ! Votre demande a été bien reçue. Nous communiquerons avec vous sous peu.') }}</p>

            <div class="contact-field-container">

                <div class="error-msg-container" style="display: none;">
                    <p class="error-required" style="display: none;">{{ pll__('Veuillez remplir tous les champs requis.') }}</p>
                    <p class="error-email" style="display: none;">{{ pll__('Veuillez utiliser un format de courriel valide.') }}</p>
                    <p class="error server-error" style="display: none;"></p>
                </div>

                <div class="contact-row">
                    <select name="contact-title" id="contact-title">
                        <option value=""  disabled selected hidden>{{ pll__('Titre*') }}</option>
                        <option value="m">{{ pll__('M.') }}</option>
                        <option value="mme">{{ pll__('Mme') }}</option>
                    </select>

                    <label for="contact-firstname"></label>
                    <input type="text" id="contact-firstname" name="contact-firstname" placeholder="{{ pll__('Prénom*') }}">
                    <label for="contact-lastname"></label>
                    <input type="text" id="contact-lastname" name="contact-lastname" placeholder="{{ pll__('Nom*') }}">
                </div>
                <div class="contact-row">
                    <label for="contact-compagny-name"></label>
                    <input type="text" id="contact-compagny-name" name="contact-compagny-name" placeholder="{{ pll__('Entreprise*') }}">
                    <label for="contact-city"></label>
                    <input type="text" id="contact-city" name="contact-city" placeholder="{{ pll__('Ville*') }}">
                </div>
                <div class="contact-row">

                    <select name="contact-departement" id="contact-departement">
                        <option value=""  selected>{{ pll__('Département') }}</option>
                        <option>{{ pll__('Comptabilité/finances') }}</option>
                        <option>{{ pll__('Marketing') }}</option>
                        <option>{{ pll__('Administration') }}</option>
                        <option>{{ pll__('Technologies de l\'information') }}</option>
                        <option>{{ pll__('Service à la clientèle') }}</option>
                        <option>{{ pll__('Cadre supérieur') }}</option>
                        <option>{{ pll__('Ventes') }}</option>
                        <option>{{ pll__('Achats') }}</option>
                        <option>{{ pll__('Ressources humaines') }}</option>
                        <option>{{ pll__('Autre') }}</option>
                    </select>

                    <label for="contact-email"></label>
                    <input type="email" id="contact-email" name="contact-email" placeholder="{{ pll__('Courriel*') }}">
                </div>
                <div class="contact-row">
                    <label for="contact-phone"></label>
                    <input type="text" id="contact-phone" name="contact-phone" placeholder="{{ pll__('Téléphone') }}">
                    <label for="contact-ext"></label>
                    <input type="text" id="contact-ext" name="contact-ext" placeholder="{{ pll__('Poste') }}">
                </div>
                <div class="contact-row">
                    <textarea rows="3" cols="10" id="contact-message" name="contact-message" placeholder="{{ pll__('Message*') }}"></textarea>
                </div>
                <div class="contact-row">
                    <div class="check-container">
                        <input type="checkbox" name="contact-accept" id="contact-accept" class="contact-accept"><label for="contact-accept">{{ pll__('J\'accepte de recevoir l\'infolettre et les offres du Groupe CT.') }}</label>
                    </div>

                    <button type="submit" id="submit-contact" class="primary-btn submit-btn">{{ pll__('Envoyer') }}</button>

                </div>
                <span class="mandatory-field-msg">{{ pll__('* Champs obligatoires') }}</span>
            </div>
        </form>
    </div>
</div>
