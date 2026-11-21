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
 * @package    quizaccess
 * @subpackage oneconnection
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptsfrom_allattempts'] = 'Alle Nutzer mit Testversuch';
$string['attemptsfrom_enrolledall'] = 'Eingeschriebene Nutzer mit oder ohne Testversuch';
$string['attemptsfrom_enrolledattempts'] = 'Eingeschriebene Nutzer mit Testversuch';
$string['attemptsfrom_enrollednoattempts'] = 'Eingeschriebene Nutzer ohne Testversuch';
$string['filterenrolledwithattempts'] = 'Eingeschriebene Nutzer mit Testversuch';
$string['oneconnection_help'] = 'Wenn diese Option aktiviert ist, können Nutzer einen Testversuch nur in einer einzigen Browsersitzung durchführen. Alle Versuche, denselben Testversuch mit einem anderen Computer oder Browser zu öffnen, werden blockiert. Dies kann nützlich sein, da keine andere Person denselben Testversuch auf einem anderen Computer öffnen kann.';
$string['whitelist_desc'] = 'Diese Option ist dazu gedacht, Probleme zu verringern, wenn Nutzer Tests in mobilen Netzwerken durchführen, in denen die IP-Adressen während des Tests ändern können. In den meisten Situationen ist das nicht notwendig. Sie können eine kommagetrennte Liste von Subnetzen angeben (z. B. 88.0.0.0/8, 77.77.0.0/16). Befindet sich die IP-Adresse in solchen Netzwerken, wird sie nicht überprüft. Um die Überprüfung der IP-Adresse vollständig zu deaktivieren, können Sie den Wert 0.0.0.0/0 angeben.';
