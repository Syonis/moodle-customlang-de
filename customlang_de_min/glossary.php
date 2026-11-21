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
 * @subpackage glossary
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowprintview_help'] = 'Wenn diese Option aktiviert ist, wird allen Personen ein Link zu einer druckfreundlichen Version des Glossars angezeigt. Trainer sehen diesen Link immer.';
$string['author'] = 'Autor';
$string['authorview'] = 'Nach Autor';
$string['cnfapprovalstatus'] = 'Wenn diese Option aktiviert ist, müssen Glossareinträge nicht durch Trainer geprüft und freigegeben werden.';
$string['cnfstudentcanpost'] = 'Teilnehmer dürfen eigene Einträge anlegen, bearbeiten und löschen.';
$string['completionentries'] = 'Teilnehmer müssen Einträge anlegen:';
$string['completionentriesdesc'] = 'Teilnehmer muss mindestens {$a} Einträge anlegen';
$string['defaultapproval_help'] = 'Diese Option legt fest, ob Glossareinträge sofort ohne Prüfung sichtbar werden: * Ja - Einträge werden sofort nach dem Speichern für alle angezeigt * Nein - Einträge werden von Trainern geprüft und freigegeben';
$string['deletenotenrolled'] = 'Einträge von abgemeldeten Nutzern';
$string['displayformat_help'] = 'Für ein Glossar können 7 Anzeigeformate gewählt werden: * Wörterbuch (mit Synonymen) - Einträge werden in einem Absatz angezeigt. Angabe von synonymen Begriffen. Ohne Autor. Anhänge werden als Links angezeigt. * Wörterbuch (ohne Synonyme) - Einträge werden fortlaufend angezeigt, ohne Angabe synonymer Begriffe. * Vollständig (mit Autor) - Einträge werden forumsähnlich mit Autor dargestellt. Anhänge werden als Links angezeigt. * Vollständig (ohne Autor) - Einträge werden forumsähnlich ohne Autor dargestellt. Anhänge werden als Links angezeigt. * Enzyklopädie - Einträge werden forumsähnlich mit Autor dargestellt. Bilder sind in den Text eingebettet. * Liste - Alphabetische Liste ohne Erläuterung. Einträge werden als Links angezeigt, die zur zugehörigen Erläuterung führen. * FAQ (Frequently Asked Questions) - Die Worte \'Frage\' und \'Antwort\' werden automatisch eingefügt.';
$string['displayformatfullwithauthor'] = 'Vollständig mit Autor';
$string['displayformatfullwithoutauthor'] = 'Vollständig ohne Autor';
$string['editalways_help'] = 'Diese Option legt fest, wie lange Teilnehmer ihre Einträge bearbeiten dürfen: * Ja - Einträge sind jederzeit bearbeitbar * Nein - Einträge sind nur im festgelegten Zeitraum bearbeitbar (oft 30 Minuten)';
$string['entryusedynalink_help'] = 'Wenn diese Option aktiviert ist, werden Einträge automatisch verlinkt. Wenn der Begriff in einem innerhalb des Kurses erstellten Text vorkommt, wird dieser Begriff automatisch mit diesem Eintrag verlinkt. In hochgeladen Dateien (doc, odt, pdf) werden keine Links erzeugt. Voraussetzung ist die globale Freischaltung der Glossarverlinkung durch die Administratoren.';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die ein Benutzer in einer Glossaraktivität erreicht hat.';
$string['indicator:cognitivedepthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des kognitiven Engagements erreicht, das die Glossaraktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge).';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die ein Benutzer in einer Glossaraktivität erreicht hat.';
$string['indicator:socialbreadthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des soziale Engagements erreicht, das die Glossaraktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein).';
$string['isglobal_help'] = 'Ein kursübergreifendes Glossar enthält Einträge, die im gesamten Moodle verlinkt werden. Ist ein Glossar nicht global, werden die Einträge nur lokal im Kurs verlinkt. Ausschließlich Administratoren können Glossare als kursübergreifend definieren.';
$string['linkcategory_help'] = 'Wenn die Option \'Eintrag automatisch verlinken\' und zusätzlich diese Option aktiviert sind, wird automatisch der Kategoriename verlinkt, wo immer er im Kurs erscheint. Wenn Teilnehmer einem Kategorielink folgen, werden sie auf die Anzeige \'Nach Kategorie\' im Glossar geleitet.';
$string['modulename_help'] = '#### Hauptmerkmale * Einträge mit Text, Bildern, Videos und anderen eingebetteten Medien erstellen * Einträge alphabetisch, nach Kategorie oder nach Autor durchsuchen * Teilnehme können Einträge erstellen, kommentieren und bewerten #### Anwendungsmöglichkeiten * Sammlung von Schlüsselkonzepten für einen Kurs erstellen * Vokabeln und Definitionen im Sprachunterricht sammeln * Gemeinsames Glossar mit Fachbegriffen erstellen';
$string['modulename_summary'] = 'Erstellen Sie eine Liste mit Begriffen und Definitionen, ähnlich einem Wörterbuch, in der die Teilnehmer stöbern oder zu der sie beitragen können.';
$string['rsstype_help'] = 'Diese Option ermöglicht es, RSS Feeds für dieses Glossar zu aktivieren, wobei im Feed die Begriffe mit oder ohne Autor einbezogen werden können.';
$string['studentcanpost'] = 'Teilnehmer können eigene Einträge anlegen, bearbeiten und löschen.';
$string['usedynalink_help'] = 'Wenn diese Option aktiviert ist, wird beim Hinzufügen eines neuen Eintrages die Option "Eintrag automatisch verlinken" angezeigt. Voraussetzung ist die globale Freischaltung der Glossarverlinkung durch die Administratoren.';
$string['withauthor'] = 'Begriffe mit Autor';
$string['withoutauthor'] = 'Begriffe ohne Autor';
