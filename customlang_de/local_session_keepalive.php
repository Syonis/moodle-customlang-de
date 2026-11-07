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
 * @package    local
 * @subpackage session_keepalive
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['privacy:metadata'] = 'Das Plugin \'Sitzungs-Aufrechterhaltung\' bietet Moodle-Benutzern erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten.';
$string['setting_keepalivetimeoutwarningnote'] = 'Beachten Sie bitte: Der Moodle Core zeigt ein Popup an, bevor die konfigurierte Zeitüberschreitung abgelaufen ist. Nutzer haben so die Möglichkeit, ihre Sitzung zu verlängern. Diese Warnung kann auf der Seite {$a->page} mit der Einstellung sessiontimeoutwarning konfiguriert werden. Dieses Plugin kann problemlos mit der Core-Funktionalität co-existieren. Sie müssen lediglich darauf achten, dass Sie diese Einstellung hier auf einen nennenswert niedrigeren Wert als die konfigurierte Timeout-Warnung setzen (welche derzeit auf {$a->minutes} Minuten gesetzt ist).';
