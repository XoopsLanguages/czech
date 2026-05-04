<?php
// _LANGCODE: cs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Fyzické cesty XOOPS');
define('LEGEND_DATABASE', 'Znaková sada databáze');

define('XOOPS_LIB_PATH_LABEL', 'Adresář knihovny XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS adresář datových souborů');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Znaková sada databáze a řazení');
define('DB_COLLATION_HELP', "Od verze 4.12 podporuje MySQL vlastní znakovou sadu a řazení. Je to však složitější, než se očekávalo, takže NEPROVÁDĚJTE žádné změny, pokud si nejste jisti svým výběrem.");
define('DB_COLLATION_NOCHANGE', 'Neměnit');

define('XOOPS_PATH_FOUND', 'Cesta nalezena.');
define('ERR_COULD_NOT_ACCESS', 'Nelze přistoupit k zadané složce. Ověřte, zda existuje a je čitelná serverem.');
define('CHECKING_PERMISSIONS', 'Kontrola oprávnění souborů a adresářů...');
define('ERR_NEED_WRITE_ACCESS', 'Server musí mít přístup pro zápis k následujícím souborům a složce<br> (tj. <em>chmod 777 název_adresáře</em> na serveru UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s NENÍ zapisovatelný.');
define('IS_WRITABLE', '%s je zapisovatelný.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Chyba při zápisu obsahu do mainfile.php, zapište obsah do mainfile.php ručně.');
