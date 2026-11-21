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
 * @subpackage panopto
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['async_wait_warning'] = 'Async-Aufgaben verursachen eine Verzögerung vor der Synchronisierung der Nutzer. Diese beträgt normalerweise 5-15 Minuten, kann sich aber von Moodle zu Moodle konfiguration unterscheiden.';
$string['block_panopto_any_creator_can_view_folder_settings'] = 'Allen Nutzern mit Erstellerzugang einen Link zu den Panopto-Ordnereinstellungen im Block anzeigen';
$string['block_panopto_any_creator_can_view_folder_settings_desc'] = 'Wenn aktiviert, können Benutzer mit einer Erstellerrolle in dem Ordner den Link zu den Einstellungen sehen. Standardmäßig können nur Trainer den Link zu den Kurseinstellungen sehen.';
$string['block_panopto_anyone_view_recorder_links_desc'] = 'Wenn aktiviert, können Betrachter die Download-Links des Rekorders anzeigen.
Standardmäßig können nur Benutzer mit Ersteller- und/oder Provisionierungszugriff auf einen Ordner die Download-Links sehen.';
$string['block_panopto_async_tasks_desc'] = 'Wenn aktiviert, werden die Aufgaben Anmeldung, Einschreibung, Abmeldung, Anwendung der Bereiche und Löschen von Nutzern asynchron ausgeführt. Wenn diese Option deaktiviert ist, erfolgen diese Vorgänge im Event-Handler synchron. Da es schwierig ist, einen Fehler rechtzeitig zu erkennen, empfehlen wir diese Option nicht.';
$string['block_panopto_automatic_operation_target_server_desc'] = 'Dies ist der Panopto-Server, der für die Aufgaben \'Neue Kurse automatisch provisionieren\', \'Nutzer bei der Anmeldung synchronisieren\' und \'Kursbereich-Struktur durchsetzen\' vorgesehen ist.';
$string['block_panopto_non_editing_teacher_provision'] = 'Erlauben Sie Trainer (ohne Schreibrecht) die Bereitstellung.';
$string['block_panopto_non_editing_teacher_provision_desc'] = 'Aktivieren Sie diese Option, um Trainer (ohne Schreibrecht) die Bereitstellung von Panopto-Kursordnern zu ermöglichen.';
$string['block_panopto_sso_sync_type_desc'] = 'Wählen Sie das Verhalten für die Synchronisierung von Nutzern beim Zugriff auf Panopto-Inhalte. Nutzer können gleichzeitig mit der Anmeldung bei Panopto synchronisiert werden oder im Hintergrund mit einer asynchronen Aufgabe, nachdem sie sich erfolgreich angemeldet haben.';
$string['block_panopto_sync_after_login_desc'] = 'Wenn diese Option aktiviert ist, werden die Nutzer bei Panopto authentifiziert und ihre Berechtigungen synchronisiert, wenn sie sich in Moodle anmelden. Normalerweise werden die Authentifizierung und die Synchronisierung der Berechtigungen durchgeführt, wenn ein/e Nutzer/in im Kurs auf Panopto zugreift. Und daher empfehlen wir, dass Organisationen diese Einstellung nur aktivieren, wenn sie den Panopto-Block in Moodle nicht bereitstellen (nicht empfohlen). Außerdem wird sich die Anmeldezeit verlängern, wenn diese Option aktiviert ist.';
$string['block_panopto_sync_after_provisioning'] = 'Synchronisierung der angemeldeten Nutzer nach erfolgreicher Bereitstellung (nicht empfohlen)';
$string['block_panopto_sync_after_provisioning_desc'] = 'Wenn diese Option ausgewählt ist, werden alle in einem Kurs angemeldeten Nutzer nach der Bereitstellung synchronisiert. Wenn ein/e Nutzer/in auf den Panopto-Block in einem Kurs zugreift, erfolgt normalerweise die Authentifizierung und die Synchronisierung der Berechtigungen für diesen Kurs. Wir empfehlen daher, dass Organisationen diese Einstellung nur aktivieren, wenn sie den Panopto-Block in Moodle nicht bereitstellen (nicht empfohlen).';
$string['block_panopto_sync_on_enrolment'] = 'Synchronisierung der Nutzer nach der Kurseinschreibung (optional)';
$string['block_panopto_sync_on_enrolment_desc'] = 'Synchronisiert die Berechtigung, wenn ein/e Teilnehmer/in in einen Kurs mit einem gültigen Panopto Ordner eingeschrieben wird.
Wenn deaktiviert, werden die Nutzer mit Panopto synchronisiert, wenn der/die Nutzer/in auf den Panopto-Block zugreift. Diese Funktion kann aktiviert werden, wenn Sie nicht beabsichtigen, den Block in einem Kurs zu verwenden, oder wenn ein Kurs Panopto-Inhalte direkt auf der Kurs-Hauptseite eingebettet hat (in diesem Fall werden die Inhalte vor der Synchronisierung des Blocks geladen).
Beachten Sie, dass die Aktivierung dieser Funktion zu einer Leistungsverlangsamung bei der Einschreibung von Nutzern führen kann.';
$string['creator_help'] = 'Ersteller können Inhalte in Panopto erstellen und bearbeiten.';
$string['creators'] = 'Ersteller';
$string['no_creators'] = 'Keine Ersteller';
$string['no_publishers'] = 'Keine Veröffentlicher.';
$string['no_users_synced_desc'] = 'Die unten aufgeführten Benutzer werden mit Panopto synchronisiert, sobald sie versuchen, den Panopto Block im Kurs anzuzeigen.';
$string['no_viewers'] = 'Keine Betrachter';
$string['publisher_help'] = 'Ein/e Veröffentlicher/in kann die von Erstellern eingereichten Inhalte genehmigen.';
$string['publishers'] = 'Veröffentlicher';
$string['users_have_been_synced'] = 'Die unten aufgeführten Nutzer wurden synchronisiert und sollten bereit sein, Panopto zu verwenden.';
$string['users_will_be_synced_custom'] = 'Künftige Benutzer werden automatisch gemäß Ihren individuellen Panopto-Einstellungen synchronisiert.';
$string['viewers'] = 'Betrachter';
