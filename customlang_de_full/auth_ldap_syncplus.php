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
 * @package    auth
 * @subpackage ldap_syncplus
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ignore_other_scopes'] = 'Nutzer außerhalb des konfigurierten Namensraums ignorieren';
$string['ignore_other_scopes_desc'] = 'Wenn diese Einstellung auf „Ja“ gesetzt ist, werden Nutzer mit passendem Authentifizierungstyp, deren Anmeldenamename nicht auf den konfigurierten Namensraum endet, bei der Synchronisierung ignoriert. Das gilt für die Prüfung auf Entfernung (Sperren/Löschen) und für die Aktualisierung des Nutzerprofils.';
$string['removeuser_graceperiod_desc'] = 'Wenn ein Nutzerkonto intern gesperrt wurde, wartet das Synchronisierungsskript die angegebene Anzahl von Tagen, bevor das Nutzerkonto endgültig intern gelöscht wird. Falls das LDAP-Nutzerkonto im LDAP Server während der Wartefrist wieder erscheint, wird der zugehörige Moodle-Account reaktiviert. Hinweis: Diese Einstellung wird nur verarbeitet, wenn die Einstellung "Entfernte externe Nutzer" auf "Intern sperren und erst nach der Wartefrist endgültig intern löschen" gesetzt ist.';
$string['sync_scope_desc'] = 'Wenn Sie LDAP Sync Plus verwenden, um Nutzer mit einem anderen Authentifizierungstyp als LDAP zu synchronisieren, können Sie hier einen zusätzlichen Namensraum konfigurieren. Dies kann notwendig werden, wenn das Nutzerattribut in LDAP nicht vollständig mit dem Nutzernamen in Moodle übereinstimmt, insbesondere wenn der Moodle-Nutzername dem eduPersonPrincipalName entspricht und der Nutzername in LDAP nur die uid ist. Der Namensraum wird dann beim Synchronisieren der Nutzer an den LDAP-Nutzernamen angehängt. Nutzer außerhalb des konfigurierten Namensraums werden nur dann bei der Prüfung auf Entfernung und bei der Aktualisierung des Nutzerprofils ignoriert, wenn „Nutzer außerhalb des konfigurierten Namensraums ignorieren“ auf „Ja“ gesetzt ist. Ein typisches Beispiel für einen Namensraum wäre „@example.org“.';
$string['sync_script_createuser_enabled_key'] = 'Neue Nutzer erstellen';
