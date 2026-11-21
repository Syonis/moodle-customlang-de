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
 * @package    availability
 * @subpackage oncemet
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmremove_message'] = 'Andere Nutzer haben diese "Einmal erfüllt"-Voraussetzung bereits dauerhaft freigeschaltet. Wenn Sie die Voraussetzung entfernen, werden diese dauerhaften Freischaltungen gelöscht, sobald Sie dieses Formular speichern. Wenn Sie danach genau dieselbe Voraussetzung erneut anlegen, kommen die Freischaltungen nicht zurück, denn eine neue Voraussetzung beginnt von vorne: Die betroffenen Nutzer müssten die enthaltenen Voraussetzungen erneut erfüllen.';
$string['helptext_persistent'] = 'Nutzer, welche die Voraussetzungen einmal erfüllt haben, behalten den Zugriff auch dann, wenn sich diese Voraussetzungen später ändern oder nicht mehr zutreffen.';
$string['privacy:metadata:availability_oncemet'] = 'Informationen über die dauerhaften Freischaltungen, welche Nutzer durch die Erfüllung der Voraussetzungen einer "Einmal erfüllt"-Voraussetzung erhalten haben.';
$string['uninstaller_remainingrestrictions'] = 'Es gibt weiterhin {$a} Aktivitäten oder Kursabschnitte, welche eine "Einmal erfüllt"-Voraussetzung nutzen. Diese Voraussetzungen wurden nicht entfernt, werden ab sofort aber ignoriert. Alle darin enthaltenen Voraussetzungen werden ebenfalls ignoriert, wodurch die betroffenen Aktivitäten und Kursabschnitte für alle verfügbar geworden sein können. Trainer müssen diese Voraussetzungen manuell entfernen, bevor sie die Voraussetzungen einer betroffenen Aktivität oder eines betroffenen Kursabschnitts wieder speichern können.';
$string['unlocks_intro'] = 'Dieser Bericht listet die Nutzer auf, welche die folgende "Einmal erfüllt"-Voraussetzung von "{$a}" dauerhaft freigeschaltet haben, indem sie die enthaltenen Voraussetzungen mindestens einmal erfüllt haben:';
$string['unlocks_resetdone'] = 'Die dauerhafte Freischaltung wurde für {$a} Nutzer zurückgesetzt. Sie müssen die enthaltenen Voraussetzungen erneut erfüllen, um wieder Zugriff zu erhalten.';
