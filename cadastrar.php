<?php
//DADOS PESSOAIS
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$data = $_POST['data_nasc'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
//INFORMAÇÕES MÉDICAS
$sintomas = $_POST['sintomas'];
$inicio_sintomas = $_POST['inicio_sintomas'];
$doenças_exist = $_POST['doencas_existentes'];
$medicamentos = $_POST['medicamento'];
$alergias = $_POST['alergias'];
//DADOS VITAIS
$pressao = $_POST['pressao'];
$temperatura = $_POST['temperatura'];
$freq_cardiaca = $_POST['frequencia_cardiaca'];
$saturacao = $_POST['saturacao'];
//OBSERVAÇÕES
$observacoes = $_POST['observacoes'];

$sql = "INSERT INTO pacientes(nome, idade, sexo, data_nasc, cpf, telefone, endereco, sintomas, inicio_sintomas, doencas_exist, medicamentos, 
alergias, pressao, temp_corporal, freq_cardiaca, saturacao, observacoes)VALUES('$nome', '$idade', '$sexo', '$data',
'$cpf', '$telefone', '$endereco', '$sintomas', '$inicio_sintomas', '$doencas_exist', '$medicamentos', '$alergias', 
'$pressao', '$temperatura', '$freq_cardiaca', '$saturacao', '$observacoes')";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paciente Cadastrado</title>
</head>
<body>
    <div class="container">
    <?php
        if($conn->query($sql) === TRUE){
            echo "<h2>Paciente Cadastrado com Sucesso</h2>";
            echo "<divclass='paciente'></div>";
            echo "<b>Nome: </b>" . $nome . "<br>";
            echo "<b>Idade: </b>" . $idade . "<br>";
            echo "<b>Sexo: </b>" . $sexo . "<br>";
            echo "<b>Data Nascimento: </b>" . $data . "<br>";
            echo "<b>CPF: </b>" .$cpf . "<br>";
            echo "<b>Telefone: </b>" . $telefone . "<br>";
            echo "<b>Endereço: </b>" . $endereco . "<br>";
            echo "<b>Sintomas: </b>" . $sintomas . "<br>";
            echo "<b>Início dos Sintomas: </b>" . $inicio_sintomas . "<br>";
            echo "<b>Doenças existentes: </b>" . $doencas_exist . "<br>";
            echo "<b>Medicamentos: </b>" . $medicamentos . "<br>";
            echo "<b>Alergias: </b>" . $alergias . "<br>";
            echo "<b>Pressão: </b>" . $pressao . "<br>";
            echo "<b>Temperatura: </b>" . $temperatura . "<br>";
            echo "<b>Frequência Cardíaca: </b>" . $freq_cardiaca . "<br>";
            echo "<b>Saturação O<sub>²<sub>: </b>" . $saturacao . "<br>";
            echo "<b>Observações: </b>" . $observacoes . "<br>";
        }else{
            echo "<p> Erro ao cadastrar Paciente " . $conn->error . '</p>';
        }
        $conn->close();

    ?>

    </div>
</body>
</html>

















?>
