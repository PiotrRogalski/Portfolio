-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Lut 2019, 21:03
-- Wersja serwera: 10.1.34-MariaDB
-- Wersja PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sql_portfolio_piotr_rogalski`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_19_170955_create_technology_categories_table', 1),
(4, '2018_12_20_180440_create_projects_table', 1),
(5, '2018_12_20_192530_create_technologies_table', 1),
(6, '2018_12_23_103914_create_project_technology_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_url` mediumtext COLLATE utf8mb4_unicode_ci,
  `images_description` text COLLATE utf8mb4_unicode_ci,
  `github_url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `images_url`, `images_description`, `github_url`, `created_at`, `updated_at`) VALUES
(1, 'Gra w wisielca', '<b><p>\r\nTypowa gra szkolna przeniesiona z zeszytów wprost na okna przeglądarek. Chyba zasad tej gry nie trzeba nikomu tłumaczyć.\r\n</p></b>\r\n<p>\r\nWarto natomiast wspomnieć o samej mechanice gry. Tekst hasła jest zapisany czcionką o stałej szerokości dzięki czemu przy odsłanianiu liter, długość hasła nie ulega zmianie. Kliknięta litera, której nie ma w haśle zmienia swój kolor na czerwony a ta która w haśle jest przybiera kolor zielony. Kolorystyka nie jest tu przypadkowa. Również ponowna próba kliknięcia już raz wciśniętej litery nie przyniesie rezultatów. Sama szubienica to zestaw kilku zdjęć o stałej wielkości zmieniających się przy błędnej literze.\r\n</p>\r\n<p>\r\nCała logika działania gry leży po stronie systemu użytkownika, ponieważ został napisana w JavaScript-cie i można ją podejrzeć bez większego problemu. Trochę zmiennych parę pętli for, uchwytów i innerHTML.\r\n</p>', 'pr11a.png,pr11b.png,pr11c.png,pr11d.png,pr11e.png,pr11f.png', 'Przykładowa rozgrywka::Przegrana::Nowa rozgrywka::[id]::Wygrana bez błędu::Wygrana ostatniej szansy\r\n', 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project1', '2018-10-16 13:32:08', '2019-01-02 12:18:08'),
(2, 'Strona w stylu Windows 8', '<b><p>\r\n	Bardzo ładna przy tym prosta stronka wykorzysująca czysty JavaScript do wyświetlania pracy zegarka.\r\n</p></b>\r\n<p>\r\n	Strona działa głównie w oparciu o tzw. innerHTML i podmianę tego wewnętrznego kodu html za pomocą JS.\r\n	W zależności jaki przycisk naciśniemy, w prawym szarym polu pojawi się inna treść związana z tematem <i>(tak naprawdę będzie to <b>\"lorem ipsum\"</b> ale mogłoby być co innego)</i>\r\n</p>\r\n<p>\r\n	PS: Nie mam Twittera a musiałem coś wymyślić ;)\r\n</p>', 'pr1a.png', 'Strona jest jedynie inspirowana wyglądem systemu Windows 8', 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project2', '2018-10-03 09:07:24', '2019-01-11 12:21:27'),
(3, 'Prosta strona o tematyce Linuxa', '<b><p>\r\n	Nareszcie strona, która zaczyna już jakoś wyglądać. Poziom skomplikowania nadal na niskim poziomie ale wizualnie jest to krok milowy. Menu boczne ani navbar jeszcze nie działają ale przynajmniej strona jest lekka i się szybko wczytuje.\r\n</p></b>\r\n<p>\r\n	Strona powstała z pomocą jednego z kursów wideo Pana Zeleta, bardzo dobry nauczyciel godny polecenia osobom zaczynającym swą przygodę z programowaniem webowym.\r\n</p>\r\n\r\n<p>\r\n	A teraz trochę o budowie strony. Wykropkowane linie przerywające to nic innego jak border czyli ramka danego elementu a linuxowy pingwin to tylko obrazek chociaż lepsze byłoby tu użycie grafiki wektorowej. Przyciski wchodzą w interakcję z myszką dzięki selektorowi :hover i to już wszystko jeśli chodzi o budowe.\r\n</p>', 'pr3a.png', NULL, 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project3', '2018-10-02 17:35:49', '2019-01-04 14:25:49'),
(4, 'Użycie div-ów - Strona o filmach', '<b><p>\r\n	Dzięki temu projektowi przekonałem się, że nie warto tworzyć stron opartych na tabelach, no i nauczyłem się do tego celu wykorzystywać div-y.\r\n</p></b>\r\n<p>\r\n	Oczywiście jak na porządną stronę przystało - strona porusza wybrany temat tutaj pięknie opisany serial Dr. House\r\n</p>', 'pr4a.png', 'Nic dodać nic ująć - tak wyglądają początki nic tu nie ma ciekawego', 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project4', '2018-10-02 10:51:49', '2019-01-04 14:25:49'),
(5, 'Ładna strona powitalna z navbarem', '<b><p>\r\nBootstrap 4 + ładne tło i fontello, czyli czcionki nie tylko do tekstu. Parę składników dodać do tego przezroczysty navbar i mamy jeszcze lepszą stronę powitalną.\r\n</p></b>', 'pr5a.png', NULL, 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project5', '2018-11-07 08:29:49', '2019-01-04 14:25:49'),
(6, 'Moja pierwsza strona www', '<p><b>Początki na miarę ucznia podstawówki ale jak powszechnie wiadomo, nie od razu Rzym zbudowano. Nie jest to moja pierwsza przygoda z programowaniem ale musiałem odświeżyć nieco wiedzę.</p></b><p>Poprzednio tworzyłem również mini gry w języku<a href=\"https://www.google.com/search?ei=AkgyXMucMpLUsAeDk5egAw&q=game+maker+language&oq=game+ma&gs_l=psy-ab.1.0.0i67j0j0i67j0l7.2939.5368..6996...1.0..0.129.1094.3j8....2..0....1..gws-wiz.....0..0i71j0i10j0i131.jst3F52vdEo\" target=\"_blank\"> GML</a>, bawiłem się dużo <a href=\"https://www.google.com/search?ei=OEgyXMrIIM6zsAfO7bz4Dg&q=visual+basic+language&oq=visual+basc+leangu&gs_l=psy-ab.3.0.0i13j0i13i30l9.2204.10367..11700...5.0..0.181.2414.4j17......0....1..gws-wiz.......0j0i71j0i67j0i131j0i10j0i22i30j0i22i10i30j0i19.lCMz2kehXDg\" target=\"_blank\">VBL</a> wykorzystując go w Excelu w makrach, które bardzo ułatwiały pracę. Moje makra pozwalały np.</p><ul><li>Do tabeli z np. nazwami kwiatów, wyszukiwały w internecie za pomocą wyszukiwarki BING, obrazy ich dotyczące i tworzyły arkusz z nazwami i odpowiednimi obrazami</li><li>Używałem ich do chronologicznego wstawiania danych - miejsce wiersza w tabeli zależało od kolumny \"data\", jeśli nie było miejsca po prostu dodawał wiersz w odpowiednim miejscu</li><li>Tworzyłem faktury w Excelu z pomocą makr a następnie drukowałem - w pełni automatyczny proces potrzebował tylko podstawowych danych resztę liczył sam.</li></ul><p>Dlaczego o tym wspominam? Ponieważ o tym zdjęciu nie można dużo powiedzieć - jest ono początkiem nauki w nowym kierunku ale nie początkiem przygody z programowaniem.</p>', 'pr6a.png', 'Dwa zdjęcia, dwa linki, troche styli i htmla', 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project6', '2018-09-18 07:40:49', '2019-01-04 14:25:49'),
(7, 'Ładna, responywna, strona powitalna', '<b><p>\r\nBootstrap 4 + ładne tło i otrzymamy przystępną stronę powitalną. Dodatkowo logo poprawia odczucia wizualne.\r\n</p></b>', 'pr7a.png,pr7b.png', 'Strona przeglądana na małych ekranach::Strona oglądana na ekranie komputera\r\n', 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project7', '2018-11-04 14:17:49', '2019-01-04 14:25:49'),
(8, 'Retrogranie - rozwijane menu', '<b><p>\r\n	Strona w stylu retro gier co prawda nie widać poszczególnych pikseli i ma szerszą gammę kolorów ale i tak można się wczuć w ten retro klimat.\r\n</p></b>\r\n<p>\r\n	Po raz pierwszy wykorzystałem w projekcie biblioteke JQuerry, rozwijane menu, i podążający (sticky) navbar.\r\n	Wszystkie linki są nie aktywne ale strona i tak dobrze się prezentuje.\r\n	Projekt był również tworzony z pomocą kursów Pana Zelenta.\r\n</p>', 'pr8a.png,pr8b.png', NULL, 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project8', '2018-10-05 14:05:49', '2019-01-04 14:25:49'),
(9, 'Bootstrap 4: grid + navbar', '<b><p>\r\n	Czyli co ma wspólnego liczba 12 z bootstrapem i jak docenić wyższość stosowania atrybutu <b>\"class\"</b> nad <b>\"style\"</b>\r\n</p></b>\r\n<p>\r\n	W tym projekcie responsywność strony została zapewniona dzięki użyciu bootstrapa w wersji 4 dodatkowo strona otrzymała stylowy pasek wraz z oknem wyszukiwarki niestety jeszcze w tym projekcie wyszukiwarka nie działa.\r\n</p>\r\n<p>\r\n	Strona traktuje o naszych Polskich skoczkach - tak aby było ciekawiej. ', 'pr2a.png, pr2b.png', NULL, 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project9', '2018-10-10 17:50:49', '2019-01-04 14:25:49'),
(10, 'Ostylowane okienko logowania', '<b><p>\r\n	Formularz jak najbardziej ostylowany niestety niefunkcjonalny\r\n</p></b>\r\n<p>\r\n	Stylowanie formularza wykorzystałem w poźniejszym projekcie, tam już cała logika backendowa jest zapewniona tutaj jednak dużo się nie dzieje\r\n</p>', 'pr14a.png', 'To \"tylko\" ostylowany niefunkcjonalny formularz logowania', 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project10', '2018-10-05 18:49:49', '2019-01-04 14:25:49'),
(11, 'Efekty hover - piękne miesca na ziemi', '<b><p>\r\n	Sześć różnych zdjęć z sześcioma różnymi stylami selektora hover, ciężko opisywać najlepiej zobaczyć na własne oczy.\r\n</p></b>\r\n<p>\r\n	Wszystkie style zostały utworzone przy wykorzystaniu możliwości CSS i atrybutów transition oraz transform - właściwie to na nich bazują.\r\n</p>', 'pr12a.png,pr12b.png,pr12c.png', '[id]::Dodatkowe informacje nad zdjęciem canionu::Animacja informująca o albumie z Taj Mahal\r\n', 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project11', '2018-10-08 11:33:49', '2019-01-04 14:25:49'),
(12, 'Ćwiczenie pamięci - odsłanianie kart', '<b><p>\r\nProjekt a konkretnie prosta gra przeglądarkowa pokazuje, że małym nakładem siły można stworzyć coś interesującego co może nas wciągnąć na conajmniej 8 minut.\r\n</p></b>\r\n\r\n<h2>Zasady gry:</h2>\r\n<p>\r\n	Gra polega na odkrywaniu kart - trzeba znaleźć dwie identyczne ale jest utrudnienie ponieważ karty ukrywają się po każdej błędnej decyzji a znikają dopiero kiedy znajdziemy dwie identyczne. Cały wic polega na tym aby pozbyć się wszystkich kart w możliwie jak najmniejszej ilości ruchów.\r\n</p>\r\n<p>\r\n	Dla podpowiedzi mogę dodać, że karty są ułożone w pewnym porządku.\r\n</p>', 'pr10a.png,pr10b.png,pr10c.png,pr10d.png', 'Dwie karty odsłonięte - za chwilę się ukryją ponownie::[id]::Karty po dopasowaniu znikają::Ekran wygranej rozgrywki', 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project12', '2018-10-10 08:07:00', '2019-01-11 12:21:27'),
(13, 'Pierwsze podejście do portfolio', '<b><p>\r\n    Praca nad tym projektem była początkiem mojej pracy z Laravelem tak naprawdę trawła ona równy miesiąc aż do porzucenia projektu i zmiany koncepcji.\r\n  </p></b>\r\n<p>\r\n  W trakcie prac mocno opierałem się o kurs z Laracastów o nazwie<a href =\"https://laracasts.com/series/laravel-from-scratch-2018\" target=\"_blank\"> Laravel 5.7 From Scratch</a>, którego samo obejrzenie zajeło by ponad 6 godzin. Ja każdy kod pisałem z osobna a to czego nie wiedziałem, sprawdzałem. I jeśli dodać do tego masę innych materiałów, które musiałem przeczytać i zrozumieć otrzymamy ten miesiąc, który spędziłem nad tym projektem.\r\n</p>\r\n<p>\r\n  Niestety czasami bywa tak, że pierwsze projekt trzeba wyrzucić i zmienić całkowicie podejście do tematu. Za to nowsza wersja mojego portfolio powstała w czasie znacznie krótszym bo w 5 dni roboczych. Nieźle zważywszy, że wygląda lepiej niż ten projekt, ale koniec tego pisania - czas na fakty.\r\n</p>\r\n<p>\r\n  Portfolio witało nas skromną stroną tytułową - całość jest utrzymana w ciemnych kolorach aby nie męczyło oczu nocne przeglądanie. Wszystkie funkcie przycisków w górnej belce menu są sprawne, wliczając w to logowanie i zakładanie konta. Nie ma w tym jednak większej filozofii ponieważ w tym przypadku korzystam z gotowych rozwiązań Laravela.\r\n</p>\r\n<p>\r\n  <a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"1\">Omawiane zdjęcie</spam></a>\r\n  Po zalogowaniu, w navbarze pojawiają się nam dwa dodatkowe przyciski \"My posts\" i \"Create new\", to co obecnie widzimy na wspomnianym zdjęciu to wynik naciśnięcia przysisku \"Projects\". Kiedy natomiast skorzystamy z przycisku \"My posts\"\r\n  również pokażą nam się projekty/posty tyle, że jedynie te które my stworzyliśmy - nie mamy też możliwości edycji ani usuwania cudzych postów.\r\n  </p><p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"6\">Omawiane zdjęcie</spam></a>\r\n  Nie pomogło by nawet bezpośrednie wpisanie linku do edycji obcego postu - po prostu zostaniemy przekierowani do wszystkich projektów a na ekran zostanie zwrócone ostrzeżenie o nie autoryzowanej próbie wejścia na stronę.\r\n</p>\r\n<p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"3\">Omawiane zdjęcie</spam></a>\r\n  Korzystając z opcji menu: \"Create new\" przeglądarka przeniesie nas do strony \"Create Post\" - wskaźnik automatycznie ustawi się na miejscu przeznaczonym na wpisanie tytułu. Następnie możemy dodać jedno zdjęcie - w tym projekcie nie dodałem wstawiania większej ilości zdjęć niż jedno na post. A kiedy już to mamy dodajemy jeszcze tylko opis i zatwierdzamy oczywiście dane muszą przejść walidacje. </p><p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"4\">Omawiane zdjęcie</spam></a>\r\n  Po stronie klienta sprawdzane jest czy wymagane pola zostały uzupełnione, czy tekst ma wystarczającą długość. Jeżli walidacja nie przejdzie już po stronie klienta to otrzymamy komunikat o błędzie. W następnej kolejności już po stronie serwera dane są sanityzywane aby pozbyć się wstrzykiwania kodu, jeszcze raz sprawdzane i dopiero wprowadzane do bazy danych.\r\n</p>\r\n<p>\r\n  <a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"5\">Omawiane zdjęcie</spam></a>\r\n  Podgląd pojedynczego postu został przedstawiony na tym zdjęciu ale z powodu porzucenia projektu wygląd tej strony nie zachwyca.\r\n</p>\r\n<p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"2\">Omawiane zdjęcie</spam></a>\r\n  To jeszcze tylko na koniec rzut okiem na wszystkie posty użytkownika i to już koniec projektu.\r\n</p>', 'pr13a.png,pr13b.png,pr13c.png,pr13d.png,pr13e.png,pr13f.png,pr13g.png', NULL, NULL, '2018-12-20 10:08:00', '2019-01-06 14:25:00'),
(14, 'Pozostałe', '<b><p>Pozostałe to tak nic innego jak strony przejściowe powstałe w czasie nauki i zwykłej ludzkiej ciekawości: \"A co by było gdyby\".</p></b>\r\n<p>Stron było więcej jednak często nadpisywałem już działające funkcje aby zaoszczędzić na czasie. Jest to zbiór większości moich niewielkich twórczości bez ładu i składu, pomyślałem jednak, że warto aby miały tutaj swoje miejsce.</p>\r\n', 'pr15a.png,pr15b.png,pr15c.png,pr15d.png,pr15e.png,pr15g.png,pr15h.png,pr15j.png,pr15k.png', 'Możliwości Jquerry i JquerryUI<br> Działający suwak, obiekty do chwytania i przenoszenia itp::Wyświetlanie pytań z BD według przygotowanego zapytania.::Animacja - obiekt najechany się prostuje::Niewielka walidacja hasła i skrypt w JS::Działający formularz, na kolejnej stronie oblicza cenę wszystkich pączków<br>Pod spodem pobieranie danych za pomocą MySQL::Kalendarz z ograniczonymi oknami wyboru na dwa miesiące::Prosta animacja rozwartego okna::Okno w momencie wysuwania<br>Zaprogramowano przyspieszenie sinusoidalnie narastające::Masa funkcji HTMLa i troche JS. Wykorzystanie iFrame i grafiki SVG.<br> Łączenie pól tabeli, listy i wiele innych', NULL, '2018-09-01 09:11:11', NULL),
(15, 'Osadnicy - formularz rejestracji i logowania', '<b><p>Projekt umożliwia zarejestrowanie nowego użytkownika, wraz z sanityzacją i walidacją wprowadzonych danych i daje możliwość zalogowania na nowo utworzone konto.</p></b><p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"1\">Omawiane zdjęcie</spam></a>Po zalogowaniu dane są prezentowane jak to widać na zdjęciu 2. Potem widzimy informację o naszych surowcach (drewno, kamień, zboże), o meilu przypisanym do naszego konta, dacie wygaśnięcia premium, czasie serwera, oraz czasie od którego premium jest aktywne/nie aktywne - tekst zmienia się w zależności czy mamy aktualne konto premium czy też nie. <a href=\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"2\">Zerknij</spam></a>.</p><p>Oczywiście zaraz po zalogowaniu na nowe konto, każdy z surowców otrzyma wartość początkową (100 szt.). Jednak nie jest to gra - ilość surowców można zmienić jedynie bezpośrednio przez podanie wartości do bazy danych, ponieważ w tym projekcie zajmowałem się jedynie formularzem logowania.</p>', 'pr16a.png,pr16b.png,pr16c.png,pr16d.png,pr16e.png', NULL, NULL, '2018-10-25 19:00:00', NULL),
(16, 'Portfolio na rok 2019', '					<b><p>\r\n					Portfolio jako projekt, czyli \"incepcja\" wśród projektów. Grzechem byłoby nie umieszczenie tego projektu w mojej kolekcji a to, że ten projekt i portfolio to jedno i to samo to już inna sprawa.\r\n				</p></b>\r\n				<p>\r\n					Przy tworzeniu tego projektu nie korzystałem z pomocy osób trzecich, ani kursów. Wykorzystałem wiedzę zdobytą od września 2018 roku a to czego nie wiedziałem szukałem w internecie. Pomimo, że nadal jest dużo pracy chociażby nad responsywnością strony to efekt już jest wystarczająco zadowalający.\r\n				</p>\r\n				<p>\r\n					Prace nad portfolio rozpocząłem od planowania - rozpisałem tyle ile mogłem na kartkach dbając o to by nie znalazło się na niej zarówno za mało jak i za dużo szczegółów które mogły by niepotrzenie skomplikować zadanie.\r\n					Całość zajmowała 7 stron i zawierała między innymi przypuszczalny wygląd i budowę portfolio, potrzebne modele, kontrolery, migracje i tabele w bazie danych. Mniej więcej jeszcze na początku prac zacząłem tworzyć mapę myśli, zawierającą czynności które przybliżyły by mój projekt do końca. Mapa myśli jest dostępna pod przyciskiem <b>\"Podgląd\"</b> - zazwyczaj znajduje się tam link do projektów ale tu chyba nie jest potrzebny.\r\n				</p>\r\n				<h3>Opis projektu:</h3>\r\n				<p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"0\">Omawiane zdjęcie</spam></a>\r\n					Strona tytułowa dostosowuje się do wysokości ekranu i składa się z obrazu i nałożonego gradientu. Jeśli za bardzo oddalimy ekran to zacznie zajmować wysokość ok. 30% wysokości ekranu. (Około ponieważ w przyszłości mogę edytować tą wartość i zapomnieć, że tu o niej wspomniałem.) Przezroczysty kontener z przyciskami to efekt użycia bootsrapowego efektu shadow. Również dostosowuje swoje wymiary w zależności od rozdzielczości ale sprawia jeszcze drobne problemy.\r\n				</p>\r\n				<p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"1\">Omawiane zdjęcie</spam></a> Frontend + Backend = Full Stack Developer. Użyta czcionka: Lora, dodane troche responsywności. Pod spodem w trzech kolumnach, wpisane na stałe w kod HTML trochę technologii. Kolumny również responsywne. Pod nimi paginacja - szablon Laravelowy ale ze zmienionymi stylami, pierwotna wersja była mocno niebieska.\r\n\r\n				</p>\r\n				<p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"2\">Omawiane zdjęcie</spam></a> Projeky układają się po 4 na stronę, za co odpowiada model, no i są układane od najnowszego po najstarsze. Data utworzenia projektu wyświetlana po wejściu w konkretny projekt w prawym górnym rogu. Tytuł i opis jest pobierany z bazy danych z tabeli <b>\"projects\"</b> kolumny <b>\"title\"</b>. Opis czyli kolumna <b>\"description\"</b> często byłaby za długa do wyświetlenia w pełnej formie, więc wyświetlany jest jedynie pierwszy paragraf za co odpowiada funkcja znajdująca się w modelu <b>\"Project\"</b>.\r\n				</p>\r\n				<p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"3\">Omawiane zdjęcie</spam></a> Na samym dole strony głównej znajdują się dane kontaktowe - efektowna animacja z użyciem CSS3 i selektorów ::before, trochę stylu <b>\"border-radious\"</b>, na pojawiającym się czarnym elemencie ruch zapewniony dzięki użyciu <b>\"transition\"</b> i mamy takie cudo. Tekst na przyciskach wcale się nie pojawia jest tam cały czas jedynie nie widać go dobrze na białym tle. W stopce zostały powtórzone przyciski ze strony powitalnej na górze plus przycisk zawierający licencje fontello. Po prawej na dole widać przycisk powrotu na górę strony, znika gdy nie jest potrzebny - fukcjonalność zapewnia mu kod jQuery.\r\n\r\n				</p>\r\n				<p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"4\">Omawiane zdjęcie</spam></a> Wygląda to trochę dziwnie ale to zdjęcie właśnie przedstawia tą samą stronę w tej samej pozycji na którą patrzycie. Głównym elementem jest karuzela zdjęć, posiadająca dwa przyciski po bokach, do zmiany zdjęć. Ich kliknięcie od razu ustawia stronę w dogodnej pozycji aby pokazać całe zdjęcie. Na dole zdjęcia jest pobierany z BD krótki opis również znajduje się w tabeli \"projects\", podobnie jak zdjęcia do karuzeli wszystkie opisy danego projektu znajdują się w jednej komórce i są jedynie po odzielane znakami specjalnymi. Znaki <b>[id]</b> w tej komórce jest zamieniana automatycznie na np. <b>Zdjęcie:5</b>. Jeśli pozostawie tą komórkę pustą to wszystkie zdjęcia zostaną ponumerowane w ten sposób.\r\n				</p>\r\n				<p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"5\">Omawiane zdjęcie</spam></a> Pod elementem karuzeli zdjęć znajduje się lista, wykorzystanych technologii w projekcie, następnie tytuł projektu, mogą pod tytułem rownież znajdować się dwa przyciski - podglą projektu i podgląd kodu na Github-ie. Oczywiście nie trzeba dodawać, że im bardzije skomplikowany projekt tym ciężej go opisać i dlatego część projektów zawiera mało tekstu np. ten już znacznie więcej.\r\n\r\n				</p>\r\n				<p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"6\">Omawiane zdjęcie</spam></a> Cały projekt składa się z 3 głównych stron. Strona przedstawiona w tym projekcie jest ostatnią. Przycisk powrotu podobnie jak na stronie z podglądem poszczegółnych projektów, służy do powrotu na poprzednio odwiedzaną stronę. Ma swoje wady ale na moje potrzeby w szczególności wystarcza.\r\n\r\n				</p>\r\n				<p><a href =\"#carousel_id\" class=\"use-path-animation\"><spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"7\">Omawiane zdjęcie</spam></a> Ostatnie zdjęcie z portfolio przedstawia ładnie zaprezentowane dane z orientacyjnymi wartościami poziomu wiedzy o danej technologii. Dane również pobierane z BD tym razem z tabeli <b>\"technologies\"</b>.\r\n				</p>\r\n				<p><b>Tabele wykorzystywane w tym projekcie to:</b></p>\r\n				<ol>\r\n					<li><b>\"projects\"</b> - Nazwa, linki do obrazów (same nazwy po przecinkach), opisy do projektów, opisy do poszczególnch zdjęć w projekcie, data utworzenia i aktualizacji to wszystko zawiera się w tej tabeli.</li>\r\n					<li><b>\"project_technology\"</b> - tabela pośrednicząca w relacji <b>\"many-to-many\"</b> tablic <b>\"projects\"</b> i  <b>\"technologies\"</b>.</li>\r\n					<li><b>\"technologies\"</b> - Zawiera wszystkie technologie takie jak \"PHP\", \"jQuery\" i inne. Przykład użycia klucza obcego.</li>\r\n					<li><b>\"technology_categories\"</b> - Czyli jak te wszystkie technologie są podzielone - u mnie na język programowania, framework, biblioteke, inne i przyszłościowe  - które są do nauki ale nie są nigdzie pokazane</li>\r\n				</ol>\r\n				<p>\r\n					Dziękuję za uwagę. Polecam się jako programista - jak widać nauka przebiega szybko.\r\n				</p>', 'pr17a.png,pr17b.png,pr17c.png,pr17d.png,pr17e.png,pr17f.png,pr17g.png,pr17h.png', 'Strona tytułowa dostosowuje się do wysokości ekranu i składa<br> się z obrazu i nałożonego gradientu::Małe przejście pomiędzy stroną tytułową a projektami<br>Paginacja ostylowana indywidualnie::Podgląd projektów::Uchwycona animacja przycisku::Podgląd wybranego projektu<br>w głównej części karuzela::Przykładowy opis projektu::Coś o mnie::Progresbary pobierane, stylowane, wyświetlane i<br> pozycjonowane za pomocą 32 linijek kodu.', 'https://github.com/PiotrRogalski/Portfolio', '2019-01-07 16:43:58', '2019-01-07 16:43:58'),
(17, 'Strona z listą TODO ', '            <b><p>\r\n              Wykonana w całości przy użyciu Vuetify i wspierana bazą danych noSql od google - firebase\r\n            </p></b>\r\n            <p>\r\n              Jest to mój pierwszy projekt z użyciem Vuetify - opierałem się o kurs internetowy, mimo to uważam, że Vuetify nie jest trudne. Jak można było się domyślić, opiera się o lepiej mi znane Vue.js rozszerzając go o gotowe elementy. Przy wspieraniu się dokumentacją nawet niedoświadczone osoby są w stanie zrobić coś ładnego.\r\n            </p>\r\n            <p>\r\n              <a href=\"#carousel_id\" class=\"use-path-animation\">\r\n                <spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"0\">Omawiane zdjęcie\r\n                </spam>\r\n              </a>\r\n              Na pierwszym zdjęciu jest lista zadań/tasków odpowiednich osób które je dodały i statusu zadania. Wszystkie elementy są pobierane z firebase. Sama baza danych jest dodatkowo obserwowana na zmiany tak aby w momencie dodania elementu lista przeładowała się automatycznie.\r\n            </p>\r\n            <p>\r\n              <a href=\"#carousel_id\" class=\"use-path-animation\">\r\n                <spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"1\">Omawiane zdjęcie\r\n                </spam>\r\n              </a>\r\n              Możemy również podejrzeć taski, które sami dodaliśmy - wystarczy wejść w \"My projects\". Opcja jest dostępna w chowanym menu bocznym (fioletowe) i w menu rozwijanym w prawym rogu navbaru, pod przyciskiem \"menu\".\r\n            </p>\r\n            <p>\r\n              <a href=\"#carousel_id\" class=\"use-path-animation\">\r\n                <spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"2\">Omawiane zdjęcie\r\n                </spam>\r\n              </a>\r\n              Jeżeli jesteśmy ciekawi kto znajduje sie obecnie w naszej grupie lub chcemy poznać resztę ekipy można ich profile podejrzeć w zakładce \"Team\".\r\n            </p>\r\n            <p>\r\n              <a href=\"#carousel_id\" class=\"use-path-animation\">\r\n                <spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"3\">Omawiane zdjęcie\r\n                </spam>\r\n              </a>\r\n              W projekcie zostało również zastosowane <p></p>roste sortowanie przy pomocy funkcji java scriptu. Można wybrać czy chcemy otrzymać wyniki sortowane po tytule czy po osobie która je zrobiła.\r\n            </p>\r\n            <p>\r\n              <a href=\"#carousel_id\" class=\"use-path-animation\">\r\n                <spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"4\">Omawiane zdjęcie\r\n                </spam>\r\n              </a>\r\n              Projekt jest tylko w części funkcjonalny - nie można edytować i usuwać postów po prostu czas tego projektu dobiegł końca trzeba się zająć ciekawszymi projektami - natomiast można dodawać nowe zadania. Wystarczy kliknąć przycisk \"ADD NEW PROJECT\" wypełnić formularz i gotowe. Sam formularz posiada drobną walidację - wpisywana wartość musi posiadać 3 litery. I nie możemy zatwierdzić dopóki nie zostanie ten warunek spełniony. Oczywiście można było zrobić lepszą walidację ale tutaj chciałem się skupić na Vuetify.\r\n            </p>\r\n            <p>\r\n              <a href=\"#carousel_id\" class=\"use-path-animation\">\r\n                <spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"5\">Omawiane zdjęcie\r\n                </spam>\r\n              </a>\r\n              Okienko z formularzem dodawania nowego zadania znika dopiero jak rekord zostanie poprawnie dodany do bazy danych i otrzyma on informację zwrotną o sukcesie takiego dodania. W tym czasie przycisk wyświetla ikone ładowania oznajmiając użytkownika, że jakieś prace działają w tle. Można by było tutaj zastosować lepsze rozwiązanie, kolejkowanie, wątki itp ale na ten projekt wystarczy proste rozwiązanie.\r\n            </p>\r\n            <p>\r\n              <a href=\"#carousel_id\" class=\"use-path-animation\">\r\n                <spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"6\">Omawiane zdjęcie\r\n                </spam>\r\n              </a>\r\n              Każde udane dodanie zadania do bazy danych jest oznajmiane użytkownikowi powiadomieniem u góry ekranu.\r\n            </p>\r\n            <p>\r\n              <a href=\"#carousel_id\" class=\"use-path-animation\">\r\n                <spam class=\"badge badge-sm badge-dark\" data-target=\"#carousel_id\" data-slide-to=\"7\">Omawiane zdjęcie\r\n                </spam>\r\n              </a>\r\n              Wyniki są od razu aktualizowane bez przeładowywania strony. \r\n            </p>', 'pr18a.png,pr18b.png,pr18c.png,pr18d.png,pr18e.png,pr18f.png,pr18g.png,pr18h.png', 'Lista wszystkich TODO::Lista TODO użytkownika::Użytkownicy wspólnej listy zadań - zespół::Proste sortowanie w js::Dodawanie nowego projektu/zadania::Formularz czeka na odpowiedź zwrotną z BD::Potwierdzenie poprawności dodania danych do BD::Faktyczne pojawienie się rekordów - bez przeładowywania strony', NULL, '2019-02-15 10:00:00', '2019-02-18 11:00:00'),
(18, 'Vue.js - aplikacja odpowiadająca na pytania', '<b>\r\n  <p>\r\n    Odpowiada na pytania yes/no. Zabawna prosta stronka stworzona przy użyciu Vue.js i API: https://yesno.wtf/api.\r\n  </p>\r\n</b>\r\n<p>Całość polega na wpisaniu pytania w języku angielskim i oczekiwania na odpowiedź serwera. Dodatkowo różnym akcjom\r\n towarzyszą nam różne gify wyświetlane w zależności czy to piszemy właśnie pytanie czy zapomnieliśmy znaku zapytania czy może już aplikacja przetwarza nasze pytanie</p>\r\n\r\n<p>\r\n  W odpowiedzi dostajemy link do obrazka i odpowiedź serwera.  Gify generują się losowo ale zawsze zgodnie z odpowiedzią. Czyli jeśli otrzymamy odpowiedź twierdzącą to obrazek będzie związany z odpowiedzią.\r\n</p>', 'pr20a.png,pr20b.png,pr20c.png,pr20d.png,pr20e.png,pr20f.png', 'Ekran powitalny::Gif wyświetlany w trakcie pisania::Gif jeśli nie ma znaku zapytania::Gif podczas wysyłania danych do API::Losowy GIF odpowiedzi i odpowiedź - obydwa pobierane z API::Odpowiedź pozytywna i adekwatny losowy gif\r\n', 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project20', '2019-02-06 13:00:00', '2019-02-06 15:00:00'),
(19, 'Vue.js - stylowanie przycisku', '<b>\r\n  <p>\r\n    Kolejny pomysł co można zrobić za pomocą Vue.js. Dzięki stronie możemy podejrzeć jaki wpływa ma dana klasa bootstarap 4 na przycisk.\r\n  </p>\r\n</b>\r\n<p>\r\n  Można by było zastosować dowolny element html5 jedynie rozbudowując w prosty sposób aplikację. Przyciski można generować tyle ile się chce. Są one tworzone dynamicznie na podstawie nazwy wpisanej klasy bootstrapowej. Tak naprawdę bindują po prostu kolejne klasy do obiektu przycisk.\r\n</p>\r\n<p>\r\n  Na tej podsawie można łatwo tworzyć formularze gotowego kodu HTML z zastosowanymi klasami. Jest to zalążek do większej aplikacji tworzenia stron internetowych albo ich stylowania.\r\n</p>\r\n<p>\r\n  Atrybuty z klasami można również usuwać wchodząc tak zwany \"delete mode\" po kliknięciu przycisku \"delete\". Każdy przycisk który klikniemy w takim trybie jest usuwany natychmiast, po prostu jest sciągany z tablicy js w której jest czasowo przechowywany. Przyciski nie są one zapisywane dlatego po odświeżeniu strony, cała strona się restartuje i tracimy dane. Zastosowanie tutaj zapamiętania ustawień nie było priorytetem.\r\n</p>\r\n', 'pr19a.png,pr19b.png,pr19c.png', 'Przykładowy oscylowanie przycisków::Przyciski wykorzystują klasy bootsrapa 4:: Niepotrzebne ostylowanie przycisków można usuwać', 'https://github.com/PiotrRogalski/Portfolio/tree/Default/public/projects_preview/project19', '2019-02-06 15:00:00', '2019-02-06 16:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `project_technology`
--

CREATE TABLE `project_technology` (
  `project_id` int(10) UNSIGNED NOT NULL,
  `technology_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `project_technology`
