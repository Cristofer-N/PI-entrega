<div style="background: #fff; color: #000; max-width: 400px; margin: 80px auto; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
    <div style="font-size: 2rem; font-weight: bold; text-align: center; margin-bottom: 20px; color: #2a8c4a;">
        Green Ltda.
    </div>

    <form method="POST" action="/login">
        <div style="margin-bottom: 20px;">
            <label for="usuario" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Usuário</label>
            <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;" />
        </div>

        <div style="margin-bottom: 20px;">
            <label for="senha" style="font-weight: 600; color: #2a8c4a; display: block; margin-bottom: 8px;">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1em;" />
        </div>

        <button type="submit" style="width: 100%; background-color: #2a8c4a; color: #fff; padding: 12px; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; font-size: 1em; transition: 0.3s;">Logar</button>
    </form>
</div>
