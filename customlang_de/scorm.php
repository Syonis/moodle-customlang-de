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
 * @package    mod
 * @subpackage scorm
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedattemptsstudent'] = 'Erlaubte Versuche pro Teilnehmer';
$string['averageattemptperstudent'] = 'Durchschnittliche Versuche pro Teilnehmer';
$string['completionscorerequired_help'] = 'Wenn diese Option aktiviert ist, müssen Teilnehmer neben anderen Anforderungen auch die angegebene Mindestpunkte erreichen, um dieses Lernpaket als \'abgeschlossen\' markieren zu können.';
$string['completionstatusrequired_help'] = 'Wenn Sie einen oder mehrere Punkte anwählen, müssen Teilnehmer neben anderen Anforderungen auch mindestens einen dieser Punkte erledigen, um dieses Lernpaket als \'abgeschlossen\' markieren zu können.';
$string['completionstatusrequireddesc'] = 'Teilnehmer muss mindestens einen der folgenden Status erreichen: {$a}';
$string['confirmloosetracks'] = 'Warnung: Das Lernpaket scheint verändert worden zu sein. Evtl. ist die Paketstruktur geändert worden. Beim Update könnten Protokolldaten der Nutzer verloren gehen.';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die ein Benutzer in einer Lernpaketaktivität erreicht hat.';
$string['indicator:cognitivedepthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des kognitiven Engagements erreicht, das die Lernpaketaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge, Feedback anzeigen).';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die ein Benutzer in einer Lernpaketaktivität erreicht hat.';
$string['indicator:socialbreadthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des soziale Engagements erreicht, das die Lernpaketaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein).';
$string['lastattemptlock_help'] = 'Diese Option legt fest, ob Teilnehmer nach dem Erreichen der Anzahl zulässiger Versuche weiter auf das Lernpaket zugreifen können oder ob der Zugriff zum Lernpaket nach dem letzten zulässigen Versuch gesperrt wird. Dazu muss ein Wert für die Anzahl der Versuche angegeben sein.';
$string['modulename_help'] = '#### Hauptmerkmale * Lernpakete (SCORM) als ZIP-Dateien hinzufügen * Lernfortschritt, Abschluss und Noten der Teilnehmer verfolgen #### Anwendungsmöglichkeiten * Kommerzielle Lernmodule (SCORM) importieren und die Leistungen der Teilnehmer verfolgen * Interaktive Tutorials anbieten und deren Abschluss verfolgen * Simulationen im SCORM-Format bereitstellen';
$string['optallstudents'] = 'alle Nutzer';
$string['optattemptsonly'] = 'Nutzer mit Versuchen';
$string['optnoattemptsonly'] = 'Nutzer ohne Versuche';
$string['privacy:metadata:scorm_attempt'] = 'Die von einem Benutzer unternommenen SCORM-Versuche';
$string['reportcountallattempts'] = '{$a->nbresults} Ergebnisse ({$a->nbattempts} Versuche von {$a->nbusers} Nutzern)';
$string['reportcountattempts'] = '{$a->nbresults} Ergebnisse ({$a->nbusers} Nutzern)';
$string['studentattempted'] = 'Teilnehmer mit Versuch';
$string['tracklatency_help'] = 'Die verstrichene Zeit zwischen dem Zeitpunkt, an dem die Frage dem Benutzer angezeigt wurde, und dem Zeitpunkt der ersten Antwort.';
$string['trackresponse_help'] = 'Diese Antwort wurde von dem Teilnehmer auf die Frage gegeben';
$string['trackresult_help'] = 'Dies zeigt an, ob der Benutzer eine richtige Antwort eingegeben hat.';
$string['tracksuspenddata_help'] = 'Platz zum Speichern und Wiederfinden von Daten<br />zwischen den Sessions der Teilnehmer';
$string['whatgrade_help'] = 'Bei mehreren Versuchen legt diese Einstellung fest, welcher Versuch bewertet wird (z.B. beste Bewertung, erste oder letzte Bewertung oder Durchschnittswert). Die Option \'letzte Bewertung\' lässt fehlgeschlagene Versuche unberücksichtigt. Hinweise zur Nutzung mehrfacher Versuche: * Die Option zum Starten eines neuen Versuchs wird mit einer Checkbox auf der Übersichtsseite angezeigt. Prüfen Sie, ob Sie mehr als einen Versuch zulassen möchten. * Einige Lernpakete unterstützen erneute Versuchen, viele aber nicht. Wenn Teilnehmer erneut in einen bereits beendeten Versuch einsteigen, könnte die Bewertung des vorherigen Versuchs überschrieben werden, selbst wenn der Versuch als \'abgeschlossen\' oder \'erfolgreich\' markiert war. * Die Einstellungen \'Abschluss einfordern\', \'Neuen Versuch einfordern\' und \'Nach letztem Versuch sperren\' bieten zusätzliche Möglichkeiten für mehrerer Versuche.';
