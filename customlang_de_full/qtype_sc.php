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
 * @subpackage sc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname_help'] = 'In Einfachwahlaufgaben ("Typ A") muss eine von mehreren Wahlantworten als die einzig richtige oder die beste ausgewählt werden. Teilnehmer können Wahlantworten markieren, die sie als falsch erachten, und erhalten je nach Bewertungsmethode Teilpunkte.';
$string['pluginnamesummary'] = 'In Einfachwahlaufgaben ("Typ A") muss eine von mehreren Wahlantworten als die einzig richtige oder die beste ausgewählt werden. Teilnehmer können Wahlantworten, die sie als falsch erachten, als Distraktoren markieren und erhalten je nach Bewertungsmethode Teilpunkte.';
$string['scoringmethod_help'] = 'Es gibt es drei alternative Bewertungsmethoden:
<br/><strong>SC1/0</strong> (empfohlen): Bei der Auswahl "SC1/0" erhalten Kandidaten die volle Punktzahl, wenn die richtige Wahlantwort ausgewählt wurde, sonst null Punkte.
<br/><strong>Aprim</strong>: Bei der Auswahl "Aprim" erhalten Kandidaten die volle Punktzahl, wenn die richtige Wahlantwort ausgewählt wurde oder wenn alle Distraktoren korrekt gewählt sind. Die Hälfte der Punktzahl wird vergeben, wenn alle korrekten Distraktoren bis auf einem richtig angewählt sind, sonst null Punkte.
<br/><strong>Teilpunkte</strong>: Bei der Auswahl "Teilpunkte" erhalten Kandidaten die volle Punktzahl, wenn die richtige Wahlantwort ausgewählt wurde oder wenn alle Distraktoren korrekt gewählt sind. Die Hälfte der Punktzahl wird vergeben, wenn alle korrekten Distraktoren bis auf einem richtig angewählt sind, sonst Teilpunkte';
$string['showscoringmethod_help'] = 'Wenn diese Option aktiviert ist, wird Teilnehmer die Bewertungsmethode in Tests angezeigt.';
