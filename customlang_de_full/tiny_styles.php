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
 * @package    tiny
 * @subpackage styles
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['instructions_3_2_cat_description'] = 'Beschreibung der Kategorie, ist aktuell nur für Administratoren sichtbar';
$string['instructions_3_5_cat_showdesc'] = 'legt fest, wie die Beschreibung den Nutzern angezeigt wird: <code>never</code> (ausgeblendet), <code>helptext</code> (Schaltfläche „?“) oder <code>tooltip</code> (beim Darüberfahren mit der Maus); Standard: never';
$string['instructions_3_6_cat_visibility_admin'] = 'Sichtbarkeit basierend auf Administionsrechten: <code>all</code> (alle Nutzer), <code>admins_only</code> (nur Administratoren) oder <code>non_admins</code> (nur Nicht-Administratoren). Standard: all.';
$string['instructions_3_7_cat_visibility_roles'] = 'Array mit numerischen Moodle-Rollen-IDs, die diese Kategorie einsehen können; ein leeres Array bedeutet, dass alle Rollen sie einsehen können. <br> Die Rollen-IDs sind Website-spezifisch; Sie finden Ihre unter <strong>Website-Administration &gt; Nutzer&gt; Rechte&gt; Rollen verwalten</strong>. Typische Standardwerte: <code>1</code> Administrator/in, <code>3</code> Trainer/in, <code>4</code> Trainer/in ohne Bearbeitungsrechte, <code>5</code> Teilnehmer/in (die IDs können in Ihrer Instanz abweichen)';
$string['instructions_4_6_elem_visibility_admin'] = 'Sichtbarkeit basierend auf Administrationsrechten: <code>all</code> (alle Nutzer), <code>admins_only</code> (nur Administratoren) oder <code>non_admins</code> (nur Nicht-Administrator/innenen). Standard: all.<br>Die Einstellung darf nicht weniger restriktiv sein als die der übergeordneten Kategorie.';
$string['instructions_4_7_elem_visibility_roles'] = 'Array mit numerischen Moodle-Rollen-IDs, die diese Kategorie einsehen können; ein leeres Array bedeutet, dass alle Rollen sie einsehen können. <br> Die Rollen-IDs sind Website-spezifisch; Sie finden Ihre unter <strong>Website-Administration &gt; Nutzer&gt; Rechte&gt; Rollen verwalten</strong>. Typische Standardwerte: <code>1</code> Administrator/in, <code>3</code> Trainer/in, <code>4</code> Trainer/in ohne Bearbeitungsrechte, <code>5</code> Teilnehmer/in (die IDs können in Ihrer Instanz abweichen)<br>Diese sind auf die in der übergeordneten Kategorie ausgewählten Rollen beschränkt.';
$string['showdesc_help'] = '<p>Legt fest, ob die Kategoriebeschreibung für Nutzer angezeigt wird:</p><ul><li><strong>Nie</strong>: Die Beschreibung wird nicht angezeigt.</li><li><strong>Hilfetext</strong>: Neben der Kategoriebezeichnung erscheint eine <strong>?</strong>-Schaltfläche. Ein Klick darauf zeigt die Beschreibung als Popup-Hilfetext an.</li><li><strong>Tooltip</strong>: Die Beschreibung erscheint als Tooltip, wenn man mit der Maus über die Kategoriebezeichnung fährt.</li></ul>';
$string['visibility_admin_admins_only'] = 'Nur Administratoren';
$string['visibility_admin_all'] = 'Alle Nutzer';
$string['visibility_admin_element_help'] = '<p>Die Sichtbarkeit dieses Elements wird davon abhängig gemacht, ob der/die Nutzer/in ein Website-Administrator/in ist oder nicht.</p><p>Eine Einschränkung nach Status ist nur möglich, wenn die oben genannte Einstellung für die Verfügbarkeit auf „Anzeigen“ gesetzt ist. </p><p>Die Einstellung kann nur bearbeitet werden, wenn die entsprechende Einstellung der übergeordneten Kategorie auf „Alle Nutzer“ gesetzt ist. Andernfalls ist sie auf dieselbe Einschränkung wie die Kategorie festgelegt ("Nur Seitenadministratoren"/ "Nur Nicht-Administratoren").</p>';
$string['visibility_admin_help'] = '<p>Sichtbarkeit für diese Kategorie basierend auf Administratoren-Status einschränken.</p><p>Eine Einschränkung nach Status ist nur möglich, wenn die oben genannte Einstellung für die Verfügbarkeit auf „Anzeigen“ gesetzt ist.</p><p>Wird eine der Optionen "Nur Administratoren" oder "Nur Nicht-Administratoren" gewählt, so unterliegen alle Elemente dieser Kategorie derselben Einschränkung.</p>';
$string['visibility_admin_non_admins'] = 'Nur Nicht-Administratoren';
$string['visibility_element_help'] = '<p>Allgemeine Verfügbarkeit für dieses Element im TinyMCE-Editor einschränken.</p><p>Wird die Option "Verbergen" gewählt, so wird diese Kategorie für alle Nutzer verborgen und alle weiteren Einstellungen zur Sichtbarkeit werden deaktiviert.</p>';
$string['visibility_help'] = '<p>Allgemeine Verfügbarkeit für diese Kategorie im TinyMCE-Editor einschränken.</p><p>Wird die Option "Verbergen" gewählt, so wird diese Kategorie für alle Nutzer verborgen und alle weiteren Einstellungen zur Sichtbarkeit werden deaktiviert.</p>';
$string['visibility_roles_element_help'] = '<p>Sichtbarkeit für dieses Element basierend auf Rollen einschränken.</p><p>Eine Einschränkung anhand von Rollen ist nur möglich, wenn die oben genannten Einstellungen auf „Anzeigen“ und „Alle Nutzer“ bzw. „Nur Nicht-Administratoren“ gesetzt sind.</p><p>Die verfügbaren Rollen entsprechen der aktuellen Auswahl in der übergeordneten Kategorie dieses Elements.</p><p>Dieses Element ist automatisch für alle Rollen sichtbar, wenn keine ausgewählt ist.</p>';
$string['visibility_roles_help'] = '<p>Sichtbarkeit für diese Kategorie basierend auf Rollen einschränken.</p><p>Eine Einschränkung anhand von Rollen ist nur möglich, wenn die oben genannten Einstellungen auf „Anzeigen“ und „Alle Nutzer“ bzw. „Nur Nicht-Administratoren“ gesetzt sind.</p><p>Elemente dieser Kategorie werden in ihrer äquivalenten Einstellung auf die aktuelle Auswahl beschränkt.</p><p>Diese Kategorie ist automatisch für alle Rollen sichtbar, wenn keine ausgewählt ist.</p>';
