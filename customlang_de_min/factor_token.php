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
 * @subpackage token
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['settings:description'] = 'Nutzern ohne andere Authentifizierungsfaktoren erlauben, MFA zu umgehen, bis ein weiterer Faktor hinzugefügt wird.';
$string['settings:shortdescription'] = 'Nutzern erlauben, die Authentifizierung auf Geräten zu umgehen, die als vertrauenswürdig gekennzeichnet sind. Dies muss mit anderen Faktoren kombiniert werden.';
$string['summarycondition'] = 'Nutzer hat das Gerät bereits als vertrauensvoll bestätigt.';
$string['tokenstoredindevice'] = 'Nutzer mit der ID {$a->userid} hat ein Token zur Multi-Faktor-Authentifizierung auf diesem Gerät gespeichert. <br>Informationen: {$a->string}.';
