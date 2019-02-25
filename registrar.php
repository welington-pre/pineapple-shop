<!-- 

    nome, Email, Senha(md5), Usuario, Endereço, cpf, rg --- cpf e rg validar
    Foto dos documentos (cpf e rg) e comprovaente de residencia
 -->

<?php include_once 'includes/header.php'; ?>
<?php?>
<section>
<div class="container">
    <div class="row">
        <form class="col s6">
        <div class="row">
            <div class="input-field col s6">
            <input id="nome" type="text" class="validate">
            <label for="nome">Nome: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <input id="email" type="email" class="validate">
            <label for="email">Email: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <input id="usuario" type="text" class="validate">
            <label for="usuario">Usuario: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <input id="senha" type="password" class="validate">
            <label for="senha">Senha: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <input id="senha" type="password" class="validate">
            <label for="senha">Senha de Confirmação: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>


            <div class="input-field col s6">
            <input id="endereco" type="text" class="validate">
            <label for="endereco">Endereço: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <input id="cpf" type="number" class="validate">
            <label for="cpf">CPF: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>

            <div class="input-field col s6">
            <input id="rg" type="number" class="validate">
            <label for="rg">RG: </label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>
            

        </div>
        </form>
    </div>
</div>

</section>
<?php include_once 'includes/footer.php'; ?>