//Calculer le salaire brut d’un employé.
// Il est payé à l’heure et les données concernant le taux horaire
// et le nombre d’heures travaillées sont fournies en entrée.

//Étape 1 : trouver les variables
var salaire;
var taux;
var nbHeuresTravaillees;

//Étape 2 : Lecture (demander à l'usager des données)
nbHeuresTravaillees = Number(prompt("Nombre d'heures travaillees : "));
taux = Number(prompt("Taux horaire : "));


//Étape 3 : Les calculs
salaire = nbHeuresTravaillees * taux;

//Étape 4 : AFFICHE les résultats
console.log("Le salaire est " + salaire);
