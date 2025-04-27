<?php
/**
 *  TinyMCE adapter for XOOPS
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          core
 * @subpackage       xoopseditor
 * @since            2.3.0
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 */
/*
 * Spojeno s editor_registry.php
 */
// Název editoru
define('_XOOPS_EDITOR_TINYMCE', 'TinyMCE');
// Hodnota musí být stejná jako v /tinymce/jscripts/langs/kód_vašeho_jazyka, například „cs“ pro češtinu, „en“ pro angličtinu
// Podrobnosti viz http://tinymce.moxiecode.com/download_i18n.php
define('_XOOPS_EDITOR_TINYMCE_LANGUAGE', 'cs');
// SEZNAM PÍSEM, FORMÁT: „Název=hodnota1,hodnota2;Název=hodnota“
define('_XOOPS_EDITOR_TINYMCE_FONTS', 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,times new roman,times,serif;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times,serif;Verdana=verdana,arial,helvetica,sans-serif;Impact=impact;WingDings=wingdings');
define('_FAILGETIMG', 'Nepodařilo se získat obrázek %s');
