<?php
class FormHandler {
    private $inputvalue;

    public function __construct($input) {
        $this -> inputvalue = htmlspecialchars($input);
    }

    public function getInputValue() {
        return $this -> inputvalue;
    }
}
