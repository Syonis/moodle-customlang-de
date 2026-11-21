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
 * @subpackage diary
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autograderulevisible'] = 'Anzeige für Teilnehmer';
$string['autograderulevisible_help'] = 'Wenn Sichtbar aktiviert ist, werden den Teilnehmern diese Phrase und Feedback zu fehlenden Phrasen angezeigt. Die Regel beeinflusst die Bewertung im Hintergrund - Teilnehmer werden darüber nicht informiert.';
$string['autograderulevisiblehidden'] = 'Vor Teilnehmer verborgen';
$string['autograderulevisiblevisible'] = 'Für Teilnehmer angezeigt';
$string['deletenotenrolled'] = 'Einträge von nicht eingeschriebenen Nutzern löschen';
$string['editall_help'] = 'Wenn aktiviert, können Nutzer alle Einträge bearbeiten.';
$string['editdates_help'] = 'Wenn aktiviert, können Nutzer das Datum jedes Eintrags bearbeiten.';
$string['enableborders_descr'] = 'Standard für neue Tagebucheinträge. Trainer können dies pro Aktivität in den Anzeigeeinstellungen überschreiben.';
$string['enablecomments_help'] = 'Wenn aktiviert, können Trainer und Teilnehmer Kommtentare zu einzelnen Tagebucheinträgen hinzufügen';
$string['inlineattachmentpreviews_descr'] = 'Standard für neue Tagebucheinträge. Trainer können dies pro Aktivität in den Anzeigeeinstellungen überschreiben.';
$string['journaltodiaryxfrp1'] = 'Dies ist eine Funktion für Administratoren, um Journaleinträge zu Tagebucheinträgen zu überführen. Einträge von mehreren Journalen können in einem einzigen Tagebuch zusammengefasst oder auf mehrere Tagebücher aufgeteilt werden. Dies ist eine neue Funktion und wird aktuell noch entwickelt.<br><br>';
$string['journaltodiaryxfrp2'] = 'Wenn die Checkbox <b>Umwandeln und E-Mail senden</b> aktiviert ist, werden alle Journaleinträge, die in einen Tagebucheintrag umgewandelt wurden markiert. Die Nutzer werden über diese Umwandlung automatisch per E-Mail informiert.<br><br>';
$string['journaltodiaryxfrp3'] = 'Wenn die Checkbox, <b>Ohne E-Mail-Versand umwandeln</b> aktiviert ist, werden die Nutzer über die Umwandlung von Journaleinträgen zu Tagebucheinträgen NICHT automatisch informiert. Die Umwandlung fügt jedoch automatisch zu jedem Tagebucheintrag ein Feedback hinzu, obwohl im ursprünglichen Journaleintrag kein Feedback vorhanden war.';
$string['maxchar_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer weniger Zeichen als die eingegebene maximale Anzahl verwenden. Ansonsten werden für jedes Zeichen, das zu viel eingegeben wurde, Punkte abgezogen.';
$string['maxcharacterlimit_help'] = 'Wenn eine Zahl eingetragen wird, können die Nutzer maximal die angegebene Anzahl an Zeichen verwenden.';
$string['maxparagraph_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer weniger Absätze als die eingegebene maximale Anzahl verwenden. Ansonsten werden für jeden Absatz, der zu viel eingegeben wurde, Punkte abgezogen.';
$string['maxparagraphlimit_help'] = 'Wenn eine Zahl eingetragen wird, können die Nutzer maximal die angegebene Anzahl an Absätzen verwenden.';
$string['maxsentence_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer weniger Sätze als die eingegebene maximale Anzahl verwenden. Ansonsten werden für jeden Satz, der zu viel eingegeben wurde, Punkte abgezogen.';
$string['maxsentencelimit_help'] = 'Wenn eine Zahl eingetragen wird, können die Nutzer maximal die angegebene Anzahl an Sätzen verwenden.';
$string['maxword_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer weniger Wörter als die eingegebene maximale Anzahl verwenden. Ansonsten werden für jedes Wort, das zu viel eingegeben wurde, Punkte abgezogen.';
$string['maxwordlimit_help'] = 'Wenn eine Zahl eingetragen wird, können die Nutzer maximal die angegebene Anzahl an Wörtern verwenden.';
$string['minchar_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer mehr Zeichen als die eingegebene minmale Anzahl verwenden. Ansonsten werden für jedes Zeichen, das zu wenig eingegeben wurde, Punkte abgezogen.';
$string['mincharacterlimit_help'] = 'Wenn eine Zahl eingetragen wird, müssen die Nutzer mindestens die eingetragene Anzahl an Zeichen verwenden.';
$string['minparagraph_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer mehr Absätze als die eingegebene minmale Anzahl verwenden. Ansonsten werden für jeden Absatz, der zu wenig eingegeben wurde, Punkte abgezogen.';
$string['minparagraphlimit_help'] = 'Wenn eine Zahl eingetragen wird, müssen die Nutzer mindestens die eingetragene Anzahl an Absätzen verwenden.';
$string['minsentence_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer mehr Sätze als die eingegebene minmale Anzahl verwenden. Ansonsten werden für jeden Satz, der zu wenig eingegeben wurde, Punkte abgezogen.';
$string['minsentencelimit_help'] = 'Wenn eine Zahl eingetragen wird, müssen die Nutzer mindestens die eingetragene Anzahl an Sätzen verwenden.';
$string['minword_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer mehr Wörter als die eingegebene minmale Anzahl verwenden. Ansonsten werden für jedes Wort, das zu wenig eingegeben wurde, Punkte abgezogen.';
$string['minwordlimit_help'] = 'Wenn eine Zahl eingetragen wird, müssen die Nutzer mindestens die eingetragene Anzahl an Wörtern verwenden.';
$string['modulename_help'] = '###### Features
- Tagebucheinträge von Teilnehmern oder Gruppen zum Überprüfen, für Feedback und Bewertung sammeln
- Unterstützt eigenständiges Schreiben, Gruppenarbeiten, Aufsätze, Berichte, Projekte und Lerntagebuch
- Auftrag geben, Schreibanforderungen bestimmen, Verfügbarkeit und Limits einstellen
- Trainer-Feedback, Bewertungen, Tags, Anhänge und individuelle Einträge hinzufügen

###### Verwendung
- Reflexionen, Aufsätze, Berichte, Projekte oder Fortschrittsberichte aufgeben
- Einzelne oder Gruppenabgaben absammeln und Feedback über einen Zeitraum geben
- Schreibaufträge und automatische Überprüfungen, um Antworten der Teilnehmer anzuleiten';
$string['modulename_summary'] = 'Sammeln Sie Schreibeinträge von Teilnehmern oder Gruppen wie beispielsweise Aufsätze, Berichte oder Projekte ab. Geben Sie Feedback und Bewertungen.';
$string['noentriesmanagers'] = 'Keine Trainer';
$string['promptmode_help'] = 'Wählen Sie wie schreibauftrage für diese Tagebuchaktivität zugewiesen werden. Sequentiell behält das aktuelle Verhalten bei. Wahl x von xx lässt Teilnehmer auswählen, welcher Schreibauftrag bearbeitet wird und Zufällig x von xx weist Schreibaufträge zufällig zu, bis die notwendige Anzahl erreicht ist.';
$string['showlistpreference'] = 'Nutzer ohne Einträge anzeigen';
$string['showstudentsonly'] = 'Nur Teilnehmer anzeigen';
$string['showteacherandstudents'] = 'Teilnehmer und Trainer anzeigen';
$string['showteachersonly'] = 'Nur Trainer anzeigen';
$string['showtostudentsonly'] = 'Ja, nur für Schüler anzeigen';
$string['showtoteachersandstudents'] = 'Ja, für Trainer und Schüler anzeigen';
$string['showtoteachersonly'] = 'Ja, nur für Trainer anzeigen';
$string['studentemail'] = 'E-Mail-Benachrichtigung an Teilnehmer senden';
$string['studentemail_help'] = 'Berechtigung aktivieren oder deaktivieren, sofort E-Mail-Benachrichtigungen an Teilnehmer zu senden';
$string['teacheremail'] = 'Email-Benachrichtigungen an Trainer senden';
$string['teacheremail_help'] = 'Berechtigung aktivieren oder deaktivieren, sofort E-Mail-Benachrichtigungen an Trainer zu senden';
