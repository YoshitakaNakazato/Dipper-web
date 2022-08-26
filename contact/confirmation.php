<?php

session_start();

if (!$_POST) {
    header('Location: ./index.php');
}

$_SESSION = $_POST;
$Company = htmlspecialchars($_SESSION['Company']);
$Name = htmlspecialchars($_SESSION['Name']);
$Email = htmlspecialchars($_SESSION['Email']);
$Department = htmlspecialchars($_SESSION['Department']);
$type = $_SESSION['type'];
$types = implode(" / ", $_SESSION['type']);
$type_comment = htmlspecialchars($_SESSION['type_comment']);
$reply = $_SESSION['reply'];
$reply_comment = htmlspecialchars($_SESSION['reply_comment']);

?>

<!DOCTYPE html>
<html>

<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="email=no,telephone=no,address=no">
    <title>Dipper</title>
    <meta name="description" content="業務システムに特化した世界に一つだけのデザインテンプレート制作。雛形となる7つのデザインを制作するだけで、操作性と生産性が向上。企業のDX推進にさらに大きな付加価値を。">

    <meta name="robots" content="index,follow">

    <meta property="og:admins" content="yuichiro.tamura1">
    <meta property="og:title" content="Dipper -オリジナルデザインテンプレート">
    <meta property="og:type" content="website">
    <meta property="og:description" content="業務システムに特化した世界に一つだけのデザインテンプレート制作。雛形となる7つのデザインを制作するだけで、操作性と生産性が向上。企業のDX推進にさらに大きな付加価値を。">
    <meta property="og:url" content="https://dipper.jp/">
    <meta property="og:image" content="https://dipper.jp/common/img/ogp.jpg">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:site_name" content="Dipper -オリジナルデザインテンプレート">
    <meta name="twitter:card" content="（カード種類）">
    <meta name="twitter:site" content="（@Twitterユーザー名）">

    <link rel="canonical" href="https://dipper.jp/">

    <link rel="stylesheet" href="../common/css/minireset.min.css" media="screen">
    <link rel="stylesheet" href="../common/css/style.css" media="screen">

    <link rel="icon" href="../favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="https://dipper.jp/common/img/apple-touch-icon-180x180">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-223991416-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-223991416-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 10874424047 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10874424047"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10874424047');
    </script>
    <!-- （他アナリティクス等を入れる箇所） -->
</head>

<body id="contact-page" class="contact-confirm">
    <!-- （googleアナリティクスを入れる箇所②） -->
    <main id="main">
        <section>
            <div class="section-header">
                <h1 class="header__logo"><img src="../common/img/logo.svg" alt="Dipper"></h1>
                <h2 class="header__title">お問い合わせ</h2>
            </div>
            <div class="section-contents">
                <h3 class="section__title">入力内容をご確認ください</h3>
                <form action="./complete.php" method="post">
                    <dl>
                        <dt>会社名</dt>
                        <dd><?php echo $Company; ?></dd>
                    </dl>
                    <dl>
                        <dt>お名前</dt>
                        <dd><?php echo $Name; ?></dd>
                    </dl>
                    <dl>
                        <dt>Email</dt>
                        <dd><?php echo $Email; ?></dd>
                    </dl>
                    <dl>
                        <dt>事業部 / 役職</dt>
                        <dd><?php echo $Department; ?></dd>
                    </dl>
                    <dl>
                        <dt>お問い合わせ内容</dt>
                        <dd>
                            <ol class="select-list">
                                <?php
                                foreach ($type as $type_name) {
                                    echo '<li>' . $type_name . '</li> ';
                                }
                                ?>
                            </ol>
                        </dd>
                        <dd><?php echo $type_comment; ?></dd>
                    </dl>
                    <dl>
                        <dt>ご希望の回答方法</dt>
                        <dd>
                            <ol class="select-list">
                                <li><?php echo $reply; ?></li>
                            </ol>
                        </dd>
                        <dd><?php echo $reply_comment; ?></dd>
                    </dl>
                    <button class="btn__submit" type="submit"><span>送信</span></button>
                    <input type='button' onclick='history.back()' value='修正する' class="btn__back">
                </form>
            </div>
        </section>
    </main>
    <footer id="footer">
        <p class="footer__concept">業務システムに、もっとデザインを。</p>
        <p class="footer__logo"><img src="../common/img/logo.svg" alt="Dipper"></p>
        <p class="company__logo"><img src="../common/img/Dam-Go_logo.webp" alt="Dam-Go"></p>
        <p class="company"> <a href="https://dam-go.design/" target="_blank">株式会社Dam-Go</a></p>
        <p class="copyright">©
            <script type="text/javascript">
                document.write(new Date().getFullYear());
            </script> Dam-Go Co., Ltd.
        </p>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../common/js/main.js"></script>
</body>

</html>