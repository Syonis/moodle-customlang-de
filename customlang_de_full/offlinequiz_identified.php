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
 * @package    mod
 * @subpackage offlinequiz_identified
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableidentified_help'] = 'Diese Option ermöglicht es Trainern, vorausgefüllte Antwortbögen mit Name und ID-Nummer zu erstellen. Dies erleichtert das Ausfüllen der Formulare, wobei dann eine Entscheidung der Gruppenzuordnungen bei der Prüfung nicht mehr möglich ist.';
$string['identifiedreport'] = '<p class="alert alert-primary">Wählen Sie die Offline-Test-Gruppe und eine Anwesenheitsliste (definiert in den <a href="{$a}">Anwesenheiten</a>) aus, für die Name und ID-Nummer auf Antwortbögen vorausgefüllt werden sollen.<br>Die erstellten vorausgefüllten Antwortbögen können gespeichert, ausgedruckt und den Teilnehmern zu Beginn des Tests anstelle der regulären Antwortbögen ausgehändigt werden.<br><br><strong>Hinweis: </strong>Dadurch wird die Offline-Test-Gruppe bereits zu diesem Zeitpunkt festgelegt und kann nicht mehr direkt bei der Ausgabe der Bögen zugewiesen werden.
<br>Diese Funktion empfiehlt sich daher für kleinere Teilnehmergruppen. Das Erstellen der vorausgefüllten Antwortbögen kann je nach Teilnehmerzahl einige Zeit in Anspruch nehmen.</p>';
$string['noparticipantsinlist'] = 'Es sind keine Teilnehmer in der ausgewählten Anwesenheitsliste vorhanden.';
