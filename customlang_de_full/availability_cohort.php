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
 * @package    availability
 * @subpackage cohort
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cleanuponcohortdeletion_desc'] = 'Wenn diese Option aktiviert ist, werden alle Verfügbarkeitseinschränkungen, die eine bestimmte globale Gruppe voraussetzen, automatisch aus allen Aktivitäten und Abschnitten entfernt, sobald die globale Gruppe gelöscht wird. Dies verhindert, dass Aktivitäten und Abschnitte mit einer verwaisten Einschränkung, die nie mehr erfüllt werden kann, dauerhaft vor Nutzer verborgen bleiben.<br />Wenn diese Option deaktiviert ist, bleiben die Einschränkungen bestehen und werden stattdessen als "{$a}" angezeigt.';
