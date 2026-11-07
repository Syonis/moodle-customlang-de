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
 * @package    core
 * @subpackage backup
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackuperrordetail'] = 'Die Hintergrundverarbeitung ist fehlgeschlagen. Wenden Sie sich bitte an die Administratoren der Website.';
$string['asyncrestoreerrordetail'] = 'Die Wiederherstellung ist fehlgeschlagen. Wenden Sie sich an die Administratoren.';
$string['automatedbackupsinactive'] = 'Automatische Sicherungen wurden von den Administratoren nicht aktiviert.';
$string['choosefilefromuserbackup'] = 'Sicherungsbereich des Nutzers';
$string['config_overwrite_conf'] = 'Nutzern erlauben, die Kurseinstellungen zu überschreiben';
$string['configgeneralpermissions'] = 'Wenn diese Option aktiviert ist, werden die Rollenrechte importiert. Dies kann vorhandene Rechte für registrierte Nutzer verändern.';
$string['configrestorepermissions'] = 'Wenn diese Option aktiviert ist, werden die Rollenrechte zurückgesetzt. Dies kann vorhandene Rechte für registrierte Nutzer verändern.';
$string['configrestoreuserscompletion'] = 'Wenn diese Option aktiviert ist, werden die Abschlussinformationen für Nutzer standardmäßig wiederhergestellt, falls sie in der Sicherung enthalten sind.';
$string['generalusers'] = 'Nutzer einbeziehen';
$string['importgeneralduplicateadminallowed'] = 'Zulassen, dass Administratoren den Konflikt lösen';
$string['keptroles_help'] = 'Wählen Sie aus, welche Nutzer mit den ausgewählten Rollen in den neuen Kurs eingeschrieben werden sollen. Es werden keine Nutzerdaten dupliziert, außer wenn die Option "Nutzerdaten einbeziehen" ausgewählt ist.';
$string['rootsettingenrolments_never'] = 'Nein, Nutzer als manuelle Einschreibung wiederherstellen';
$string['rootsettingenrolments_withusers'] = 'Ja, aber nur wenn Nutzer einbezogen sind';
$string['rootsettingusers'] = 'Eingeschriebene Nutzer einbeziehen';
$string['userdata_help'] = 'Wenn diese Option aktiviert ist, werden nutzergenerierte Daten (Forum, Wiki, Glossar, Einreichungen zu Aufgaben. usw.) in den neuen Kurs dupliziert. Dies passiert für alle Nutzer mit einer ausgewählten Rolle in der Option "Rolleneinschreibungen einbeziehen".';
