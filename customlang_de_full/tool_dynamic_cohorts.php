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
 * @subpackage dynamic_cohorts
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkprocessing_help'] = 'Wenn diese Option aktiviert ist, werden Nutzer in großen Mengen zur Globalen Gruppe hinzugefügt und/oder aus ihr entfernt. Dies verbessert die Verarbeitungsleistung erheblich. Die Verwendung dieser Option unterdrückt jedoch auslösende Ereignisse, wenn Nutzer zur Globalen Gruppe hinzugefügt oder aus ihr entfernt werden.';
$string['condition:course_completed_description'] = 'Nutzer die den Kurs abgeschlossen haben "{$a->course}" {$a->operator} {$a->timecompleted}';
$string['condition:course_not_completed_description'] = 'Nutzer, die den Kurs „{$a->course}“ nicht abgeschlossen haben';
$string['condition:profile_field_description'] = 'Nutzer mit {$a->field} {$a->fieldoperator} {$a->fieldvalue}';
$string['condition:user_enrolment_description'] = 'Nutzer, die {$a->operator} in den Kurs „{$a->coursename}” (ID {$a->courseid}) mit der Rolle „{$a->role}” unter Verwendung der Anmeldemethode „{$a->enrolmethod}”';
$string['condition:user_role_description_category'] = 'Nutzer, die {$a->operator} „{$a->role}“ in der Kategorie {$a->categoryname} (ID {$a->categoryid})';
$string['condition:user_role_description_course'] = 'Nutzer, die {$a->operator} „{$a->role}” im Kurs {$a->coursename} (ID {$a->courseid})';
$string['condition:user_role_description_system'] = 'Nutzer, die {$a->operator} „{$a->role}“ im Systemkontext haben';
$string['everloggedin'] = 'Nutzer, die sich mindestens einmal angemeldet haben';
$string['include_missing_data'] = 'Nutzer mit fehlenden Daten einbeziehen.';
$string['include_missing_data_help'] = 'Einige Nutzer haben möglicherweise noch keinen benutzerdefinierten Datensatz. Diese Option berücksichtigt diese Nutzer im Endergebnis.';
$string['includeusersmissingdata'] = 'Nutzer mit fehlenden Daten einbeziehen';
$string['includingmissingdatadesc'] = '(einschließlich Nutzer mit fehlenden Daten)';
$string['loggedintime'] = 'Nutzer, die sich angemeldet haben {$a->operator} {$a->time}';
$string['matchingusers'] = 'Passende Nutzer';
$string['neverloggedin'] = 'Nutzer, die sich noch nie angemeldet haben';
$string['usercreatedin'] = 'Nutzer, die in den letzten {$a} erstellt wurden';
$string['usercreatedtime'] = 'Nutzer, die erstellt wurden {$a->operator} {$a->time}';
$string['usersforrule'] = 'Nutzer, auf die die Regel "{$a->rule}" für die globale Gruppe "{$a->cohort}" zutrifft';
