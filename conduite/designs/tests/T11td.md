# Tests d'ajout d'US au backlog

Test de renseignements corrects : parcours des champs en y renseignant des valeurs autorisées et
vérifier leur présence en base de donnée après clic sur le bouton "Add to backlog".

Test de navigation : Le clic sur le bouton "Cancel" redirige bien vers la page backlog.php.

Test de forçage d'informations erronées : Entrer des valeurs non numériques dans le champs
"Difficulty" et tenter d'envoyer la requête. Elle doit retourner un message d'erreur.

Test de forçage d'informations manquantes : Laisser la description non renseignée doit renvoyer un message
d'erreur.
