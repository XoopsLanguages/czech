<?php
//
// _LANGCODE: cs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> je open-source
    Objektově orientovaný webový publikační systém napsaný v PHP. Je to ideální nástroj pro
    vývoj malých i velkých dynamických komunitních webových stránek, vnitropodnikových portálů, firemních portálů, weblogů a mnoha dalších.
</p>
<p>
    XOOPS je uvolněn za podmínek
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU General Public License (GPL)</a>
    verze 2 nebo vyšší a je zdarma k použití a úpravám.
    Redistribuce je zdarma, pokud budete dodržovat distribuční podmínky GPL.
</p>
<h3>Požadavky</h3>
<ul>
    <li>WWW Server (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS atd.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 nebo vyšší, doporučeno 8.4+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 nebo vyšší, doporučeno 8.4.5+ </li>
</ul>
<h3>Před vámi install</h3>
<ol>
    <li>Nastavte správně WWW server, PHP a databázový server.</li>
    <li>Připravte si databázi pro svůj web XOOPS.</li>
    <li>Připravte uživatelský účet a udělte uživateli přístup k databázi.</li>
    <li>Nastavit tyto adresáře a soubory pro zápis: %s</li>
    <li>Z bezpečnostních důvodů důrazně doporučujeme přesunout dva níže uvedené adresáře ven <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">kořen dokumentu</a> a změnit názvy složek: %s</li>
    <li>Vytvořte (pokud ještě nejsou přítomny) a udělejte do těchto adresářů zapisovatelný: %s</li>
    <li>Zapněte soubory cookie a JavaScript prohlížeče.</li>
</ol>
<h3>Zvláštní poznámky</h3>
<ol>
    <li>Některé specifické kombinace systémového softwaru mohou vyžadovat některé další konfigurace, aby fungovaly
    s XOOPS. Pokud se některé z těchto témat týká vašeho prostředí, přečtěte si prosím úplné znění
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    instalační manuál</a> pro více informací.<br><br>

    <li><strong>SELinux</strong> aktivní systémy (např <strong>CentOS</strong>  a <strong>RHEL</strong>) může vyžadovat změny kontextu zabezpečení
    pro XOOPS adresáře navíc k normálním oprávněním k souborům, aby bylo možné do adresářů zapisovat.
    Obraťte se na systémovou dokumentaci a/nebo správce systému.
</ol>
';

return $content;

