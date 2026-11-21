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
 * @subpackage bulkenrol
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkenrol_form_intro'] = 'Auf dieser Seite können Sie Teilnehmer per Liste in Ihren Kurs einschreiben. Die einzuschreibenden Teilnehmer werden anhand der E-Mail-Adresse, welche in ihrem Moodle-Konto hinterlegt ist, identifiziert.';
$string['enrol_users'] = 'Teilnehmer einschreiben';
$string['enrol_users_btn'] = 'Einschreibung der Teilnehmer ausführen';
$string['enrol_users_successful'] = 'Teilnehmer erfolgreich per Liste eingeschrieben';
$string['enrolplugin_desc'] = 'Die Einschreibemethode, die verwendet werden soll, um Teilnehmer per Liste einzuschreiben. Falls die konfigurierte Einschreibemethode im Kurs, in den die Teilnehmer per Liste eingeschrieben werden sollen, nicht aktiv oder hinzugefügt ist, wird sie automatisch aktiviert / hinzugefügt.';
$string['error_enrol_users'] = 'Es ist ein Fehler beim Einschreiben der Teilnehmer in den Kurs aufgetreten.';
$string['error_group_add_members'] = 'Es ist ein Fehler beim Hinzufügen der Teilnehmer zu der/den Gruppe(n) aufgetreten.';
$string['error_more_than_one_record_for_email'] = 'Es existiert mehr als ein Nutzerkonto mit E-Mail-Adresse <em>{$a}</em>.<br />Diese Zeile wird ignoriert und keine der existierenden Nutzer wird eingeschrieben.';
$string['role_description'] = 'Die Rolle, welche genutzt werden soll, um die Teilnehmer per Liste einzuschreiben.';
$string['usermails_help'] = 'Um existierende Moodle-Nutzer in diesen Kurs einzuschreiben, fügen Sie deren E-Mail-Adressen in dieses Formular ein, eine Person / E-Mail-Adresse pro Zeile.<br /><br />Beispiel:<br />alice@example.com<br />bob@example.com<br /><br />Optional können Sie auch Gruppen erstellen und die eingeschriebenen Teilnehmer in diese Gruppen eintragen. Dazu fügen Sie eine Überschriftszeile mit einer Raute und dem Gruppennamen ein, die die Liste der Nutzer unterteilt.<br /><br />Beispiel:<br /># Gruppe 1<br />alice@example.com<br />bob@example.com<br /># Gruppe 2<br />carol@example.com<br />dave@example.com<hr />Es ist auch möglich, Nutzer aus dem Kurs abzumelden.<br />Stellen Sie dazu der E-Mail-Adresse ein Ausrufezeichen (!) voran.<br /><br />Beispiel:<br />! alice@example.com<br />! bob@example.com';
$string['users_to_enrol_in_course'] = 'Teilnehmer, die in den Kurs eingeschrieben werden';
$string['users_to_unenrol_from_course'] = 'Teilnehmer, die aus dem Kurs ausgetragen werden';
