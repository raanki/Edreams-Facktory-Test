# Rendu - Test Technique - Edreams Facktory

Ce dépôt contient les 3 exercies PHP demandé et un site web créée en HTML/CSS/JS.<br>
#Exercices PHP<br>

Pour rappel voici le sujet :<br>
Enoncé
## Exercice 1

Pour afficher "Kiwi", j'ai fais un `echo $messyArray[0]`. Kiwi étant le premier du tableau.<br>

Pour afficher "Cerise", j'ai refais un `echo $messyArray[8]["Cerise"]`. "Cerise" se trouve au 8ème indice car la clé de l'indice précédent à été défini à 7.<br>

Pour supprimer "Prune", j'ai utilisé `unset($messyArray[8][0])`. `unset()` détruit une variable.<br>

Pour afficher le tableau, j'ai utilisé un `print_r($messyArray)`.<br>

## Exercice 2

J'ai d'abord réaliser la fonction permettant de trier et comparer s'il faut la longueur des mots :<br>

`````
function compare_words($a, $b) {
    $lenA = strlen($a);
    $lenB = strlen($b);

    if ($lenA == $lenB) {
        return strcmp($a, $b);
    }

    return $lenA - $lenB;
}
`````


<br>J'ai ensuite utilisé la fonction `usort()` qui permet de trier un tableau par rapport à une fonction, ici `compare_words`.<br>

Pour afficher le tableau, j'ai utilisé un `print_r($random_words)`.<br>

## Exercice 3

J'ai créé une classe ayant comme méthodes une fonction enlevant les Doublons :<br>

`````
class Calcul {
    public function removeDoublon($prenomArray) {
        // Utiliser array_unique pour supprimer les doublons
        $resultArray = array_unique($prenomArray);

        // Retourner le tableau sans doublons
        return $resultArray;
    }
}
`````


Pour tester, on peut d'abord crééer un instance : `$calcul = new Calcul();`. Puis initialiser le tableau : `$prenomArray = ["Alice", "Bob", "Alice", "Charlie", "Charlie", "David"];`<br>
Utiliser la méthode que l'on viens de crééer pour notre class : `$resultArray = $calcul->removeDoublon($prenomArray);`. Ensuite on affiche le résultat : `print_r($resultArray);`.<br>
# *Site Web<br>*

- Présente des fonctionnalités telles qu'un menu hamburger, une fenêtre modale et un contenu principal centré. 
- Une fenêtre modale s'affiche avec un message de remerciement et un bouton de fermeture.
- Dans sa version responsive, le site s'adapte aux appareils mobiles en modifiant la disposition des éléments.

Capture d'écran du site web

Pour accéder au site, veuillez TestWeb .
