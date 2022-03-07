<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Prison System Backend</title>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       

    </head>
    <body class="container-fluid" style="font-family: 'Nunito';color:#00074D;">

            <div style="font-family: 'Nunito';color: white;display: flex;margin: 0;align-items: center;justify-content: center;background: rgb(24,148,168);background: linear-gradient(90deg, rgba(24,148,168,0.9612044646960347) 0%, rgba(99,9,121,1) 50%, rgba(0,212,255,1) 100%);font-weight: bold;padding: 15px;font-size: 25px;">
                
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 14.933a.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067v13.866zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                </svg>
                <!--Icon shield with text-->
                <a style="
    color:#ffffff" class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg"  href="#">&nbsp;&nbsp;Prison System</a>
            </div>
            <div style="display: flex;
    justify-content:space-evenly ;
    padding: 50px;
    background: rgb(63,94,251);
    background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);">
                <div style="display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: left;">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shield-check  center-block" viewBox="0 0 16 16">
                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                            <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                             <h1 style="text-align: left;
    font-size: 30px;"> System focused on the </h1>
                             <h1 style="text-align: left;
    font-size: 30px;"> management of a prison </h1>
                             <h1 style="text-align: left;
    font-size: 30px;"> system</h1>
                        </div>

                        <div>
                        @if (Route::has('login'))
                                <div>
                                    @auth
                                        <a style="background-color: white;color: rgb(236, 234, 234);padding: 5px 2em;
    margin: 5px;border-radius: 1em;display: inline-block;font-family: 'Nunito';font-weight: bold; top: 0;
    background-color: #2d3748;
    transition: .3s ease-in-out all;
    color: white;background: rgb(99,9,121);
    background: linear-gradient(90deg, rgba(99,9,121,1) 6%, rgba(18,95,134,0.9780111873851103) 94%);
    color:#e2e8f0" href="{{ url('/dashboard') }}">Dashboard</a>
                                    @else
                                        <a style="background-color: white;color: rgb(236, 234, 234);padding: 5px 2em;
    margin: 5px;border-radius: 1em;display: inline-block;font-family: 'Nunito';font-weight: bold; top: 0;
    background-color: #2d3748;
    transition: .3s ease-in-out all;
    color: white;background: rgb(99,9,121);
    background: linear-gradient(90deg, rgba(99,9,121,1) 6%, rgba(18,95,134,0.9780111873851103) 94%);
    color:#e2e8f0"href="{{ route('login') }}" >Login</a>

                                        @if (Route::has('register'))
                                            <a style="background-color: white;color: rgb(236, 234, 234);padding: 5px 2em;
    margin: 5px;border-radius: 1em;display: inline-block;font-family: 'Nunito';font-weight: bold; top: 0;
    background-color: #2d3748;
    transition: .3s ease-in-out all;
    color: white;background: rgb(99,9,121);
    background: linear-gradient(90deg, rgba(99,9,121,1) 6%, rgba(18,95,134,0.9780111873851103) 94%);
    color:#e2e8f0" href="{{ route('register') }}" class="btn btn-light">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>


                </div>

                <div  display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;>
                    <img  style="width: 60%;
    clip-path: circle(50% at 50% 50%);" src="https://images.emojiterra.com/google/android-10/512px/1f46e-1f3fb-2642.png" >

                </div>

            </div>

            <div style="display: grid;
    align-items: center;
    grid-template-columns: repeat(2,1fr);
    background: rgb(255,255,255);
    background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 53%, rgba(252,70,107,1) 80%);">
                <div>
                    <img style="width: 60%;" src="https://img.freepik.com/vector-gratis/nuevo-concepto-estilo-vida-normal-oficiales-policia-personajes-policias-mujer-hombre-seguridad-uniforme-mascara-facial-protegen-coronavirus-covid-19-aislado-ilustracion-fondo-blanco_83111-964.jpg" alt="" srcset="">
                </div>
                <div class= "textwhite">
                    <h1> About us </h1>
                    <p>We are a new way of managing a prison in a simple way, we focus mainly on the control of prisoners and we mainly seek to improve the problems that are generated when information is controlled through physical documents, in other words,
                        We leave aside the handling of input and output information physically and we centralize it for less data loss. </p>

                </div>
            </div>


             <div style="text-align: center;
     background: rgb(63,94,251);
    background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
    color:white">
                <div style="
     font-family: 'Nunito';
     color: white;
     display: flex;
     margin: 0;
     align-items: center;
     justify-content: center;
     background: rgb(24,148,168);
    background: linear-gradient(90deg, rgba(24,148,168,0.9612044646960347) 0%, rgba(99,9,121,1) 50%, rgba(0,212,255,1) 100%);
    font-weight: bold;
    padding: 15px;
    font-size: 25px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-pc-display" viewBox="0 0 16 16">
                        <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z"/>
                    </svg>
                    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 " style="" href="#">&nbsp;&nbsp;Team - Avengers</a>
                </div>

                <div style="display: grid;
    grid-template-columns: repeat(3,1fr);
    text-align: center;
    margin: 10px;">


                    <div style="display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;">
                        <div style="background: rgb(99,9,121);
    background: linear-gradient(90deg, rgba(99,9,121,1) 6%, rgba(18,95,134,0.9780111873851103) 94%);
    color:#e2e8f0;margin: 20px;
    padding:10px 5px ;
    border-radius: 3%;">
                        <img style="border: 1px solid rgb(0, 0, 0)" src="{{asset('miembros/Mateo.jpg') }}" alt="CevallosMateo">
                            <h3>Mateo Cevallos</h3>
                            <p style="font-size: smaller;">He was born in Quito-Ecuador on January 9, 2001. He completed his secondary studies at the Colegio Internacional 24 de Mayo, graduating in 2017. He is currently studying at the Escuela Politécnica Nacional the career of Higher Technology in Software Development and is spending the fourth semester.</p>
                        </div>
                        
                        <div  style="background: rgb(99,9,121);
    background: linear-gradient(90deg, rgba(99,9,121,1) 6%, rgba(18,95,134,0.9780111873851103) 94%);
    color:#e2e8f0;margin: 20px;
    padding:10px 5px ;
    border-radius: 3%;" >
                        <img style="border: 1px solid rgb(0, 0, 0)" src="{{asset('miembros/Luis.jpg') }}" alt="CatotaLuis">
                            <h3>Luis Catota</h3>
                            <p style="font-size: smaller;">
                                He was born in Quito -Ecuador on December 28, 1998. He completed his secondary studies at the Miguel de Santiago technical school, graduated Enel 2016. He is currently completing his university studies at the National Polytechnic School, in the career of Higher Technology in Development of software,
                                where he is currently studying fourth semester.
                            </p>
                        </div>

                    </div>
                    <div style="display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;">
                    <div  style="background: rgb(99,9,121);
    background: linear-gradient(90deg, rgba(99,9,121,1) 6%, rgba(18,95,134,0.9780111873851103) 94%);
    color:#e2e8f0;margin: 20px;
    padding:10px 5px ;
    border-radius: 3%;" >
                            <img style="border: 1px solid rgb(0, 0, 0);width: 30%;" src="{{asset('miembros/Diana.jpg') }}" alt="AlmeidaDiana">
                            <h3>Diana Almeida</h3>
                            <p style="font-size: smaller;">She was born in Quito-Ecuador on December 17, 1998. She completed her primary studies at the “Escuela Particular Domingo Savio” and her secondary studies at the Colegio Nacional “Simón Bolívar”, located in the historic center of the city.
                                He is currently studying at the National Polytechnic School in the career of Higher Technology in Software Development.</p>
                            </p>
                            <p style="font-size: smaller;">Areas of interest: informatics, networks, robotics.</p>
                        </div>
                        <div style="background: rgb(99,9,121);
    background: linear-gradient(90deg, rgba(99,9,121,1) 6%, rgba(18,95,134,0.9780111873851103) 94%);
    color:#e2e8f0;margin: 20px;
    padding:10px 5px ;
    border-radius: 3%;">
                        <img style="border: 1px solid rgb(0, 0, 0);width: 30%;" src="{{asset('miembros/Bryan.jpg') }}" alt="QuisaguanoBryan">
                            <h3>Bryan Quisaguano</h3>
                            <p style="font-size: smaller;">He was born in Quito-Ecuador on August 8, 1998. He completed his secondary studies at the Mejía National Institute. He is currently studying at the National Polytechnic School in the Software Development career; she is in the fourth semester.</p>
                            <p style="font-size: smaller;">Areas of interest: computing</p>
                        </div>
                        <div style="background: rgb(99,9,121);
    background: linear-gradient(90deg, rgba(99,9,121,1) 6%, rgba(18,95,134,0.9780111873851103) 94%);
    color:#e2e8f0;margin: 20px;
    padding:10px 5px ;
    border-radius: 3%;" >
                        <img style="border: 1px solid rgb(0, 0, 0);width: 30%;" src="{{asset('miembros/jOSUE.jpg') }}" alt="SingañaJosue">
                            <h3>Josue Singaña</h3>
                            <p style="font-size: smaller;">He was born in Quito-Ecuador on October 2, 2000. He completed his secondary studies at the Pichincha Provincial Council Educational Unit, graduating in 2018. He is currently completing his university studies at the National Polytechnic School, in the Superior Technology career. in software development,
                                where he is currently crossing 4th semester.</p>


                        </div>
                    </div>
                    <div style="display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;">

                        <div style="background: rgb(99,9,121);
    background: linear-gradient(90deg, rgba(99,9,121,1) 6%, rgba(18,95,134,0.9780111873851103) 94%);
    color:#e2e8f0;margin: 20px;
    padding:10px 5px ;
    border-radius: 3%;" >
                        <img style="border: 1px solid rgb(0, 0, 0); width: 30%;" src="{{asset('miembros/cris.jpg') }}" alt="SoledispaChristian">
                            <h3>Christian Soledispa</h3>
                            <p style="font-size: smaller;"> He was born in Quito-Ecuador on October 8, 1997. He completed his secondary studies at the Juan Pío Montúfar National Experimental School, culminating in 2015, and is currently studying Software Development at the National Polytechnic School.</p>
                        </div>
                        <div style="background: rgb(99,9,121);
    background: linear-gradient(90deg, rgba(99,9,121,1) 6%, rgba(18,95,134,0.9780111873851103) 94%);
    color:#e2e8f0;margin: 20px;
    padding:10px 5px ;
    border-radius: 3%;"  >
                        <img style="border: 1px solid rgb(0, 0, 0);width: 30%;" src="{{asset('miembros/Michael.jpg') }}" alt="ValenzuelMichaelle ">
                            <h3>Michaelle Valenzuela</h3>
                            <p style="font-size: smaller;"> He was born in Quito - Ecuador on March 2, 1998. He completed his secondary studies at the illustrious "Central Technical" school, graduating in 2016. He is currently completing his university career at the prestigious National Polytechnic School in the Software Development career.</p>
                        </div>
                    </div>
             </div>
            </div>
             <div style="background: white;
    text-align: center;">
             <div style="font-family: 'Nunito';
     color: white;
     display: flex;
     margin: 0;
     align-items: center;
     justify-content: center;
     background: rgb(24,148,168);
    background: linear-gradient(90deg, rgba(24,148,168,0.9612044646960347) 0%, rgba(99,9,121,1) 50%, rgba(0,212,255,1) 100%);
    font-weight: bold;
    padding: 15px;
    font-size: 25px;">
                
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 14.933a.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067v13.866zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                </svg>
                <!--Icon shield with text-->
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg"  href="#">&nbsp;&nbsp;Tools & Frameworks</a>
            </div>
             <div style="display: grid;
    grid-template-columns: repeat(3,1fr);">
                <div class="Elements">
                    <h3>Laravel</h3>
                    <img style="width: 30%;
     border-radius: 15%;" src="{{asset('Tools/Laravel.jpeg') }}" alt="Laravel">
                </div>
                <div class="Elements">
                   <h3>Angular</h3>
                   <img style="width: 30%;
     border-radius: 15%;"src="{{asset('Tools/Angular.jpg') }}" alt="Angular" >
                </div>
                <div class="Elements">
                    <h3>Github</h3>
                    <img style="width: 30%;
     border-radius: 15%;"src="{{asset('Tools/GitHub.png') }}" alt="Github">
                </div>
             </div>
             </div>
             <footer style="font-size: small;
    text-align: center;"><p>© Proyecto 2022 - Avengers</p></footer>
            </div>
            </div>

    </body>
</html>