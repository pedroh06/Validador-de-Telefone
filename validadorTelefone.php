<?php
echo "Digite o seu número de telefone(padrão (00) 90000 - 0000): ";
$entrada = fgets(STDIN);
// $telefones =  ['(24) 99999 - 9999', 'asdf (21) 9E4344 - 9999', '(91) 98830 - 9941 asdf', '(91) 99917 - 0670'];

$telefoneValido = preg_match('/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/', $entrada);

if ($telefoneValido) {
    echo 'Telefone Válido' . PHP_EOL;
} else {
    echo 'Telefone inválido' . PHP_EOL;
}
