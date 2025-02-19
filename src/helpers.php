<?php

use huseinghasemi\Zarinpal\Zarinpal;

if (! function_exists('zarinpal')) {
    function zarinpal(): Zarinpal
    {
        return new Zarinpal();
    }
}
