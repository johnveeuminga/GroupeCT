<div id="_section-03" class="toggle-main-container">
    <div class="toggle-content-header">
        <div class="toggle-title-container">
            <h3 class="toggle-content-title" href="">{{ pll__('Commander des fournitures') }}</h3>
        </div>
        <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.svg" alt="">
        <div class="triangle-blue"></div>
        <a class="open-toggle-content" href="#"></a>
    </div>

    <div class="toggle-content">
        <form id="form-fourniture" class="form-container">
            <div class="text-container col-xs-12">
                <p>
                    {{ pll__('Commandez rapidement et facilement des fournitures en remplissant le formulaire ci-dessous. Votre commande sera livrée dans un délai de 24 à 48 h ouvrable.') }}
                </p>
                <p>
                    {{ pll__('D\'autres options s\'offrent à vous. Contactez un agent par téléphone ou par courriel.') }}
                </p>
            </div>
            <div id="fourniture-success" style="display: none">
                <p><strong>{{ pll__('Confirmation de commande de fournitures') }}</strong></p>
                <p>{{ pll__('Merci d\'utiliser le service de commande en ligne CT. Votre commande a été reçue avec succès et sera traitée dans les plus brefs délais durant les heures ouvrables. Un agent communiquera avec vous sous peu.') }}</p>
                <p>{{ pll__('Saviez-vous que Groupe CT offre un service de commande de cartouches automatisé sans frais? Renseignez-vous dès maintenant!') }}</p>
                <p>{{ pll__('Merci !') }}</p>
            </div>

            <div class="error-msg-container" style="display: none;">
                <p class="error-required" style="display: none;">{{ pll__('Veuillez remplir tous les champs requis.') }}</p>
                <p class="error-email" style="display: none;">{{ pll__('Veuillez utiliser un format de courriel valide.') }}</p>
                <p class="error server-error" style="display: none;"></p>
            </div>
            <div class="content-container">
                <div class="form-left-container col-md-6">

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <select name="fourniture-title" id="fourniture-title" class="tech-support-input select-support">
                            <option value=""  disabled selected hidden>{{ pll__('Titre*') }}</option>
                            <option value="M.">{{ pll__('M.') }}</option>
                            <option value="Mme">{{ pll__('Mme') }}</option>
                        </select>

                        <label for="fourniture-firstname"></label>
                        <input type="text" id="fourniture-firstname" class="tech-support-input" name="fourniture-firstname" placeholder="{{ pll__('Prénom*') }}">

                        <label for="fourniture-lastname"></label>
                        <input type="text" id="fourniture-lastname" class="tech-support-input" name="fourniture-lastname" placeholder="{{ pll__('Nom*') }}">
                    </div>

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <label for="fourniture-email"></label>
                        <input type="email" id="fourniture-email" class="tech-support-input" name="fourniture-email" placeholder="{{ pll__('Courriel*') }}">

                        <label for="fourniture-phone"></label>
                        <input type="text" id="fourniture-phone" class="tech-support-input" name="fourniture-phone" placeholder="{{ pll__('Téléphone*') }}">

                        <label for="contact-ext"></label>
                        <input type="text" id="fourniture-ext" class="tech-support-input" name="fourniture-ext" placeholder="{{ pll__('Poste') }}">
                    </div>

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <label for="fourniture-compagny-name"></label>
                        <input type="text" id="fourniture-compagny-name" class="tech-support-input" name="fourniture-compagny-name" placeholder="{{ pll__('Entreprise*') }}">


                    </div>

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <label for="fourniture-serial"></label>
                        <input type="text" id="fourniture-serial" class="tech-support-input" name="fourniture-serial" placeholder="{{ pll__('Numéro de série de l\'appareil*') }}">
                        <input type="checkbox" name="fourniture-contract" id="fourniture-contract">
                        <label for="fourniture-contract">{{ pll__("Équipement sous contrat de service") }}</label>
                    </div>

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <select name="fourniture-office" id="fourniture-office" class="tech-support-input select-support">
                            <option value=""  disabled selected hidden>{{ pll__('Sélectionner votre point de service*') }}</option>
                            <option value="1">{{ pll__('Groupe CT - Grande région de Montréal') }}</option>
                            <option value="2">{{ pll__('Groupe CT - Grande région de Toronto') }}</option>
                            <option value="3">{{ pll__('SAC - Région de Québec') }}</option>
                            <option value="4">{{ pll__('SAC - Région de la Beauce') }}</option>
                        </select>
                    </div>


                </div> <!-- FORM LEFT END -->
                <div class="form-right-container col-md-6">
                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <label for="fourniture-msg"></label>
                        <textarea name="fourniture-msg" id="fourniture-msg" class="tech-support-input" cols="30" rows="10" placeholder="{{ pll__('Détail de la commande (No# d\'item, description, quantité, …)') }}*"></textarea>
                    </div>

                    <div class="form-submit">

                        <button type="submit" id="submit-fourniture" class="submit-btn primary-btn-blue" href="#">{{ pll__('Soumettre ma demande') }}</button>
                        <span class="mention">{{ pll__('* Champs obligatoires') }}</span>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>




