<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Abre ou cria o arquivo para escrita
    $file = fopen("respostas.txt", "a");

    // Itera sobre os campos do formulário
    foreach ($_POST as $key => $value) {
        // Escreve no arquivo no formato "Campo: Valor"
        fwrite($file, "$key: $value\n");
    }

    // Adiciona uma quebra de linha para separar as respostas de diferentes usuários
    fwrite($file, "\n");

    // Fecha o arquivo
    fclose($file);

    // Redireciona de volta para o formulário
    header("Location: form.html");
    exit;
} else {
    // Se o formulário não foi enviado corretamente, redireciona de volta para o formulário
    header("Location: form.html");
    exit;
}
?>
