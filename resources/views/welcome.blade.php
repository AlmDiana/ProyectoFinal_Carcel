<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{asset('encrypted.png') }}">
        <title>Prison System Backend</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="" rel="stylesheet">

    </head>
    <body class="container-fluid">

            <div class ="Nav-pri">
                
                <svg xmlns="https://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 14.933a.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067v13.866zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                </svg>
                <!--Icon shield with text-->
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg"  href="#">&nbsp;&nbsp;Prison System</a>
            </div>
            <div class="section">
                <div class="section1">
                        <div>
                            <svg xmlns="https://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shield-check  center-block" viewBox="0 0 16 16">
                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                            <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                             <h1> System focused on the </h1>
                             <h1> management of a prison </h1>
                             <h1> system</h1>
                        </div>

                        <div>
                        @if (Route::has('login'))
                                <div>
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="bg-pers bg-hover">>Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="bg-pers bg-hover">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-light bg-pers">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>


                </div>

                <div class = "section2">
                    <img  src="https://images.emojiterra.com/google/android-10/512px/1f46e-1f3fb-2642.png" >

                </div>

            </div>

            <div class= "section-about">
                <div>
                    <img src="https://img.freepik.com/vector-gratis/nuevo-concepto-estilo-vida-normal-oficiales-policia-personajes-policias-mujer-hombre-seguridad-uniforme-mascara-facial-protegen-coronavirus-covid-19-aislado-ilustracion-fondo-blanco_83111-964.jpg" alt="" srcset="">
                </div>
                <div class= "textwhite">
                    <h1> About us </h1>
                    <p>We are a new way of managing a prison in a simple way, we focus mainly on the control of prisoners and we mainly seek to improve the problems that are generated when information is controlled through physical documents, in other words,
                        We leave aside the handling of input and output information physically and we centralize it for less data loss. </p>

                </div>
            </div>


             <div class="section-group">
                <div class ="Nav-pri">
                    <svg xmlns="https://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-pc-display" viewBox="0 0 16 16">
                        <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z"/>
                    </svg>
                    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg"  href="#">&nbsp;&nbsp;Team - Avengers</a>
                </div>

                <div class="section-teams">


                    <div class="memberteams">
                        <div class="bg-pers" >
                        <img src="" alt="CevallosMateo">
                            <h3>Mateo Cevallos</h3>
                            <p>He was born in Quito-Ecuador on January 9, 2001. He completed his secondary studies at the Colegio Internacional 24 de Mayo, graduating in 2017. He is currently studying at the Escuela Politécnica Nacional the career of Higher Technology in Software Development and is spending the fourth semester.</p>
                        </div>
                        
                        <div  class="bg-pers" >
                        <img src="" alt="CatotaLuis">
                            <h3>Luis Catota</h3>
                            <p>
                                He was born in Quito -Ecuador on December 28, 1998. He completed his secondary studies at the Miguel de Santiago technical school, graduated Enel 2016. He is currently completing his university studies at the National Polytechnic School, in the career of Higher Technology in Development of software,
                                where he is currently studying fourth semester.
                            </p>
                        </div>

                    </div>
                    <div class="memberteams">
                    <div  class="bg-pers" >
                            <img src="" alt="AlmeidaDiana">
                            <h3>Diana Almeida</h3>
                            <p>She was born in Quito-Ecuador on December 17, 1998. She completed her primary studies at the “Escuela Particular Domingo Savio” and her secondary studies at the Colegio Nacional “Simón Bolívar”, located in the historic center of the city.
                                He is currently studying at the National Polytechnic School in the career of Higher Technology in Software Development.</p>
                            </p>
                            <p>Areas of interest: informatics, networks, robotics.</p>
                        </div>
                        <div class="bg-pers" >
                        <img src="" alt="QuisaguanoBryan">
                            <h3>Bryan Quisaguano</h3>
                            <p>He was born in Quito-Ecuador on August 8, 1998. He completed his secondary studies at the Mejía National Institute. He is currently studying at the National Polytechnic School in the Software Development career; she is in the fourth semester.</p>
                            <p>Areas of interest: computing</p>
                        </div>
                        <div class="bg-pers" >
                        <img src="" alt="SingañaJosue">
                            <h3>Josue Singaña</h3>
                            <p>He was born in Quito-Ecuador on October 2, 2000. He completed his secondary studies at the Pichincha Provincial Council Educational Unit, graduating in 2018. He is currently completing his university studies at the National Polytechnic School, in the Superior Technology career. in software development,
                                where he is currently crossing 4th semester.</p>


                        </div>
                    </div>
                    <div class="memberteams">

                        <div class="bg-pers" >
                        <img src="" alt="SoledispaChristian">
                            <h3>Christian Soledispa</h3>
                            <p> He was born in Quito-Ecuador on October 8, 1997. He completed his secondary studies at the Juan Pío Montúfar National Experimental School, culminating in 2015, and is currently studying Software Development at the National Polytechnic School.</p>
                        </div>
                        <div class="bg-pers"  >
                        <img src="" alt="ValenzuelMichaelle ">
                            <h3>Michaelle Valenzuela</h3>
                            <p> He was born in Quito - Ecuador on March 2, 1998. He completed his secondary studies at the illustrious "Central Technical" school, graduating in 2016. He is currently completing his university career at the prestigious National Polytechnic School in the Software Development career.</p>
                        </div>
                    </div>
             </div>
            </div>
             <div class="section-frames">
             <div class ="Nav-pri">
                
                <svg xmlns="https://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 14.933a.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067v13.866zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                </svg>
                <!--Icon shield with text-->
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg"  href="#">&nbsp;&nbsp;Tools & Frameworks</a>
            </div>
             <div class="section-frames-cont">
                <div class="Elements">
                    <h3>Laravel</h3>
                    <img src="" alt="Laravel">
                </div>
                <div class="Elements">
                   <h3>Angular</h3>
                   <img src="" alt="Angular" >
                </div>
                <div class="Elements">
                    <h3>Github</h3>
                    <img src="" alt="Github">
                </div>
             </div>
             </div>
             <footer class="copyr" ><p>© Proyecto 2022 - Avengers</p></footer>
            </div>
            </div>

    </body>
</html>