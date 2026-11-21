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
 * @subpackage self
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmbulkdeleteenrolment'] = 'Möchten Sie die Einschreibung dieser Nutzer wirklich löschen?';
$string['customwelcomemessage_help'] = 'Ein Begrüßungstext kann unformatiert sein oder im Moodle-Auto-Format vorliegen. HTML-Tags und MultiLang-Tags werden akteptiert, außerdem die folgenden Platzhalter: <ul> <li>Kursname {$a->coursename}</li> <li>Link zum Nutzerprofil {$a->profileurl}</li> <li>Vollständiger Nutzername {$a->fullname}</li> <li>Vorname des Nutzers {$a->firstname}</li> <li>Nachname des Nutzers {$a->lastname}</li> <li>E-Mail-Adresse des Nutzers {$a->email}</li> <li>Kursrolle des Nutzers {$a->courserole}</li> </ul>';
$string['defaultrole_desc'] = 'Wählen Sie eine Rolle aus, die Nutzern bei der Selbsteinschreibung zugewiesen werden soll.';
$string['enrolenddate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer sich bis zum angegebenen Zeitpunkt selbst einschreiben.';
$string['enrolstartdate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer sich ab diesem Zeitpunkt selbst in den Kurs einschreiben.';
$string['expiredaction_help'] = 'Legen Sie fest, was nach dem Ablauf der Einschreibung in einem Kurs passiert. Denken Sie daran, dass beim Abmelden von Nutzern einige Daten nicht mehr verfügbar sind.';
$string['expirymessageenrollerbody'] = 'Im Kurs \'{$a->course}\' läuft für folgende Nutzer die Einschreibung innerhalb der nächsten {$a->threshold} ab: {$a->users} Sie können auf der folgenden Seite die Teilnahmedauer indivduell verlängern oder entfristen: {$a->extendurl} Ihr E-Learning-Team';
$string['expirynotifyall'] = 'Trainer und eingeschriebene Nutzer';
$string['expirynotifyenroller'] = 'Nur Trainer';
$string['groupkey_help'] = 'Zusätzlich zum Einschreibekennwort in den Kurs lassen sich Einschreibekennwörter für Gruppen festlegen. Mit einem Einschreibekennwort für Gruppen werden Nutzer bei ihrer Kurseinschreibung automatisch einer Gruppe zugewiesen. Hinweis: Um Einschreibekennwörter für Gruppen verwenden zu können, muss zusätzlich auch ein Einschreibekennwort für den Kurs vergeben sein, das aber niemand kennen muss.';
$string['longtimenosee_help'] = 'Wenn Benutzer lange Zeit nicht mehr auf den Kurs zugegriffen haben, werden sie automatisch abgemeldet. Dieser Parameter legt die maximale Inaktivitätsdauer fest.';
$string['maxenrolled_help'] = 'Diese Option legt die maximale Anzahl von Nutzern mit Selbsteinschreibung fest (0 = unbeschränkt).';
$string['maxenrolledreached'] = 'Die maximale Anzahl von Nutzern mit Selbsteinschreibung ist bereits erreicht.';
$string['newenrols_desc'] = 'Nutzer dürfen sich selbst einschreiben';
$string['newenrols_help'] = 'Diese Option legt fest, ob Nutzer sich selber in diesen Kurs einschreiben dürfen.';
$string['password_help'] = 'Ein Einschreibekennwort erlaubt den Kurszugriff nur für Nutzer, die das Einschreibekennwort kennen. Wenn das Feld leer bleibt, können sich alle Nutzer im Kurs einschreiben. Wenn ein Einschreibekennwort angegeben ist, müssen alle Nutzer bei der Kurseinschreibung das Einschreibekennwort eingeben. Beachten Sie, dass Nutzer das Einschreibekennwort nur beim ersten Kurszugriff eingeben müssen und danach dauerhaft eingeschriebene Kursteilnehmer sind.';
$string['pluginname_desc'] = 'Das Plugin \'Selbsteinschreibung\' erlaubt es Nutzern, selber einen Kurs zur Teilnahme auszuwählen. Kurse können mit einem Einschreibekennwort gesichert oder ohne Einschreibekennwort offen sein. Intern nutzt die Selbsteinschreibung das Plugin \'Manuelle Einschreibung\', welches deswegen im Kurs ebenfalls aktiviert sein muss.';
$string['self:holdkey'] = 'Benutzer wird als Halter des Einschreibekennworts angezeigt';
$string['self:manage'] = 'Eingeschriebene Nutzer verwalten';
$string['self:unenrol'] = 'Nutzer aus dem Kurs abmelden';
$string['sendcoursewelcomemessage_help'] = 'Wenn Nutzer sich in den Kurs einschreiben, kann ihnen eine Begrüßungsnachricht gesendet werden. Wenn diese vom Kurskontakt geschickt wird (voreingestellt ist Trainer) und mehrere Nutzer diese Rolle haben, wird die E-Mail von dem Nutzer versendet, dem diese Rolle zuerst zugewiesen wurde.';
$string['unenrol'] = 'Nutzer abmelden';
$string['unenrolusers'] = 'Nutzer abmelden';
