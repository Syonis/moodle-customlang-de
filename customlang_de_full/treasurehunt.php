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
 * Local language pack from https://github.com/Syonis/moodle-customlang-de
 *
 * @package    mod
 * @subpackage treasurehunt
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addroad_tour'] = 'Fügen Sie einen oder mehrere Wege hinzu, denen die Spieler folgen sollen.';
$string['allowattemptsfromdate_help'] = 'Die Option legt den Zeitpunkt fest, ab dem die Spieler spielen dürfen. Wenn die Option deaktiviert ist, können die Spieler jederzeit starten.';
$string['cleartreasurehunt_done'] = 'Die Schatzsuche wurde zurückgesetzt. Alle Aktivitäten der Spieler sind gelöscht.';
$string['customlayername_help'] = 'Wenn Sie eine nutzerdefinierte Ebene verwenden, wird ein Titel benötigt, um die Ebene  in den Karten und bei den Spielern anzuzeigen. Wenn der Titel leer ist, wird die Ebene vollständig deaktiviert.';
$string['geolocation_needed'] = 'Um das Spiel spielen zu können, sind Ihre GPS-Standortdaten (Geolocation) nötig.<p>Erlauben Sie im Browser die Standortdaten für diese Website. Laden Sie anschließend die Webseite neu und antworten Sie mit "Ja", wenn Sie gefragt werden, ob Sie Ihren Standort teilen möchten.</p>
<p>Damit die Schatzsuche GPS verwenden kann, muss die Website über HTTPS vom Server kommen. Andernfalls ist nur der Modus "Spielen ohne Bewegung" möglich und die Spieler müssen die Stationen manuell auf der Karte zeigen. Wenden Sie sich an die Administratoren, wenn Sie dieses Problem nicht lösen können.</p>';
$string['groupid_help'] = 'Spieler in diesem Team sind diesem Weg zugeordnet, wenn das Spiel beginnt. Wenn es nur einen Weg gibt oder die gewählte Option "keine" lautet, wird der Weg von allen Spielern genutzt.';
$string['groupmode'] = 'Spieler spielen in Teams';
$string['groupmode_help'] = 'Die Option legt fest, dass die Spieler entsprechend der Kursgruppen in Teams eingeteilt werden. Jedes Teammitglied kann die aktuelle Station lösen und den Erfolg mit den ganzen Team teilen.
<br/>Dies ermöglicht es, die Schatzsuche zu „parallelisieren“ und eine größere Fläche abzudecken. Die Spieler sehen die gleichen Informationen, aber hier teamorientiert.';
$string['lockactivity_help'] = 'Blockieren Sie den Zugriff auf ausgewählte Aktivitäten, wenn sich Nutzer nicht an dieser Station befinden. Diese Einstellung konfiguriert automatisch Einschränkungen für die ausgewählten Aktivitäten. WARNUNG: Dies ist nur eine grundlegende automatische Konfiguration. Wenn Sie die Einschränkungen einer Aktivität manuell bearbeiten, wird sie möglicherweise nicht mehr hier angezeigt und die automatische Konfiguration funktioniert möglicherweise nicht.';
$string['lockactivityannounce'] = 'Wenn das <a href="https://github.com/juacas/moodle-availability_treasurehunt">Plugin "Treasurehunt Conditional Access"</a> auf dieser Website aktiviert ist, können Sie alle Aktivitäten außerhalb dieser Station für Nutzer unzugänglich machen.';
$string['playerstyle_help'] = 'Möglicherweise gibt es mehrere Stile des Spielbildschirms, die Trainer wählen können.';
$string['playstagewithoutmoving_help'] = 'Wenn diese Option aktiviert ist, können Spieler diese Station finden, ohne an einen anderen Ort zu wechseln.
Zu diesem Zweck wird jedes Mal eine Markierung gesetzt, wenn man auf die Karte klickt. Dabei wird die jeweils vorherige Markierung gelöscht, die den letzten Punkt anzeigt. Nach Abschluss der Phase wird das Spiel auf die Standardeinstellungen geändert.';
$string['playstagewithqr_help'] = 'Wenn diese Option einen Wert hat, können die Spieler diese Station über den dort  verfügbaren QR-Code erreichen.';
$string['playwithoutmoving_help'] = 'Wenn diese Option aktiviert ist, können Spieler auf ihren Computern spielen, ohne sich zu bestimmten Orten bewegen zu müssen.
Wenn die Spieler am Bildschirm auf die Karte klicken, wird eine Markierung gesetzt und die jeweils vorherige Markierung wird gelöscht.';
$string['privacy:metadata:treasurehunt_attempts'] = 'Die Schatzsuche speichert Art, Zeit und Ort der Versuche, Erfolge und Misserfolge der Teilnehmer während der Aktivität';
$string['showboard_help'] = 'Wenn diese Option aktiviert ist, werden die Fortschitte der anderen Spieler auf der Aktivitätsseite angezeigt.';
$string['showdistancehint_help'] = 'Wenn diese Option aktiviert ist, wird ein Hinweis auf die Entfernung zur nächsten Station angezeigt.
Dieser Hinweis wird sichtbar, wenn sich Spieler der nächsten Station nähern.';
$string['showheadinghint_help'] = 'Wenn diese Option aktiviert ist, wird ein Hinweis auf die Richtung zur nächsten Station angezeigt.
Dieser Hinweis wird sichtbar, wenn sich Spieler der nächsten Station nähern.';
$string['showinzonehint_help'] = 'Wenn diese Option aktiviert ist, wird ein Hinweis für die Zone der nächsten Station angezeigt.
Dieser Hinweis wird sichtbar, wenn sich Spieler in der Zone der nächsten Station befinden.';
$string['trackusers_help'] = 'Die Wege der Spieler werden kontinuierlich registriert und können mit der Anzeige "Track Viewer" sichtbar gemacht werden. Die Standorte werden auch zwischen den Validierungsversuchen automatisch in jedem Aktualisierungsintervall protokolliert. <br>Wenn diese Option <b>deaktiviert</b> ist, werden nur die Standorte der Validierungsversuche aufgezeichnet.<br><br>
Wenn eine Person ihr GPS deaktiviert hat, kann sie nur die gescannten QR-Codes melden.';
$string['treasurehunt:viewusershistoricalattempts'] = 'Versuchsverlauf der Spieler anzeigen';
$string['usersprogress_help'] = 'Der Spielerfortschritt wird für alle Spieler oder jedes Teams als Farben angezeigt: <br/>
<b>grün</b> bedeutet, dass die Station ohne Fehler bestanden wurde.<br/>
<b>gelb</b> bedeutet, dass die Station mit Fehlern bestanden wurde.<br/>
 <b>rot</b> bedeutet, dass die Station nicht bestanden wurde und Fehler aufgetreten sind.<br/>
