<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículo Gerado</title>
    <link rel="stylesheet" href="style.css"> <!-- Reutiliza o mesmo CSS ou um específico -->
    <style>
        .curriculo {
            padding: 40px;
            line-height: 1.6;
        }
        .secao-titulo {
            border-bottom: 2px solid #333;
            padding-top: 10px;
            margin-bottom: 10px;
        }
        .item-lista {
            margin-bottom: 10px;
           
        }

        h1,h2{
            font-weight: normal;
            font-size: 19px;
            color: #836FFF;
            font-weight: bold;
            font-size: 25px;
        }

        button{
            border-radius: 5px;
           background-color: #0000CD;
           color: white;
           font-size: 20px;
        }




    </style>
</head>
<body>
    <div class="container curriculo">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $telefone = htmlspecialchars($_POST['telefone']);
            $objetivo = htmlspecialchars($_POST['objetivo']);
            $cursos = htmlspecialchars($_POST['cursos']);
            $instituicoes = htmlspecialchars($_POST['instituicoes']);
            $periodos = htmlspecialchars($_POST['periodos']);
            $cargos = htmlspecialchars($_POST['cargos']);
            $empresas = htmlspecialchars($_POST['empresas']);
            $periodoss = htmlspecialchars($_POST['periodoss']);

            echo "<h1>$nome</h1>";
            echo "<p>E-mail: $email | Telefone: $telefone</p>";
        
            echo "<h2 class='secao-titulo'>Objetivo Profissional</h2>";
            echo "<p>$objetivo</p>";

            echo "<h2 class='secao-titulo'>Formação Acadêmica</h2>";
            echo "<p><strong>$cursos</strong> em  $instituicoes ($periodos)</p>";

          // Formação Acadêmica
            if (!empty($_POST['formacao_curso'])) {
                
                foreach ($_POST['formacao_curso'] as $key => $curso) {
                    $instituicao = htmlspecialchars($_POST['formacao_instituicao'][$key]);
                    $ano = htmlspecialchars($_POST['formacao_ano'][$key]);
                    echo "<div class='item-lista'>";
                    echo "<strong>" . htmlspecialchars($curso) . "</strong> em " . $instituicao . " ($ano)";
                    echo "</div>";

                }
            }

           

              echo "<h2 class='secao-titulo'>Experiência Profissional</h2>";
              echo "<p><strong>$cargos</strong> em  $empresas ($periodoss)</p>";

                  // Experiência Profissional

            if (!empty($_POST['experiencia_cargo'])) {
              
                foreach ($_POST['experiencia_cargo'] as $key => $cargo) {
                    $empresa = htmlspecialchars($_POST['experiencia_empresa'][$key]);
                    $datas = htmlspecialchars($_POST['experiencia_datas'][$key]);
                    $descricao = htmlspecialchars($_POST['experiencia_descricao'][$key]);
                    echo "<div class='item-lista'>";
                    echo "<strong>" . htmlspecialchars($cargo) . "</strong> na " . $empresa . " ($datas)<br>";
                    echo "<em>Descrição:</em> $descricao";
                    echo "</div>";
                }
            }
        } else {
            echo "<p>Nenhum dado recebido.</p>";
        }
        ?>
    </div>
    <div class="container" style="margin-top: 20px;">
        <!-- Um botão para imprimir a página, que pode servir como "gerar PDF" no navegador -->
        <button onclick="window.print()">     Imprimir / Gerar PDF    </button>
    </div>
</body>
</html>
