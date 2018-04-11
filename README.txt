COPYRIGHT 2018

TECHNIQUES AVANCEES 

	a) changement en tp

- detecter les urls et mails dans les messages : FAIT (fonctionnel)

- Afficher les messages entiers en AJAX : FAIT(fonctionnel)
  au bout de 100 caractères le message est coupé et un bouton lire la suite apparait puis disparait lorsque l'on clique 
  dessus et fait apparaitre le reste du message (j'espere avoir bien compris la consigne)

- expression regulieres dans le formulaire d'inscription : FAIT(fonctrionnel)
  detecte la conformité du nom, mail, telephone, mot de passe (8caracteres, une maj une min et un 
  caractere special)


	b) developpement

- possibilité de vote : FAIT (fonctionnel)
  recupere l'ip de l'ordi même en connexion partagé ou proxy puis n'incremente plus le compteur lorsque
  l'utilisateur essaye de voter plusieurs fois 


OPTIMISATION

- icones fb et twitter sprite : FAIT(fonctionnel)
- minification du code js css : FAIT(fonctionnel)
  j'ai laissé les codes non minifie à côté pour les corrections, mon code prend bien en compte les 
  js et css minifié
- pas de js css in line : NORMALEMENT NON 
- JS en bas de page : FAIT 
  j'ai tout mis en bas de page (bas.tpl) à part le script jquery qui est resté en haut ce n'est pas 
  possible pour les votes, les regexp etc (j'ai testé)
- CDN pour librairies: FAIT 
  j'ai utilisé que des cdn, j'ai supprimé les anciens script et fichiers bootstrap pour aller au
  maximum de l'optimisation 
