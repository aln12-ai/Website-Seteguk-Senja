<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seteguk Senja Coffee Shop</title>
    <style>
        /* Menambahkan font Poppins dan Lora dari Google Fonts */
       /* Menambahkan font Poppins dan Lora dari Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap');

body {
    margin: 0;
    font-family: 'Poppins', sans-serif; /* Mengubah font default menjadi Poppins */
    background-color: #f9f6f1;
    color: #4a4a4a;
}

    header {
        background-color: #8b4513;
        color: white;
        padding: 20px;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15); /* Menambah bayangan */
    }

    header h1 {
        margin: 0;
        font-size: 2.6em;
        font-family: 'Poppins', sans-serif; /* Font Poppins untuk judul */
        font-weight: 700;
    }

    nav {
        display: flex;
        justify-content: center;
        background-color: #8b4513;
        padding: 15px 0;
        gap: 30px; /* Menambah jarak antar tautan */
        font-family: 'Roboto', sans-serif;
    }

    nav a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        font-size: 1.1em;
        padding: 5px 10px; /* Memberikan padding lebih untuk tautan */
        transition: background-color 0.3s, text-decoration 0.3s;
    }

    nav a:hover {
        text-decoration: underline;
        background-color: rgba(255, 255, 255, 0.1); /* Efek hover */
        border-radius: 5px; /* Menambahkan radius pada efek hover */
    }

    /* Responsif untuk tampilan mobile */
    @media screen and (max-width: 768px) {
        header h1 {
            font-size: 2em; /* Ukuran font judul lebih kecil pada layar kecil */
        }

        nav {
            flex-direction: column; /* Menata ulang navbar menjadi vertikal */
            gap: 10px;
        }

        nav a {
            font-size: 1.2em; /* Menyesuaikan ukuran font */
        }
    }

.hero {
    background: url('https://via.placeholder.com/1200x600?text=Seteguk+Senja') no-repeat center center/cover;
    height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    text-align: center;
    padding: 0 20px;
}

.hero .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparan overlay */
    z-index: 1;
}

.hero-text {
    position: relative;
    z-index: 2;
    color: #f4d3a1;
    max-width: 700px;
    text-align: center;
}

.hero-title {
    font-size: 3.5em;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    margin: 0 0 20px 0;
    animation: fadeIn 2s ease-in-out;
}

.hero-subtitle {
    font-size: 1.3em;
    font-family: 'Lora', serif;
    font-weight: 400;
    margin-bottom: 30px;
    animation: fadeIn 2.5s ease-in-out;
}

.cta-btn {
    font-size: 1.2em;
    background-color: #8b4513;
    color: white;
    padding: 15px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: background-color 0.3s;
    text-transform: uppercase;
}

.cta-btn:hover {
    background-color: #6f3510;
}

/* Animasi teks fadeIn */
@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.section {
    padding: 20px;
    max-width: 1000px;
    margin: 0 auto;
}

