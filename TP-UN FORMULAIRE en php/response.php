<?php
    if(isset($_POST)&& $_POST["prenom"] && $_POST["nom"]&& $_POST["sexe"]
        && $_POST["status"] &&is_numeric($_POST["status"]) && $_POST["debutant"] && $_POST["login"] && $_POST["pwd"]){
        $pnom=strip_tags($_POST["prenom"]);
        $nom=strip_tags($_POST["nom"]);
        $sexe=strip_tags($_POST["sexe"]);
        $status=strip_tags($_POST["status"]);
        $debutant=strip_tags($_POST["debutant"]);
        $titre= ($sexe == "F" && $status == "2") ? "Mme" : ($sexe == "F" ? "Mlle" : "Mr");
        $login=strip_tags($_POST["login"]);
        $pwd=strip_tags($_POST["pwd"]);
        echo "<h3>Bonjour, ".$titre." ".$pnom." ".$nom."</h3><p> Votre nom d'utilisateur est '<em style='color: darkcyan; font-weight: bold'>"
                    .$login."</em>' et votre mot de passe '<em style='color: darkcyan; font-weight: bold'>".$pwd."</em>'</p>";
    }
?>