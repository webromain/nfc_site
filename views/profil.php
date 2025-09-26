<main>
    <div class="container">
        <div class="main-body">
            <?php if (isset($_SESSION["message"])): ?>
                <div class="alert alert-info">
                    <?= htmlspecialchars($_SESSION["message"]) ?>
                </div>
                <?php unset($_SESSION["message"]); ?>
            <?php endif; ?>
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="static/img/profil.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <p>Vous êtes connecté !</p>
                                    <h4><?= htmlspecialchars($_SESSION['prenom']) . " " . htmlspecialchars($_SESSION['nom']) ?>
                                    </h4>
                                    <p class="text-secondary mb-1">
                                        <?php
                                        if ($_SESSION['sexe'] == "H") {
                                            echo "Homme";
                                        } else if ($_SESSION['sexe'] == "F") {
                                            echo "Femme";
                                        } else {
                                            echo "Autre";
                                        }
                                        ?>
                                    </p>
                                    <a class="link_register" href='controllers/logout.php'>Se déconnecter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Prénom & Nom</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= htmlspecialchars($_SESSION['prenom']) . " " . htmlspecialchars($_SESSION['nom']) ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= htmlspecialchars($_SESSION['email']) ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= htmlspecialchars($_SESSION['phone'] ?? 'None') ?>
                                    <button class="btn btn-link"
                                        onclick="document.getElementById('phone-form').style.display='block'">Modifier</button>
                                </div>
                            </div>
                            <form id="phone-form" method="post" action="controllers/update_phone.php"
                                style="display: none;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nouveau numéro de téléphone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="tel"
                                            pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"
                                            name="phone" class="form-control" placeholder="+330600000000" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn_effect">Mettre à jour</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= htmlspecialchars($_SESSION['address'] ?? 'None') ?>
                                    <button class="btn btn-link"
                                        onclick="document.getElementById('address-form').style.display='block'">Modifier</button>
                                </div>
                            </div>
                            <form id="address-form" method="post" action="controllers/update_address.php"
                                style="display: none;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nouvelle adresse</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="address" class="form-control"
                                            placeholder="Entrez votre adresse" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn_effect">Mettre à jour</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1): ?>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Bannir un utilisateur</h6>
                                        <form method="post" action="controllers/ban_user.php">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="user_id">ID de l'utilisateur</label>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="number" name="user_id" class="form-control"
                                                        placeholder="Entrez l'ID de l'utilisateur" required>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn">Bannir</button>
                                        </form>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <form method="POST">
                                        <h6 class="mb-0">Ajouter un utilisateur</h6>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="nom">Nom<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="nom" name="nom" class="form-control form-control-lg"
                                                required placeholder="Delacour" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="prenom">Prénom<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="prenom" name="prenom"
                                                class="form-control form-control-lg" required placeholder="Jean" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label">Genre<span class="text-danger">*</span></label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" value="H" name="sexe"
                                                        id="homme" required />
                                                    <label class="form-check-label" for="homme">Homme</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" value="F" name="sexe"
                                                        id="femme" required />
                                                    <label class="form-check-label" for="femme">Femme</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" value="A" name="sexe"
                                                        id="autre" required />
                                                    <label class="form-check-label" for="autre">Autre</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">E-mail<span
                                                    class="text-danger">*</span></label>
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
                                            <button type="submit" class="btn btn_effect">Ajouter</button>
                                        </div>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>