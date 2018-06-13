<div id="_section-02" class="toggle-main-container">
    <div class="toggle-content-header">
        <div class="toggle-title-container">
            <h3 class="toggle-content-title" href="">{{ pll__('Compléter une demande d\'assistance') }}</h3>
        </div>
        <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.svg" alt="">
        <div class="triangle-blue"></div>
        <a class="open-toggle-content" href="#"></a>
    </div>

    <div class="toggle-content">
        <form id="form-assistance" class="form-container">
            <div class="text-container col-xs-12">
                <p>
                    {!! nl2br(pll__('Demande d\'assistance - Description')) !!}
                </p>
            </div>
            <div id="assistance-success" style="display: none">
                <p><strong>{{ pll__('Confirmation de demande d\'assistance') }}</strong></p>
                <p>{{ pll__('Merci d\'avoir contacté l\'assistance technique CT. Votre demande a été reçue avec succès et sera traitée dans les plus brefs délais durant nos heures d\'ouverture. Un agent communiquera avec vous sous peu.') }}</p>
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
                        <select name="assistance-title" id="assistance-title" class="tech-support-input select-support">
                            <option value=""  disabled selected hidden>{{ pll__('Titre*') }}</option>
                            <option value="M.">{{ pll__('M.') }}</option>
                            <option value="Mme">{{ pll__('Mme') }}</option>
                        </select>

                        <label for="assistance-firstname"></label>
                        <input type="text" id="assistance-firstname" class="tech-support-input" name="assistance-firstname" placeholder="{{ pll__('Prénom*') }}">

                        <label for="assistance-lastname"></label>
                        <input type="text" id="assistance-lastname" class="tech-support-input" name="assistance-lastname" placeholder="{{ pll__('Nom*') }}">
                    </div>

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <label for="assistance-email"></label>
                        <input type="email" id="assistance-email" class="tech-support-input" name="assistance-email" placeholder="{{ pll__('Courriel*') }}">

                        <label for="assistance-phone"></label>
                        <input type="text" id="assistance-phone" class="tech-support-input" name="assistance-phone" placeholder="{{ pll__('Téléphone*') }}">

                        <label for="contact-ext"></label>
                        <input type="text" id="assistance-ext" class="tech-support-input" name="assistance-ext" placeholder="{{ pll__('Poste') }}">
                    </div>

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <label for="assistance-compagny-name"></label>
                        <input type="text" id="assistance-compagny-name" class="tech-support-input" name="assistance-compagny-name" placeholder="{{ pll__('Entreprise*') }}">

                        <label for="assistance-serial"></label>
                        <input type="text" id="assistance-serial" class="tech-support-input" name="assistance-serial" placeholder="{{ pll__('Numéro de série de l\'appareil*') }}">
                    </div>

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <select name="assistance-office" id="assistance-office" class="tech-support-input select-support">
                            <option value=""  disabled selected hidden>{{ pll__('Sélectionner votre point de service*') }}</option>
                            <option value="1">{{ pll__('Groupe CT') }}</option>
                            <option value="2">{{ pll__('SAC - Bureau de Québec') }}</option>
                            <option value="3">{{ pll__('SAC - Bureau de la Beauce') }}</option>
                        </select>
                    </div>


                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">

                        <div class="opening-main-container col-sm-12 no-padding">
                            <div class="opening">
                                <span class="mention">{{ pll__("Heures d'ouverture") }}</span>
                                <select name="assistance-opening01" id="assistance-opening01" class="tech-support-input select-support assistance-opening">
                                    <option value=""  disabled selected hidden>{{ pll__('Heures') }}</option>
                                    @for ($i = 0; $i <= 23; $i++)
                                        <option value="{{ strlen($i) === 1 ? '0' . $i : $i }}">{{ strlen($i) === 1 ? '0' . $i : $i }}</option>
                                    @endfor
                                </select>

                                <select name="assistance-opening02" id="assistance-opening02" class="tech-support-input select-support assistance-opening">
                                    <option value=""  disabled selected hidden>{{ pll__('Minutes') }}</option>
                                    @for ($i = 0; $i <= 59; $i += 15)
                                        <option value="{{ strlen($i) === 1 ? '0' . $i : $i }}">{{ strlen($i) === 1 ? '0' . $i : $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <!--  -->
                            <label class="hour-to" for="">{{ pll__('À') }}</label>
                            <div class="opening">
                                <span class="mention">{{ pll__("Heures de fermeture") }}</span>
                                <select name="assistance-opening03" id="assistance-opening03" class="tech-support-input select-support assistance-opening">
                                    <option value=""  disabled selected hidden>{{ pll__('Heures') }}</option>
                                    @for ($i = 0; $i <= 23; $i++)
                                        <option value="{{ strlen($i) === 1 ? '0' . $i : $i }}">{{ strlen($i) === 1 ? '0' . $i : $i }}</option>
                                    @endfor
                                </select>
                                <select name="assistance-opening04" id="assistance-opening04" class="tech-support-input select-support assistance-opening">
                                    <option value=""  disabled selected hidden>{{ pll__('Minutes') }}</option>
                                    @for ($i = 0; $i <= 59; $i += 15)
                                        <option value="{{ strlen($i) === 1 ? '0' . $i : $i }}">{{ strlen($i) === 1 ? '0' . $i : $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>  <!-- OPENING MAIN CONTAINER -->
                    </div>
                    <div class="input-container">
                        <input type="checkbox" name="assistance-closed" id="assistance-closed">
                        <label for="assistance-closed">{{ pll__("Bureau fermé le midi") }}</label>
                    </div>
                </div> <!-- FORM LEFT END -->
                <div class="form-right-container col-md-6">
                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <label for="assistance-msg"></label>
                        <textarea name="assistance-msg" id="assistance-msg" class="tech-support-input" cols="30" rows="10" placeholder="{{ pll__('Description du problème*') }}"></textarea>
                    </div>
                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <div class="assistance-upload-container tech-support-input">
                            <span class="mention">{{ pll__("Joindre un test d'impression") }}</span>
                            <input type="file" name="assistance-upload" id="assistance-upload" class="tech-support-input">
                            <label class="btn-upload" for="assistance-upload">{{ pll__("Parcourir") }}</label>
                            <a href="#" target="_blank" id="file-path" style="display: none;"></a>
                            <p id="file-too-large" style="display: none;">{{ pll__('Veuillez respecter le poid maximal!') }}</p>
                        </div>
                        <span class="mention">{{ pll__('Poids maximal de') }} 25 {{ pll__('Mo') }}</span>
                    </div>
                    <div class="form-submit">

                        <button type="submit" id="submit-assistance" class="submit-btn primary-btn-blue">{{ pll__('Soumettre ma demande') }}</button>
                        <span class="mention">{{ pll__('* Champs obligatoires') }}</span>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

