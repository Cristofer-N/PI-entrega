<div class="container-page">

  <h1 style="text-align: center; color: #2a8c4a; font-size: 2.5em; margin-bottom: 10px;">
    Cadastro de Produtos
  </h1>
  <p style="text-align: center; margin-bottom: 30px; color: #666; font-size: 1.1em;">
    Preencha as informações do produto para adicionar ao sistema 🌱
  </p>

  <div style="background: #f9f9f9; padding: 30px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); max-width: 900px; margin: 0 auto;">

    <form action="#" method="post">
      <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px; margin-bottom: 20px;">

        <!-- Nome do produto -->
        <div>
          <label style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Nome do Produto *</label>
          <input type="text" name="nome" placeholder="Ex: Kit Fertilizante Remo Super Trio" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Categoria -->
        <div>
          <label style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Categoria *</label>
          <select name="categoria" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
            <option value="">Selecione...</option>
            <option value="sementes">Sementes</option>
            <option value="mudas">Mudas</option>
            <option value="fertilizante">Fertilizante</option>
            <option value="vasos">Vasos</option>
            <option value="acessorios">Acessórios</option>
            <option value="outros">Outros</option>
          </select>
        </div>
      </div>

      <!-- Descrição -->
      <div style="margin-bottom: 20px;">
        <label style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Descrição *</label>
        <textarea name="descricao" rows="3" required placeholder="Informe detalhes do produto..." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em; font-family: Arial;"></textarea>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 20px;">

        <!-- Quantidade -->
        <div>
          <label style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Quantidade *</label>
          <input type="number" name="quantidade" placeholder="Ex: 50" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Valor unitário -->
        <div>
          <label style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Valor Unitário (R$) *</label>
          <input type="text" name="valor_unitario" placeholder="Ex: 9,99" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>

        <!-- Estoque mínimo -->
        <div>
          <label style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Estoque Mínimo</label>
          <input type="number" name="estoque_minimo" placeholder="Ex: 10" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;">
        </div>
      </div>

      <!-- Botões -->
      <div style="display: flex; justify-content: space-between; margin-top: 30px;">
        <a href="/" style="display: inline-block; padding: 12px 30px; background: #999; color: #fff; border-radius: 6px; text-decoration: none; font-weight: 600; transition: 0.3s;">Voltar</a>
        <div>
          <button type="reset" style="display: inline-block; padding: 12px 30px; margin-right: 10px; background: #f0f0f0; color: #333; border: 1px solid #ccc; border-radius: 6px; cursor: pointer; font-weight: 600; transition: 0.3s;">Limpar</button>
          <button type="submit" style="display: inline-block; padding: 12px 30px; background: #2a8c4a; color: #fff; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; transition: 0.3s;">Cadastrar</button>
        </div>
      </div>

    </form>

  </div>

</div>
