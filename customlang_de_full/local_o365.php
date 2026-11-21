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
 * @subpackage o365
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acp_coursesynccustom_controlled_per_course_desc'] = 'Wenn aktiviert können in Moodle Kurse eingeschriebene Nutzer, die auch Team-Besitzer sind ([local/o365:teamowner] Capability) die Kurssynchronisation im Microsoft Block des Kurses steuern.';
$string['acp_coursesynccustom_oncustom'] = 'Benutzerdefiniert<br />Erlaubt autorisierten Nutzer und Nutzern zu wählen, für welche Kurse auch Teams erstellt werden sollen.<br> <span id="adminsetting_coursesync" style="font-weight: bold"><a href="{$a}">Benutzerdefinierte Kurs Synchronisation</a></span>';
$string['courserequest_teams_help'] = 'Wählen Sie ein Microsoft Team, das mit dem Kurs verbunden wird. Bestehende Team-Besitzer und Team-Mitglieder werden in den erstellten Kurs eingeschrieben, sobald die Kursanfrage genehmigt wird.';
$string['errornotokenforusersync'] = 'Kein Token für Nutzer-Sync verfügbar';
$string['help_user_delete_help'] = 'Nutzer werden in Moodle gelöscht, wenn diese in Microsoft Entra ID als gelöscht markiert sind. Dies funktioniert nur, wenn die Option Nutzerkonten sperren aktiviert ist. Das Moodle Benutzerkonto wird gelöscht und alle mit diesem Konto verknüpften Informationen werden von Moodle gelöscht. Seien Sie vorsichtig!';
$string['help_user_tzsync_help'] = 'Die Zeitzone aller Moodle Nutzer wird mit deren Zeitzone-Einstellungen in Outlook synchronisiert.';
$string['privacy:metadata:local_o365_token'] = 'Informationen zu Microsoft 365 API Token für Nutzer';
$string['settings_usersync'] = 'Nutzer von Microsoft Entra ID synchronisieren';
$string['settings_usersync_create'] = 'Konten für Microsoft Entra ID Nutzer in Moodle erstellen';
$string['settings_usersync_guestsync'] = 'Gast Nutzer synchronisieren';
