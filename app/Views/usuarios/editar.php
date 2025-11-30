<div class="container-page">
  <div style="text-align: center; margin-bottom: 30px;">
    <h1 style="color: #2a8c4a; font-size: 2.5em;">Editar Usuário</h1>
    <p style="color: #666; font-size: 1.1em;">Atualize os dados do usuário abaixo</p>
  </div>

  <form action="/usuarios/atualizar" method="POST" style="max-width: 900px; margin: 0 auto;">

    <div style="background: #f9f9f9; padding: 30px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
      
      <!-- Campo ID (oculto) -->
      <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?>" />

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
        <!-- Nome -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Nome Completo *</label>
          <input type="text" name="nome" value="<?= $usuario['nome'] ?>" placeholder="Digite seu nome completo" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- E-mail -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">E-mail *</label>
          <input type="email" name="email" value="<?= $usuario['email'] ?>" placeholder="email@exemplo.com" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- CPF -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">CPF *</label>
          <input type="text" name="cpf" value="<?= $usuario['cpf'] ?>" placeholder="000.000.000-00" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Celular -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Celular *</label>
          <input type="tel" name="celular" value="<?= $usuario['celular'] ?>" placeholder="(00) 00000-0000" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Data de Nascimento -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Data de Nascimento *</label>
          <input type="date" name="data_nascimento" value="<?= $usuario['data_nascimento'] ?>" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Gênero -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Gênero *</label>
          <select name="genero" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
            <option value="">Selecione...</option>
            <option value="Feminino" <?= $usuario['genero'] == 'Feminino' ? 'selected' : '' ?>>Feminino</option>
            <option value="Masculino" <?= $usuario['genero'] == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
            <option value="Outro" <?= $usuario['genero'] == 'Outro' ? 'selected' : '' ?>>Outro</option>
            <option value="Prefiro não informar" <?= $usuario['genero'] == 'Prefiro não informar' ? 'selected' : '' ?>>Prefiro não informar</option>
          </select>
        </div>

        <!-- Nível de Acesso -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Nível de Acesso *</label>
          <select name="nivel_acesso" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
            <option value="">Selecione...</option>
            <option value="Admin" <?= $usuario['nivel_acesso'] == 'Admin' ? 'selected' : '' ?>>Administrador</option>
            <option value="Funcionario" <?= $usuario['nivel_acesso'] == 'Funcionario' ? 'selected' : '' ?>>Funcionário</option>
            <option value="Cliente" <?= $usuario['nivel_acesso'] == 'Cliente' ? 'selected' : '' ?>>Cliente</option>
          </select>
        </div>

        <!-- CEP -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">CEP *</label>
          <input type="text" name="cep" value="<?= $usuario['cep'] ?>" placeholder="00000-000" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Rua -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Rua/Avenida *</label>
          <input type="text" name="rua" value="<?= $usuario['rua'] ?>" placeholder="Rua, avenida..." required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Número -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Número *</label>
          <input type="text" name="numero" value="<?= $usuario['numero'] ?>" placeholder="Nº" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Complemento -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Complemento</label>
          <input type="text" name="complemento" value="<?= $usuario['complemento'] ?>" placeholder="Apartamento, bloco..." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Bairro -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Bairro *</label>
          <input type="text" name="bairro" value="<?= $usuario['bairro'] ?>" placeholder="Digite o bairro" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Cidade -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Cidade *</label>
          <input type="text" name="cidade" value="<?= $usuario['cidade'] ?>" placeholder="Digite a cidade" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Estado -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Estado *</label>
          <select name="estado" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
            <option value="">Selecione...</option>
            <option value="AC" <?= $usuario['estado'] == 'AC' ? 'selected' : '' ?>>AC</option>
            <option value="AL" <?= $usuario['estado'] == 'AL' ? 'selected' : '' ?>>AL</option>
            <option value="AP" <?= $usuario['estado'] == 'AP' ? 'selected' : '' ?>>AP</option>
            <option value="AM" <?= $usuario['estado'] == 'AM' ? 'selected' : '' ?>>AM</option>
            <option value="BA" <?= $usuario['estado'] == 'BA' ? 'selected' : '' ?>>BA</option>
            <option value="CE" <?= $usuario['estado'] == 'CE' ? 'selected' : '' ?>>CE</option>
            <option value="DF" <?= $usuario['estado'] == 'DF' ? 'selected' : '' ?>>DF</option>
            <option value="ES" <?= $usuario['estado'] == 'ES' ? 'selected' : '' ?>>ES</option>
            <option value="GO" <?= $usuario['estado'] == 'GO' ? 'selected' : '' ?>>GO</option>
            <option value="MA" <?= $usuario['estado'] == 'MA' ? 'selected' : '' ?>>MA</option>
            <option value="MT" <?= $usuario['estado'] == 'MT' ? 'selected' : '' ?>>MT</option>
            <option value="MS" <?= $usuario['estado'] == 'MS' ? 'selected' : '' ?>>MS</option>
            <option value="MG" <?= $usuario['estado'] == 'MG' ? 'selected' : '' ?>>MG</option>
            <option value="PA" <?= $usuario['estado'] == 'PA' ? 'selected' : '' ?>>PA</option>
            <option value="PB" <?= $usuario['estado'] == 'PB' ? 'selected' : '' ?>>PB</option>
            <option value="PR" <?= $usuario['estado'] == 'PR' ? 'selected' : '' ?>>PR</option>
            <option value="PE" <?= $usuario['estado'] == 'PE' ? 'selected' : '' ?>>PE</option>
            <option value="PI" <?= $usuario['estado'] == 'PI' ? 'selected' : '' ?>>PI</option>
            <option value="RJ" <?= $usuario['estado'] == 'RJ' ? 'selected' : '' ?>>RJ</option>
            <option value="RN" <?= $usuario['estado'] == 'RN' ? 'selected' : '' ?>>RN</option>
            <option value="RS" <?= $usuario['estado'] == 'RS' ? 'selected' : '' ?>>RS</option>
            <option value="RO" <?= $usuario['estado'] == 'RO' ? 'selected' : '' ?>>RO</option>
            <option value="RR" <?= $usuario['estado'] == 'RR' ? 'selected' : '' ?>>RR</option>
            <option value="SC" <?= $usuario['estado'] == 'SC' ? 'selected' : '' ?>>SC</option>
            <option value="SP" <?= $usuario['estado'] == 'SP' ? 'selected' : '' ?>>SP</option>
            <option value="SE" <?= $usuario['estado'] == 'SE' ? 'selected' : '' ?>>SE</option>
            <option value="TO" <?= $usuario['estado'] == 'TO' ? 'selected' : '' ?>>TO</option>
          </select>
        </div>

        <!-- Senha (Opcional - deixar em branco para não alterar) -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Senha (deixe em branco para não alterar)</label>
          <input type="password" name="senha" minlength="6" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
          <small style="color: #666;">Mínimo de 6 caracteres.</small>
        </div>
      </div>

      <!-- Botões -->
      <div style="text-align: center; margin-top: 30px;">
        <a href="/lista-usuario" style="display: inline-block; padding: 12px 30px; margin-right: 10px; background: #f0f0f0; color: #333; border: 1px solid #ccc; border-radius: 6px; text-decoration: none; font-weight: 600; transition: 0.3s;">Voltar</a>
        <button type="submit" style="display: inline-block; padding: 12px 30px; background: #2a8c4a; color: #fff; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; transition: 0.3s;">Atualizar</button>
      </div>
    </div>

  </form>
</div>
