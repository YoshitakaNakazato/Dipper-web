
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

<body id="contact-page" class="contact-index">
    <!-- （googleアナリティクスを入れる箇所②） -->
    <main id="main">
        <section>
            <div class="section-header">
                <h1 class="header__logo"><img src="../common/img/logo.svg" alt="Dipper"></h1>
                <h2 class="header__title">お問い合わせ</h2>
            </div>
            <div class="section-contents">
                <form action="./confirmation.php" method="post">
                    <div class="form-item">
                        <label>
                            <div class="form__subject">会社名<span>*</span></div>
                            <input name="Company" placeholder="株式会社 ホウジンメイ" type="text" autocomplete="organization" required >
                        </label>
                    </div>
                    <div class="form-item">
                        <label>
                            <div class="form__subject">お名前<span>*</span></div>
                            <input name="Name" placeholder="山田 太郎" type="text" autocomplete="name" required >
                        </label>
                    </div>
                    <div class="form-item">
                        <label>
                            <div class="form__subject">Email<span>*</span></div>
                            <input name="Email" placeholder="abcdefg@hijklmn.com" type="email" autocomplete="email" required >
                        </label>
                    </div>
                    <div class="form-item">
                        <label>
                            <div class="form__subject">事業部 / 役職</div>
                            <input name="Department" placeholder="営業部 部長" type="text" autocomplete="organization-title" >
                        </label>
                    </div>
                    <div class="form-item">
                        <div class="form__subject">お問い合わせ内容を選択してください<span>*</span></div>
                        <label class="check-item">
                            <input name="type[]" value="サービスに申し込みたい" type="checkbox" required>
                            <span>サービスに申し込みたい</span>
                        </label>
                        <label class="check-item">
                            <input name="type[]" value="サービス内容について詳しく知りたい" type="checkbox">
                            <span>サービス内容について詳しく知りたい</span>
                        </label>
                        <label class="check-item">
                            <input name="type[]" value="見積もりを依頼したい" type="checkbox">
                            <span>見積もりを依頼したい</span>
                        </label>
                        <label class="check-item">
                            <input name="type[]" value="その他" type="checkbox" class="btn_other">
                            <span>その他</span>
                        </label>
                        <textarea name="type_comment" placeholder="お問い合わせ内容を具体的に記載してください" rows="3" class="other__text"></textarea>
                    </div>
                    <div class="form-item">
                        <div class="form__subject">ご希望の回答方法を選択してください<span>*</span></div>
                        <label class="radio-item">
                            <input name="reply" value="メールでの回答を希望" type="radio" required>
                            <span>メールでの回答を希望</span>
                        </label>
                        <label class="radio-item">
                            <input name="reply" value="Zoomなどのオンラインミーティングを希望" type="radio">
                            <span>Zoomなどのオンラインミーティングを希望</span>
                        </label>
                        <label class="radio-item">
                            <input name="reply" value="資料の送付を希望" type="radio">
                            <span>資料の送付を希望</span>
                        </label>
                        <label class="radio-item">
                            <input name="reply" value="その他" type="radio" class="btn_other">
                            <span>その他</span>
                        </label>
                        <textarea name="reply_comment" placeholder="ご希望の回答方法を記載してください" rows="3" class="other__text"></textarea>
                    </div>
                    <div class="policy-area">
                        <p>1.弊社では、個人情報を機密情報としてお取扱いしています。<br>
                            従って、ご記入頂いた個人情報は、お問い合わせに対する回答以外での使用は一切ございません。
                        </p>
                        <p>2.第三者への提供など他に流用することもございません。</p>
                        <p>3.お客様より個人情報をご提供いただくことは、お客様の任意です。<br>
                            但し、お客様の情報をご提供いただけないと要件にお応えできない場合があります。
                        </p>
                        <p>4.ご提供いただいた個人情報に関して、開示請求、開示結果の訂正・削除などは、下記の連絡先迄お知らせ下さい。</p>
                        <p>
                            個人情報に関するお問い合わせ先<br>
                            《個人情報お問い合わせ窓口》<br>
                            株式会社Dam-Go 個人情報管理責任者<br>
                            220-0012<br>
                            神奈川県横浜市西区みなとみらい3-7-1<br>
                            オーシャンゲートみなとみらい 8F<br>
                            info@dam-go.design
                        </p>
                    </div>
                    <label class="agree-item">
                        <input name="Confirm" type="checkbox" required>
                        <span>上記の個人情報の取扱いに同意してお問い合わせを行います。</span>
                    </label>
                    <button class="btn__submit" type="submit"><span>確認</span></button>
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