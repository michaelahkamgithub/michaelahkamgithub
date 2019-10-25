//Programmer un convertisseur Degré Celsius -> Fharenheit.

//Étape 1 : trouver les variables
var degreCelsius;
var fharenheit;

//Étape 2 : Lecture (demander à l'usager des données)
degreCelsius = Number(prompt("Veuillez entrer le degré celsius : "));

//Étape 3 : Les calculs
fharenheit = degreCelsius * 1.8 + 32;

//Étape 4 : AFFICHE les résultats
console.log("La température est de " + fharenheit + " fharenheit");
