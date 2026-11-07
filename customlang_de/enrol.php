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
 * @subpackage enrol
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajaxoneuserfound'] = '1 Benutzer gefunden';
$string['ajaxxmoreusersfound'] = 'Mehr als {$a} Benutzer gefunden';
$string['ajaxxusersfound'] = '{$a} Benutzer gefunden';
$string['customwelcomemessage_help'] = 'Ein Text kann als unformatierter Text oder im Moodle-Auto-Format vorliegen. HTML-Tags und MultiLang-Tags werden akzeptiert, außerdem die folgenden Platzhalter: <ul> <li>Kursname {$a->coursename}</li> <li>Link zur Kursseite {$a->courselink}</li> <li>Link zum Nutzerprofil {$a->profileurl}</li> <li>Vollständiger Name {$a->fullname}</li> <li>Vorname des Nutzers {$a->firstname}</li> <li>Nachname des Nutzers {$a->lastname}</li> <li>E-Mail-Adresse des Nutzers {$a->email}</li> <li>Kursrolle des Nutzers {$a->courserole}</li> </ul>';
$string['deleteinstanceconfirm'] = 'Möchten Sie wirklich die Einschreibemethode \'{$a->name}\' und alle verbundenen Daten löschen? Alle {$a->users} Nutzer, die über diese Methode eingeschrieben sind, werden abgemeldet und deren Bewertungen, Gruppenmtgliedschaften, Forenabonnements sowie kursbezogene Daten werden gelöscht.';
$string['enrolcandidates'] = 'Nichteingeschriebene Nutzer';
$string['enrolcandidatesmatching'] = 'Nichteingeschriebene passende Nutzer';
$string['enrolcohortusers'] = 'Nutzer einschreiben';
$string['enrollednewusers'] = 'Erfolgreich {$a} neue Nutzer eingeschrieben';
$string['enrolledusers'] = 'Eingeschriebene Nutzer';
$string['enrolledusersmatching'] = 'Eingeschriebene passende Nutzer';
$string['enrolment_delete_scope_desc'] = 'Abmeldung von Nutzern aus dem Kurs, die Entfernung von Anmeldemethoden und die Entfernung von Rollenzuweisungen erlauben.';
$string['enrolment_read_scope_desc'] = 'Lesezugriff zum Abrufen von Listen eingeschriebener Nutzer, aktiver Einschreibungsmethoden, Rollenzuweisungen und Einschreibungsstatus.';
$string['enrolment_write_scope_desc'] = 'Zugriff erlauben, um Nutzer aus Kursen anzumelden, Anmeldemethoden zu ändern und Rollenzuweisungen zu ändern.';
$string['enrolusers'] = 'Nutzer einschreiben';
$string['enrolxusers'] = '{$a} Nutzer einschreiben';
$string['eventuserenrolmentcreated'] = 'Nutzer in Kurs eingeschrieben';
$string['eventuserenrolmentdeleted'] = 'Nutzer vom Kurs abgemeldet';
$string['expirynotifyall'] = 'Einschreiber und eingeschriebene Benutzer';
$string['expirynotifyenroller'] = 'Nur für Einschreiber';
$string['expirythreshold_help'] = 'Wie lange vor dem Ablauf sollen Nutzer benachrichtigt werden?';
$string['extremovedkeep'] = 'Nutzer eingeschrieben lassen';
$string['extremovedunenrol'] = 'Nutzer vom Kurs abmelden';
$string['noexistingparticipants'] = 'Keine existierenden Teilnehmer';
$string['notenrolledusers'] = 'Weitere Nutzer';
$string['otheruserdesc'] = 'Folgende Nutzer sind nicht in diesem Kurs eingeschrieben, aber sie besitzen hier zugewiesene oder vererbte Rollen.';
$string['privacy:metadata:user_enrolments:modifierid'] = 'ID des Benutzers, der zuletzt die Nutzereinschreibung geändert hat';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Die Einschreibeverwaltung speichert die eingeschriebenen Nutzer.';
$string['sendcoursewelcomemessage_help'] = 'Wenn Sie einen Nutzer oder eine globale Gruppe für den Kurs anmelden, wird möglicherweise eine Willkommensnachricht per E-Mail gesendet. Wenn die E-Mail vom Kurskontakt (standardmäßig Trainer) gesendet wird und mehrere Nutzer diese Rolle haben, wird die E-Mail vom ersten Nutzer gesendet, dem die Rolle zugewiesen wurde.';
$string['sendfromkeyholder'] = 'Vom Benutzer mit dem Einschreibekennwort';
$string['totalenrolledusers'] = '{$a} eingeschriebene Nutzer';
$string['totalotherusers'] = '{$a} weitere Nutzer';
$string['totalunenrolledusers'] = '{$a} abgemeldete Nutzer';
$string['unenrolleduser'] = 'Nutzer \'{$a->fullname}\' wurde vom Kurs abgemeldet';
$string['unenrolnotpermitted'] = 'Sie haben kein Recht, diesen Benutzer vom Kurs abzumelden.';
$string['unenrolroleusers'] = 'Nutzer abmelden';
$string['userremovedfromselectiona'] = 'Nutzer \'{$a}\' wurde aus der Auswahl entfernt.';
$string['withselectedusers'] = 'Mit ausgewählten Nutzer';
