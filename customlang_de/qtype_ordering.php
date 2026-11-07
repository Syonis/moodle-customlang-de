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
 * @package    qtype
 * @subpackage ordering
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['gradingtype_help'] = '**Alles oder nichts** &nbsp; Nur wenn alle Elemente auf der richtigen Position sind, wird die Maximalpunktzahl vergeben. In allen anderen Fällen gibt es null Punkte. **Absolute Position** &nbsp; Ein Element wird als richtig betrachtet, wenn es dieselbe Postion wie in der Musterlösung hat. Die höchst mögliche Punktzahl für diese Frage ist **dieselbe** wie die Anzahl der Elemente, die dem Teilnehmer präsentiert wird. **Relativ zur richtigen Position** &nbsp; Ein Element wird als richtig betrachtet, wenn es an derselben Position wie in der Musterlösung steht. Richtige Elemente erhalten eine Punktzahl, die der Anzahl der Elemente minus 1 entspricht. Falsche Elemente erhalten eine Punktzahl die der Anzahl der Elemente minus 1 und minus einem Entfernungswert zur Position in der Musterlösung entspricht. Also, wenn ***n*** Elemente dem Nutzer angezeigt werden, entspricht die mögliche Punktzahl für jedes Element ***(n-1)***. Die Höchstpunktzahl für die Frage berechnet sich aus ***n x (n-1)***, was identisch mit ***(n² - n)*** ist. **Relativ zum nächsten Element (letztes Element ausgeschlossen)** &nbsp; Ein Element wird als richtig betrachtet, wenn darauf das gleiche Element wie in der Musterlösung folgt. Das Element auf der letzten Position wird dabei nicht überprüft. Daraus folgt, dass die höchst mögliche Punktzahl für diese Frage **eins weniger** als die Anzahl der Elemente ist, die dem Teilnehmer präsentiert wird. **Relativ zum nächsten Element (letztes Element eingeschlossen)** &nbsp; Ein Element wird als richtig betrachtet, wenn darauf das gleiche Element wie in der Musterlösung folgt. Dies bezieht das Element auf der letzten Position mit ein, welches kein nachfolgendes Element besitzt. Daraus folgt, dass die höchst mögliche Punktzahl für diese Frage **diesselbe** wie die Anzahl der Elemente ist, die dem Teilnehmer präsentiert wird. **Relativ zu sowohl den vorausgehenden als auch den nachfolgenden Elementen** &nbsp; Ein Element wird als richtig betrachtet, wenn das vorausgehende und das nachfolgende Element sich auf den gleichen Positionen befinden wie in der Musterlösung. Das erste Element sollte keine vorausgehenden Elemente haben und das letzte Element sollte keinen Nachfolger haben. Daraus folgt, dass es zwei mögliche Punkte für jedes Element gibt und die höchst mögliche Punktzahl ist *doppelt* so viel, wie die Anzahl der Elemente, die dem Teilnehmer präsentiert wird. **Relativ zu ALLEN vorausgehenden und nachfolgenden Elementen** &nbsp; Ein Element wird als richtig betrachtet, wenn das vorausgehende und das nachfolgende Element sich auf den gleichen Positionen befinden wie in der Musterlösung. Die Reihenfolge der vorausgehenden und der nachfolgenden Elemente ist nicht von Belang. Daraus folgt, wenn ***n*** Elemente dem Teilnehmer präsentiert werden, ist die Anzahl der Bewertungen für jedes Element ***(n-1)***. Die höchst mögliche Punktzahl für die Frage ist ***n x (n -1)***, was dasselbe ist wie ***(n^2 - n)*** **Längste geordnete Teilmenge ** &nbsp; Die Bewertung ergibt sich aus der längsten geordneten Teilmenge. Die höchst mögliche Punktzahl entspricht der Anzahl der dargestellten Elemente. Eine Teilmenge muss aus mindestens zwei Elementen bestehen. Teilmengen müssen nicht beim ersten Element anfangen (was sie aber können) und sie müssen auch nicht zusammenhängend sein (aber sie können es sein). Wenn es mehrere Teilmengen derselben Länge gibt, werden die Elemente, der zuerst gefundenen Teilmenge bei der Suche von links nach rechts, als richtig angezeigt. Andere Elemente werden als falsch markiert. **Längste zusammenhängende Teilmenge** &nbsp; Die Bewertung ergibt sich aus der Anzahl der Elemente der längsten zusammenhängenden Teilmenge. Die höchst mögliche Punktzahl entspricht der Anzahl der dargestellten Elemente. Eine Teilmenge muss aus mindestens zwei Elementen bestehen. Teilmengen müssen nicht beim ersten Element anfangen (was sie aber können) aber sie MÜSSEN zusammenhängend sein. Wenn es mehrere Teilmengen derselben Länge gibt, werden die Elemente, der zuerst gefundenen Teilmenge bei der Suche von links nach rechts, als richtig angezeigt. Andere Elemente werden als falsch markiert.';
$string['showgrading_help'] = 'Sie können wählen, ob der Teilnehmer bei der Anzeige der Antwort Details zur Berechnung der Punktzahl sehen kann oder nicht.';
