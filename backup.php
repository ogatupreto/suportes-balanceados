<?php

/**
 * Escreva uma função que receba uma string de colchetes como entrada e determine
 * se a ordem dos parênteses é válido. Um colchete é considerado qualquer um dos 
 * seguintes caracteres: (, ), {, }, [, ou ]. 
 */
function verificarString ($string)  {
    $validacao = [
        'p'     => ['(', ')'],
        'c'     => ['[', ']'],
        'c2'    => ['{', '}']
    ];
    $tratamento = [
        'p'     => ['', ''],
        'c'     => ['', ''],
        'c2'    => ['', '']
    ];
    for ($i = 0; $i < count($string); $i++) {
        if     ($string[$i] == $validacao['p'][0])  {$tratamento['p'][0]    = $string[$i];} 
        elseif ($string[$i] == $validacao['c'][0])  {$tratamento['c'][0]    = $string[$i];} 
        elseif ($string[$i] == $validacao['c2'][0]) {$tratamento['c2'][0]   = $string[$i];}
        elseif ($string[$i] == $validacao['p'][1])  {$tratamento['p'][1]    = $string[$i];} 
        elseif ($string[$i] == $validacao['c'][1])  {$tratamento['c'][1]    = $string[$i];} 
        elseif ($string[$i] == $validacao['c2'][1]) {$tratamento['c2'][1]   = $string[$i];};
    };
    if ($validacao['p'] == $tratamento['p']) {
        print 'CONFERE!';
    } elseif($validacao['c'] == $tratamento['c']){
        print 'CONFERE!';
    } elseif($validacao['c2'] == $tratamento['c2']){
        print 'CONFERE!';
    }
    ;
};

$string = ['(', ']', '[', ')', '{', '}'];

verificarString($string);

?>