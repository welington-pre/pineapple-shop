<?php

function iscpf ($numCPF){

    if(empty($numCPF)) {
		return false;
	}

    $numCPF = preg_replace("/[^0-9]/", "", $numCPF);
    $numCPF = str_pad($numCPF, 11, '0', STR_PAD_LEFT);
    $digitoUm = 0;
    $digitoDois = 0;

    if (strlen($numCPF) != 11) {
		return false;
	} else if ($numCPF == '00000000000' || 
    $numCPF == '11111111111' || 
    $numCPF == '22222222222' || 
    $numCPF == '33333333333' || 
    $numCPF == '44444444444' || 
    $numCPF == '55555555555' || 
    $numCPF == '66666666666' || 
    $numCPF == '77777777777' || 
    $numCPF == '88888888888' || 
    $numCPF == '99999999999') {
        return false;
    } else {   
    

        for ($i=0, $x=10; $i <= 8; $i++, $x--) { 
            $digitoUm += $numCPF[$i] * $x;
        }

        for ($i=0, $x=11; $i <= 9; $i++, $x--) { 
            if (str_repeat($i, 11) == $numCPF) {
                return false;
            }
            $digitoDois += $numCPF[$i] * $x;
        }

        $calculoUm = (($digitoUm %11) < 2) ? 0 : 11- ($digitoUm%11);
        $calculoDois = (($digitoDois %11) < 2) ? 0 : 11- ($digitoDois%11);

        if ($calculoUm <> $numCPF[9] || $calculoDois <> $numCPF[10]) {
            return false;
        }
        return true;
    }
}

// $cpf = "111.444.777-35";


// if (iscpf($cpf) == true) {
//     echo ('cpf valido');
// } else {
//     echo ('cpf invalido');
// }



