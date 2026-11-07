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
 * @package    factor
 * @subpackage email
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email:revokesuccess'] = 'Dieser Code wurde erfolgreich widerrufen. Alle Sitzungen für diesen Nutzer wurden beendet. E-Mail ist erst wieder als Faktor verwendbar, wenn die Kontosicherheit bestätigt wurde.';
$string['info'] = 'Sie verwenden zur Authentifizierung die E-Mail-Adresse {$a}. Dies wurde von Ihren Administratoren eingerichtet.';
$string['manageinfo'] = 'Zur Authentifizierung wird \'{$a}\' verwendet. Dies haben Ihre Administratoren so eingerichtet.';
$string['settings:description'] = 'Nutzer erhalten per E-Mail einen 6-stelligen Bestätigungscode, den sie zum Abschließen des Anmeldevorgangs eingeben müssen.';
$string['settings:shortdescription'] = 'Nutzer müssen bei der Anmeldung einen Code eingeben, den sie per E-Mail erhalten.';
$string['unauthloginattempt'] = 'Nutzer mit der ID {$a->userid} hat einen nicht autorisierten Anmeldeversuch mithilfe der E-Mail-Bestätigung von unternommen, u.z. mit der IP-Adresse {$a->ip} und dem Browser {$a->useragent}.';
