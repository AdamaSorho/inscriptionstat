<?php

if (!function_exists('HelpersVerifPaiement')) {
    function HelpersVerifPaiement($value)
    {
        return DB::table('paiements')->where('code_paiement', $value)->first();
    }
}

// if (!function_exists('HelpersGetNombreRess')) {
//     function HelpersGetNombreRess($value)
//     {
//       $ress = DB::table('discipline_ressources')->where('slug_discipline', 'LIKE', '%' .$value. '%')->get();
//       return $ress->count();
//     }
// }
