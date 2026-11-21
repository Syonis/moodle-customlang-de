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
 * @subpackage condition
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablefrom_help'] = 'Die Verfügbarkeitsdauer (von/bis) bestimmt den Zeitraum, in dem die Aktivität im Kurs verfügbar ist.

Im Gegensatz zu den Zugangsbedingungen, die an die Lernfortschritte oder Bewertungen von Teilnehmern geknüpft sind, verhindert die Verfügbarkeitsdauer (von/bis) den Zugriff außerhalb des gesetzten Zeitraums vollständig.';
$string['completioncondition_help'] = 'Diese Einstellung legt Bedingungen von anderen Aktivitäten fest, die erfüllt sein müssen, bevor diese Aktivität für die Teilnehmer verfügbar wird. Beachten Sie, dass hierzu die Funktion Abschlussverfolgung auf Systemebene aktiviert sein muss.

Eventuell kann auch eine Kombination aus mehreren Aktivitätsabschlussbedingungen sinnvoll sein. Es müssen dann alle angegebenen ALLE Aktivitätsabschlussbedingungen erfüllt sein.  ';
$string['gradecondition_help'] = 'Diese Einstellung legt Bewertungsbedingungen fest, die erfüllt sein müssen, bevor diese Aktivität für die Teilnehmer verfügbar wird.

Eventuell kann auch eine Kombination aus mehreren Bewertungsbedingungen sinnvoll sein, wobei aber dann die Aktivität nur verfügbar ist, wenn wirklich ALLE Bewertungsbedingungen erfüllt sind.';
