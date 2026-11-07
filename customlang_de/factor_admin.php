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
 * @subpackage admin
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Der Faktor \'Nicht-Administrator\' wird erfüllt, wenn man NICHT Administrator ist. Normale Nutzer bekommen damit die Gewichtung ohne Aktion. Administratoren müssen weitere Faktoren nutzen und so höhere Sicherheitsanforderungen erfüllen.';
$string['pluginname'] = 'Nicht-Administrator';
$string['privacy:metadata'] = 'Das Faktor-Plugin \'Nicht-Administrator\' speichert keine personenbezogenen Daten.';
$string['settings:description'] = 'Alle Nutzer (außer Administratoren) erhalten die Punkte für diesen Faktor. Damit können Sie für Administratoren zusätzliche Authentifizierungsfaktoren einfordern.';
$string['settings:shortdescription'] = 'Zusätzliche Authentifizierungsfaktoren für Administratoren einfordern';
$string['settings:weight_help'] = 'Die Gewichtung wird an normale Nutzer gegeben. Administratoren brauchen weitere Faktoren, um zu bestehen.';
$string['summarycondition'] = 'ist nicht Administrator';