--

INSERT INTO `project_technology` (`project_id`, `technology_id`) VALUES
(1, 5),
(1, 16),
(1, 17),
(2, 5),
(2, 16),
(2, 17),
(3, 16),
(3, 17),
(4, 16),
(4, 17),
(5, 16),
(5, 17),
(5, 14),
(6, 16),
(6, 17),
(7, 16),
(7, 17),
(7, 14),
(8, 16),
(8, 17),
(8, 10),
(9, 16),
(9, 17),
(9, 14),
(10, 16),
(10, 17),
(11, 16),
(11, 17),
(12, 16),
(12, 17),
(12, 5),
(13, 16),
(13, 17),
(13, 1),
(13, 3),
(13, 11),
(13, 14),
(13, 25),
(14, 16),
(14, 17),
(14, 4),
(14, 5),
(14, 6),
(14, 10),
(14, 25),
(14, 26),
(15, 16),
(15, 17),
(15, 6),
(15, 25),
(16, 16),
(16, 17),
(16, 1),
(16, 3),
(16, 4),
(16, 5),
(16, 10),
(16, 11),
(16, 14),
(16, 25),
(17, 28),
(18, 2),
(19, 2),
(17, 29),
(18, 14),
(18, 17),
(18, 16),
(19, 14),
(19, 16),
(19, 17),
(17, 17),
(17, 16),
(17, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `technologies`
--

CREATE TABLE `technologies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_level` decimal(2,1) NOT NULL DEFAULT '0.0',
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `technologies`
--

INSERT INTO `technologies` (`id`, `name`, `skill_level`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Eloquent', '0.6', 3, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(2, 'Vue.js', '0.4', 2, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(3, 'Laravel', '0.6', 2, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(4, 'PHP', '0.7', 1, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(5, 'JavaScript', '0.6', 1, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(6, 'MySqli', '0.7', 4, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(7, 'PostgreSQL', '0.4', 4, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(8, 'NoSql', '0.7', 5, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(9, 'Sql Lite', '0.0', 5, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(10, 'jQuery', '0.5', 3, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(11, 'Git', '0.4', 4, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(12, 'Json', '0.7', 4, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(13, 'Ajax', '0.1', 4, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(14, 'Bootstrap 4', '0.8', 3, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(15, 'SASS', '0.0', 5, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(16, 'CSS3', '0.9', 1, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(17, 'HTML5', '1.0', 1, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(18, 'Male.js', '0.0', 5, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(19, 'SCRUM', '0.0', 5, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(20, 'Symphony 4', '0.0', 5, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(21, 'React', '0.0', 5, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(22, 'Redux', '0.0', 5, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(23, 'Magneto 2', '0.0', 5, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(24, 'Cordore', '0.0', 5, '2019-01-04 13:54:04', '2019-01-04 13:54:04'),
(25, 'SQL', '0.7', 1, '2019-01-07 16:17:00', '2019-01-07 16:17:00'),
(26, 'jQuery UI', '0.5', 3, '2019-01-07 16:24:00', '2019-01-07 16:29:00'),
(27, 'phpunit', '0.0', 5, '2019-01-19 23:00:00', '2019-01-19 23:00:00'),
(28, 'Vuetify', '0.4', 3, '2019-02-18 05:30:24', '2019-02-18 05:30:24'),
(29, 'Firebase', '0.3', 4, '2019-02-18 02:00:00', '2019-02-18 02:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `technology_categories`
--

CREATE TABLE `technology_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `technology_categories`
--

INSERT INTO `technology_categories` (`id`, `name`) VALUES
(1, 'Języki Programowania'),
(2, 'Frameworki'),
(3, 'Bibilioteki'),
(4, 'Inne'),
(5, 'Przyszłościowe');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `project_technology`
--
ALTER TABLE `project_technology`
  ADD KEY `project_technology_project_id_foreign` (`project_id`),
  ADD KEY `project_technology_technology_id_foreign` (`technology_id`);

--
-- Indeksy dla tabeli `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `technologies_category_id_foreign` (`category_id`);

--
-- Indeksy dla tabeli `technology_categories`
--
ALTER TABLE `technology_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT dla tabeli `technology_categories`
--
ALTER TABLE `technology_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `project_technology`
--
ALTER TABLE `project_technology`
  ADD CONSTRAINT `project_technology_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_technology_technology_id_foreign` FOREIGN KEY (`technology_id`) REFERENCES `technologies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `technologies`
--
ALTER TABLE `technologies`
  ADD CONSTRAINT `technologies_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `technology_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
