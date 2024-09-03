<?= $this->extend('NewUser/layout/app'); ?>
<?= $this->section('content'); ?>


<!-- about us section start -->
<section class="about-us-section">
    <div class="container">
        <h2>About Us</h2>
        <p>Ketahui lebih dalam apa sih Jago Digital Marketing itu.</p>
    </div>
</section>
<!-- about us section end -->

<!-- paragraf section start -->
<section class="paragraf-section">
    <div class="container">
        <h4>
            <!-- Seiring dengan kemajuan Jago Digital Marketing, prinsip-prinsip dan sasaran perusahaan dituangkan dalam visi dan misi. Pemadatan prinsip dan sasaran tersebut diharapkan dapat menjadi fondasi bagi Jago Digital Marketing serta seluruh pihak yang terlibat, mulai dari para pendiri hingga akademisi. -->
            <?= $tentang['deskripsi_tentang']; ?>
        </h4>
    </div>

</section>
<!-- paragraf section end -->

<section class="perjalanan">
    <div class="container">
        <h2 class="section-title">Perjalanan</h2>
        <p class="perjalanan-description">
            Jago Digital Marketing didirikan sejak tahun 2024 dengan tim yang terdiri dari orang-orang yang memiliki passion di bidang digital marketing dan digital advertising. Keahlian dan pengalaman kami telah menghadirkan jasa digital marketing yang efektif dan terjangkau untuk meningkatkan efektivitas pemasaran online bisnis Anda.
        </p>
    </div>
</section>

<section class="visi-misi">
    <div class="container">
        <div class="visi">
            <h3>Visi</h3>
            <p><?= $tentang['visi'] ?></p>
        </div>
        <div class="misi">
            <h3>Misi</h3>
            <p><?= $tentang['misi'] ?></p>
        </div>
    </div>
</section>

<section class="founders-section">
    <h2>Founder of Jago Digital Marketing</h2>
    <p>Siapa sih pendiri dari Jago Digital Marketing? Yuk kenalan dulu!</p>
    <div class="founders">
        <?php foreach ($founder as $founder): ?>
            <div class="founder-card">
                <img src="<?= base_url('uploads/foto_founder/' . $founder->foto_founder) ?>" alt="<?= $founder->nama_founder ?>" class="profile-img">
                <img src="<?= base_url('assets-new/images/logo.png') ?>" class="logo" alt="Logo">
                <div class="info">
                    <h3 class="card-title"><?= $founder->nama_founder ?></h3>
                    <p class="card-text"><?= $founder->jabatan_founder ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>



