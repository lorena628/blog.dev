@extends('layouts.master')

@section('topscript')
    <link rel="icon" href="/img/LM.png">

    <title>lorenamarie</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
   <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
   <!-- font awesomes -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <link rel="stylesheet" href="/../css/portfolio.css">
@stop


@section('body')
<a href="top"></a>
  

    <div id="cover_pic">
        <div class="bns" data-position="fixed">
            <input type="button" id="btn" onclick="location.href='#projects';" value="Projects" />
            <input type="button" id="btn" onclick="location.href='/posts';" value="Blog" />
            <input type="button" id="btn" onclick="location.href='#contact';" value="Contact" />    
        </div>
        <h1> Lorena Villanueva</h1>
    </div>

    <!-- _________________________________________________________________________________________________ -->
    <div id= "about_me" class="col-md-12 text-center">     
        <h1 id="about">About Me</h1>
        <p id="about_des">Just a small town girl... with braces</p>
     </div>
    <!-- _________________________________________________________________________________________________ -->
    <div id= "projects" class="col-md-12 text-center">     
        <h1><a href="#top" id="pro" >Projects</h1></a>
            <br><a href="/simplesimon" target="_blank" class="sites">Simple Simon<a></br>
            {{-- <br><a href="/calculator"target="_blank" class="sites">Calculator</br> --}}
            {{-- <br><a href="/posts"target="_blank" class="sites">Blog</br> --}}
            <br><a href="/weathermap"target="_blank" class="sites">3 Day Weather Map</br>
            {{-- <br><a href="http://adlister.lorenamarie.xyz/" target="_blank" class="sites">Adlister</br> --}}
            <br><a href="http://nationalparks.lorenamarie.xyz/" target="_blank" class="sites">National Parks Database</br> 
            <br><a href="http://yourfamilyapp.xyz/"target="_blank" class="sites">yourfamilyapp.xyz</br>     
            <br><a href="https://github.com/FamilyDot/FamilyDot"target="_blank" class="sites">yourfamilyapp.xyz (repository)</br>
            <br><a href="https://github.com/lorena628/blog.dev" target="_blank" class="sites">lorenamarie.xyz</a></br>
    </div>   
    <!-- _________________________________________________________________________________________________ -->
    <div id= "contact" class="col-md-12 text-center">     
        <h1>Contact Me</h1>
        <div id="information">
            <p>lorena.villanueva@yahoo.com</p>
            <p>210.897.1591</p>
        </div>

        {{-- <a href="https://twitter.com/newvillage210" target="_blank"><i class="fa fa-twitter fa-3x" id="twit" aria-hidden="true"></i></a> --}}
        <a href="https://github.com/lorena628" target="_blank"><i class="fa fa-github fa-3x" id="git" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/pub/lorena-villanueva/a1/46a/a28" target="_blank"><i class="fa fa-linkedin fa-3x" id="lin" aria-hidden="true"></i></a>
    </div> 

    <!-- _________________________________________________________________________________________________ -->







    <div class="navbar-bottom" id="footer">
        <a href="#top" ><img id="home"src="/img/home.png" alt="home"></a>
        <div class="legal-one">
            <!-- <p>Copyright &copy 2016</p> -->
            <p>All rights reserved &nbsp; 
            <?php function auto_copyright($year = 'auto'){ ?>
               <?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
               <?php if(intval($year) == date('Y')){ echo intval($year); } ?>
               <?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
               <?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
            <?php } ?>

            <?php auto_copyright(); ?></p>
        </div>
    </div>




@stop