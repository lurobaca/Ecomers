<?php
/*
 * Se coloca el header del sitio
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Bourne Store</title>
        <link rel="shortcut icon" href="img/logoP.ico">

        <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">

        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="dist/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="assets/img/favicons/favicon.ico">
        <meta name="msapplication-config" content="assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }



            /*base code*/
            .animated {
                -webkit-animation-duration: 1s;
                animation-duration: 1s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
            }
            .animated.infinite {
                -webkit-animation-iteration-count: infinite;
                animation-iteration-count: infinite;
            }
            .animated.hinge {
                -webkit-animation-duration: 2s;
                animation-duration: 2s;
            }
            /*the animation definition*/
            @-webkit-keyframes rubberBand {
                0% {
                    -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1)
                }
                30% {
                    -webkit-transform: scale3d(1.25, .75, 1);
                    transform: scale3d(1.25, .75, 1)
                }
                40% {
                    -webkit-transform: scale3d(0.75, 1.25, 1);
                    transform: scale3d(0.75, 1.25, 1)
                }
                50% {
                    -webkit-transform: scale3d(1.15, .85, 1);
                    transform: scale3d(1.15, .85, 1)
                }
                65% {
                    -webkit-transform: scale3d(.95, 1.05, 1);
                    transform: scale3d(.95, 1.05, 1)
                }
                75% {
                    -webkit-transform: scale3d(1.05, .95, 1);
                    transform: scale3d(1.05, .95, 1)
                }
                100% {
                    -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1)
                }
            }
            @keyframes rubberBand {
                0% {
                    -webkit-transform: scale3d(1, 1, 1);
                    -ms-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1)
                }
                30% {
                    -webkit-transform: scale3d(1.25, .75, 1);
                    -ms-transform: scale3d(0.75, 1.25, 1);
                    -ms-transform: scale3d(1.25, .75, 1);
                    transform: scale3d(1.25, .75, 1)
                }
                40% {
                    -webkit-transform: scale3d(0.75, 1.25, 1);
                    transform: scale3d(0.75, 1.25, 1)
                }
                50% {
                    -webkit-transform: scale3d(1.15, .85, 1);
                    -ms-transform: scale3d(1.15, .85, 1);
                    transform: scale3d(1.15, .85, 1)
                }
                65% {
                    -webkit-transform: scale3d(.95, 1.05, 1);
                    -ms-transform: scale3d(.95, 1.05, 1);
                    transform: scale3d(.95, 1.05, 1)
                }
                75% {
                    -webkit-transform: scale3d(1.05, .95, 1);
                    -ms-transform: scale3d(1.05, .95, 1);
                    transform: scale3d(1.05, .95, 1)
                }
                100% {
                    -webkit-transform: scale3d(1, 1, 1);
                    -ms-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1)
                }
            }
            .rubberBand {
                -webkit-animation-name: rubberBand;
                animation-name: rubberBand
            }

            .head{
                background-image: url("img/fondoB.png");
                background-size: 100%;
            }

            .bg-menu{
                background-color: #274152;
                color: #2F595F;
            }
            .text-clear{
                color: #2F595F;
            }

        </style>
        <!-- Custom styles for this template -->
        <link href="album.css" rel="stylesheet">
    </head>