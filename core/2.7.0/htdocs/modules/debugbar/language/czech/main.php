<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: cs

define('_MD_DEBUGBAR_DEBUG', 'Ladění');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Zahrnuté soubory');
define('_MD_DEBUGBAR_PHP_VERSION', 'Verze PHP');
define('_MD_DEBUGBAR_NONE', 'Žádný');
define('_MD_DEBUGBAR_ERRORS', 'Chyby');
define('_MD_DEBUGBAR_DEPRECATED', 'Zastaralé');
define('_MD_DEBUGBAR_QUERIES', 'Dotazy');
define('_MD_DEBUGBAR_BLOCKS', 'Bloky');
define('_MD_DEBUGBAR_EXTRA', 'Další');
define('_MD_DEBUGBAR_TIMERS', 'Časovače');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s se načetl za %s sekund.');
define('_MD_DEBUGBAR_TOTAL', 'Celkem');
define('_MD_DEBUGBAR_NOT_CACHED', 'Není v mezipaměti');
define('_MD_DEBUGBAR_CACHED', 'V mezipaměti (regeneruje se každých %s sekund)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(prázdný řetězec)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool PRAVDA');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool NEPRAVDA');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Databázové dotazy');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Využití paměti');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d dotazy');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d duplikáty)');
define('_MD_DEBUGBAR_BYTES', '%s bajtů');
define('_MD_DEBUGBAR_DB_VERSION', '%s verze');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Číslo chyby: %s Chybová zpráva: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Chyba #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Výjimka');
define('_MD_DEBUGBAR_RAY_QUERY', 'Dotaz #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'POMALU');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Blokovat (v mezipaměti %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Blokovat (neuloženo do mezipaměti)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Výpis');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Kontext šablony');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(žádné proměnné šablony)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d proměnných)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Adresář "modules/debugbar/%s" nebyl vytvořen');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Nepodařilo se vytvořit adresář "%s" během kopírování majetku');
