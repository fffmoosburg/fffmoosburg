<!DOCTYPE html>
<html lang="de" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FFF Moosburg - Sharepics</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="194x194" href="../favicon-194x194.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <link rel="mask-icon" href="../safari-pinned-tab.svg" color="#1da64a">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="msapplication-TileImage" content="../mstile-144x144.png">
    <meta name="theme-color" content="#1da64a">
    <link rel="stylesheet" href="../dist/global/style/style.compiled.css">
    <script defer src="../dist/global/friconix.js"></script>
</head>

<body class="bg-slate-800 font-jost overflow-x-hidden">
<?php
$host = '10.35.47.248:3306';
$user = 'k201040_fff_moosburg_testing';
$password = 'k201040_fff_moosburg_testing';
$dbname = 'k201040_fff_moosburg_testing';

$db = new mysqli($host, $user, $password, $dbname);
if ($db->connect_errno > 0) {
    die('<h1>Fehler beim Verbinden: ' . $db->connect_error . "</h1>");
}

$picture_amount = $db->query('SELECT `id` FROM `sharepics`')->num_rows;

function getImageURL($passedID)
{
    global $db;
    $queryImageURL = $db->query('SELECT `url` FROM `sharepics` WHERE `id`= ' . $passedID);
    $imageURL = $queryImageURL->fetch_assoc();
    $result = $imageURL['url'];
    return $result;
}

function getThumbURL($passedID)
{
    global $db;
    $queryThumbURL = $db->query('SELECT `thumb_url` FROM `sharepics` WHERE `id`= ' . $passedID);
    $thumbURL = $queryThumbURL->fetch_assoc();
    $result = $thumbURL['thumb_url'];
    return $result;
}

