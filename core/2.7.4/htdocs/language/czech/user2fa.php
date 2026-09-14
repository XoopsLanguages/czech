<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Druhý krok');
define('_US_2FA_PROMPT', 'Zadejte kód z autentizační aplikace');
define('_US_2FA_CODE', 'Ověřovací kód');
define('_US_2FA_PROMPT_EMAIL', 'Odeslali jsme šestimístný kód na %s. Zadejte jej níže.');
define('_US_2FA_CODE_EMAIL', 'Kód z vašeho e-mailu');
define('_US_2FA_SEND', 'Odeslat nový kód');
define('_US_2FA_SENT', 'Nový kód byl odeslán na %s. Je platný deset minut.');
define('_US_2FA_SEND_WAIT', 'Kód byl odeslán před méně než minutou. Než požádáte o další, zkontrolujte doručenou poštu a složku se spamem.');
define('_US_2FA_SEND_FAILED', 'Kód se nyní nepodařilo odeslat. Zkuste to za chvíli znovu, nebo použijte obnovovací kód.');
define('_US_2FA_EMAIL_SUBJECT', '%s: váš přihlašovací kód');
define('_US_2FA_EMAIL_BODY', 'Váš přihlašovací kód pro %s je:

%s

Je platný %d minut a funguje jednorázově. Pokud jste o něj nežádali, tuto zprávu ignorujte a zvažte změnu hesla.');
define('_US_2FA_RECOVERY', 'Použít místo toho obnovovací kód');
define('_US_2FA_RECOVERY_HINT', 'Každý obnovovací kód funguje jednorázově. Jeho použitím vám bude odeslán e-mail.');
define('_US_2FA_SUBMIT', 'Pokračovat');
define('_US_2FA_STARTAGAIN', 'Toto přihlášení vypršelo nebo bylo přerušeno. Začněte prosím znovu.');
define('_US_2FA_BACKTOLOGIN', 'Zpět na přihlašovací formulář');
define('_US_2FA_BADCODE', 'Tento kód nebyl přijat.');
define('_US_2FA_LOCKED', 'Příliš mnoho pokusů. Druhý krok je uzamčen na patnáct minut; obnovovací kód stále funguje.');
define('_US_2FA_UNAVAILABLE', 'Druhý krok momentálně není k dispozici. Obnovovací kód stále funguje, nebo kontaktujte správce webu.');
define('_US_2FA_REQUIRED', 'Tento účet má povolené dvoufaktorové ověřování. Přihlaste se přes přihlašovací stránku webu.');
define('_US_2FA_HTTP_LOGIN', 'Toto vyskakovací okno nemůže dokončit dvoufaktorové přihlášení přes HTTP, protože vaše heslo by bylo odesláno bez šifrování. Použijte místo toho přihlášení na webu, nebo požádejte správce o povolení HTTPS pro web.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: druhý krok uzamčen');
define('_US_2FA_LOCKED_MAIL_BODY', 'Pro váš účet na %s bylo z %s zadáno pět nesprávných kódů druhého kroku. Druhý krok je uzamčen na patnáct minut. Pokud jste to nebyli vy, změňte si heslo.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: byl použit obnovovací kód');
define('_US_2FA_RECOVERY_MAIL_BODY', 'K přihlášení k vašemu účtu na %s z %s byl použit obnovovací kód. Tento kód již nefunguje. Pokud jste to nebyli vy, změňte si heslo a resetujte své obnovovací kódy.');
