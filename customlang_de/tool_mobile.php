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
 * @package    tool
 * @subpackage mobile
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apppolicy_help'] = 'Die URL zur Datenschutzinfo für Nutzer der mobilen App, die auf der Seite \'Info\' in der App aufgeführt ist. Wenn das Feld leer bleibt, wird stattdessen die URL der Datenschutzinfo für die Website verwendet.';
$string['autologinmintimebetweenreq_desc'] = 'Minimale Zeit zwischen zwei Auto-Login-Versuchen mit der mobilen App. Sie sollten einen niedrigen Wert verwenden, wenn Nutzer der App häufig aufgefordert werden, ihre Anmeldedaten einzugeben, um eingebettete Inhalte anzuzeigen.';
$string['autologinnotallowedtoadmins'] = 'Das Auto-Login ist für Administratoren der Website nicht erlaubt.';
$string['autologout'] = 'Automatisches Abmelden für Nutzer erzwingen';
$string['autologout_desc'] = 'Aus Sicherheitsgründen können Sie das automatische Abmelden für alle Nutzer erzwingen, wenn diese die App verlassen, schließen oder in den Hintergrund bringen. Nutzer müssen sich dann neu anmelden, wenn sie zur App zurückkehren.';
$string['custommenuitems_desc'] = 'Im Hauptmenü der App können zusätzliche Punkte hinzugefügt werden. Geben Sie jeden nutzerdefinierten Menüpunkt in eine neue Zeile mit folgendem Format ein: Menütext, Link-URL, Link-Öffnungsmethode und Sprachcode (optional zum Anzeigen in der angegebenen Sprache), jeweils getrennt durch Pipe-Zeichen. Methoden zum Öffnen von Links sind: App (zum Verknüpfen mit einer von der App unterstützten Aktivität), inappbrowser (zum Öffnen im Browser innerhalb der App), Browser (zum Öffnen im Standardbrowser außerhalb der App) und embedded (zum Anzeigen in einem iframe auf einer neuen Seite innerhalb der App). Beispiele: <pre> App-Hilfe|https://someurl.zyx/help|inappbrowser Meine Bewertungen|https://someurl.zyx/local/mygrades/index.php|embedded|en Mis calificaciones|https://someurl.zyx/local/mygrades/index.php|embedded|es You will only see this in English|https://someurl.zyx/english|browser|en_only </pre>';
$string['customusermenuitems_desc'] = 'Im Nutzermenü der App können zusätzliche Menüpunkte hinzugefügt werden. Geben Sie jeden nutzerdefinierten Menüpunkt in einer neuen Zeile im folgenden Format ein: Elementtext, Link-URL, Methode zum Öffnen und Sprachcode, jeweils getrennt durch das Pipe-Zeichen. Der Spachcode ist optional, um den Menüpunkt nur in der angegebenen Sprache anzuzeigen. Folgende Methoden zum Öffnen von Links stehen zur Verfügung: app (zum Verlinken zu einer von der App unterstützten Aktivität), inappbrowser (zum Öffnen eines Links im internen Browser), browser (zum Öffnen des Links im Standardbrowser des Geräts außerhalb der App) und embedded (zum Anzeigen des Links in einem iFrame auf einer neuen Seite innerhalb der App). Wenn für ein Element keine Übersetzung in einer bestimmten Sprache verfügbar ist, werden andere Sprachen als Fallback verwendet, es sei denn, dem Sprachcode wird „_only“ angehängt. Beispiel: <pre> App Hilfe|https://someurl.xyz/help|inappbrowser My grades|https://someurl.xyz/local/mygrades/index.php|embedded|en Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es You will only see this in English|https://someurl.xyz/english|browser|en_only </pre>';
$string['enabledeeplinkautologin_desc'] = 'Nutzer werden automatisch innerhalb der mobilen App auf ihrer Website angemeldet, wenn sie einen DeepLink öffnen, der gültige Authentifizierungstoken enthält.';
$string['filetypeexclusionlist_desc'] = 'Wählen Sie alle Dateitypen aus, die nicht für ein mobiles Endgerät vorgesehen sind. Solche Dateien werden zwar weiter im Kurs aufgelistet, aber beim Versuch, sie zu öffnen, wird eine Warnung angezeigt. Nutzer können die Warnung aber ignorieren und die Datei trotzdem öffnen.';
$string['forcelogout_desc'] = 'Diese Einstellung legt fest, dass Nutzer immer vollständig abgemeldet werden und beim nächsten Zugriff auf der Website ihr Kennwort neu eingeben müssen.';
$string['logocanappearapp_desc'] = 'Bieten Sie Nutzern mit einem Premium-Plan ein einheitliches Markenerlebnis auf Ihrer Website und Ihren mobilen Endgeräten.';
$string['logointheapp_description'] = 'Sie haben Ihr Logo eingerichtet, aber die Nutzer sehen es noch nicht in der Moodle-App.';
$string['matomocantrackapp_desc'] = 'Sie haben Matomo für Ihre Website eingerichtet. Mit einem Premium-Abonnement kann Ihre Matomo-Instanz auch nachverfolgen, wie Nutzer die Moodle-App nutzen.';
$string['minimumversion'] = 'Wenn eine minimal erforderliche Version für die Moodle-App (ab 3.8.0) vorgegeben ist, werden Nutzer mit einer älteren Version zur Aktualisierung der App aufgefordert, bevor sie auf die Website zugreifen können.';
$string['missedadditionalusers'] = 'Alle weiteren Nutzer erhalten diesen Monat keine Push-Benachrichtigungen.';
$string['missedusers'] = 'Nutzer, die diesen Monat keine Push-Benachrichtigungen mehr erhalten: {$a}.';
$string['notificationslimitreached'] = 'Das monatliche Gerätelimit ist erreicht. Einige Nutzer erhalten keine Push-Benachrichtigungen. Erweitern Sie Ihr Abo, um sicherzustellen, dass alle Nutzer mobile Benachrichtigungen erhalten.';
$string['privacy:metadata:core_userkey'] = 'Nutzerschlüssel zum Erstellen eines Auto-Login für den aktuellen Benutzer';
$string['qrcodetype_desc'] = 'Nutzer der mobilen App können einen QR-Code scannen, um die Website-URL automatisch einzufügen. Bei sicheren Websites (HTTPS) ermöglicht der Code zudem die automatische Anmeldung, ohne dass Anmeldename und Kennwort eingegeben werden müssen.';
$string['qrsameipcheck_desc'] = 'Nutzer müssen beim Generieren und beim Scannen einer QR-Code-Anmeldung das gleiche Netzwerk verwenden. Deaktivieren Sie diese Option nur, wenn es Probleme mit der QR-Code-Anmeldung gibt.';
$string['qrsiteadminsnotallowed'] = 'Aus Sicherheitsgründen können Sie sich nicht über einen QR-Code anmelden, wenn Sie Administrator sind oder sich als ein anderer Benutzer angemeldet haben.';
$string['readingthisemailgettheapp'] = '<a href="---"> Moodle StGH</a>';
$string['tasknotifypushnotificationlimittoadmins'] = 'Benachrichtigen Sie die Administratoren, wenn das Limit für Push-Benachrichtigungen in der mobilen App erreicht ist.';
