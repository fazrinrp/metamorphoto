<section class="details">
    <img src="img/prop/7.png" class="zoom-rotate-image details-top-left" alt="Top Left Image" />
    <img src="img/prop/8.png" class="zoom-rotate-image details-bottom-right" alt="Bottom Right Image" />
    <p>Acara pernikahan akan dilaksanakan pada:</p>
    <div class="pop-up-img card justify-content-center">

        <h3>Akad Nikah</h3>
        <h4><?php echo $tanggal_akad_nikah ?></h4>
        <h4><?php echo $waktu_akad_nikah ?></h4>
        <h5><?php echo $alamat_akad_nikah ?></h5>
        <div class="maps"><a class="tombol" href="<?php echo $maps_akad_nikah ?>" target="_blank">Lihat
                Peta</a></div>
    </div>

    <div class="pop-up-img card justify-content-center">

        <h3>Resepsi</h3>
        <h4><?php echo $tanggal_resepsi ?></h4>
        <h4><?php echo $waktu_resepsi ?></h4>
        <h5><?php echo $alamat_resepsi ?></h5>
        <div class="maps"><a class="tombol" href="<?php echo $maps_resepsi ?>" target="_blank">Lihat
                Peta</a></div>
    </div>

    <div class="pop-up-img countdown">
        <h3>MENUJU HARI BAHAGIA</h3>
        <div class="simply-countdown mt-5"></div>
    </div>
</section>