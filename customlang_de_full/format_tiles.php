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
 * @package    format
 * @subpackage tiles
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assumedatastoreconsent_desc'] = 'Wenn diese Option ausgewählt ist, wird die Zustimmung zur lokalen Datenspeicherung im Browser automatisch gegeben. Den Nutzern  wird <b>kein Dialog</b> angezeigt, in dem um eine Zustimmung zur Datenspeicherung gebeten wird.';
$string['basecolour_help'] = 'Die hier festgelegte Farbe wird für alle Kacheln im Kurs angewendet. Die verfügbaren Farben werden von den Administratoren in den Einstellungen des Kachelformats festgelegt.';
$string['coursetoomanysections'] = 'Warnung: Dieser Kurs enthält mehr Kacheln als maximal zulässig. Den Teilnehmern werden maximal {$a->max} angezeigt (nur bis "{$a->tilename}"). Trainer und Administratoren können mehr sehen.';
$string['displayfilterbar_help'] = '<p>Wenn diese Option ausgewählt ist, wird automatisch eine Reihe von Schaltflächen vor dem Kacheln im Kurs angezeigt. Diese können Nutzer anklicken, um Kacheln zu filtern </p><p>Wurde \'basierend auf Kachelnummern\' ausgewählt, wird eine Reihe von Schaltflächen angezeigt, z.B. eine Schaltfläche für Kacheln 1-4, eine Schaltfläche für Kacheln 5-8 usw. </p><p>Wurde \'basierend auf Kursergebnissen\' ausgewählt, gibt es eine Schaltfläche pro Kursergebnis. Jede Kachel kann auf der Einstellungsseite der jeweiligen Kachel einem bestimmten Ergebnis (und damit einer bestimmten Schaltfläche) zugeordnet werden.</p>';
$string['fittilestowidth_desc'] = 'Wenn diese Option aktiviert ist und jemand mit einem nicht mobilen Gerät auf einen Kurs zugreift, verzögern die Kacheln das Laden, während eine Berechnung des besten Layouts durchgeführt wird. Vermeiden Sie eine Kachel pro Reihe und zentrieren Sie die Kacheln auf dem Bildschirm. Die Berechnung geschieht, wenn Nutzer den Kurs zum ersten Mal betreten, und wird für die Sitzung oder bis zur Änderung der Fenstergröße gespeichert.';
$string['highcontrastmodeallow_desc'] = 'Diese Option erlaubt es Nutzern, Kachelkurse über einer personenbezogene Einstellung auf hohem Kontrast umzuschalten. Die von den Trainern ausgewählten Kachelfarben werden durch eine dunkle Farbe überschrieben.';
$string['privacy:metadata:preference:format_tiles_high_contrast_mode'] = 'Nutzer können den Modus "Hoher Kontrast" nutzen.';
$string['seczerocollapsible_desc'] = 'Nutzer erlauben, den Abschnitt 0 einzuklappen';
$string['snapwarning_help'] = 'Designs > Einstellungen > Designwechsel für Nutzer erlauben';
$string['tilecolourgeneral_descr'] = 'Mit diesen Einstellungen wird festgelegt, welche Farben den Trainern in deren Kursen zur Verfügung stehen. Stellen Sie die Farbe auf Schwarz (#000000) ein, um diese Farbe zu deaktivieren. Wenn Sie die Farben nachträglich hier ändern, werden keine Änderungen an vorhandenen Kursen vorgenommen. Für die nächste Kursbearbeitung stehen den Trainern aber nur die Farben zur Verfügung, die Sie hier festgelegt haben.';
