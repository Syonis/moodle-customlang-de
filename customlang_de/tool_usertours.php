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
 * Local language pack from ---
 *
 * @package    tool
 * @subpackage usertours
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filter_accessdate_enabled_help'] = 'Tour anzeigen nur für neue Nutzer oder für Nutzer, die kürzlich auf die Website zugegriffen haben.';
$string['filter_help'] = 'Wählen Sie die Bedingungen, unter denen die Tour angezeigt wird. Alle Filter müssen passen, damit die Tour für Nutzer zu sehen ist.';
$string['filter_role_help'] = 'Eine Tour kann auf Nutzer mit bestimmten Rollen in einem Kontext beschränkt sein, in dem die Tour angezeigt wird. Eine Dashboard-Tour lässt sich aber nicht auf Nutzer mit der Rolle "Teilnehmer" beschränken, wenn sie die Rolle "Teilnehmer" nur in einem Kurs haben (was normalerweise der Fall ist). Eine Dashboard-Tour kann nur auf Nutzer mit einer globalen Rolle beschränkt werden.';
$string['privacy:metadata:preference:completed'] = 'Zeitpunkt, an dem ein Benutzer eine Tour zuletzt abgeschlossen hat.';
$string['privacy:metadata:preference:requested'] = 'Zeitpunkt, zu dem ein Benutzer eine Tour zuletzt manuell angefordert hat.';
$string['tour1_content_end'] = 'Dies ist das Ende Ihrer Nutzertour. Sie wird nicht nochmal angezeigt, außer Sie klicken auf den Link in der Fußzeile. Als Administrator können Sie solche Touren auch selbst erstellen.';
$string['tour2_content_end'] = 'Dies war eine Nutzer-Tour. Sie wird nicht wieder angezeigt, außer Sie setzen sie zurück, indem Sie auf den Link in der Fußzeile klicken. Als Administrator können Sie solche Touren auch selbst erstellen.';
$string['tour2_content_participants'] = 'An dieser Stelle zeigen Sie die Teilnehmer an. Hier können Sie auch Teilnehmer hinzufügen oder entfernen.';
$string['tour2_title_participants'] = 'Kursteilnehmer';
$string['tour_activityinfo_activity_teacher_content'] = 'Aktivitätsdaten und Abschlussbedingungen werden jetzt für Teilnehmer auf jeder Aktivitätsseite (und optional auf der Kursseite) angezeigt. Für Aktivitäten, bei denen Teilnehmer eine Aktivität manuell als abgeschlossen markieren müssen, wird auf der Aktivitätsseite eine Schaltfläche "Als erledigt markieren" angezeigt.';
$string['tour_activityinfo_course_teacher_content'] = 'Mit den neuen Kurseinstellungen "Abschlussbedingungen anzeigen" und "Aktivitätsdaten anzeigen" können Sie wählen, ob die Bedingungen für den Abschluss von Aktivitäten (falls eingestellt) und/oder Termine für die Teilnehmer auf der Kursseite angezeigt werden sollen.';
$string['tour_gradebook_filter_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_initials::tool_usertours@@</div>Teilnehmer nach den Initialen von Vor- oder Nachnamen filtern';
$string['tour_gradebook_search_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_search::tool_usertours@@</div>Suchbox zum schnellen Finden bestimmter Teilnehmer verwenden';
$string['tour_gradebook_search_title'] = 'Teilnehmer einfach finden';
$string['tour_gradebook_tour_description'] = 'Such- und Navigationsoptionen in der Bewertungsübersicht für Bewerter';
$string['tour_gradebook_tour_name'] = 'Bewertungsübersicht für Bewerter';
$string['tour_resetforall'] = 'Der Status der Tour wurde zurückgesetzt. Die Tour wird allen Nutzern erneut gezeigt.';
$string['viewtour_edit'] = 'Sie können die <a href="{$a->editlink}">Tour bearbeiten</a> und für alle Nutzer die <a href="{$a->resetlink}">Tour erneut anzeigen</a>.';
