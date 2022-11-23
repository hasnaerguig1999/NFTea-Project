<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['user__password'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>NFTea Collections</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <a id="logo" href="home.php">NFT<span style="color: #7C24D5;">ea</span></a>
        <nav class="nav__bar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="collections.php" style="color: #7C24D4;">Collections</a></li>
                <li><a href="NFT.php">NFTs</a></li>
            </ul>
            <div class="sign_in__button">
                <button><a href="./log-out.php">Log out</a></button>
            </div>
        </nav>
        <div class="burger__menu">
            <span class="burger__bar"></span>
            <span class="burger__bar"></span>
            <span class="burger__bar"></span>
        </div>
    </header>
    <!-- HERO SECTION -->
    <section class="hero__section">
        <div class="hook__text__part">
            <h1>Enjoy the art of <span style="color: #7C24D5;">NFTs</span> collections</h1>
            <p>We are happy to host your art</p>
            <div class="hook__btn__container">
                <button><a href="">View yours</a></button>
            </div>
        </div>
    </section>
    <!-- COLLECTIONS SECTION -->
    <section class="collections">
        <h2>All Collections</h2>
        <div class="call__to__action">
            <button class="add_yours"><a href="./add-collection.php">Add yours</a></button>
        </div>
        <div class="collections__items">
        <div class="collection__card">
                <div class="collection__img">
                    <!-- collection image -->
                </div>
                <div class="collection__info">
                    <div class="informations">
                        <div class="collection__name__and__artist">
                            <h3 class="collection__name">Hot gamme</h3>
                            <p class="artist__name">abdelali</p>
                        </div>

                        <div class="nfts__and__price">
                            <span>12 NFT</span>
                            <span>54 ETH</span>
                        </div>
                        <div class="collection__description">
                            <p>Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Architecto non dignissimos accusantium n
                                am delectus aut fuga laudantium temporibus asperiores ex?
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- FOOTER -->
    <footer>
        <div class="footer__container">
            <p>NFTea 2022. All rights reserved</p>
            <div class="social__media__icons">
                <p>facebook</p>
                <p>instagram</p>
                <p>tiktok</p>
            </div>
        </div>
    </footer>
    <script src="../Script/app.js"></script>
</body>

</html>
<?php } else {
    header("Location: ../sign-in.php?error=Something goes wrong!");
    exit();
}
?>