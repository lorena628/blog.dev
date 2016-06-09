@extends('layouts.master')

@section('topscript')
    <title>Portfolio</title>
    <!-- google fonts -->
   <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
   <!-- font awesomes -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <link rel="stylesheet" href="/../css/portfolio.css">
@stop





@section('body')
<a href="top"></a>
  

    <div id="cover_pic">
        <div class="bns">
            <input type="button" id="btn" onclick="location.href='#projects';" value="Projects" />
            <input type="button" id="btn" onclick="location.href='/posts';" value="Blog" />
            <input type="button" id="btn" onclick="location.href='#';" value=" Contact" />    
        </div>
        <h1> Lorena Villanueva</h1>
    </div>

    <!-- _________________________________________________________________________________________________ -->
    <div id= "about_me" class="col-md-12 text-center">     
        <h1>About Me</h1>
        <p>Full stack developer from Texas. I have a diverse set of skills that include HTML/CSS/Javascript/JQuery/PHP/MySQL/Laravel</p>
     </div>
    <!-- _________________________________________________________________________________________________ -->
    <div id= "projects" class="col-md-12 text-center">     
        <h1><a href="#top" >Projects</h1></a>
            <br><a href="/simplesimon">Simple Simon<a></br>
            <br><a href="/calculator">Calculator</br>
            <br><a href="adlister.lorenamarie.xyz">Adlister</br>
            <br><a href="../nationalparks.lorenamarie.xyz"></a>National Parks Database</br> 
            <!-- <br>Adlister</br>  -->
            <br><a href="/">lorenamarie.xyz</a></br>
    </div>   
    <!-- _________________________________________________________________________________________________ -->
    <div id= "contact" class="col-md-12 text-center">     
        <h1>Contact Me</h1>
        <a href="https://github.com/lorena628" target="_blank"><i class="fa fa-github fa-3x" id="git" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-3x" id="lin" aria-hidden="true"></i></a>
    </div> 
    <!-- _________________________________________________________________________________________________ -->


<!-- 
<!-- <form action="MAILTO:someone@example.com" method="post" enctype="text/plain"><br>
<input type="text" name="name" value="your name"><br><br>
<input type="text" name="mail" value="your email"><br>
<br>
<input type="text" name="comment" value="your comment" size="50"><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>






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