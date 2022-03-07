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
                
                
                <!--Icon shield with text-->
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg"  href="#">&nbsp;&nbsp;Prison System</a>
            </div>
            <div class="section">
                <div class="section1">
                        <div>
                            
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

                </div>

            </div>

            <div class= "section-about">
                <div>
                </div>
                <div class= "textwhite">
                    <h1> About us </h1>
                    <p>We are a new way of managing a prison in a simple way, we focus mainly on the control of prisoners and we mainly seek to improve the problems that are generated when information is controlled through physical documents, in other words,
                        We leave aside the handling of input and output information physically and we centralize it for less data loss. </p>

                </div>
            </div>


             <div class="section-group">
                <div class ="Nav-pri">
                    
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