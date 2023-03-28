<main>

  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>

  <h2 class="mt-3"><?=TITLE?></h2>

  <form method="post">

    <div class="form-group">
      <label>Nome de usuário</label>
      <input type="text" class="form-control" name="username">
    </div>

    <div class="form-group">
      <label>Senha</label>
      <input type="password" class="form-control" name="passw">
    </div>

    <div class="form-group">
      <label>Gênero</label>

      <div>
          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="gender" value="M" checked> Masculino
            </label>
          </div>

          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="gender" value="F"> Feminino
            </label>
          </div>
      </div>

    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>

  </form>

</main>