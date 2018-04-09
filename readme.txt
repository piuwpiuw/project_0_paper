
________________________ 04/09 ________________________

dossiers créés
	resources/views/commun/					fichiers communs à plusieurs utilisateurs
	resources/views/jeune/					fichiers du jeune
	app/models/								les modèles des objets des tables

fichiers créés
	resources/views/commun/error.blade.php	page d'erreur
	resources/views/commun/login.blade.php	page de login
	resources/views/jeune/home.blade.php	page d'acceuil du jeune
	resources/views/jeune/create.blade.php	page de création de compte (provisoire)
	app/Http/Controllers/JeuneController.php
	app/models/Jeune.php

fichiers modifiés
	routes/web.php

fichiers à rajouter
	resources/views/jeune/reception.blade.php	fiche d'acceuil du jeune
	app/Http/Controllers/JeuneController.php#receptionFill	fonction pour que le jeune remplisse sa fiche