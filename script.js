// Function to handle order form submission
function calculateTotal() {
    const menuItem = document.getElementById("menu-item");
    const size = document.getElementById("size").value;
    const quantity = parseInt(document.getElementById("quantity").value, 10);
    const price = parseInt(menuItem.options[menuItem.selectedIndex].getAttribute("data-price"), 10);
    const sizeMultiplier = parseFloat(document.getElementById("size").selectedOptions[0].getAttribute("data-multiplier"));

    const total = price * sizeMultiplier * quantity;
    document.getElementById("total-price").innerText = `Rp${total.toLocaleString("id-ID")}`;
}

function updateImage() {
    const menuItem = document.getElementById("menu-item").value;
    const orderImg = document.getElementById("order-img");
    const orderDescription = document.getElementById("order-description");

    if (menuItem === "Latte Senja") {
        orderImg.src = "latte.jpg";
        orderDescription.innerText = "Latte Senja - Pilihan sempurna untuk menikmati suasana senja.";
    } else if (menuItem === "Es Kopi Lembayung") {
        orderImg.src = "es kopi.jpg";
        orderDescription.innerText = "Es Kopi Lembayung - Dingin, segar, dan penuh rasa.";
    } else if (menuItem === "Teh Peach") {
        orderImg.src = "teh peach.jpg";
        orderDescription.innerText = "Teh Peach - Sensasi manis dan segar.";
    }

    calculateTotal(); // Recalculate total whenever the menu item changes
}

function submitOrder(event) {
    event.preventDefault();

    const menuItem = document.getElementById("menu-item").value;
    const quantity = document.getElementById("quantity").value;
    const size = document.getElementById("size").value;
    const paymentMethod = document.getElementById("payment").value;
    const address = document.getElementById("address").value;
    const totalPrice = document.getElementById("total-price").innerText;

    alert(`Pesanan Anda berhasil dibuat!\nMenu: ${menuItem}\nUkuran: ${size}\nJumlah: ${quantity}\nTotal Harga: ${totalPrice}\nMetode Pembayaran: ${paymentMethod}\nCatatan: ${address}`);
}

// Initialize with default image and total calculation
updateImage();
calculateTotal();
