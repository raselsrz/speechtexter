<?php

$name = "Movie Maker";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css?v=18">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="darkcyan">

    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="canonical" href="https://www.<?php echo $name;  ?>.com" />


    <title><?php echo $name;  ?> | Type with your voice!</title>

    <meta name="description"
        content="Speech to text converter. Dictate with your voice. Free web app for typing with your voice. Over 70 different languages supported!" />
    <meta name="keywords" content="voice to text, speech to text, type, voice, dictate, speech" />

    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="/img/icon_192.png"><!-- 180×180 -->
    <link rel="icon" href="/favicon.ico"><!-- 32×32 -->
    <!-- <link rel="icon" href="/icon.svg" type="image/svg+xml">-->




</head>

<body>

    <div id="app">
        <div id="top-navbar">
            <div class="width-limiter">
                <div class="group-row">
                    <div id="brand"><?php echo $name;  ?></div>
                    <div id="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 1024 1024">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #f60;
                                    }

                                    .cls-1,
                                    .cls-2,
                                    .cls-3 {
                                        fill-rule: evenodd;
                                    }

                                    .cls-2 {
                                        fill: #b04600;
                                    }

                                    .cls-3 {
                                        fill: url(#linear-gradient);
                                    }
                                </style>
                                <linearGradient id="linear-gradient" x1="511.719" y1="811" x2="511.719" y2="213.906"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#c8c8c8" />
                                    <stop offset="1" stop-color="#f0f0f0" />
                                </linearGradient>
                            </defs>
                            <path id="svg-logo-back" class="cls-1"
                                d="M230.658,123.327S93.095,109.371,101.07,266.871s37.879,572.183,37.879,572.183-7.974,103.671,121.614,81.74S519.74,886.9,519.74,886.9l-31.9,129.588L820.784,853.01s107.658-29.9,101.677-173.45-37.879-486.455-37.879-486.455-21.931-109.652-153.513-95.7" />
                            <path id="svg-logo-shadow" class="cls-2"
                                d="M560,681.168V767H662a29,29,0,0,1,0,58H407a29,29,0,0,1,0-58H510V680.284C359.972,661.7,379,504,379,504s-2-17.5,23-18c18-.36,19,22,19,22S398.224,645.011,535,642c139.323-3.067,114-134,114-134s-0.979-21.39,23-22c13.5-.344,21,20,21,20S708.265,667.7,560,681.168ZM530,620c-86-2-88-82-88-82s-2-142,0-230c1.954-85.978,92-80,92-80,92,0,100,86,100,86l-2,234S616,622,530,620Z" />
                            <path id="svg-logo-mic" class="cls-3"
                                d="M536,667.168V753H638a29,29,0,0,1,0,58H383a29,29,0,0,1,0-58H486V666.284C335.972,647.7,355,490,355,490s-2-17.5,23-18c18-.36,19,22,19,22S374.224,631.011,511,628c139.323-3.067,114-134,114-134s-0.979-21.39,23-22c13.5-.344,21,20,21,20S684.265,653.7,536,667.168ZM506,606c-86-2-88-82-88-82s-2-142,0-230c1.954-85.978,92-80,92-80,92,0,100,86,100,86l-2,234S592,608,506,606Z" />
                        </svg>

                    </div>
                </div>
                <div class="b-group">
                    <div role="button" class="button" id="b-language" title="Select the language">
                        <div id="language-flag-display"></div>

                        <div id="language-name-display">...</div>

                    </div>

                    <div role="button" class="button" id="b-commands-list" title="Commands list">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="24">
                            <path fill="currentColor"
                                d="M160 776q-17 0-28.5-11.5T120 736q0-17 11.5-28.5T160 696q17 0 28.5 11.5T200 736q0 17-11.5 28.5T160 776Zm0-160q-17 0-28.5-11.5T120 576q0-17 11.5-28.5T160 536q17 0 28.5 11.5T200 576q0 17-11.5 28.5T160 616Zm0-160q-17 0-28.5-11.5T120 416q0-17 11.5-28.5T160 376q17 0 28.5 11.5T200 416q0 17-11.5 28.5T160 456Zm120 320v-80h560v80h380Zm0-160v-80h560v80h380Zm0-160v-80h560v80h380Z" />
                        </svg>
                    </div>
                    <div role="button" class="button" id="b-settings" title="Settings">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="24">
                            <path fill="currentColor"
                                d="m370 976-16-128q-13-5-24.5-12T307 821l-119 50L78 681l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78 471l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12l-16 128H370Zm112-260q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342 576q0 58 40.5 99t99.5 41Zm0-80q-25 0-42.5-17.5T422 576q0-25 17.5-42.5T482 516q25 0 42.5 17.5T542 576q0 25-17.5 42.5T482 636Zm-2-60Zm-40 320h79l14-106q31-8 57.5-23.5T639 729l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533 362l-13-106h-79l-14 106q-31 8-57.5 23.5T321 423l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427 790l13 106Z">
                            </path>
                        </svg>
                    </div>

                    <div role="button" class="button" id="b-full-screen" title="Full screen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-maximize">
                            <path
                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                            </path>
                        </svg>
                    </div>


                </div>
            </div>
        </div>
        <div id="main">


            <div id="editorWrap" class="plainEditorWrap light">

                <div id="noteTopBar">
                    <div role="button" class="button b-command-menu" id="b-note-new" title="New note">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-file">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                        </svg>
                    </div>

                    <div role="button" class="button b-command-menu" id="b-note-download" title="Download">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-download">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </div>

                    <div role="button" class="button b-command-menu" id="b-note-print" title="Print">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-printer">
                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                            <rect x="6" y="14" width="12" height="8"></rect>
                        </svg>
                    </div>
                    |
                    <div role="button" class="button b-command-menu" id="b-note-bold" title="Bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bold">
                            <path d="M6 4h8a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path>
                            <path d="M6 12h9a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path>
                        </svg>
                    </div>
                    <div role="button" class="button b-command-menu" id="b-note-italic" title="Italic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-italic">
                            <line x1="19" y1="4" x2="10" y2="4"></line>
                            <line x1="14" y1="20" x2="5" y2="20"></line>
                            <line x1="15" y1="4" x2="9" y2="20"></line>
                        </svg>
                    </div>
                    <div role="button" class="button b-command-menu" id="b-note-underline" title="Underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-underline">
                            <path d="M6 3v7a6 6 0 0 0 6 6 6 6 0 0 0 6-6V3"></path>
                            <line x1="4" y1="21" x2="20" y2="21"></line>
                        </svg>
                    </div>
                </div>
                <!-- textEditor div must be in one line, do not split -->
                <div id="textEditor" class="note" contentEditable><p></p></div><!-- textEditor div must be in one line-->
                <div id="noteInfo">
                    <div id="noteInfo1"></div>
                    <div id="noteInfo2">0 words</div>
                </div>
                <div id="data-test" class="note hidden">
                    <p>confidence level (%) | transcription text (showing the last 100 lines)</p>
                    <p id="data-test-text" style="white-space: pre-wrap;font-family: monospace;"></p>
                </div>
            </div>

            <div id="panel-right" class="hidden">
                <div id="commands-title" class="">
                    <div id="b-group-commands" class="hidden">
                        <div role="button" class="button b-command-menu" id="b-cm-add" title="Add new command">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </div>

                        <div role="button" class="button b-command-menu hidden-smooth" id="b-cm-reset"
                            title="Reset commands">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-rotate-cmw">
                                <polyline points="1 4 1 10 7 10"></polyline>
                                <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                            </svg>
                        </div>

                        <div role="button" class="button b-command-menu" id="b-cm-import" title="Import commands">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-download">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                        </div>

                        <div role="button" class="button b-command-menu" id="b-cm-export" title="Export commands">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-upload">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="17 8 12 3 7 8"></polyline>
                                <line x1="12" y1="3" x2="12" y2="15"></line>
                            </svg>
                        </div>

                    </div>

                    <div role="button" class="button b-command-menu" id="b-cm-edit-commands" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-edit-3">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                    </div>

                    <div role="button" class="button b-command-menu" id="b-cm-close-commands" title="close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#FFFFFF">
                            <path d="M0 0h34v24H0V0z" fill="none"></path>
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div id="commands-list"></div>
                <a href="#suggest-an-update" id="found-mistake" class="hidden" title="After you have made all the changes to your list,
click on the 'Export' button located above the list.
Then, send us your file as an attachment via email.">
                    Found a mistake or have a suggestion? [↓]
                </a>
            </div>


        </div>
        <div id="bottom-navbar">

            <div role="button" class="button" id="b-copy-all" title="Copy all text"><svg
                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <path d="M0 0h34v24H0z" fill="none"></path>
                    <path
                        d="M16 1H4c-1.1 0-2 .9-2 2v14h3V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z">
                    </path>
                </svg></div>
            <div role="button" class="button" id="b-undo" title="Undo
CTRL + Z"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <path d="M0 0h34v24H0V0z" fill="none"></path>
                    <path
                        d="M12.5 8c-2.65 0-5.05.99-6.9 2.6L2 7v9h9l-3.62-3.62c1.39-1.16 3.16-1.88 5.12-1.88 3.54 0 6.55 2.31 7.6 5.5l2.37-.78C21.08 11.03 17.15 8 12.5 8z">
                    </path>
                </svg></div>
            <div id="mic-outer-div">
                <div role="button" class="button" id="mic" title="Start / stop"><svg xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"
                        fill="currentColor">
                        <g>
                            <rect fill="none" height="24" width="24"></rect>
                            <rect fill="none" height="24" width="24"></rect>
                            <rect fill="none" height="24" width="24"></rect>
                        </g>
                        <g>
                            <g></g>
                            <g>
                                <path
                                    d="M12,14c1.66,0,3-1.34,3-3V5c0-1.66-1.34-3-3-3S9,3.34,9,5v6C9,12.66,10.34,14,12,14z">
                                </path>
                                <path
                                    d="M17,11c0,2.76-2.24,5-5,5s-5-2.24-5-5H5c0,3.53,2.61,6.43,6,6.92V21h3v-3.08c3.39-0.49,6-3.39,6-6.92H17z">
                                </path>
                            </g>
                        </g>
                    </svg></div>
            </div>
            <div role="button" class="button" id="b-redo" title="Redo
CTRL + Y"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <path d="M0 0h34v24H0V0z" fill="none"></path>
                    <path
                        d="M18.4 10.6C16.55 8.99 14.15 8 11.5 8c-4.65 0-8.58 3.03-9.96 7.22L3.9 16c1.05-3.19 4.05-5.5 7.6-5.5 1.95 0 3.73.72 5.12 1.88L13 16h9V7l-3.6 3.6z">
                    </path>
                </svg></div>

            <div role="button" class="button" id="b-send" title="Send"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <path d="M0 0h34v24H0z" fill="none"></path>
                    <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                </svg></div>
        </div>


        <div class="background-overlay hidden">
            <div id="menu-language" class="menu">
                <div class="menu-top">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>

                    </div>
                    <div class="menu-title" id="menu-language-title">
                        <div id="menu-language-filter" contenteditable="true"></div>

                    </div>

                    <div role="button" class="button close" title="close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#FFFFFF">
                            <path d="M0 0h34v24H0V0z" fill="none"></path>
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                            </path>
                        </svg>
                    </div>

                </div>
                <div id="menu-content-language" class="menu-content">

                </div>

            </div>
        </div>

        <div class="background-overlay hidden">
            <div id="menu-settings" class="menu">
                <div class="menu-top">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-settings">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1h31a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                            </path>
                        </svg>

                    </div>
                    <div class="menu-title">SETTINGS</div>

                    <div role="button" class="button close" title="close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#FFFFFF">
                            <path d="M0 0h34v24H0V0z" fill="none"></path>
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                            </path>
                        </svg>
                    </div>

                </div>
                <div id="menu-content-settings" class="menu-content">
                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M840-680v480q0 33-23.5 56.5T760-120H200q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h480l160 160Zm-80 34L646-760H200v560h560v-446ZM480-240q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35ZM240-560h360v-160H240v160Zm-40-86v446-560 114Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Autosave (uses browser's cache)</div>
                            <div class="menu-row-hint">
                                Not suitable for browsers configured to clear the cache upon exit.
                                Avoid utilizing this feature on shared computers. Instead, consider saving your work to
                                your personal device.
                            </div>
                        </div>
                        <div class="menu-row-switch" id="isAutoSaveOn">

                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                <path
                                    d="M320-480h320v-80H320v80Zm0 360v-80H160q-33 0-56.5-23.5T80-280v-480q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v480q0 33-23.5 56.5T800-200H640v80H320ZM160-280h640v-480H160v480Zm0 0v-480 480Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Display transcription preview box</div>
                            <div class="menu-row-hint">
                                When this option is off, your transcribed text will be inserted directly into the note
                                immediately.</div>
                        </div>
                        <div class="menu-row-switch" id="usePreviewBox">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M276-280h76l40-112h176l40 112h76L520-720h-80L276-280Zm138-176 64-182h4l64 182H414Zm66 376q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Capitalize proper nouns</div>
                            <div class="menu-row-hint">
                                Auto capitalization may not always function accurately, as in the case
                                of <strong>T</strong>arget (the name of a store) versus <strong>t</strong>arget (a
                                desired outcome).
                            </div>

                        </div>
                        <div class="menu-row-switch" id="capitalizeAuto">

                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M280-280h280v-80H280v80Zm0-160h400v-80H280v80Zm0-160h400v-80H280v80Zm-80 480q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Capitalize first letter in a new sentence</div>
                        </div>
                        <div class="menu-row-switch" id="capitalizeFirstLetterNewSentence">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M360-160v-240q-83 0-141.5-58.5T160-600q0-83 58.5-141.5T360-800h360v80h-80v560h-80v-560H440v560h-80Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Capitalize first letter in a new paragraph</div>
                        </div>
                        <div class="menu-row-switch" id="capitalizeFirstLetterNewParagraph">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="m159-280 150-400h72l150 400h-69l-36-102H264l-36 102h-69Zm126-160h120l-58-166h-4l-58 166Zm369 171q-49 0-77-25.5T549-364q0-42 32.5-68.5T665-459q23 0 42.5 3.5T741-444v-14q0-27-18.5-43T672-517q-21 0-39.5 9T601-482l-43-32q19-27 48-41t67-14q62 0 95 29.5t33 85.5v176h-59v-34h-3q-13 20-35 31.5T654-269Zm10-50q32 0 54.5-22.5T741-396q-14-8-32-12t-33-4q-32 0-49 12.5T610-364q0 20 15 32.5t39 12.5Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Capitalize every letter</div>
                        </div>
                        <div class="menu-row-switch" id="capitalizeEveryLetter">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                <path
                                    d="M280-420q25 0 42.5-17.5T340-480q0-25-17.5-42.5T280-540q-25 0-42.5 17.5T220-480q0 25 17.5 42.5T280-420Zm200 0q25 0 42.5-17.5T540-480q0-25-17.5-42.5T480-540q-25 0-42.5 17.5T420-480q0 25 17.5 42.5T480-420Zm200 0q25 0 42.5-17.5T740-480q0-25-17.5-42.5T680-540q-25 0-42.5 17.5T620-480q0 25 17.5 42.5T680-420ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Add a period at the end of the sentence</div>
                            <div class="menu-row-hint">
                                This option might not work in browsers other than Edge.
                            </div>
                        </div>
                        <div class="menu-row-switch" id="addPeriodAtTheEnd">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M240-520h60v-80h-60v80Zm100 80h60v-240h-60v240Zm110 80h60v-400h-60v400Zm110-80h60v-240h-60v240Zm100-80h60v-80h-60v80ZM80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Enable voice commands</div>
                        </div>
                        <div class="menu-row-switch" id="isVoiceCommandOn">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h167q11-35 43-57.5t70-22.5q40 0 71.5 22.5T594-840h166q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560h-80v120H280v-120h-80v560Zm280-560q17 0 28.5-11.5T520-800q0-17-11.5-28.5T480-840q-17 0-28.5 11.5T440-800q0 17 11.5 28.5T480-760Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Paste as plain text</div>
                            <div class="menu-row-hint">
                                Paste content to <?php echo $name;  ?> without formatting
                            </div>
                        </div>
                        <div class="menu-row-switch" id="pastePlainText">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                <path
                                    d="M120-220v-80h80v80h-80Zm0-140v-80h80v80h-80Zm0-140v-80h80v80h-80ZM260-80v-80h80v80h-80Zm100-160q-33 0-56.5-23.5T280-320v-480q0-33 23.5-56.5T360-880h360q33 0 56.5 23.5T800-800v480q0 33-23.5 56.5T720-240H360Zm0-80h360v-480H360v480Zm40 240v-80h80v80h-80Zm-200 0q-33 0-56.5-23.5T120-160h80v80Zm340 0v-80h80q0 33-23.5 56.5T540-80ZM120-640q0-33 23.5-56.5T200-720v80h-80Zm420 80Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Copy as plain text</div>
                            <div class="menu-row-hint">
                                Copy all text from <?php echo $name;  ?> without formatting using the 'Copy all' button
                            </div>
                        </div>
                        <div class="menu-row-switch" id="copyAllAsPlainText">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm100-200h46v-240h-36l-70 50 24 36 36-26v180Zm124 0h156v-40h-94l-2-2q21-20 34.5-34t21.5-22q18-18 27-36t9-38q0-29-22-48.5T458-600q-26 0-47 15t-29 39l40 16q5-13 14.5-20.5T458-558q15 0 24.5 8t9.5 20q0 11-4 20.5T470-486l-32 32-54 54v40Zm296 0q36 0 58-20t22-52q0-18-10-32t-28-22v-2q14-8 22-20.5t8-29.5q0-27-21-44.5T678-600q-25 0-46.5 14.5T604-550l40 16q4-12 13-19t21-7q13 0 21.5 7.5T708-534q0 14-10 22t-26 8h-18v40h20q20 0 31 8t11 22q0 13-11 22.5t-25 9.5q-17 0-26-7.5T638-436l-40 16q7 29 28.5 44.5T680-360ZM160-240h640v-480H160v480Zm0 0v-480 480Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Word counter</div>
                        </div>
                        <div class="menu-row-switch" id="wordCounter">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Dark theme</div>
                        </div>
                        <div class="menu-row-switch" id="darkTheme">

                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                <path
                                    d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm440-80h120v-560H640v560Zm-80 0v-560H200v560h360Zm80 0h120-120Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Layout reverse</div>
                            <div class="menu-row-hint">
                                Available on widescreens only
                            </div>
                        </div>
                        <div class="menu-row-switch" id="layoutReverse">

                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M560-160v-520H360v-120h520v120H680v520H560Zm-360 0v-320H80v-120h360v120H320v320H200Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Default font size</div>
                        </div>
                        <div class="menu-row-buttons" id="fontSize">
                            <div role="button" class="button" id="b-font-size-minus" title="Decrease font size">
                                - </div>
                            <div class="menu-row-value" id="b-font-size">16</div>
                            <div role="button" class="button" id="b-font-size-plus" title="Increase font size">
                                +
                            </div>
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M256-240h84l44-122h192l44 122h84L522-720h-84L256-240Zm152-192 70-198h4l70 198H408ZM160-80q-33 0-56.5-23.5T80-160v-640q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v640q0 33-23.5 56.5T800-80H160Zm0-80h640v-640H160v640Zm0-640v640-640Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Default font type</div>
                        </div>
                        <div class="menu-row-buttons">
                            <div role="button" class="button" id="b-font-type" title="Select font type">
                                Font type</div>
                        </div>

                    </div>




                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M480-400q-50 0-85-35t-35-85v-240q0-50 35-85t85-35q50 0 85 35t35 85v240q0 50-35 85t-85 35Zm0-240Zm-40 520v-123q-104-14-172-93t-68-184h80q0 83 58.5 141.5T480-320q83 0 141.5-58.5T680-520h80q0 105-68 184t-172 93v123h-80Zm40-360q17 0 28.5-11.5T520-520v-240q0-17-11.5-28.5T480-800q-17 0-28.5 11.5T440-760v240q0 17 11.5 28.5T480-480Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Microphone toggle shortcut</div>
                            <div class="menu-row-hint">
                                Avoid using shortcuts already used by your browser to prevent conflicts.
                            </div>
                        </div>
                        <div class="menu-row-shortcut" id="shortCutMic">ESC</div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Zm0-82q26-36 45-75t31-83H404q12 44 31 83t45 75Zm-104-16q-18-33-31.5-68.5T322-320H204q29 50 72.5 87t99.5 55Zm208 0q56-18 99.5-55t72.5-87H638q-9 38-22.5 73.5T584-178ZM170-400h136q-3-20-4.5-39.5T300-480q0-21 1.5-40.5T306-560H170q-5 20-7.5 39.5T160-480q0 21 2.5 40.5T170-400Zm216 0h188q3-20 4.5-39.5T580-480q0-21-1.5-40.5T574-560H386q-3 20-4.5 39.5T380-480q0 21 1.5 40.5T386-400Zm268 0h136q5-20 7.5-39.5T800-480q0-21-2.5-40.5T790-560H654q3 20 4.5 39.5T660-480q0 21-1.5 40.5T654-400Zm-16-240h118q-29-50-72.5-87T584-782q18 33 31.5 68.5T638-640Zm-234 0h152q-12-44-31-83t-45-75q-26 36-45 75t-31 83Zm-200 0h118q9-38 22.5-73.5T376-782q-56 18-99.5 55T204-640Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Language change shortcut</div>
                            <div class="menu-row-hint">
                                Avoid using shortcuts already used by your browser to prevent conflicts.
                            </div>
                        </div>
                        <div class="menu-row-shortcut" id="shortCutLanguageQuickSwitch">CTRL + Q</div>
                    </div>


                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M360-840v-80h240v80H360Zm80 440h80v-240h-80v240Zm40 320q-74 0-139.5-28.5T226-186q-49-49-77.5-114.5T120-440q0-74 28.5-139.5T226-694q49-49 114.5-77.5T480-800q62 0 119 20t107 58l56-56 56 56-56 56q38 50 58 107t20 119q0 74-28.5 139.5T734-186q-49 49-114.5 77.5T480-80Zm0-80q116 0 198-82t82-198q0-116-82-198t-198-82q-116 0-198 82t-82 198q0 116 82 198t198 82Zm0-280Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Add the dictated text to the note after a pause not longer than
                                (seconds)</div>
                            <div class="menu-row-hint">
                                Minimum recommended: 1.5 seconds. A lower value might return results with lower
                                accuracy.
                            </div>
                        </div>
                        <div class="menu-row-buttons" id="waitForFinalResultMS">
                            <div role="button" class="button" id="b-waitForFinalResultMS-minus"
                                title="Decrease font size">
                                - </div>
                            <div class="menu-row-value" id="b-waitForFinalResultMS"></div>
                            <div role="button" class="button" id="b-waitForFinalResultMS-plus"
                                title="Increase font size">
                                +
                            </div>
                        </div>
                    </div>


                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                <path
                                    d="M400-40v-80H200q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h200v-80h80v880h-80ZM200-200h200v-80H280v-80h120v-80H280v-80h120v-80H280v-80h120v-80H200v560Zm360-560v-80h200q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H560v-80h200v-560H560Zm0 320v-80h120v80H560Zm0-160v-80h120v80H560ZM400-480Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Select the longest transcription from all available alternatives
                                as the final output, regardless of its confidence level</div>
                            <div class="menu-row-hint">
                                This option may help some users who experience missing text after long dictations. It
                                selects the longest segment, even if it has low confidence levels, in contrast to the
                                Google speech-to-text API, which may choose more confident transcriptions, even if they
                                are much shorter.</div>
                        </div>
                        <div class="menu-row-switch" id="useResultWithLongestText">
                        </div>
                    </div>



                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                <path
                                    d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H160v400Zm140-40-56-56 103-104-104-104 57-56 160 160-160 160Zm180 0v-80h240v80H480Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">[For developer] View data provided by Google speech-to-text API
                            </div>
                        </div>
                        <div class="menu-row-switch" id="developerMode">
                        </div>
                    </div>



                    <!-- <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M440-280h80v-240h-80v240Zm40-320q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm0 520q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text" id="app-version">App version _</div>
                        </div>

                    </div> -->



                </div>
            </div>
        </div>









        <div class="background-overlay hidden">
            <div id="menu-note-download" class="menu">
                <div class="menu-top">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-download">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>

                    </div>
                    <div class="menu-title">DOWNLOAD THIS NOTE</div>

                    <div role="button" class="button close" title="close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#FFFFFF">
                            <path d="M0 0h34v24H0V0z" fill="none"></path>
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                            </path>
                        </svg>
                        </button>
                    </div>

                </div>
                <div id="menu-content-note-download" class="menu-content">

                    <div class="menu-row">
                        <div class="menu-row-buttons">
                            <div role="button" class="button" id="b-download-doc" title="download a .doc file">

                                <?xml version="1.0" encoding="UTF-8"?>
                                <svg height="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#E2E5E7;"
                                        d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z">
                                    </path>
                                    <path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z">
                                    </path>
                                    <polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 "></polygon>
                                    <path style="fill:darkblue" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16
	V416z"></path>
                                    <g>
                                        <path style="fill:#FFFFFF;" d="M92.576,384c-4.224,0-8.832-2.32-8.832-7.936v-72.656c0-4.608,4.608-7.936,8.832-7.936h39.296
		c58.464,0,57.168,88.528,1.136,88.528H92.576z M100.64,311.072v57.312h31.232c34.544,0,36.064-57.312,0-57.312H100.64z">
                                        </path>
                                        <path style="fill:#FFFFFF;" d="M228,385.28c-23.664,1.024-48.24-14.72-48.24-46.064c0-31.472,24.56-46.944,48.24-46.944
		c22.384,1.136,45.792,16.624,45.792,46.944C273.792,369.552,250.384,385.28,228,385.28z M226.592,308.912
		c-14.336,0-29.936,10.112-29.936,30.32c0,20.096,15.616,30.336,29.936,30.336c14.72,0,30.448-10.24,30.448-30.336
		C257.04,319.008,241.312,308.912,226.592,308.912z"></path>
                                        <path style="fill:#FFFFFF;" d="M288.848,339.088c0-24.688,15.488-45.92,44.912-45.92c11.136,0,19.968,3.328,29.296,11.392
		c3.456,3.184,3.84,8.816,0.384,12.4c-3.456,3.056-8.704,2.688-11.776-0.384c-5.232-5.504-10.608-7.024-17.904-7.024
		c-19.696,0-29.152,13.952-29.152,29.552c0,15.872,9.328,30.448,29.152,30.448c7.296,0,14.08-2.96,19.968-8.192
		c3.952-3.072,9.456-1.552,11.76,1.536c2.048,2.816,3.056,7.552-1.408,12.016c-8.96,8.336-19.696,10-30.336,10
		C302.8,384.912,288.848,363.776,288.848,339.088z"></path>
                                    </g>
                                    <path style="fill:#CAD1D8;"
                                        d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z">
                                    </path>
                                </svg>
                                <span style="padding-left: 12px;">download a .doc file</span>
                            </div>






                            <div role="button" class="button" id="b-download-txt" title="download a .txt file">
                                <svg height="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#E2E5E7;"
                                        d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z">
                                    </path>
                                    <path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z">
                                    </path>
                                    <polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 "></polygon>
                                    <path style="fill:darkorange;" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16
        V416z"></path>
                                    <g>
                                        <path style="fill:#FFFFFF;" d="M132.784,311.472H110.4c-11.136,0-11.136-16.368,0-16.368h60.512c11.392,0,11.392,16.368,0,16.368
            h-21.248v64.592c0,11.12-16.896,11.392-16.896,0v-64.592H132.784z"></path>
                                        <path style="fill:#FFFFFF;" d="M224.416,326.176l22.272-27.888c6.656-8.688,19.568,2.432,12.288,10.752
            c-7.68,9.088-15.728,18.944-23.424,29.024l26.112,32.496c7.024,9.6-7.04,18.816-13.952,9.344l-23.536-30.192l-23.152,30.832
            c-6.528,9.328-20.992-1.152-13.68-9.856l25.696-32.624c-8.048-10.096-15.856-19.936-23.664-29.024
            c-8.064-9.6,6.912-19.44,12.784-10.48L224.416,326.176z"></path>
                                        <path style="fill:#FFFFFF;" d="M298.288,311.472h375.92c-11.136,0-11.136-16.368,0-16.368h60.496c11.392,0,11.392,16.368,0,16.368
            h-21.232v64.592c0,11.12-16.896,11.392-16.896,0V311.472z"></path>
                                    </g>
                                    <path style="fill:#CAD1D8;"
                                        d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z">
                                    </path>

                                </svg>
                                <span style="padding-left: 12px;">download a .txt file</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="background-overlay hidden">
            <div id="menu-font-type" class="menu">
                <div class="menu-top">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-type">
                            <polyline points="4 7 4 4 20 4 20 7"></polyline>
                            <line x1="9" y1="20" x2="15" y2="20"></line>
                            <line x1="12" y1="4" x2="12" y2="20"></line>
                        </svg>

                    </div>
                    <div class="menu-title">SELECT FONT TYPE</div>

                    <div role="button" class="button close" title="close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#FFFFFF">
                            <path d="M0 0h34v24H0V0z" fill="none"></path>
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                            </path>
                        </svg>

                    </div>

                </div>
                <div id="menu-content-font" class="menu-content">

                </div>
            </div>
        </div>




        <div id="snackbar"></div>

        <div id="overlay-speech">

            <div id="speech-box" class="hidden">
                <!-- <div id="speech-level"></div> -->
                <div id="speech-status" class="hidden"></div>

                <div id="speech-text" class="speech-dots"></div>

            </div>
        </div>
    </div><!--app END-->


    <div class="page" id="page-1">
        <div class="page-content">
            <div class="page-col">
                <p><?php echo $name;  ?> is a free multilingual speech-to-text application aimed at assisting you with
                    transcription of notes, documents, books, reports or blog posts by using your voice. This app
                    also
                    features a customizable voice commands list, allowing users to add punctuation marks, frequently
                    used phrases, and some app actions (undo, redo, make a new paragraph).</p>
                <p><?php echo $name;  ?> is used daily by students, teachers, writers, bloggers around the world.</p>
                <p>It will assist you in minimizing your writing efforts significantly.</p>
                <p>Voice-to-text software is exceptionally valuable for people who have difficulty using their hands
                    due
                    to trauma, people with dyslexia or disabilities that limit the use of conventional input
                    devices.
                    Speech to text technology can also be used to improve accessibility for those with hearing
                    impairments, as it can convert speech into text.
                </p>
                <p>It can also be used as a tool for learning a proper pronunciation of words in the foreign
                    language,
                    in addition to helping a person develop fluency with their speaking skills.</p>



            </div>
            <div class="page-col">
                <img loading="lazy" width="640" height="360" src="img/t1.webp"
                    alt="using <?php echo $name;  ?> to dictate a text">

                <p>Accuracy levels higher than 90% should be expected. It varies depending on the language and the
                    speaker.</p>
                <p>No download, installation or registration is required. Just click the microphone button and start
                    dictating.</p>
                <p>Speech to text technology is quickly becoming an essential tool for those looking to save time
                    and
                    increase their productivity.</p>



            </div>
        </div>
    </div>


    <div class="page" id="page-2">
        <div class="page-content">

            <div class="page-col">
                <p class="page-title">Features</p>

                <div class="row">
                    <div class="feature-box">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                                <path fill="currentColor"
                                    d="m40.05 32.75-2.5-2.5q2.4-2.55 3.675-5.225T42.5 18.45q0-3.9-1.275-6.575Q39.95 9.2 37.55 6.65l2.5-2.5q2.8 2.9 4.375 6.325Q46 13.9 46 18.45t-1.575 7.975Q42.85 29.85 40.05 32.75Zm-6.95-7.1-2.5-2.5q.9-1 1.4-2.125.5-1.125.5-2.575 0-1.45-.5-2.575-.5-1.125-1.4-2.125l2.5-2.5q1.3 1.4 2.1 3.275t.8 3.925q0 2.05-.8 3.925t-2.1 3.275Zm-15.1.3q-3.3 0-5.4-2.1-2.1-2.1-2.1-5.4 0-3.3 2.1-5.4 2.1-2.1 5.4-2.1 3.3 0 5.4 2.1 2.1 2.1 2.1 5.4 0 3.3-2.1 5.4-2.1 2.1-5.4 2.1ZM2 42v-4.7q0-1.9.95-3.225Q3.9 32.75 5.4 32q2.55-1.3 6.025-2.15Q14.9 29 18 29t6.55.85q3.45.85 6 2.15 1.5.75 2.475 2.075Q34 35.4 34 37.3V42Zm3-3h36v-1.7q0-.8-.425-1.475T29.35 34.7q-2.4-1.35-5.45-2.025Q20.85 32 18 32q-2.85 0-5.925.725Q9 33.45 6.6 34.7q-.7.35-1.15 1.075Q5 36.5 5 37.3Zm13-16.05q1.95 0 3.225-1.275Q22.5 20.4 22.5 18.45q0-1.95-1.275-3.225Q19.95 13.95 18 13.95q-1.95 0-3.225 1.275Q13.5 16.5 13.5 18.45q0 1.95 1.275 3.225Q16.05 22.95 18 22.95Zm0-4.5ZM18 39Z">
                                </path>
                            </svg>

                        </p>
                        <p>Powerful real-time continuous speech recognition</p>
                    </div>
                    <div class="feature-box">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                                <path fill="currentColor"
                                    d="M24 42v-3.55l10.8-10.8 3.55 3.55L27.55 42ZM6 31.5v-3h15v3Zm34.5-2.45-3.55-3.55 1.45-1.45q.4-.4 1.05-.4t1.05.4l1.45 1.45q.4.4.4 1.05t-.4 1.05ZM6 23.25v-3h33.5v3ZM6 15v-3h33.5v3Z">
                                </path>
                            </svg>
                        </p>
                        <p>Creation of text notes, emails, blog posts, reports and more.</p>
                    </div>
                    <div class="feature-box">
                        <p><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                                <path fill="currentColor"
                                    d="M11.1 44q-2.2 0-3.725-1.525T5.85 38.75V32.5h6.35V4l3 3 3-3 2.95 3 3-3 3 3 3-3 3 3 3-3 3 3 3-3v34.75q0 2.2-1.525 3.725T36.9 44Zm25.8-3q1 0 1.625-.625t.625-1.625V9H15.2v23.5h19.45v6.25q0 1 .625 1.625T36.9 41ZM17.85 16.9v-3h12v3Zm0 6.7v-3h12v3Zm16.65-6.7q-.6 0-1.05-.45Q33 16 33 15.4q0-.6.45-1.05.45-.45 1.05-.45.6 0 1.05.45.45.45.45 1.05 0 .6-.45 1.05-.45.45-1.05.45Zm0 6.45q-.6 0-1.05-.45-.45-.45-.45-1.05 0-.6.45-1.05.45-.45 1.05-.45.6 0 1.05.45.45.45.45 1.05 0 .6-.45 1.05-.45.45-1.05.45ZM11.05 41h30.6v-5.5H8.85v3.25q0 1 .625 1.625T11.05 41Zm-2.2 0v-5.5V41Z">
                                </path>
                            </svg>
                        </p>
                        <p>
                            Custom voice commands
                        </p>
                    </div>
                    <div class="feature-box">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                                <path fill="currentColor"
                                    d="M24 44q-4.2 0-7.85-1.575Q12.5 40.85 9.8 38.15q-2.7-2.7-4.25-6.375Q4 28.1 4 23.9t1.55-7.825Q7.1 12.45 9.8 9.75t6.35-4.225Q19.8 4 24 4q4.2 0 7.85 1.525Q35.5 7.05 38.2 9.75q2.7 2.7 4.25 6.325Q44 19.7 44 23.9t-1.55 7.875Q40.9 35.45 38.2 38.15t-6.35 4.275Q28.2 44 24 44Zm0-2.9q1.75-1.8 2.925-4.125Q28.1 34.65 28.85 31.45H19.2q.7 3 1.875 5.4Q22.25 39.25 24 41.1Zm-4.25-.6q-1.25-1.9-2.15-4.1-.9-2.2-1.5-4.95H8.6Q10.5 35 13 37.025q2.5 2.025 6.75 3.475Zm8.55-.05q3.6-1.15 6.475-3.45 2.875-2.3 4.625-5.55h-7.45q-.65 2.7-1.525 4.9-.875 2.2-2.125 4.1Zm-20.7-12h7.95q-.15-1.35-.175-2.425-.025-1.075-.025-2.125 0-1.25.05-2.225.05-.975.2-2.175h-8q-.35 1.2-.475 2.15T7 23.9q0 1.3.125 2.325.125 1.025.475 2.225Zm11.05 0h39.4q.2-1.55.25-2.525.05-.975.05-2.025 0-1-.05-1.925T29.4 19.5H18.65q-.2 1.55-.25 2.475-.05.925-.05 1.925 0 1.05.05 2.025.05.975.25 2.525Zm13.75 0h8q.35-1.2.475-2.225Q41 25.2 41 23.9q0-1.3-.125-2.25T40.4 19.5h-7.95q.15 1.75.2 2.675.05.925.05 1.725 0 1.1-.075 2.075-.075.975-.225 2.475Zm-.5-11.95h7.5q-1.65-3.45-4.525-5.75Q32 8.45 28.25 7.5q1.25 1.85 2.125 4t1.525 5Zm-12.7 0h9.7q-.55-2.65-1.85-5.125T24 7q-1.6 1.35-2.7 3.55-1.1 2.2-2.1 5.95Zm-10.6 0h7.55q.55-2.7 1.4-4.825.85-2.125 2.15-4.125-3.75.95-6.55 3.2T8.6 16.5Z">
                                </path>
                            </svg>
                        </p>
                        <p>More than 70 languages supported</p>
                    </div>

                </div>
                <p></p>

                <p class="page-title">Technology</p>

                <p><?php echo $name;  ?> is using Google Speech recognition to convert the speech into text in real-time.
                    This
                    technology is supported by Chrome browser (for desktop) and some browsers on Android OS. Other
                    browsers have not implemented speech recognition yet.</p>
                <p class="highlight-1">Note: iPhones and iPads are not supported</p>
                <p></p>

                <p class="page-title">List of supported languages:</p>

                <p>
                    Afrikaans, Albanian, Amharic, Arabic, Armenian, Azerbaijani, Basque, Bengali, Bosnian, Bulgarian,
                    Burmese, Catalan, Chinese (Mandarin, Cantonese), Croatian, Czech, Danish, Dutch, English, Estonian,
                    Filipino, Finnish, French, Galician, Georgian, German, Greek, Gujarati, Hebrew, Hindi, Hungarian,
                    Icelandic, Indonesian, Italian, Japanese, Javanese, Kannada, Kazakh, Khmer, Kinyarwanda, Korean,
                    Lao, Latvian, Lithuanian, Macedonian, Malay, Malayalam, Marathi, Mongolian, Nepali, Norwegian
                    Bokmål, Persian, Polish, Portuguese, Punjabi, Romanian, Russian, Serbian, Sinhala, Slovak,
                    Slovenian, Southern Sotho, Spanish, Sundanese, Swahili, Swati, Swedish, Tamil, Telugu, Thai, Tsonga,
                    Tswana, Turkish, Ukrainian, Urdu, Uzbek, Venda, Vietnamese, Xhosa, Zulu.
                </p>


            </div>

        </div>
    </div>




    <div class="page" id="page-3">
        <div class="page-content">
            <div class="page-col">
                <h3>Instructions for web app on desktop (Windows, Mac, Linux OS)</h3>
                <br>
                <p><strong>Requirements:</strong> the latest version of the <a class="help-link"
                        href="https://www.google.com/chrome/browser/" rel="nofollow" target="_blank">Google Chrome
                        [↗]</a> browser (other browsers are not supported).</p>
                <p>1. Connect a high-quality microphone to your computer.</p>
                <p>2. Make sure your microphone is set as the default recording device on your browser.</p>
                <p>To go directly to microphone's settings paste the line below into Chrome's URL bar.</p>
                <p class="p-quote">chrome://settings/content/microphone</p>
                <br>
                <p><img loading="lazy" width="640" height="360" src="img/default-audio-input-mic.webp"
                        alt="Set microphone as default recording device"
                        title="Set microphone as default recording device"></p>

                <p></p>
                <p>To capture speech from video/audio content on the web or from a file stored on your device,
                    select
                    'Stereo Mix' as the default audio input.</p>

                <p>3. Select the language you would like to speak (Click the button on the top right corner).</p>
                <p>4. Click the "microphone" button. Chrome browser will request your permission to access your
                    microphone. Choose "allow".</p>
                <p><img loading="lazy" width="640" height="360" src="img/first-time-allow-mic.webp"
                        alt="Allow microphone access" title="Allow microphone access">
                </p>
                <p>5. You can start dictating!</p>


            </div>
            <div class="page-col">
                <h3>Instructions for the web app on a mobile and for the android app (the android app is no longer
                    supported)</h3>
                <br>
                <p><strong>Requirements:</strong>
                    <br>- <a rel="nofollow" class="help-link"
                        href="https://play.google.com/store/apps/details?id=com.google.android.googlequicksearchbox"
                        target="_blank">Google app [↗]</a> installed on your Android device.
                    <br>- Any of the supported browsers if you choose to use the web app.
                </p>
                <p>Supported android browsers (not a full list):
                    <br>Chrome browser (recommended), Edge, Opera, Brave, Vivaldi.
                </p>
                <p>1. Tap the button with the language name (on a web app) or language code (on android app)
                    on the top right corner to select your language.</p>
                <p>2. Tap the microphone button. The <?php echo $name;  ?> app will ask for permission to record audio.
                    Choose
                    'allow' to enable microphone access.</p>
                <p>
                </p>
                <figure>
                    <img loading="lazy" width="640" height="360" src="img/mobile-first-time-use.webp"
                        alt="instructions for the web app" title="instructions for the web app">
                    <figcaption class="img-caption">web app</figcaption>
                </figure>
                <p></p>

                <p>
                </p>
                <figure>
                    <img loading="lazy" width="640" height="300" src="img/android-first-time-use.webp"
                        alt="instructions for the android app" title="instructions for the android app">
                    <figcaption class="img-caption">android app</figcaption>
                </figure>
                <p></p>

                <p>3. You can start dictating!</p>

            </div>
        </div>
    </div>



    <div class="page" id="page-4">
        <div class="page-content">
            <div class="page-col">
                <h2>Common problems on a desktop (Windows, Mac, Linux OS)</h2>
                <br>
                <h3>Error: '<?php echo $name;  ?> cannot access your microphone'.</h3>
                <p>Please give permission to access your microphone.</p>
                <p>Click on the "padlock" icon next to the URL bar, find the "microphone" option, and choose
                    "allow".
                </p>
                <p><img loading="lazy" width="640" height="360" src="img/allow-microphone.webp"
                        alt="Allow microphone access" title="Allow microphone access"></p>
                <h3>Error: 'No speech was detected. Please try again'.</h3>
                <p>If you get this error while you are speaking, make sure your microphone is set as the default
                    recording
                    device on your browser [see step 2].</p>
                <p>If you're using a headset, make sure the mute switch on the cord is off.</p>
                <h3>Error: 'Network error'</h3>
                <p>The internet connection is poor. Please try again later.</p>
                <h3>The result won't transfer to the "editor".</h3>
                <p>The result confidence is not high enough or there is a background noise. An accumulation of long
                    text
                    in the buffer can also make the engine stop responding, please make some pauses in the speech.
                </p>
                <h3>The results are wrong.</h3>
                <p>Please speak loudly and clearly. Speaking clearly and consistently will help the software
                    accurately recognize your words.</p>
                <p>Reduce background noise. Background noise from fans, air conditioners, refrigerators, etc.
                    can drop the accuracy significantly. Try to reduce background noise as much as possible.</p>
                <p>Speak directly into the microphone. Speaking directly into the microphone enhances the
                    accuracy of the software. Avoid speaking too far away from the microphone.</p>
                <p>Speak in complete sentences. Speaking in complete sentences will help the software better
                    recognize the context of your words.</p>
                <h3>Can I upload an audio file and get the transcription?</h3>
                <p>No, this feature is not available.</p>
                <h3>How do I transcribe an audio (video) file on my PC or from the web?</h3>
                <p>Playback your file in any player and hit the 'mic' button on the <?php echo $name;  ?> website to start
                    capturing
                    the speech. For better
                    results select "Stereo Mix" as the default recording device on your browser, if you are
                    accessing
                    <?php echo $name;  ?> and the file from the same device.</p>
                <h3>I don't see the "Stereo mix" option (Windows OS)</h3>
                <p>"Stereo Mix" might be hidden or it's not supported by your system. If you are a Windows user go
                    to
                    'Control panel'
                    → Hardware and Sound → Sound → 'Recording' tab. Right-click on a blank area in the pane and make
                    sure both "View Disabled Devices" and "View Disconnected Devices" options are checked. If
                    "Stereo
                    Mix" appears, you can enable it by right clicking on it and choosing 'enable'. If "Stereo Mix"
                    hasn't appeared, it means it's not supported by your system. You can try using a third-party
                    program
                    such as "Virtual Audio Cable" or "VB-Audio Virtual Cable" to create a virtual audio device that
                    includes "Stereo Mix" functionality.
                </p>
                <p><img loading="lazy" width="640" height="360" src="img/how-to-enable-stereo-mix.webp"
                        alt="How to enable 'Stereo Mix'" title="How to enable 'Stereo Mix'"></p>
                <h3>How to use the voice commands list?</h3>
                <p><img loading="lazy" width="640" height="360" src="img/voice-commands-list.webp"
                        alt="custom voice commands" title="custom voice commands"></p>
                <p>
                    The voice commands list allows you to insert the punctuation, some text, or run some preset
                    functions using only your voice.

                    <br>
                    <br>On the first column you enter your voice command. On the second column you enter a
                    punctuation
                    mark or a function. Voice commands are case-sensitive.
                    <br>
                    <br>Available functions:
                    <br>#newparagraph (add a new paragraph),
                    <br>#newline (add a new line),
                    <br>#undo (undo the last change),
                    <br>#redo (redo the last change)
                </p>
                <p>
                    To use the function above make a pause in your speech until all previous dictated speech appears
                    in
                    your note, then say "insert a new paragraph" and wait for the command execution.
                </p>

                <h3 id="suggest-an-update">Found a mistake in the voice commands list or want to suggest an update?
                    Follow the steps below:
                </h3>

                <ol>
                    <li>Navigate to the <a href="#app">voice commands list [↑]</a> on this website.</li>
                    <li>Click on the edit button to update or add new punctuation marks you think other users might find
                        useful in your language.</li>
                    <li>Click on the "Export" button located above the voice commands list to save your list in JSON
                        format to your device.</li>
                </ol>

                <p>Next, send us your file as an attachment via email. You can find the email address at the bottom
                    of the page. Feel free to include a brief description of the
                    mistake or the updates you're suggesting in the email body.</p>

                <p>Your contribution to the improvement of the services is appreciated.</p>

                <h3>Can I prevent my custom voice commands from disappearing after closing the browser?</h3>
                <p><?php echo $name;  ?> by default saves your data inside your browser's cache. If your browsers clears the
                    cache your data will be deleted.
                    <br>However, you can export your custom voice commands to your device and import them when you
                    need
                    them by clicking the corresponding buttons above the list.
                    <br><?php echo $name;  ?> is using JSON format to store your voice commands.
                    You can create a .txt file in this format on your device and then import it into <?php echo $name;  ?>.
                    <br>An example of JSON format is shown below:
                </p>
                <p>
                    <span class="code">
                        {
                        <br>"period": ".",
                        <br>"full stop": ".",
                        <br>"question mark": "?",
                        <br>"new line": "#newline",
                        <br>"new paragraph": "#newparagraph"
                        <br>}
                    </span>
                </p>


                <h3>I lost my dictated work after closing the browser.</h3>
                <p><?php echo $name;  ?> doesn't store any text that you dictate. Please use the "autosave" option or click
                    the
                    "download" button (recommended). The "autosave" option will try to store your work inside your
                    browser's cache, where it will remain until you switch the "text autosave" option off, clear the
                    cache manually, or if your browser clears the cache on exit.
                </p>


            </div>
            <div class="page-col">
                <h2>Common problems on the Android app</h2>
                <br>
                <h3>I get the message: 'Speech recognition is not available'.</h3>
                <p>'Google app' from Play store is required for <?php echo $name;  ?> to work. <a rel="nofollow"
                        class="help-link"
                        href="https://play.google.com/store/apps/details?id=com.google.android.googlequicksearchbox"
                        target="_blank">download [↗]</a> </p>

                <h3>Where does <?php echo $name;  ?> store the saved files?</h3>
                <p>Version 1.5 and above stores the files in the internal memory.</p>
                <p>Version 1.4.9 and below stores the files inside the "<?php echo $name;  ?>" folder at the root directory
                    of
                    your device.</p>

                <h3>After updating the app from version 1.x.x to version 2.x.x my files have disappeared</h3>
                <p>As a result of recent updates, the Android operating system has implemented restrictions that
                    prevent
                    users from accessing folders within the Android root directory, including <?php echo $name;  ?>'s folder.
                    However, your old files can still be imported manually by selecting the "import" button within
                    the
                    <?php echo $name;  ?> application.</p>
                <p><img loading="lazy" width="640" height="300" src="img/speechtexter-android-import-files (1).webp"
                        alt="<?php echo $name;  ?> import files" title="<?php echo $name;  ?> import files">
                </p>

                <h2>Common problems on the mobile web app</h2>
                <br>
                <h3>Error: '<?php echo $name;  ?> cannot access your microphone'.</h3>
                <p>Please give permission to access your microphone.</p>

                <p>Tap on the "padlock" icon next to the URL bar, find the "microphone" option and choose "allow".
                </p>
                <p><img loading="lazy" width="640" height="360" src="img/speechtexter-mobile-enable-microphone (2).webp"
                        alt="<?php echo $name;  ?> microphone permission" title="<?php echo $name;  ?> microphone permission">
                </p>

            </div>

        </div>
    </div>





    <!--------------FOOTER-------------->

    <div id="footer">

        <div class="page-content">
            <div class="page-col">
                <div class="footer-title">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20">
                        <path fill="currentColor"
                            d="M10.021 11.646q.667 0 1.146-.49.479-.489.479-1.156 0-.667-.479-1.156-.479-.49-1.146-.49-.688 0-1.177.479-.49.479-.49 1.167 0 .688.49 1.167.489.479 1.177.479ZM10 16.5q.938-.312 1.688-.844.75-.531 1.395-1.323l-1.395-1.395q-.376.229-.803.343-.427.115-.864.115-1.417 0-2.417-.99-1-.989-1-2.406 0-1.417 1-2.406 1-.99 2.417-.99 1.417 0 2.396.99.979.989.979 2.406 0 .458-.115.896-.114.437-.343.812l1.124 1.167q.396-.833.626-1.75.229-.917.229-1.854V5.354L10 3.542 5.083 5.354v3.917q0 2.479 1.386 4.521Q7.854 15.833 10 16.5Zm0 1.833q-2.896-.708-4.781-3.302-1.886-2.593-1.886-5.76V4.146L10 1.667l6.667 2.479v5.125q0 3.167-1.886 5.76-1.885 2.594-4.781 3.302Zm.208-8.312Z" />
                    </svg>
                    &nbsp;
                    LEGAL
                </div>
                <ul>
                    <li><a href="terms">TERMS OF USE</a>
                    </li>
                    <li><a href="privacy">PRIVACY POLICY</a>
                    </li>
                </ul>

            </div>
            <div class="page-col">
                <div class="footer-title">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20">
                        <path fill="currentColor"
                            d="M1.062 14.5q.188-2.188 1.428-3.979 1.239-1.792 3.156-2.875L4.062 4.917q-.104-.188-.052-.375.052-.188.24-.292.167-.104.375-.062.208.041.313.229l1.604 2.791Q8.208 6.5 10.01 6.5t3.469.708l1.583-2.791q.105-.188.313-.229.208-.042.375.062.188.104.24.292.052.187-.052.375l-1.584 2.729q1.917 1.083 3.156 2.875 1.24 1.791 1.428 3.979ZM6 13.396q.417 0 .708-.292.292-.292.292-.708 0-.417-.292-.708-.291-.292-.708-.292t-.708.292Q5 11.979 5 12.396q0 .416.292.708.291.292.708.292Zm8 0q.417 0 .708-.292.292-.292.292-.708 0-.417-.292-.708-.291-.292-.708-.292t-.708.292q-.292.291-.292.708 0 .416.292.708.291.292.708.292Z" />
                    </svg>
                    &nbsp;
                    ANDROID APP
                </div>
                <ul>

                    <li>No longer supported or updated
                    </li>
                    <!-- <li>Play store (no longer supported)
                    </li> -->
                </ul>
            </div>
            <div class="page-col">
                <div class="footer-title">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20">
                        <path fill="currentColor"
                            d="M3.5 16q-.625 0-1.062-.438Q2 15.125 2 14.5v-9q0-.625.438-1.062Q2.875 4 3.5 4h13q.625 0 1.062.438Q18 4.875 18 5.5v9q0 .625-.438 1.062Q17.125 16 16.5 16Zm6.5-5L3.5 7.271V14.5h13V7.271Zm0-1.771L16.5 5.5h-13ZM3.5 7.271V5.5v9Z" />
                    </svg>
                    &nbsp;
                    CONTACT
                </div>

                <div id="contact-link" style="display:inline">Please enable javascript</div>

            </div>
        </div>




        <div id="footer-b">
            <p>copyright &copy; 2014 - <span id="copyright-year">2024</span> <a
                    href='https://www.<?php echo $name;  ?>.com'>www.<?php echo $name;  ?>.com</a>. All Rights Reserved.</p>

        </div>
        <!-- footer-b end-->
    </div> <!-- footer end-->

    <script type="text/javascript">
        let spanYear = document.getElementById('copyright-year');
        spanYear.textContent = new Date().getFullYear();

        var encEmail = "aW5mb0BzcGVlY2h0ZXh0ZXIuY29t"; //info email
        const contactDiv = document.getElementById("contact-link");
        var decEmail = atob(encEmail);
        contactDiv.innerHTML = '<a id="contact" class="link-footer" href="mailto:' + decEmail + '">' + decEmail + '</a></p>';
    </script>


    <script src="script.js?v=39" defer='defer'></script>


</body>

</html>