<?php

class ComputerModel {
    private $computers = [
        'laptops' => 'Encuentra una gran variedad de laptops para trabajo, estudio y gaming.',
        'escritorio' => 'Las mejores computadoras de escritorio para tu hogar u oficina.',
        'mac' => 'Descubre nuestra selección de computadoras Apple MAC.',
        'windows' => 'Compra computadoras con sistema operativo Windows al mejor precio.'
    ];

    public function getComputers($type) {
        return isset($this->computers[$type]) ? $this->computers[$type] : 'Tipo de computadora no encontrado';
    }
}
?>
