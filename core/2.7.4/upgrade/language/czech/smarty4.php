<?php

// _LANGCODE: cs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Migrace Smarty4');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Výsledky skeneru');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Spusťte skenování');
define('_XOOPS_SMARTY4_SCANNER_END', 'Ukončete skener');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Pravidlo');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Shoda');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Soubor');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Opravit počet');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Vyžaduje se ruční kontrola');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Lze automaticky opravit: každá proměnná položky bude přejmenována připojením „_item“ (např. „foo“ se změní na „foo_item“).');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Nelze zapisovat');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Možnosti opětovného skenování');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Klikněte na zaškrtávací políčko "Ano" níže a poté klikněte na tlačítko Spustit kontrolu, abyste se pokusili automaticky opravit všechny nalezené problémy.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Označit jako dokončené');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Adresář šablon (volitelné)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Rozšíření šablony (volitelné)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 přináší významnou změnu: Smarty 4</h3>

<p>Bohužel tato změna může potenciálně narušit některá starší témata. Před pokračováním v upgradu se proto ujistěte, že jste dodrželi tyto kroky:

<li>Spusťte preflight.php a zkontrolujte, zda nejsou zastaralá témata nebo šablony modulů.</li>
<li>Pokud zjistíte nějaké problémy, přečtěte si tento dokument, abyste porozuměli nezbytným úpravám, než budete pokračovat v upgradu.</li>
<li>Po provedení požadovaných změn spusťte preflight.php znovu.</li>
<li>Pokud již nejsou žádné problémy, můžete zahájit proces upgradu.</li>
</p>
EOT,
);
