<?php require_once 'partials/header.php'; ?>

    <form method="post" action="result.php">
        <div class="form-group">
            <label for="list">Informe os elementos da lista</label>
            <input type="text" name="list" class="form-control" id="list" placeholder="Ex: 1, 2, 3, 4, 5 ...">
            <small style="color: #BBB">Caso não seja informado, será gerado uma lista com 15 elementos aleatórios</small>
        </div>

        <div class="form-group">
            <label for="search">Informe um número a ser buscado na lista</label>
            <input type="number" name="search" class="form-control" id="search" placeholder="Um número qualquer...">
            <small style="color: #BBB">Caso não seja informado, um número de 0 a 100 será escolhido para ser procurado</small>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Enviar</button>
        </div>
    </form>

<?php require_once 'partials/footer.php'; ?>