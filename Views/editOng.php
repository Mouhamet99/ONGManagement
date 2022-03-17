<div class="container col-md-6 mt-5 mb-2">
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">

                        <form class="requires-validation" novalidate
                              action="<?php echo '/ong/edit/' . $company['id'] ?>" method="post">
                            <div class="col-md-12 my-4">
                                <input class="form-control "
                                       type="text" name="name" value="<?php echo $company['name'] ?>"
                                       placeholder="Nom d'entreprise" required>
                                <div class="valid-feedback">Le Nom est valid!</div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 my-4">
                                <input class="form-control "
                                       type="text" name="address" value="<?php echo $company['address'] ?>"
                                       placeholder="Addresse de l'entreprise" required>
                                <div class="valid-feedback">Le Nom est valid!</div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 my-4">
                                <input class="form-control "
                                       type="text" name="commercial_register"
                                       value="<?php echo $company['commercial_register'] ?>"
                                       placeholder="Registre Commercial" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 my-4">
                                <input class="form-control "
                                       type="text" name="coordinates" value="<?php echo $company['coordinates'] ?>"
                                       placeholder="Coordonees GPS" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 my-4">
                                <input class="form-control "
                                       type="number" name="employee_number"
                                       value="<?php echo $company['employee_number'] ?>"
                                       placeholder="Nombre d'employes" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 my-4">
                                <input class="form-control "
                                       type="text" name="website" value="<?php echo $company['website'] ?>"
                                       placeholder="Site Web" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 my-4">
                                <select class="form-select mt-3 text-capitalize" name="sector" required>
                                    <?php foreach ($sector_options as $sector_option) :
                                        $selected = $sector_option === $company['sector'] ? "selected" : '';
                                        echo "<option value = \"{$sector_option}\" $selected >$sector_option</option>";
                                    endforeach; ?>
                                </select>
                                <div class="valid-feedback">You selected a commune!</div>
                                <div class="invalid-feedback">Please select a commune!</div>
                            </div>
                            <div class="col-md-12 my-4">
                                <select class="form-select mt-3" name="legal_form" required>
                                    <option value="">Forme Juridique</option>
                                    <?php foreach ($legal_form_options as $key => $legal_form_option) :
                                        $selected = $legal_form_option === $company['legal_form'] ? "selected" : '';
                                        echo "<option value = \"{$key}\" $selected >$legal_form_option</option>";
                                    endforeach; ?>

                                </select>
                                <div class="valid-feedback">You selected a commune!</div>
                                <div class="invalid-feedback">Please select a commune!</div>
                            </div>
                            <div class="col-md-12 my-4">
                                <select class="form-select mt-3" name="Commune_id" required>
                                    <option selected value="">Commune</option>

                                    <?php foreach ($communes as $commune):
                                        $selected = $commune['id'] === $company['Commune_id'] ? "selected" : '';
                                        echo "<option value = \"{$commune['id']}\" $selected >{$commune["name"]}</option>";
                                    endforeach; ?>
                                    ?>

                                </select>
                                <div class="valid-feedback">You selected a commune!</div>
                                <div class="invalid-feedback">Please select a commune!</div>
                            </div>


                            <div class="col-md-12 mt-3 my-4">
                                <label class="mb-3 mr-1" for="gender">Organigramme </label>
                                <?php $checked = $company['organization_chart'] == 1 ? "checked" : ""
                                ?>

                                <input type="radio" class="btn-check" name="organization_chart"
                                       id="with_organization_chart" value="true"
                                       autocomplete="off" <?= $checked ?> >
                                <label class="btn btn-sm btn-outline-primary"
                                       for="with_organization_chart">Oui</label>

                                <input type="radio" class="btn-check" name="organization_chart"
                                       id="without_organization_chart" value="false"
                                       autocomplete="off" <?= $checked === 'checked' ? '' : 'checked' ?> >
                                <label class="btn btn-sm btn-outline-primary"
                                       for="without_organization_chart">Non</label>
                                <div class="valid-feedback mv-up">You selected a gender!</div>
                                <div class="invalid-feedback mv-up">Please select a gender!</div>
                            </div>
                            <div class="col-md-12 mt-3 my-4">
                                <label class="mb-3 mr-1" for="gender">1) Dispositif de formation </label>
                                <?php $checked = $company['training_device'] == 1 ? "checked" : ""
                                ?>

                                <input type="radio" class="btn-check" name="training_device" id="with_training_device"
                                       value="true"
                                       autocomplete="off" <?= $checked ?> >
                                <label class="btn btn-sm btn-outline-primary" for="with_training_device">Oui</label>

                                <input type="radio" class="btn-check" name="training_device"
                                       id="without_training_device" value="false"
                                       autocomplete="off" <?= $checked === 'checked' ? '' : 'checked' ?> >
                                <label class="btn btn-sm btn-outline-primary"
                                       for="without_training_device">Non</label>
                                <div class="valid-feedback mv-up">You selected a gender!</div>
                                <div class="invalid-feedback mv-up">Please select a gender!</div>
                            </div>
                            <div class="col-md-12 mt-3 my-4">
                                <label class="mb-3 mr-1" for="gender">2) Cotisation Sociale </label>
                                <?php $checked = $company['social_contribution'] == 1 ? "checked" : ""
                                ?>
                                <input type="radio" class="btn-check" name="social_contribution"
                                       id="with_social_contribution" value="true"
                                       autocomplete="off" <?= $checked ?> >
                                <label class="btn btn-sm btn-outline-primary"
                                       for="with_social_contribution">Oui</label>
                                <input type="radio" class="btn-check" name="social_contribution"
                                       id="without_social_contribution" value="false"
                                       autocomplete="off" <?= $checked === 'checked' ? '' : 'checked' ?> >
                                <label class="btn btn-sm btn-outline-primary"
                                       for="without_social_contribution">Non</label>
                                <div class="valid-feedback mv-up">You selected a gender!</div>
                                <div class="invalid-feedback mv-up">Please select a gender!</div>
                            </div>
                            <div class="col-md-12 mt-3 my-4">
                                <label class="mb-3 mr-1" for="gender">4) Contract </label>
                                <?php $checked = $company['contract'] == 1 ? "checked" : ""
                                ?>
                                <input type="radio" class="btn-check" name="contract" id="with_contract" value="true"
                                       autocomplete="off" <?= $checked ?> >
                                <label class="btn btn-sm btn-outline-primary" for="with_contract">Oui</label>
                                <input type="radio" class="btn-check" name="contract" id="without_contract"
                                       value="false"
                                       autocomplete="off" <?= $checked === 'checked' ? '' : 'checked' ?> >
                                <label class="btn btn-sm btn-outline-primary" for="without_contract">Non</label>
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
                                <button id="submit" type="submit" class="btn btn w-100 btn-warning">Enregistrer les
                                    modifications
                                </button>
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
