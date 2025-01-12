<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
    <title>Order Preview</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/customer.css')}}"/>
</head>

<body>

    <header>
        <div class="custGreetings">
            <h2>Selamat Datang <br> Customer &#128075; </h2>
        </div>
    
        <div class="namaKasir">
            <h2>Nama Kasir: </h2>
    
            <!-- Add an id to the logo -->
            <div class="logoHeader" id="fullscreenLogo">
                <img src="assets/logoCan.png" alt="Logo CanNgopi" height="70" width="70">
            </div>
        </div>
    </header>


     <!-- Buat munculin order id di atas-->
     <div class="getOrderID">
            <h2>Order ID <id>#83131</id></h2>
        </div>

        <!-- Buat munculin label pesanan dan harga di atas-->
        <div class="pesanan-harga-wrapper">
            <h3>Pesanan</h3>
            <h3>Harga</h3>
        </div>

        <!-- Buat munculin pesanan apa aja yang dipilih customer-->
        <div class="order-list"> <!--Ini kayak kotak spacenya buat list item-->

            <!--Ini item-itemnya-->
            <div class="product-1">
                <img src="assets/nasiGoreng.png" alt="Nasi Goreng Gila" height="70" width="70">
                    <div class="product">
                        <p>Nasi Goreng Gila</p>
                        <div class="order-notes">
                            <p1>-gak pedas</p1>
                            <div class="qty-harga">
                                <p2>x1</p2>
                                <p3>Rp. 350.000</p3>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="product-2">
                <img src="assets/esTeh.png" alt="Sweet Ice Tea" height="70" width="70">
                    <div class="product">
                        <p>Sweet Ice Tea</p>
                        <div class="order-notes">
                            <p1>-Tidak ada catatan</p1>
                            <div class="qty-harga">
                                <p2>x1</p2>
                                <p3>Rp. 10.000</p3>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="product-3">
                <img src="assets/cremeBrulee.png" alt="Creme Brulee" height="70" width="70">
                    <div class="product">
                        <p>Creme Brulee</p>
                        <div class="order-notes">
                            <p1>-Tidak ada catatan</p1>
                            <div class="qty-harga">
                                <p2>x1</p2>
                                <p3>Rp. 25.000</p3>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="product-1">
                <img src="assets/nasiGoreng.png" alt="Nasi Goreng Gila" height="70" width="70">
                    <div class="product">
                        <p>Nasi Goreng Gila</p>
                        <div class="order-notes">
                            <p1>-gak pedas</p1>
                            <div class="qty-harga">
                                <p2>x1</p2>
                                <p3>Rp. 35.000</p3>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="product-2">
                <img src="assets/esTeh.png" alt="Sweet Ice Tea" height="70" width="70">
                    <div class="product">
                        <p>Sweet Ice Tea</p>
                        <div class="order-notes">
                            <p1>-Tidak ada catatan</p1>
                            <div class="qty-harga">
                                <p2>x1</p2>
                                <p3>Rp. 10.000</p3>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="product-3">
                <img src="assets/cremeBrulee.png" alt="Creme Brulee" height="70" width="70">
                    <div class="product">
                        <p>Creme Brulee</p>
                        <div class="order-notes">
                            <p1>-Tidak ada catatan</p1>
                            <div class="qty-harga">
                                <p2>x1</p2>
                                <p3>Rp. 25.000</p3>
                            </div>
                        </div>
                    </div>
            </div>
            
        </div>

        <!--Garis pembatas dari item list ke harga bayar-->
        <hr class="dashed-line">

        <!--Bagian munculin sub total harga, diskon dama total yang harus dibayarkan-->
        <div class="harga-penjualan">

            <div class="sub-Total">
                <p1>Sub-Total</p1>
                <p2>Rp 144.000</p2>
            </div>

            <div class="discount">
                <p3>Discount 20%</p3>
                <p4>-Rp 28.800</p4>
            </div>

            <div class="total">
                <p5>Total</p5>
                <p6>Rp 129.600</p6>
            </div>
            
        </div>
       
    </div>


   <!-- Dibawah ini buat nampung bagian promosi sosial media dan ketersediaan Can Ngopi di GoFood dan GrbFood-->
   <footer>

    <!-- Dibawah ini buat sosmed Can Ngopi-->
    <div class="followUs">
        <h2>Follow us:</h2>
        <div class="social-icons-container">
            <a href="#" class="social-icons"><i class="fab fa-tiktok"></i> @cangopi.GS</a>
            <a href="#" class="social-icons"><i class="fab fa-instagram"></i> @cangopi.GS</a>
            <a href="#" class="social-icons"><i class="fab fa-whatsapp"></i> +6281399545166</a>
            <a href="#" class="social-icons"><i class="fab fa-youtube"></i> @CanNgopigs</a>
        </div>
   </div>   

   <!-- Dibawah ini buat GoFood/GrabFood Can Ngopi-->
   <div class="availableOn">
    <h2>Available On</h2>
    <div class="images-wrapper">
        <div class="availLogo-container">
            <img src="img/Gofood (1).png" alt="Logo GoFood" class="sizingGofood">
            <img src="img/Grabfood (1).png" alt="Logo GrabFood" class="sizingGrabfood">
        </div>
    </div> 

   </div>

    
</footer>
<script>
    // Function to toggle fullscreen
    function toggleFullScreen() {
        if (!document.fullscreenElement) {
            // Request full screen
            document.documentElement.requestFullscreen().catch(err => {
                alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
            });
        } else {
            // Exit full screen
            document.exitFullscreen();
        }
    }

    // Add event listener to the logo
    document.getElementById('fullscreenLogo').addEventListener('click', toggleFullScreen);
</script>
</body>

</html>
