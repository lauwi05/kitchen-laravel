<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="refresh" content="5"> <!-- Refresh the page every 5 seconds -->
    <title>Standby Screen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
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
        <h2>Nama Kasir : </h2>
       </div>
    </header>

    <div class="MiddleSection">
        <!-- Logo that acts as Fullscreen button -->
        <div class="logoWelcome">
            <img src="assets/logoCan.png" alt="Logo CanNgopi" height="400" width="400" id="fullscreenLogo">
        </div>

        <h2>Hi there, how can I help you?</h2>
    </div>
    
    <footer>
        <div class="followUs">
            <h2>Follow us:</h2>
            <div class="social-icons-container">
                <a href="#" class="social-icons"><i class="fab fa-tiktok"></i> @cangopi.GS</a>
                <a href="#" class="social-icons"><i class="fab fa-instagram"></i> @cangopi.GS</a>
                <a href="#" class="social-icons"><i class="fab fa-whatsapp"></i> +6281399545166</a>
                <a href="#" class="social-icons"><i class="fab fa-youtube"></i> @CanNgopigs</a>
            </div>
       </div>   

       <div class="availableOn">
        <h2>Available On</h2>
        <div class="availLogo-container">
            <img src="assets/Gofood (1).png" alt="Logo GoFood" class="sizingGofood">
            <img src="assets/Grabfood (1).png" alt="Logo GrabFood" class="sizingGrabfood">
        </div>
       </div>
    </footer>

    <!-- Fullscreen JavaScript -->
    <script>
        const fullscreenLogo = document.getElementById('fullscreenLogo');

        fullscreenLogo.addEventListener('click', () => {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen();
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
            }
        });

        // Automatically enter fullscreen on page load
        window.onload = function() {
            document.documentElement.requestFullscreen();

            // Redirect to OrderPreview.php if pesanan_makanan is true
            ;
            if (pesanan_makanan === '1') { // Assuming true is stored as 1 in the DB
                window.location.href = "OrderPreview.php";
            }
        };
    </script>
</body>
</html>