.menu {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.menu-item {
    flex: 1 1 calc(33.333% - 20px);
    background: white;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.menu-item img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.menu-item h3 {
    margin: 10px 0;
    font-size: 1.2em;
    font-family: 'Poppins', sans-serif; /* Font Poppins untuk judul menu */
}

.menu-item p {
    color: #8b4513;
    font-family: 'Lora', serif; /* Font Lora untuk deskripsi menu */
}

.footer {
    margin-top: 20px;
    text-align: center;
    padding: 20px;
    background-color: #8b4513;
    color: white;
    font-size: 0.9em;
    font-family: 'Roboto', sans-serif; /* Menggunakan font Roboto untuk footer */
}

.order-container {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 30px;
    max-width: 1000px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    gap: 30px;
    font-family: 'Poppins', sans-serif; /* Font Poppins untuk form */
}

.order-form {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
    font-family: 'Lora', serif; /* Font Lora untuk form */
}

.order-form label {
    font-weight: 600;
    font-size: 1.1rem;
    color: #8b4513;
}

.order-form input,
.order-form select,
.order-form textarea {
    padding: 12px;
    font-size: 1rem;
    border-radius: 8px;
    border: 1px solid #ddd;
    width: 100%;
    font-family: 'Poppins', sans-serif;
}

.order-form button {
    padding: 15px;
    background-color: #8b4513;
    color: white;
    font-size: 1.2rem;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
}

.order-form button:hover {
    background-color: #6f3510;
}

.order-image {
    flex: 1;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.order-image img {
    width: 80%;
    max-width: 300px;
    border-radius: 8px;
}

.order-image p {
    font-size: 1.1em;
    color: #8b4513;
    font-family: 'Lora', serif; /* Font Lora untuk deskripsi gambar */
}

footer {
    margin-top: 20px;
    padding: 10px;
    background-color: #8b4513;
    text-align: center;
    color: white;
    font-size: 0.8rem;
    font-family: 'Roboto', sans-serif;
}
    </style>
</head>
<body>

<header>
    <h1>Seteguk Senja Coffee Shop</h1>
    <nav>
        <a href="#home">Home</a>
        <a href="#menu">Menu</a>
        <a href="#order">Order</a>
        <a href="#gallery">Gallery</a>
        <a href="#about">About Us</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<div id="home" class="hero">
    <div class="overlay"></div>
    <div class="hero-text">
        <p class="hero-title">Hangatnya Setiap Tegukan di Balik Lembayung Senja</p>
        <p class="hero-subtitle">Temui rasa yang menyatu dengan suasana. Nikmati secangkir kehangatan dari Seteguk Senja.</p>
        <a href="#order" class="cta-btn">Pesan Sekarang</a>
    </div>
</div>

<div id="menu" class="section">
    <h2>Menu</h2>
    <div class="menu">
        <div class="menu-item">
            <img src="latte.jpg" alt="Latte Senja">
            <h3>Latte Senja</h3>
            <p>Rp25.000</p>
        </div>
        <div class="menu-item">
            <img src="es kopi.jpg" alt="Es Kopi Lembayung">
            <h3>Es Kopi Lembayung</h3>
            <p>Rp20.000</p>
        </div>
        <div class="menu-item">
            <img src="teh peach.jpg" alt="Teh Peach">
            <h3>Teh Peach</h3>
            <p>Rp18.000</p>
        </div>
    </div>
</div>

<div id="order" class="section">
    <h2>Order Online</h2>
    <div class="order-container">
        <form class="order-form" id="order-form" onsubmit="submitOrder(event)">
            <div class="form-group">
                <label for="menu-item">Pilih Menu:</label>
                <select id="menu-item" name="menu-item" onchange="updateImage()">
                    <option value="Latte Senja" data-price="25000">Latte Senja - Rp25.000</option>
                    <option value="Es Kopi Lembayung" data-price="20000">Es Kopi Lembayung - Rp20.000</option>
                    <option value="Teh Peach" data-price="18000">Teh Peach - Rp18.000</option>
                </select>
            </div>
            <div class="form-group">
                <label for="size">Ukuran:</label>
                <select id="size" name="size" onchange="calculateTotal()">
                    <option value="Kecil" data-multiplier="1">Kecil</option>
                    <option value="Medium" data-multiplier="1.2">Medium</option>
                    <option value="Besar" data-multiplier="1.5">Besar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah:</label>
                <input type="number" id="quantity" name="quantity" min="1" value="1" onchange="calculateTotal()">
            </div>
            <div class="form-group">
                <label>Total Harga:</label>
                <p id="total-price">Rp0</p>
            </div>
            <div class="form-group">
                <label for="payment">Metode Pembayaran:</label>
                <select id="payment" name="payment">
                    <option value="Cash">Cash</option>
                    <option value="Transfer">Transfer Bank</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Catatan Khusus:</label>
                <textarea id="address" name="address" placeholder="Masukkan catatan khusus"></textarea>
            </div>
            <button type="submit" class="btn-submit">Pesan Sekarang</button>
        </form>

        <div class="order-image" id="order-image">
            <img src="latte.jpg" alt="Selected Drink" id="order-img">
            <p id="order-description">Pilih menu dan ukuran untuk melihat gambar di sini.</p>
        </div>
    </div>
</div>

<div id="gallery" class="section">
    <h2>Gallery</h2>
    <div class="menu">
        <div class="menu-item">
            <img src="interior 1.jpg" alt="Interior 1">
            <p>Interior Hangat</p>
        </div>
        <div class="menu-item">
            <img src="interior 2.jpg" alt="Interior 2">
            <p>Nuansa Senja</p>
        </div>
        <div class="menu-item">
            <img src="barista.jpg" alt="Barista">
            <p>Tim Barista Kami</p>
        </div>
    </div>
</div>

<div id="about" class="section">
    <h2 style="font-family: 'Poppins', sans-serif; text-align: center; font-size: 2.5em; margin-bottom: 20px;">About Us</h2>
    <div class="about-container" style="display: flex; justify-content: space-between; align-items: center; gap: 40px; flex-wrap: wrap;">
        <div class="about-text" style="flex: 1 1 50%; font-family: 'Lora', serif; line-height: 1.8; max-width: 600px; text-align: justify;">
            <p style="font-size: 1.1em; color: #4a4a4a; margin-bottom: 20px;">Seteguk Senja berdiri dengan satu tujuan sederhana: menghadirkan pengalaman yang hangat dan romantis dalam setiap tegukan kopi Anda. Kami percaya bahwa setiap minuman memiliki cerita, dan kami ada di sini untuk menyajikan cerita terbaik yang melibatkan Anda dalam setiap momen.</p>
            <p style="font-size: 1.1em; color: #4a4a4a; margin-bottom: 20px;">Misi kami adalah memberikan kenyamanan melalui setiap cita rasa yang disajikan, serta menciptakan suasana yang memungkinkan Anda menikmati waktu santai bersama teman, keluarga, atau diri sendiri. Kami mengutamakan kualitas bahan, kenyamanan tempat, dan pelayanan yang ramah untuk menjadikan setiap kunjungan Anda sebagai kenangan yang tak terlupakan.</p>
            <p style="font-size: 1.1em; color: #4a4a4a;">Kami berharap, di Seteguk Senja, setiap tegukan kopi Anda membawa kehangatan yang sama seperti saat matahari terbenam di balik horizon. Ini adalah tempat di mana rasa dan suasana berpadu untuk menciptakan kenangan yang indah.</p>
        </div>
        <div class="about-image" style="flex: 1 1 40%; transition: transform 0.3s ease-in-out; text-align: center;">
            <img src="interior kedai.jpg" alt="Interior Kedai" style="width: 80%; max-width: 400px; height: auto; border-radius: 10px;">
        </div>
    </div>
</div>

<script>
    // Animasi sederhana saat gambar muncul
    const aboutImage = document.querySelector('.about-image img');
    aboutImage.addEventListener('mouseenter', () => {
        aboutImage.style.transform = 'scale(1.05)';
    });
    aboutImage.addEventListener('mouseleave', () => {
        aboutImage.style.transform = 'scale(1)';
    });
</script>

    <div id="contact" class="section">
    <h2>Contact Us</h2>
    <form>
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Pesan:</label>
        <textarea id="message" name="message"></textarea>
        <button type="submit">Kirim</button>
    </form>
    <p>Lokasi: <a href="hhttps://maps.app.goo.gl/iBgY8ysNQiQXEmai9">Lihat di Google Maps</a></p>
    <p>Email: contact@seteguksenja.com | WhatsApp: 0812-3456-7890</p>
</div>

<footer class="footer">
    &copy; 2025 Seteguk Senja Coffee Shop. All Rights Reserved. | <a href="#">Privacy Policy</a>
</footer>

<script>
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

    // Function to handle order form submission
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
</script>

</body>
</html>