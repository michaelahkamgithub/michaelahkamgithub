//Convertir un nombre de gallons en litres. 1 gal = 4.55 litres

//Étape 1 : trouver les variables
var gallons;
var litres;

//Étape 2 : Lecture (demander à l'usager des données)
gallons = Number(prompt("Veuillez entrer le nombre de gallons svp : "));

//Étape 3 : Les calculs
litres = gallons * 4.55;

//Étape 4 : AFFICHE les résultats
console.log(gallons + " gallons donne " + litres + " en litres");
