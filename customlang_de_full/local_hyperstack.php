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
 * @subpackage hyperstack
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['mapping:help'] = 'Wenn Teilnehmer diesen Kurs abschließen, stellt Hyperstack aus jeder ausgewählten Gruppe einen Nachweis aus und sendet ihn per E-Mail an die Teilnehmer.';
$string['past:button'] = 'An Teilnehmer mit früherem Abschluss ausstellen';
$string['past:help'] = 'Teilnehmer, die diesen Kurs bereits früher abgeschlossen haben: {$a}. Teilnehmer, die über diesen Kurs bereits einen Nachweis aus diesen Gruppen haben, erhalten keinen weiteren.';
$string['past:title'] = 'Teilnehmer mit früherem Abschluss';
$string['privacy:metadata:hyperstack'] = 'Um einen Nachweis auszustellen, werden die Daten der Teilnehmer an Hyperstack gesendet. Hyperstack erstellt den Nachweis und sendet ihn per E-Mail an die Teilnehmer.';
$string['privacy:metadata:hyperstack:email'] = 'Die E-Mail-Adresse der Teilnehmer, an die der Nachweis gesendet wird.';
$string['privacy:metadata:hyperstack:fullname'] = 'Der vollständige Name der Teilnehmer, der auf dem Nachweis steht.';
$string['privacy:metadata:issue'] = 'Die Nachweise, die Teilnehmer für jeden Kurs ausgestellt wurden, und wie die Ausstellung verlief.';
$string['report:empty'] = 'Noch keine Nachweise. Sie erscheinen hier, wenn Teilnehmer den Kurs abschließen.';
$string['settings:intro'] = 'Stellen Sie Hyperstack-Zertifikate und -Badges aus, wenn Lernende einen Kurs abschließen. Ein Hyperstack-Konto ist erforderlich; der kostenlose Tarif umfasst bis zu 20 Empfänger. Nachdem Sie den API-Schlüssel gespeichert haben, <a href="{$a}">testen Sie die Verbindung</a>. Trainer wählen dann in jedem Kurs unter Mehr → Hyperstack-Nachweise die Nachweisgruppen aus. Der Kursabschluss wird per cron berechnet, daher muss cron laufen.';
