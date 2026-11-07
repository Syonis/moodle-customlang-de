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
 * @package    auth
 * @subpackage db
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbdeleteusererror'] = 'Fehler beim Löschen von Nutzer {$a}';
$string['auth_dbextrafields'] = '<p>Diese Felder sind optional. Sie können Nutzerprofilfelder mit Informationen aus der <b>externen Datenbank</b> belegen, wobei Sie hierfür eine Zuordnung angeben müssen.</p> <p>Wenn Sie ein Feld leer lassen, wird der Standardwert eingetragen.</p> <p>Wenn ein Feld nicht gesperrt ist, dürfen die Nutzer das Feld nach der Anmeldung selber ausfüllen, den Inhalt ändern oder auch löschen.</p>';
$string['auth_dbinsertuser'] = 'Eingefügter Nutzer {$a->name} ID {$a->id}';
$string['auth_dbinsertusererror'] = 'Fehler beim Einfügen von Nutzer {$a}';
$string['auth_dbpasstype'] = '<p>Geben Sie das Format an, das im Kennwortfeld verwendet wird.</p> <p>Verwenden Sie \'intern\', wenn die externe Datenbank Anmeldenamen und E-Mail-Adressen verwalten soll, aber Moodle für die Kennwörter zuständig ist. In diesem Fall müssen Sie die E-Mail-Adresse in der externen Datenbank angeben und die geplante Task \\auth_db\\task\\sync_users aktivieren. Moodle sendet dann an neuen Nutzer automatisch eine E-Mail mit einem temporären Kennwort.</p>';
$string['auth_dbreviveduser'] = 'Entsperrte Nutzer {$a->name} ID {$a->id}';
$string['auth_dbrevivedusererror'] = 'Fehler beim Entsperren von Nutzer {$a}';
$string['auth_dbsuspenduser'] = 'Gesperrte Nutzer {$a->name} ID {$a->id}';
$string['auth_dbsuspendusererror'] = 'Fehler beim Sperren von Nutzer {$a}';
$string['auth_dbupdateusers'] = 'Nutzer aktualisieren';
$string['auth_dbupdateusers_description'] = 'Neue Nutzer hinzufügen, existierende Nutzer aktualisieren';
$string['auth_dbupdatinguser'] = 'Aktualisierte Nutzer {$a->name} ID {$a->id}';
