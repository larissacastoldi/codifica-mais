<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cards DOM</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="topo">
    <h1>Cards em Memória</h1>
</div>

<div class="container">
    <div class="grid">

        <!-- FORMULÁRIO -->
        <div class="caixa">
            <h2>Novo Card</h2>

            <input id="title" placeholder="Título">
            <textarea id="desc" placeholder="Descrição"></textarea>

            <select id="category">
                <option value="">Categoria</option>
                <option>Estudos</option>
                <option>Trabalho</option>
                <option>Pessoal</option>
                <option>Financeiro</option>
                <option>Metas</option>
                <option>Outros</option>
            </select>

            <select id="priority">
                <option value="">Prioridade</option>
                <option>Baixa</option>
                <option>Média</option>
                <option>Alta</option>
            </select>

            <input id="image" placeholder="Link da imagem (opcional)">

            <button class="btn-adicionar" onclick="addCard()">Adicionar</button>
            <button class="btn-apagar" onclick="clearAll()">Limpar tudo</button>
        </div>

        <!-- LISTA -->
        <div class="caixa">
            <div class="barra-topo">
                <span class="contador" id="count">0 cards</span>

                <div class="filtros">
                    <input id="search" placeholder="Filtrar..." oninput="render()">

                    <select id="order" onchange="render()">
                        <option value="recent">Mais recentes</option>
                        <option value="az">A-Z</option>
                    </select>
                </div>
            </div>

            <div class="lista-cards" id="cards"></div>
        </div>

    </div>
</div>

<script src="script.js"></script>
</body>
</html>