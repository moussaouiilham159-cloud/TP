
<?php
// Les données initiales
$notes = [12, 15, 8, 17, 9, 14, 11];
$prenoms = ['Sara', 'Youssef', 'Imane', 'Omar', 'Khadija'];

 
// ETAPE 1 


// Question 1
echo "Premier élément : " . $notes[0] . PHP_EOL;
echo "Dernier élément : " . $notes[count($notes) - 1] . PHP_EOL;

// Question 2 
echo "Nombre de notes : " . count($notes) . PHP_EOL;

// Question 3 
echo "\nParcours avec FOR :" . PHP_EOL;

for ($i = 0; $i < count($notes); $i++) {
    echo "Note n°" . ($i + 1) . " : " . $notes[$i] . PHP_EOL;
}

// Parcourir les notes avec foreach
echo "\nParcours avec FOREACH :" . PHP_EOL;

foreach ($notes as $i => $note) {
    echo "Note n°" . ($i + 1) . " : " . $note . PHP_EOL;
}

// Question 4 
echo "\nListe des prénoms :" . PHP_EOL;

foreach ($prenoms as $i => $prenom) {
    echo ($i + 1) . ". " . $prenom . PHP_EOL;
}
// ETAPE 2

// Question 1
echo "\nAjouter 16 à la fin :" . PHP_EOL;

array_push($notes, 16);
print_r($notes);

$notes[] = 16;
print_r($notes);
// Question 2
echo "\nAjouter 10 au début :" . PHP_EOL;

array_unshift($notes, 10);

print_r($notes);
