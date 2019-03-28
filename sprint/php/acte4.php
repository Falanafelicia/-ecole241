<!DOCTYPE html>
<html>
<head>
  <title>Variables-Tableaux-MultiDimensionnels</title>
</head>
<body>
    <?php
   $apprenants = array (
    array("nom" => "MANGUEDI","prenom" =>"Falana","age" =>"19","profil" =>"https://github.com/Falanafelicia"),
    array("nom" => "DIN","prenom" =>"Kelby","age" =>"21","profil" =>"https://dinkelby7.github.io/ecole241/profil/"),
    array("nom" => "ITOUTOU","prenom" =>"François","age" =>"21","profil" =>"https://bernyfrancois.github.io/ecole241/profil/"),
    array("nom" => "NGOUA","prenom" =>"Ismael","age" =>"23","profil" =>"https://ismael8.github.io/ecole241/profil/"),
    array("nom" => "MAHANGA","prenom" =>"Hamilton","age" =>"25","profil" =>"https://hamiltondarryl.github.io/ecole241/profil/"),
    array("nom" => "NZE","prenom" =>"Leticia","age" =>"25","profil" =>"https://nzebitome.github.io/ecole241/profil/"),
    array("nom" => "MBELA","prenom" =>"Kevinn","age" =>"21","profil" =>"https://mbela-kevinn98.github.io/ecole241/profil/"),
    array("nom" => "KAMGOUA","prenom" =>"Grace","age" =>"28","profil" =>"https://lacastafiore.github.io/ecole241/profil/"),
    array("nom" => "NOUBISSI","prenom" =>"Yannick","age" =>"31","profil" =>"https://elieyan.github.io/ecole241/profil/"),
    array("nom" => "CAPITAINE","prenom" =>"Didier","age" =>"29","profil" =>"https://capitaine7.github.io/ecole241/profil/")
    );
    echo "Premier apprenant : ".$apprenants[0][0];
    ?>
</body>
</html>