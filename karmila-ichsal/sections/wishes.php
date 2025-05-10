<section class="wishes">
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
                    <label for="rsvp">RSVP</label>
                    <select class="form-control" id="rsvp">
                        <option value="" disabled selected>Pilih RSVP</option> <!-- Placeholder option -->
                        <option value="1 Orang">Hadir</option>
                        <option value="2 Orang">Tidak Hadir</option>
                    </select>
                </div>
                <div class="pop-up-img form-group">
                    <label for="message">Pesan</label>
                    <textarea class="form-control" id="message" rows="4"></textarea>
                </div>
                <button type="submit" class="pop-up-img btn btn-primary tombol send-message">Kirim</button>
            </form>
            <div class="chat-box pop-up-img" id="chat-box">
                <!-- Chat messages will appear here -->
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById("wishForm").addEventListener("submit", function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        var name = document.getElementById("name").value;
        var rsvp = document.getElementById("rsvp").value;
        var message = document.getElementById("message").value;
        var submitButton = document.querySelector(".send-message"); // Select the submit button

        // Show loading state
        submitButton.disabled = true;
        submitButton.textContent = "Sedang dikirim...";

        // Google Apps Script Web App URL
        var scriptURL =
            "https://script.google.com/macros/s/AKfycbxSZ8QAIGJBT7FXfEeDzKvYH65I4dnWlGonQzmMp0LEiolKF0S6hy5n5D-NRtUajPp3/exec";

        // Create a new FormData object to send the data
        var formData = new FormData();
        formData.append("nama", name);
        formData.append("pesan", message);
        formData.append("rsvp", rsvp);

        // Send data to Google Apps Script using fetch
        fetch(scriptURL, {
                method: "POST",
                mode: 'no-cors', // This disables CORS checks
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

    async function loadChatMessages() {
        try {
            // Fetch data from Google Apps Script (replace with your Web App URL)
            const response = await fetch(
                'https://script.google.com/macros/s/AKfycbxSZ8QAIGJBT7FXfEeDzKvYH65I4dnWlGonQzmMp0LEiolKF0S6hy5n5D-NRtUajPp3/exec', {
                    method: 'GET',
                    mode: 'cors',
                });

            // Parse the response JSON
            const chatData = await response.json();

            // Add messages to the chat box
            chatData.forEach(item => {
                addMessageToChatBox(item.name, item.message);
                console.log(item.name);
            });
        } catch (error) {
            console.error('Error fetching chat messages:', error);
        }
    }

    // Call this function when your page loads to populate the chat box
    loadChatMessages();

    function addMessageToChatBox(name, message) {
        const chatBox = document.getElementById('chat-box');
        const chatMessage = document.createElement('div');
        chatMessage.classList.add('chat-message'); // Add a class for styling
        chatMessage.innerHTML = `<strong>${name}:</strong> ${message}`;
        chatBox.appendChild(chatMessage);
        chatBox.scrollTop = chatBox.scrollHeight; // Scroll to the latest message
    }
</script>