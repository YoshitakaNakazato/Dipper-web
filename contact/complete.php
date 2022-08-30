<?php
session_start();

mb_language("ja");
mb_internal_encoding("utf-8");

$Company = htmlspecialchars($_SESSION['Company']);
$Name = htmlspecialchars($_SESSION['Name']);
$Email = htmlspecialchars($_SESSION['Email']);
$Department = htmlspecialchars($_SESSION['Department']);
$type = $_SESSION['type'];
$types = implode(" / ", $_SESSION['type']);
$type_comment = htmlspecialchars($_SESSION['type_comment']);
$reply = $_SESSION['reply'];
$reply_comment = htmlspecialchars($_SESSION['reply_comment']);

$title_user = 'この度はお問い合わせありがとうございます。';
$body_user = <<< EOM
{$Company}
{$Name} 様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 会社名 】
   {$Company}

【 お名前 】
   {$Name}

【 メールアドレス 】
   {$Email}

【 事業部 / 役職 】
   {$Department}

【 お問い合わせ内容 】
{$types}
{$type_comment}

【 ご希望の回答方法 】
{$reply}
{$reply_comment}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;
$header_user = "From:" . mb_encode_mimeheader("株式会社Dam-Go") . "<info@dam-go.design>\n";
$header_user .= 'X-Mailer: PHP/' . phpversion();
mb_send_mail($Email, $title_user, $body_user, $header_user);


$to_webmaster = 'dipper@dam-go.design';
$title_webmaster = '【お問い合わせフォーム】';
$body_webmaster = <<< EOM

WEBサイトより以下のお問い合わせがありました。

===================================================
【 会社名 】
{$Company}

【 お名前 】
{$Name}

【 メールアドレス 】
{$Email}

【 事業部 / 役職 】
{$Department}

【 お問い合わせ内容 】
{$types}
{$type_comment}

【 ご希望の回答方法 】
{$reply}
{$reply_comment}
===================================================
EOM;
$header_webmaster = "From:" . mb_encode_mimeheader($Name) . "<" . $Email . ">\n";
$header_webmaster .= 'X-Mailer: PHP/' . phpversion();
mb_send_mail($to_webmaster, $title_webmaster, $body_webmaster, $header_webmaster);

session_destroy();
?>

<!DOCTYPE html>
<html>

<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="email=no,telephone=no,address=no">
    <title>お問い合わせ | Dipper</title>
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

<body id="contact-page" class="contact-complete">
    <!-- （googleアナリティクスを入れる箇所②） -->
    <main id="main">
        <section id="contact">
            <div class="section-header">
                <h1 class="header__logo"><img src="../common/img/logo.svg" alt="Dipper"></h1>
                <h2 class="header__title">お問い合わせ</h2>
            </div>
            <div class="section-contents">
                <div class="complete_info">
                    <h3 class="complete__title">ご入力ありがとうございます。</h3>
                    <p class="complete__text">ご入力頂いただいた内容は担当者にて確認させて頂きます。</p>
                    <a class="btn__link" href="../">TOPへ</a>
                </div>
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