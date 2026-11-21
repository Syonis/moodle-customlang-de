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
 * @subpackage ldap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Rolle \'{$a->role_shortname}\' an Nutzer \'{$a->user_username}\' im Kurs \'{$a->course_shortname}\' (ID {$a->course_id}) zuweisen';
$string['assignrolefailed'] = 'Fehler beim Zuweisen der Rolle \'{$a->role_shortname}\' an Nutzer \'{$a->user_username}\' im Kurs \'{$a->course_shortname}\' (ID {$a->course_id})';
$string['bind_dn'] = 'Wenn Sie einen sog. bind-user für die LDAP-Suche nach Nutzern verwenden wollen, geben Sie diesen hier an, z.B. \'cn=ldapuser,ou=public,o=org\\';
$string['createnotcourseextid'] = 'Nutzer in einen nicht bestehenden Kurs \'{$a->courseextid}\' eingeschrieben';
$string['enroluserenable'] = 'Aktivierte Einschreibung von Nutzer \'{$a->user_username}\' in den Kurs \'{$a->course_shortname}\' (ID {$a->course_id})';
$string['extremovedsuspend'] = 'Deaktivierte Einschreibung von Nutzer \'{$a->user_username}\' in den Kurs \'{$a->course_shortname}\' (ID {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Deaktivierte Einschreibung und entfernte Rollen von Nutzer \'{$a->user_username}\' in den Kurs \'{$a->course_shortname}\' (ID {$a->course_id})';
$string['extremovedunenrol'] = 'Nutzer \'{$a->user_username}\' vom Kurs \'{$a->course_shortname}\' (id {$a->course_id}) abmelden';
$string['ignorehiddencourses_desc'] = 'Wenn diese Option aktiviert ist, werden Nutzer nicht in Kurse eingeschrieben, die für sie nicht freigegeben sind.';
$string['pluginname_desc'] = '<p>Sie können einen LDAP-Server (Lightweight Directory Access Protocol) verwenden, um die Kurseinschreibung von Teilnehmern zu steuern. Dafür muss der LDAP-Baum Gruppen und Mitgliedschaften beinhalten, mit denen Nutzer in Kurse und Kursrollen übertragen werden. Kurse werden in LDAP als Gruppen definiert, wobei jede Gruppe mehrere Mitgliedschaftsfelder (<em>member</em> oder <em>memberUid</em>) mit einer eindeutigen Nutzerkennung enthält.</p> <p>Für die LDAP-Einschreibung müssen Nutzer über <strong> ein gültiges ID-Nummernfeld </strong> verfügen. Die LDAP-Gruppen müssen diese ID-Nummer in den Mitgliederfeldern enthalten, damit ein Nutzer in den Kurs eingeschrieben werden können. Dies funktioniert einwandfrei mit der LDAP-Authentifizierung.</p> <p>Einschreibungen werden beim Anmelden einer Person aktualisiert. Sie können auch ein Skript <em>enrol/ldap/cli/sync.php</em> ausführen, um die Einschreibungen synchron zu halten.</p><p>Dieses Plugin kann auch so konfiguriert werden, dass automatisch neue Kurse erstellt werden, wenn neue Gruppen in LDAP erscheinen.</p>';
$string['user_attribute'] = 'Wenn die Gruppenmitgliedschaft eindeutige Namen enthält, geben Sie das Attribut an, das zum Benennen / Suchen nach Nutzern verwendet wird. Wenn Sie die LDAP-Authentifizierung verwenden, sollte dieser Wert mit dem Attribut übereinstimmen, das in der Zuordnung "ID-Nummer" im LDAP-Authentifizierungs-Plugin angegeben ist.';
$string['user_type'] = 'Wenn die Gruppenzugehörigkeit bevorzugte Namen enthält, legen Sie fest, wie Nutzer in LDAP gespeichert werden';
