<?php

use ArabicFranco\FrancoService;

if (!function_exists('arabic_to_franco')) {
    function arabic_to_franco($text) {
        return (new FrancoService())->convert($text);
    }
}
