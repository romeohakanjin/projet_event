<tr>
    <td><input autocomplete="off" type="text" name="inputNom" id="inputNom" class="form-control"
               required autofocus value="<?php if(isset($data->nom)) { echo $data->nom; } ?>"></td>

    <td><input autocomplete="off" type="text" name="inputPrenom" id="inputPrenom" class="form-control"
               required autofocus value="<?php if(isset($data->prenom)) { echo $data->prenom; } ?>"></td>

    <td><input autocomplete="off" type="text" name="inputDate_naissance" id="inputDate_naissance" class="form-control"
               required value="<?php if(isset($data->date_naissance)) { echo $data->date_naissance; } ?>"></td>

    <td><input autocomplete="off" type="text" name="inputAdresse" id="inputAdresse" class="form-control"
               required value="<?php if(isset($data->adresse)) { echo $data->adresse; } ?>"></td>

    <td><input autocomplete="off" type="text" name="inputCP" id="inputCP" class="form-control"
               required value="<?php if(isset($data->code_postal)) { echo $data->code_postal; } ?>"></td>

    <td><input autocomplete="off" type="text" name="inputVille" id="inputVille" class="form-control"
               required value="<?php if(isset($data->ville)) { echo $data->ville; } ?>"></td>

    <td><input autocomplete="off" type="text" name="inputEtude" id="inputEtude" class="form-control"
               required value="<?php if(isset($data->niveau_etude)) { echo $data->niveau_etude; } ?>"></td>

    <td><input autocomplete="off" type="text" name="inputContrat" id="inputContrat" class="form-control"
               required value="<?php if(isset($data->type_contrat)) { echo $data->type_contrat; } ?>"></td>


    <?php if($_GET['p'] === 'edit_table'): ?>
    <td><button class="btn btn-lg btn-primary btn-block" name='formedit'
                value="editer" type="submit">Modifier</button><td>
        <?php elseif($_GET['p'] === 'add_table'): ?>
    <td><button class="btn btn-lg btn-primary btn-block" name='formajout'
                value="ajouter" type="submit">Ajouter</button><td>
        <?php endif; ?>
</tr>