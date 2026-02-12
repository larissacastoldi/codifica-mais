<div class="container">
    <header>
        <nav>
            <a href="index.php?rota=listagem">Listagem</a>
            <a href="index.php?rota=cadastro">Novo Cadastro</a>
        </nav>
    </header>

    <h2>Novo Cadastro</h2>

    <form action="index.php?rota=salvar" method="POST" enctype="multipart/form-data">
        <div class="form-corpo">
            
            <div class="area-foto">
                <label>Foto do Produto:</label>
                <label class="upload-box" for="foto-input">
                    <span id="label-text">📷<br>Clique para selecionar</span>
                    <input type="file" name="foto" id="foto-input" accept="image/*" onchange="mostrarPreview(this)">
                    <img id="img-preview">
                </label>
            </div>

            <div class="area-dados">
                <div class="campo">
                    <label>Nome do Produto:</label>
                    <input type="text" name="nome" required placeholder="Ex: Colar de aço inox">
                </div>

                <div class="campo">
                    <label>Descrição:</label>
                    <textarea name="descricao" rows="3" placeholder="Detalhes do acessório..."></textarea>
                </div>

                <div style="display:flex; gap: 20px;">
                    <div class="campo" style="flex:1;">
                        <label>Quantidade:</label>
                        <input type="number" name="quantidade" value="0">
                    </div>
                    <div class="campo" style="flex: 1;">
                        <label>Preço (R$):</label>
                        <input type="number" name="preco" step="0.01" placeholder="0,00">
                    </div>
                </div>

                <button type="submit" class="btn-salvar">Salvar Produto</button>
                <a href="index.php?rota=listagem" class="btn-cancelar">Cancelar</a>
            </div>

        </div>
    </form>
</div>

<script>
function mostrarPreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var img = document.getElementById('img-preview');
            var text = document.getElementById('label-text');
            img.src = e.target.result;
            img.style.display = 'block';
            text.style.display = 'none';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>