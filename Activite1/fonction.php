<?php
declare(strict_types=1);

// Addition 
function additionner(float $a, float $b): float
{
    return $a + $b;
}

// Soustraction 
function soustraire(float $a, float $b): float
{
    return $a - $b;
}

// Multiplication 
function multiplier(float $a, float $b): float
{
    return $a * $b;
}

// Division 
function diviser(float $a, float $b): float
{
    if ($b == 0) {
        throw new InvalidArgumentException("Division par zéro impossible");
    }

    return $a / $b;
}
// Vérifier si un nombre est pair
function estPair(int $n): bool
{
    return $n % 2 === 0;
}
// Vérifier si un nombre est positif
function estPositif(float $n): bool
{
    return $n >= 0;
}
// Trouver le maximum de trois nombres sans utiliser max()
function maximum(float $a, float $b, float $c): float
{
    $max = $a;

    if ($b > $max) {
        $max = $b;
    }

    if ($c > $max) {
        $max = $c;
    }

    return $max;
}
// Trouver le maximum avec la fonction prédéfinie max()
function maximumAvecMax(float $a, float $b, float $c): float
{
    return max($a, $b, $c);
}
// Vérifier si un nombre est premier
function estPremier(int $n): bool
{
    // Les nombres inférieurs à 2 ne sont pas premiers
    if ($n < 2) {
        return false;
    }

    // Tester les diviseurs de 2 jusqu'à la racine carrée de n
    for ($i = 2; $i <= floor(sqrt($n)); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }

    return true;
}
// Calculer le prix TTC
function calculerTTC(float $prixHT, float $tva): float
{
    return $prixHT + ($prixHT * $tva / 100);
}
// Calculer le montant de la remise
function calculerRemise(float $prix, float $tauxRemise): float
{
    return $prix * $tauxRemise / 100;
}
// Calculer le montant final de la facture
function calculerFacture(float $prixHT, float $tauxRemise, float $tva): float
{
    // Calculer le montant de la remise
    $remise = calculerRemise($prixHT, $tauxRemise);

    // Soustraire la remise du prix HT
    $prixApresRemise = $prixHT - $remise;

    // Calculer le prix TTC
    return calculerTTC($prixApresRemise, $tva);
}  // Calculer la moyenne d'un nombre variable de notes
function moyenne(float ...$notes): float
{
    if (count($notes) == 0) {
        return 0;
    }

    return array_sum($notes) / count($notes);
}

// Calculer l'aire d'un cercle
function aireCercle(float $rayon): float
{
    return round(M_PI * $rayon ** 2, 2);
}

// Calculer le périmètre d'un cercle
function perimetreCercle(float $rayon): float
{
    return round(2 * M_PI * $rayon, 2);
}

// Convertir Celsius en Fahrenheit
function celsiusVersFahrenheit(float $c): float
{
    return $c * 9 / 5 + 32;
}

// Convertir Fahrenheit en Celsius
function fahrenheitVersCelsius(float $f): float
{
    return ($f - 32) * 5 / 9;
}

// Convertir une devise avec un taux de conversion
function convertirDevise(float $montant, float $taux): float
{
    return $montant * $taux;
}


// ======================================
// ETAPE 5 : Fonctions à boucle
// ======================================

// Calculer la factorielle d'un nombre
function factorielle(int $n): int
{
    if ($n < 0) {
        throw new InvalidArgumentException("Nombre négatif impossible");
    }

    $resultat = 1;

    for ($i = 1; $i <= $n; $i++) {
        $resultat *= $i;
    }

    return $resultat;
}

// Générer les n premiers termes de Fibonacci
function fibonacci(int $n): array
{
    $resultat = [];

    $a = 0;
    $b = 1;

    for ($i = 0; $i < $n; $i++) {
        $resultat[] = $a;

        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

    return $resultat;
}

// Calculer le PGCD de deux nombres avec l'algorithme d'Euclide
function pgcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    return abs($a);
}

// Calculer la puissance d'un nombre avec une boucle
function puissance(float $x, int $n): float
{
    $resultat = 1;

    for ($i = 1; $i <= abs($n); $i++) {
        $resultat *= $x;
    }

    if ($n < 0) {
        return 1 / $resultat;
    }

    return $resultat;
}

// Calculer la puissance d'un nombre avec la récursivité
function puissanceRecursive(float $x, int $n): float
{
    if ($n == 0) {
        return 1;
    }

    if ($n < 0) {
        return 1 / puissanceRecursive($x, -$n);
    }

    return $x * puissanceRecursive($x, $n - 1);
}