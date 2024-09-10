<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>pdf</title>
        <style>
            :root {
                --primary-color: #ff8041;
                --secondary-color: #e5282a;
            }

            *,
            *::before,
            *::after {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            body {
                width: 100%;
                font-size: 12px;
                line-height: 120%;
                font-size: 1rem;
                font-family: "Bariol", "Rubik", "Sofia Sans Condensed", Nunito,
                    Montserrat, "HK Grotesk", -apple-system, BlinkMacSystemFont,
                    "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans",
                    "Helvetica Neue", sans-serif;
                line-height: 160%;
                color: #1f2e54;
            }

            .container {
                width: 90%;
                min-width: 500px;
                font-size: 14px;
                margin: 0 auto;
                margin-bottom: 0;
                background-color: #fff;
            }

            .text-right {
                text-align: right;
            }

            .text-center {
                text-align: center;
            }

            .text-8 {
                font-size: 8px;
            }

            .text-14 {
                font-size: 14px;
            }

            .text-16 {
                font-size: 16px;
            }

            .text-24 {
                font-size: 24px;
            }

            .text-uppercase {
                text-transform: uppercase;
            }

            .fw-bold {
                font-weight: bold;
            }

            .table {
                width: 100%;
                min-width: 400px;
                margin: 0 auto;
                margin-top: 40px;
            }

            .py-2 {
                padding: 16px 0;
            }

            .ps-5 {
                padding-left: 80px;
            }

            .bg-primary {
                background-color: #ff8041;
            }

            .text-primary {
                color: #ff8041;
            }

            .table-container, table {
                width: 100%;
                max-width: 100%;
                display: table;
                table-layout: fixed;
            }

            .column {
                display: table-cell;
            }

            .border > .column {
                border: 1px solid #1f2e54;
                padding: 0 8px;
            }

            .mt-2 {
                margin-top: 2px;
            }

            .mt-5 {
                margin-top: 5px;
            }

            .mt-40 {
                margin-top: 40px;
            }

            .my-3 {
                margin: 24px 0;
            }
            .p-1 {
                padding: 4px;
            }

            .no-border {
                border: none !important;
            }

            .border-right {
                border-right: 1px solid #1f2e54 !important;
            }

            .text-white {
                color: white;
            }

            .text-underline {
                text-decoration: underline;
            }

            .mt-1{
                margin-top: 8px
            }

            .m-100 {
                margin-top: 100px;
            }

            .m-top-4{
                margin-top: 32px;
            }

            .border-top {
                border-top: 1px solid #1f2e54;
            }
            .hr {
                border: 0.5px solid #1f2e54;
            }
            .border-4{
                border: 4px solid black;
            }
            .border-1{
                border: 1.5px solid black;
            }
            .position-relative {
                position: relative;
            }
            .position-absolute {
                position: absolute;
                bottom: 50%;
                right: 0;
                opacity: 0.08;
            }
            .d-inline-block{
                display: inline-block;
            }
            .footer {
                line-height: 10px;
                padding-top: 5px;
            }
        </style>
    </head>

    <body>
        
        <div class="container">
            @include('dashboard.fichier.header')
            <div class="text-center">
                <span class="bg-primary fw-bold text-white d-inline-block p-1 text-16 text-uppercase mt-1">
                    Formulaire profil des participants
                </span>
            </div>
            <div class="content  position-relative m-top-4">
                <table>
                    <tr>
                        <td>
                            <span>Region : </span>
                        </td>
                        <td>
                            <span>Province : </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Commune :</span>
                        </td>
                        <td>
                            <span>Village : </span>
                        </td>
                    </tr>
                </table>
                <hr>
                <table>
                    <tr>
                        <td>
                            <span class="fw-bold">Titre du projet mise en œuvre (sigle) :</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-bold">Partenaire : </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-bold">Type de l’activité :</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-bold">Titre de l’activité : </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-bold">Code du participant (Id  unique CNIB) :</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-bold">Nom, Prénom :</span>
                        </td>
                    </tr>
                </table>
                <hr>
                <table>
                    
                    
                    <tr>
                        <td>
                            <span class="fw-bold">Sexe :</span>
                        </td>
                        <td>
                            <span>Homme: </span>
                        </td>
                        <td>
                            <span>Femme: </span>
                        </td>
                    </tr>
                </table>
                <hr>
                <span class="fw-bold">Tranche d'âge :</span>

                <table>
                    <tr>
                        <td>
                            <span>Inférieur ou égale à 35 : </span>
                        </td>
                        <td>
                            <span>36 à 50 : </span>
                        </td>
                        <td>
                            <span>Plus de 50 : </span>
                        </td>
                    </tr>
                </table>
                <hr>
                    <table>
                    <tr>
                        <td>
                            <span class="fw-bold">Statut de résidence :</span>
                        </td>
                        <td>
                            <span>Hôte : </span>
                        </td>
                        <td>
                            <span>PDI : </span>
                        </td>
                        <td>
                            <span>Autre : </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-bold">Handicap :</span>
                        </td>
                        <td>
                            <span>Oui : </span>
                        </td>
                        <td>
                            <span>Non : </span>
                        </td>
                    </tr>

                </table>
                <hr>
                <span class="fw-bold">Si handicap, type d'handicap :</span>

                <table>
                    <tr>
                        <td>
                            <span>Moteur : </span>
                        </td>
                        <td>
                            <span>Visuel : </span>
                        </td>
                        <td>
                            <span>Handicap auditif : </span>
                        </td>
                        <td>
                            <span>Handicap de la parole : </span>
                        </td>
                    </tr>
                </table>
                <hr>
                <span class="fw-bold">Appartient à un autre groupe minoritaire :</span>

                    <table>
                    
                    <tr>
                        <td>
                            <span>Oui : </span>
                        </td>
                        <td>
                            <span>Non : </span>
                        </td>
                    </tr>
                   
                </table>
                <hr>
                <table>
                    <tr>
                        <td>
                            <span class="fw-bold">Organisation/Affiliation/Structure :</span>
                        </td>
                        <td>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-bold">Fonction/Post :</span>
                        </td>
                        <td>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-bold">Téléphone :</span>
                        </td>
                        <td>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-bold">Adresse Mail :</span>
                        </td>
                        <td>
                            
                        </td>
                        
                    </tr>
                    
                </table>
                <hr>
                <table>
                    <tr>
                        <td>
                            <span class="fw-bold">Signature :</span>
                        </td>
                        <td>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <span>Date :</span>
                        </td>
                        
                    </tr>
                </table>
            </div>

            <div class="footer text-8 m-100 border-top">
                <p class="text-center fw-bold text-primary">
                    AMR, pour un monde Juste Équitable et Meilleur !!!
                </p>
                <!--p class="text-center text-8 mt-51">
                    <span class="fw-bold">Elie Régie</span> - Société à
                    Responsabilité Limitée (SARL) au capital de 1.000.000 de
                    Francs CFA | <span class="fw-bold">Siège social</span>:
                    Secteur 49, Section 815 Lot 26 Parcelle 20 |
                    <span class="fw-bold">Adresse postale</span>: 01 BP 6943
                    Ouagadougou - Burkina Faso |
                    <span class="fw-bold">RCCM</span>: BFOUA2019B9982 |
                    <span class="fw-bold">IFU</span>: 00129466Z |
                    <span class="fw-bold">CNSS</span>: 1329764P |
                    <span class="fw-bold">Compte BOA</span> N° 008812220023 |
                    <span class="fw-bold">Régime d’imposition</span>: RSI |
                    <span class="fw-bold"
                        >CME Service des impôts de rattachement</span
                    >
                    : division fiscale du Centre Ouaga 1 |
                    <span class="fw-bold">Tél</span>: (+226) 53579595 |
                    <span class="fw-bold">Email</span> : ergie@elite.com
                </p-->
            </div>
        </div>
    </body>
</html>
