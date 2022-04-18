<div class="titulo">$_POST Array</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <select name="estado">
        <option value="MG">Minas Gerais</option>
        <option value="RJ">Rio de Janeiro</option>
    </select>

    <button>Enviar</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php
echo '21-09-2021<br>';

print_r($_GET);
echo '<br>';
print_r($_POST);
