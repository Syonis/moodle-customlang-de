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
 * @subpackage ldap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_attrcreators_key'] = 'Merkmal für Kursersteller';
$string['auth_ldap_auth_user_create_key'] = 'Nutzer extern anlegen';
$string['auth_ldap_contexts'] = 'Liste der Kontexte, in denen Nutzer zu finden sind. Mehrere Kontexte werden durch ein \';\' (Semikolon) getrennt, wie z.B.: \'ou=users,o=org; ou=others,o=org\\';
$string['auth_ldap_create_context'] = 'Wenn Sie die Nutzererstellung mit E-Mail-Bestätigung aktivieren, geben Sie den Kontext an, in dem das passieren soll. Dieser Kontext sollte sich vom Kontext anderer Nutzer unterscheiden, um Sicherheitsrisiken zu vermeiden. Der Kontext muss nicht zur Variablen ldap_contexts hinzugefügt werden und Moodle sucht dort automatisch nach Nutzern. <br /><b>Achtung!</b> Sie müssen die Funktion user_create() in der Datei auth/ldap/auth.php anpassen, damit die Nutzererstellung funktioniert.';
$string['auth_ldap_create_context_key'] = 'Kontext für neue Nutzer';
$string['auth_ldap_gracelogins_desc'] = 'LDAP-GraceLogin aktivieren. Wenn das Gültigkeitsende von Kennwörtern erreicht ist, können sich die Nutzer weiter einloggen, bis der GraceLogin-Zähler den Wert 0 hat. Mit dem Aktivieren wird eine GraceLogin-Mitteilung angezeigt, sobald das Gültigkeitsende erreicht ist.';
$string['auth_ldap_memberattribute'] = 'Optional: Mitgliedsmerkmal ändern, mit dem Nutzer zu einer Gruppe gehören. Normalerweise \'member\\';
$string['auth_ldap_no_mbstring'] = 'Die PHP-Extension mbstring ist erforderlich, um Nutzer in LDAP anzulegen.';
$string['auth_ntlmsso_type'] = 'Diese Methode ist beim Webserver eingestellt, um Nutzer zu authentifizieren. Falls Sie sich nicht sicher sind, wählen Sie bitte NTLM.';
$string['diag_toooldversion'] = 'Es ist sehr unwahrscheinlich, dass ein moderner LDAP-Server das LDAPv2-Protokoll verwendet. Durch falsche Einstellungen können die Werte in Nutzerfeldern beschädigt werden. Wenden Sie sich an Ihren LDAP-Administrator.';
$string['invaliduserexception'] = 'Fehler: Neues Nutzerkonto kann nicht angelegt werden. Details: {$a} Nutzer übersprungen.';
$string['sync_updateuserchunk'] = 'Anzahl der Nutzer, die pro Transaktion aktualisiert werden sollen. Setzen Sie den Wert auf 0, um alle Nutzer mit einer Transaktion zu aktualisieren.';
