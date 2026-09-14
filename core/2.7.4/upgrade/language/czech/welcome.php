<?php

// _LANGCODE: cs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Upgrade</h2>

<p>
<em>Upgrade</em> prozkoumá tuto instalaci XOOPS a použije všechny potřebné opravy, aby byla kompatibilní 
s novým kódem XOOPS. Záplaty mohou zahrnovat změny databáze, přidání výchozích nastavení pro nové
konfigurační položky, aktualizace souborů a dat a další.
<p>
Po každé opravě upgrade ohlásí stav a počká na pokračování vašeho vstupu. na
na konci upgradu přejde řízení na funkci aktualizace systémového modulu.

<div class="alert alert-warning">
Po dokončení upgradu nezapomeňte:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> odstranit složku upgradu</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> aktualizovat všechny moduly, které se změnily</li>
</div>

EOT,
);
