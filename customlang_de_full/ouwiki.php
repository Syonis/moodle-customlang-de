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
 * @subpackage ouwiki
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowediting_help'] = '<p>Wenn diese Option aktiviert ist, wird das Wiki bis zum angegebenen Datum schreibgeschützt. Nutzer können in diesem Modus alle Seiten und den Verlauf sehen, sich an der Diskussion beteiligen, aber keine Änderungen vornehmen.</p>

<h2>Änderungen verhindern ab</h2>
<p>Wenn diese Option aktiviert ist, wird das Wiki ab dem angegebenen Datum schreibgeschützt.</p>';
$string['annotationsystem_help'] = 'Diese Option aktiviert die Anmerkungs-Registerkarte für Nutzer mit der entsprechenden Berechtigung ..

Mit dieser Registerkarte können Sie Inline-Anmerkungen zu den Wikiseiten hinzufügen (z.B. Trainer kommentieren die Arbeit der Teilnehmer).';
$string['completion_help'] = '<ul>
<li>
Wenn Sie "Erfordert neue Seiten" auswählen, dann wird das Wiki für Nutzer als abgeschlossen markiert, sobald sie die angegebene Anzahl von Seiten erstellt haben. Mit dieser Option müssen Nutzer Seiten von Grund auf neu erstellen. Wenn jemand anderes die Seite erstellt und Nutzer diese dann bearbeiten, zählt es nicht.
</li>

<li>
Wenn Sie "Erfordert Bearbeitungen" auswählen, dann wird das Wiki für Nutzer als abgeschlossen markiert, sobald sie eine bestimmte Anzahl von Bearbeitungen durchgeführt haben. Jemand könnte viele Seiten bearbeiten, oder die gleiche Seite mehrmals bearbeiten ... beides zählt.
</li>
</ul>

<p>Hinweis: Das Schreiben der ersten Version einer Seite zählt ebenfalls als Bearbeitung. Wenn Sie möchten, dass jemand eine Seite erstellt <i>und</i> mindestens eine Bearbeitung von etwas anderem vornimmt, setzen Sie Seiten auf 1 und Bearbeitungen auf 2.
</p>';
$string['editbegin_help'] = '<p>Wenn diese Option aktiviert ist, wird das Wiki bis zum angegebenen Datum schreibgeschützt. Nutzer können in diesem Modus alle Seiten und den Verlauf sehen, sich an der Diskussion beteiligen, aber keine Änderungen vornehmen.</p>';
$string['modulename_help'] = '<p>Ein Wiki ist ein webbasiertes System, das Nutzer erlaubt, eine Menge von verlinkten Seiten zu bearbeiten. In Moodle wird ein Wiki normalerweise benutzt, wenn Teilnehmer Inhalte erstellen sollen.</p>

<p>Das OU-Wiki verfügt über zahlreiche Optionen. Schauen Sie bitte in die Einzelhilfen zu jeder Einstellmöglichkeit, um weitere Infos zu bekommen.</p>';
$string['nochanges'] = 'Nutzer, die nicht mitgearbeitet haben';
$string['ouwiki:grade'] = 'Nutzer bewerten, die Zugang zum Wiki haben';
$string['ouwiki:viewcontributions'] = 'Liste von Beträgen anzeigen, sortiert nach Nutzern';
$string['ouwiki:viewparticipation'] = 'Mitarbeit aller Nutzer anzeigen, die Zugriff zum Wiki haben';
$string['pagedeletedinfo'] = 'Die Liste zeigt einige gelöschte Versionen, die nur für Nutzer mit dem Recht sichtbar sind, Versionen löschen zu dürfen. Normale Nutzer sehen die Versionen nicht.';
$string['subwikis_help'] = '<ul>
<li><strong>Ein Wiki für den Kurs</strong><br />
Dieses Wiki ist ein einziges Wiki und alle Teilnehmer sehen dieselben Seiten.</li>
<li><strong>Ein Wiki pro Gruppe</strong><br />
Mitglieder jeder Gruppe sehen eine separate Kopie des Wikis (Teilwiki), das speziell für ihre Gruppe erstellt wurde. Jede Person sieht nur Seiten, die von Personen in derselben Gruppe erstellt wurden.
Wenn Sie Mitglied in mehr als einer Gruppe sind oder wenn Sie das Recht haben, alle Gruppen anzuzeigen, wird Ihnen ein Dropdown-Menü zur Auswahl jeder Gruppe angezeigt.</li>
<li><strong>Separates Wiki für jede Person</strong><br />
Jede Person erhält ein eigenes Wiki. Sie sehen nur Ihr eigenes Wiki, es sei denn, Sie haben das Recht, andere Personen anzuzeigen. In diesem Fall wird Ihnen ein Dropdown-Menü zur Auswahl jeder Person angezeigt. (Dies ist eine Möglichkeit, Einzelarbeiten zu sammeln. Sie sollten jedoch auch eine gegenseitige Bewertungsaktivität in Betracht ziehen.)</li>
</ul>

