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
 * @subpackage coursecompleted
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coursecompleted:enrolpast'] = 'Nutzer einschreiben, die andere Kurse abgeschlossen haben';
$string['coursecompleted:manage'] = 'Eingeschriebene Nutzer verwalten';
$string['coursecompleted:unenrol'] = 'Nutzer aus Kurs abmelden';
$string['defaultrole_desc'] = 'Wählen Sie eine Rolle, die Nutzer beim Einschreiben zugewiesen wird.';
$string['enroldate_help'] = 'Wenn diese Option aktiviert ist, werden Nutzer automatisch zum angegebenen Zeitpunkt eingeschrieben.';
$string['enrolenddate_help'] = 'Wenn diese Option aktiviert ist, werden Nutzer nur bis zum angegebenen Zeitpunkt automatisch eingeschrieben, danach ignoriert.';
$string['enrolstartdate_help'] = 'Ist diese Option aktiviert, werden Nutzer erst ab diesem Datum automatisch eingeschrieben. Alle Kursabschlüsse vor diesem Datum werden ignoriert.';
$string['expiredaction_help'] = 'Wählen Sie die Aktion aus, die beim Ablauf der Einschreibung ausgeführt werden soll. Beachten Sie bitte, dass beim Abmelden von Nutzern manche Nutzerdaten und -einstellungen gelöscht werden.';
$string['group_help'] = 'Es wird versucht, Nutzer zu einer Gruppe mit demselben Namen hinzuzufügen';
$string['keepgroup_help'] = 'Standardmäßig versuchen, Nutzer zu einer Gruppe mit gleichem Namen hinzuzufügen';
$string['tryunenrol'] = 'Nutzer aus abgeschlossenem Kurs abmelden';
$string['tryunenrol_help'] = 'Versuch, Nutzer selbstständig von einem abgeschlossenen Kurs abzumelden.
Wenn Nutzer mit einer Methode angemeldet wurden, die eine Selbstabmeldung ermöglicht, versucht dieses Plugin, sie selbstständig abzumelden.';
$string['unenrolusers'] = 'Nutzer abmelden';
$string['usersenrolled'] = '{$a} Nutzer eingeschrieben';
$string['welcome_help'] = 'Wenn Nutzer über \'Einschreibung nach Kursabschluss\' in einen Kurs eingeschrieben werden, kann eine Willkommensmitteilung per E-Mail gesendet werden.';
