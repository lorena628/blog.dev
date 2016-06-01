@extends('layouts.master')

@section('topscript')
    <title>Portfolio</title>
    <!-- google fonts -->
   <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
   <!-- font awesomes -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/portfolio.css">
@stop





@section('body')
<a href="top"></a>


    <div id="cover_pic">
        <div class="bns">
            <input type="button" id="btn" onclick="location.href='#about_me';" value="About " />
            <input type="button" id="btn" onclick="location.href='#my_work';" value=" Work " />
            <input type="button" id="btn" onclick="location.href='#contact';" value=" Contact" />    
        </div>
        <h1> Lorena Villanueva</h1>
    </div>

    <!-- _________________________________________________________________________________________________ -->
    <div id= "about_me" class="col-md-12 text-center">     
        <h1>About Me</h1>
        <p>Full stack developer from Texas. I have a diverse set of skills that include HTML/CSS/Javascript/JQuery/PHP/MySQL/Laravel</p>
     <!--    <div class="col-lg-4">
            <span class="fa-stack fa-4x">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
            </span>
        </div>
        <div class="col-lg-4"> -->
            <!-- <img class="img-circle" src="/img/cow2.jpg"> -->
          <!--   <span class="fa-stack fa-4x">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
            </span>
        </div> -->
      <!--   <div class="col-lg-4">
            <span class="fa-stack fa-4x">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
            </span>
        </div>
 -->
    <div class="col-lg-4">
          <img class="img-circle" src="/img/cow2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>

        <div class="col-lg-4">
          <img class="img-circle" src="/img/cow2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>

        <div class="col-lg-4">
          <img class="img-circle" src="/img/cow2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
    </div>   
    <!-- _________________________________________________________________________________________________ -->
    <div id= "my_work" class="col-md-12 text-center">     
        <h1><a href="#top" >My Work</h1></a>
            <br>Simple Simon</br>
            <br>Calculator</br>
            <br>Here's What's on Tonight</br>
            <br>National Parks Database</br> 
            <br>Adlister</br> 
            <br>lomanueva.com</br>
    </div>   
    <!-- _________________________________________________________________________________________________ -->
    <div id= "contact" class="col-md-12 text-center">     
        <h1>Contact Me</h1>
        <a href="https://github.com/lorena628" target="_blank"><i class="fa fa-github fa-3x" id="git" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-3x" id="lin" aria-hidden="true"></i></a>
    </div> 
    <!-- _________________________________________________________________________________________________ -->



<!-- <form action="MAILTO:someone@example.com" method="post" enctype="text/plain"><br>
<input type="text" name="name" value="your name"><br><br>
<input type="text" name="mail" value="your email"><br>
<br>
<input type="text" name="comment" value="your comment" size="50"><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form> -->






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