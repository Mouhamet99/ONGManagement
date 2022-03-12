<?php
?>
<div class="container col-md-6 mt-5">
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="text-center">Registration</h3>
                        <p class="text-center">Fill in the data below.</p>
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


<!--                            <div class="col-md-12 my-4">-->
<!--                                <input class="form-control" type="email" name="email" placeholder="E-mail Address"-->
<!--                                       required>-->
<!--                                <div class="valid-feedback">Email field is valid!</div>-->
<!--                                <div class="invalid-feedback">Email field cannot be blank!</div>-->
<!--                            </div>-->

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
                                    <option value="Entreprise unipersonnelle à responsabilité limitée (EURL)">Entreprise unipersonnelle à responsabilité limitée (EURL)	</option>
                                </select>
                                <div class="valid-feedback">You selected a commune!</div>
                                <div class="invalid-feedback">Please select a commune!</div>
                            </div>
                            <div class="col-md-12 my-4">
                                <select class="form-select mt-3" name="Commune_id" required>
                                    <option selected value="">Commune</option>
                                    <option value="1">SA</option>
                                    <option value="1">SUARL</option>
                                    <option value="1">SARL</option>
                                </select>
                                <div class="valid-feedback">You selected a commune!</div>
                                <div class="invalid-feedback">Please select a commune!</div>
                            </div>


                            <div class="col-md-12 mt-3 my-4">
                                <label class="mb-3 mr-1" for="gender">Have You.... </label>

                                <input type="radio" class="btn-check" name="gender" id="male" value="male"
                                       autocomplete="off" checked>
                                <label class="btn btn-sm btn-outline-secondary" for="male">Oui</label>

                                <input type="radio" class="btn-check" name="gender" id="female" value="female"
                                       autocomplete="off">
                                <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

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
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
