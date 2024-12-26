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
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5601.018061567846!2d107.69917419846439!3d-6.948074790514837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c38b3b833aaf%3A0xfa194c3af7525217!2sMasjid%20Raya%20Al%20Jabbar!5e0!3m2!1sen!2sid!4v1735226986914!5m2!1sen!2sid"
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
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5601.018061567846!2d107.69917419846439!3d-6.948074790514837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c38b3b833aaf%3A0xfa194c3af7525217!2sMasjid%20Raya%20Al%20Jabbar!5e0!3m2!1sen!2sid!4v1735226986914!5m2!1sen!2sid"
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