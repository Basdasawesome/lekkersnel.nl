# LekkerSnel.nl

## Project Informatie
LekkerSnel.nl is een moderne recepten website waar gebruikers snel en gemakkelijk lekkere recepten kunnen vinden. Het project is ontwikkeld als onderdeel van de Bit Academy opleiding.

## Documentatie
- [Google Docs Documentatie](https://docs.google.com/document/d/18FsHLMcdRgHRaZGXTLbnvVS3NP2gfz7_QVVfIbwAv-4/edit?usp=sharing)
- [Miro Board voor Diagrammen en User Stories](https://miro.com/welcomeonboard/TFRPZ3hEbW9pbk5pcnpFL1RhZHg0M0FFSU14OWVwMGJ4U3d6RGd1dHVKYjA2STZ4ZTJtWHc1MFo1a2tycyt2ZnhMVmE1S2JMbUdncHJWOHZsdmNidnR3clU4QVkvSFB4L05GczA4VU1EaXhBcXdXaW1DZUEvV1V0cU5Sb1R2Zm5hWWluRVAxeXRuUUgwWDl3Mk1qRGVRPT0hdjE=?share_link_id=884724301779)
- [Figma Design](https://www.figma.com/design/ESVVwmAeTyoGfOmiboPnbY/LekkerSnel.nl?node-id=0-1&t=e4bODsyk87kDeAy7-1)

## Technologieën
- Frontend: Html
- Backend: PHP
- Functionaliteit: Javascript
- Styling: Tailwind CSS
- Data: Mysql

## Features
- Recepten aanmaken en weergeven
- Gedetailleerde recepten weergave
- Responsive design
- Moderne UI/UX

## Project Setup
### Stap 1: Repository Clonen
1. Open je terminal
2. Navigeer naar de gewenste map
3. Voer het volgende commando uit:
   ```bash
   git clone git@github.com:Basdasawesome/lekkersnel.nl.git
   ```

### Stap 2: Dependencies Installeren
1. Navigeer naar de projectmap:
   ```bash
   cd lekkersnel.nl
   ```
2. Installeer de benodigde packages:
   ```bash
   npm install
   ```

### Stap 3: Tailwind CSS Opzetten
1. Start de Tailwind compiler in watch mode:
   ```bash
   npm run watch
   ```
2. Laat deze terminal open staan tijdens het ontwikkelen

### Stap 4: Database Setup
1. Kopieër de date uit het src/helpers/import.sql bestand
2. Open phpMyAdmin in je browser (meestal op http://localhost/phpmyadmin)
3. Importeer het database bestand:
   - Klik op de 'SQL' tab
   - Plak de gekopieërde code hier in.
   - Klik op 'Go' om de import te starten

### Stap 5: Configuratie
1. Open het src/helpers/database.php bestand in de src map
2. Controleer of de database credentials correct zijn:
   ```php
    $host = '127.0.0.1';
    $db   = 'lekkersnelDB';
    $user = 'bit_academy';
    $pass = 'bit_academy';
    $charset = 'utf8mb4';
   ```

### Stap 6: Start de Applicatie
1. Start je lokale PHP server (bijvoorbeeld XAMPP of MAMP)
2. Open de applicatie in je browser via http://localhost/lekkersnel.nl

## Team
- Davey
- Jada
- Cristian
- Ezra
