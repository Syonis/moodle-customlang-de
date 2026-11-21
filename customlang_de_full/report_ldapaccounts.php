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
 * @package    report
 * @subpackage ldapaccounts
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ldapaccountsynctask'] = 'Neue Konten aus LDAP synchronisieren, um Nutzer in Moodle hinzuzufügen';
$string['ldapquery_desc'] = 'Feste Abfrage an LDAP, um Nutzer auszuwählen (z.B. `(&(objectClass=person)(objectClass=top))`). Diese Abfrage wird mit der E-Mail aus dem Nutzerdatensatz erweitert.';
$string['syncauthmethod'] = 'Authentifizierungsmethode für synchronisierte Nutzer';
$string['syncauthmethod_desc'] = 'Wählen Sie die Authentifizierungsmethode aus, die den durch die Synchronisierungsaufgabe erstellten Nutzer zugewiesen wird. Die Nutzer authentifizieren sich über diese Methode anstelle eines Kennworts.';
