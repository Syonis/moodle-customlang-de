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
 * @subpackage organizer
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absolutedeadline_help'] = 'Ankreuzen um die Bestimmung einer absoluten Deadline zu ermöglichen. Es sind nach diesem Zeitpunkt keinerlei Aktionen seitens der Teilnehmer mehr möglich.';
$string['addslots_placesinfo'] = 'Diese Aktion erstellt {$a->numplaces} neue mögliche Plätze, was zu einer Gesamtanzahl von {$a->totalplaces} möglichen Plätzen für {$a->numstudents} Teilnehmer führt.';
$string['allowsubmissionsfromdate_help'] = 'Kreuzen Sie diese Option an, um den Teilnehmern den Zugang zu diesem Terminplaner erst ab einem bestimmten Zeitpunkt zu ermöglichen.';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Aufgabenbeschreibung für Teilnehmer nur während des Anmeldezeitraums angezeigt.';
$string['appointment_reminder_teacher:fullmessage'] = 'Hallo {$a->receivername}!

Im Rahmen des Kurses {$a->courseid} {$a->coursefullname} haben Sie einen Termin mit Teilnehmern am {$a->date} um {$a->time} im/in {$a->location}.

Moodle Messaging System';
$string['appointment_reminder_teacher:smallmessage'] = 'Sie haben einen Termin mit Teilnehmern am {$a->date} um {$a->time} im/in {$a->location}.';
$string['assignsuccess'] = 'Der Termin wurde erfolgreich zugeteilt und die Teilnehmer verständigt.';
$string['assignsuccessnotsent'] = 'Der Slot wurde erfolgreich zugewiesen, aber die Teilnehmer wurden nicht verständigt.';
$string['availablefrom_help'] = 'Definieren Sie das Zeitfenster, während dem Teilnehmer sich für diese Termine anmelden können. Oder wählen Sie "Ab jetzt", um Anmeldungen ab sofort zu ermöglichen.';
$string['btn_sendall'] = 'Erinnerungen an alle Teilnehmer mit nicht genügend Buchungen versenden:';
$string['configrelativedeadline'] = 'Voreinstellung für den Zeitpunkt an dem Teilnehmer vor einem Termin davon in Kenntnis gesetzt werden sollten.';
$string['deletekeep'] = 'Die folgenden Termine werden abgesagt, die angemeldeten Teilnehmer werden benachrichtigt und die Slots gelöscht:';
$string['edit_notify_student:group:fullmessage'] = 'Hallo {$a->receivername}!

Im Rahmen des Kurses {$a->courseid} {$a->coursefullname} sind die Details des Gruppentermins {$a->sendername} am {$a->date} um {$a->time} verändert worden.

Trainer/in: {$a->slot_teacher}
Ort: {$a->slot_location}
Höchstanzahl der Teilnehmer: {$a->slot_maxparticipants}
Kommentar:
{$a->slot_comments}

Moodle Messaging System';
$string['edit_notify_teacher:fullmessage'] = 'Hallo {$a->receivername}!

Im Rahmen des Kurses {$a->courseid} {$a->coursefullname} sind die Details des Termins am {$a->date} um {$a->time} von {$a->sendername} verändert worden.

Trainer/in: {$a->slot_teacher}
Ort: {$a->slot_location}
Höchstanzahl der Teilnehmer: {$a->slot_maxparticipants}
Kommentar:
{$a->slot_comments}

Moodle Messaging System';
$string['edit_notify_teacher:group:fullmessage'] = 'Hallo {$a->receivername}!

Im Rahmen des Kurses {$a->courseid} {$a->coursefullname} sind die Details des Zeitslots am {$a->date} um {$a->time} von {$a->sendername} verändert worden.

Trainer/in: {$a->slot_teacher}
Ort: {$a->slot_location}
Höchstanzahl der Teilnehmer: {$a->slot_maxparticipants}
Kommentar:
{$a->slot_comments}

