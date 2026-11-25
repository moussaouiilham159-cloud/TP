<?php
declare(strict_types=1);
// Importer les fonctions
require_once __DIR__ . "/fonction.php";

// Tester l'addition
echo "12 + 8 = " . additionner(12, 8) . PHP_EOL;

// Tester la soustraction
echo "12 - 8 = " . soustraire(12, 8) . PHP_EOL;

// Tester la multiplication
echo "12 * 8 = " . multiplier(12, 8) . PHP_EOL;

// Tester la division
echo "12 / 8 = " . diviser(12, 8) . PHP_EOL;

// Tester la division par zéro
try {
    echo diviser(10, 0);
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage() . PHP_EOL;
}
// Tester estPair
echo "8 est pair : ";
var_dump(estPair(8));

echo "7 est pair : ";
var_dump(estPair(7));
// Tester estPositif
echo "5 est positif : ";
var_dump(estPositif(5));

echo "-3 est positif : ";
var_dump(estPositif(-3));
// Tester maximum
echo "Le maximum est : ";
var_dump(maximum(10, 25, 15));
// Comparer les deux méthodes
echo "Maximum sans max() : ";
var_dump(maximum(10, 25, 15));

echo "Maximum avec max() : ";
var_dump(maximumAvecMax(10, 25, 15));
// Tester estPremier
echo "7 est premier : ";
var_dump(estPremier(7));

echo "8 est premier : ";
var_dump(estPremier(8));

echo "1 est premier : ";
var_dump(estPremier(1));
// Tester calculerTTC
echo "Prix TTC : ";
var_dump(calculerTTC(100, 20));
// Tester calculerRemise
echo "Montant de la remise : ";
var_dump(calculerRemise(200, 10));
// Tester calculerFacture
echo "Montant final de la facture : ";
var_dump(calculerFacture(200, 10, 20));
echo PHP_EOL . "========== ETAPE 4 ==========" . PHP_EOL;

// Calculer la moyenne de plusieurs notes
echo "Moyenne : " . moyenne(12, 15, 18) . PHP_EOL;

// Calculer l'aire d'un cercle
echo "Aire cercle : " . aireCercle(5) . PHP_EOL;

// Calculer le périmètre d'un cercle
echo "Perimetre cercle : " . perimetreCercle(5) . PHP_EOL;

// Convertir Celsius en Fahrenheit
echo "Celsius vers Fahrenheit : " . celsiusVersFahrenheit(25) . PHP_EOL;

// Convertir Fahrenheit en Celsius
echo "Fahrenheit vers Celsius : " . fahrenheitVersCelsius(77) . PHP_EOL;

// Convertir une devise
echo "Conversion devise : " . convertirDevise(100, 0.092) . PHP_EOL;


// ======================================
// ETAPE 5 : Fonctions à boucle
// ======================================

echo PHP_EOL . "========== ETAPE 5 ==========" . PHP_EOL;

// Calculer la factorielle d'un nombre
echo "Factorielle : " . factorielle(5) . PHP_EOL;

// Générer les termes de Fibonacci
echo "Fibonacci : " . implode(", ", fibonacci(8)) . PHP_EOL;

// Calculer le PGCD de deux nombres
echo "PGCD : " . pgcd(48, 18) . PHP_EOL;

// Calculer la puissance avec une boucle
echo "Puissance boucle : " . puissance(2, 3) . PHP_EOL;

// Calculer la puissance avec la récursivité
echo "Puissance recursive : " . puissanceRecursive(2, 3) . PHP_EOL;
