# KI-Unterstützung und Prüfstatus

Dieses Projekt unterscheidet ausdrücklich zwischen manuell gepflegten Sprachanpassungen und KI-gestützt bearbeiteten Übersetzungen.

## `customlang_de_min`

- 275 PHP-Sprachdateien.
- Ursprüngliche, manuell gepflegte und geprüfte Fassung.
- Enthält Anpassungen für Moodle-Core und ausgewählte zusätzliche Plugins.

## `customlang_de_full`

- Enthält alle 275 Dateien aus MIN **unverändert**.
- Zusätzlich 411 PHP-Dateien mit insgesamt 2.903 KI-gestützt bearbeiteten Strings aus dem offiziellen deutschen Sprachpaket.
- Überarbeitungsziel: Gender-Schreibweisen durch Formulierungen im generischen Maskulinum ersetzen und grammatikalisch korrekte Satzanschlüsse erhalten.
- Die automatisch erzeugte Fassung wurde grammatikalisch nachbearbeitet. 110 auffällige Prüffälle wurden anschließend kontrolliert und bei Bedarf korrigiert.
- **Nicht sämtliche 2.903 Strings sind vollständig menschlich lektoriert.**

Das Paket enthält nur lokale Überschreibungen der betroffenen Strings, keine vollständigen Kopien aller Standardübersetzungen.

## `customlang_de_extra`

- Eigenständige deutsche Übersetzungen von neun Plugin-Komponenten auf Grundlage der englischen Original-Sprachdateien der installierten Versionen.
- KI-gestützt erstellt und anschließend sprachlich überarbeitet; ausgewählte problematische Texte wurden manuell korrigiert.
- Eigennamen, Produktbezeichnungen, URLs und reine Formatstrings bleiben, sofern angemessen, im Original.
- Diese Übersetzungen wurden nicht sämtlich im laufenden Moodle-Plugin funktional getestet.
- Die ursprünglichen Copyright- und GPL-Lizenzhinweise bleiben erhalten; die deutsche Übersetzungsarbeit und die KI-Unterstützung sind in den Dateiköpfen getrennt ausgewiesen.

## Technische und sprachliche Grenzen

Bei der Erstellung wurden unter anderem PHP-Syntax, String-Schlüssel und die Erhaltung von Moodle-Platzhaltern, HTML-Strukturen und URLs geprüft. Trotz dieser Prüfungen können Bedeutungs-, Grammatik- oder Darstellungsfehler sowie Unterschiede zwischen Plugin-Versionen verbleiben.

Das Projekt ist **kein offizielles Moodle-Sprachpaket** und die KI-Ergänzungen sind nicht vollständig manuell lektoriert. Bitte vorhandene lokale Anpassungen vor dem Import sichern und neue Übersetzungen in der Zielinstallation testen.

Korrekturen sind über GitHub Issues und Pull Requests willkommen.
