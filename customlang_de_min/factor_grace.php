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
 * @package    factor
 * @subpackage grace
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Nutzer können die Anmeldung während eines angegebenen Zeitraums ohne weitere Faktoren vornehmen.';
$string['settings:customwarning_help'] = 'Fügen Sie hier einen Text ein, um die standardmäßige Warnung zur Kulanzzeit zu ersetzen. Mit dem Parameter {timeremaining} im Text wird die aktuelle Kulanzzeit der Benutzer eingesetzt, mit dem Parameter {setuplink} die URL zur jeweiligen Einstellungsseite.';
$string['settings:description'] = 'Nutzern erlauben, sich für einen bestimmten Zeitraum ohne MFA anzumelden, um ihnen Zeit zu geben, ihre Authentifizierungsfaktoren einzurichten. Nach Ablauf der Nachfrist müssen Nutzer sich mit MFA anmelden.';
$string['settings:forcesetup_help'] = 'Diese Option zwingt einen Benutzer dazu, die Multi-Faktor-Authentifizierung einzurichten, wenn deren Kulanzzeit abläuft. Falls diese Option deaktiviert ist, können sich Benutzer nach Ablauf der Kulanzzeit nicht mehr anmelden.';
$string['settings:graceperiod_help'] = 'Zeitdauer, in der Nutzer auf Moodle zugreifen können, ohne Faktoren konfiguriert und aktiviert zu haben.';
$string['settings:shortdescription'] = 'Nutzern erlauben, sich für einen bestimmten Zeitraum ohne MFA anzumelden, damit sie Zeit für die Einrichtung von Authentifizierungsfaktoren haben.';
