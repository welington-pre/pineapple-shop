<?php

function iscnpj($cnpj){

    if(empty($cnpj)) {
		return false;
	}

    $cnpj = preg_replace("/[^0-9]/", "", $cnpj);
    $cnpj = str_pad($cnpj, 14, '0', STR_PAD_LEFT);

    if (strlen($cnpj) != 14) {
		return false;
	} else if ($cnpj == '00000000000000' || 
    $cnpj == '11111111111111' || 
    $cnpj == '22222222222222' || 
    $cnpj == '33333333333333' || 
    $cnpj == '44444444444444' || 
    $cnpj == '55555555555555' || 
    $cnpj == '66666666666666' || 
    $cnpj == '77777777777777' || 
    $cnpj == '88888888888888' || 
    $cnpj == '99999999999999') {
    return false;
    } else {   
	 
		$j = 5;
		$k = 6;
		$soma1 = "";
		$soma2 = "";

		for ($i = 0; $i < 13; $i++) {

			$j = $j == 1 ? 9 : $j;
			$k = $k == 1 ? 9 : $k;

			$soma2 += ($cnpj{$i} * $k);

			if ($i < 12) {
				$soma1 += ($cnpj{$i} * $j);
			}

			$k--;
			$j--;

		}

		$digito1 = $soma1 % 11 < 2 ? 0 : 11 - $soma1 % 11;
        $digito2 = $soma2 % 11 < 2 ? 0 : 11 - $soma2 % 11;
        
        if (($cnpj{12} == $digito1) and ($cnpj{13} == $digito2)) {
            return true;
        } else {
            return false;
        }
	 
	}
}

// $cnpj = "82.622.189/0001-19";

// if (iscnpj($cnpj) == true) {
//     echo "cnpj valido";
// } else  {
//     echo "cnpj invalido";
// }




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



