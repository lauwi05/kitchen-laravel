<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale="1">
    <meta http-equiv="refresh" content="5"> <!-- Refresh the page every 5 seconds -->
    <title>Successful Screen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/customer.css')}}"/>

</head>

<body>
 
    <!-- Bagian dibawah ini buat nampung isian dari header/topbar/navbar-->
    <header>
        <div class="custGreetings">
            <h2>Selamat Datang <br> Customer &#128075; </h2>
        </div>
    
        <div class="namaKasir">
            <h2>Nama Kasir : </h2>
    
            <!-- Add an id to the logo -->
            <div class="logoHeader" id="fullscreenLogo">
                <img src="assets/logoCan.png" alt="Logo CanNgopi" height="70" width="70">
            </div>
        </div>
    </header>

    <!--Dibawah ini buat nampung yang ada di bagian tengah screen standby mode-->
    <div class="MiddleSection">

        <!--Ini buat icon checknya, kalo mau ganti warga, ganti HEX Codenya di fill="" ya-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#1ec221" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg> 

        <h2>Pesanan akan segera diproses!</h2>

        <p>Mohon ditunggu</p>

        <h4>No Meja: </h4>
        <p1>Order Time: </p1>
   
        
       
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
                <img src="assets/Gofood (1).png" alt="Logo GoFood" class="sizingGofood">
                <img src="assets/Grabfood (1).png" alt="Logo GrabFood" class="sizingGrabfood">
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