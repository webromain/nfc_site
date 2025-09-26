<main>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 d-flex align-items-center justify-content-center">
                    <div class="px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                        <form method="POST">
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inscription</h3>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="nom">Nom<span class="text-danger">*</span></label>
                                <input type="text" id="nom" name="nom" class="form-control form-control-lg" required
                                    placeholder="Delacour" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="prenom">Prénom<span class="text-danger">*</span></label>
                                <input type="text" id="prenom" name="prenom" class="form-control form-control-lg"
                                    required placeholder="Jean" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label">Genre<span class="text-danger">*</span></label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="H" name="sexe" id="homme"
                                            required />
                                        <label class="form-check-label" for="homme">Homme</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="F" name="sexe" id="femme"
                                            required />
                                        <label class="form-check-label" for="femme">Femme</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="A" name="sexe" id="autre"
                                            required />
                                        <label class="form-check-label" for="autre">Autre</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">E-mail<span class="text-danger">*</span></label>
                                <input type="email" id="email" name="email" class="form-control form-control-lg"
                                    required placeholder="exemple@test.com" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Mot de passe<span
                                        class="text-danger">*</span></label>
                                <input type="password" id="password" name="password"
                                    class="form-control form-control-lg" required placeholder="Mot de passe" />
                            </div>

                            <div class="pt-1 mb-4">
                                <button type="submit" class="btn btn_effect">S'inscrire</button>
                            </div>

                            <p>Vous avez déjà un compte ? <a href="login" class="link_register">Connectez-vous ici</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>