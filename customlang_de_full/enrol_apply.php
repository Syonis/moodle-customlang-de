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
 * @package    enrol
 * @subpackage apply
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apply:unenrol'] = 'Nutzer aus dem Kurs entfernen';
$string['confirmusers_desc'] = 'Nutzer in grau markierten Zeilen sind auf der Warteliste.';
$string['enrolusers'] = 'Nutzer manuell einschreiben';
$string['expirymessageenrollerbody'] = 'Die Einschreibung in den Kurs \'{$a->course}\' wird in den nächsten {$a->threshold} für die folgenden Nutzer ablaufen:

    {$a->users}

Um ihre Einschreibung zu verlängern, gehen Sie zu {$a->extendurl}';
$string['expirynotifyall'] = 'Trainer und eingeschriebene Nutzer';
$string['expirynotifyenroller'] = 'Nur Trainer';
$string['maxenrolled'] = 'Maximal eingeschriebene Nutzer';
$string['maxenrolled_help'] = 'Legt die maximale Anzahl von Nutzern fest, die sich selbst einschreiben können. 0 bedeutet keine Obergrenze.';
$string['maxenrolledreached_left'] = 'Maximale Anzahl an zugelassenen Nutzer';
$string['notifycoursebased'] = 'Benachrichtigung über neue Einschreibungsanträge (instanzbasiert, z.B. Kurstrainer)';
$string['notifycoursebased_desc'] = 'Standard für neue Instanzen: Alle benachrichtigen, die über die Berechtigung "Einschreibungen verwalten" für den entsprechenden Kurs verfügen (z.B. Trainer und Manager)';
$string['notifyglobal'] = 'Benachrichtigung über neue Einschreibungen (global, z.B. globale Manager und Administratoren)';
$string['pluginname_desc'] = 'Mit diesem Plugin können Nutzer die Einschreibung in einen Kurs beantragen. Die Trainer des Kurses müssen die Einschreibung bestätigen.';
$string['status_desc'] = 'Kurszugriff für intern eingeschriebene Nutzer erlauben.';
