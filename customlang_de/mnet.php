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
 * @package    core
 * @subpackage mnet
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error7020'] = 'Dieser Fehler tritt normalerweise auf, wenn die Remote-Server einen Dateneintrag für wwwroot falsch erzeugt hat, z.B. https://domain.de statt https://www.domain.de. Sie sollten die Administratoren der Remote-Server über die richtige Einstellung für wwwroot informieren (so wie in config.php angegeben), damit der dortige Dateneintrag für Ihren Server korrigiert werden kann.';
$string['expireyourkeyexplain'] = 'Moodle wechselt Ihren PublicKey automatisch alle 28 Tage (Standard). Sie haben aber jederzeit die Möglichkeit, den PublicKey <em>manuell</em> zu löschen. Dies ist nur dann sinnvoll, wenn Sie fürchten, Ihr PublicKey könnte gefälscht sein. Ein Ersatz wird dann umgehend automatisch erstellt.<br />Das Löschen des PublicKey macht es unmöglich, dass andere Moodle mit Ihrem Moodle kommunizieren können, solange bis Sie Ihren neuen PublicKey manuell an die anderen Administratoren übermittelt haben.';
$string['failedaclwrite'] = 'Fehler beim Schreiben in die MNet-Access-Kontrollliste für Nutzer \'{$a}\\';
$string['hidelocal'] = 'Lokale Nutzer verbergen';
$string['hideremote'] = 'Entfernte Nutzer verbergen';
$string['mnet_session_prohibited'] = 'Teilnehmer Ihres Moodle-Servers sind aktuell nicht für einen Wechsel auf {$a} zugelassen.';
$string['nolocaluser'] = 'Für diesen Remote-Nutzer ist kein lokaler Datensatz vorhanden. Ein Datensatz konnte auch nicht erzeugt werden, weil dieser Rechner Nutzerkonten nicht automatisch anlegt. Bitte melden Sie sich bei Ihrerm Administrator!';
$string['peerprofilefielddesc'] = 'Hier können Sie die globalen Einstellungen ändern, die beim Hinzufügen neuer Nutzer gesendet und importiert werden.';
$string['privacy:metadata:mnet_external:address'] = 'Adresse vom Nutzer';
$string['privacy:metadata:mnet_external:alternatename'] = 'Alternativer Name vom Nutzer';
$string['privacy:metadata:mnet_external:autosubscribe'] = 'Einstellung, ob der Benutzer automatisch für die Foren angemeldet werden soll, in denen er Beiträge veröffentlicht.';
$string['privacy:metadata:mnet_external:city'] = 'Ort vom Nutzer';
$string['privacy:metadata:mnet_external:country'] = 'Land, in dem der Nutzer ist';
$string['privacy:metadata:mnet_external:currentlogin'] = 'Aktuelle Anmeldung vom Nutzer';
$string['privacy:metadata:mnet_external:department'] = 'Abteilung, in der der Nutzer gefunden werden kann';
$string['privacy:metadata:mnet_external:emailstop'] = 'Eine Einstellung, um den E-Mail-Versand zu dem Nutzer anzuhalten';
$string['privacy:metadata:mnet_external:firstaccess'] = 'Zeitpunkt, zu dem der Nutzer das erste Mal auf die Website zugegriffen hat';
$string['privacy:metadata:mnet_external:institution'] = 'Die Institution, in der der Nutzer Mitglied ist';
$string['privacy:metadata:mnet_external:lastaccess'] = 'Zeitpunkt, zu dem der Nutzer das letzte Mal auf die Website zugegriffen hat';
$string['privacy:metadata:mnet_external:maildisplay'] = 'Einstellung des Benutzers, ob die E-Mail-Adresse anderen Benutzern gezeigt wird';
$string['privacy:metadata:mnet_external:picture'] = 'Die mit diesem Nutzer verknüpften Bilddetails';
$string['privacy:metadata:mnet_external:policyagreed'] = 'Eine Markierung, um festzustellen, ob der Nutzer den Website-Richtlinien zugestimmt hat.';
$string['privacy:metadata:mnet_external:suspended'] = 'Eine Markierung, die anzeigt, ob der Nutzer in diesem System gesperrt wurde.';
$string['privacy:metadata:mnet_log:action'] = 'Vom Nutzer ausgeführte Aktion.';
$string['remoteuser'] = 'Remote-Nutzer {$a->remotetype}';
$string['ssl_acl_allow'] = 'SSO ACL: Nutzer {$a->user} von {$a->host} zulassen';
$string['ssl_acl_deny'] = 'SSO ACL: Nutzer {$a->user} von {$a->host} zurückweisen';
$string['ssoacldescr'] = 'Diese Seite regelt die Erlaubnis/ das Verbot des Zugriffs spezifischer Nutzer von anderen Moodle-Netzwerk Hosts. Dies ist hilfreich, wenn SSO Services für externe Nutzer angeboten wird. Zur Kontrolle der <em>lokalen</em> Nutzerberechtigungen für andere Moodle-Netzwerk Hosts gewähren Sie den Zugriff durch die <em>mnetlogintoremote</em> Berechtigung.';
$string['usercannotchangepassword'] = 'Als Remote-Nutzer können Sie Ihr Kennwort hier nicht ändern.';
