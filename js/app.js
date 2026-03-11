const cards = document.querySelectorAll(".card");
const search = document.getElementById("searchInput");

// buscador en tiempo real
search.addEventListener("input", () => {
    const value = search.value.toLowerCase();
    cards.forEach(card => {
        const name = card.dataset.name;
        card.style.display = name.includes(value) ? "block" : "none";
    });
});

// filtros
document.querySelectorAll("[data-filter]").forEach(button => {
    button.onclick = () => {
        const filter = button.dataset.filter;
        cards.forEach(card => {
            if (filter === "Todos" || card.dataset.category === filter) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    };
});

// favoritos 
document.querySelectorAll(".favorite").forEach(btn => {
    btn.addEventListener("click", () => {
        const card = btn.closest(".card")
        const id = card.dataset.name
        let favorites = JSON.parse(localStorage.getItem("favorites")) || []

        if(favorites.includes(id)){
            favorites = favorites.filter(f => f !== id)
            btn.style.color = "black"
        }else{
            favorites.push(id)
            btn.style.color = "red"
        }

        localStorage.setItem("favorites", JSON.stringify(favorites))
    })
})