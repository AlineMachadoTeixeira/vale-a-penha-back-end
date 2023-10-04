<?php 

$dataNascimento = "07-10-2023#>";

// Aplicar FILTER_SANITIZE_SPECIAL_CHARS na variável
$dataNascimento = filter_var($dataNascimento, FILTER_SANITIZE_SPECIAL_CHARS);



if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $dataNascimento)) {
    // A data de nascimento está no formato correto
    echo "Data de nascimento válida: $dataNascimento";
} else {
    // A data de nascimento não está no formato correto
    echo "Data de nascimento inválida: $dataNascimento";
}
echo $dataNascimento;
// var_dump($dataNascimento);




?>