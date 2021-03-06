<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class DateFormatRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $formats = collect(
            ['Hours', 'Minutes', 'Seconds', 'Years']
        ) ;
        $format = Str::ucfirst($value);
        return !($formats->contains($format)) ? false : true ;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Format you are trying to use is incorrect';
    }
}
