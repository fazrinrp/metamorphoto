<?php
include("variables.php");

$to = $_GET['to'] ?? 'Nama undangan';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:title" content="The Wedding of Silmi & Misbah" />
    <meta property="og:description"
        content="Dengan memohon Rahmat & Ridho Allah SWT, kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk menghadiri pernikahan kami." />
    <meta property="og:image" content="https://metamorphoto.web.id/silmi-misbah/img/gallery/gallery-portrait-3.jpg" />
    <meta property="og:url" content="https://metamorphoto.web.id/silmi-misbah/" />
    <title>Wedding Invitation</title>

    <link rel="icon" href="../img/icon/mp-icon64.png" type="image/png" sizes="64x64" />
    <link rel="icon" href="../img/icon/mp-icon128.png" type="image/png" sizes="128x128" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <script src="script.js?v=<?php echo time(); ?>"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ovo&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!--simplycountdown-->
    <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css?v=<?php echo time(); ?>" />
    <script src="countdown/simplyCountdown.min.js"></script>
</head>

<body>
    <div class="lock-screen" id="lockScreen">
        <div class="lock-container">
            <img class="lock-screen-img" src="img/header/header.png" alt="">
            <img src="img/prop/1.png" class="zoom-image header-top-right" alt="Top Left Image" />
            <img src="img/prop/2.png" class="zoom-image header-bottom-left" alt="Bottom Right Image" />
            <div class="lock-screen-content">
                <h4 class="pop-up-img">The Wedding of</h4>
                <h1 class="pop-up-img">
                    <?php echo $mempelai_wanita ?> & <?php echo $mempelai_pria ?>
                </h1>
                <h4 class="pop-up-img"><?php echo $tanggal_pernikahan ?></h4>
                <div class="invite-to">
                    <p>Kepada Yth:</p>
                    <p>Bapak/Ibu/Saudara/i</p>
                    <h3><?php echo $to ?></h3>
                    <button id="unlockButton" class="tombol"><img class="icon"
                            src="../assets/icons/envelope-white-icon.png" alt="">Buka Undangan</button>
                </div>
            </div>
        </div>
    </div>

    <audio id="backgroundMusic" src="audio/bg-music.mp3"></audio>

    <div id="mainContent" class="container" style="display: none">
        <?php include("sections/header.php") ?>
        <?php include("sections/invitation.php") ?>
        <?php include("sections/info.php") ?>
        <?php include("sections/details.php") ?>
        <?php include("sections/story.php") ?>
        <?php include("sections/gallery.php") ?>
        <?php include("sections/gift.php") ?>
        <?php include("sections/wishes.php") ?>
        <?php include("sections/closing.php") ?>

        <?php include("../section-general/footer.php") ?>
    </div>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

<script>
const unlockButton = document.getElementById("unlockButton");
const lockScreen = document.getElementById("lockScreen");
const mainContent = document.getElementById("mainContent");
const backgroundMusic = document.getElementById("backgroundMusic");

unlockButton.addEventListener("click", () => {
    lockScreen.style.display = "none";
    mainContent.style.display = "block";

    // Play the song when the button is clicked
    backgroundMusic.play();
});
</script>

<script>
function disableScroll() {
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

    window.onscroll = function() {
        window.scrollTo(scrollTop, scrollLeft);
    };
    rootElement.style.scrollBehavior = "auto";
}

function enableScroll() {
    window.onscroll = function() {};
    rootElement.style.scrollBehavior = "smooth";
}
</script>

<script>
simplyCountdown(".simply-countdown", {
    year: <?php echo $countdown_year ?>, // required
    month: <?php echo $countdown_month ?>, // required
    day: <?php echo $countdown_day ?>, // required
    hours: <?php echo $countdown_hours ?>, // Default is 0 [0-23] integer
    words: {
        //words displayed into the countdown
        days: {
            singular: "Hari",
            plural: "Hari"
        },
        hours: {
            singular: "Jam",
            plural: "Jam"
        },
        minutes: {
            singular: "Menit",
            plural: "Menit"
        },
        seconds: {
            singular: "Detik",
            plural: "Detik"
        },
    },
});
</script>



<script>
document.addEventListener("DOMContentLoaded", function() {
    const popUpImages = document.querySelectorAll(
        ".pop-up-img"); // Select all images with the class 'pop-up-img'

    // Create an intersection observer to detect when each image comes into view
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add(
                        "pop-up"); // Add the 'pop-up' class to each image when it appears
                }
            });
        }, {
            threshold: 0.1
        } // Trigger when at least 10% of the image is visible
    );

    // Observe each image individually
    popUpImages.forEach((img) => {
        observer.observe(img);
    });
});
</script>