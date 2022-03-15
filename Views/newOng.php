<?php
?>
<div class="container col-md-6 mt-5 mb-2">
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <form class="requires-validation" novalidate action="" method="post">
                            <div class="col-md-12 my-4">
                                <input class="form-control "
                                       type="text" name="name" value=""
                                       placeholder="Nom d'entreprise" required>
                                <div class="valid-feedback">Le Nom est valid!</div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 my-4">
                                <input class="form-control "
                                       type="text" name="address" value=""
                                       placeholder="Addresse de l'entreprise" required>
                                <div class="valid-feedback">Le Nom est valid!</div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 my-4">
                                <input class="form-control "
                                       type="text" name="commercial_register" value=""
                                       placeholder="Registre Commercial" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 my-4">
                                <input class="form-control "
                                       type="text" name="coordinates" value=""
                                       placeholder="Coordonees GPS" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 my-4">
                                <input class="form-control "
                                       type="number" name="employee_number" value=""
                                       placeholder="Nombre d'employes" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 my-4">
                                <input class="form-control "
                                       type="text" name="website" value=""
                                       placeholder="Site Web" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 my-4">
                                <select class="form-select mt-3" name="sector" required>
                                    <option selected value="">Secteur d'activite</option>
                                    <option value="education">Education</option>
                                    <option value="sante">Sante</option>
                                    <option value="agriculture">Agriculture</option>
                                </select>
                                <div class="valid-feedback">You selected a commune!</div>
                                <div class="invalid-feedback">Please select a commune!</div>
                            </div>
                            <div class="col-md-12 my-4">
                                <select class="form-select mt-3" name="legal_form" required>
                                    <option selected value="">Forme Juridique</option>
                                    <?php
                                    foreach ($legal_form_options as $key => $option)
                                        echo <<<EOT
                                        <option value="{$key}">$option</option>
                                        EOT;
                                    ?>
                                </select>
                                <div class="valid-feedback">You selected a commune!</div>
                                <div class="invalid-feedback">Please select a commune!</div>
                            </div>
                            <div class="col-md-12 my-4">
                                <select class="form-select mt-3" name="Commune_id" required>
                                    <option selected value="">Commune</option>
                                    <?php
                                    foreach ($communes as $key => $commune)
                                        echo <<<EOT
                                        <option value="{$commune['id']}">{$commune['name']}</option>
                                        EOT;
                                    ?>
                                </select>
                                <div class="valid-feedback">You selected a commune!</div>
                                <div class="invalid-feedback">Please select a commune!</div>
                            </div>


                            <div class="col-md-12 mt-3 my-4">
                                <label class="mb-3 mr-1" for="gender">Organigramme </label>

                                <input type="radio" class="btn-check" name="organization_chart"
                                       id="without_organization_chart" value="false"
                                       autocomplete="off" checked>
                                <label class="btn btn-sm btn-outline-primary"
                                       for="without_organization_chart">Non</label>

                                <input type="radio" class="btn-check" name="organization_chart"
                                       id="with_organization_chart" value="true"
                                       autocomplete="off">
                                <label class="btn btn-sm btn-outline-primary"
                                       for="with_organization_chart">Oui</label>

                                <div class="valid-feedback mv-up">You selected a gender!</div>
                                <div class="invalid-feedback mv-up">Please select a gender!</div>
                            </div>
                            <div class="col-md-12 mt-3 my-4">
                                <label class="mb-3 mr-1" for="gender">1) Dispositif de formation </label>

                                <input type="radio" class="btn-check" name="training_device"
                                       id="without_training_device" value="false"
                                       autocomplete="off" checked>
                                <label class="btn btn-sm btn-outline-primary"
                                       for="without_training_device">Non</label>

                                <input type="radio" class="btn-check" name="training_device" id="with_training_device"
                                       value="true"
                                       autocomplete="off">
                                <label class="btn btn-sm btn-outline-primary" for="with_training_device">Oui</label>

                                <div class="valid-feedback mv-up">You selected a gender!</div>
                                <div class="invalid-feedback mv-up">Please select a gender!</div>
                            </div>
                            <div class="col-md-12 mt-3 my-4">
                                <label class="mb-3 mr-1" for="gender">2) Cotisation Sociale </label>

                                <input type="radio" class="btn-check" name="social_contribution"
                                       id="without_social_contribution" value="false"
                                       autocomplete="off" checked>
                                <label class="btn btn-sm btn-outline-primary"
                                       for="without_social_contribution">Non</label>
                                <input type="radio" class="btn-check" name="social_contribution"
                                       id="with_social_contribution" value="true"
                                       autocomplete="off">
                                <label class="btn btn-sm btn-outline-primary"
                                       for="with_social_contribution">Oui</label>
                                <div class="valid-feedback mv-up">You selected a gender!</div>
                                <div class="invalid-feedback mv-up">Please select a gender!</div>
                            </div>
                            <div class="col-md-12 mt-3 my-4">
                                <label class="mb-3 mr-1" for="gender">2) Contract </label>
                                <input type="radio" class="btn-check" name="contract" id="without_contract"
                                       value="false"
                                       autocomplete="off" checked>
                                <label class="btn btn-sm btn-outline-primary" for="without_contract">Non</label>
                                <input type="radio" class="btn-check" name="contract" id="with_contract" value="true"
                                       autocomplete="off">
                                <label class="btn btn-sm btn-outline-primary" for="with_contract">Oui</label>
                                <div class="valid-feedback mv-up">You selected a gender!</div>
                                <div class="invalid-feedback mv-up">Please select a gender!</div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="yes" name="confirm"
                                       id="invalidCheck" required>
                                <label class="form-check-label">I confirm that all data are correct</label>
                                <div class="invalid-feedback">Please confirm that the entered data are all correct!
                                </div>
                            </div>
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn w-100 btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        let submit_btn = document.getElementById("submit");
        let confirm_btn = document.querySelector('input[name="confirm"]');

        submit_btn.classList.add('disabled');
        confirm_btn.addEventListener('change', function (e) {
            if (e.target.checked) {
                submit_btn.classList.remove('disabled');
            } else {
                submit_btn.classList.add('disabled');
            }
        });
    }
</script>
