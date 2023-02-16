<a name="readme-top"></a>

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://cvovolt.be">
    <img src="https://www.cvovolt.be/img/logos/cvovolt.png" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">Fotoboek - Cvo Volt</h3>

  <p align="center">
    Fotoboek ontwikkeld voor Cvo Volt om ervoor te zorgen dat personeels leden beter van elkaar kunnen te weten komen wie welk vak geeft.
  </p>
</div>

<!-- ABOUT THE PROJECT -->

## Over

[![Fotoboek Screen Shot][fotoboek-screenshot]](https//cvovolt.be)

<p align="right">(<a href="#readme-top">Terug naar top</a>)</p>

### Gebouwd met

[![Laravel][laravel.com]][laravel-url]
[![TailwindCSS][tailwindcss.com]][tailwindcss-url]
[![JQuery][jquery.com]][jquery-url]

<p align="right">(<a href="#readme-top">Terug naar top</a>)</p>

<!-- INSTALL THE PROJECT -->

## Installatie

### Voorwaarde

-   Docker
-   PHP **8.0 of hoger** in de docker
-   Node.JS en NPM

### Installatie

#### Docker

Zorg ervoor dat docker geïnstalleerd is op de server waar dat je de website op wilt hosten.

#### Upload

Upload al de bestanden van Github naar de server. De manier dat dit gebeurd kan op meerdere manieren via een git clone of het downloaden en dan handmatig op de server plaatsen.

#### ENV

Verander de .env.example naar .env en vul al de nodige velden in.

<p align="right">(<a href="#readme-top">Terug naar top</a>)</p>

<!-- USAGE EXAMPLES -->

## Gebruikswijze

Bijna al de data wordt dynamisch opgehaald elke week op zondag om 23:59. De enige instellingen die in de code aangepast moeten worden zijn de kleuren en de regios

### Kleuren

De kleuren aanpassen gaat snel en gemakkelijk, navigeer naar het bestand `/app/Http/Controllers/JsonController.php` en zoek de functie `colors`.

Binnen in de functie ga je een array vinden `$colors`, de array is opgebouwd met functies van het formaat:

```php
array(
  "fields" => "",
  "values" => "",
  "colors" => array(
    "background" => "",
    "text" => ""
  )
)
```

Fields bevat de velden waar aan de gebruiker aan moet voldoen bijvoorbeeld `PS_VOORNAAM` of `PS_NAAM`, maar het is ook mogelijk dat de gebruiker aan meerdere velden moet voldoen. dan zal je in fields iets kunnen zetten zoals `PS_VOORNAAM|PS_NAAM`. De velden geschijden door een `|` _(dit is geen letter maar een streepje dat ook gebruikt word in een if statement voor ||)_.

Values gaat de tekst bevatten waaraan de fields data gelijk moet zijn. Dus als de fields `PS_VOORNAAM|PS_NAAM` zijn dan zal de values bijvoorbeeld `matse|van horebeek zijn`.

De mogelijke kleuren voor achtergrond en tekst zijn:

```
Zwart -> black
Wit -> white
Indigo -> indigo
Petrol -> petrol
Teal -> teal
Mango -> mango
Lucht -> lucht
Pistache -> pistache
Snoep -> snoep
Zomer -> zomer
Azuur -> azuur
Lime -> lime
Kers -> kers
Aubergine -> aubergine
Framboos -> framboos
FaQ -> faq
Munt -> munt
Munt Donker -> muntdonker
```

<p align="right">(<a href="#readme-top">Terug naar top</a>)</p>

### Regio's

De kleuren aanpassen gaat snel en gemakkelijk, navigeer naar het bestand `/app/Http/Controllers/JsonController.php` en zoek de functie `regions`.

Binnen in de functie ga je een array vinden `$coded`, de array is opgebouwd met functies van het formaat:

```php
  array(
    "id" => "",
    "text" => ""
  )
```

`id` gaat het id van de regio bevatten dus is belangrijk voor de jQuery plugin select2 waarvan gebruik gemaakt wordt. In het geval van regio's is het id de regio **in kleine letters**

`text` gaat de naam van de regio zijn die getoond wordt op de website in de dropdown, als het geselecteerd is en in de cards als de regio van toepassing is bij de functie

<p align="right">(<a href="#readme-top">Terug naar top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[fotoboek-screenshot]: /Github/screeenshot.png
[laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[laravel-url]: https://laravel.com
[tailwindcss.com]: https://img.shields.io/badge/TailwindCSS-38BDF8?style=for-the-badge&logo=tailwindcss&logoColor=white
[tailwindcss-url]: https://tailwindcss.com
[jquery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[jquery-url]: https://jquery.com
