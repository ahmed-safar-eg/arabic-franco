<?php

use ArabicFranco\FrancoService;

if (!function_exists('arabic_to_franco')) {
    function arabic_to_franco($text, $removeSpaces=true,$removeNonAlphanumeric=true,$makeItUpperCase=false,$replaceSpacesChar='-') {
        return (new FrancoService())->convert($text,$removeSpaces,$removeNonAlphanumeric,$makeItUpperCase,$replaceSpacesChar);
    }
}
