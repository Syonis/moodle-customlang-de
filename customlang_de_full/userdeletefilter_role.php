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
 * @subpackage userdeletefilter_role
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['setting_inverted_help'] = 'Wenn diese Option aktiviert ist, werden nur Nutzer ausgewählt, die <b>keine der oben ausgewählten Rollen in irgendeinem Kontext zugewiesen haben</b>. Wenn diese Option deaktiviert ist, werden nur Nutzer ausgewählt, die alle der oben ausgewählten Rollen zugewiesen haben.';
$string['setting_roleids_help'] = 'Wählen Sie eine oder mehrere Rollen aus, die Nutzer zugewiesen sein müssen, damit diese von diesem Filter betroffen ist. Rollenzuweisungen werden unabhängig vom Kontextlevel der Zuweisung überprüft. Das bedeutet, dass bei der Filterung von Managern sowohl globale als auch Kurs-Manager betroffen sein werden.';
