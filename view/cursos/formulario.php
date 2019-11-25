<?php
    include __DIR__ .'/../inicio-html.php';
?>

<form action="/salvar-curso" method="post">
    <div class="input group">
        <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao">
    </div>
        <button class="btn btn-primary">Salvar</button> 
</form> 


<?php
    include __DIR__ .'/../fim-html.php';
?>

    