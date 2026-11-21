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
 * @subpackage quickmail
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allow_mentor_copy'] = 'Wenn diese Option aktiviert ist, können automatisch die Mentoren einer Empfänger benachrichtiget werden.';
$string['allow_mentor_copy_help'] = 'Wenn "Nein", ist diese Option nicht sichtbar und die Mentoren werden nie benachrichtigt. Wenn "Ja", kann bei jeder Nachricht markiert werden, ob Mentoren benachrichtigt werden sollen. Bei "Erzwungen" wird die Benachrichtigung erzwungen und es gibt keine Möglichkeit, die Auswahl aufzuheben.';
$string['allowstudents_desc'] = 'Teilnehmer die Verwendung von Quickmail gestatten. Wenn Sie "Nie" wählen, kann der Block nicht konfiguriert werden, dass Teilnehmer der Zugriff auf Kursebene erlaubt wird.';
$string['backup_block_configuration'] = 'Blockbezogene Quickmail-Einstellungen sichern (z.B. [Teilnehmer dürfen Quickmail nutzen])';
$string['email_profile_fields_desc'] = 'Diese Profilfelder werden automatisch per E-Mail versendet, wenn sie für die Empfänger eingestellt sind.';
$string['failed_recipients'] = 'Fehlgeschlagene oder ausstehende Empfänger';
$string['found_filtered_users'] = 'Nutzer gefunden: {$a}';
$string['mentor_copy_subject_prefix'] = '[Mentoren-Kopie]';
$string['mentors_copied'] = 'Kopien an Mentoren senden';
$string['no_excluded_recipients'] = 'Keine ausgenommenen Empfänger';
$string['no_included_recipients'] = 'Keine enthaltenen Empfänger';
$string['notification_conditions_description'] = 'Geben Sie die Bedingungen für diese Benachrichtigung an. Alle Empfänger, die diese Bedingungen erfüllen, werden benachrichtigt.';
$string['notification_model_event_course_entered_description'] = 'Teilnehmer benachrichtigen, wenn sie das erste Mal auf den Kurs zugreifen.';
$string['notification_model_reminder_course_grade_range_condition_description'] = 'Geben Sie den Klassenbereich an. Wenn Teilnehmer derzeit innerhalb dieses Bereichs liegen, werden Sie benachrichtigt.';
$string['notification_model_reminder_course_grade_range_description'] = 'Benachrichtigen Sie die Teilnehmer, die derzeit eine Klasse innerhalb des angegebenen Bereichs haben.';
$string['notification_model_reminder_course_non_participation_condition_description'] = 'Geben Sie an, wie viel Zeit seit dem letzten Kurszugang vergangen ist. Wenn Teilnehmer innerhalb dieser Zeitspanne nicht auf den Kurs zugegriffen haben, werden sie benachrichtigt.';
$string['notification_model_reminder_course_non_participation_description'] = 'Teilnehmer benachrichtigen, die innerhalb einer bestimmten Zeitspanne nicht auf den Kurs zugegriffen haben.';
$string['notification_type_event_description'] = 'Eine automatische Nachricht, die als Reaktion auf ein bestimmtes Ereignis gesendet wird. Ereignisse können verwendet werden, um Empfänger zu benachrichtigen, dass Aktivitäten abgeschlossen wurden, Aufgaben eingereicht oder benotet wurden und vieles mehr.';
$string['notification_type_reminder_description'] = 'Eine wiederkehrende Nachricht, die automatisch nach einem bestimmten Zeitplan gesendet wird. Erinnerungen können verwendet werden, um Empfänger auf bevorstehende Aktivitäten, Fälligkeitstermine, die Teilnahme am Unterricht und vieles mehr hinzuweisen.';
$string['pending_recipients'] = 'Ausstehende Empfänger';
$string['pending_recipients_promise'] = 'Diese Empfänger werden gerade benachrichtigt. Prüfen Sie später mögliche Fehlschläge.';
$string['picker_style_option_title_help'] = 'Ihre persönlich bevorzugte Schnittstelle für die Auswahl von Empfängern beim Verfassen einer Nachricht.';
$string['profile_mentor_copy_message_prefix'] = '<p><strong>Sie erhalten diese Nachricht, weil Sie als {$a} zugewiesen sind</strong>. Im Folgenden finden Sie eine Kopie der Nachricht, die an die Empfänger gesendet wurde.</p>';
$string['quickmail:allowcoursealternate'] = 'Alternative E-Mail-Adressen zum Teilen mit anderen Trainern anlegen';
$string['quickmail:viewgroupusers'] = 'Alle Nutzer in jeder Gruppe anzeigen';
$string['recipients'] = 'Empfänger';
$string['select_allowed_user_fields_desc'] = 'Die Absender können auf die ausgewählten Felder verweisen, um den Inhalt der Nachricht dynamisch und empfängerspezifisch zu gestalten. Beispiel: "[:firstname:]"';
$string['success_recipients_promise'] = 'Diese Empfänger wurden alle erfolgreich vom System benachrichtigt.';
