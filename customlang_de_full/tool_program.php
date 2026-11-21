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
 * @package    tool
 * @subpackage program
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['conditionprogramsuspendeddescription'] = 'Nutzer, die im Programm "{$a}" den Status gesperrt haben';
$string['conditionprogramsuspendeddescriptionwithdate'] = 'Nutzer mit dem Status "gesperrt" im Programm "{$a->programname}"<br />
Das Sperrdatum liegt am oder nach dem "{$a->conditiondate}"';
$string['hiddenfromlearners'] = 'Für Teilnehmer verborgen';
$string['outcomeallocationdescdate'] = 'Nutzer dem Programm {$a->programname} zuweisen<br />
{$a->startdatestr}<br />
Mit gesperrten Nutzern: {$a->suspendedusers}';
$string['outcomeallocationsuspendedusers'] = 'gesperrte Nutzer einbeziehen';
$string['outcomeallocationsuspendedusers_help'] = 'Auszuführende Aktion, wenn Nutzer bereits zugewiesen sind, aber ihre Zuweisung gesperrt oder beendet wurde';
$string['recalculateprogramcompletion_help'] = 'Der Programmabschluss wird für alle zugewiesenen Nutzer neu errechnet. Beachten Sie bitte, dass eine Person das Programm möglicherweise erneut abschließen muss, falls sie das Programm bereits abgeschlossen hatte und nachträglich neue Kurse hinzugefügt wurden. Dieser Vorgang kann einige Zeit in Anspruch nehmen und kann nicht rückgängig gemacht werden.';
