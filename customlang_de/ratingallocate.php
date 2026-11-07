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
 * @package    mod
 * @subpackage ratingallocate
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allocation_manual_explain_all'] = 'Ordnen Sie den Teilnehmern eine Wahlmöglichkeit zu.';
$string['allocation_manual_explain_only_raters'] = 'Ordnen Sie den Teilnehmern eine Wahlmöglichkeit zu. Es werden nur diejenigen Teilnehmer angezeigt, welche mindestens eine Möglichkeit ausgewählt haben.';
$string['allocation_statistics_description'] = 'Diese Tabelle gibt einen Überblick über die Verteilung. Sie wird errechnet mit Bezug zu den Abstimmungen der Teilnehmer für ihre Wahlmöglichkeiten. <ul> <li>{$a->rated} von {$a->usersinchoice} Teilnehmer haben eine Auswahl getroffen.</li> <li>{$a->users} von {$a->total} Teilnehmer haben die Auswahl "{$a->rating}" getroffen.</li> <li>{$a->unassigned} Teilnehmer konnten noch nicht verteilt werden.</li> </ul>';
$string['allocation_statistics_description_no_alloc'] = 'Diese Tabelle gibt einen Überblick über die Verteilung. Sie wird errechnet mit Bezug zu den Abstimmungen der Teilnehmer für ihre Wahlmöglichkeiten. <ul> <li>Zurzeit haben {$a->notrated} Teilnehmer noch keine Auswahl getroffen.</li> <li>{$a->rated} Teilnehmer haben bereits eine Auswahl getroffen.</li> <li>Es gibt derzeit noch keine Verteilungen.</li> </ul>';
$string['allocation_table_description'] = 'Diese Statistik gibt einen Überblick über die Zuweisungen für diese Gerechte Verteilung. Alle Teilnehmer, welche an der Abstimmung teilgenommen haben, aber nicht zugewiesen wurden, werden unter \'Keine Zuweisung\' angezeigt.';
$string['allocations_table_users'] = 'Teilnehmer';
$string['choice_active_help'] = 'Teilnehmer können nur aktive Wahlmöglichkeiten nutzen. Inaktive Wahlmöglichkeiten werden nicht angezeigt.';
$string['choice_maxsize'] = 'Max. Anzahl von Teilnehmern';
$string['choice_maxsize_display'] = 'Max. Anzahl von Teilnehmern';
$string['completionallocation_help'] = 'Um diese Aktivität abzuschließen, müssen Teilnehmer zu einer Wahlmöglichkeit zugeordnet werden.';
$string['completionvote_help'] = 'Um diese Aktivität abzuschießen, müssen Teilnehmer eine Abstimmung abschicken.';
$string['configalgorithmforcebackground'] = 'Auch bei manueller Ausführung durch Teilnehmer wird die Verteilung immer im Hintergrund berechnet.';
$string['configdownloaduserfields'] = 'Beim Herunterladen einer Tabelle mit enthaltenen Teilnehmern können diese Felder zusätzlich zu den Vor- und Nachnamen angezeigt werden.';
$string['confirm_delete_all_ratings'] = 'Möchten Sie wirklich alle Abstimmungen löschen, die bisher von Teilnehmern gemacht wurden?';
$string['delete_all_ratings'] = 'Alle Abstimmungen der Teilnehmer löschen';
$string['delete_all_ratings_explanation'] = 'Löscht alle Abstimmungen, die bisher von Teilnehmern gemacht wurden, und alle Verteilungen, die basierend auf diesen Abstimmungen vorgenommen wurden. Mit Vorsicht nutzen!';
$string['distribute_unallocated_equally_confirm'] = 'Alle bisher nicht verteilten Teilnehmer werden zu den Wahlmöglichkeiten zugeteilt. Die Wahlmöglichkeiten werden gleichmäßig aufgefüllt, so dass alle ungefähr die gleiche Teilnehmerzahl übrig haben.';
$string['distribute_unallocated_fill_confirm'] = 'Alle bisher nicht verteilten Teilnehmer werden zu den Wahlmöglichkeiten zugeteilt. Eine offene Wahlmöglichkeit wird bis zum Maximum aufgefüllt bevor die Teilnehmer zu der nächsten Wahlmöglichkeit zugeordnet werden.';
$string['distributing_unallocated_users_started'] = 'Die Verteilung von nicht zugeordneten Teilnehmern wurde gestartet. Bitte warten Sie einige Zeit und werfen Sie danach einen Blick auf die Verteilungstabelle.';
$string['distribution_description'] = 'Verteilung von nicht zugeordneten Teilnehmern';
$string['distribution_description_help'] = 'Sie können zwischen zwei verschiedenen Algorithmen wählen, um bisher noch nicht zugeordnete Teilnehmer auf die Wahlmöglichkeiten zu verteilen. <br/> <i>Gleichmäßige Verteilung:</i> Teilnehmer werden gleichmäßig zwischen den Wahlmöglichkeiten mit freien Plätzen aufgeteilt mit Rücksicht auf das Maximum.<br/> <i>Wahlmöglichkeiten auffüllen:</i> Jede Wahlmöglichkeit wird mit Teilnehmern zum Maximum aufgefüllt bevor die nächste Wahlmöglichkeit aufgefüllt wird. Wahlmöglichkeiten mit den am wenigsten freien Plätzen werden zuerst aufgefüllt.<br/><br/> Gruppenbeschränkungen für Wahlmöglichkeiten werden entsprechend berücksichtigt.';
$string['distribution_unallocated_already_running'] = 'Die Verteilung von nicht zugeordneten Teilnehmern wird derzeit durchgeführt. Bitte warten Sie einige Zeit und laden Sie die Seite danach erneut, um zu prüfen, ob der Vorgang abgeschlossen ist.';
$string['filter_hide_users_without_rating'] = 'Teilnehmer ohne vorgenommene Abstimmung ausblenden';
$string['filter_show_alloc_necessary'] = 'Teilnehmer mit vorhandener Verteilung ausblenden';
$string['filtergroup_help'] = '* Wählen Sie eine Gruppe aus, um die Teilnehmer im Kurs nach den Gruppen zu filtern, denen sie angehören und bewertbare Wahlmöglichkeiten nach Gruppen, die die Möglichkeit hatten, auf sie zuzugreifen. * Es können nur Gruppen ausgewählt werden, die in der Option *Gruppen verwenden* ausgewählt werden können. * Wenn *keine Gruppe* ausgewählt wurde, werden die Teilnehmer angezeigt, die keiner der Gruppen angehören, die für eine Wahlmöglichkeit verwendet werden.';
$string['log_allocation_published_description'] = 'Nutzer mit der ID \'{$a->userid}\' hat die Verteilung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' veröffentlicht.';
$string['log_allocation_statistics_viewed_description'] = 'Teilnehmer mit der ID \'{$a->userid}\' hat die Verteilungsstatistik für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' angesehen.';
$string['log_allocation_table_viewed_description'] = 'Teilnehmer mit der ID \'{$a->userid}\' hat die Verteilungstabelle für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' angesehen.';
$string['log_distribution_triggered_description'] = 'Teilnehmer mit der ID \'{$a->userid}\' hat die Verteilung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' gestartet. Der Algorithmus hat {$a->time_needed} Sekunden gebraucht.';
$string['log_index_viewed'] = 'Teilnehmer hat die Liste aller gerechten Verteilungen angesehen';
$string['log_index_viewed_description'] = 'Teilnehmer mit der ID "{$a->userid}" hat die Liste aller gerechten Verteilungen angesehen.';
$string['log_manual_allocation_saved_description'] = 'Teilnehmer mit der ID \'{$a->userid}\' hat eine manuelle Verteilung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' gespeichert.';
$string['log_rating_deleted_description'] = 'Teilnehmer mit der ID "{$a->userid}" hat die Auswahl für die gerechte Verteilung mit der ID "{$a->ratingallocateid}" gelöscht.';
$string['log_rating_saved_description'] = 'Nutzer mit der ID \'{$a->userid}\' hat seine Abstimmung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' gespeichert.';
$string['log_rating_viewed_description'] = 'Teilnehmer mit der ID \'{$a->userid}\' hat die Abstimmung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' angesehen.';
$string['log_ratingallocate_viewed_description'] = 'Teilnehmer mit der ID \'{$a->userid}\' hat die \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' angesehen.';
$string['modify_allocation_group_desc_published'] = 'Die Verteilungen wurden veröffentlicht. Sie sollten diese nur mit Bedacht verändern. Informieren Sie die Teilnehmer über eine nachträgliche Veränderung manuell!';
$string['modify_allocation_group_desc_ready'] = 'Die Abstimmungsphase ist beendet. Sie können nun den automatischen Verteilungsalgorithmus basierend auf den Abstimmungen der Teilnehmer ausführen.';
$string['modify_choices_group_desc_too_early'] = 'Hier können Sie die Wahlmöglichkeiten spezifizieren, welche für die Teilnehmer verfügbar sein sollen.';
$string['modulename_help'] = '###### Hauptmerkmale - Auswahlmöglichkeiten definieren, die Teilnehmer nach ihren Präferenzen bewerten können - Unterstützung verschiedener Bewertungsstrategien (Ja/Nein, Reihenfolge, Punkte, Likert-Skala) - Automatische Zuweisung mithilfe eines Algorithmus zur Maximierung der Gesamtzufriedenheit - Auswahlmöglichkeiten können maximale Kapazitätsgrenzen haben - Manuelle Anpassungen nach der automatischen Zuweisung möglich (auch für nicht zugewiesene Teilnehmer) - E-Mail-Benachrichtigungen an die Teilnehmer über ihre Zuweisung ###### Anwendungsmöglichkeiten - Teilnehmer anhand ihrer Präferenzen Seminarplätzen oder Lerngruppen zuweisen - Abschlussarbeiten fair unter den Teilnehmern verteilen - Teilnehmer auf begrenzte Ressourcen fair zuweisen - Einsatz in Schulen, Universitäten oder überall dort, wo eine faire Zuweisung erforderlich ist - Automatische Zuweisung mit manueller Feinabstimmung für optimale Ergebnisse kombinieren';
$string['modulename_summary'] = 'Ermöglicht eine gerechte Verteilung der Teilnehmer auf begrenzte Ressourcen, indem diese die Optionen bewerten können und ein Algorithmus zur Maximierung der Gesamtzufriedenheit zum Einsatz kommt.';
$string['no_user_to_allocate'] = 'Es gibt keine Teilnehmer, die Sie zuordnen könnten.';
$string['ratingallocate:distribute_unallocated'] = 'Möglichkeit, nicht zugeordnete Teilnehmer automatisch zu verteilen.';
$string['ratingallocate:export_ratings'] = 'Möglichkeit, die Präferenzen von Teilnehmern zu exportieren.';
$string['ratings_table_user'] = 'Teilnehmer';
$string['select_strategy_help'] = 'In welchem Modus sollen die Teilnehmer abstimmen? * **Akzeptieren-Ablehnen** Teilnehmer können für jede Wahlmöglichkeit abstimmen, ob sie diese akzeptieren würden oder ablehnen. * **Akzeptieren-Neutral-Ablehnen** Teilnehmer können für jede Wahlmöglichkeit abstimmen, ob sie diese akzeptieren oder ablehnen würden oder ob sie dieser Wahlmöglichkeit neutral gegenüberstehen. * **Likert-Skala** Teilnehmer können für jede Wahlmöglichkeit auf einer Skala mit positiven ganzen Zahlen abstimmen. Die Skala beginnt mit 0. Ihr Ende kann in den Einstellungen gesetzt werden. Eine hohe Zahl bedeutet eine hohe Präferenz. * **Punkte verteilen** Teilnehmer können für jede Wahlmöglichkeit Punkte vergeben. Die Gesamtzahl der zu vergebenden Punkte kann in den Einstellungen gesetzt werden. Je mehr Punkte eine Wahlmöglichkeit erhält, desto höher ist ihre Präferenz. * **Reihenfolge** Teilnehmer können ihre \'N\' besten Wahlmöglichkeiten angeben und ordnen. Wie viele Wahlmöglichkeiten angegeben werden müssen kann eingestellt werden. * **Ankreuzen** Teilnehmer können für jede Wahlmöglichkeit durch das Ankreuzen von Kästchen angeben, ob diese für sie akzeptabel ist. Diese Option kann nicht mehr verändert werden, sobald Teilnehmer abgestimmt haben.';
$string['start_distribution_explanation'] = 'Der Algorithmus wird die Teilnehmer entsprechend ihrer Abstimmungen auf die Wahlmöglichkeiten möglichst fair verteilen.';
$string['strategy_altered_after_preferences'] = 'Die Strategie kann nicht mehr verändert werden, sobald Teilnehmer abgestimmt haben.';
$string['strategy_settings_default_help'] = 'Das Abstimmungsformular, das allen Teilnehmern angezeigt wird, enthält eine Reihe von Optionsfeldern für jede verfügbare Wahlmöglichkeit. Dieser Standardwert legt fest, welches Optionsfeld dabei vorausgewählt ist.';
$string['too_few_choices_to_rate'] = 'Sie haben zu wenige Wahlmöglichkeiten angelegt! Teilnehmer müssen mindestens {$a} Optionen wählen!';
$string['unallocated_user_count'] = '{$a->count} Teilnehmer sind derzeit noch nicht zugeordnet. Sie können <b>nicht zugeordnete</b> Teilnehmer auf die freien Plätze der Wahlmöglichkeiten ohne Berücksichtigung der Abstimmungen verteilen.';
$string['unassigned_users'] = 'Teilnehmer ohne Auswahl';
