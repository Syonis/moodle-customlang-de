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
 * @package    local
 * @subpackage learning_analytics
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['help_faq_data_storage_answer'] = 'Die dargestellten Daten stammen aus zwei Datenquellen.
Beide Quellen werden in der internen Moodle-Datenbank gespeichert.
Bei der ersten Datenquelle handelt es sich um interne Moodle-Datensätze, wie z.B. die Anzahl an Teilnehmer im Kurs (linke Box im Dashboard).
Diese Datensätze lassen sich zum Teil auch auf anderen Moodle-Seiten einsehen und werden auf diesen Seiten anders visualisiert.
Bei der zweiten Datenquelle handelt es sich um Daten, die eigens für die Darstellung der Zugriffsstatistiken erhoben werden.
Alle Daten, die dafür erhoben werden, werden anonymisiert gespeichert und erlauben keine Rückverfolgung zu einzelnen Nutzern.
Konkret werden bei jedem Aufruf in Moodle folgende Daten gespeichert:';
$string['help_faq_personal_data_answer'] = 'Aus Datenschutzgründen erhebt das Learning Analytics-Angebot keine personalisierten Daten. Daher enthalten die meisten dargestellten Statistiken (z.B. die meist genutzten Aktivitäten) nur Information darüber wie oft eine Resource aufgerufen wurde, aber nicht von wie vielen Teilnehmern.
Eine Ausnahme stellen die Statistiken zu Teilnehmern und Tests/Aufgaben da, da hier auch Moodle-eigene Daten dargestellt werden.';
$string['help_faq_visibility_answer'] = 'Um größtmögliche Transparenz zu gewährleisten, können die angezeigten Daten sowohl von den Trainern als auch von den Teilnehmern des Kurses eingesehen werden.';
$string['help_faq_week_start_answer'] = 'Die Darstellung im Dashboard richtet sich nach der Einstellung "Kursbeginn" in den Kurseinstellungen. Sollte das dort vorgegebene Datum nicht dem tatsächlichen Start des Kurses entsprechen, wird auch die Anzeige im Dashboard nicht korrekt sein.
Die Kurstrainer können den Kursstart in den Kurseinstellungen (unter Allgemeines / Kursbeginn) verändern.';
$string['help_text'] = 'Auf der Seite "Zugriffsstatistiken" des Learning Analytics-Angebotes werden verschiedene Kennzahlen des Kurses dargestellt.

Die dargestellten Statistiken sind live und enthalten sowohl selber erhobenen Daten als auch Moodle-eigene Daten. Alle vom Learning Analytics-Angebot erhobenen Daten werden anonymisiert erhoben und erlauben keine Rückverfolgung zu einzelnen Nutzern.';
$string['learners'] = 'Teilnehmer';
$string['setting_status_course_customfield'] = 'Eintrag in den Kurseinstellungen hinzufügen, so dass die Kurstrainer selber entscheiden können';
$string['tour_box_learners'] = 'Die erste Anzeige gibt die Gesamtzahl an eingeschriebenen Teilnehmer wieder. Unterhalb der großen Zahl, ist die Veränderung zur Vorwoche dargstellt.';
$string['tour_box_learnerslink'] = 'Durch einen Klick auf den Link werden weiterführende Informationen zu den Teilnehmern angezeigt.';
