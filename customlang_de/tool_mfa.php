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
 * @subpackage mfa
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event:userfailedmfa'] = 'Die Multi-Faktor-Authentifizierung ist beim Nutzer fehlgeschlagen.';
$string['lockedusersforallfactors'] = 'Gesperrte Nutzer: Alle Faktoren';
$string['lockedusersforfactor'] = 'Gesperrte Nutzer: {$a}';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Zeit, zu der der Benutzer zuletzt mit diesem Faktor verifiziert wurde';
$string['privacy:metadata:tool_mfa:userid'] = 'Die ID des Benutzers, der dieser Faktor gehört';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Zeitpunkt der letzten Authentifizierung von Nutzer mit';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'Benutzer, dem dieser Zeitstempel zugeordnet ist.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'Benutzer, dem der Secret Key zugeordnet ist.';
$string['resetsuccess'] = 'Faktor \'{$a->factor}\' für Nutzer \'{$a->username}\' erfolgreich zurückgesetzt.';
$string['resetsuccessbulk'] = 'Faktor \'{$a}\' für die angegebenen Nutzer erfolgreich zurückgesetzt.';
$string['resetuser'] = 'Nutzer';
$string['settings:lockout_help'] = 'Anzahl der Versuche, die ein Benutzer für die Eingabe von Faktoren verwenden darf, bevor die Anmeldung verweigert wird.';
$string['settings:weight_help'] = 'Gewichtung dieses Faktors. Ein Benutzer benötigt mindestens 100 Punkte, um sich anzumelden.';
$string['userempty'] = 'Das Feld Nutzer kann nicht leer sein.';
$string['usernotfound'] = 'Nutzer kann nicht gefunden werden.';
