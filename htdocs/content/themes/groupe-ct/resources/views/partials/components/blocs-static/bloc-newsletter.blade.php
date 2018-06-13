<section id="home-newsletter" class="bloc-newsletter">
    <div class="bloc-newsletter-container default-padding default-width">
        <form id="form-newsletter" method="post">
            <div class="newsletter-contact-form-container">
                <div class="newsletter-title-container">
                    <h3 class="newsletter-upper-title">{{ pll__('Infolettre') }}</h3>
                    <h2 class="newsletter-title">{{ pll__('Restez à la page') }}</h2>
                    <p class="newsletter-desc">{{ pll__('Abonnez-vous à l\'infolettre pour recevoir les dernières nouvelles de Groupe CT.') }}</p>
                    <p class="newsletter-success" style="display: none;">{{ pll__('Votre inscription à l\'infolettre est complétée.') }}</p>
                    <p class="newsletter-success" style="display: none;">{{ pll__('Vous recevrez des nouvelles de Groupe CT sous peu. Restez à l\'affût !') }}</p>
                </div>
                <div id="newsletter-errors-container" class="form-messages form-errors error-msg-container" style="display: none;">
                    <p class="error-required" style="display: none;">{{ pll__('Veuillez remplir tous les champs requis.') }}</p>
                    <p class="error-email" style="display: none;">{{ pll__('Veuillez utiliser un format de courriel valide.') }}</p>
                    <p class="error server-error" style="display: none;"></p>
                </div>
                <div class="contact-field-container">
                    <div class="contact-row">
                        <div class="select-container">
                            <select name="newsletter-title" id="newsletter-title">
                                <option value=""  disabled selected hidden>{{ pll__('Titre*') }}</option>
                                <option value="M.">{{ pll__('M.') }}</option>
                                <option value="Mme">{{ pll__('Mme') }}</option>
                            </select>
                        </div>

                        <label for="newsletter-firstname"></label>
                        <input type="text" id="newsletter-firstname" name="newsletter-firstname" placeholder="{{ pll__('Prénom*') }}">
                        <label for="newsletter-lastname"></label>
                        <input type="text" id="newsletter-lastname" name="newsletter-lastname" placeholder="{{ pll__('Nom*') }}">
                    </div>
                    <div class="contact-row">
                        <label for="newsletter-compagny-name"></label>
                        <input type="text" id="newsletter-compagny-name" name="newsletter-compagny-name" placeholder="{{ pll__('Entreprise*') }}">
                        <label for="newsletter-phone"></label>
                        <input type="text" id="newsletter-phone" name="newsletter-phone" placeholder="{{ pll__('Téléphone') }}">
                    </div>
                    <div class="contact-row">
                        <label for="newsletter-email"></label>
                        <input type="email" id="newsletter-email" name="newsletter-email" placeholder="{{ pll__('Courriel*') }}">
                    </div>
                    <div class="contact-row">
                        <button type="submit" id="submit-newsletter" class="submit-btn">{{ pll__('Soumettre') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

