<?php

$donneesFormulaire = fopen('donneesphp/donnees', 'a+');

fputs($donneesFormulaire, $_POST['nom']);
fputs($donneesFormulaire, $_POST['prenom']);
fputs($donneesFormulaire, $_POST['adresse']);
fputs($donneesFormulaire, $_POST['telephone']);
fputs($donneesFormulaire, $_POST['email']);
fputs($donneesFormulaire, $_POST['yourmsg']);
    
fclose($donneesFormulaire);


echo "Nom : " .$_POST['nom']."<br />";
echo "Prenom : " .$_POST['prenom']."</br >";
echo "Adresse : " .$_POST['adresse']."</br >";
echo "Telephone : " .$_POST['telephone']."</br >";
echo "Email : " .$_POST['email']."</br >";
echo "Votre message : " .$_POST['yourmsg']."</br >";


?>