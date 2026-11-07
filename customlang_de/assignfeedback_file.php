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
 * @package    assignfeedback
 * @subpackage file
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['batchoperationconfirmuploadfiles'] = 'Eine oder mehrere Feedbackdateien für alle ausgewählten Teilnehmer hochladen?';
$string['batchuploadfiles'] = 'Feedbackdateien für mehrere Teilnehmer';
$string['batchuploadfilesforusers'] = 'Feedbackdateien für {$a} ausgewählte Nutzer';
$string['enabled_help'] = 'Trainer können ihr Feedback zur Aufgabenlösung als Datei zur Verfügung stellen. Diese Dateien können z.B. eine korrigierte Version der Teilnehmer, eine kommentierte Musterlösung oder ein gesprochener Kommentar als Audiodatei sein.';
$string['feedbackfileadded'] = 'Neue Feedbackdatei "{$a->filename}" für Teilnehmer "{$a->student}"';
$string['feedbackfileupdated'] = 'Geänderte Feedbackdatei"{$a->filename}" für Teilnehmer "{$a->student}"';
$string['feedbackzip_help'] = 'Eine Zip-Datei kann Feedbackdateien für einen oder mehrere Nutzer enthalten. Die Zuordnung der Dateien zu den Nutzer erfolgt mittels der id-Nummer des Nutzers im Dateinamen, die dem vollständigen Namen des Nutzers folgt. Am einfachsten ist es, alle eingereichten Lösungen herunterzuladen. Die Dateinamen folgen dann bereits der obigen Konvention. Kommentieren Sie dann in den heruntergeladenen Dateien und packen Sie diese zum Upload wieder ohne die Dateinamen zu ändern. Dateien an denen keine Änderungen vorgenommen wurden, werden ignoriert.';
$string['markernumberfile'] = 'Bewerter {$a} Datei';
$string['selectedusers'] = 'Ausgewählte Nutzer';
$string['userswithnewfeedback'] = 'Nutzer mit aktualisierten Feedbacks: {$a}';
