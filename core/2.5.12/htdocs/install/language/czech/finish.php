<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Váš web</h3>
<p>Nyní máte přístup na <a href='../index.php'>úvodní stránku vašeho webu</a>.</p>
<h3>Podpora</h3>
<p>Navštivte <a href='https://xoops.org/' rel='external'>Projekt XOOPS</a></p>
<p><strong>POZOR :</strong> Váš web v současnosti obsahuje pouze základní funkce.
Navštivte <a href='https://xoops.org/' rel='external' title='Webový aplikační systém XOOPS'>xoops.org</a>
a zjistěte více o rozšíření XOOPS pro prezentaci textových stránek, fotogalerií, fór a dalšího,
pomocí <em>modulů</em>, a také o přizpůsobení vzhledu vašeho XOOPS pomocí <em>šablon</em>.</p>
";

$content .= "<h3>Bezpečnostní konfigurace</h3>
<p>Instalátor se pokusí nakonfigurovat váš web s ohledem na bezpečnost. Prosím, zkontrolujte, zda:
<div class='confirmMsg'>
Soubor <em>mainfile.php</em> je určen pouze pro čtení.<br>
Odstraňte složku <em>{$installer_modified}</em> (nebo <em>install</em>, pokud nebyla automaticky přejmenována instalátorem) ze svého serveru.
</div>
</p>
";
