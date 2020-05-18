<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Usuários</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Data</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include('../config/database.php');
                    $sql = "SELECT * FROM usuario";
                    $consulta = $pdo->prepare($sql);
                    $consulta->execute();

                    $dados = $consulta->fetchAll(PDO::FETCH_OBJ);

                    foreach($dados as $dado) {

                  ?>
                    <tr>
                      <td><?= $dado->id ?></td>
                      <td><?= $dado->nome?></td>
                      <td><?= $dado->email?></td>
                      <td><?= $dado->data?></td>
                      <td><a class="btn btn-secondary" href="#">DELETAR</a>  <a class="btn btn-info" href="#">ATUALIZAR</a> </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
</div>
      </div>
</div>

</div>