<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($users as $user){
    $resultados .= '<tr>
                      <td>'.$user->id.'</td>
                      <td>'.$user->username.'</td>
                      <td>'.$user->passw.'</td>
                      <td>'.($user->gender == 'M' ? 'Masculino' : 'Feminino').'</td>
                      <td>'.date('d/m/Y à\s H:i:s',strtotime($user->data)).'</td>
                      <td>
                        <a href="editar.php?id='.$user->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$user->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhum usuário encontrado!
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Novo usuário</button>
    </a>
  </section>

  <section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Senha</th>
            <th>Gênero</th>
            <th>Data</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>