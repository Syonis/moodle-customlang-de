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
 * Report for extended log searching.
 *
 * @package    report_extendedlog
 * Original plugin copyright (retained from the English source):
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 *
 * German translation: Syonis, 2026
 * Translation created with AI assistance.
 *
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['eventreportviewed'] = 'Bericht zur erweiterten Protokollsuche angesehen';
$string['extendedlog:view'] = 'Bericht zur erweiterten Protokollsuche anzeigen';
$string['filterheader'] = 'Filter';
$string['filter_category'] = 'Kursbereich';
$string['filter_category_all'] = 'Alle Kursbereiche';
$string['filter_category_options'] = 'Suchen in';
$string['filter_category_options_category'] = 'Ausgewählter Kursbereich';
$string['filter_category_options_subcategories'] = 'Ausgewählter Kursbereich und alle Unterbereiche';
$string['filter_category_options_courses'] = 'Ausgewählter Kursbereich, alle Unterbereiche, Kurse und Module';
$string['filter_course'] = 'Kurs';
$string['filter_course_all'] = 'Alle Kurse';
$string['filter_component'] = 'Komponente';
$string['filter_component_all'] = 'Alle Komponenten';
$string['filter_component_core'] = 'Moodle-Kernsystem (core)';
$string['filter_crud'] = 'Aktion';
$string['filter_ip4'] = 'IPv4-Adresse';
$string['filter_ip4_help'] = 'Geben Sie eine kommagetrennte Liste vollständiger oder unvollständiger IP-Adressen an.';
$string['filter_ip6'] = 'IPv6-Adresse';
$string['filter_ip6_help'] = 'Geben Sie eine kommagetrennte Liste vollständiger IP-Adressen an.';
$string['filter_edulevel'] = 'Bildungsebene';
$string['filter_event'] = 'Ereignis';
$string['filter_event_all'] = 'Alle Ereignisse';
$string['filter_event_core'] = 'Ereignisse des Kernsystems (core)';
$string['filter_objectid'] = 'Objekt-ID';
$string['filter_objectid_error'] = 'Bitte geben Sie eine ganze Zahl ein.';
$string['filter_objecttable'] = 'Objekttabelle';
$string['filter_objecttable_all'] = 'Alle Tabellen';
$string['filter_origin'] = 'Ursprung';
$string['filter_origin_web'] = 'Weboberfläche';
$string['filter_origin_cli'] = 'Kommandozeile';
$string['filter_relateduser'] = 'Betroffener Nutzer';
$string['filter_timecreatedafter'] = 'Ereignis nach diesem Zeitpunkt';
$string['filter_timecreatedbefore'] = 'Ereignis vor diesem Zeitpunkt';
$string['filter_user'] = 'Nutzer';
$string['filter_useremail'] = 'Teil der E-Mail-Adresse des Nutzers';
$string['filter_user_all'] = 'Alle Nutzer';
$string['logstore'] = 'Protokollspeicher';
$string['navigationnode'] = 'Erweiterte Protokollsuche';
$string['notificationhighload'] = 'Achtung! Dieser Bericht verwendet nicht optimierte Datenbankabfragen. Diese können lange dauern und die Datenbank stark belasten.<br/>Es wird dringend empfohlen, einen Zeitraum anzugeben, um die Abfrage zu beschleunigen.';
$string['pluginname'] = 'Erweiterte Protokollsuche';
$string['privacy:metadata'] = 'Das Plugin speichert keine personenbezogenen Daten.';
$string['showlogs'] = 'Ereignisse anzeigen';

$string['filter_course_template'] = '{$a->fullname} ({$a->shortname})';

$string['filter_component_grouptemplate'] = '{$a->typedisplaynameplural} ({$a->typename})';

$string['filter_component_template'] = '{$a->displayname} ({$a->name})';

$string['filter_event_grouptemplate'] = '{$a->typedisplayname} "{$a->plugindisplayname}" ({$a->pluginname})';

$string['filter_event_template'] = '{$a->displayname} ({$a->name})';