<p>Hinweis: Die Gruppenoption funktioniert nur mit der gewählten Gruppierung. Gruppen in anderen Gruppierungen werden ignoriert.</p>';
$string['summary_help'] = '<p>Wenn Sie eine Beschreibung eintragen, wird diese Beschreibung auf der Startseite des Wikis angezeigt, u.z. oberhalb des normalen bearbeitbaren Wikitextes. </p>

<p>Eine Beschreibung ist optional. Sie kann von Teilnehmern nicht geändert werden. Wenn Sie keine Beschreibung brauchen, lassen Sie das Textfeld einfach leer.</p>';
$string['timeout_help'] = '<p>Wenn Sie einen Timeout auswählen, sind die Personen berechtigt, Seiten in diesem Wiki in der vorgegebenen Zeit zu bearbeiten.
Das Wiki sperrt eine Seite, während sie bearbeitet wird (so, dass nie zwei Personen gleichzeitg die gleiche Seite bearbeiten können). Mit der Timeout-Einstellung wird verhindert, dass das Wiki dauerhaft für andere gesperrt bleibt.</p>

<h3>Was Nutzer sehen</h3>
<p>Wenn ein Timeout aktiviert ist, sehen Nutzer einen Countdown, wenn sie eine Seite bearbeiten. Wenn der Countdown bei Null ist, speichert der Browser automatisch die Änderungen und beendet die Bearbeitung.</p>

<h3>Nutzer ohne aktiviertes Javascript</h3>
<p>Diese Option hat keine Auswirkung auf Nutzer, die Javascript nicht aktiviert haben oder einen alten Browser verwenden.
Ein fünfzehn-minütiges Timeout gilt auch für diese Nutzer. Wenn sie eine Seite bearbeiten, wird die Zeit angezeigt, in der sie die Änderungen speichern müssen. Wenn sie dies nicht tun, könnten sie ihre Arbeit verlieren.</p>

<h3>Warum benötigen Sie möglicherweise diese Option nicht</h3>
<p>Auch wenn diese Option ausgeschaltet ist, werden Sperren automatisch in den folgenden Situationen verworfen, nachdem
eine Person damit begonnen hat, eine Seite zu bearbeiten:</p>
<ul>
<li>Ohne die Änderungen zu speichern oder abzubrechen geht die Person auf eine andere Seite.</li>
<li>Der Person schließt ihren Browser.</li>
<li>Der Computer der Person stürzt ab.</li>
<li>Die Person verliert ihre Internet-Verbindung.</li>
</ul>

<p>In diesen Situationen wird die Sperre automatisch nach etwa zwei Minuten entfernt.</p>

<p>Darüber hinaus haben Trainer (standardmäßig) die Fähigkeit, jede Sperre jederzeit zu aufzuheben.</p>

<h3>Was diese Option nicht tut</h3>
<p>Diese Option wird niemanden davon abhalten, auf einer Seite zu bleiben und die Bearbeitung durch andere zu verhindern. Eine Person könnte eine Seite bearbeiten und warten, bis das Zeitlimit fast abgelaufen ist. Nach dem Speichern der Änderungen ruft die Person die Seite erneut zum Bearbeiten auf. </p>';