<!-- css for founder -->
<style>
    .founders-section {
        position: relative;
        text-align: center;
        padding: 30px 20px;
        border-radius: 20px;
        margin: 90px auto 20px;
        /* Added 50px margin-top for space above */
        max-width: 1000px;
        box-sizing: border-box;
        overflow: hidden;
    }


    .founders-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 70%;
        border-radius: 20px;
        background-color: #87D5C8;
        z-index: -1;
        border-radius: 20px 20px 0 0;
    }



    .founders-section h2,
    .founders-section p {
        margin: 0;
        padding: 0 20px;
        color: #fff;
    }

    .founders-section h2 {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .founders-section p {
        margin-bottom: 30px;
    }

    .founders {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .founder-card {
        position: relative;
        /* Needed for absolute positioning within the card */
        background-color: #fff;
        border-radius: 20px;
        overflow: hidden;
        width: 250px;
        /* Adjust width as needed */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        box-sizing: border-box;
        margin-bottom: 20px;
    }

    .founder-card img {
        border-radius: 20px;
        width: 100%;
        height: auto;

    }

    .founder-card .logo {
        position: absolute;
        top: 10px;
        left: 10px;
        width: 50px;
        /* Adjust the width as needed */
        height: auto;
        /* Maintain aspect ratio */
        object-fit: contain;
        /* Ensure image is contained within the width */
    }


    .founder-card .info {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: rgba(255, 152, 0, 0.9);
        /* Semi-transparent background for the text */
        color: #fff;
        padding: 10px;
        box-sizing: border-box;
        text-align: left;
        border-radius: 0 0 20px 20px;
        /* Match the bottom border-radius */
    }

    .founder-card h3 {
        font-size: 18px;
        /* Adjusted font size for the smaller card */
        margin: 0;
    }

    .founder-card p {
        font-size: 14px;
        /* Adjusted font size for the smaller card */
        margin: 0;
    }

    /* Responsive Design */
    @media (max-width: 900px) {
        .founders {
            flex-direction: column;
            align-items: center;
        }

        .founder-card {
            width: 80%;
        }
    }

    @media (max-width: 600px) {
        .founder-card {
            width: 100%;
            padding: 15px;
        }

        .founders-section h2 {
            font-size: 24px;
        }

        .founders-section p {
            font-size: 14px;
        }

        .founder-card h3 {
            font-size: 18px;
        }

        .founder-card p {
            font-size: 14px;
        }
    }
</style>




<!-- about us css -->
<style>
    .about-us-section {
        position: relative;
        padding: 50px 15px;
        /* Reduced from 100px to 50px */
        background: url('<?= base_url('assets-new/images/bg2.jpg') ?>') no-repeat center center;
        background-size: cover;
        min-height: 50vh;
        /* Adjusted from 0vh to 50vh for better height control */
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .about-us-section h2 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #FFFFFF;
        /* Warna teks dan garis bawah */
        margin-bottom: 10px;
        border-bottom: 3px solid #FFFFFF;
        /* Warna garis bawah */
        display: inline-block;
        padding-bottom: 5px;
        /* Memberikan sedikit ruang antara teks dan garis bawah */
    }

    .about-us-section p {
        font-size: 1.2rem;
        color: #FFFFFF;
    }
</style>

<!-- paragraf us css -->
<style>
    .paragraf-section {
        background-color: #FFFFFF;
        padding: 20px 20px;
        /* Tambahkan padding horizontal */
        text-align: center;
    }

    .paragraf-section h4 {
        color: #202020;
        margin: 0 auto 30px;
        /* Mengatur margin bawah dan sentralisasi */
        max-width: 800px;
        /* Mengatur lebar maksimal paragraf */
        line-height: 1.6;
        /* Menambah jarak antar baris */
    }
</style>

<!-- visi misi css -->
<style>
    .visi-misi-section {
        padding: 50px 0;
        background-color: #FFFFFF;
        /* Warna background sesuai dengan bagian lain */
        text-align: center;
    }

    .visi-misi-section .row {
        display: flex;
        justify-content: space-between;
    }

    .visi-misi-section .col {
        flex: 0 0 48%;
        /* Mengatur lebar kolom agar seimbang */
    }

    .visi-misi-section h3 {
        color: #000000;
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    .visi-misi-section p,
    .visi-misi-section ul {
        font-size: 1.2rem;
        color: #555;
        line-height: 1.6;
    }

    .visi-misi-section ul {
        padding-left: 20px;
        /* Memberikan indentasi pada daftar */
        list-style-type: disc;
        /* Menggunakan tanda bullet pada daftar */
    }
</style>

<!-- perjalanan for section -->
<style>
    /* Perjalanan Section */
    .perjalanan {
        background-color: #87D5C8;
        padding: 40px 0;
        text-align: center;
        color: white;
    }

    .perjalanan .section-title {
        font-size: 35px;
        color: white;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .perjalanan-description {
        max-width: 800px;
        margin: 0 auto;
        font-size: 18px;
    }

    /* Visi & Misi Section */
    .visi-misi {
        position: relative;
        padding: 40px 0;
    }

    .visi-misi::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 35%;
        /* Adjusted to 35% as per your preference */
        background-color: #87D5C8;
        z-index: -1;
        /* Sends the background behind the content */
    }

    .visi-misi .container {
        display: flex;
        justify-content: space-around;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .visi,
    .misi {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: -1px 0px 0px 7px rgba(0, 0, 0, 0.1);
        width: 45%;
        position: relative;
        z-index: 1;
        /* Ensures the cards appear above the background color */

        display: flex;
        flex-direction: column;
        justify-content: center;
        /* Vertically centers the content */
        align-items: center;
        /* Horizontally centers the content */
        text-align: center;
        /* Centers text horizontally */
    }

    .visi h3,
    .misi h3 {
        font-size: 22px;
        font-weight: bold;
        text-decoration: underline;
        /* Adds an underline to the title */
        margin-bottom: 15px;
    }

    .visi p,
    .misi p {
        font-size: 16px;
        text-align: center;
        /* Centers text horizontally */
    }
</style>


<?= $this->endsection('content'); ?>