xoopseditor poskytuje skupinu editorů pro XOOPS

uživatelská příručka:

1 zkontrolujte soubory xoops_version.php pod /xoopseditor/, abyste se ujistili, že jsou novější než vaše aktuální

2 nahrajte /xoopseditor/ do /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 nakonfigurujte předvolby tam, kde je to možné
3.1 ./dhtmlext(všichni editoři)/language/: vytvořte soubor místního jazyka založený na english.php
3.3 ./dhtmlext(všechny editory)/editor_registry.php: nastavení konfigurací pro editor: order - pořadí zobrazení v případě použití výběru editoru, 0 pro zakázání; nohtml – funguje pro nehtml syntaxi
3.3 ./FCKeditor/module/: zkopírujte soubory do složek modulů v případě, že jsou vyžadována oprávnění k nahrávání specifická pro modul, úložiště a možnosti editoru
3.3.1 ./FCKeditor/module/fckeditor.config.js: pro možnosti editoru je obvykle nemusíte měnit
3.3.2 ./FCKeditor/module/fckeditor.connector.php: k určení složky pro procházení souborů (a nahrávání úložiště) => XOOPS/uploads/XOOPS_FCK_FOLDER/, složku je nutné vytvořit ručně
3.3.3 ./FCKeditor/module/fckeditor.upload.php: zadejte oprávnění k nahrávání a úložiště pro nahrávání
3.4 XOOPS/uploads/fckeditor/: k vytvoření složky, pokud je povolen FCKeditor, používá se pro nahrávání, ze kterého není složka pro nahrávání specifikována
3.5 ./tinymce/tinymce/jscripts/: stáhněte si místní jazykové soubory z http://tinymce.moxiecode.com/language.php

4 zkontrolujte názvy souborů: u systému s rozlišováním malých a velkých písmen se ujistěte, že máte názvy souborů doslovně správné, tj. „FCKeditor“ není totožné s „fckeditor“

5 zkontrolujte /xoopseditor/sampleform.inc.php pro vývojovou příručku
