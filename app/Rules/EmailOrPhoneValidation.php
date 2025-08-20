<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class EmailOrPhoneValidation implements ValidationRule
{
    
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    // type: Email or Phone number based on user input
    public string $type;

    public function validate(string $attribute, mixed $value, Closure $fail):void
    {
        // Validate email or phone number
        if(filter_var($value, FILTER_VALIDATE_EMAIL)){
            $this->type = 'email';
            return;
        }

        if(preg_match('/^(03\d{9}|3\d{9})$/', $value)){
            $this->type = 'phone_number';
            return;
        }

        $fail("The {$attribute} must be a valid email address or phone number");

    }
}
