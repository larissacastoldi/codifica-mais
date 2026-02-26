let dados = []

function addCard() {
    let title = document.getElementById("title").value
    let desc = document.getElementById("desc").value
    let category = document.getElementById("category").value
    let priority = document.getElementById("priority").value
    let image = document.getElementById("image").value

    if (!title || !desc) {
        alert("Preencha título e descrição")
        return
    }

    dados.push({
        id: Date.now(),
        title,
        desc,
        category,
        priority,
        image
    })

    render()
    limparFormulario()
}

function limparFormulario() {
    document.getElementById("title").value = ""
    document.getElementById("desc").value = ""
    document.getElementById("category").value = ""
    document.getElementById("priority").value = ""
    document.getElementById("image").value = ""
}

function clearAll() {
    dados = []
    render()
}

function removeCard(id) {
    dados = dados.filter(c => c.id !== id)
    render()
}

function render() {
    let lista = [...dados]

    let search = document.getElementById("search").value.toLowerCase()
    let order = document.getElementById("order").value

    // filtro
    lista = lista.filter(c =>
        c.title.toLowerCase().includes(search) ||
        c.desc.toLowerCase().includes(search)
    )

    // ordenação
    if (order === "az") {
        lista.sort((a, b) => a.title.localeCompare(b.title))
    } else {
        lista.sort((a, b) => b.id - a.id)
    }

    let html = ""

    lista.forEach(c => {
        html += `
        <div class="card">
            ${c.image ? `<img src="${c.image}" onerror="this.style.display='none'">` : ""}

            <h3>${c.title}</h3>
            <p>${c.desc}</p>

            <small>${c.category} - ${c.priority}</small>

            <button onclick="removeCard(${c.id})">Excluir</button>
        </div>
        `
    })

    document.getElementById("cards").innerHTML = html
    document.getElementById("count").innerText = lista.length + " cards"
}