<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Bouchon Anglais - Contact</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./styles/img/favicon.ico">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/menu.css">
    <link rel="stylesheet" href="./styles/contact.css">
    <link rel="stylesheet" href="./styles/defilement.css">
</head>

<body>
    <header>
        <div class="nav1">
            <a href="index.html" class="logoContainer">
                <img src="./styles/img/logo.png" class="logo" alt="logo de l'exposition">
            </a>
        </div>
        <div class="mobile-nav-button">
            <div class="mobile-nav-button__line"></div>
            <div class="mobile-nav-button__line"></div>
            <div class="mobile-nav-button__line"></div>
        </div>
        <nav class="mobile-menu">
            <ul>
                <li><a href="index.html" class="burgerLinks">Accueil</a></li>
                <li><a href="tasting.html" class="burgerLinks">Dégustations</a></li>
                <li><a href="services.html" class="burgerLinks">Services</a></li>
                <li><a href="about.html" class="burgerLinks">À propos</a></li>
                <li><a href="contact.php" class="burgerLinks">Contact</a></li>
            </ul>
        </nav>

        <div class="nav2">
            <a href="index.html" class="logoLink">
                <img src="./styles/img/logo.png" class="logo" alt="logo de l'exposition">
            </a>
            <a href="index.html" class="navLink">Accueil</a>
            <a href="tasting.html" class="navLink ">Dégustations</a>
            <a href="services.html" class="navLink">Services</a>
            <a href="about.html" class="navLink">À propos</a>
            <a href="contact.php" class="navLink">Contact</a>
        </div>
    </header>
    <h1 class="pacifico red">Contact</h1>
    <?php 
    if (isset($_GET["err"]) && $_GET["err"] === "mail"){  
            echo "<p class=\"message-form\">L'adresse mail que vous avez saisie n'est pas valide.</p>";         
    }

     if (isset($_GET["message"] )){  
            echo "<p class=\"message-form\">Votre message a bien été envoyé.</p>";
    } 

    ?>

    <section class="contact">
        <form action="./traiteContact.php" method="POST">
            <p>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </p>
            <p>
                <label for="firstname">Prénom :</label>
                <input type="text" id="firstname" name="firstname" required>
            </p>
            <p>
                <label for="phone">Téléphone :</label>
                <input type="tel" id="phone" name="phone" required>
            </p>
            <p>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </p>
            <p>
                <label for="subject">Objet :</label>
                <input type="text" id="subject" name="subject" required>
            </p>
            <p class="textarea">
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
            </p>
            <p>
                <input type="submit" value="Envoyer">
            </p>
        </form>
        <div class="infos-card">
            <div class="all-infos">
                <div class="one-info">
                    <img src="./styles/img/contactMap.svg" alt="">
                    <p>2 allée Pierre de Coubertin, 78000 Versailles, France</p>
                </div>
                <div class="one-info">
                    <img src="./styles/img/contactTel.svg" alt="">
                    <p>06 18 38 38 74</p>
                </div>
                <div class="one-info">
                    <img src="./styles/img/contactMail.svg" alt="">
                    <p>felicity@lebouchonanglais.com</p>
                </div>
                <div class="one-info">
                    <img src="./styles/img/facebook.svg" alt="">
                    <p>@bouchonanglais</p>
                </div>
                <div class="one-info">
                    <img src="./styles/img/contactLinkedin.svg" alt="">
                    <p>https://www.linkedin.com/company/le-bouchon-anglais/</p>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.92161662374!2d2.1327149765095736!3d48.80247460463975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67db453455655%3A0xb67fc504cda4b62e!2s2%20All.%20Pierre%20de%20Coubertin%2C%2078000%20Versailles!5e0!3m2!1sfr!2sfr!4v1717167050423!5m2!1sfr!2sfr"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
    <div class="defilement-container">
        <div class="defilement"
            data-text="Contactez-nous • Contactez-nous • Contactez-nous • Contactez-nous • Contactez-nous • Contactez-nous • Contactez-nous • ">
            <span class="defilement-span">Contactez-nous • Contactez-nous • Contactez-nous • Contactez-nous • Contactez-nous • Contactez-nous • Contactez-nous •</span>
        </div>
    </div>
    <div class="dropdown">
        <img class="lang-icon" src="./styles/img/globe.png" alt="traduction">
        <button id="dropdownBtn" class="dropbtn"><span class="lang"></span>
          <img class="fl-icon" src="./styles/img/arrow.png" alt="fleche">
          Langage
        </button>
        <div id="dropdownContent" class="dropdown-content">
          <a href="./contact.php" class="fr">Français</a>
          <a href="./en/contact.php" class="en">Anglais</a>
        </div>
    </div>
    <footer>
        <a href="index.html" class="footer-logo center-flex">
            <img src="./styles/img/logo.png" alt="">
        </a>
        <div class="footer-pages">
            <a href="legalNotices.html">Mentions légales</a>
            <a href="CGU.html">CGU</a>
            <a href="privacyPolicy.html">Politique de confidentialité</a>
        </div>
        <div class="footer-contact">
            <p class="footer-contact-title">Contact</p>
            <div class="footer-links-container">
                <a href="https://www.facebook.com/bouchonanglais/">
                    <img src="./styles/img/facebook.svg" class="facebook" alt="Lien vers le facebook">
                </a>
                <a href="https://www.linkedin.com/company/le-bouchon-anglais/">
                    <img src="./styles/img/linkedin.svg" class="linkedin" alt="Lien vers le linkedIn">
                </a>
                <a href="mailto:felicity@lebouchonanglais.com">
                    <img src="./styles/img/gmail.svg" class="gmail" alt="Lien pour envoyer un mail">
                </a>
                <a href="tel:+336 18 38 38 74">
                    <img src="./styles/img/tel.svg" class="tel" alt="Mien pour téléphoner">
                </a>
            </div>
        </div>
    </footer>

    <script src="./scripts/menu.js"></script>

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script src="./scripts/animations/contact.js"></script>
    <script src="./scripts/animations/footer.js"></script>
</body>

</html>