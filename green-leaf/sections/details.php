<section class="details">
    <img src="img/prop/7.png" class="zoom-rotate-image details-top-left" alt="Top Left Image" />
    <img src="img/prop/8.png" class="zoom-rotate-image details-bottom-right" alt="Bottom Right Image" />
    <p>Acara pernikahan akan dilaksanakan pada:</p>
    <div class="pop-up-img card justify-content-center">
        <!-- <img src="img/card.png" alt="" /> -->
        <h3>Akad Nikah</h3>
        <h4><?php echo $tanggal_akad_nikah ?></h4>
        <h4><?php echo $waktu_akad_nikah ?></h4>
        <h5><?php echo $alamat_akad_nikah ?></h5>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15837.63906133596!2d107.548293!3d-7.0784013!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ed2ae2327e3f%3A0xefbb3112f8ddd4e4!2sLa%20Cabin%20(Cafe%20dan%20Resto)!5e0!3m2!1sen!2sid!4v1698496855354!5m2!1sen!2sid"
            width="80%" height="30%" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="maps"><a class="tombol" href="<?php echo $maps_akad_nikah ?>" target="_blank">Lihat
                Peta</a></div>
    </div>

    <div class="pop-up-img card justify-content-center">
        <!-- <img src="img/card.png" alt="" /> -->
        <h3>Resepsi</h3>
        <h4><?php echo $tanggal_resepsi ?></h4>
        <h4><?php echo $waktu_resepsi ?></h4>
        <h5><?php echo $alamat_resepsi ?></h5>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15837.63906133596!2d107.548293!3d-7.0784013!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ed2ae2327e3f%3A0xefbb3112f8ddd4e4!2sLa%20Cabin%20(Cafe%20dan%20Resto)!5e0!3m2!1sen!2sid!4v1698496855354!5m2!1sen!2sid"
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