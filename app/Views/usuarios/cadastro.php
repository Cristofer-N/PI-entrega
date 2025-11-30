<div class="container-page">
  <div style="text-align: center; margin-bottom: 30px;">
    <h1 style="color: #2a8c4a; font-size: 2.5em;">Cadastro de Usuário</h1>
    <p style="color: #666; font-size: 1.1em;">Preencha os campos abaixo para se cadastrar na Green Ltda.</p>
  </div>

  <form action="/usuarios/salvar" method="POST" style="max-width: 900px; margin: 0 auto;">

    <div style="background: #f9f9f9; padding: 30px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
        <!-- Nome -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Nome Completo *</label>
          <input type="text" name="nome" placeholder="Digite seu nome completo" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- E-mail -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">E-mail *</label>
          <input type="email" name="email" placeholder="email@exemplo.com" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- CPF -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">CPF *</label>
          <input type="text" name="cpf" placeholder="000.000.000-00" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Celular -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Celular *</label>
          <input type="tel" name="celular" placeholder="(00) 00000-0000" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Data de Nascimento -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Data de Nascimento *</label>
          <input type="date" name="data_nascimento" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Gênero -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Gênero *</label>
          <select name="genero" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
            <option value="">Selecione...</option>
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
            <option value="Outro">Outro</option>
            <option value="Prefiro não informar">Prefiro não informar</option>
          </select>
        </div>

        <!-- Nível de Acesso -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Nível de Acesso *</label>
          <select name="nivel_acesso" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
            <option value="">Selecione...</option>
            <option value="Admin">Administrador</option>
            <option value="Funcionario">Funcionário</option>
            <option value="Cliente">Cliente</option>
          </select>
        </div>

        <!-- CEP -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">CEP *</label>
          <input type="text" name="cep" placeholder="00000-000" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Rua -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Rua/Avenida *</label>
          <input type="text" name="rua" placeholder="Rua, avenida..." required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Número -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Número *</label>
          <input type="text" name="numero" placeholder="Nº" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Complemento -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Complemento</label>
          <input type="text" name="complemento" placeholder="Apartamento, bloco..." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Bairro -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Bairro *</label>
          <input type="text" name="bairro" placeholder="Digite o bairro" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Cidade -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Cidade *</label>
          <input type="text" name="cidade" placeholder="Digite a cidade" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Estado -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Estado *</label>
          <select name="estado" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
            <option value="">Selecione...</option>
            <option>AC</option><option>AL</option><option>AP</option><option>AM</option>
            <option>BA</option><option>CE</option><option>DF</option><option>ES</option>
            <option>GO</option><option>MA</option><option>MT</option><option>MS</option>
            <option>MG</option><option>PA</option><option>PB</option><option>PR</option>
            <option>PE</option><option>PI</option><option>RJ</option><option>RN</option>
            <option>RS</option><option>RO</option><option>RR</option><option>SC</option>
            <option>SP</option><option>SE</option><option>TO</option>
          </select>
        </div>

        <!-- Senha -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Senha *</label>
          <input type="password" name="senha" minlength="6" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
          <small style="color: #666;">Mínimo de 6 caracteres.</small>
        </div>

        <!-- Confirmar Senha -->
        <div>
          <label class="form-label" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Confirmar Senha *</label>
          <input type="password" name="confirma_senha" minlength="6" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>
      </div>

      <!-- Botões -->
      <div style="text-align: center; margin-top: 30px;">
        <a href="/" style="display: inline-block; padding: 12px 30px; margin-right: 10px; background: #f0f0f0; color: #333; border: 1px solid #ccc; border-radius: 6px; text-decoration: none; font-weight: 600; transition: 0.3s;">Voltar</a>
        <button type="reset" style="display: inline-block; padding: 12px 30px; margin-right: 10px; background: #999; color: #fff; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; transition: 0.3s;">Limpar</button>
        <button type="submit" style="display: inline-block; padding: 12px 30px; background: #2a8c4a; color: #fff; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; transition: 0.3s;">Cadastrar</button>
      </div>
    </div>

  </form>
</div>
