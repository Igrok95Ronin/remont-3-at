<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Handwerker Service'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 containerP0">
                    <div class="header__box">
                        <div class="header__left">
                            <h2 class="header__dscr">Alles aus einer Hand</h2>
                            <div class="header__imgW">
                                <img class="header__img" src="assets/img/mainFon.png" alt="" >
                            </div>
                            <div class="header__wrapper">
                                <div class="header__inner">
                                    <h1 class="header__title"><?= $title ?></h1>
                                </div>
                                <div class="header__inner">
                                    <img class="header__imgWko" src="assets/img/img551.jpg" alt="" >
                                </div>
                            </div>
                        </div>
                        <div class="header__right">
                            <p class="header__txt">Zuverlässige <b>Handwerker in <?= $city == '' ? 'Ihrer Nähe' : $city ?></b>  für professionelle <b>Wohnungsanierung</b> und  Umbauarbeiten in höchster Qualität.
                            </p>
                            <ul class="header__ul">
                                <li>Bodenbelag- und Fliesenarbeiten</li>
                                <li>Maler- und Tapezierarbeiten</li>
                                <li>Elektroinstallationen</li>
                                <li>Sanitärinstallationen</li>
                                <li>Schreinerarbeiten und Einbauschränke</li>
                                <li>Trockenbau- und Gipskartonarbeiten</li>
                                <li>Fenster- und Türenmodernisierungen</li>
                                <li>Heizungs- und Klimaanlageninstallationen</li>
                            </ul>
                            <div class="header__btnW">
                                <a class="header__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                                <a class="header__btnM" href="#anchor" >ANFRAGE SENDEN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class='professionalsForYour'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <div class='professionalsForYour__box'>
                            <div class="professionalsForYour__left">
                                <div class="professionalsForYour__imgW">
                                    <img class="professionalsForYour__img" src="assets/img/img554.jpg" alt="" >
                                </div>
                                <h2 class="professionalsForYour__title">Profis für Ihre</h2>
                                <h3 class="professionalsForYour__subTitle">Wohnungsrenovierung</h3>
                            </div>
                            <div class="professionalsForYour__right">
                                <p class="professionalsForYour__txt"><b>Komplette Renovierungen</b> mit kostenloser  Besichtigung und detailliertem  Kostenvoranschlag. Vertrauen Sie unseren <b>erfahrenen Handwerkern</b> für hochwertige  Arbeit, pünktliche Umsetzung und  zufriedenstellende Ergebnisse. Kontaktieren  Sie uns jetzt für Ihr individuelles  Renovierungsprojekt!</p>
                                <div class="professionalsForYour__imgW2">
                                    <img class="professionalsForYour__img2" src="assets/img/img555.jpg" alt="" >
                                </div>
                                <div class="professionalsForYour__btnW">
                                    <a class="professionalsForYour__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                                    <a class="professionalsForYour__btnM" href="#anchor" >ANFRAGE SENDEN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='comments'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='comments__box'>
                            <div class="comments__left">
                                <div class="comments__imgW">
                                    <img class="comments__img" src="assets/img/comment.png" alt="" >
                                </div>
                                <p class="comments__dscr">Frau Schmidts Bewertung und erfolgreich  abgeschlossenes Sanierungsprojekt</p>
                            </div>
                            <div class="comments__right">
                                <img class="comments__img2" src="assets/img/gal.png" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='flooring'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <div class='flooring__box'>
                            <div class="flooring__left">
                                <div class="flooring__imgW">
                                    <img class="flooring__img" src="assets/img/img563.jpg" alt="" >
                                </div>
                                <h2 class="flooring__title">Bodenbelag</h2>
                                <h3 class="flooring__subTitle">Fliesenarbeiten</h3>
                            </div>
                            <div class="flooring__right">
                                <p class="flooring__txt">Unsere <b>Bodenbelag</b> - und <b>Fliesenarbeiten</b> bieten  Ihnen eine Vielzahl von hochwertigen Lösungen für  die Verschönerung und Modernisierung Ihres  Wohnraums. Mit Fachkenntnis und Präzision  verlegen wir Bodenbeläge und Fliesen in  verschiedenen Stilen und Materialien. Vertrauen Sie  unserem erfahrenen Team, um Ihrem Zuhause einen  neuen, ansprechenden Look zu verleihen.</p>
                                <ul class="flooring__ul">
                                    <li>Verlegung von Wandfliesen</li>
                                    <li>Fliesensanierung und - reparatur</li>
                                    <li>Mosaik - und Dekorationsarbeiten</li>
                                    <li>Fliesenverlegung in Badezimmern</li>
                                    <li>Treppenfliesen</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='flooring'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <div class='flooring__box'>
                            <div class="flooring__left">
                                <div class="flooring__imgW">
                                    <img class="flooring__img" src="assets/img/img566.jpg" alt="" >
                                </div>
                                <h2 class="flooring__title">Maler</h2>
                                <h3 class="flooring__subTitle">Tapezierarbeiten</h3>
                            </div>
                            <div class="flooring__right">
                                <p class="flooring__txt">Unsere professionellen <b>Maler</b> - und <b>Tapezierarbeiten</b>  verleihen Ihrem Zuhause eine neue Dimension. Wir  bieten eine Vielzahl von hochwertigen Farben,  Mustern und Texturen, um Ihren individuellen Stil zu  verwirklichen. Vertrauen Sie unserem erfahrenen  Team für präzise Ausführung und ein makelloses  Finish. Ihr Zuhause wird zum Kunstwerk.</p>
                                <ul class="flooring__ul">
                                    <li>Innen - und Außenanstriche</li>
                                    <li>Tapezieren von Wänden und Decken</li>
                                    <li>Spachtel - und Ausbesserungsarbeiten</li>
                                    <li>Schimmelentfernung und - prävention</li>
                                    <li>Wandgestaltung und - design</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='flooring'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <div class='flooring__box'>
                            <div class="flooring__left">
                                <div class="flooring__imgW">
                                    <img class="flooring__img" src="assets/img/img569.jpg" alt="" >
                                </div>
                                <h2 class="flooring__title">Elektroinstallationen</h2>
                                <h3 class="flooring__subTitle">Modernisierungen</h3>
                            </div>
                            <div class="flooring__right">
                                <p class="flooring__txt">Professionelle <b>Elektroinstallationen</b> und -  modernisierungen durch erfahrene <b>Elektriker in
                                <?= $city == '' ? 'Ihrer Nähe' : $city ?></b>. Vertrauen Sie uns für zuverlässige  elektrische Lösungen und sichere Installationen für  Ihr Zuhause oder Ihr Gewerbe. Kontaktieren Sie uns  jetzt für professionelle elektrische Dienstleistungen</p>
                                <ul class="flooring__ul">
                                    <li>Elektroinstallationen und Reparaturen</li>
                                    <li>Beleuchtungsinstallation und - modernisierung</li>
                                    <li>Schalter - und Steckdosenaustausch</li>
                                    <li>Sicherheitsinstallationen</li>
                                    <li>Elektrische Prüfungen und Zertifizierungen</li>
                                    <li>Allgemeine elektrische Wartungsarbeiten</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='flooring'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <div class='flooring__box'>
                            <div class="flooring__left">
                                <div class="flooring__imgW">
                                    <img class="flooring__img" src="assets/img/img572.jpg" alt="" >
                                </div>
                                <h2 class="flooring__title">Sanitärinstallationen</h2>
                                <h3 class="flooring__subTitle">Reparaturen</h3>
                            </div>
                            <div class="flooring__right">
                                <p class="flooring__txt">Unser erfahrenes Team bietet professionelle  <b>Sanitärinstallationen</b> und - reparaturen. Verlassen  Sie sich auf unseren kompetenten Installateur, um  Ihre <b>Sanitäranlagen</b> zuverlässig zu <b>installieren</b> und  schnell etwaige <b>Reparaturen</b> durchzuführen. Wir sind in <b><?= $city == '' ? 'Ihrer Nähe' : $city ?></b> und stehen Ihnen mit  erstklassigem Service zur Verfügung. Kontaktieren  Sie uns noch heute für Ihre Sanitärbedürfnisse.</p>
                                <ul class="flooring__ul">
                                    <li>Heizungsinstallation</li>
                                    <li>Badewannen- und Duscheinbau  </li>
                                    <li>Armatureninstallationen</li>
                                </ul>
                                <div class="flooring__btnW">
                                    <a class="flooring__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                                    <a class="flooring__btnM" href="#anchor" >ANFRAGE SENDEN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='flooring'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <div class='flooring__box'>
                            <div class="flooring__left">
                                <div class="flooring__imgW">
                                    <img class="flooring__img" src="assets/img/img575.jpg" alt="" >
                                </div>
                                <h2 class="flooring__title">Trockenbau</h2>
                                <h3 class="flooring__subTitle">Gipskartonarbeiten</h3>
                            </div>
                            <div class="flooring__right">
                                <p class="flooring__txt">Unsere <b>Trockenbau</b> - und <b>Gipskartonarbeiten</b>  bieten Ihnen die perfekte Lösung für den Ausbau und  die Gestaltung Ihrer Räume. Mit höchster Präzision  und Fachkenntnis schaffen wir individuelle  Raumkonzepte, sei es für Trennwände,  Deckenverkleidungen oder Schallschutzmaßnahmen.  Verlassen Sie sich auf unsere Erfahrung und Qualität,  um ein Ergebnis zu erzielen, das Ihren Ansprüchen  gerecht wird.</p>
                                <ul class="flooring__ul">
                                    <li>Errichtung von Trennwänden  </li>
                                    <li>Deckenverkleidungen</li>
                                    <li>Brandschutzverkleidungen</li>
                                    <li>Deckenverkleidungen</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='flooring'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <div class='flooring__box'>
                            <div class="flooring__left">
                                <div class="flooring__imgW">
                                    <img class="flooring__img" src="assets/img/img578.jpg" alt="" >
                                </div>
                                <h2 class="flooring__title">Fenstermontage</h2>
                                <h3 class="flooring__subTitle">Perfekte Installation</h3>
                            </div>
                            <div class="flooring__right">
                                <p class="flooring__txt">Unsere <b>Fenstermontage</b> bietet Ihnen eine  erstklassige Lösung für hervorragende  Lichtverhältnisse und energetische Effizienz. Mit  Fachkenntnis und Präzision installieren wir  hochwertige Fenster, die Ihre Räume mit natürlichem  Licht durchfluten und gleichzeitig den Wärmeverlust  minimieren. Verlassen Sie sich auf unsere Expertise,  um eine erstklassige <b>Montage</b> zu gewährleisten, die  Ihre Erwartungen übertrifft und Ihren Wohnkomfort  verbessert</p>
                                <ul class="flooring__ul">
                                    <li>Auswahl hochwertiger Fenstermaterialien</li>
                                    <li>Professionelle Installation und Ausrichtung</li>
                                    <li>Anpassung von Fensterbeschlägen</li>
                                    <li>Funktionsprüfung und Justierung</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='flooring'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <div class='flooring__box'>
                            <div class="flooring__left">
                                <div class="flooring__imgW">
                                    <img class="flooring__img" src="assets/img/img581.jpg" alt="" >
                                </div>
                                <h2 class="flooring__title">Türmontage</h2>
                                <h3 class="flooring__subTitle">Qualität und Präzision</h3>
                            </div>
                            <div class="flooring__right">
                                <p class="flooring__txt">Unsere <b>Türmontage-Services</b> bieten Ihnen eine  erstklassige Lösung für den <b>Einbau von Türen</b> in  Ihrem Zuhause oder Geschäft. Mit umfangreicher  Erfahrung und Fachkenntnissen sorgen wir für eine  präzise und reibungslose <b>Installation</b>. Egal ob  Innentüren, Außentüren oder spezielle  Türanforderungen, wir bieten maßgeschneiderte  Lösungen, die Ihren Anforderungen und  Designvorlieben entsprechen. Vertrauen Sie auf  unsere Expertise, um Ihren Wohnraum mit  hochwertigen Türen zu bereichern</p>
                                <div class="flooring__btnW">
                                    <a class="flooring__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                                    <a class="flooring__btnM" href="#anchor" >ANFRAGE SENDEN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='forms' id="anchor">
           <div class='forms__wrapper'>
              <div class='container-fluid'>
                 <div class='row'>
                    <div class='col-12 container'>
                       <div class='forms__box'>
                          <h2 class='forms__title'>Kontaktieren Sie uns:</h2>
                          <form id='jq_form' class='mb-0 mt-3'>
                             <div class='my-0'>
                                <input class='form-control' placeholder='Name' name='jq_name' type='text'>
                                <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Telefonnummer' name='jq_phone' type='text'>
                                <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Straße' name='jq_street' type='text'>
                                <div id='jq_street' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Postleitzahl/Stadt' name='jq_city' type='text'>
                                <div id='jq_city' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='E-mail' name='jq_email' type='text'>
                                <div id='jq_email' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <textarea rows='3' class='form-control' name='jq_text' placeholder='Beschreibung'></textarea>
                                <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div>
                                <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Senden'>
                             </div>
                             <div id='jq_success' style='display:none'>Vielen Dank für Ihre Anfrage. Unsere Mitarbeiter werden sich in Kürze bei Ihnen melden.</div>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        
        <section class='btnFixedD'>
            <div class='btnFixedD__box'>
                <a class="btnFixedD__btn" href="<?= $phone_href ?>" ><img class="btnFixedD__img" src="assets/icons/telephone-fill.svg" alt=""></a>
            </div>
        </section>
        <section class='btnFixed'>
            <div class='btnFixed__box'>
                <a class="btnFixed__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2023</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>