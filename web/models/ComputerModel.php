<?php

class ComputerModel {
    private $computers = [
        'laptops' => 'Encuentra una gran variedad de laptops para trabajo, estudio y gaming.',
        'escritorio' => 'Las mejores computadoras de escritorio para tu hogar u oficina.',
        
    ];

    public function getComputers($type) {
        return isset($this->computers[$type]) ? $this->computers[$type] : 'Tipo de computadora no encontrado';
    }
}
?>