Moodle Messaging System';
$string['emailteachers_help'] = 'Benachrichtigungen an Trainer über die erste Registrierung der Teilnehmer sind
    normalerweise deaktiviert. Sie können Sie hier aktivieren. Bitte beachten Sie, dass
    Benachrichtigungen zu Um- und Abmeldungen der Teilnehmer möglicherweise trotzdem gesendet werden.';
$string['enableprintslotuserfieldsdesc'] = 'Ermöglicht es Trainern, die unterhalb standardmäßig definierten Termin-Ausdruck Profilfelder individuell abzuändern.';
$string['eval_no_participants'] = 'Dieser Slot hatte keine Teilnehmer';
$string['eval_notify_newappointment:student:fullmessage'] = 'Hallo {$a->receivername}!

Im Rahmen des Kurses {$a->courseid} {$a->coursefullname} ist Ihr Termin {$a->sendername} am {$a->date} um {$a->time} im/in {$a->location} bewertet worden.

Die Trainer des Kurses ermöglichen Ihnen, sich nochmals im Terminplaner {$a->organizername} zu einem noch freien Termin anzumelden.

Moodle Messaging System';
$string['eventnoparticipants'] = 'Ohne Teilnehmer';
$string['img_title_no_participants'] = 'Der Slot hatte keine Teilnehmer';
$string['infobox_showallparticipants'] = 'Alle Teilnehmer anzeigen';
$string['infobox_statistic_maxreached'] = '{$a->maxreached} von {$a->entries} Teilnehmer haben das Maximum von {$a->max} Terminen gebucht.';
$string['infobox_statistic_minreached'] = '{$a->minreached} von {$a->entries} Teilnehmer haben das geforderte Minimum von {$a->min} Termin(en) gebucht.';
$string['maxparticipants'] = 'Höchstanzahl der Teilnehmer';
$string['maxparticipants_help'] = 'Bestimmt die maximale Anzahl Teilnehmer die sich für die jeweiligen Slots registrieren können. Bei Gruppenterminplanern ist diese Anzahl immer auf eine Gruppe begrenzt.';
$string['message_info_appointment_deleted_group'] = 'Die Termine einer Gruppe sind gelöscht worden. Die Teilnehmer wurden benachrichtigt.';
$string['message_info_slots_deleted_pl'] = '{$a->deleted} Termine wurden gelöscht. {$a->notified} Teilnehmer wurden benachrichtigt.';
$string['message_info_slots_deleted_sg'] = 'Der Termin wurde gelöscht. {$a->notified} Teilnehmer wurden benachrichtigt.';
$string['message_info_slots_evaluated_pl'] = '{$a->count} Teilnehmer wurden bewertet.';
$string['modformwarningplural'] = 'Diese Felder können nicht bearbeitet werden, da es in diesem Terminplaner schon angemeldete Teilnehmer gibt!';
$string['modformwarningsingular'] = 'Dieses Feld kann nicht bearbeitet werden, da es in diesem Terminplaner schon angemeldete Teilnehmer gibt!';
$string['modulename_help'] = '###### Haupmerkmale:
* Termine für Einzelpersonen oder Gruppen erstellen, sodass Teilnehmer sich selbstständig zu einem gewünschten Termin anmelden können.
* Die Anwesenheiten der Teilnehmer und die Bewertungen dokumentieren.
###### Anwendungsbeispiel:
* Erstellen von Terminen für Gruppenabgabegespräche einer Projektarbeit, sodass Teilnehmer sich selbstständig zu einem gewünschten Termin anmelden können. Die Termine sollen z.B. in den kommenden zwei Wochen jeweils Dienstag bis Donnerstag zwischen 8:00 und 12:00 zu je 15 Minuten angelegt werden. Die An-, Ab- und Ummeldung soll bis 2 Tage vor dem jeweiligen Termin möglich sein. Die Anwesenheiten der Teilnehmer und die Bewertungen sollen dokumentiert werden.';
$string['modulename_summary'] = 'Mit der Aktivität "Terminplaner" können Trainer Termine bzw. Zeitfenster für die Teilnehmer bereitstellen.';
$string['mymoodle_attended'] = '{$a->attended}/{$a->total} Teilnehmer haben an einem Termin teilgenommen';
$string['mymoodle_attended_short'] = '{$a->attended}/{$a->total} Teilnehmer mindestens an einem Termin teilgenommen';
$string['mymoodle_registered'] = '{$a->registered}/{$a->total} Teilnehmer haben sich für einen Termin angemeldet.';
$string['mymoodle_registered_short'] = '{$a->registered} von {$a->total} Teilnehmer haben das Minimum von {a->slotsmin} Terminen gebucht.';
$string['noparticipants'] = 'Keine Teilnehmer';
$string['numentries_help'] = 'Wenn in Ihrem Kurs sehr viele Teilnehmer eingeschrieben sind, können Sie mittels der Einstellung "Optimal" die Aufteilung der Listeneinträge pro Seite entsprechend der gewählten Schriftgröße und Seitenausrichtung optimieren.';
$string['organizer:assignslots'] = 'Teilnehmer Zeitslots zuweisen';
$string['organizer:sendreminders'] = 'Anmeldungserinnerungen an Teilnehmer senden';
$string['organizer:viewregistrations'] = 'Status der Anmeldung von Teilnehmern ansehen';
$string['participants_help'] = 'Liste der Teilnehmer oder Gruppen, die den Termin gebucht haben.';
$string['printslotuserfieldsnotenabled'] = 'Die Druck-Funktion von Termin-Ausdruck Profilfeldern ist nicht durch Administratoren freigegeben.';
$string['privacy:metadata:organizerslottrainer'] = 'In dieser Tabelle werden Trainer eines Slots gespeichert.';
$string['relativedeadline_help'] = 'Die Deadline wird relativ zum jeweiligen Slot gesetzt. Teilnehmer können sich nach Ablauf dieser Deadline nicht für diesen Slot anmelden oder abmelden.';
$string['remindall_desc'] = 'Erinnerungen an alle Teilnehmer ohne Termin versenden';
$string['remindallmultiple_desc'] = 'Erinnerungen an alle Teilnehmer ohne genügend Buchungen versenden';
$string['status_no_entries'] = 'Für diesen Terminplaner sind keine Teilnehmer angemeldet.';
$string['studentcomment_title'] = 'Kommentare Teilnehmer';
$string['tabstud'] = 'Teilnehmer Ansicht';
$string['teacher_help'] = 'Eine Liste der Trainer des Termins.';
$string['teachercomment_title'] = 'Kommentare Trainer';
$string['teacherfeedback_title'] = 'Rückmeldung Trainer';
$string['teachervisible_help'] = 'Kreuzen Sie diese Option an um Teilnehmer zu erlauben, den zugewiesenen Trainer oder die zugewiesene Trainerin dieses Zeitslots einzusehen.';
$string['th_participant'] = 'Teilnehmer';
$string['th_participants'] = 'Teilnehmer';
$string['userslotsmax_help'] = 'Die Anzahl an Terminen, die Teilnehmer bzw. Gruppen buchen dürfen.';
$string['userslotsmin_help'] = 'Die notwendige Anzahl an Terminen, die Teilnehmer bzw. Gruppen buchen müssen.';
$string['visibility_help'] = 'Geben Sie hier den Standard vor, wie neue Termine angelegt werden sollen:<br/><b>Anonym:</b> Die Teilnehmer dieses Termins werden nie angezeigt.<br/><b>Sichtbar:</b> Alle Teilnehmer dieses Termins werden immer allen angezeigt.<br/><b>Sichtbar nur, wenn eigener Slot:</b> Nur Teilnehmer des Termins können einander sehen.';
