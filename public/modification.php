<?php

include("php/includes/head.php");
include("php/includes/database.php");


echo '<form method="post" action="change.php" id="addForm" autocomplete="off" class="formOverflow"> 
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
                <input type="text" name="lastname" id="name" placeholder="' . $_SESSION['lastname'] . '">
                <br/>
                <label for="firstname">Prénom : </label>
                <input type="text" name="firstname" id="firstname" placeholder="' . $_SESSION['firstname'] . '">
                <br/>
                <label for="password">Mot de passe : </label>
                <input type="password" type="password" name="password" id="password" placeholder="Au moins 5 caractères" pattern=".{5,}">
                <br/>
                <label for="password2">Retaper le mdp : </label>
                <input type="password" name="password2" id="password2" placeholder="Au moins 5 caractères" pattern=".{5,}">
                <br/>
                <label for="username">Pseudo : </label>
                <input type="text" name="username" id="username" placeholder="' . $_SESSION['username'] . '">
                <br/>
                Sexe : 
                <label for="man">Homme</label>
                <input type="radio" name="sex" value="Male" id="man" class="radio">
                <label for="woman">Femme</label>
                <input type="radio" name="sex" value="Female" id="woman"  class="radio" checked>
                <br/>
                <label for="phoneHome">Téléphone Fixe : </label>
                <input type="tel" name="phoneHome" id="phoneHome" placeholder="' . $_SESSION['phoneHome'] . '">
                <br/>
                <label for="phoneMobile">Téléphone Mobile : </label>
                <input type="tel" name="phoneMobile" id="phoneMobile" placeholder="' . $_SESSION['phoneMobile'] . '">
                <br/>
                <label for="neighborhood">Quartier : </label>
                <input type="text" id="neighborhood" name="neighborhood" placeholder="' . $_SESSION['neighborhood'] . '">
                <br/>
                <label for="city">Ville : </label>
                <input type="text" name="city" id="city" placeholder="' . $_SESSION['city'] . '">
                <br/>
                <label for="country">Pays : </label>
                <select name="country" id="country">';
                ?>
                <?php

                $employeeRegionListAdd = $dbh->query("SELECT * FROM region");
				$employeeRegionListAdd->setFetchMode(PDO::FETCH_OBJ);
                    while ($result = $employeeRegionListAdd->fetch()) {
						echo '<option value="' . $result->id_region . '">' . $result->nom_region . '</option>';                        
                    }
                    $employeeRegionListAdd->closeCursor();
                    ?>
                    <?php
echo '                </select>
                <br/>
                <label for="mail">Email : </label>
                <input type="email" name="email" id="mail" placeholder="' . $_SESSION['email'] . '">
                <br/>
                <label for="status">Statut : </label>
                <select name="status" id="status">';
                ?>
                <?php
                    while ($result = $statusListAdd->fetch()) {
                    echo '<option value="' . $result->name . '">' . $result->name . '</option>';      
                    }
                    $statusListAdd->closeCursor();
                    ?>
                    <?php
echo '                </select>
                <br/>
                <label for="activity">Activité : </label>
                <select name="activity" id="activity">';
                ?>
                <?php
                    while ($result = $activityListAdd->fetch()) {
                    echo '<option value="' . $result->name . '">' . $result->name . '</option>';                        
                    }
                    $activityListAdd->closeCursor();
                    ?>
                    <?php
echo '                </select><br/>
                <input type="submit" class="clearForm" name="InsertMembersOrSubscribers" value="Enregistrer">';
                 echo '
                 <br/>
            </form>
        </div>';


?>



//$rep = $bdh->prepare('UPDATE cw_human_resources_memberships SET firstname = "' . $_POST['firstname'] . '", lastname = "' . $_POST['lastname'] . '", username = "' . $_POST['email'] . '" ')