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
}