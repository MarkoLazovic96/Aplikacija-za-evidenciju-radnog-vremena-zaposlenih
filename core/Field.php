<?php
namespace App\Core;

final class Field {
    private $pattern;
    private $editable;
    
    public function __construct(string $pattern, bool $editable) {
        $this->pattern = $pattern;
        $this->editable = $editable;
    }

    public function isValid(string $value){
        return preg_match($this->pattern, $value);
    }

    public function isEditable() {
        return $this->editable;
    }

    public static function editableInteger(int $length): Field {
        return new Field('|^\-?[1-9][0-9]{0,'.($length -1).'}$|', true);
    }

    public static function readonlyInteger(int $length): Field {
        return new Field('|^\-?[1-9][0-9]{0,'.($length -1).'}$|', false);
    }

    public static function editableString(int $length): Field {
        return new Field('|^.{0,'. $length . '}$|', true);
    }

    public static function readonlyString(int $length): Field {
        return new Field('|^.{0,'. $length . '}$|', false);
    }
    public static function editableDateTime(): Field {
        return new Field('|^[0-9]{4}\-[0-9]{2}\-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}$|', true);
    }

    public static function readonlyDateTime(): Field {
        return new Field('|^[0-9]{4}\-[0-9]{2}\-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}$|', false);
    }
    public static function editableDate(): Field {
        return new Field('|^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$|', true);
    }

    public static function readonlyDate(): Field {
        return new Field('|^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$|', false);
    }
    public static function editableEmail(): Field {
        return new Field('|^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$|', true);
    }

    public static function readonlyEmail(): Field {
        return new Field('|^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$|', false);
    }
}