<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de entradas e saídas</title>
    <style>
      @vite([resources/css/cadastro.css]);
    </style>
    
    
</head>

<body>
<div class="container">
  <h2>Gerar crachá</h2>
  <div class="input-group">
    <label for="nome">Nome:</label>
    <input type="text" id="nome">
  </div>
  <div class="input-group">
    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone">
  </div>
  <div class="input-group">
    <label for="apartamento">Apartamento:</label>
    <input type="text" id="apartamento">
  </div>
  <div class="input-group">
    <label for="bloco">Bloco:</label>
    <input type="text" id="bloco">
  </div>
  
  <div class="radio-group">
    <label>Sexo:</label>
    <label><input type="radio" name="sexo" value="feminino"> Feminino</label>
    <label><input type="radio" name="sexo" value="masculino"> Masculino</label>
    <label><input type="radio" name="sexo" value="outro"> Outro</label>
  </div>

  <div class="radio-group">
    <label>Função:</label>
    <label><input type="radio" name="funcao" value="funcionario"> Funcionário</label>
    <label><input type="radio" name="funcao" value="morador"> Morador</label>
    <label><input type="radio" name="funcao" value="visitante"> Visitante</label>
  </div>
  <div class="button-group">
    <button type="button">Editar</button>
    <button type="button">Gerar crachá</button>
  </div>

</div>
</body>
</html>