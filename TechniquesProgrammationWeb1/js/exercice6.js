//Lire le nom et l’âge d’un individu, puis convertir son âge en jours (approximatif).
// Imprimer un message incluant son nom pour l’informer du nombre de jours vécus.

//Étape 1 : trouver les variables
var nom;
var age;
var nbJoursVecus;

//Étape 2 : Lecture (demander à l'usager des données)
nom = prompt("Entrer votre nom : ");
age = Number(prompt("Entrer votre age : "));


//Étape 3 : Les calculs
nbJoursVecus = age * 365;

//Étape 4 : AFFICHE les résultats
console.log("Le nombre de jours vécus est " + nbJoursVecus);
