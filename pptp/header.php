<?php
error_reporting(E_ERROR | E_PARSE);
   ob_start();
    session_start();

   ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best Interior Design Company In Bangladesh | 360 Engineering and Consultancy | Interior Design Dhaka | Agargaon interior designer</title>
    <link rel="icon" href="../images/logo.png" type="image/png"style="width: 50px; height:50px;">
    <link href="../css/maplibre-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-extensions.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"/>
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Aclonica&family=Alice&family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Calistoga&family=Cantata+One&family=Castoro:ital@0;1&family=Caudex:ital,wght@0,400;0,700;1,400;1,700&family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=DM+Serif+Display:ital@0;1&family=Domine:wght@400..700&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Gilda+Display&family=Gloock&family=Judson:ital,wght@0,400;0,700;1,400&family=Kumbh+Sans:wght,YOPQ@100..900,300&family=Lexend+Deca:wght@100..900&family=Lexend:wght@100..900&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Marcellus&family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&family=PT+Serif+Caption:ital@0;1&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Prata&family=Supermercado+One&family=Tenor+Sans&family=Ultra&family=Vidaloka&family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&family=Alata&family=Arsenal:ital,wght@0,400;0,700;1,400;1,700&family=Baskervville:ital,wght@0,400..700;1,400..700&family=Cardo:ital,wght@0,400;0,700;1,400&family=Cormorant:ital,wght@0,300..700;1,300..700&family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Figtree:ital,wght@0,300..900;1,300..900&family=Jost:ital,wght@0,100..900;1,100..900&family=League+Spartan:wght@100..900&family=M+PLUS+Rounded+1c&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Ovo&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Sofia&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
      <style>
     .login_btn{
       background: #7d7d7d;
        color: #fff; 
        font-family: Mona Sans, sans-serif;
        font-size: 14px;
    }
          .login_btn:hover{
      background: #7d7d7d;
    color: #fff; 
}
          .trnsfr_lbl{
    font-family: Mona Sans, sans-serif;
    text-align: center;
    font-size: 14px;
}

@media (max-width: 422px) {
.trnsfr_lbl{
    font-size: 14px;
}
}
@media (max-width: 355px) {
.trnsfr_lbl{
    font-size: 13px;
}
}
@media (max-width: 333px) {
.trnsfr_lbl{
    font-size: 12px;
}
}
@media (max-width: 315px) {
.trnsfr_lbl{
    font-size: 11px;
}
}
@media (max-width: 291px) {
.trnsfr_lbl{
    font-size: 10px;
}
}
@media (max-width: 265px) {
.trnsfr_lbl{
    font-size: 9px;
}
}
@media (max-width: 247px) {
.trnsfr_lbl{
    font-size: 8px;
}
}
@media (max-width: 205px) {
.trnsfr_lbl{
    font-size: 7px;
}
}


.trnsfr_err{
    font-family: Mona Sans, sans-serif;
    text-align: center;
    font-size: 14px;
}

@media (max-width: 422px) {
.trnsfr_err{
    font-size: 14px;
}
}
@media (max-width: 355px) {
.trnsfr_err{
    font-size: 13px;
}
}
@media (max-width: 333px) {
.trnsfr_err{
    font-size: 12px;
}
}
@media (max-width: 315px) {
.trnsfr_err{
    font-size: 11px;
}
}
@media (max-width: 291px) {
.trnsfr_err{
    font-size: 10px;
}
}
@media (max-width: 265px) {
.trnsfr_err{
    font-size: 9px;
}
}
@media (max-width: 247px) {
.trnsfr_err{
    font-size: 8px;
}
}
@media (max-width: 205px) {
.trnsfr_err{
    font-size: 7px;
}
}
 .login_bg{
      position: absolute; top: 50%; left: 50%; width: 35%; height: 75%; transform: translate(-50%, -50%); background-image: url('../images/Exterior1.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;        
}
@media (max-width: 992px) {
 .login_bg{
     width: 35%;       
}
}
@media (max-width: 800px) {
 .login_bg{
     width: 45%;       
}
}
 @media (max-width: 700px) {
 .login_bg{
     width: 55%;       
}
}
@media (max-width: 600px) {
 .login_bg{
     width: 65%;       
}
}
@media (max-width: 500px) {
 .login_bg{
     width: 75%;       
}
}
 @media (max-width: 400px) {
 .login_bg{
     width: 85%;       
}
}
@media (max-width: 300px) {
 .login_bg{
     width: 95%;       
}
}
          
          .login_from{
              position: absolute; top: 50%; left: 50%; width: 50%; transform: translate(-50%, -50%); background: #de6501e8;
          }
      </style>
  </head>
  <body>
    <header>
     
    </header>