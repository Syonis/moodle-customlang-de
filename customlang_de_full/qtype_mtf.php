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
 * @subpackage mtf
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeduction_help'] = 'Wenn diese Option aktiviert ist, können Trainer ihre Fragen so konfigurieren, dass für falsche Antworten ein Abzug erfolgt. Andernfalls ist diese Möglichkeit nicht verfügbar, z.B. weil solche Abzüge bei diesem Fragetyp grundsätzlich nicht gewollt sind.<br/>
Wenn "Teilpunkte mit Abzug" als Standard-Bewertungsmethode eingestellt ist, kann diese Option nicht deaktiviert werden.';
$string['pluginname_help'] = 'Teilnehmer bewerten zur Beantwortung einer Fragestellung Wahlantworten als „wahr“ oder „falsch“. Es können statt „wahr“ oder „falsch“ auch eigene Kriterien gesetzt werden.';
$string['scoringmethod_help'] = 'Es gibt drei alternative Bewertungsmethoden. <br /><strong>Teilpunkte</strong> (empfohlen): Bei der Auswahl „Teilpunkte“ erhalten Kandidaten Teilpunkte für jede richtige Bewertung einer Wahlantwort.<br /><strong>Teilpunkte mit Abzug</strong>: Kandidaten erhalten Teilpunkte für jede richtige Bewertung einer Wahlantwort und Abzug für falsche Antworten. Diese Methode is nur verfügbar, wenn sie durch den Administrator freigegeben wurde.<br/><strong>MTF1/0</strong>: Bei der Auswahl „MTF1/0“ erhalten Kandidaten die volle Punktzahl, wenn alle Wahlantworten richtig bewertet wurden und sonst null Punkte.';
$string['scoringsubpointdeduction_help'] = 'Teilnehmer erhalten Teilpunkte für jede richtige Bewertung einer Wahlantwort und Abzug für falsche Antworten.';
