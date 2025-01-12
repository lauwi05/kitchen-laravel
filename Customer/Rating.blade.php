<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating</title>
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


    <div class="MiddleSection">
    <h1>Bagaimana pelayanan kami?</h1>
    <p>Berikan penilaian anda terhadap pelayanan yang kami berikan sebagai bentuk evaluasi</p>

    <!-- Star Rating -->
    <div class="ratings-wrapper">
        <form id="ratingForm" method="POST" action="rating.php">
            <div class="ratings">
                <span data-rating="1"><img src="assets/1. Yikes.png" alt="Rating 1" /></span>
                <span data-rating="2"><img src="assets/2. Meh.png" alt="Rating 2" /></span>
                <span data-rating="3"><img src="assets/3. Not Bad.png" alt="Rating 3" /></span>
                <span data-rating="4"><img src="assets/4. Cool.png" alt="Rating 4" /></span>
                <span data-rating="5"><img src="assets/5. Awesome.png" alt="Rating 5" /></span>
            </div>
            <input type="hidden" name="rating" id="ratingValue" value="">
        </form>
    </div>

        <h3 id="rating-feedback" style="display: none; color: #880000; font-size: 20px; text-align: center; margin-top: 20px;"></h3>
        <p id="additional-feedback" style="display: none; color: #880000; font-size: 18px; text-align: center; margin-top: 30px;"></p>
    </div>


    <!--Dibawah ini js buat munculin pesan ke cust setelah dia input starsnya-->
    <script>
       const stars = document.querySelectorAll('.ratings span');
        const feedback = document.getElementById('rating-feedback');
        const additionalFeedback = document.getElementById('additional-feedback');
        const ratingForm = document.getElementById('ratingForm');
        const ratingInput = document.getElementById('ratingValue');

    // Feedback messages based on rating
    const feedbackMessages = {
        1: "Yikes",
        2: "Meh",
        3: "Not Bad",
        4: "Cool",
        5: "Awesome"
    };

    const additionalMessages = {
        1: "Kami mohon maaf mendengar Anda sangat tidak puas. Mohon beri tahu kami bagaimana kami bisa memperbaiki layanan kami.",
        2: "Kami mohon maaf atas ketidakpuasan Anda. Kami menghargai masukan Anda dan akan berusaha untuk menjadi lebih baik.",
        3: "Terima kasih atas masukan Anda! Kami berusaha untuk terus meningkatkan layanan kami.",
        4: "Kami senang Anda puas! Kami selalu siap untuk membuat pengalaman Anda lebih baik.",
        5: "Terima kasih atas penilaian yang luar biasa! Kami sangat senang Anda sangat puas dengan layanan kami."
    };

        stars.forEach(star => {
        star.addEventListener('click', () => {
            const rating = star.getAttribute('data-rating');
            ratingInput.value = rating;

            feedback.textContent = feedbackMessages[rating];
            feedback.style.display = 'block';
            additionalFeedback.textContent = additionalMessages[rating];
            additionalFeedback.style.display = 'block';

            // Disable further clicks on stars and highlight selected stars
            stars.forEach(s => s.style.pointerEvents = 'none');
            stars.forEach(s => s.style.color = '');
            star.style.color = 'gold';
            let currentStar = star;
            while (currentStar) {
                currentStar.style.color = 'gold';
                currentStar = currentStar.previousElementSibling;
            }
            
            // Pass the rating to the submitRatingAJAX function
            submitRatingAJAX(rating);
        });
    });

    function submitRatingAJAX(rating) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "rating.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log("Rating submitted successfully.");
                console.log("Server response:", xhr.responseText);
            }
        };
        
        // Send the form data with the rating value
        xhr.send(`rating=${rating}`);
    }
        
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
    //document.getElementById('fullscreenLogo').addEventListener('click', toggleFullScreen);
    setTimeout(function() {
            window.location.href = "standbyscreen.php";
        }, 10000);

    </script>


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
    
    
</body>

</html>
