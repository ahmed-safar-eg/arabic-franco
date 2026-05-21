<?php

namespace ArabicFranco;

class FrancoService
{
    protected $map = [
        'ا' => 'a', 
        'أ' => 'a',
        'آ' => 'a',
        'إ' => 'a',
        'ب' => 'b', 
        'ت' => 't', 
        'ث' => 'th',
        'ج' => 'g', 
        'ح' => '7', 
        'خ' => 'kh', 
        'د' => 'd',
        'ذ' => 'z', 
        'ر' => 'r', 
        'ز' => 'z', 
        'س' => 's',
        'ش' => 'sh', 
        'ص' => '9', 
        'ض' => '9\'', 
        'ط' => '6',
        'ظ' => '6\'', 
        'ع' => '3', 
        'غ' => 'gh', 
        'ف' => 'f',
        'ق' => '2', 
        'ك' => 'k', 
        'ل' => 'l', 
        'م' => 'm',
        'ن' => 'n', 
        'ه' => 'h', 
        'و' => 'w', 
        'ي' => 'y',
        'ة' => 't',
    ];

    public function convert($text,$removeSpaces=true,$removeNonAlphanumeric=true,$makeItUpperCase=false)
    {
        $francoText= strtr($text, $this->map);
        if($removeNonAlphanumeric){
            $francoText = preg_replace('/[^a-zA-Z0-9 \-]/', '', $francoText);
        }
        if($removeSpaces){
            $francoText = preg_replace('/\s+/', ' ', $francoText);
            $francoText = trim($francoText);
        }
        if($makeItUpperCase){
            $francoText = strtoupper($francoText);
        }else{
            $francoText = strtolower($francoText);
        }
        return $francoText;
    }
}
