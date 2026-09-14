<?php
/**
 * Two-factor management strings.
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

define('_US_2FAM_TITLE', 'Dvoufaktorové ověřování');
define('_US_2FAM_PASSWORD', 'Vaše současné heslo');
define('_US_2FAM_ENABLE', 'Nastavit autentizační aplikaci');
define('_US_2FAM_CONFIRM', 'Potvrdit autentizační aplikaci');
define('_US_2FAM_CHOOSE', 'Vyberte, jak chcete přijímat druhý krok: pomocí autentizační aplikace nebo kódem e-mailem.');
define('_US_2FAM_ENABLE_EMAIL', 'Používat e-mailové kódy');
define('_US_2FAM_EMAIL_HELP', 'E-mailové kódy: při každém přihlášení se na %s odešle šestimístný kód. Méně bezpečné než autentizační aplikace, protože tímto krokem projde kdokoli, kdo si může přečíst váš e-mail.');
define('_US_2FAM_EMAIL_STEP', 'Odeslali jsme šestimístný kód na %s. Zadejte jej níže pro potvrzení. Je platný deset minut.');
define('_US_2FAM_CONFIRM_EMAIL', 'Potvrdit e-mailové kódy');
define('_US_2FAM_CODE_HELP_EMAIL', 'Šestimístný kód z e-mailu, který jsme vám právě zaslali.');
define('_US_2FAM_ENABLED_EMAIL', 'E-mailové kódy jsou nastaveny. Chcete-li provést změnu, zadejte své současné heslo a kód zaslaný e-mailem, nebo obnovovací kód. K vyžádání kódu použijte tlačítko níže.');
define('_US_2FAM_SEND', 'Poslat mi kód');
define('_US_2FAM_MANUAL', 'Klíč pro ruční nastavení');
define('_US_2FAM_SCAN', 'QR kód pro vaši autentizační aplikaci');
define('_US_2FAM_STEP_APP', 'Potřebujete autentizační aplikaci: funguje jakákoli aplikace nebo správce hesel, který generuje časové jednorázové kódy (TOTP), na telefonu nebo počítači. Pokud ji ještě nemáte, nejprve si nainstalujte aplikaci dle vlastního výběru (např. Google Authenticator, Microsoft Authenticator, Aegis nebo FreeOTP).');
define('_US_2FAM_STEP_ADD', 'V aplikaci přidejte účet: naskenujte tento QR kód, nebo zvolte ruční zadání a zapište klíč pro nastavení zobrazený pod ním.');
define('_US_2FAM_STEP_CODE', 'Aplikace nyní zobrazuje šestimístný kód, který se mění každých 30 sekund. Zadejte právě zobrazený kód do pole níže a potvrďte.');
define('_US_2FAM_CODE_HELP', 'Šestimístný kód, který vaše autentizační aplikace právě zobrazuje.');
define('_US_2FAM_HTTP', 'Toto připojení používá obyčejné HTTP. Vaše heslo, relace, klíč pro nastavení a obnovovací kódy mohou být zachyceny. Používejte HTTPS, kdykoli je to možné.');
define('_US_2FAM_CODES', 'Uložte si tyto obnovovací kódy nyní');
define('_US_2FAM_CODES_HELP', 'Každý kód funguje jednorázově. Tyto kódy již nebudou znovu zobrazeny. Uchovejte je na bezpečném místě odděleně od tohoto účtu.');
define('_US_2FAM_DISABLE', 'Zakázat dvoufaktorové ověřování');
define('_US_2FAM_REGENERATE', 'Nahradit obnovovací kódy');
define('_US_2FAM_ENABLED', 'Je nastavena autentizační aplikace. Chcete-li provést změnu, zadejte své současné heslo a ověřovací nebo obnovovací kód.');
define('_US_2FAM_DISABLED', 'Dvoufaktorové ověřování je zakázáno.');
define('_US_2FAM_PAUSED', 'Web pozastavil dvoufaktorové výzvy. Váš faktor zůstává zachován a možnost „zapamatovat si mě“ zůstává pro nastavené účty nedostupná.');
define('_US_2FAM_UNAVAILABLE', 'Nastavení nebo správa dvoufaktorového ověřování nejsou k dispozici. Kontaktujte prosím správce webu.');
define('_US_2FAM_STARTAGAIN', 'Nastavení vypršelo nebo se účet změnil. Pro opětovné zahájení nastavení zadejte své heslo.');
define('_US_2FAM_BADPASSWORD', 'Vaše současné heslo nebylo přijato.');
define('_US_2FAM_RESET', 'Resetovat dvoufaktorové ověřování tohoto uživatele');
define('_US_2FAM_STATUS_NONE', 'Nenastaveno');
define('_US_2FAM_STATUS_TOTP', 'Autentizační aplikace nastavena');
define('_US_2FAM_STATUS_EMAIL', 'E-mailové kódy nastaveny');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Stav není k dispozici');
define('_US_2FAM_RESET_HELP', 'Tímto se zakáže druhý faktor uživatele bez ohledu na nastavenou metodu a zruší se jeho obnovovací kódy a soubory cookie „zapamatovat si mě“. Existující přihlášené relace zůstanou aktivní. Pro potvrzení zadejte své vlastní heslo správce.');
define('_US_2FAM_RESET_DONE', 'Dvoufaktorové ověřování uživatele bylo resetováno.');
define('_US_2FAM_BACK', 'Zpět na účet');
define('_US_2FAM_DONE', 'Dvoufaktorové ověřování je povoleno.');
define('_US_2FAM_REPLACED', 'Předchozí obnovovací kódy byly zrušeny.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: dvoufaktorové ověřování bylo změněno');
define('_US_2FAM_NOTICE_BODY', 'Dvoufaktorové ověřování nebo obnovovací kódy vašeho účtu na %s byly změněny z %s. Pokud jste to nebyli vy, kontaktujte správce webu.');
define('_US_2FAM_RESET_SUBJECT', '%s: správce resetoval vaše dvoufaktorové ověřování');
define('_US_2FAM_RESET_BODY', 'Správce zakázal váš druhý faktor a zrušil jeho obnovovací kódy na %s z %s. Existující přihlášené relace zůstanou aktivní. Přihlaste se a znovu nastavte dvoufaktorové ověřování. Pokud to bylo neočekávané, kontaktujte správce webu.');