function getMimeType($passedID)
{
    global $db;
    $queryMIME = $db->query('SELECT `mime_type` FROM `sharepics` WHERE `id`= ' . $passedID);
    $mimeType = $queryMIME->fetch_assoc();
    $result = $mimeType['mime_type'];
    return $result;

}
?>
    <div class="relative bg-slate-100 text-fffdunkelgruen">
        <div class="mx-auto max-w-7xl px-6">
            <div
                class="flex items-center justify-between text-fffdunkelgruen border-b-2 border-gray-100 py-6 mdlg:justify-start mdlg:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#home">
                        <span class="sr-only">Fridays For Future Moosburg</span>
                        <picture class="h-20 w-20 sm:h-18 sm:w-18 md:h-14 md:w-14 lg:h-16 lg:w-16">
                            <source srcset="../dist/global/logo/dunkelgruen/160x.webp" type="image/webp">
                            <source srcset="../dist/global/logo/dunkelgruen/160x.png" type="image/png">
                            <img class="h-20 w-20 sm:h-18 sm:w-18 md:h-14 md:w-14 lg:h-16 lg:w-16"
                                src="../dist/global/logo/dunkelgruen/160x.png" alt="">
                        </picture>
                    </a>
                </div>
                <div class="-my-2 -mr-2 mdlg:hidden">
                    <button type="button" id="mobile-menu-open"
                        class="inline-flex items-center justify-center rounded-md bg-slate-100 p-2 text-fffdunkelgruen hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-fffhellgruen"
                        aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/bars-3 -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden space-x-10 mdlg:flex">

                    <a href="../#home" class="text-lg font-medium text-fffdunkelgruen hover:text-fffhellgruen">Home</a>
                    <a href="../#ueber-uns"
                        class="text-lg font-medium text-fffdunkelgruen hover:text-fffhellgruen">Über&nbsp;Uns</a>

                    <div class="relative">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <button id="forderungen-dropdown-button" type="button"
                            class="text-fffdunkelgruen group inline-flex items-center rounded-md bg-slate-100 text-lg font-medium hover:text-fffhellgruen focus:outline-none focus:ring-2 focus:ring-fffhellgruen focus:ring-offset-2 inactive"
                            aria-expanded="false">
                            <span>Forderungen</span>
                            <!--
                                      Heroicon name: mini/chevron-down
                        
                                      Item active: "text-gray-600", Item inactive: "text-gray-400"
                                    -->
                            <svg class="text-fffdunkelgruen ml-2 h-5 w-5 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!--
                                    'Foderungen' flyout menu, show/hide based on flyout menu state.
                        
                                    Entering: "transition ease-out duration-200"
                                      From: "opacity-0 translate-y-1"
                                      To: "opacity-100 translate-y-0"
                                    Leaving: "transition ease-in duration-150"
                                      From: "opacity-100 translate-y-0"
                                      To: "opacity-0 translate-y-1"
                                  -->
                        <div id="forderungen-dropdown"
                            class="absolute z-10 -ml-4 mt-3 w-screen max-w-md transform px-2 sm:px-0 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 invisible">
                            <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="../#forderungen-de"
                                        class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                        <!-- Heroicon name: outline/chart-bar -->
                                        <svg class="h-6 w-6 flex-shrink-0 text-fffdunkelgruen"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                        </svg>

                                        <div class="ml-4">
                                            <p class="text-lg font-medium text-gray-900">Bundesweite Forderungen</p>
                                            <p class="mt-1 text-sm text-gray-500">Überblick über die Bundesweiten
                                                Forderungen von FFF.</p>
                                        </div>
                                    </a>

                                    <a href="../#forderungen-lokal"
                                        class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                        <!-- Heroicon name: outline/cursor-arrow-rays -->
                                        <svg class="h-6 w-6 flex-shrink-0 text-fffdunkelgruen"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg>

                                        <div class="ml-4">
                                            <p class="text-lg font-medium text-gray-900">Lokale Forderungen</p>
                                            <p class="mt-1 text-sm text-gray-500">Unsere Forderungen für Moosburg und
                                                Umgebung.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="space-y-6 bg-gray-50 px-5 py-5 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                    <div class="flow-root">
                                        <a href="https://fridaysforfuture.de/forderungen/"
                                            class="-m-3 flex items-center rounded-md p-3 text-lg font-medium text-gray-900 hover:bg-gray-100">
                                            <!-- Heroicon name: outline/play -->
                                            <svg class="h-6 w-6 flex-shrink-0 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>

                                            <span class="ml-3">Bundesorga Forderungen</span>
                                        </a>
                                    </div>

                                    <div class="flow-root">
                                        <a href="https://fridaysforfuture.de/studie/"
                                            class="-m-3 flex items-center rounded-md p-3 text-lg font-medium text-gray-900 hover:bg-gray-100">
                                            <!-- Heroicon name: outline/phone -->
                                            <svg class="h-6 w-6 flex-shrink-0 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>

                                            <span class="ml-3">FFF-Studie</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="../#aktionen"
                        class="text-lg font-medium text-fffdunkelgruen hover:text-fffhellgruen">Aktionen</a>

                    <a href="../#kontakt"
                        class="text-lg font-medium text-fffdunkelgruen hover:text-fffhellgruen">Kontakt</a>
                </nav>
                <div class="hidden items-center justify-end mdlg:flex mdlg:flex-1 lg:w-0">

                    <a href="../"
                        class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent px-4 py-2 text-base font-bold text-white hover:bg-fffrot bg-red-700 hover:shadow-neumorphism-light shadow-neumorphism-light-hov">Sharepics!</a>
                </div>
            </div>
        </div>

        <!--
        Mobile menu, show/hide based on mobile menu state.
    
        Entering: "duration-200 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
        <div id="mobile-menu"
            class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition mdlg:hidden invisible">
            <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                <div class="px-5 pt-5 pb-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <picture class="h-8 w-auto">
                                <source srcset="../dist/global/logo/dunkelgruen/160x.webp" type="image/webp">
                                <source srcset="../dist/global/logo/dunkelgruen/160x.png" type="image/png">
                                <img class="h-8 w-auto" src="../dist/global/logo/dunkelgruen/160x.png" alt="">
                            </picture>
                        </div>
                        <div class="-mr-2">
                            <button id="mobile-menu-close" type="button"
                                class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-fffhellgruen">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x-mark -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-8">
                            <a href="../#home" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="h-6 w-6 flex-shrink-0 text-fffdunkelgruen"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>

                                <span class="ml-3 text-base font-medium text-gray-900">Home</span>
                            </a>

                            <a href="../#ueber-uns" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                                <!-- Heroicon name: outline/cursor-arrow-rays -->
                                <svg class="h-6 w-6 flex-shrink-0 text-fffdunkelgruen"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                </svg>

                                <span class="ml-3 text-base font-medium text-gray-900">Über&nbsp;Uns</span>
                            </a>

                            <a href="../#forderungen" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="h-6 w-6 flex-shrink-0 text-fffdunkelgruen"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">Forderungen</span>
                            </a>

                            <a href="../#aktionen" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                                <!-- Heroicon name: outline/squares-2x2 -->
                                <svg class="h-6 w-6 flex-shrink-0 text-fffdunkelgruen"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">Aktionen</span>
                            </a>

                            <a href="../#kontakt" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                                <!-- Heroicon name: outline/arrow-path -->
                                <svg class="h-6 w-6 flex-shrink-0 text-fffdunkelgruen"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                </svg>

                                <span class="ml-3 text-base font-medium text-gray-900">Kontakt</span>
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="space-y-0 py-3 px-5">
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    </div>
                    <div>
                        <a href="#"
                            class="flex w-full items-center justify-center rounded-md border border-transparent bg-fffrot px-4 py-2 text-base font-bold text-white shadow-sm hover:bg-indigo-700">Sharepics!</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="home"
        class="text-center mx-4 my-12 lg:mx-24 lg:my-24 py-36 px-10 rounded-2xl bg-fffhellblau scroll-m-4 shadow-neumorphism">
        <h1><span class="text-5xl mdlg:text-7xl lg:text-8xl font-bold">Fridays For Future</span><br /><span
                class="mt-5 text-3xl mdlg:text-5xl lg:text-6xl font-semibold pt-3">Ortsgruppe Moosburg</span></h1>
    </section>

    <section id="sharepics"
        class="mx-4 my-12 lg:mx-24 lg:my-24 py-36 px-10 rounded-2xl bg-fffhellgruen scroll-m-4 shadow-neumorphism text-center">
        <h1 class="text-6xl font-bold mb-4 mt-8">Sharepic-Galerie</h1>
        <p class="text-base">Willkommen, hier findest du alle Sharepics.<br />Die neuesten sind ganz oben links.</p>
        <div
            class="flex flex-row-reverse flex-wrap-reverse columns-1 lg:columns-3 mx-percent3_125 my-2 text-center items-center justify-center justify-content-center content-center">
            <?php
            for ($i = 1; $i <= $picture_amount; $i++) {
                echo "<a class=\"w-percent25 text-3xl my-5 py-2 mx-percent3_125 text-center\" href=\"" . getImageURL($i) . "\" download=\"\">
                <picture class=\"w-full h-auto mx-auto my-auto\">
                    <source srcset=\"" . getThumbURL($i) . "\" type=\"image/webp\">
                    <source srcset=\"" . getImageURL($i) . "\" type=\"" . getMimeType($i) . "\">
                    <img class=\"w-full h-auto mx-auto my-auto\" src=\"" . getImageURL($i) . "\" alt=\"Sharepic\">
                </picture>
            </a>";
            }
            ;
            ?>
            <!-- <a class="w-percent25 text-3xl my-5 py-2 mx-percent3_125 text-center" href="./20.08/Seid_Bereit_20.08.jpg"
                download="">
                <picture class="w-full h-auto mx-auto my-auto">
                    <source srcset="./20.08/Seid_Bereit_20.08.webp" type="image/webp">
                    <source srcset="./20.08/Seid_Bereit_20.08.jpg" type="image/jpg">
                    <img class="w-full h-auto mx-auto my-auto" src="./20.08/Seid_Bereit_20.08.jpg" alt="Sharepic">
                </picture>
            </a>
            <a class="w-percent25 text-3xl my-5 py-2 mx-percent3_125 text-center" href="./24.09/24.09_Viehmarkt.jpg"
                download="">
                <picture class="w-full h-auto mx-auto my-auto">
                    <source srcset="./24.09/24.09_Viehmarkt.webp" type="image/webp">
                    <source srcset="./24.09/24.09_Viehmarkt.jpg" type="image/jpg">
                    <img class="w-full h-auto mx-auto my-auto" src="./24.09/24.09_Viehmarkt.jpg" alt="Sharepic">
                </picture>
            </a> -->
            <!--
                VORLAGE:

            <a class="w-percent25 text-3xl my-5 py-2 mx-percent3_125 text-center" href="./" download="">
                <picture class="w-full h-auto mx-auto my-auto">
                    <source srcset="./" type="image/webp">
                    <source srcset="./" type="image/">
                    <img class="w-full h-auto mx-auto my-auto" src="./" alt="Sharepic">
                </picture>
            </a>
            -->

        </div>

    </section>

    <footer
        class="mx-4 my-12 lg:mx-24 lg:my-24 py-6 px-6 lg:py-12 lg:px-20 rounded-2xl bg-slate-700 scroll-m-4 shadow-neumorphism">
        <div
            class="flex flex-wrap lg:flex-nowrap columns-3 lg:columns-3 my-2 text-white text-center items-center content-center">
            <p class="w-full my-4">
                <a href="../impressum/">Impressum</a>
            </p>
            <p class="w-full my-4">&copy;&nbsp;2023, Fridays&nbsp;For&nbsp;Future&nbsp;Moosburg</p>
            <p class="w-full my-4">
                <a href="../datenschutz/">Datenschutz<ap>
            </p>
        </div>
        <script src="../src/global/js/main.js"></script>
</body>

</html>