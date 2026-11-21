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
 * @package    block
 * @subpackage cohortspecifichtml
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortselection_help'] = 'Der Block wird nur den Nutzern angezeigt, die in mindestens einer der ausgewählten globalen Gruppen Mitglied sind. Das bedeutet, wenn Sie z.B. zwei globale Gruppen ausgewählt haben und ein/e Nutzer/in in nur einer der gewählten Gruppen Mitglied ist, ist der Block für diese Person aufgrund der Mitgliedschaft in mindestens einer der ausgewählten Gruppen sichtbar. Dies entspricht einer ODER-Verknüpfung.';
$string['invertcohortselection_help'] = 'Mit dieser Einstellung können Sie Ihre Auswahl umkehren. Das bedeutet, dass der Block den Mitgliedern der ausgewählten globalen Gruppen nicht angezeigt wird. Allen anderen Nutzern wird er angezeigt.<br/>
Beispiele: <ul><li>Wenn ein/e Nutzer/in Mitglied in mindestens einer der ausgewählten globalen Gruppen ist, dann wird ihm/ihr der Block nicht angezeigt, selbst wenn er/sie Mitglied in einer anderen globalen Gruppe ist, die nicht ausgewählt wurde.</li>
<li>Wenn Sie keine globalen Gruppen ausgewählt haben und dies invertieren, dann wird der Block für <strong>alle</strong> Nutzer sichtbar</li></ul>';
$string['updater_2026100501_removemyaddinstance'] = 'Das Recht block/cohortspecifichtml:myaddinstance wird der Rolle \'Authentifizierte/r Nutzer/in\' standardmäßig nicht mehr zugewiesen. Da noch kein/e Nutzer/in einen Block \'Text (für globale Gruppen)\' zu seinem/ihrem Dashboard hinzugefügt hat, wurde dieses Recht aus der Rollendefinition der Rolle \'Authentifizierte/r Nutzer/in\' (und aller anderen Rollen mit dem Archetyp \'user\') entfernt. Damit werden Ihre Rollendefinitionen lediglich an die neue Standardeinstellung angepasst, die auch bei Neuinstallationen dieses Plugins verwendet wird. Wenn Ihre Nutzer tatsächlich Blöcke \'Text (für globale Gruppen)\' zu ihrem eigenen Dashboard hinzufügen können sollen, erlauben Sie dieses Recht bitte wieder.';
$string['visibletoall'] = '<br/>Dieser Block ist für <strong>alle</strong> Nutzer <strong>sichtbar</strong>.';
