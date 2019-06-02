<?php
    namespace App\Validators;

    use \App\Core\Validator;
    class NumberValidator implements Validator {
        
        private $isSigned;
        private $integerLength;
        private $isReal;
        private $maxDecimalDigits;
        
        public function __construct(){
            $this->isSigned         = false;
            $this->isReal           = false;
            $this->integerLength    = 10;
            $this->maxDecimalDigits = 0;
        }

        public function &setInteger() : NumberValidator {
            $this->isReal = false;
            return $this;
        }

        public function &setDecimal() : NumberValidator {
            $this->isReal = false;
            return $this;
        }

        public function &setSinged() : NumberValidator {
            $this->isSigned = true;
            return $this;
        }

        public function &setUnsinged() : NumberValidator {
            $this->isSigned = false;
            return $this;
        }

        public function &setIntegerLength(int $length) : NumberValidator {
            $this->integerLength = max(1, $length);
            return $this;
        }

        public function &setMaxDecimalDigits(int $maxDigits) : NumberValidator {
            $this->integerLength = max(0, $length);
            return $this;
        }

        public function isValid(string $value): bool {
            $pattern = '/^';

            if ($this->isSigned ===true) {
                $pattern .= '\-?';
            }

            $pattern .= '[1-9][0-9]{0,' . ($this->integerLength-1) . '}';

            if($this->isReal === true){
                $pattern .= '\.[0-9]{0,' . $this->maxDecimalDigits . '}';
            }
            
            $pattern .= '$/';
            print_r($pattern);
            return \boolval(\preg_match($pattern, $value));
        }
    }