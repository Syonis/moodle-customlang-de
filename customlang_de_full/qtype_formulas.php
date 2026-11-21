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
 * @subpackage formulas
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['feedback_help'] = 'Dieses Teilfeedback wird allen Teilnehmern gezeigt. Es kann globale und lokale Variablen enthalten, die durch ihre Werte ersetzt werden.';
$string['incorrectfeedback_help'] = 'Diese Rückmeldung wird den Teilnehmern gezeigt, die in diesem Teil keine Bewertung erhalten haben. Es kann globale und lokale Variablen enthalten, die durch ihre Werte ersetzt werden.';
$string['otherrule_help'] = 'Hier können Fragenautoren zusätzliche Umrechnungsregeln für andere akzeptierte Basiseinheiten festlegen. Lesen Sie bitte die Dokumentation für die erweiterten Verwendungsmöglichkeiten.';
$string['partiallycorrectfeedback_help'] = 'Dieses Feedback wird den Teilnehmern gezeigt, die in diesem Teil nicht die Höchstpunktzahl erreicht haben. Es kann globale und lokale Variablen enthalten, die durch ihre Werte ersetzt werden.';
$string['postunit_help'] = 'Sie können die Einheit spezifizieren. Dieser Fragetyp ist speziell geeignet für SI-Einheiten, so steht ein Leerzeichen für das "Produkt" der verschiedenen "Basiseinheiten" und <tt>^</tt> wird für Exponenten verwendet.

Auch <tt>/</tt> kann für inverse Exponenten verwendet werden. Jede Permutation der Basiseinheit wird gleich behandelt.

Die Teilnehmer müssen das gleiche Eingabeformat verwenden. Zum Beispiel:
<pre class="prettyprint">1 m<br>0.1 m^2<br>20 m s^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['unitpenalty_help'] = 'Mit dieser Option legen Sie die Bewertung fest, die Sie Teilnehmer für eine falsche Einheit geben wollen.

Sie hat einen Wert zwischen 0 und 1. Wenn sie den Wert 1 hat, müssen die Einheit und die Antwort gleichzeitig richtig sein, um eine Bewertung zu erhalten. Das heißt, die Einheit und Antwort werden als eine Einheit behandelt. Nimmt sie hingegen den Wert 0 an, können die Teilnehmer nur für die richtige Antwort die volle Punktzahl erhalten, alle zufälligen Zeichenfolge am Ende der Antwort haben keine Auswirkung .

Es wird daher empfohlen, den Wert 1 zu verwenden, wenn die Antwort keine zugehörige Einheit hat.';
