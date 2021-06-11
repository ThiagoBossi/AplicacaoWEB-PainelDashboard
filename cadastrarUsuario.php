<div class="formCadastrar">
    <span class="label01_formUsuario">Cadastrar novo Usuário</span>
    <div class="conteudoForm">
        <form method="POST" action="cadastrarUsuarioNovo.php">
            <input class="txtNomeUsuario_formUsuario" name="nomeUsuario" type="text" placeholder="Usuário" required autofocus=""/>
            <input class="txtSenhaUsuario_formUsuario" name="senhaUsuario" type="password" placeholder="Senha" required/>
            <select class="cmbBoxCargoUsuario_formUsuario" name="cargoUsuario">
                <option value="Suporte" selected="">Suporte</option>
                <option value="Moderador">Moderador</option>
                <option value="Administrador">Administrador</option>
                <option value="Coordenador">Coordenador</option>
                <option value="Diretor">Diretor</option>
                <option value="Fundador">Fundador</option>
            </select>
            <button type="submit" class="btnCadastrar_formUsuario">Cadastrar</button>
        </form>
    </div>
</div>