function adicionarFormacao() {
    const container = document.getElementById('formacao-container');
    const div = document.createElement('div');
    div.innerHTML = `
        <br><label>Curso:</label><input type="text" name="formacao_curso[]"  required>
        <label>Instituição:</label><input type="text" name="formacao_instituicao[]"  required>
        <label>Periodo/Ano:</label><input type="text" name="formacao_ano[]"  required>
        <button class="remover" type="button" onclick="removerCampo(this)">Remover</button>
            `;
    container.appendChild(div);
}

function adicionarExperiencia() {
    const container = document.getElementById('experiencia-container');
    const div = document.createElement('div');
    div.innerHTML = `
        <br><label>Cargo:</label><input type="text" name="experiencia_cargo[]"  required>
        <label>Empresa:</label><input type="text" name="experiencia_empresa[]" required>
        <label>Periodo/Ano:</label><input type="text" name="experiencia_datas[]" required>
        <label>Descrição das atividades</label><textarea name="experiencia_descricao[]" rows="2"></textarea>
        <button class="remover" type="button" onclick="removerCampo(this)">Remover</button>
    `;
    container.appendChild(div);
}

function removerCampo(button) {
    button.parentNode.remove();
}

