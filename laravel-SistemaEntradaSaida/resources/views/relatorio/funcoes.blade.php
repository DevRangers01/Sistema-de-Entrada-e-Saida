<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Funções</title>
  @vite(['resources/css/funcoes.css']);
</head>
<body>

  <div class="header">
    <!-- vazio mm -->
  </div>

  <div class="container">
    <h1>Lista de Funções</h1>
    <a class="btn-link" href="/CRUDadicionar/adicionar.html"><button class="btn-add">Adicionar função</button></a>
    <ul class="function-list">
      <li class="function-item">
        Morador
        <div class="buttons">
          <a href="/CRUDeditar/CRUDeditar.html" class="btn-link"> <button class="btn-edit">Editar</button>
          <button class="btn-delete">Excluir</button>
        </div>
      </li>
      <li class="function-item">
        Visitante
        <div class="buttons">
          <button class="btn-edit">Editar</button>
          <button class="btn-delete">Excluir</button>
        </div>
      </li>
      <li class="function-item">
        Jardineiro
        <div class="buttons">
          <button class="btn-edit">Editar</button>
          <button class="btn-delete">Excluir</button>
        </div>
      </li>
      <li class="function-item">
        Piscineiro
        <div class="buttons">
          <button class="btn-edit">Editar</button>
          <button class="btn-delete">Excluir</button>
        </div>
      </li>
      <li class="function-item">
        Faxineiro
        <div class="buttons">
          <button class="btn-edit">Editar</button>
          <button class="btn-delete">Excluir</button>
        </div>
      </li>
      <li class="function-item">
        Porteiro
        <div class="buttons">
          <button class="btn-edit">Editar</button>
          <button class="btn-delete">Excluir</button>
        </div>
      </li>
      <li class="function-item">
        Detetizador
        <div class="buttons">
          <button class="btn-edit">Editar</button>
          <button class="btn-delete">Excluir</button>
        </div>
      </li>
    </ul>
    <a class="btn-link" href="/EntradaSaida/index.html"><button class="btn-back">Voltar ao Início</button></a>
  </div>

</body>
</html>
