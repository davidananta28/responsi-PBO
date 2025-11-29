<?php
abstract class Pokemon
{
    protected $name;
    protected $type;
    protected $level;
    protected $hp;

    public function __construct($name, $type, $level, $hp)
    {
        $this->name = $name;
        $this->type = $type;
        $this->level = $level;
        $this->hp = $hp;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getLevel()
    {
        return $this->level;
    }
    public function getHP()
    {
        return $this->hp;
    }

    abstract public function specialMove();

    public function train($intensity)
    {
        $this->level += $intensity;
        $this->hp += ($intensity * 10);
    }
}

class Wartortle extends Pokemon
{

    public function __construct()
    {
        parent::__construct("Wartortle", "Water", 1, 59);
    }

    public function specialMove()
    {
        return "Aqua Jet! (Serangan tipe air yang diluncurkan dengan cepat seperti semburan gelembung, yang kadang dapat menurunkan kecepatan lawan.)";
    }

    public function train($intensity)
    {
        parent::train($intensity);
        // Bonus khusus tipe Water: Tambahan HP ekstra
        $this->hp += 5;
    }
}

// --- Inisialisasi Objek dalam Session ---
if (!isset($_SESSION['myPokemon'])) {
    $_SESSION['myPokemon'] = serialize(new Wartortle());
    $_SESSION['history'] = [];
}
