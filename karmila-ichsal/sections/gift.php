<section class="gift">
    <div>
        <h2 class="pop-up-img">Gift</h2>
        <p class="pop-up-img">Kehadiran anda merupakan hadiah terbaik yang bisa kami harapkan. Namun jika
            anda
            bermaksud untuk mengirimkan hadiah pernikahan lain, silahkan ketuk tombol di bawah ini</p>
    </div>
    <a class="tombol gift-button" href="#" id="toggleDiv">Ketuk untuk memberi hadiah</a>

    <div id="hiddenContent" class="hidden">
        <div class="pop-up-img giftcard justify-content-center">
            <img class="bank" src="img/logo-bank/bank-bca.png" alt="" />
            <h5>
                <?php echo $no_rek_bank1 ?><br />
                atas nama <br /><?php echo $an_rek_bank1 ?>
            </h5>
            <div class="copy"><button class="tombol" onclick="copyBank1()">Salin</button></div>
        </div>

        <div class="pop-up-img giftcard justify-content-center">
            <img class="bank" src="img/logo-bank/bank-bca.png" alt="" />
            <h5>
                <?php echo $no_rek_bank2 ?> <br />
                atas nama <br /><?php echo $an_rek_bank2 ?>
            </h5>
            <div class="copy"><button class="tombol" onclick="copyBank2()">Salin</button></div>
        </div>
    </div>
</section>

<script>
    document.getElementById("toggleDiv").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default action of the a tag
        var content = document.getElementById("hiddenContent");

        // Toggle the visibility of the content
        if (content.style.display === "none" || content.style.display === "") {
            content.style.display = "block";
            this.textContent = "Tutup"; // Change the text of the a tag
        } else {
            content.style.display = "none";
            this.textContent = "Ketuk untuk memberi hadiah";
        }
    });
</script>

<script>
    function copyBank1() {
        const textToCopy = <?php echo $no_rek_bank1 ?>;
        const tempElement = document.createElement("textarea");
        tempElement.value = textToCopy;
        document.body.appendChild(tempElement);
        tempElement.select();
        document.execCommand("copy");
        document.body.removeChild(tempElement);
    }

    function copyBank2() {
        const textToCopy = <?php echo $no_rek_bank2 ?>;
        const tempElement = document.createElement("textarea");
        tempElement.value = textToCopy;
        document.body.appendChild(tempElement);
        tempElement.select();
        document.execCommand("copy");
        document.body.removeChild(tempElement);
    }
</script>