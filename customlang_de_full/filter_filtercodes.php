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
 * @package    filter
 * @subpackage filtercodes
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contentmissing'] = '<p>[Inhalte fehlen. Wenden Sie sich bitte an die Administratoren der Website.]</p>';
$string['enable_scrape_description'] = 'Scrape-Tag aktivieren. Nutzer, die gefilterte Inhalte erstellen können, können den Moodle-Server veranlassen, zulässige öffentliche HTTP/HTTPS-URLs anzufordern.';
$string['escapebraces_desc'] = 'Wenn diese Option aktiviert ist, können Sie FilterCode-Tags anzeigen, ohne dass sie von diesem Filter interpretiert werden. Dazu müssen Sie Ihr Tag in [eckige Klammern] setzen. Dies ist hilfreich, wenn Sie eine FilterCodes-Dokumentation für Trainer erstellen. <br><br> Beispiel: [{fullname}] zeigt nicht den vollständigen Namen einer Person an, sondern stattdessen das Tag {fullname} ohne die eckigen Klammern.';
