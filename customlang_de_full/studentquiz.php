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
 * @subpackage studentquiz
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addprivatecomment_help'] = 'Diese Kommentare sind ausschließlich zwischen Autor/in der Frage und den Trainern. Diese dienen den Trainern zum Verfassen von Feedback und wenn der Status der Frage geändert wird.';
$string['completionpointgroup_help'] = 'Teilnehmer können die in der Rangliste eingestellten Punkte sammeln, z.B. 10 Punkte für das Verfassen einer Frage, 5 Punkte für die Freigabe einer Frage durch den/die Trainer/in, 3 Punkte für das Bewerten einer Frage eines anderen Teilnehmers/einer anderen Teilnehmerin. Wird eine Zahl in diesem Feld eingetragen, können Teilnehmer die Aktivität StudentQuiz nur abschließen, wenn sie genügend Punkte gesammelt haben.';
$string['modulename_help'] = '###### Features
- Ermöglicht es Teilnehmern, kollaborative Fragepools zu erstellen
- Ermöglicht das Filtern, Bewerten und Kommentieren von Fragen
- Ermöglicht es Teilnehmern personalisierte Tests vom geteilten Fragepool zusammenzustellen
- Ermöglicht das tracken von individuellen Beiträgen und dem Lernfortschritt mit Rangliste-Punkten
- Fügt erstellte Fragen zur Moodle Fragenbank zur Wiederverwendung hinzu

###### Möglichkeiten zur Verwendung
- Motivation von Teilnehmern zum aktiven Beitrag und Übung durch Gamification
- Vorbereitung auf Prüfungen durch einen kollaborativ erstellten Fragepool
- Motivation zu Peer Feedback und Diskussionen über gegenseitige Bewertungen und Kommentare
- Trainer haben die Kontrolle über die Freigabe von Fragen und Einstellungen zur Anonymisierung
- Unterstützt personalisiertes Lernen durch das Zusammenstellen von Tests durch Teilnehmer
In der StudentQuiz-Übersicht können die Teilnehmer Fragen filtern. Sie können die gefilterten Fragen anschließend zum Üben benutzen. Trainer haben die Option die Spalte "erstellt von" zu anonymisieren.<br><br>Die StudentQuiz-Aktivität vergibt Teilnehmer Punkte, um sie zu motivieren, Fragen hinzuzufügen und damit zu üben. Die Punkte werden in einer Rangliste aufgelistet.';
$string['modulename_summary'] = 'Ermöglicht es Teilnehmern, Fragebanken zu erstellen und daraus personalisierte Tests zusammenzustellen. Zur Motivation werden dabei Punkte gesammelt.';
$string['settings_allowedrolestoshow_help'] = 'Dieses steht mit der vorherigen Einstellung in Verbindung. Nicht alle Rollen im System sind für das StudentQuiz relevant, weshalb die Zahl an Rollen in den Aktivitätseinstellungen über diese Einstellung eingeschränkt werden kann. Hier ausgewählte Rollen werden bei jeder StudentQuiz-Aktivität angezeigt, Trainer können diese Einstellung ändern. Nicht gewählte Rollen werden bei Berichten nicht angezeigt, sofern diese oberhalb bei den Standard-Einstellungen ausgeschlossen wurden.';
$string['settings_anonymous_help'] = 'Teilnehmer können die Namen anderer Teilnehmer nicht sehen.';
$string['settings_anonymous_label'] = 'Teilnehmer anonymisieren';
$string['settings_commentdeletionperiod_help'] = 'Zeitperiode (in Minuten) für die Bearbeitung und das Löschen des Kommentars für Studierende. Werte zwischen 0 und 60 Minuten sind erlaubt. Falls die Zeit für die Löschung auf 0 gesetzt ist, können Studierende ihren Kommentar nicht Bearbeiten oder Löschen. Lehrende und Administratoren können Kommentare immer bearbeiten oder löschen.';
$string['settings_excluderoles_help'] = 'In jeder StudentQuiz-Aktivität, können Trainer definieren, welche Rollen beim Ranking ausgeschlossen werden. Die Liste der hier gesetzten Rollen werden standardmäßig für jede neu angelegte StudentQuiz-Aktivität verwendet.';
$string['settings_privatecomment_help'] = 'Sie können hier den Erklärungstext ändern, je nachdem wie Ihre Organisation Diskussionen zwischen einer Teilnehmerin/ einem Teilnehmer und Trainer durchführt.';
$string['settings_reportingemail_help'] = 'Wenn hier eine E-Mailadresse hinterlegt ist, erscheint ein Meldelink neben jedem Kommentar. Nutzer können diesen Link anwählen, um einen beleidigenden Kommentar zu melden. Diese Meldung wird dann an diese Adresse gesendet.

Wenn keine E-Mailadresse hinterlegt ist, wird die Meldungs-Funktion nicht angezeigt.

Mehrere E-Mailadressen können mit einem Strichpunkt getrennt angegeben werden.';
$string['settings_showprivatecomment_help'] = 'Diese Option aktiviert die erweiterte Diskussion zwischen einer Teilnehmerin/ einem Teilnehmer und Trainer (Bezeichnungen können je nach Organisation variieren) in der Fragen-Vorschau.';
$string['studentquiz:emailnotifyquestion'] = 'Nutzer erhalten E-Mail-Benachrichtigungen über den geänderten Fragen-Status';
$string['studentquiz:emailnotifyreviewablequestion'] = 'Nutzer/in erhält eine Benachrichtigung per E-Mail, wenn Teilnehmer den Status ihrer Fragen auf überprüfbar setzt.';
$string['studentquiz:unhideanonymous'] = 'Kann die Namen von anderen Teilnehmern sehen, auch wenn die Anonymisierung aktiviert ist.';
