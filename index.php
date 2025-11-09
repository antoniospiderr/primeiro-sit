<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

     <h1>Gerador de Currículo</h1><br>
    <div class="container">

        <form action="generate.php" method="POST">
            <!-- Seção de Dados Pessoais -->
            <section>
                <h2>Dados Pessoais</h2><hr>
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required>
                
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone">
       
                <label for="objetivo">Objetivo Profissional:</label>
                <textarea id="objetivo" name="objetivo" rows="4"></textarea>
            </section>       
     
            <!-- Seção de Formação Acadêmica (adicionada via JavaScript) -->
            <section>
                <br>
                 <h2>Formação Acadêmica</h2>
                   <hr><br>
            <fieldset>
             
                <div id="formacao-container"><br>

                <label for="cursos">Curso</label>
                <input type="text" autocomplete="off" id="cursos" name="cursos" required>
                
                <label for="instituicoes">Instituição</label>
                <input type="text" id="instituicoes" name="instituicoes" required>
                
                <label for="periodos">Periodo/Ano</label>
                <input type="text" id="periodos" name="periodos">
           
                    <!-- Campos de formação serão adicionados aqui -->
                </div>
                 </fieldset>
        
                <button class="formacao" type="button" onclick="adicionarFormacao()">  +  Adicionar</button>
            </section>
         

            <!-- Seção de Experiência Profissional (adicionada via JavaScript) -->
            <section>
                <h2>Experiência Profissional</h2>
                  <hr><br>
            <fieldset>
                <div id="experiencia-container"><br>
                    <!-- Campos de experiência serão adicionados aqui -->
                    <label for="cargos">Cargo:</label>
                    <input type="text" id="cargos" name="cargos">

                    <label for="empresas">Empresa:</label>
                    <input type="text" id="empresas" name="empresas">

                    <label for="periodoss">Periodo/Ano:</label>
                    <input type="text" id="periodoss" name="periodoss">
                </div>
            </fieldset>

                <button class="experiencia" type="button" onclick="adicionarExperiencia()">  +  Adicionar</button>
            </section>

            <button class="imprimir" type="submit">Gerar Currículo</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
