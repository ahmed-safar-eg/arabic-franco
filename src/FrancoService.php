<?php

namespace ArabicFranco;

class FrancoService
{
    protected $map = [
        'ا' => 'a', 'ب' => 'b', 'ت' => 't', 'ث' => 'th',
        'ج' => 'g', 'ح' => '7', 'خ' => 'kh', 'د' => 'd',
        'ذ' => 'z', 'ر' => 'r', 'ز' => 'z', 'س' => 's',
        'ش' => 'sh', 'ص' => '9', 'ض' => '9\'', 'ط' => '6',
        'ظ' => '6\'', 'ع' => '3', 'غ' => 'gh', 'ف' => 'f',
        'ق' => '2', 'ك' => 'k', 'ل' => 'l', 'م' => 'm',
        'ن' => 'n', 'ه' => 'h', 'و' => 'w', 'ي' => 'y',
    ];

    public function convert($text)
    {
        return strtr($text, $this->map);
    }
}
