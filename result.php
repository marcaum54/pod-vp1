<?php require_once 'functions.php'; ?>
<?php require_once 'partials/header.php'; ?>

<?php $search = empty( $_POST['search'] ) ? rand(1, 100) : ( (int)$_POST['search'] ); ?>
<?php $list = empty( $_POST['list'] ) ? generate_random_list() : array_values( array_filter( explode( ',', trim( str_replace( ' ', '', $_POST['list'] ) ) ) ) ); ?>
<?php $sorted = bubble_sort( $list ); ?>


<h2>A lista</h2>
<nav aria-label="Page navigation">
    <ul class="pagination">
        <?php foreach( $list as $item ): ?>
        <li class="<?php echo $search == $item ? 'active' : ''; ?>"><a href="#"><?php echo $item; ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

<h2>A lista ordenada pelo Bubble Sort</h2>
<nav aria-label="Page navigation">
    <ul class="pagination">
        <?php foreach( $sorted as $item ): ?>
        <li class="<?php echo $search == $item ? 'active' : ''; ?>"><a href="#"><?php echo $item; ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

<h2>O número a ser procurado é: <span class="label label-primary"><?php echo $search; ?></span></h2>

<ul class="list-group">
    <li class="list-group-item">Busca Linear ou Sequencial: <span class="label label-primary"><?php echo sequential_search($search, $list) ? 'Encontrado' : 'Não encontrado'; ?></span></li>
    <li class="list-group-item">Busca Binária: <span class="label label-primary"><?php echo binary_search($search, $sorted) ? 'Encontrado' : 'Não encontrado'; ?></span></li>
</ul>

<div class="text-center">
    <a class="btn btn-default" href="index.php">Voltar</a>
</div>


<?php require_once 'partials/footer.php'; ?>