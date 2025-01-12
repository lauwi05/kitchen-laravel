<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ini buat jadi responsive-->
    <title>Kitchen</title> <!--nama webpage-->
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"> <!--ini font poppins kita-->
<link rel="stylesheet" href="{{asset('css/kitchen.css')}}"/>
</head>
<body>
    <div class="header">
        <div class="order-count">Jumlah pesanan: 4</div>
        <img src="assets/logo_canngopi.png" height="50" alt="logo cango">
        <div class="cashier-name">Nama Kasir: Andrew</div>
    </div>
    <div class="order-container">
         <!-- Container Order 1 -->
         <div class="order">
            <div class="order-header">
               <h2 class="order-id">Order ID <span class="order-id-code">#83453</span></h2>
               <p class="order-time">13:00</p>
            </div>
            <h4 class="pesanan">Pesanan</h4>
            <ul class="order-list">
                   <li>
                       <img src="assets/nasi_goreng_gila.jpg" alt="Nasi Goreng Gila">
                       <div class="item-detail">
                           <div>
                               <p class="menu-name">Nasi Goreng Gila</p>
                               <p class="menu-notes">- gak pedas</p>
                           </div>
                           <p class="quantity">x1</p>
                       </div>
                   </li>
                   <li>
                       <img src="assets/creme_brulee.jpg" alt="Creme Brulee">
                       <div class="item-detail">
                           <p class="menu-name">Creme Brulee</p>
                           <p class="quantity">x2</p>
                       </div>
                   </li>
                   <li>
                       <img src="assets/sweet_iced_tea.jpg" alt="Sweet Iced Tea">
                       <div class="item-detail">
                           <p class="menu-name">Sweet Iced Tea</p>
                           <p class="quantity">x2</p>
                       </div>
                   </li>
                   <li>
                    <img src="assets/sweet_iced_tea.jpg" alt="Sweet Iced Tea">
                    <div class="item-detail">
                        <p class="menu-name">Sweet Iced Tea</p>
                        <p class="quantity">x2</p>
                    </div>
                    </li>
                    <li>
                        <img src="assets/sweet_iced_tea.jpg" alt="Sweet Iced Tea">
                        <div class="item-detail">
                            <p class="menu-name">Sweet Iced Tea</p>
                            <p class="quantity">x2</p>
                        </div>
                    </li>
                </ul>
            <label class="more-info">1 item dibawah</label>
            <hr class="broken-line">
            <div class="order-background-cover"></div>
            <button class="complete-btn">Selesai</button>
        </div>

        <!-- Container Order 2 -->
        <div class="order">
            <div class="order-header">
               <h2 class="order-id">Order ID <span class="order-id-code">#83454</span></h2>
               <p class="order-time">13:05</p>
            </div>
            <h4 class="pesanan">Pesanan</h4>
            <ul class="order-list">
                   <li>
                       <img src="assets/nasi_goreng_gila.jpg" alt="Nasi Goreng Gila">
                       <div class="item-detail">
                           <div>
                               <p class="menu-name">Nasi Goreng Gila</p>
                               <p class="menu-notes">- pedas sedang</p>
                           </div>
                           <p class="quantity">x1</p>
                       </div>
                   </li>
                   <li>
                       <img src="assets/creme_brulee.jpg" alt="Creme Brulee">
                       <div class="item-detail">
                           <p class="menu-name">Creme Brulee</p>
                           <p class="quantity">x1</p>
                       </div>
                   </li>
                   <li>
                       <img src="assets/sweet_iced_tea.jpg" alt="Sweet Iced Tea">
                       <div class="item-detail">
                           <p class="menu-name">Sweet Iced Tea</p>
                           <p class="quantity">x1</p>
                       </div>
                   </li>
            </ul>
            <hr class="broken-line">
            <div class="order-background-cover"></div>
            <button class="complete-btn">Selesai</button>
        </div>

        <!-- Container Order 3 -->
        <div class="order">
            <div class="order-header">
               <h2 class="order-id">Order ID <span class="order-id-code">#83453</span></h2>
               <p class="order-time">13:00</p>
            </div>
            <h4 class="pesanan">Pesanan</h4>
            <ul class="order-list">
                   <li>
                       <img src="assets/nasi_goreng_gila.jpg" alt="Nasi Goreng Gila">
                       <div class="item-detail">
                           <div>
                               <p class="menu-name">Nasi Goreng Gila</p>
                               <p class="menu-notes">- gak pedas</p>
                           </div>
                           <p class="quantity">x1</p>
                       </div>
                   </li>
                   <li>
                       <img src="assets/creme_brulee.jpg" alt="Creme Brulee">
                       <div class="item-detail">
                           <p class="menu-name">Creme Brulee</p>
                           <p class="quantity">x2</p>
                       </div>
                   </li>
                   <li>
                       <img src="assets/sweet_iced_tea.jpg" alt="Sweet Iced Tea">
                       <div class="item-detail">
                           <p class="menu-name">Sweet Iced Tea</p>
                           <p class="quantity">x2</p>
                       </div>
                   </li>
                   <li>
                    <img src="assets/sweet_iced_tea.jpg" alt="Sweet Iced Tea">
                    <div class="item-detail">
                        <p class="menu-name">Sweet Iced Tea</p>
                        <p class="quantity">x2</p>
                    </div>
                    </li>
                    <li>
                        <img src="assets/sweet_iced_tea.jpg" alt="Sweet Iced Tea">
                        <div class="item-detail">
                            <p class="menu-name">Sweet Iced Tea</p>
                            <p class="quantity">x2</p>
                        </div>
                    </li>
                </ul>
            <!-- <label class="more-info">1 item dibawah</label> -->
            <hr class="broken-line">
            <div class="order-background-cover"></div>
            <button class="complete-btn">Selesai</button>
        </div>

        <!-- Container Order 4 -->
        <div class="order">
            <div class="order-header">
               <h2 class="order-id">Order ID <span class="order-id-code">#83456</span></h2>
               <p class="order-time">13:15</p>
            </div>
            <h4 class="pesanan">Pesanan</h4>
            <ul class="order-list">
                   <li>
                       <img src="assets/nasi_goreng_gila.jpg" alt="Nasi Goreng Gila">
                       <div class="item-detail">
                           <div>
                               <p class="menu-name">Nasi Goreng Gila</p>
                               <p class="menu-notes">- ekstra pedas</p>
                           </div>
                           <p class="quantity">x1</p>
                       </div>
                   </li>
                   <li>
                       <img src="assets/creme_brulee.jpg" alt="Creme Brulee">
                       <div class="item-detail">
                           <p class="menu-name">Creme Brulee</p>
                           <p class="quantity">x2</p>
                       </div>
                   </li>
                   <li>
                       <img src="assets/sweet_iced_tea.jpg" alt="Sweet Iced Tea">
                       <div class="item-detail">
                           <p class="menu-name">Sweet Iced Tea</p>
                           <p class="quantity">x2</p>
                       </div>
                   </li>
            </ul>
            <hr class="broken-line">
            <div class="order-background-cover"></div>
            <button class="complete-btn">Selesai</button>
        </div>
    </div>
    <div class="footer">
        <p id="current-time">9:38:10</p>
        <script>
            let time = document.getElementById("current-time");
            setInterval(() => {
                let d = new Date();
                time.innerHTML = d.toLocaleTimeString();
            }, 1000);
        </script>
    </div>
</body>
</html>
