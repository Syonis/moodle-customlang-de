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
 * @subpackage kahoodle
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allavatars_desc'] = 'Avatare, die für die Kahoodle-Teilnehmer verwendet werden';
$string['allowjoining'] = 'Teilnehmer den Zutritt ermöglichen';
$string['allowrepeat_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer an mehreren Runden dieser Aktivität teilnehmen.';
$string['allroundsparticipants'] = 'Alle Runden: Teilnehmer';
$string['facilitator_controls'] = 'Steuerelemente für Trainer';
$string['finishgame_confirm'] = 'Möchten Sie die Aktivität wirklich abschließen? Dadurch wird die Runde für alle Teilnehmer beendet.';
$string['identitymode_help'] = 'Legt fest, wie die Teilnehmer während des Spiels und in Berichten angezeigt werden.

* **Echter Name** – Die Teilnehmer werden immer mit ihrem tatsächlichen Namen und ihrem Profilbild angezeigt.
* **Optionaler Alias** – Die Teilnehmer können einen benutzerdefinierten Anzeigenamen und ein Avatar wählen. Standardmäßig werden ihr tatsächlicher Name und ihr Profilbild verwendet.
* **Erforderlicher Alias** – Die Teilnehmer müssen einen Anzeigenamen eingeben (wird nicht automatisch ausgefüllt) und erhalten ein zufälliges Avatar, das sie ändern können. Trainer können die tatsächliche Identität weiterhin in Berichten einsehen.
* **Vollständig anonym** – Die Teilnehmer sind vollständig anonym. Es wird keine Benutzeridentität erfasst oder in Berichten angezeigt.

Um Gästen die Teilnahme am Spiel zu ermöglichen, stellen Sie den Identitätsmodus auf „Vollständig anonym“ ein, erlauben Sie Gäste im Plugin „Echtzeit-Events“, gewähren Sie Gästen Zugriff auf die Aktivität und aktivieren Sie die Berechtigung **mod/kahoodle:participateguest**.';
$string['kahoodle:viewresults'] = 'Kahoodle-Ergebnisse aller Teilnehmer anzeigen';
$string['landing_preparation_hasquestions'] = 'Sie können weiterhin Fragen bearbeiten oder den Teilnehmern den Beitritt ermöglichen, sobald Sie bereit sind.';
$string['landing_preparation_noquestions'] = 'Die Teilnehmer können bis jetzt nicht teilnehmen. Fügen Sie zunächst Fragen zu dieser Aktivität hinzu, dann können Sie diese für die Teilnehmer freigeben.';
$string['participant_controls'] = 'Teilnehmer verwalten';
$string['participantanswers'] = 'Antworten der Teilnehmer';
$string['participants'] = 'Teilnehmer';
$string['preparenewround_help'] = 'Wenn Sie die Aktivität wiederholen möchten, klicken Sie auf „Neue Runde vorbereiten“. Dadurch ändert sich die Meldung für die Teilnehmer von „Die Aktivität ist beendet“ zu „Die Aktivität hat noch nicht begonnen“. Außerdem können Sie die Fragen für die nächste Runde ändern, ohne dass dies Auswirkungen auf die vorherigen Runden hat.';
$string['privacy:metadata:core_files'] = 'Für die Teilnehmer gespeicherte Avatar-Bilder.';
$string['privacy:metadata:kahoodle_responses'] = 'Antworten der Teilnehmer auf die Fragen.';
$string['questionduration_help'] = 'Zeit, die den Teilnehmern zur Beantwortung jeder Frage zur Verfügung steht.';
$string['questionformat_help'] = 'Wählen Sie aus, wie Fragen erstellt werden sollen. „Einfacher Text mit Bild“ sorgt für eine einheitliche Darstellung mit einer einfachen Texteingabe und einem optionalen Bild. „Rich Text“ ermöglicht die volle Kontrolle über den Editor, erfordert jedoch, dass Trainer das Layout selbst verwalten.';
$string['questionhasresponses'] = 'Zu dieser Frage liegen bereits Antworten von Teilnehmern vor. Einige Änderungen sind möglicherweise nicht zulässig.';
$string['questionpreviewduration_help'] = 'Vorschaudauer, bevor die Teilnehmer antworten können.';
$string['results_participants'] = 'Teilnehmer';
$string['results_viewparticipants'] = 'Teilnehmer anzeigen';
$string['topwinners'] = 'Die besten Gewinner';
