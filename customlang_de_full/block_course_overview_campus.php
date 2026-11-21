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
 * @package    block
 * @subpackage course_overview_campus
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['privacy:metadata:preference:selectedteacher'] = 'Die derzeitige Auswahl im Filter nach Trainern.';
$string['teacherroleshidesuspended_desc'] = 'Der Block soll bei der Suche nach Trainern nicht nur prüfen, ob eine der definierten Trainerrollen zugewiesen wurde, sondern auch, ob die Trainereinschreibung im Kurs aktiv ist (d.h. dass die Trainereinschreibung im Kurs nicht auf inaktiv gesetzt wurde + dass das aktuelle Datum innerhalb des Start- und Enddatums der Einschreibung des Trainers liegt + dass die zur Einschreibung des Trainers zugehörige Einschreibemethode im Kurs auch aktiviert ist). Trainer, deren Einschreibung nicht aktiv ist, werden nicht als Trainer des Kurses angesehen.<br /><em>Diese Einstellung wird nur verwendet, wenn der Filter nach Trainern aktiviert ist oder die Einstellung "Trainer/in anzeigen" aktiviert ist.</em><br /><em>Warnung: Wenn Sie diese Einstellung aktivieren wird die Last auf die Datenbank, um die Kursliste zusammenzutragen, dezent ansteigen, da zusätzliche Prüfungen durchgeführt werden. Aktivieren Sie diese Einstellung deshalb bitte nur wenn Sie sie wirklich benötigen.</em>';
$string['teacherrolesparent_desc'] = 'Der Block soll bei der Anzeige der Trainerliste auch die Trainerrollen aus höheren Kontexten (Kursbereiche, Systemebene) einbeziehen.<br /><em>Diese Einstellung wird nur verwendet, wenn der Filter nach Trainern aktiviert ist oder die Einstellung "Trainer/in anzeigen" aktiviert ist.</em><br /><em>Warnung: Wenn Sie diese Einstellung auf "Nein" oder auf "Abhängig von der Berechtigung moodle/course:reviewotherusers des Nutzers" setzen wird die Funktion "Kurse, in denen ich Trainer bin, zuerst nennen" ebenfalls beeinflusst und wird Kurse, in denen der Nutzer seine Trainerrolle in höheren Kontexten zugewiesen bekommen hat, nicht mehr priorisieren.</em>';
