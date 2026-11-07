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
 * @package    enrol
 * @subpackage manual
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['browseusers'] = 'Nutzer anzeigen';
$string['enrolusers'] = 'Nutzer einschreiben';
$string['enroluserscohorts'] = 'Nutzer und globale Gruppen einschreiben';
$string['expirymessageenrollerbody'] = 'Guten Tag, im Kurs \'{$a->course}\' läuft für folgende Nutzer innerhalb der nächsten {$a->threshold} die Einschreibung ab: {$a->users} Sie können auf der folgenden Seite die Einschreibedauer verlängern: {$a->extendurl} Ihr E-Learning Team';
$string['manual:enrol'] = 'Nutzer einschreiben';
$string['manual:unenrol'] = 'Nutzer vom Kurs abmelden';
$string['pluginname_desc'] = 'Das Plugin \'Manuelle Einschreibung\' erlaubt es, Nutzer manuell in einen Kurs einzuschreiben. Die Einschreibung in einen Kurs kann von den Trainern (oder jemandem mit passenden Rechten) durchgeführt werden. Das Plugin sollte normalerweise aktiviert sein, da andere Einschreibeplugins (z.B. Selbsteinschreibung) darauf zugreifen.';
$string['selectusers'] = 'Nutzer auswählen';
$string['status_desc'] = 'Kurszugriff für intern eingeschriebene Nutzer erlauben. Dieses Plugin sollte in den meisten Fällen aktiviert bleiben.';
$string['status_help'] = 'Diese Option legt fest, ob Nutzer manuell eingeschrieben werden können. In der Regel führen Trainer (oder jemand mit passenden Rechten) die manuelle Einschreibung in einen Kurs durch.';
$string['unenrol'] = 'Nutzer abmelden';
$string['unenrolselectedusers'] = 'Ausgewählte Nutzer abmelden';
$string['unenrolusers'] = 'Nutzer abmelden';
$string['wscannotenrol'] = 'Die Plugins können Nutzer nicht manuell in den Kurs \'{$a->courseid}\' einschreiben';
