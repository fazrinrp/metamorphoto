<section class="wishes">
    <img src="img/prop/10.png" class="zoom-image wishes-top-left" alt="Top Left Image" />
    <div class="best-wishes">
        <h2 class="pop-up-img">Best Wishes</h2>
        <p class="pop-up-img">Jika ingin menyampaikan ucapan, silakan isi form di bawah ini lalu ketuk kirim
        </p>
        <div class="wish-card">
            <form id="wishForm">
                <div class="pop-up-img form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" />
                </div>
                <div class="pop-up-img form-group">
                    <label for="message">Pesan</label>
                    <textarea class="form-control" id="message" rows="4"></textarea>
                </div>
                <button type="submit" class="pop-up-img btn btn-primary tombol send-message">Kirim</button>
            </form>
        </div>
    </div>
</section>

<script>
    document.getElementById("wishForm").addEventListener("submit", function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        var name = document.getElementById("name").value;
        var message = document.getElementById("message").value;
        var submitButton = document.querySelector(".send-message"); // Select the submit button

        // Show loading state
        submitButton.disabled = true;
        submitButton.textContent = "Sedang dikirim...";

        // Google Apps Script Web App URL
        var scriptURL =
            "<?php echo $ucapan_link; ?>";

        // Create a new FormData object to send the data
        var formData = new FormData();
        formData.append("nama", name);
        formData.append("pesan", message);

        // Send data to Google Apps Script using fetch
        fetch(scriptURL, {
                method: "POST",
                body: formData,
            })
            .then((response) => response.text())
            .then((data) => {
                alert("Ucapan berhasil dikirim!");
                // Reset form
                document.getElementById("wishForm").reset();

                // Restore the button state
                submitButton.disabled = false;
                submitButton.textContent = "Kirim";
            })
            .catch((error) => {
                console.error("Error!", error.message);

                // Restore the button state even if there is an error
                submitButton.disabled = false;
                submitButton.textContent = "Kirim";
                alert("Terjadi kesalahan. Silakan coba lagi.");
            });
    });
</script>