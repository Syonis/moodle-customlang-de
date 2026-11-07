<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from ---
 *
 * @package    report
 * @subpackage security
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_defaultuserrole_details'] = '<p>Alle angemeldeten Nutzer haben zunächst Rechte aus der Standardrolle für Nutzer. Für diese Rolle sollten keine riskanten Berechtigungen vergeben worden sein.</p> <p>Die einzige Rolle, für die das zunächst zutrifft, ist die Rolle <em>authentifizierter Nutzer</em>. Das Recht \'Kurse anzeigen\' muss nicht aktiviert sein.</p><p>Prüfen Sie bitte, ob die Option für die automatische Löschanfrage von Daten (tool_dataprivacy | automaticdatadeletionapproval) aktiviert ist. Nutzer können Löschungen anfordern, die große Mengen von Daten entfernen. </p>';
$string['check_defaultuserrole_name'] = 'Standardrolle für alle Nutzer';
$string['check_defaultuserrole_ok'] = 'Standardrolle für alle Nutzer sind richtig definiert.';
$string['check_emailchangeconfirmation_details'] = '<p>Es wird empfohlen, eine E-Mail-Bestätigung einzufordern, wenn Nutzer ihre E-Mail-Adresse im Nutzerprofil ändern. Falls diese Einstellung deaktiviert ist, könnten Spammer versuchen, den Webserver zum Versenden von Spam zu missbrauchen.</p> <p></p>';
$string['check_embed_details'] = '<p>Die uneingeschränkte Nutzung von Objekteinbettungen ist äußerst gefährlich, weil registrierte Nutzer den Server über Cross-Website-Scripting (XSS) angreifen könnten. Diese Einstellung sollte auf produktiven Servern deaktiviert sein.</p>';
$string['check_frontpagerole_details'] = '<p>Die standardmäßige Rolle für die Startseite erhalten alle angemeldeten Nutzer für Aktivitäten auf der Startseite. Beachten Sie, dass für die Startseite keine bedenklichen Rechte vergeben werden dürfen.</p> <p>Es wird empfohlen, immer eine Rolle neu anzulegen und keine vorgegebene Rolle zu verändern.</p>';
$string['check_guestrole_details'] = '<p>Die Gastrolle wird für Gäste, nichteingeloggte Nutzer und den temporären Gastzugang zu Kursen verwendet. Achten Sie unbedingt darauf, keine unsicheren Berechtigungen für diese Rolle zuzulassen.<p> </p>Der unterstützte Legacytyp für die Gastrolle ist <em>Gast</em>.</p>';
$string['check_mediafilterswf_details'] = '<p>Die automatische Einbettung von Flash-Dateien .swf ist äußerst gefährlich, weil registrierte Nutzer den Server über Cross-Website-Scripting (XSS) angreifen könnten. Diese Einstellung sollte auf produktiven Servern deaktiviert sein.</p>';
$string['check_passwordpolicy_details'] = '<p>Kennwortregeln sollten unbedingt festgelegt werden. Oft ist es ziemlich einfach, Kennwörter zu erraten und unberechtigten Zugang zu Systemen zu bekommen. Die Regeln sollten aber nicht zu kompliziert sein. Besonders strenge Regeln führen nämlich häufig dazu, dass Nutzer sich die Kennwörter nicht merken können und diese daher vergessen oder sie aufschreiben.</p>';
$string['check_riskadmin_detailsok'] = '<p>Bitte prüfen Sie die folgende Liste von Serveradministratoren:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Prüfen Sie bitte die folgende Liste von Serveradministratoren:</p>{$a->admins} <p>Es wird empfohlen, die Rolle "Administrator" nur auf Systemebene zu vergeben. Die folgenden Nutzer verfügen über nicht unterstützte Zuweisungen zur Rolle "Administrator":</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administratoren';
$string['check_riskadmin_ok'] = '{$a} Serveradministratoren gefunden';
$string['check_riskadmin_warning'] = '{$a->admincount} Serveradministratoren und {$a->unsupcount} nicht unterstützte Zuweisung(en) zur Administrationsrolle gefunden.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Diese aktivierten Änderungen geben Nutzern die Möglichkeit, auch Nutzerdaten in eine Kurssicherung einzubeziehen. Prüfen Sie bitte, ob diese Berechtigung nötig ist.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Mit den obigen Rollen oder lokalen Rollenänderungen haben folgende Benutzerkonten die Berechtigung, personenbezogene Daten von allen in ihren Kursen eingetragenen Benutzern in Kurssicherungen einzubeziehen. Stellen Sie unbedingt sicher, dass diese Konten (a) vertrauenswürdig und (b) mit sicheren Kennwörtern gesichert sind:</p> {$a}';
$string['check_riskxss_details'] = '<p>RISK_XSS bezeichnet alle bedenklichen Berechtigungen, die ausschließlich nur absolut vertrauenswürdige Nutzer ausführen dürfen.</p> <p>Prüfen Sie bitte die folgende Nutzerliste und stellen Sie sicher, dass Sie ihnen voll trauen können:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS-vertrauenswürdige Nutzer';
$string['check_riskxss_warning'] = 'RISK_XSS - {$a} Nutzer gefunden, denen bezüglich Cross-Website-Scripting (XSS) vertraut werden muss!';
$string['check_securitymessages_details'] = '<p>Es wird dringend empfohlen, Benachrichtigungen für sicherheitskritische Meldungen zu aktivieren, damit Nutzer diese nicht abbestellen können. Dies umfasst Benachrichtigungen über neue Anmeldungen per E-Mail und mobile Push-Benachrichtigungen.</p>';
$string['check_webcron_ok'] = 'Nur autorisierte Benutzer dürfen auf cron zugreifen.';
$string['check_webcron_warning'] = 'Beliebige Benutzer können auf cron zugreifen.';
