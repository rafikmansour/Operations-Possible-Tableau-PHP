<?php
// 1. Créer un tableau
$numbers = [10, 20, 30, 40, 50];

// 2. Ajouter un élément à la fin du tableau
$numbers[] = 60;

// 3. Afficher le contenu du tableau
echo "Contenu du tableau : ";
print_r($numbers);
echo "\n";

// 4. Accéder à un élément du tableau par son index
$secondElement = $numbers[1];
echo "Deuxième élément : $secondElement \n";

// 5. Modifier un élément du tableau par son index
$numbers[3] = 45;

// 6. Compter le nombre d'éléments dans le tableau
$count = count($numbers);
echo "Nombre d'éléments dans le tableau : $count \n";

// 7. Vérifier si un élément existe dans le tableau
$searchValue = 30;
if (in_array($searchValue, $numbers)) {
    echo "$searchValue existe dans le tableau \n";
} else {
    echo "$searchValue n'existe pas dans le tableau \n";
}

// 8. Trouver l'index d'un élément dans le tableau
$searchValueIndex = array_search(40, $numbers);
echo "Index de 40 dans le tableau : $searchValueIndex \n";

// 9. Trier le tableau par ordre croissant
sort($numbers);

// 10. Afficher le contenu du tableau après le tri
echo "Tableau trié par ordre croissant : ";
print_r($numbers);
echo "\n";

// 11. Trier le tableau par ordre décroissant
rsort($numbers);

// 12. Afficher le contenu du tableau après le tri décroissant
echo "Tableau trié par ordre décroissant : ";
print_r($numbers);
echo "\n";

// 13. Extraire une partie du tableau
$slicedArray = array_slice($numbers, 1, 3);
echo "Extraction d'une partie du tableau : ";
print_r($slicedArray);
echo "\n";

// 14. Fusionner deux tableaux
$additionalNumbers = [70, 80, 90];
$mergedArray = array_merge($numbers, $additionalNumbers);
echo "Tableaux fusionnés : ";
print_r($mergedArray);
echo "\n";

// 15. Rechercher les clés du tableau
$keys = array_keys($numbers);
echo "Clés du tableau : ";
print_r($keys);
echo "\n";

// 16. Rechercher les valeurs du tableau
$values = array_values($numbers);
echo "Valeurs du tableau : ";
print_r($values);
echo "\n";

// 17. Vérifier si le tableau est vide
if (empty($numbers)) {
    echo "Le tableau est vide \n";
} else {
    echo "Le tableau n'est pas vide \n";
}

// 18. Réinitialiser l'index du tableau
$resetArray = array_values($numbers);

// 19. Supprimer un élément du tableau par son index
unset($resetArray[0]);

// 20. Afficher le contenu du tableau après la suppression
echo "Tableau après suppression : ";
print_r($resetArray);
echo "\n";
