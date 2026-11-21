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
 * @subpackage vpl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['automaticgrading_help'] = 'Ja: die vorgeschlagene automatische Bewertung wird als Bewertung für diese Aktivität herangezogen<br>
Nein: Von dieser Aktivität wird keine automatische Bewertung vergeben; Trainer müssen die vorgeschlagene Bewertung überprüfen und diese manuell eintragen.';
$string['debug_help'] = 'Erlaubt Teilnehmer, den jeweiligen Code im Editor zu debuggen. Trainer können immer jede Einreichung debuggen.';
$string['evaluate_help'] = 'Erlaubt Teilnehmer, die eigene Einreichung automatisch auszuwerten. Trainer können immer jede Einreichung auswerten.';
$string['executionoptions_help'] = '<p>Auf dieser Seite können verschiedene Ausführungsoptionen konfiguriert werden.</p>
<ul>
<li><b>Basiert auf</b>: wählt eine andere VPL Instanz, von der einige Eigenschaften importiert werden:
<ul><li>Ausführungsdateien (Vordefinierte Skript-Dateien werden zusammengefügt)</li>
<li>Grenzen für die Ausführungsressourcen.</li>
<li>Variationen, die zusammengefügt werden, um Multivariationen zu erzeugen.</li>
<li>Maximale Größe jeder Datei, die mit der Einreichung hochgeladen wurde.</li>
</ul>
</li>
<li><b>Ausführen</b>, <b>Debuggen</b> and <b>Auswerten</b>: Muss auf &quot;Ja&quot; gesetzt werden, wenn die jeweilige Aktion beim Bearbeiten der Einreichung auswählbar sein soll. Diese Einstellung betrifft nur Teilnehmer, da Nutzer mit der Bewertungs-Berechtigung diese Aktionen immer ausführen können.</li>
<li><b>Nur bei Einreichung auswerten</b>: Die Einreichung wird automatisch ausgewertet, sobald sie hochgeladen wird.</li>
<li><b>Automatische Bewertung</b>: Wenn das Auswertungsergebnis Bewertungen enthält, werden diese automatisch als Bewertung für die Abgabe verwendet.</li>
</ul>';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die von Teilnehmern einer VPL Aktivität erreicht wird.';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die von Teilnehmern einer VPL Aktivität erreicht wird.';
$string['modulename_help'] = '<p>VPL ist ein Aktivitätsmodul für Moodle, das Programmieraufgaben verwaltet und folgende Eigenschaften aufweist:
</p>
<ul>
<li>Möglichkeit, den Programmcode im Browser zu verändern</li>
<li>Teilnehmer können Programme interaktiv im Browser ausführen</li>
<li>Automatische Tests zur Bewertung von Programmen können ausgeführt werden</li>
<li>Möglichkeit, Ähnlichkeiten zwischen Dateien zu suchen</li>
<li>Möglichkeit, Änderungseinschränkungen und externe Einfügeoptionen zu konfigurieren</li>
</ul>
<p><a href="http://vpl.dis.ulpgc.es">Virtual Programming lab Home Page</a></p>';
$string['override_help'] = 'Wenn "Überschreiben" aktiviert ist, wird diese Einstellung mit den gewählten Werten für betroffene Nutzer überschrieben.';
$string['override_users'] = 'Betroffene Teilnehmer';
$string['overrideforgroup'] = '{$a->base} ist fällig für Mitglieder von {$a->for}';
$string['overrides_help'] = 'Einstellungen können für eine Aktivität überschrieben werden. Diese Einstellungen überschreiben Aktivitätseinstellungen für betroffene Nutzer und Gruppen.';
$string['privacy:metadata:vpl_submissions:studentcomments'] = 'Kommentare der Teilnehmer zu dieser Abgabe';
$string['removeuseroverrides'] = 'Zugeordnete Überschreibunge für Nutzer entfernen';
$string['removeuseroverrides_help'] = 'Alle zugeordneten Überschreibungen für Nutzer entfernen, Überschreibungsdefinitionen werden nicht gelöscht.';
$string['requirednet_help'] = 'VPL Zugriff kann durch spezifische Subnets im Lan oder im Internet durch eine Komma-Separierte Liste von teilweisen oder vollständigen IP Adressen eingeschränkt werden. Dies kann nützlich sein, um sicherzustellen, dass VPL nur von Nutzern an einem bestimmten Ort aufgerufen werden kann.';
$string['run_help'] = 'Teilnehmer können ihren Code im Editor ausführen. Trainer können immer alle Einreichungen ausführen.';
$string['submissions_graded_overview_help'] = '[students or groups count]<br>
 / [submissions count] (% von Teilnehmern oder Gruppen mit Einreichungen)<br>
 / [graded count] (% der bewerteten Einreichungen)<br>
 - [not graded count] (% der nicht bewerteten Einreichungen)';
$string['submissions_overview_help'] = 'Anzahl der Teilnehmer oder Gruppen / Anzahl der Einreichungen (% der Teilnehmer oder Gruppen mit Einreichungen)';
$string['timespent_help'] = 'Zeit, die mit dieser Aktivität verbracht wurde, basierend auf den gespeicherten Versionen<br>Das Balkendiagramm zeigt die Anzahl der Teilnehmer pro Zeitspanne.';
$string['usewatermarks_description'] = 'Wasserzeichen zu den Dateien der Teilnehmer hinzufügen (nur unterstützte Sprachen)';
$string['variations_help'] = '<p>Eine Menge von Variationen können für eine Aktivität definiert werden. Diese Variationen werden den Teilnehmern zufällig zugwiesen.</p>
<p>Hier kann festgelegt werden, ob diese Aktivität Variationen hat und welche Bezeichnung die Menge an Variationen trägt und es können die Variationen selbst hinzugefügt werden.</p>
<p>Jede Variation hat eine Identifizierungsnummer und eine Beschreibung. Die Identifizierungsnummer wird von der Datei <b>vpl_enviroment.sh</b> benutzt, um die Variation aller Teilnehmer an die Skriptdatei weiterzugeben. Die Beschreibung, in HTML formatiert, wird den jeweiligen Teilnehmern, denen die Variation zugewiesen wurde, angezeigt.</p>';
$string['vpl:editothersgrades'] = 'Bewertungen bearbeiten, die von anderen Nutzern vergeben wurden';
