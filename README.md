# Rendu - Test Technique - Edreams Factory

Ce dépôt contient les 3 exercices PHP demandés et un site web créée en HTML/CSS/JS.<br>
# Exercices PHP<br>

## Exercice 1

<table>
  <tr>
    <td>
      <img src="Images/Exercices/Exercice1.PNG" alt="Exercice 1" style="display: block; width: 100%; height: auto;">
    </td>
    <td style="vertical-align: top;">
      <p>
        • Pour afficher "Kiwi", j'ai fais un <code>echo $messyArray[0]</code>. Kiwi étant le premier du tableau.<br>
        • Pour afficher "Cerise", j'ai refais un <code>echo $messyArray[8]["Cerise"]</code>. "Cerise" se trouve au 8ème indice car la clé de l'indice précédent à été défini à 7.<br>
        • Pour supprimer "Prune", j'ai utilisé <code>unset($messyArray[8][0])</code>. <code>unset()</code> détruit une variable.<br>
        • Pour afficher le tableau, j'ai utilisé un <code>print_r($messyArray)</code>.<br>
      </p>
    </td>
  </tr>
</table>



## Exercice 2

<table>
  <tr>
    <td>
      <img src="Images/Exercices/Exercice2.PNG" alt="Exercice 2" style="display: block; width: 100%; height: auto;">
    </td>
    <td style="vertical-align: top;">
      <p>
        J'ai d'abord réaliser la fonction permettant de trier et comparer s'il faut la longueur des mots :<br>
      </p>
<pre>
<code>
function compare_words($a, $b) {
    $lenA = strlen($a);
    $lenB = strlen($b);
    if ($lenA == $lenB) {
        return strcmp($a, $b);
    }
    return $lenA - $lenB;
}
</code>
</pre>
      <p>
• J'ai ensuite utilisé la fonction <code>usort()</code> qui permet de trier un tableau par rapport à une fonction, ici <code>compare_words</code>.<br>

• Pour afficher le tableau, j'ai utilisé un <code>print_r($random_words)</code>.<br>
      </p>
    </td>
  </tr>
</table>


## Exercice 3

J'ai créé une classe ayant comme méthodes une fonction enlevant les Doublons :<br>

<table>
  <tr>
    <td>
      <img src="Images/Exercices/Exercice3.PNG" alt="Exercice 3" style="display: block; width: 100%; height: auto;">
    </td>
    <td style="vertical-align: top;">
<pre>
<code>
class Calcul {
    public function removeDoublon($prenomArray) {
        // Utiliser array_unique pour supprimer les doublons
        $resultArray = array_unique($prenomArray);
        // Retourner le tableau sans doublons
        return $resultArray;
    }
}
</code>
</pre>
    </td>
  </tr>
</table>

• Pour tester, on peut d'abord créer un instance : <code>$calcul = new Calcul();</code>. <br>
• Puis initialiser le tableau : <code>$prenomArray = ["Alice", "Bob", "Alice", "Charlie", "Charlie", "David"];</code><br>
• Utiliser la méthode que l'on viens de créer pour notre class : <code>$resultArray = $calcul->removeDoublon($prenomArray);</code>. <br>
• Ensuite on affiche le résultat : <code>print_r($resultArray);</code>.<br>

# *Site Web<br>*

Pour accéder au site, [SiteTest](https://raanki.github.io/Edreams-Factory-Test/Site_HTML_CSS_JS/index.html)<br>

- Présente des fonctionnalités telles qu'un menu hamburger, une fenêtre modale et un contenu principal centré.<br>
- Une fenêtre modale s'affiche avec un message de remerciement et un bouton de fermeture.<br>
- Dans sa version responsive, le site s'adapte aux appareils mobiles en modifiant la disposition des éléments.<br>

Le site devait ressembler à cette image :

<p align="center">
  <img src="Images/Enoncé/inte.png" alt="site à faire">
</p>

