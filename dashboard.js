function add() {
    document.getElementById("add_btn").style.display = "block";
    document.getElementById("edit_btn").style.display = "none";
    document.getElementById("delete_btn").style.display = "none";
    document.getElementById("form").reset();
}

function edit(id) {
    document.getElementById("add_btn").style.display = "none";
    document.getElementById("edit_btn").style.display = "block";
    document.getElementById("delete_btn").style.display = "block";
    document.getElementById('instrument_name').value = document.getElementById(id).getAttribute("data-name");
    // document.getElementById('instrument_category').value = document.getElementById(id).getAttribute("data-category");
    document.getElementById('instrument_category').value = document.getElementById(id).getAttribute("data-category")
    document.getElementById('instrument_price').value = document.getElementById(id).getAttribute("data-price");
    document.getElementById('instrument_quantite').value = document.getElementById(id).getAttribute("data-quantite");
    document.getElementById('instrument_description').value = document.getElementById(id).getAttribute("data-description");
    document.getElementById('hideId').value = id;

}