<b>grau</b> bedeutet, dass die Station nicht bestanden wurde und keine Fehler gemacht wurden.';
$string['warnunsecuregeolocation'] = 'Mit Ihrem Server funktioniert möglicherweise Geolocation nicht. Dies ist eine <b>SEVERE misconfiguration</b>, die durch die Sicherheitskonfiguration Ihres Servers verursacht wird.
<br>Geolocation ist für nicht sichere Server verboten, die HTTP anstelle von HTTPS verwenden. Um GPS zur Lokalisierung bei der Schatzsuche nutzen zu können, muss der Server auf HTTPS umgestellt werden. Andernfalls ist nur der Modus "Spielen ohne Bewegung" verfügbar und die Spieler müssen jede Station manuell auf der Karte zeigen. Wenden Sie sich an Ihre Administratoren.
<br>Weitere Infos: <a href="https://www.chromestatus.com/feature/5636088701911040">Google Chrome</a>, <a href="https://blog.mozilla.org/security/2015/04/30/deprecating-non-secure-http/">Mozilla Firefox</a>.';
$string['warnusersgroup'] = 'Folgende Nutzer gehören zu keinem Team und können deswegen das Spiel nicht spielen: {$a}';
$string['warnusersoutside'] = 'Folgende Nutzer gehören zu keinem Team oder keiner Gruppierung. Sie können deswegen das Spiel nicht spielen: {$a}';
$string['webserviceerror'] = 'Die Kommunikation mit dem Server ist fehlgeschlagen. Möglicherweise handelt es sich um ein vorübergehendes Problem. Versuchen Sie es später nochmal. Sollte das Problem weiterhin bestehen, wenden Sie sich an Ihre Administratoren.';
