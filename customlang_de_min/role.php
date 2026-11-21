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
 * @package    core
 * @subpackage role
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowroletoassign'] = 'Nutzer mit der Rolle {$a->fromrole} erlauben, die Rolle {$a->targetrole} zuzuweisen';
$string['allowroletooverride'] = 'Nutzer mit der Rolle {$a->fromrole} erlauben, die Rolle {$a->targetrole} zu verändern';
$string['allowroletoswitch'] = 'Nutzern mit der Rolle {$a->fromrole} erlauben, in die Rolle {$a->targetrole} zu wechseln';
$string['allowroletoview'] = 'Nutzer mit der Rolle {$a->fromrole} erlauben, die Rolle {$a->targetrole} zu sehen';
$string['allsiteusers'] = 'Alle Nutzer der Website';
$string['archetypecoursecreator'] = 'Basisrolle: Kursersteller';
$string['archetypeeditingteacher'] = 'Basisrolle: Trainer';
$string['archetypefrontpage'] = 'Basisrolle: Authentifizierter Nutzer der Startseite';
$string['archetypemanager'] = 'Basisrolle: Manager';
$string['archetypestudent'] = 'Basisrolle: Teilnehmer';
$string['archetypeteacher'] = 'Basisrolle: Trainer ohne Bearbeitungsrecht';
$string['archetypeuser'] = 'Basisrolle: Authentifizierter Nutzer';
$string['assignroles_help'] = 'Durch die Rollenzuweisung in einem Kontext werden alle Fähigkeiten der Rolle übertragen, u.z. im aktuellen Kontext und in allen nachrangigen Kontexten. Wird z.B. Nutzern die Rolle "Teilnehmer" in einem Kurs zugewiesen, so haben sie diese Rolle auch für alle Aktivitäten und Blöcke innerhalb des Kurses.';
$string['badges:awardbadge'] = 'Badge an Nutzer verleihen';
$string['badges:revokebadge'] = 'Badge von Nutzer zurückziehen';
$string['badges:viewawarded'] = 'Benutzer mit bestimmtem Badge anzeigen, ohne selber den Badge erwerben zu können';
$string['badges:viewotherbadges'] = 'Öffentliche Badges von anderen Benutzern anzeigen';
$string['competency:userevidenceview'] = 'Beleg über Vorkenntnisse eines Benutzers anzeigen';
$string['confirmaddadmin'] = 'Möchten Sie wirklich <strong>{$a}</strong> zu den Administratoren hinzufügen?';
$string['confirmaddadmins'] = 'Möchten Sie die folgenden Benutzer wirklich zur Liste der Administratoren hinzufügen?';
$string['confirmdeladmin'] = 'Möchten Sie \'{$a}\' wirklich aus der Liste der Administratoren löschen?';
$string['confirmremoveadmins'] = 'Möchten Sie die folgenden Benutzer wirklich aus der Liste der Administratoren entfernen?';
$string['confirmunassign'] = 'Möchten Sie die Rolle wirklich bei diesem Benutzer löschen?';
$string['course:bulkmessaging'] = 'Mitteilungen an viele Benutzer senden';
$string['course:markcomplete'] = 'Nutzer in \'Kursabschluss\' als \'abgeschlossen\' markieren';
$string['course:reviewotherusers'] = 'Beobachtung anderer Nutzer';
$string['course:viewparticipants'] = 'Kursteilnehmer anzeigen';
$string['course:viewsuspendedusers'] = 'Gesperrte Nutzer anzeigen';
$string['deleterolesure'] = '<p>Möchten Sie wirklich die Rolle \'{$a->name} ({$a->shortname})\' löschen?</p> <p>Aktuell sind dieser Rolle insgesamt {$a->count} Benutzer zugewiesen.';
$string['existingadmins'] = 'Aktuelle Administratoren';
$string['existingusers'] = '{$a} Nutzer';
$string['extusersmatching'] = 'Nutzer, die zu \'{$a}\' passen';
$string['frontpageuser'] = 'Authentifizierter Nutzer der Startseite';
$string['frontpageuserdescription'] = 'Alle authentifizierten Nutzer auf der Startseite';
$string['globalroleswarning'] = 'Achtung! Jede hier zugewiesene Rolle gilt für die gesamte Webseite. Die jeweiligen Nutzer besitzen die Rolle dann auf der Startseite und in allen Kursen.';
$string['legacy:admin'] = 'Basisrolle: Administrator';
$string['legacy:coursecreator'] = 'Basisrolle: Kursersteller';
$string['legacy:editingteacher'] = 'Basisrolle: Trainer';
$string['legacy:student'] = 'Basisrolle: Teilnehmer';
$string['legacy:teacher'] = 'Basisrolle: Trainer ohne Bearbeitungsrecht';
$string['legacy:user'] = 'Basisrolle: Authentifizierter Nutzer';
$string['mainadmin'] = 'Primärer Administrator';
$string['mainadminset'] = 'Primärer Administrator';
$string['manageadmins'] = 'Administratoren verwalten';
$string['manager'] = 'Manager';
$string['managerdescription'] = 'Manager dürfen alle Kurse ansehen und bearbeiten, ohne in die Kurse eingeschrieben zu sein.';
$string['notabletoassignroleshere'] = 'Rollenzuweisungen wurden in diesem Kontext von den Administratoren nicht aktiviert.';
$string['potentialusers'] = '{$a} mögliche Nutzer';
$string['potusers'] = 'Mögliche Nutzer';
$string['potusersmatching'] = 'Mögliche Nutzer passend zu \'{$a}\\';
$string['privacy:metadata:role_capabilities:modifierid'] = 'ID des Benutzers, der die Berechtigung angelegt oder verändert hat.';
$string['reportbuilder:scheduleviewas'] = 'Berichtszeitpläne werden als andere Benutzer angezeigt';
$string['role:assign'] = 'Rollen an Nutzer zuweisen';
$string['roles_help'] = 'Eine Rolle ist definiert durch einen Satz von Rechten, die für die gesamte Website festgelegt sind. Rollen können einzelnen Nutzern in bestimmten Kontexten (Zusammenhängen) zugewiesen werden.';
$string['rolesforuser'] = 'Rollen für Nutzer {$a}';
$string['selectauser'] = 'Nutzer auswählen';
$string['site:manageallmessaging'] = 'Kontakte für alle Nutzer hinzufügen, entfernen, blocken oder freigeben';
$string['site:messageanyuser'] = 'Datenschutzeinstellungen umgehen, um Mitteilungen an alle Nutzer zu schreiben';
$string['site:sendmessage'] = 'Mitteilungen an jeden Benutzer senden';
$string['site:uploadusers'] = 'Neue Nutzer aus Datei importieren';
$string['site:viewparticipants'] = 'Alle Nutzer anzeigen';
$string['siteadministrators'] = 'Administratoren';
$string['siteadministratorsconfigphp'] = 'Die Liste der Administrator für die Wesite kann nicht geändert werden, da sie in config.php definiert ist.';
$string['unassignconfirm'] = 'Wollen Sie wirklich Teilnehmer "{$a->user}" die Rolle "{$a->role}" entziehen?';
$string['unassignerror'] = 'Es ist ein Fehler während der Entfernung der Rolle {$a->role} des Nutzer {$a->user} aufgetreten.';
$string['user:create'] = 'Nutzer anlegen';
$string['user:delete'] = 'Nutzer löschen';
$string['user:manageblocks'] = 'Blöcke im Nutzerprofil anderer Nutzer verwalten';
$string['usersfrom'] = 'Nutzer von {$a}';
$string['usersfrommatching'] = 'Nutzer im Kontext {$a->contextname} passen zur Suche \'{$a->search}\\';
$string['usersinthisx'] = 'Nutzer in diesem {$a}';
$string['usersinthisxmatching'] = 'Nutzer in diesem {$a->contexttype} passen zur Suche \'{$a->search}\\';
$string['userswithrole'] = 'Alle Nutzer mit Rollenzuweisung';
$string['userswiththisrole'] = 'Nutzer mit Rollenzuweisung';
$string['webservice:managealltokens'] = 'Webservice-Token für alle Nutzer verwalten';
$string['xuserswiththerole'] = 'Nutzer mit der Rolle \'{$a->role}\\';
