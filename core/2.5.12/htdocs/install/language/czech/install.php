<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Zobrazit/skrýt nápovědu');
// License
//define('LICENSE_NOT_WRITEABLE', 'Licenční soubor "%s" NENÍ zapisovatelný!');
//define('LICENSE_IS_WRITEABLE', 'Licence %s je zapisovatelná.');
// Configuration check page
define('SERVER_API', 'API serveru');
define('PHP_EXTENSION', 'Rozšíření %s');
define('CHAR_ENCODING', 'Kódování znaků');
define('XML_PARSING', 'Zpracování XML');
define('REQUIREMENTS', 'Požadavky');
define('_PHP_VERSION', 'Verze PHP');
define('RECOMMENDED_SETTINGS', 'Doporučená nastavení');
define('RECOMMENDED_EXTENSIONS', 'Doporučená rozšíření');
define('SETTING_NAME', 'Název nastavení');
define('RECOMMENDED', 'Doporučeno');
define('CURRENT', 'Aktuální');
define('RECOMMENDED_EXTENSIONS_MSG', 'Tato rozšíření nejsou vyžadována pro běžné použití, ale mohou být nezbytná pro využití
    některých specifických funkcí (například podpora více jazyků nebo RSS). Proto se doporučuje je nainstalovat.');
define('NONE', 'Žádné');
define('SUCCESS', 'Úspěch');
define('WARNING', 'Varování');
define('FAILED', 'Selhalo');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Průvodce instalací XOOPS');
define('LANGUAGE_SELECTION', 'Výběr jazyka');
define('LANGUAGE_SELECTION_TITLE', 'Vyberte váš jazyk');        // L128
define('INTRODUCTION', 'Úvod');
define('INTRODUCTION_TITLE', 'Vítejte v průvodci instalací XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Kontrola konfigurace');
define('CONFIGURATION_CHECK_TITLE', 'Kontrola konfigurace vašeho serveru');
define('PATHS_SETTINGS', 'Nastavení cest');
define('PATHS_SETTINGS_TITLE', 'Nastavení cest');
define('DATABASE_CONNECTION', 'Připojení k databázi');
define('DATABASE_CONNECTION_TITLE', 'Připojení k databázi');
define('DATABASE_CONFIG', 'Konfigurace databáze');
define('DATABASE_CONFIG_TITLE', 'Kon Sexuální konfigurace databáze');
define('CONFIG_SAVE', 'Uložit konfiguraci');
define('CONFIG_SAVE_TITLE', 'Ukládání konfigurace systému');
define('TABLES_CREATION', 'Vytvoření tabulek');
define('TABLES_CREATION_TITLE', 'Vytvoření databázových tabulek');
define('INITIAL_SETTINGS', 'Počáteční nastavení');
define('INITIAL_SETTINGS_TITLE', 'Zadejte prosím vaše počáteční nastavení');
define('DATA_INSERTION', 'Vložení dat');
define('DATA_INSERTION_TITLE', 'Ukládání nastavení do databáze');
define('WELCOME', 'Vítejte');
define('WELCOME_TITLE', 'Vítejte na vašem webu XOOPS');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Fyzické cesty XOOPS');
define('XOOPS_URLS', 'Webové adresy');
define('XOOPS_ROOT_PATH_LABEL', 'Fyzická cesta kořenového adresáře dokumentů XOOPS');
define('XOOPS_ROOT_PATH_HELP', 'Fyzická cesta k adresáři dokumentů XOOPS (obsluhovanému) BEZ koncového lomítka');
define('XOOPS_LIB_PATH_LABEL', 'Adresář knihovny XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Fyzická cesta k adresáři knihovny XOOPS BEZ koncového lomítka, pro budoucí kompatibilitu. Umístěte složku mimo ' . XOOPS_ROOT_PATH_LABEL . ' pro zajištění bezpečnosti.');
define('XOOPS_DATA_PATH_LABEL', 'Adresář datových souborů XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Fyzická cesta k adresáři datových souborů XOOPS (zapisovatelný) BEZ koncového lomítka, pro budoucí kompatibilitu. Umístěte složku mimo ' . XOOPS_ROOT_PATH_LABEL . ' pro zajištění bezpečnosti.');
define('XOOPS_URL_LABEL', 'Umístění webu (URL)'); // L56
define('XOOPS_URL_HELP', 'Hlavní URL, který bude použit pro přístup k vaší instalaci XOOPS'); // L58
define('LEGEND_CONNECTION', 'Připojení k serveru');
define('LEGEND_DATABASE', 'Databáze'); // L51
define('DB_HOST_LABEL', 'Název hostitele serveru');    // L27
define('DB_HOST_HELP', 'Název hostitele databázového serveru. Pokud si nejste jisti, <em>localhost</em> funguje ve většině případů'); // L67
define('DB_USER_LABEL', 'Uživatelské jméno');    // L28
define('DB_USER_HELP', 'Jméno uživatelského účtu, který bude použit pro připojení k databázovému serveru'); // L65
define('DB_PASS_LABEL', 'Heslo');    // L52
define('DB_PASS_HELP', 'Heslo vašeho databázového uživatelského účtu'); // L68
define('DB_NAME_LABEL', 'Název databáze');    // L29
define('DB_NAME_HELP', 'Název databáze na hostiteli. Instalátor se pokusí vytvořit databázi, pokud neexistuje'); // L64
define('DB_CHARSET_LABEL', 'Znaková sada databáze');
define('DB_CHARSET_HELP', 'MySQL obsahuje podporu znakových sad, která vám umožňuje ukládat data pomocí různých znakových sad a provádět porovnání podle různých kolací.');
define('DB_COLLATION_LABEL', 'Kolace databáze');
define('DB_COLLATION_HELP', 'Kolace je soubor pravidel pro porovnávání znaků v znakové sadě.');
define('DB_PREFIX_LABEL', 'Předpona tabulek');    // L30
define('DB_PREFIX_HELP', 'Tato předpona bude přidána ke všem nově vytvořeným tabulkám, aby se zabránilo konfliktům názvů v databázi. Pokud si nejste jisti, ponechte výchozí hodnotu'); // L63
define('DB_PCONNECT_LABEL', 'Použít trvalé připojení');    // L54
define('DB_PCONNECT_HELP', "Výchozí je 'Ne'. Pokud si nejste jisti, nechte prázdné"); // L69
define('DB_DATABASE_LABEL', 'Databáze');
define('LEGEND_ADMIN_ACCOUNT', 'Účet administrátora');
define('ADMIN_LOGIN_LABEL', 'Přihlášení administrátora'); // L37
define('ADMIN_EMAIL_LABEL', 'E-mail administrátora'); // L38
define('ADMIN_PASS_LABEL', 'Heslo administrátora'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Potvrdit heslo'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Předchozí'); // L42
define('BUTTON_NEXT', 'Pokračovat'); // L47
// Messages
define('XOOPS_FOUND', '%s nalezen');
define('CHECKING_PERMISSIONS', 'Kontrola oprávnění souborů a adresářů...'); // L82
define('IS_NOT_WRITABLE', '%s NENÍ zapisovatelný.'); // L83
define('IS_WRITABLE', '%s je zapisovatelný.'); // L84
define('XOOPS_PATH_FOUND', 'Cesta nalezena.');
//define('READY_CREATE_TABLES', 'Nebyly detekovány žádné tabulky XOOPS.<br>Instalátor je nyní připraven vytvořit systémové tabulky XOOPS.');
define('XOOPS_TABLES_FOUND', 'Systémové tabulky XOOPS již v databázi existují.'); // L131
define('XOOPS_TABLES_CREATED', 'Systémové tabulky XOOPS byly vytvořeny.');
//define('READY_INSERT_DATA', 'Instalátor je nyní připraven vložit počáteční data do databáze.');
//define('READY_SAVE_MAINFILE', 'Instalátor je nyní připraven uložit zadaná nastavení do <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Nastavení uložena');
define('SAVED_MAINFILE_MSG', 'Instalátor uložil zadaná nastavení do <em>mainfile.php</em> a <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'Data XOOPS nalezena v databázi.');
define('DATA_INSERTED', 'Počáteční data byla vložena do databáze.');
// %s is database name
define('DATABASE_CREATED', 'Databáze %s vytvořena!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Nelze vytvořit tabulku %s'); // L118
define('TABLE_CREATED', 'Tabulka %s vytvořena.'); // L45
define('ROWS_INSERTED', '%d záznamů vloženo do tabulky %s.'); // L119
define('ROWS_FAILED', 'Selhalo vložení %d záznamů do tabulky %s.'); // L120
define('TABLE_ALTERED', 'Tabulka %s aktualizována.'); // L133
define('TABLE_NOT_ALTERED', 'Selhala aktualizace tabulky %s.'); // L134
define('TABLE_DROPPED', 'Tabulka %s odstraněna.'); // L163
define('TABLE_NOT_DROPPED', 'Selhalo odstranění tabulky %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Nelze přistoupit k zadané složce. Ověřte, zda existuje a je čitelná serverem.');
define('ERR_NO_XOOPS_FOUND', 'V zadané složce nebyla nalezena žádná instalace XOOPS.');
define('ERR_INVALID_EMAIL', 'Neplatný e-mail'); // L73
define('ERR_REQUIRED', 'Informace je vyžadována.'); // L41
define('ERR_PASSWORD_MATCH', 'Hesla se neshodují');
define('ERR_NEED_WRITE_ACCESS', 'Server musí mít přístup k zápisu do následujících souborů a složek<br>(např. <em>chmod 775 název_adresáře</em> na serveru UNIX/LINUX)<br>Pokud nejsou k dispozici nebo nejsou správně vytvořeny, vytvořte je ručně a nastavte správná oprávnění.');
define('ERR_NO_DATABASE', 'Nelze vytvořit databázi. Kontaktujte administrátora serveru pro podrobnosti.'); // L31
define('ERR_NO_DBCONNECTION', 'Nelze se připojit k databázovému serveru.'); // L106
define('ERR_WRITING_CONSTANT', 'Selhalo zápis konstanty %s.'); // L122
define('ERR_COPY_MAINFILE', 'Nelze zkopírovat distribuční soubor do %s');
define('ERR_WRITE_MAINFILE', 'Nelze zapisovat do %s. Zkontrolujte oprávnění souboru a zkuste to znovu.');
define('ERR_READ_MAINFILE', 'Nelze otevřít %s pro čtení');
define('ERR_INVALID_DBCHARSET', "Znaková sada '%s' není podporována.");
define('ERR_INVALID_DBCOLLATION', "Kolace '%s' není podporována.");
define('ERR_CHARSET_NOT_SET', 'Výchozí znaková sada není nastavena pro databázi XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Podpora');
define('LOGIN', 'Autentizace');
define('LOGIN_TITLE', 'Autentizace');
define('USER_LOGIN', 'Přihlášení administrátora');
define('USERNAME', 'Uživatelské jméno:');
define('PASSWORD', 'Heslo:');
define('ICONV_CONVERSION', 'Konverze znakové sady');
define('ZLIB_COMPRESSION', 'Komprese Zlib');
define('IMAGE_FUNCTIONS', 'Funkce pro obrázky');
define('IMAGE_METAS', 'Metadata obrázků (exif)');
define('FILTER_FUNCTIONS', 'Funkce filtru');
define('ADMIN_EXIST', 'Účet administrátora již existuje.');
define('CONFIG_SITE', 'Konfigurace webu');
define('CONFIG_SITE_TITLE', 'Konfigurace webu');
define('MODULES', 'Instalace modulů');
define('MODULES_TITLE', 'Instalace modulů');
define('THEME', 'Vybrat téma');
define('THEME_TITLE', 'Vybrat výchozí téma');
define('INSTALLED_MODULES', 'Následující moduly byly nainstalovány.');
define('NO_MODULES_FOUND', 'Nebyly nalezeny žádné moduly.');
define('NO_INSTALLED_MODULES', 'Není nainstalován žádný modul.');
define('THEME_NO_SCREENSHOT', 'Nebyl nalezen žádný snímek obrazovky');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Síla hesla');
define('PASSWORD_DESC', 'Heslo nebylo zadáno');
define('PASSWORD_GENERATOR', 'Generátor hesel');
define('PASSWORD_GENERATE', 'Generovat');
define('PASSWORD_COPY', 'Kopírovat');
define('PASSWORD_VERY_WEAK', 'Velmi slabé');
define('PASSWORD_WEAK', 'Slabé');
define('PASSWORD_BETTER', 'Lepší');
define('PASSWORD_MEDIUM', 'Střední');
define('PASSWORD_STRONG', 'Silné');
define('PASSWORD_STRONGEST', 'Nejsilnější');
//2.5.7
define('WRITTEN_LICENSE', 'Zapsán licenční klíč XOOPS %s: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Zkusit znovu');
define('CHMOD_CHGRP_IGNORE', 'Přesto použít');
define('CHMOD_CHGRP_ERROR', 'Instalátor nemusí být schopen zapsat konfigurační soubor %1$s.<p>PHP zapisuje soubory pod uživatelem %2$s a skupinou %3$s.<p>Adresář %4$s/ má uživatele %5$s a skupinu %6$s');
//2.5.9
define("CURL_HTTP", "Knihovna URL klienta (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Doména cookies pro web');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Doména pro nastavení cookies. Může být prázdná, plný hostitel z URL (www.example.com), nebo registrovaná doména bez subdomén (example.com) pro sdílení napříč subdoménami (www.example.com a blog.example.com).');
define('INTL_SUPPORT', 'Funkce internacionalizace');
define('XOOPS_SOURCE_CODE', "XOOPS na GitHubu");
define('XOOPS_INSTALLING', 'Instalace');
define('XOOPS_ERROR_ENCOUNTERED', 'Chyba');
define('XOOPS_ERROR_SEE_BELOW', 'Podívejte se níže na zprávy.');
define('MODULES_AVAILABLE', 'Dostupné moduly');
define('INSTALL_THIS_MODULE', 'Přidat %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Nelze zkopírovat konfigurační soubor %s');
