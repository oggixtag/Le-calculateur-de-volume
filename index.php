<?php 

/**
 * le programme demande à l'utilisateur un forme geometrique à calculer : 1 cylindre;2cube;..
 * sur la base de la forme saisi le programme demande à l'utilisateur la variabile liée à la forme geometrique.
 * 
 * pour le test comparaison résultat : https://www.omnicalculator.com/fr/mathematiques/calculateur-volume
 * 
 * Calcul du volume d'ingrédients de formes simples:
 *  Cylindre: Volume = π * (rayon²) * hauteur
 *  Cube: Volume = longueur * largeur * hauteur
 *  Sphère: Volume = (4/3) * π * (rayon³) 
 */

$pi = 3.14;
$volumeTexte = "volume";
$forme = "";
$volumeCalcul = "";
$cmAl = "";
$cm = "cm";
$cm3 = $cm . '³';

// le programme demande à l'utilisateur un forme geometrique à calculer : 1 cylindre;2cube;..
$formeGeometrique = (int)readline('inserez la forme geometrique (1:cylindre, 2:cube, 3:sphère): ');

switch ($formeGeometrique) {
    case 1:
        $forme = "cylindre";
        $volumeTexte = $volumeTexte . ' ' . $forme . ': ';
        $inputRayon  = (int)readline("inserez rayon ($cm): ");
        $inputHauter  = (int)readline("inserez hauter($cm): ");
        $volumeCalcul = ($pi * ($inputRayon * $inputRayon) * $inputHauter);
        $cmAl = '= ' . ($volumeCalcul / 10) . ' cl' . ' = ' . ($volumeCalcul / 100) . ' dl' . ' = ' . ($volumeCalcul / 1000) . ' l';
        echo $volumeTexte . $volumeCalcul . ' ' . $cm3 . ' ' . $cmAl;
        break;
    case 2:
        $forme = "cube";
        $volumeTexte = $volumeTexte . ' ' . $forme . ': ';
        $inputCote  = (int)readline("inserez côté ($cm): ");
        $volumeCalcul = ($inputCote * $inputCote * $inputCote);
        $cmAl = '= ' . ($volumeCalcul / 10) . ' cl' . ' = ' . ($volumeCalcul / 100) . ' dl' . ' = ' . ($volumeCalcul / 1000) . ' l';
        echo $volumeTexte . $volumeCalcul . ' ' . $cm3 . ' ' . $cmAl;
        break;
    case 3:
        $forme = "sphère";
        $volumeTexte = $volumeTexte . ' ' . $forme . ': ';
        $inputRayon  = (int)readline("inserez rayon ($cm): ");
        $volumeCalcul = ((4 / 3) * $pi * ($inputRayon * $inputRayon * $inputRayon));
        echo $volumeTexte . $volumeCalcul . ' ' . $cm3 . ' ' . $cmAl;
        break;
    default:
        echo 'Commande inconnue';
}

echo "\nend script";
