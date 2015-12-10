<?php
// Titre de la page
$headTitle = "Cinewax - Accueil";

// CSS de cette page
$addCSS =  array("");

// JS de cette page
$addJS =  array("");

// Queries de cette page
$addPHP = array("");
include("php/includes/database.php");
include("php/includes/head.php");
// $employeeRegionListAdd = $dbh->query("SELECT * FROM region");
// $employeeRegionListAdd->setFetchMode(PDO::FETCH_OBJ);

// $statusListAdd= $dbh->query("SELECT name FROM cw_human_resources_memberships_status  WHERE archive = 'false'");
// $statusListAdd->setFetchMode(PDO::FETCH_OBJ);
// $activityListAdd= $dbh->query("SELECT name FROM cw_human_resources_memberships_activity  WHERE archive = 'false'");
// $activityListAdd->setFetchMode(PDO::FETCH_OBJ);


echo '<form method="post" action="" id="addForm" autocomplete="off" class="formOverflow"> 
                <label for="member">Adhérent</label>
                <input type="radio" name="membership" value="Member" id="member" class="radio">
                <label for="subscriber">Abonné</label>
                <input type="radio" name="membership" value="Subscriber" id="subscriber" class="radio" checked>
                <br/>
                <label for="newsletterOn">Newsletter(ON)</label>
                <input type="radio" name="newsletter" value="Yes" id="newsletterOn"class="radio">
                <label for="newsletterOff">Newsletter(OFF)</label>
                <input type="radio" name="newsletter" value="No" id="newsletterOff"class="radio" checked>
                <br/>
                <label for="name">Nom : </label>
                <input type="text" name="lastname" id="name" placeholder="Ex : Dupont">
                <br/>
                <label for="firstname">Prénom : </label>
                <input type="text" name="firstname" id="firstname" placeholder="Ex : Laurent">
                <br/>
                <label for="password">Mot de passe : </label>
                <input type="password" type="password" name="password" id="password" placeholder="Au moins 5 caractères">
                <br/>
                <label for="password2">Retaper le mdp : </label>
                <input type="password" name="password2" id="password2" placeholder="Au moins 5 caractères">
                <br/>
                <label for="username">Pseudo : </label>
                <input type="text" name="username" id="username" placeholder="Ex : laurent_dupont">
                <br/>
                Sexe : 
                <label for="man">Homme</label>
                <input type="radio" name="sex" value="Male" id="man" class="radio">
                <label for="woman">Femme</label>
                <input type="radio" name="sex" value="Female" id="woman"  class="radio" checked>
                <br/>
                <label for="phoneHome">Téléphone Fixe : </label>
                <input type="tel" name="phoneHome" id="phoneHome" placeholder="Ex : +221 01 023 45 87">
                <br/>
                <label for="phoneMobile">Téléphone Mobile : </label>
                <input type="tel" name="phoneMobile" id="phoneMobile" placeholder="Ex : +221 01 023 45 87">
                <br/>
                <label for="neighborhood">Quartier : </label>
                <input type="text" id="neighborhood" name="neighborhood" placeholder="">
                <br/>
                <label for="city">Ville : </label>
                <input type="text" name="city" id="city" placeholder="Dakar">
                <br/>
                <label for="country">Pays : </label>
                <select name="country" id="country">
                    while ($result = $employeeRegionListAdd->fetch()) {
                    <option value="' . $result->nom_region . '">' . $result->nom_region . '</option>
                        
                    }
                    $employeeRegionListAdd->closeCursor();
                </select>
                <br/>
                <label for="mail">Email : </label>
                <input type="email" name="email" id="mail" placeholder="Ex : laurent.dupont@gmail.com">
                <br/>
                <label for="status">Statut : </label>
                <select name="status" id="status">
                    while ($result = $statusListAdd->fetch()) {
                    <option value="' . $result->name . '">' . $result->name . '</option>
                       
                    }
                    $statusListAdd->closeCursor();
                </select>
                <br/>
                <label for="activity">Activité : </label>
                <select name="activity" id="activity">
                    while ($result = $activityListAdd->fetch()) {
                    <option value="' . $result->name . '">' . $result->name . '</option>
                        
                    }
                    $activityListAdd->closeCursor();
                </select><br/>
                <input type="submit" class="clearForm" name="InsertMembersOrSubscribers" value="Enregistrer">
            </form>
        </div>';
include("php/includes/scripts.php");
?>

<!--scripts Js-->

</body>
</html>