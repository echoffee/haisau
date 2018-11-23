# Tests de la création de projets 

Test de renseignements corrects : parcours des champs en y renseignant des valeurs autorisées et
vérifier leur présence en base de donnée après clic sur le bouton "Create".

Test de navigation : Le clic sur le bouton "Cancel" redirige bien vers la page projectList.php.

Test de forçage d'informations erronées : Entrer des valeurs non numériques dans le champs 
"Sprint duration" et tenter d'envoyer la requête. Elle doit retourner un message d'erreur.

Test de forçage d'informations manquantes : Laisser des champs non renseignés doit renvoyer un message
d'erreur.
