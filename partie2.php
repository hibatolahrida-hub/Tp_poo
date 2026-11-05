<?php

class Voiture {
    public function __construct(
        public string $couleur = "Blanche",
        public int $vitesse = 0
    ) {
        echo "Voiture créée." . PHP_EOL;
    }

    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }

    public function __destruct() {
        echo "Voiture {$this->couleur} détruite." . PHP_EOL;
    }
}
echo "<pre>";
$v1 = new Voiture();
$v2 = new Voiture("Rouge", 50);
$v1->afficher();
$v2->afficher();
unset($v1); 
echo "</pre>";

class Personne {
    public function __construct(
        public string $nom = "",
        public string $prenom = ""
    ) {
        echo "Création " . __CLASS__ . PHP_EOL;
    }
}
echo "<pre>";
$p1 = new Personne();
$p2 = new Personne("Hachimi", "Sara");
echo $p2->prenom . " " . $p2->nom . PHP_EOL;
echo "</pre>";
// v2 et les autres objets encore référencés seront détruits à la fin du script.
?> 