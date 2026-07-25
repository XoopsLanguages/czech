<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: cs

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Hlášení chyb a analýza výkonu pomocí PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Zobrazit DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Povolit Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', 'Povolit záložku zahrnutých souborů');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Zobrazit všechny PHP soubory načtené během požadavku');
define('_MI_DEBUGBAR_SLOWQUERY', 'Práh pomalého dotazu (sekundy)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Dotazy pomalejší než toto jsou zvýrazněny červeně (např. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Zaznamenávání dotazů');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Všechny dotazy nebo jen pomalé a chyby');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Všechny dotazy');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Jen pomalé a chyby');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Povolit integraci Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Posílat ladicí data do aplikace Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Domů');
define('_MI_DEBUGBAR_MENU_ABOUT', 'O modulu');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Zpět na administraci ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Přehled');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Prohlášení o odmítnutí odpovědnosti');
\define('_MI_DEBUGBAR_LICENSE', 'Licence');
\define('_MI_DEBUGBAR_SUPPORT', 'Podpora');
