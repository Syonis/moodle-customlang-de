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
 * @package    theme
 * @subpackage boost_campus
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['catchkeyboardcommandsheadingsetting_desc'] = 'Die folgenden Einstellungen sind dafür gedacht, den besonderen Bedürfnissen von fortgeschrittenen Nutzern entgegen zu kommen - vor allem für den Fall, dass Ihre Website einen ausgedehnten Fußbereich aufweist. Fortgeschrittene Nutzer verwenden gerne die Tastatur, um durch Webseiten zu navigieren. So können Sie diese auch nutzen, um schnell an das Ende eines Kurses zu gelangen um beispielsweise den aktuellsten Abschnitt zu erreichen und dort schnell neuen Inhalt hinzuzufügen oder die aktuellste Aufgabe zu bewerten. Wenn der Fußbereich sehr lang ist, müssen diese Personen in diesem Fall wieder nach oben scrollen, weil Sie über die Tastaturnavigation über das Ende des Kursinhalts hinaus zum Seitenende gesprungen sind und den Kursinhalt möglicherweise nicht mehr sehen. Wenn Sie diese Einstellung aktivieren, werden die jeweils ausgewählten Tastaturbefehle abgefangen und die Seite scrollt dann nur bis zum Ende des Kursinhalts.';
$string['footerlinksheadingsetting_desc'] = 'Moodle stellt einige standardmäßige Links im Fußbereich bereit: Link zur Dokumentation, Information zum Login und Link zur Startseite. <br/>Mit den folgenden drei Einstellungen können Sie für jeden dieser Links entscheiden, ob Sie diesen im Footer anzeigen oder verbergen möchten, wenn Ihre Nutzer diesen Link dort nicht brauchen.';
$string['perpetualinfobannerresetvisiblitysetting_desc'] = 'Wenn diese Option aktiviert ist, werden die von Nutzern eventuell ausgeblendeten Infobanner wieder angezeigt. Sie können diese Einstellung nutzen, wenn Sie wichtige Änderungen am Inhalt gemacht haben und diese Information allen Nutzern wieder präsentieren möchten. <br/><br/>
Beachten Sie bitte: <br/>
Wenn Sie diese Änderung speichern, werden die Datenbankoperationen zum Zurücksetzen der Sichtbarkeit gestartet und diese Einstellung wird automatisch wieder deaktiviert. Das nächste Mal, wenn Sie diese Einstellung wieder setzen und speichern werden erneut die Datenbankoperationen gestartet.';
$string['perpibconfirmsetting_desc'] = 'Wenn diese Option aktiviert ist, wird Nutzer ein Bestätigungsdialog angezeigt, wenn sie das Infobanner wegklicken.
<br/>Der angezeigte Text ist im String mit dem Namen "closingperpetualinfobanner" gespeichert:
<br/><br/>
Möchten Sie diese Information wirklich ausblenden möchten? Diese Information wird zukünftig nicht mehr sichtbar sein.
<br/><br/>
Sie können diesen Text über die Sprachanpassung ändern, wenn Sie hier etwas anderes ausgeben möchten.';
$string['perpibdismisssetting_desc'] = 'Mit dieser Einstellung können Sie das Infobanner dauerhaft ausblendbar machen. Wenn Nutzer auf das X klicken, erscheint ein Bestätigungsdialog und danach wird das Banner dauerhaft nicht mehr angezeigt.
<br/><br/>Beachten Sie bitte:<br/>Diese Einstellung hat keine Auswirkung auf Infobanner, die auf der Loginseite angezeigt werden. Infobanner auf der Loginseite können nicht dauerhaft verborgen werden, weswegen es diese Option dort gar nicht gibt.';
$string['showhintcoursehiddengeneral'] = 'Dieser Kurs ist zur Zeit <strong>verborgen</strong>. Solange der Kurs weiter verborgen ist, können ausschließlich eingeschriebene Trainer darauf zugreifen.';
$string['showhintcourseselfenrolinstancecallforaction'] = 'Wenn Sie nicht möchten, dass sich alle Nutzer in diesen Kurs ungehindert einschreiben können, dann beschränken Sie bitte den Zugang in den Einstellungen zur Selbsteinschreibung.';
$string['showsettingsincoursesetting_desc'] = 'Mit dieser Einstellung können Sie die Darstellung des Kurskontextmenüs ändern. Im Design Boost erscheint direkt bei dem Zahnrad-Icon ein Kontext-Menü wenn Sie auf dieses Icon klicken. Der Menüeintrag "Mehr..." führt den/die Nutzer/in zu einer neuen Seite, auf der dann alle Einstellungen für den Kurskontext zu finden sind. Wenn Sie diese Einstellung aktivieren, dann erscheint das komplette kursbezogene Menü innerhalb des Kurses direkt unter dem Kopfbereich. Die Menüs sind in Reitern angeordnet, was es dem Nutzenden einfacher macht gewünschte Einträge zu finden als eine lange Liste von Einträgen durchsuchen zu müssen. Mit dieser Einstellung wird auch das Icon für die Einstellungen auf der Seite Teilnehmer entfernt, weil die Einträge in diesem Menü identisch mit dem Kursmenü sind und daher nicht benötigt wird.<br/>
Bitte beachten Sie, dass diese Einstellung für Nutzer, die JavaScript in ihrem Browser deaktiviert haben, keine Auswirkung hat - sie werden nach wie vor das Moodle Standardverhalten mit dem Popup-Kontextmenü erhalten.';
