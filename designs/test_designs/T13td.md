# Tests de l'affichage et d'ajout d'US dans la sandbox

Test de visibilité correcte : Les user stories sont listés selon la forme
(*numéro d'identification*, *description*, *priorité* et *indice de difficulté*)
et sont affichées par ordre croissant de numéro d'identification.

Test de création d'US : Le clic sur le bouton "Add user story" redirige bien vers la page addUserStory.php,

Test de renseignements corrects : parcours des champs en y renseignant des valeurs autorisées et
vérifier leur présence en base de donnée après clic sur le bouton "Add to sandbox".

Test de navigation : Le clic sur le bouton "Cancel" redirige bien vers la page sandbox.php.

Test de forçage d'informations erronées : Entrer des valeurs non numériques dans le champs
"Difficulty" et tenter d'envoyer la requête. Elle doit retourner un message d'erreur.

Test de forçage d'informations manquantes : Laisser la description non renseignée doit renvoyer un message
d'erreur.
