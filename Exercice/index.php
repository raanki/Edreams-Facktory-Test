<?php
                                                                        /*** Exercice 1 ***/

$messyArray = [
    "Marguerite" => "Orange",
    "Kiwi",
    7 => "Pomme",
    ["Prune", "Cerise" => "Cerise"]
];

// À partir de messyArray, afficher "Kiwi"
echo $messyArray[0] . "\n\n";

// À partir de messyArray, afficher "Cerise"
echo $messyArray[8]["Cerise"] . "\n\n";

// À partir de messyArray, supprimer "Prune"
unset($messyArray[8][0]);

// Afficher le tableau après suppression de "Prune"
print_r($messyArray);


                                                                        /*** Exercice 2 (avec BONUS) ***/


$random_words = ["ape", "apple", "zoo", "pie", "elephant", "banana", "picnic", "eye"];

// Créer une fonction pour comparer la longueur des mots et les trier par ordre alphabétique
function compare_words($a, $b) {
    $lenA = strlen($a);
    $lenB = strlen($b);

    if ($lenA == $lenB) {
        return strcmp($a, $b);
    }

    return $lenA - $lenB;
}

// Trier le tableau avec la fonction de comparaison
usort($random_words, 'compare_words');

// Afficher le tableau trié
print_r($random_words);


                                                                        /*** Exercice 3 ***/


class Calcul {
    public function removeDoublon($prenomArray) {
        // Utiliser array_unique pour supprimer les doublons
        $resultArray = array_unique($prenomArray);

        // Retourner le tableau sans doublons
        return $resultArray;
    }
}

// Exemple d'utilisation de la classe Calcul

// Créer une instance de la classe Calcul
$calcul = new Calcul();

// Déclarer un tableau de prénoms avec des doublons
$prenomArray = ["Alice", "Bob", "Alice", "Charlie", "Charlie", "David"];

// Utiliser la méthode removeDoublon pour supprimer les doublons
$resultArray = $calcul->removeDoublon($prenomArray);

// Afficher le tableau sans doublons
print_r($resultArray);

?>
