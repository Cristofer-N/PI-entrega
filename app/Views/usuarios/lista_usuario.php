<div class="container-page">

    <h2 style="text-align: center; margin-bottom: 30px; color: #2a8c4a; font-size: 2em;">Lista de Usuários</h2>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 6px; overflow: hidden;">
            <thead>
                <tr style="background: #2a8c4a; color: #fff;">
                    <th style="padding: 15px; text-align: left; font-weight: 600;">ID</th>
                    <th style="padding: 15px; text-align: left; font-weight: 600;">Nome</th>
                    <th style="padding: 15px; text-align: left; font-weight: 600;">Email</th>
                    <th style="padding: 15px; text-align: left; font-weight: 600;">Celular</th>
                    <th style="padding: 15px; text-align: left; font-weight: 600;">Nível</th>
                    <th style="padding: 15px; text-align: center; font-weight: 600;">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($usuarios)): ?>
                    <?php foreach ($usuarios as $u): ?>
                        <tr style="border-bottom: 1px solid #eee; transition: 0.2s;">
                            <td style="padding: 15px;"><?= $u['id_usuario'] ?></td>
                            <td style="padding: 15px;"><?= $u['nome'] ?></td>
                            <td style="padding: 15px;"><?= $u['email'] ?></td>
                            <td style="padding: 15px;"><?= $u['celular'] ?></td>
                            <td style="padding: 15px;"><?= $u['nivel_acesso'] ?></td>

                            <td style="padding: 15px; text-align: center;">
                                <a href="#" style="display: inline-block; padding: 6px 12px; margin-right: 5px; background: #2a8c4a; color: #fff; border-radius: 4px; text-decoration: none; font-size: 0.9em; transition: 0.2s;">Editar</a>
                                <a href="#" style="display: inline-block; padding: 6px 12px; background: #d32f2f; color: #fff; border-radius: 4px; text-decoration: none; font-size: 0.9em; transition: 0.2s;">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                <?php else: ?>
                    <tr>
                        <td colspan="6" style="padding: 20px; text-align: center; color: #999;">Nenhum usuário cadastrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div style="text-align: right; margin-top: 20px;">
        <a href="/cadastro-usuario" style="display: inline-block; padding: 12px 30px; background: #2a8c4a; color: #fff; border-radius: 6px; text-decoration: none; font-weight: 600; transition: 0.3s;">+ Adicionar Novo</a>
    </div>

</div>
