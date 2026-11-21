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
 * @subpackage lti
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['deploymentdeleteconfirm'] = 'Warnung: Das Löschen einer Bereitstellung führt zu einem Zugriffsverlust für alle Nutzer, die Ressourcenlinks folgen, die mit dieser Toolbereitstellung in der Plattform verknüpft sind. Services zur Mitglieder- und Bewertungssynchronisierung werden für diese Ressourcen ebenfalls entfernt. Möchten Sie die Bereitstellungs-ID "{$a}" wirklich löschen?';
$string['endpointltiversionnotice'] = 'Die folgenden Tool-Endpunkte gelten nur für die manuelle Einrichtung von LTI 1.3. Für frühere Versionen (1.1/2.0) finden sich Details für Anwender auf der Seite "Veröffentlicht als LTI-Tools", die über die Kursnavigation zugänglich ist.';
$string['enrolenddate_help'] = 'Diese Option legt fest, dass Nutzer nur bis zu diesem Termin zugreifen können.';
$string['enrolltiversionincorrect'] = 'Die Ressource ist nicht für die Verwendung über Legacy-LTI (Versionen 1.1/2.0) eingerichtet. Wenden Sie sich bitte an die Administratoren dieses Tools.';
$string['enrolstartdate_help'] = 'Diese Option legt fest, dass Nutzer nur nach diesem Termin zugreifen können.';
$string['incorrecttoken'] = 'Das Token war falsch. Überprüfen Sie die URL und versuchen Sie es nochmal oder kontaktieren Sie die Administratoren dieses Tools.';
$string['lti13launchdetails_help'] = 'Die Start-URL und die nutzerdefinierten Eigenschaften sind nur erforderlich, wenn ein Ressourcenlink in der Plattform manuell konfiguriert wird. Wenn möglich, sollten Trainer die Inhaltsauswahl (Deep Linking) für die Erstellung von Ressourcenlinks bevorzugen.';
$string['lti:unenrol'] = 'Nutzer vom Kurs abmelden';
$string['maxenrolled'] = 'Maximal eingeschriebene Nutzer';
$string['maxenrolledreached'] = 'Die Höchstzahl der zugelassenen Nutzer, die vom externen System zugreifen dürfen, wurde erreicht.';
$string['membersync_help'] = 'Diese Option legt fest, ob ein regelmäßiger Task externe Nutzer aus einem anderen System mit den Einschreibungen dieses Kurses synchronisiert, wobei für externe Nutzer ein Nutzerkonto angelegt und die Einschreibung bzw. Abmeldung vorgenommen wird. Bei \'Nein\' werden für externe Nutzer in dem Moment des Zugriffs automatisch Nutzerkonten angelegt und Einschreibungen vorgenommen, eine Abmeldung findet nicht statt.';
$string['membersyncmode_help'] = 'Die Option legt fest, ob Remote-Nutzer in diesem Kurs eingeschrieben und/oder abgemeldet werden sollen.';
$string['membersyncmodeenrolandunenrol'] = 'Neue Nutzer einschreiben und fehlende abmelden';
$string['membersyncmodeenrolnew'] = 'Neue Nutzer einschreiben';
$string['membersyncmodeunenrolmissing'] = 'Fehlende Nutzer abmelden';
$string['opensslconfiginvalid'] = 'Für LTI 1.3 muss eine gültige openssl.cnf konfiguriert und für Ihren Webserver verfügbar sein. Bitte wenden Sie sich an den Website-Administrator, um openssl für diese Website zu konfigurieren und zu aktivieren.';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Datum, an dem ein Benutzer eingeschrieben wurde';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID vom Nutzer';
$string['provisioningmode_help'] = 'Diese Einstellung legt fest, wie Konten beim ersten Start behandelt werden. Mehrere Modi werden unterstützt: <ul> <li>Nur neue Konten (automatisch). Konten werden automatisch für Nutzer erstellt, die von der Plattform aus starten. Dies ist die standardmäßige Starteinstellung für Teilnehmer.</li> <li>Bestehende und neue Konten (Eingabeaufforderung). Nutzern wird eine Auswahlmöglichkeit gegeben. Sie können sich entscheiden, ein bestehendes Konto zu verknüpfen oder ein neues Konto für sich erstellen zu lassen. Dies ist die flexibelste Option und die standardmäßige Starteinstellung für Trainer.</li> <li>Nur bestehende Konten (Eingabeaufforderung). Nutzer werden aufgefordert, ein vorhandenes Konto zu verknüpfen, und können andernfalls nicht auf die Tool-Ressourcen zugreifen.</li> </ul>';
$string['provisioningmodestudentlaunch'] = 'Erster Start des Bereitstellungsmodus für Teilnehmer';
$string['provisioningmodeteacherlaunch'] = 'Erster Start des Bereitstellungsmodus für Trainer';
$string['roleinstructor'] = 'Rolle für Trainer';
$string['roleinstructor_help'] = 'Die Rolle, die in diesem Tool Trainern zugewiesen wird, wenn sie von einem externen System zugreifen.';
$string['rolelearner'] = 'Rolle für Teilnehmer';
$string['rolelearner_help'] = 'Die Rolle, die in diesem Tool Teilnehmern zugewiesen wird, die von einem externen System zugreifen';
$string['tasksyncmembers'] = 'LTI-Tool Nutzer synchronisieren';
