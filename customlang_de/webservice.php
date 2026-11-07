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
 * @subpackage webservice
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcapabilitytousersdescription'] = 'Nutzer brauchen zwei Rechte: \'webservice:createtoken\' und ein zum jeweiligen Webservice-Protokoll passendes Recht (\'webservice/rest:use\', \'webservice/soap:use\', ...). <br />Zur Konfiguration ist es sinnvoll, eine neue Rolle \'Webservice\' mit dem Recht \'webservice:createtoken\' und mehreren Protokollrechten anzulegen und anschließend diese Rolle dem Webservice-Nutzer zuzuweisen.';
$string['allusers'] = 'Alle Nutzer';
$string['createservicedescription'] = 'Ein Service beinhaltet mehrere Webservice-Funktionen. Sie müssen Benutzern erlauben, auf den neuen Service zuzugreifen. Auf der Seite <strong>Service hinzufügen</strong> markieren Sie \'Aktivieren\' und \'Berechtigte Benutzer\'. Wählen Sie \'Keine notwendigen Rechte\' aus.';
$string['createserviceforusersdescription'] = 'Ein Service beinhaltet mehrere Webservice-Funktionen. Sie müssen Benutzern erlauben, auf den neuen Service zuzugreifen. Auf der Seite <strong>Service hinzufügen</strong> markieren Sie \'Aktivieren\' und markieren Sie nicht \'Berechtigte Benutzer\'. Wählen Sie \'Keine notwendigen Rechte\' aus.';
$string['downloadfiles_help'] = 'Nach der Aktivierung können alle Nutzer Dateien mit ihrem Sicherheitsschlüssel herunterladen. Dies gilt nur für die Dateien für die sie eine Berechtigung haben.';
$string['forbiddenwsuser'] = 'Sie können keine Token erzeugen, wenn Nutzer unbestätigt, gelöscht, gesperrt oder Gäste sind.';
$string['loginrequired'] = 'Nur für angemeldete Nutzer';
$string['missingcaps_help'] = 'Liste der durch den Webservice festgelegten Funktionen, über die dieser Benutzer nicht verfügt. Einige Funktionen könnten ohne die entsprechenden Rechte nicht verfügbar sein.';
$string['nocapabilitytouseparameter'] = 'Der Benutzer besitzt nicht die notwendigen Rechte, um die Parameter \'{$a}\' zu verwenden';
$string['potusers'] = 'Unberechtigte Benutzer';
$string['potusersmatching'] = 'Passende unberechtigte Benutzer';
$string['privacy:metadata:serviceusers'] = 'Liste von Nutzern, die einen bestimmten externen Dienst nutzen können';
$string['privacy:metadata:tokens:creatorid'] = 'ID des Benutzers, der das Token erstellt hat';
$string['privacy:metadata:tokens:userid'] = 'ID des Benutzers, dem das Token gehört';
$string['requiredcapability_help'] = 'Wenn die Option aktiviert ist, können ausschließlich Nutzer mit den notwendigen Rechten diesen Webservice nutzen.';
$string['restrictedusers'] = 'Nur berechtigte Benutzer';
$string['restrictedusers_help'] = 'Diese Option legt fest, ob alle Personen mit dem Recht \'moodle/webservice:createtoken\' ein Token für diesen Webservice auf der Seite \'Sicherheitsschlüssel\' erstellen dürfen oder ob dies nur berechtigte Benutzer tun können.';
$string['selectauthorisedusers'] = 'Berechtigte Benutzer auswählen';
$string['selectspecificuser'] = 'Speziellen Nutzer auswählen';
$string['servicehelpexplanation'] = 'Ein Webservice ist ein Set von Funktionen. Er kann von allen oder ausschließlich von speziell ausgewählten Nutzern verwendet werden.';
$string['serviceusers'] = 'Berechtigte Benutzer';
$string['serviceusersettings'] = 'Nutzer-Einstellungen';
$string['serviceusersmatching'] = 'Passende berechtigte Benutzer';
$string['serviceuserssettings'] = 'Einstellungen für berechtigte Benutzer ändern';
$string['testauserwithtestclientdescription'] = 'Simulieren Sie einen externen Dienstzugriff mit dem Webservice-Testclient. Loggen Sie sich zuerst als Nutzer mit der Berechtigung "moodle/webservice:createtoken" ein. Suchen Sie die Option \'Sicherheitsschlüssel\' (Token) auf der Nutzerseite \'Einstellungen\'. Verwenden Sie das Token im Testclient. Wählen Sie im Testclient ein aktiviertes Protokoll mit Token-Authentifizierung. <strong>Achtung: Die getesteten Funktionen werden für dieses Nutzerkonto tatsächlich ausgeführt. Seien Sie deswegen vorsichtig mit der Auswahl Ihrer Tests.</strong>';
$string['tokencreatedbyadmin'] = 'Kann ausschließlich von Administratoren zurückgesetzt werden (*)';
$string['uploadfiles_help'] = 'Wenn diese Option aktiviert ist, können alle Nutzer Dateien unter Verwendung ihrer Sicherheitsschlüssel in \'Meine Dateien\' oder in einen Entwurfsbereich hochladen. Alle Dateiquotas gelten.';
$string['userasclientsdescription'] = 'Die folgenden Schritte helfen Ihnen, den Webservice für Nutzer als Clients zu konfigurieren. Dabei wird auch das Erzeugen des empfohlenen Sicherheitsschlüssels (Token) zur Authentifizierung gezeigt. Im Anwendungsfall erzeugen Nutzer selber ihr persönliches Token über die Option \'Sicherheitsschlüssel\' auf ihrer Nutzerseite \'Einstellungen\'.';
