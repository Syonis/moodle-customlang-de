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
 * @package    local
 * @subpackage helpdesk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['category_users_all'] = 'Alle Moodle-Nutzer';
$string['category_users_info'] = 'Speichern Sie zunächst die Kategorie, bevor Sie Nutzer bearbeiten.';
$string['category_users_responses'] = 'Nutzer, die auf diese Kategorie geantwortet haben';
$string['category_users_title'] = 'Definiert die Nutzer mit Antwortberechtigung und wer eine E-Mail über neue Tickets erhält';
$string['mailticket_user_message'] = '<p><strong>{[moodle.fullname]}</strong> >> <strong>{[event.tiketidlink]}</strong> >> <strong>{[event.categorylink]}</strong> >> <strong>{[event.subjectlink]}</strong> - Ticket <strong>#{[event.tiketidlink]}</strong></p>
<p>Hallo {[to.fullname]},</p>
<p>Wir haben Ihre Anfrage erhalten:</p>
<blockquote style="border-left: 4px solid #9E9E9E;padding-left: 7px;">
{[event.text]}
{[event.attachment]}
</blockquote>
<p>Falls noch nicht geschehen, können Sie Ihrem Ticket #{[event.tiketidlink]} weitere Details hinzufügen, z.B. Protokolle, Fehlermeldungen, Screenshots, Schritt-für-Schritt-Beschreibungen oder Replikationsschritte, die den Support-Mitarbeiter effektiver helfen können.</p>
<p>Unser Team wird Ihr Problem baldmöglichst analysieren und wird sich bei Bedarf melden. Wir danken Ihnen für Ihre Geduld und Ihr Verständnis.</p>
<p>Mit freundlichen Grüßen,<br>
Support-Team</p>';
$string['privacy:metadata:local_helpdesk_category_user'] = 'Informationen zu Nutzern, die zu Organisations- und Verwaltungszwecken Ticketkategorien zugewiesen sind.';
$string['report_user_reports_page_description'] = 'Bericht über die Nutzer, die die meisten Tickets erstellt haben, einschließlich Daten zur Anzahl der Tickets und der zugehörigen Antwortzeit.';
$string['report_user_reports_users_with_most_tickets_open_cat_title'] = 'Nutzer mit den meisten geöffneten Tickets';
