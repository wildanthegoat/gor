<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('public/img/style.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
        rel="stylesheet"
    />
        <title>HOME PAGE</title>
    </head>

    <body id="home"> 
         <!-- CSS -->
    <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
  font-family: "poppins", sans-serif;
}

.container {
  width: 90%;
  margin-inline: auto;
}

header{
    height: 100vh;
    background-image: url("{{ asset('img/image.jpg') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.navigation{
    width: 100%; 
    padding: 10px 0 10px 0;

}

.box-navigation {
    display: flex;
    flex-direction: row;
    justify-content: space-between; 
    align-items: center;
  }


.box ul {
    list-style: none;
    display: flex;
    justify-content: center; 

}

.box li {
    margin-left: 40px;
}

.box li a {
    text-decoration: none;
    color: white;
    transition: all .3s ease;
}

.navigation .box-navigation .box:nth-child(1) h1{
    font-size: 38px;
    color: white;
}

.navigation .box-navigation .box:nth-child(2) ul li a:hover{
    color: greenyellow;
}

.navigation .box-navigation .box:nth-child(3) {
    display: none;
}

.navigation .box-navigation .box:nth-child(2) ul li i {
    display: none;
}
 
@media screen and (max-width: 990px) {
    .navigation .box-navigation .box:nth-child(2) {
        display: flex;
        position: absolute;
        top: 50px;
        right: 50px;
        background-color: white;
        width: 250px;
        border-radius: 10px;
        opacity: 0;
        transition: all .3s ease;

    }


    
    .navigation .box-navigation .menu-navigation.menu-active{
        opacity: 1;
        top: 100px;
    }

    .navigation .box-navigation .box:nth-child(2) ul {
        flex-direction: column;
    }

    .navigation .box-navigation .box:nth-child(2) ul li a {
        color: black;
    }

    .navigation .box-navigation .box:nth-child(2) ul li {
        margin-top: 15px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        margin-left: 0;
    }

    .navigation .box-navigation .box:nth-child(2) ul li i {
        display: flex;
        margin-inline: 10px;
        font-size: 24px;
    }

    .navigation .box-navigation .box:nth-child(3) {
        display: flex;
        align-items: center;
    }

    .about .box-about {
        display: flex;
        flex-direction: column-reverse;
    }


}


.navigation .box-navigation .box:nth-child(3) i {
    font-size: 28px;
}

@media screen and (max-width: 550px) {
    .navigation .box-navigation .box:nth-child(2) {
        width: 150px;
    }

    
    .about .box-about .box:nth-child(2) img{
        width: 200px;
    }
} 
    




/* hero style */
header .hero {
    position: absolute;
    top: 20%;
    right: 40%;
    left: 10%;
    font-size: 28px;

}

header .hero h1{
    color: white;
}

header .hero h1.gor{
    color: #d1e231;
}

header .hero button{
    font-size: 15px;
    background-color: #d1e231;
    block-size: 40px;
    left: 5px;
    border-radius: 5px;
    padding: 10px 20px;
    text-transform: uppercase;
    cursor: pointer;
    font-weight: bold;
}

header .hero button:hover{
    background-color: white;
}

@media  screen and (max-width: 768px){
    header .hero h1{
        font-size: 28px;
       
    }
}
/* hero style */


/* about style */
.about {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    background-color:azure;
}

.about .box-about {
    display: flex;
    align-items: center;
    justify-content: center;
}

.about .box-about .box:nth-child(1) {
    padding: 30px;
}

.about .box-about .box:nth-child(1) h1{
    text-align: center;
    margin-bottom: 20px;
}

.about .box-about .box:nth-child(1) p{
    text-align: center;
    font-size: 12px;
}
.about .box-about .box:nth-child(2) img{
    border-radius: 10px;
    width: 400px;
    
}

@media screen and (max-width:550px ){
    .about .box-about .box:nth-child(2) img{
        width: 300px;
    }
}
    
/* about style */


/* Tata Cara style */

.cara{
    width: 100%;
    height: 100vh;
    display:flex;
    flex-direction: column;
    align-items: center;
    background-image: url("{{ asset('img/kok.jpeg') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;

}
.cara .box-cara{
    width: 100%;
    height: 100vh;
    display:flex;
    flex-direction: column;
    align-items: center;
    


}


.cara .box-cara .box:nth-child(1) {
    text-align: center;
    margin-top: 50px;
    padding: 20px;
    font-size: 25px;
   
}

.cara .box-cara .box:nth-child(2){
    
    background-color:azure;
    opacity: 90%;
    border: 1px solid #ccc;
    margin: 10px auto;
    font-size: 15px;
    
    
}

.cara .box-cara .box:nth-child(2) p{
    margin-inline: 8px;
    margin-bottom: 8px;
}
/* Tata Cara style */


/* Kontak style */
.kontak {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.kontak .box-kontak .box:nth-child(1) {
    text-align: center;
    background-color: #ccc;
    font-weight: bold;
}

.kontak .box-kontak .box-map{
   
    display:flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    margin-top: 50px;
    margin-left: 0 auto;
   
    
}

.kontak .box-kontak .box-map .box{
    margin-right: 120px;
}

/* Kontak style */
    


   </style>

      <!-- HTML -->
      <header>
            <!-- navigation -->
            <section class="navigation" id="navigation">
                <div class="container">
                    <div class="box-navigation">
                        <div class="box">
                        <h1>Logo</h1>
                        </div>
                    <div class="box menu-navigation">
                        <ul>
                            <li><i class="ri-home-3-line"></i>
                                <a href="#home">Home</a></li>
                            <li><i class="ri-information-line"></i>
                                <a href="#about">About</a></li>
                            <li><i class="ri-question-mark"></i>
                                <a href="#cara">Tata Cara</a></li>
                            <li><i class="ri-contacts-book-line"></i>
                                <a href="#kontak">Kontak</a></li>
                            <li><i class="ri-user-line"></i>
                                <a href="{{url('login')}}">LOGIN</a></li>
                            </ul>
                        </div>
                        <div class="box menu-bar">
                        <i class="ri-menu-3-fill" style="color: white;"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!-- navigation -->


            <!-- hero -->
            <section class="hero" id="hero">
                <h1>Bermain Badminton Bersama Hanya di</h1>
                <h1 class="gor">GOR PURNAMA BANJARMASIN</h1>
                <button>Booking Sekarang</button>
            </section>
            <!-- hero -->
        </header>

        <!-- About -->
        <section class="about" id="about">
            <div class="container">
                <div class="box-about">
                    <div class="box">
                        <h1>Tentang Kami</h1>
                        <p>
                            Kami adalah sebuah platform yang bertujuan untuk menyediakan solusi terbaik 
                            bagi para penggemar bulu tangkis di Banjarmasin dan sekitarnya. Dengan fokus pada 
                            kemudahan, kenyamanan, dan efisiensi, kami memungkinkan pengguna untuk dengan mudah
                            memesan lapangan bulu tangkis secara online. memanfaatkan fasilitas yang tersedia 
                            di GOR Purnama. Kami memahami betapa berharganya waktu anda. itulah sebabnya kami
                            berkomitmen untuk menyediakan pengalaman pemesanan yang mulus dan cepat melalui 
                            platform web kami. Dengan beberapa klik, Anda dapat mereservasi lapangan bulu tangkis 
                            sesuai preferensi Anda, tanpa harus mengurusnya secara langsung di tempat.
                        </p>
                    </div>
                    <div class="box">
                        <img src="{{ asset('img/badmintoon.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- About -->

        <!-- Tata Cara -->
        <section class="cara" id="cara">
            <div class="container">
                <div class="box-cara">
                    <div class="box">
                        <h1>Tata Cara Pemesanan</h1>
                        <p>Berikut ini akan disajikan tata cara pemesanannya:</p>
                    </div>
                    <div class="box">
                        <p>1. Pengguna harus membuat akun atau mendaftar sebagai anggota pada website ini.</p>
                        <p>2. Pengguna dapat mengecek lapangan dengan menginputkan variasi lapangan, tanggal main, dan jumlah rentang waktu.</p>
                        <p>3. Pengguna harus memilih tanggal dan waktu, melihat harga sewa lapangan, mengisi jumlah jam atau durasi, melengkapi formulir pendaftaran.</p>
                        <p>4. Bila dirasa suda selesai, pengguna dapat mengklik tombol pesan.</p>
                        <p>5. Lalu pengguna akan di arahkan ke menu pembayaran.</p>
                        <p>6. Lakukan pembayaran ke rekening yang sudah tertera dan upload bukti pembayaran</p>
                        <p>7. Setelah upload, tunggu admin menyetujui pembayaran anda.</p>
                        <p>8. Setelah status sudah di setujui, silahkan datang ke GOR Purnama Banjarmasin sesuai jadwal yang dipesan.</p>
                    </div>
            </div>
        </section>
        <!-- Tata Cara -->


        <!-- kontak -->
        <section class="kontak" id="kontak">
            <div class="container">
                <div class="box-kontak">
                    <div class="box">
                        <h1>Kontak Kami</h1>
                    </div>
                    <div class="box-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15932.844129232935!2d114.57550113151837!3d-3.2978632427522445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de4230963790c57%3A0x902859712cc02755!2sLambung%20Mangkurat%20University%20-%20Campus%20I%20Banjarmasin!5e0!3m2!1sen!2sid!4v1714887394717!5m2!1sen!2sid" 
                            width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div class="box">
                                <p>Whatsapp<a href="https://api.whatsapp.com/send?phone=628125565534">+628125565534</a></p>
                                <p>Instagram<a href="https://www.instagram.com/muhammad.zulvanoor/">@muhammad.zulvanoor</a></p>
                            </div>
                    </div>
                    <div class="box">
                        <tr>Gg. Brunei, Pemurus Dalam, Kec. Banjarmasin Selatan,</tr>
                        <br>
                        <tr>Kota. Banjarmasin, Kalimantan Selatan 70654</tr>
                    </div>
                </div>
            </div>
        </section>
        <!-- kontak -->

    <script>
        const menuBar = document.querySelector(".menu-bar");
        const menuNav = document.querySelector(".menu-navigation");

        menuBar.addEventListener('click', function(){
        menuNav.classList.toggle('menu-active');
        })
    </script>
    </body>
</html>

