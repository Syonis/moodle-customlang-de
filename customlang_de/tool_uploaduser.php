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
 * @package    tool
 * @subpackage uploaduser
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['duplicateemail'] = 'Mehrere Nutzer haben die E-Mail-Adresse {$a}.';
$string['errormnetadd'] = 'Remote-Nutzer können nicht hinzugefügt werden';
$string['invaliduserdatavalues'] = 'Ungültige Daten ({$a->values}) für Nutzer \'{$a->username}\' festgestellt. Diese Daten wurden automatisch bereinigt oder gelöscht.';
$string['notheme'] = 'Für diesen Benutzer ist kein Design definiert.';
$string['uploadpicture_usernotfound'] = 'Nutzer mit \'{$a->userfield}\'-Wert von \'{$a->uservalue}\' existiert nicht. Wird übersprungen.';
$string['uploadusers_help'] = 'Nutzer können über eine Textdatei angelegt (und optional in Kurse und globale Gruppen eingeschrieben) werden. Die Textdatei sollte folgendes Format haben: * Jede Zeile enthält genau einen Datensatz * Jeder Datensatz enthält eine Serie von Daten, getrennt durch das gewählte Trennzeichen * Die erste Zeile enthält eine Liste der Feldnamen und definiert die Struktur der übrigen Datensätze * Die Feldnamen müssen in der englischen Bezeichnung angegeben sein * Notwendige Feldnamen sind username, password, firstname, lastname, email * Optionale Feldnamen sind course1, course2, ..., cohort1, cohort2, ...';
$string['useraccountupdated'] = 'Nutzer aktualisiert';
$string['useraccountuptodate'] = 'Nutzer aktuell';
$string['userdeleted'] = 'Nutzer gelöscht';
$string['userrenamed'] = 'Nutzer umbenannt';
$string['userscreated'] = 'Nutzer angelegt';
$string['usersdeleted'] = 'Nutzer gelöscht';
$string['usersrenamed'] = 'Nutzer umbenannt';
$string['usersskipped'] = 'Nutzer übersprungen';
$string['usersupdated'] = 'Nutzer aktualisiert';
$string['usersweakpassword'] = 'Nutzer mit schwachem Kennwort';
$string['uubulkall'] = 'Alle Nutzer';
$string['uubulknew'] = 'Neue Nutzer';
$string['uubulkupdated'] = 'Aktualisierte Nutzer';
