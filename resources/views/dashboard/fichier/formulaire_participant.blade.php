<div class="col-12">
    <div class="row">
        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="lastname" class="form-label">Nom:</label>
            <input type="text" class="form-control" id="lastname"
                placeholder="Entrer le nom du participant" name="lastname">
        </div>
        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="firstname" class="form-label">Prénom:</label>
            <input type="text" class="form-control" id="firstname"
                placeholder="Entrer le prénom du participant" name="firstname">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="organisation" class="form-label">Organisation:</label>
            <input type="text" class="form-control" id="organisation"
                placeholder="Entrer le nom de l'organisation" name="organisation">
        </div>

        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="fonction" class="form-label">fonction:</label>
            <input type="text" class="form-control" id="fonction"
                placeholder="Entrer la fonction du participant" name="fonction">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="formation" class="form-label">Formation:</label>
            <input type="text" class="form-control" id="formation"
                placeholder="Entrer la formation de base" name="formation">
        </div>

        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="telephone" class="form-label">Téléphone:</label>
            <input type="text" class="form-control" id="telephone"
                placeholder="Entrer le numéro de téléphone" name="telephone">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="whatsapp" class="form-label">Numéro whatsapp:</label>
            <input type="text" class="form-control" id="whatsapp"
                placeholder="Entrer le numéro whatsapp" name="whatsapp">
        </div>


        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email"
                placeholder="Entrer l'adresse email" name="email">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="code_participant" class="form-label">Code du participant (Id unique CNIB à
                18 chiffres):</label>
            <input type="text" class="form-control" id="code_participant"
                placeholder="Entrer le numéro NIP" name="code_participant">
        </div>
        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="region" class="form-label">Région:</label>
            <input type="text" class="form-control" id="region"
                placeholder="Entrer la region" name="region">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="province" class="form-label">Province:</label>
            <input type="text" class="form-control" id="province"
                placeholder="Entrer la province" name="province">
        </div>
        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="commune" class="form-label">Commune:</label>
            <input type="text" class="form-control" id="commune"
                placeholder="Entrer la commune" name="commune">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="village" class="form-label">Village/Secteur:</label>
            <input type="text" class="form-control" id="village"
                placeholder="Entrer le village/secteur" name="village">
        </div>

        <div class="col-12 col-md-6 mb-3 mt-3">
            <label for="date" class="form-label">Date d’enregistrement :</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <span class="p-0">Genre</span>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="gender"
                    value="Homme" checked>Homme
                <label class="form-check-label" for="radio1"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="gender"
                    value="Femme">Femme
                <label class="form-check-label" for="radio2"></label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <span class="p-0">Tranche d'âge</span>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="tranche_age"
                    value="Inférieur ou égale à 35" checked>Inférieur ou égale à 35
                <label class="form-check-label" for="radio1"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="tranche_age"
                    value="36 à 50">36 à 50
                <label class="form-check-label" for="radio2"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="tranche_age"
                    value="Plus de 50">Plus de 50
                <label class="form-check-label" for="radio2"></label>
            </div>
        </div>

    </div>
    <div class="row border-top mt-3">
        <div class="col-12 col-md-5">
            <span class="p-0">Appartient à un autre groupe minoritaire</span>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="group_minoritaire"
                    value="Oui" checked>Oui
                <label class="form-check-label" for="radio1"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="group_minoritaire"
                    value="Non">Non
                <label class="form-check-label" for="radio2"></label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <span class="p-0">Statut de résidence</span>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="statut_residence"
                    value="Hôte" checked>Hôte
                <label class="form-check-label" for="radio1"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="statut_residence"
                    value="PDI">PDI
                <label class="form-check-label" for="radio2"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="statut_residence"
                    value="Autre">Autre
                <label class="form-check-label" for="radio2"></label>
            </div>
        </div>
        
    </div>
    <div class="row border-top mt-3">
        <div class="col-12 col-md-6">
            <span class="p-0">Handicap</span>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="handicap"
                    value="Oui" checked>Oui
                <label class="form-check-label" for="radio1"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="handicap"
                    value="Non">Non
                <label class="form-check-label" for="radio2"></label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <span class="p-0">Si handicapé, type de handicap</span>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="type_handicap"
                    value="Moteur" checked>Moteur
                <label class="form-check-label" for="radio1"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="type_handicap"
                    value="Visuel">Visuel
                <label class="form-check-label" for="radio2"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="type_handicap"
                    value="Handicap auditif">Handicap auditif
                <label class="form-check-label" for="radio2"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="type_handicap"
                    value="Handicap de la parole">Handicap de la parole
                <label class="form-check-label" for="radio2"></label>
            </div>
        </div>
    </div>
    <div class="d-flex mt-3">
        <button type="submit" class="btn btn-primary">Générer le PDF</button>
    </div>
</div>