<section class="details">
    <img src="img/prop/7.png" class="zoom-rotate-image details-top-left" alt="Top Left Image" />
    <img src="img/prop/8.png" class="zoom-rotate-image details-bottom-right" alt="Bottom Right Image" />
    <p>Acara pernikahan akan dilaksanakan pada:</p>
    <div class="pop-up-img card justify-content-center">

        <h3>Akad Nikah</h3>
        <h4><?php echo $tanggal_akad_nikah ?></h4>
        <h4><?php echo $waktu_akad_nikah ?></h4>
        <h5><?php echo $alamat_akad_nikah ?></h5>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3959.959654995181!2d107.6345278!3d-7.014027800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMDAnNTAuNSJTIDEwN8KwMzgnMDQuMyJF!5e0!3m2!1sen!2sid!4v1743776830970!5m2!1sen!2sid"
            width="80%" height="30%" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="maps"><a class="tombol" href="<?php echo $maps_akad_nikah ?>" target="_blank">Lihat
                Peta</a></div>
    </div>

    <div class="pop-up-img card justify-content-center">

        <h3>Resepsi</h3>
        <h4><?php echo $tanggal_resepsi ?></h4>
        <h4><?php echo $waktu_resepsi ?></h4>
        <h5><?php echo $alamat_resepsi ?></h5>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3959.959654995181!2d107.6345278!3d-7.014027800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMDAnNTAuNSJTIDEwN8KwMzgnMDQuMyJF!5e0!3m2!1sen!2sid!4v1743776830970!5m2!1sen!2sid"
            width="80%" height="30%" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="maps"><a class="tombol" href="<?php echo $maps_resepsi ?>" target="_blank">Lihat
                Peta</a></div>
    </div>

    <div class="pop-up-img countdown">
        <h3>MENUJU HARI BAHAGIA</h3>
        <div class="simply-countdown mt-5"></div>
    </div>
</section>