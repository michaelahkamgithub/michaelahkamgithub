//Calculer la surface d’un rectangle dont la longueur et la largeur sont lues à l’écran.

//Étape 1 : trouver les variables
var longueur;
var largeur;
var surface;


//Étape 2 : Lecture (demander à l'usager des données)
longueur = Number(prompt("Veuillez entrer la longueur svp : "));
largeur = Number(prompt("Veuillez entrer la largeur svp : "));


//Étape 3 : Les calculs
surface = longueur * largeur;

//Étape 4 : AFFICHE les résultats
console.log("La longueur du rectangle est " + longueur);
console.log("La largeur est : " + largeur);
console.log("La surface du rectangle est : " + surface);
