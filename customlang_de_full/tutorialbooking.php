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
 * @package    mod
 * @subpackage tutorialbooking
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addstudents'] = 'Teilnehmer hinzufügen';
$string['adminnumbersprompt'] = 'Anzahl der Teilnehmer';
$string['adminservicehelp'] = 'Achtung: Wenn eingeschaltet werden E-Mails und Benachrichtigungen an Teilnehmer im Kurs gesendet - wenn abgeschaltet, erhalten nur die Administratoren (id=2) die Benachrichtigungen.';
$string['attendees'] = 'Teilnehmer';
$string['completionsignedup'] = 'Teilnehmer müssen einen Termin auswählen, damit die Aktivität als abgeschlossen markiert wird.';
$string['eventsessionmessage'] = 'Teilnehmer des Termins benachrichtigt';
$string['instancedeschelp'] = 'Für Teilnehmer bei der Einschreibung notwendige Informationen wie z.B. Dauer eines Termins';
$string['liveservicemsg'] = 'Live-Dienst erkannt, Benachrichtigungen werden an die Teilnehmer gesendet';
$string['lockhelp'] = 'Wenn gesperrt, sind Teilnehmer nicht mehr in der Lage sich für Termine in dieser Terminwahl ein- oder auszutragen.
Wenn Sie jetzt sperren, werden die Terminwahlen im jetzigen Zustand eingefroren.';
$string['modulename_help'] = 'Die Aktivität Terminwahl erlaubt Teilnehmer sich für ein Termine einzutragen.

Trainer können:
* Die Namen von Teilnehmern sichtbar oder unsichtbar schalten.
* Übersichten zu den einzelnen Terminen drucken.
* CSV-Dateien zu den Terminwahlen exportieren.
* Teilnehmer manuell für Termine buchen und stornieren.
* Die Möglichkeit sich für Termine zu buchen, freigeben und sperren.
* Eine Nachricht an alle Teilnehmer eines bestimmten Termins senden.';
$string['oversubscribed'] = 'Es sind {$a->freeslots} Plätze frei für {$a->timeslotname}. Sie haben versucht {$a->numbertoadd} Teilnehmer hinzuzufügen.';
$string['privacy:metadata:core_message'] = 'Nachrichten wurden über das Nachrichtensystem an die Teilnehmer gesendet.';
$string['privacy:metadata:tutorialbooking_messages'] = 'Speichert Nachrichten, die über das Terminwahl-Plugin an Teilnehmer gesendet werden';
$string['privacy:metadata:tutorialbooking_signups'] = 'Speichert die Terminbuchungen der Teilnehmer aus den Terminwahlen.';
$string['privacy_showall'] = 'Teilnehmer können alle Einschreibungen sehen';
$string['privacy_showown'] = 'Teilnehmer können nur ihre Einschreibungen sehen';
$string['statsline'] = 'Diese Terminwahl hat {$a->places} maximale Plätze und {$a->signedup} angemeldete Teilnehmer.';
$string['testservicemsg'] = 'Nicht aktiver Dienst - Benachrichtigung wird an die Administratoren gesendet (id=2)';
$string['tutorialbooking:adduser'] = 'Nutzer/in erlauben, andere Teilnehmer zu einem Termin hinzu zu buchen.';
$string['tutorialbooking:message'] = 'Nutzer/in erlauben, über die Aktivität der Terminwahl, Nachrichten an die Teilnehmer zu senden.';
$string['tutorialbooking:removeuser'] = 'Nutzer/in erlauben, Teilnehmer eines Termins zu stornieren.';
$string['tutorialbooking:viewallmessages'] = 'Erforderlich zum Anzeigen von Nachrichten, die andere Nutzer an Teilnehmer eines Termins gesendet haben.';
