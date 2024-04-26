<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar</title>
  @vite(['resources/css/editar.css']);
</head>
<body>

  <div class="header">
    <!-- vazio mm -->
  </div>

  <div class="container">
    <h1>Adicionar Função</h1>
    <form>
      <label for="name">Nome:</label>
      <input type="text" id="name" name="name" value="Morador">
      
      <label for="description">Descrição da Função:</label>
      <textarea id="description" name="description" rows="4">Morador, reside no condomínio</textarea>
      
      <a href="/CRUDfunção/CRUDfunção.html" class="btn-save">Salvar e Sair</a>
      <a href="#" class="btn-discard">Descartar Alterações</a>
    </form>
  </div>

</body>
</html>
