<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> je open-source
    objektově orientovaný publikační systém napsaný v PHP. Je ideálním nástrojem pro
    vývoj malých až velkých dynamických komunitních webů, intranetových portálů, podnikových portálů, weblogů a mnoho dalšího.
</p>
<p>
    XOOPS je vydán pod licencí
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU General Public License (GPL)</a>
    verze 2 nebo vyšší, a je zdarma k použití a úpravám.
    Může být volně redistribuován, pokud dodržujete podmínky distribuce GPL.
</p>
<h3>Požadavky</h3>
<ul>
    <li>WWW server (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, apod.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 5.6.0 nebo vyšší, doporučeno 7.3+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.5 nebo vyšší, doporučeno 5.7+</li>
</ul>
<h3>Před instalací</h3>
<ol>
    <li>Správně nastavte WWW server, PHP a databázový server.</li>
    <li>Připravte databázi pro váš XOOPS web.</li>
    <li>Připravte uživatelský účet a udělte uživateli přístup k databázi.</li>
    <li>Nastavte oprávnění pro zápis do těchto adresářů a souborů: %s</li>
    <li>Z bezpečnostních důvodů se důrazně doporučuje přesunout níže uvedené adresáře mimo <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">kořenový adresář webu</a> a změnit názvy těchto složek: %s</li>
    <li>Vytvořte (pokud ještě neexistují) a nastavte oprávnění pro zápis do těchto adresářů: %s</li>
    <li>Zapněte soubory cookie a JavaScript ve svém prohlížeči.</li>
</ol>
<h3>Speciální poznámky</h3>
<p>Některé specifické kombinace systémového softwaru mohou vyžadovat další konfigurace pro správnou funkci
 s XOOPS. Pokud se na vaše prostředí vztahují některé z těchto témat, podívejte se na
 úplný <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">instalační manuál XOOPS</a> pro více informací.
</p>
<p>MySQL 8.0 není podporováno ve všech verzích PHP. I v podporovaných verzích mohou problémy s knihovnou
 PHP <em>mysqlnd</em> vyžadovat, aby byla nastavená hodnota <em>default-authentication-plugin</em> MySQL serveru na <em>mysql_native_password</em>
 pro správnou funkci.
</p>
<p>Systémy s povoleným SELinux (například CentOS a RHEL) mohou vyžadovat změny v bezpečnostním kontextu
 pro XOOPS adresáře kromě běžných oprávnění k souborům, aby bylo možné adresáře nastavit jako zapisovatelné.
 Konzultujte dokumentaci svého systému a/nebo správce systému.
</p>
';


return $content;

