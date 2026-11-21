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
 * @package    quizaccess
 * @subpackage delayed
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['delayedattemptlock_help'] = 'Wenn aktiviert, wird die Schaltfläche zum Starten des Tests beim Laden der Testseite vor Startzeitpunkt deaktiviert.
Es startet ein Countdown auf Basis einer Zufallszahl (bis zu einer von der Institution vorgegebenen Grenze). Wenn der Countdown endet, wird die Schaltfläche wieder aktiviert und die Teilnehmer können den Versuch starten.';
$string['quizaccess_delayed_allowdisable'] = 'Die Trainer können die Regelung abstellen';
$string['quizaccess_delayed_dangerousquiznotice_desc'] = 'Diese Mitteilung wird Trainer angezeigt bei Erstellung des Tests, wenn das Plugin feststellt, dass die Parameter problematisch sein können. Das ist eine gute Stelle, um auf Handbücher oder Anweisungen für den Entwurf weniger kritischer Tests zu verweisen.';
$string['quizaccess_delayed_notice'] = 'Hinweis an Teilnehmer';
$string['quizaccess_delayed_notice_desc'] = 'Dieser Text wird allen Teilnehmern zusätzlich zu dem Text angezeigt, den die Trainer als Beschreibung der Aktivität nutzen. Er ist so entworfen, dass eine Nachricht der Institution angezeigt werden soll, meist bezüglich Anweisungen, wie man die Tests verwenden kann.';
$string['quizaccess_delayed_showdangerousquiznotice'] = 'Zeigt Trainern eine Warnung an, falls daher Test ressourcenintensiv ist';
$string['quizaccess_delayed_startrate'] = 'Zugangsrate (Teilnehmer pro Minute)';
$string['quizaccess_delayed_teachernotice'] = 'Dieser Test verwendet eine gestufte Zugangssteuerung, die dafür sorgt, dass Teilnehmer zufällig mit bis zu {$a} Minuten Verzögerung einen Zugang erhalten.';
$string['quizaccess_delayed_teachernotice2'] = 'Hinweis an die Trainer: Teilnehmer sehen beim Warten die folgende Nachricht.';
$string['tooshorttimeguardadvice'] = 'Eine Verfügbarkeit von {$a->timespanstr} ist zu eng bemessen. Beachten Sie bitte, dass einige Teilnehmer um bis zu {$a->maxdelaystr} Minuten verzögerten Zugriff erhalten und {$a->timelimitstr} Zeit zur Bearbeitung haben. Es ist ratsam, einen Sicherheitsrahmen für andere Verzögerungen beim Starten des Tests zu lassen.';
