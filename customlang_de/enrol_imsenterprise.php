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
 * @subpackage imsenterprise
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowunenrol'] = 'IMS-Daten erlauben, Teilnehmer bzw. Trainer abzumelden';
$string['createnewcourses_desc'] = 'Funktion: Das IMS-Einschreibungsplugin kann neue Kurse anlegen wenn es diese in der IMS Datei, nicht aber in der Moodle-Datenbank findet. Jeder neue Kurs wird so angelegt, dasser für Teilnehmer nicht verfügbar ist.';
$string['createnewusers'] = 'Erstelle neue Nutzerzugänge, wenn Nutzer noch nicht in Moodle registriert';
$string['createnewusers_desc'] = 'IMS Enterprise-Registrierungsdaten enthalten normalerweise eine Liste von Nutzern. Wenn die Option aktiviert ist, können Konten für Nutzer erstellt werden, die bisher nicht in Moodle gefunden werden. Nutzer werden zuerst nach ihrer ID-Nummer und dann nach ihrem Moodle-Anmeldenamen gesucht. Kennwörter werden vom IMS-Enterprise-Plugin nicht importiert. Zur Authentifizierung der Nutzer wird die Verwendung eines Authentifizierungs-Plugins empfohlen.';
$string['mailadmins'] = 'Administratoren per E-Mail benachrichtigen';
$string['mailusers'] = 'Nutzer per E-Mail benachrichtigen';
$string['processphotowarning'] = 'Warnung: Die Bildverarbeitung stellt hohe Anforderungen an die Leistung des Servers. Es wird empfohlen, diese Funktion nicht zu nutzen, wenn eine große Zahl von Nutzern auf diesem Wege ins System integriert werden soll.';
$string['sourcedidfallback_desc'] = 'Im IMS Datensatz wird im <sourceid>-Feld die dauerhafte persönliche ID-Bezeichnung des Benutzers aus dem Ursprungssystem hinterlegt. Das <userid>-Feld ist ein zusätzliches Feld und enthält einen ID-Code, mit dem der Benutzer sich einloggen kann. Manchmal – jedoch nicht immer – sind die Einträge identisch. Einige Benutzererwaltungssysteme haben Probleme beim Export des <userid>-Feldes. In solch einem Fall aktivieren Sie diese Einstellung, damit Moodle den Inhalt des Feldes <sourceid> als Moodle-Nutzer-ID verwendet. Ist das nicht der Fall, lassen Sie die Funktion deaktiviert.';
$string['unenrolaction_desc'] = 'Auszuführende Aktion, wenn Nutzer aus einem Kurs abgemeldet werden. (Nur verfügbar, wenn die Abmeldeoption aktiviert ist.)';
$string['usecapitafix_desc'] = 'Es wurde festgestellt, dass das von Capita erstellte Datensystem für Teilnehmer einen kleinen Fehler in seiner XML-Ausgabe aufweist. Wenn Sie Capita verwenden, sollten Sie diese Einstellung aktivieren - andernfalls lassen Sie sie deaktiviert.';
