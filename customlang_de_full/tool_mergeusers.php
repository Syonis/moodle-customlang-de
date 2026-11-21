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
 * @package    tool
 * @subpackage mergeusers
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cligathering:description'] = 'Einführung von Paaren von Nutzer-IDs, um die erste ID in die zweite ID zu verschmelzen. Die erste Nutzer-ID (fromid) wird alle ihre Daten "verlieren" um in die zweite ID (toid) "migriert" zu werden. Nutzer "toid" wird die Daten beider Nutzer erhalten.';
$string['settings:calculateddbsettingsdesc'] = 'Die folgenden Einstellungen sind die berechneten und die Standard-Datenbankeinstellungen, damit Sie beide Varianten verstehen und vergleichen können. Die berechneten Einstellungen setzen sich aus einer sachgerechten Zusammenführung von Standard- und benutzerdefinierten Datenbankeinstellungen zusammen und werden beim Zusammenführen von Nutzern verwendet.<p><table><tr><th>{$a->calculatedname}</th><th>{$a->defaultname}</th></tr><tr><td><blockquote><code><pre>{$a->calculated}</pre></code></blockquote></td><td><blockquote><code><pre>{$a->default}</pre></code></blockquote></td></tr></table>';
