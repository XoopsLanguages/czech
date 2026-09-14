<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Oprávnění');
define('_MD_A_MYMENU_MYPREFERENCES','Předvolby');
// index.php
define('_AM_TH_DATETIME', 'Čas');
define('_AM_TH_USER', 'Uživatel');
define('_AM_TH_IP', 'IP');
define('_AM_TH_ZÁSTUPCE', 'AGENT');
define('_AM_TH_TYPE', 'Typ');
define('_AM_TH_DESCRIPTION', 'Popis');
define('_AM_TH_BADIPS','Špatné adresy IP<br><br><span style="font-weight:normal;">Napište každé IP řádek<br>prázdný znamená, že všechny adresy IP jsou povoleny</span>');
define('_AM_TH_GROUP1IPS','Povolené adresy IP pro skupinu=1<br><br><span style="font-weight:normal;">Napište každý IP řádek.<br>192.168. znamená 192.168.*<br>blank znamená, že všechny adresy IP jsou povoleny</span>');
define('_AM_LABEL_COMPACTLOG', 'Kompaktní log');
define('_AM_BUTTON_COMPACTLOG', 'Komprimovat!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Duplicitní (IP,Typ) záznamy budou odstraněny');
define('_AM_LABEL_REMOVEALL', 'Odebrat všechny záznamy');
define('_AM_BUTTON_REMOVEALL', 'Odebrat vše!');
define('_AM_JS_REMOVEALLCONFIRM', 'Všechny protokoly jsou absolutně odstraněny. jsi opravdu v pořádku?');
define('_AM_LABEL_REMOVE', 'Odebrat zaškrtnuté záznamy:');
define('_AM_BUTTON_REMOVE', 'Odebrat!');
define('_AM_JS_REMOVECONFIRM', 'Odebrat OK?');
define('_AM_MSG_IPFILESUPDATED', 'Soubory pro IP byly aktualizovány');
define('_AM_MSG_BADIPSCANTOPEN', 'Soubor s chybným IP nelze otevřít');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Soubor pro povolení group=1 nelze otevřít');
define('_AM_MSG_REMOVED', 'Záznamy jsou odstraněny');
define('_AM_MSG_DELFAILED', 'Nepodařilo se odstranit záznamy');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Přepněte do adresáře configs zapisovatelný: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Správce prefixů');
define('_AM_MSG_DBUPDATED', 'Databáze byla úspěšně aktualizována!');
define('_AM_CONFIRM_DELETE', 'Všechna data budou odstraněna. OK?');
define('_AM_TXT_HOWTOCHANGEDB',"Pokud chcete změnit předponu, <br> upravte %s/data/secure.php ručně.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Není zabezpečeno');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Pokud vidíte obrázek -NG- nebo odkaz vrací normální stránku, vaše XOOPS_TRUST_PATH není umístěna správně. Nejlepší místo pro XOOPS_TRUST_PATH je mimo DocumentRoot. Pokud to nemůžete udělat, musíte jako druhý nejlepší způsob umístit .htaccess (DENY FROM ALL) těsně pod XOOPS_TRUST_PATH.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Zkontrolujte, zda jsou soubory PHP uvnitř TRUST_PATH nastaveny pouze pro čtení (musí to být chyba 404, 403 nebo 500)');
define('_AM_ADV_REGISTERGLOBALS',"Je-li 'ZAPNUTO', toto nastavení vyvolává různé injekční útoky. Pokud můžete, v php.ini nastavte 'register_globals off', nebo pokud to není možné, vytvořte nebo upravte .htaccess ve svém adresáři XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN', 'Pokud je „ZAPNUTO“, umožňuje toto nastavení útočníkům spouštět libovolné skripty na vzdálených serverech.<br>Tuto možnost může změnit pouze správce.<br>Pokud jste správce, upravte soubor php.ini nebo httpd.conf.<br><b>Ukázka httpd.conf:<br> php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Jinak, vyzvedněte to svým administrátorům.');
define('_AM_ADV_USETRANSSID',"Pokud je 'ZAPNUTO', vaše ID relace se zobrazí ve značkách ukotvení atd.<br>Chcete-li zabránit zneužití relace, přidejte řádek do souboru .htaccess v XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Toto nastavení zve k 'SQL Injections'.<br>Nezapomeňte zapnout 'Force sanitizing *' v předvolbách tohoto modulu.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Přejděte do správce prefixů');
define('_AM_ADV_MAINUNPATCHED', 'Měli byste upravit svůj mainfile.php tak, jak je napsáno v README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Vaše databázová továrna je připravena na anti-SQL-Injection DBLayer Trapping');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Vaše databázová továrna není připravena na anti-SQL-Injection DBLayer Trapping. Jsou vyžadovány některé záplaty.');
define('_AM_ADV_SUBTITLECHECK', 'Zkontrolujte, zda Protector funguje dobře');
define('_AM_ADV_CHECKCONTAMI', 'Kontaminace');
define('_AM_ADV_CHECKISOCOM', 'Izolované komentáře');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'a vložte do něj řádek níže:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Předpona');
define('_AM_PROTECTOR_TABLES', 'Tabulky');
define('_AM_PROTECTOR_UPDATED', 'Aktualizováno');
define('_AM_PROTECTOR_COPY', 'Kopírovat');
define('_AM_PROTECTOR_ACTIONS', 'Akce');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Zakázat IP adresy na kontrolovaných záznamech:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Zákaz!');
define('_AM_JS_BANCONFIRM', 'IP Zákazy OK?');
define('_AM_MSG_BANNEDIP', 'IP adresy jsou blokovány');
define('_AM_ADMINSTATS_TITLE', 'Souhrn protokolu Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Minulý měsíc');
define('_AM_ADMINSTATS_LAST_WEEK', 'Minulý týden');
define('_AM_ADMINSTATS_LAST_DAY', 'Poslední den');
define('_AM_ADMINSTATS_LAST_HOUR', 'Poslední hodina');

//2.7.1 backfilled translations
define('_AM_TH_AGENT', 'AGENT');
