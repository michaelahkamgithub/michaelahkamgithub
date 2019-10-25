//Programmer un convertisseur Fharenheit -> Degré Celsius.

//Étape 1 : trouver les variables
var fharenheit;
var degreCelsius;

//Étape 2 : Lecture (demander à l'usager des données)
fharenheit = Number(prompt("Veuillez entrer le degré en fharenheit : "));

//Étape 3 : Les calculs
degreCelsius = (fharenheit - 32) * 5/9;

//Étape 4 : AFFICHE les résultats
console.log("La température est de " + degreCelsius + " degrés Celsius");
