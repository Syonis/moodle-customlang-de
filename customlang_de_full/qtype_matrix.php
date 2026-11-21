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
 * @package    qtype
 * @subpackage matrix
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allow_dnd_ui_descr'] = 'Wenn zugelassen, können Trainer das Drag&Drop-Feature für jede Matrixfrage ermöglichen';
$string['colsheader_desc'] = '<p> Der Kurztext wird verwendet, wenn vorhanden, mit dem längeren Text als Tooltip. <br />Achten Sie darauf, wie dieser angezeigt wird. </p>
<p> Die Teilnehmer können mehrere oder nur einzelne Spalten pro Zeile auswählen, je nachdem, wie die Frage konfiguriert wurde, und jede Zeile erhält eine Bewertung, definiert durch eine der Bewertungsmethoden. </p>
<p> Die Gesamtbewertung für die Frage ist ein Durchschnitt der Bewertungen für jede der Zeilen mit Ausnahme des Kprim-Typs, bei dem alle Antworten korrekt sein müssen.</p>';
$string['grademethod_help'] = '<ul>
<li> <b> KPrim </b>: Teilnehmer erhalten einen Punkt, wenn alle Antworten richtig sind, einen halben Punkt, wenn eine Antwort falsch und der Rest der Antworten richtig ist, und ansonsten null Punkte.
<li> <b> Kprim 1/0 </b>: Teilnehmer erhalten einen Punkt, wenn alle Antworten richtig sind, und ansonsten null Punkte.
<li> <b> Teilpunkte </b>: Teilnehmer erhalten für jede richtige Antwort Teilpunkte.
<li> <b> Differenz </b>: Teilnehmer erhalten einen Punkt in Abhängigkeit von der Abweichung der gewählten Antwort von einem vorgegebenen Wert (richtige Antwort). Die Formel für die Abweichungspunkte lautet: maximal erreichbarer Differenzwert - (Antwort von Teilnehmer/in - richtige Antwort)^2. Der Abweichungswert wird dann in eine Teilpunktzahl zwischen 0 und 1 umgewandelt, wobei 1 für eine richtige Antwort steht.</li>
</ul>';
$string['rowsheader_desc'] = '<p> Der Kurztext wird verwendet, wenn vorhanden, mit dem längeren Text als Tooltip. <br/>Achten Sie darauf, wie dieser angezeigt wird. </p> <p> Die Teilnehmer können mehrere oder nur einzelne Spalten pro Zeile auswählen, je nachdem, wie die Frage konfiguriert wurde, und jede Zeile erhält eine Bewertung, definiert durch eine der Bewertungsmethoden. </p> <p> Die Gesamtbewertung für die Frage ist ein Durchschnitt der Bewertungen für jede der Zeilen mit Ausnahme des Kprim-Typs, bei dem alle Antworten korrekt sein müssen. </p>';
