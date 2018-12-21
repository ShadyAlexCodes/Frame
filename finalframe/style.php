<?php
    session_start();
    header('Content-type: text/css; charset:UTF-8');
    $option = $_SESSION["UserChoice"];

/* ------------------------------color-------------------------------*/
/* ------------------------------color-------------------------------*/
if($option[1] == 1)
{
     $dark = "#272727";
     $bright = "#30d18b";
     $heading = "#2c7555";
     $gray = "#EEF0F2";
    
}else if($option[1] == 2)
{
     $dark = "#d8c3a5";
     $bright = "#e85a4f";
     $heading = "#e98074";
     $gray = "#EAE7DC";
    
}else if($option[1] == 3)
{
     $dark = "#59564f";
     $bright = "#b3d5f2";
     $heading = "#719ed9";
     $gray = "#F2F2F2";
    
}else if($option[1] == 4)
{
     $dark = "#525564";
     $bright = "#C25B56";
     $heading = "#96C0CE";
     $gray = "#FEF6EB";
    
}

echo'
/* color
'.$dark.' - dark
'.$bright.'- bright green
'.$heading.' - dark green 
'.$gray.' - gray 
*/';

echo"

/* ------------------------------body-------------------------------*/
/* ------------------------------body-------------------------------*/

";

if($option[5] == 1)
{
    echo"
body
{
    margin: 0;
    padding: 0;
    font-family: 'Lato', sans-serif;
    display: block;
}

#content
{
    max-width: 1200px;
    margin: 0 auto;
    padding: 0;
}";
    
}else if($option[5] == 2)
{
    echo"
body
{
    margin: 0;
    padding: 0;
    font-family: 'Lato', sans-serif;
    background-color: $gray;
    display: block;
}

#pageBorder
{
    max-width: 960px;
    margin: 10px auto;
    padding: 0px 16px 16px 16px;
    background-color: white;
}";
}else
{
    echo"
body
{
    margin: 0;
    padding: 0;
    display: block;
    font-family: 'Lato', sans-serif;
}

#pageBorder
{
    max-width: 960px;
    margin: 0px auto;
    padding: 0;
}
";   
}

echo"

/* ------------------------------nav-------------------------------*/
/* ------------------------------nav-------------------------------*/

";
/*-------------------------------menu 1---------------------------*/
if($option[3] == 1)
{
    echo"
#nav
{
    overflow: hidden;";
    if($option[5] == 1)
    {
        echo"
    background-color: $dark;";
    }else if($option[5] == 3)
    {
        echo"
    border-bottom: 3px solid $dark ;";
    }
    
echo"
}";

echo"   

.menu
{";
    if($option[5] == 1)
    {
        echo"
    color: white;";
    }else
    {
        echo"
    color: black ;";  
    }
    if($option[5] == 3)
    {
        echo"
    border-bottom: 3px solid white;";
    }
    echo"
    text-decoration:inherit; 
    padding: 21px 20px 20px 20px;
    display: block;
    float: left;
}";

echo" 

.menu:hover
{";
    if($option[5] == 1)
    {
        echo"
    background-color: $bright; ";
    }
    else
    {
        echo"
        color: $bright;";
    }
echo"
}";

echo" 

.logo
{
    padding: 16px 16px 9px 16px;";
echo"
}";

echo" 

.logo:hover
{";
    if($option[5] == 1)
    {
        echo"
    background: $dark;";
    }
echo"
}";}


/*-------------------------------menu 2---------------------------*/

if($option[3] == 2)
{
    echo"
    
#nav
{
    overflow: hidden;
    text-align: center;";
    if($option[5] != 3)
    {
        echo"
    color: white;
    background-color: $dark;";
    }else 
    {
        echo"
    color: black ;
    border-bottom: 3px solid $dark ;";
    }
    
echo"
}

.menu
{";
    if($option[5] != 3)
    {
        echo"
    color: white;
    padding: 10px 20px;";
    }else
    {
        echo"
    color: black ;
    padding: 20px 20px;";
    }
    echo"
    text-decoration: none;
    display:inline-block;
}

.menu:hover
{
    color: $bright;
}


#logo
{
    padding: 20px 0 20px 0;
    margin: 0;
    background-color: white;";
    if($option[5] == 3)
    {
        echo"
    border-bottom: 3px solid $dark ;";
    }
echo"
}";
}

/*-------------------------------menu 3---------------------------*/

if($option[3] == 3)
{
    echo"
#nav
{
    overflow: hidden;";
    if($option[5] != 3)
    {
        echo"
    background-color: $dark;";
    }
echo"
}

.menu
{";
    if($option[5] == 1)
    {
        echo"
    color: white;
    padding: 20px 20px;";
    }else if($option[5] == 2)
    {
        echo"
    color: white;
    padding: 10px 20px;";
    }
    else 
    {
        echo"
    color: black ;
    padding: 0px 20px;
    border-bottom: 4px solid white;";
    }
    
    echo"
    text-decoration:inherit;
    display: block;
    float: left;
    font-weight: bold;
}";

    if($option[5] == 1)
    {
        echo"
.left
{
    margin-left: 30px;
}";
    }

echo"
.menu:hover
{";
    if($option[5] != 3)
    {
        echo"
    background-color: $bright; ";
    }else 
    {
        echo"
    color: $bright;";
    }
echo"   
}

#logo
{
    background-color: white;
    ";
    if($option[5] == 1)
    {
        echo"
    padding:30px 0 10px 30px;";
    }else if($option[5] == 2)
    {
        echo"
    padding:10px 0 10px 0;";
    }else
    {
        echo"
    padding: 30px 0 30px 0;";
    }
    
echo"
}";
}

echo"

/* ---------------------------header image---------------------------*/
/* ---------------------------header image---------------------------*/

";

if($option[3] == 1)
{
    if($option[5] == 1 || $option[5] == 2)
    {   
        echo"
#header
{
    width: 100%;
    margin: 0;
    padding: 0;
    padding-bottom: 40px;
    background-color: $dark;
}";
    }else
    {
        echo"
#header
    {
    width: 100%;
    margin: 0;
    padding: 20px 0 20px 0;
    border-bottom: 3px solid $dark ;
}";
}
}

if($option[3] == 2)
{
    echo"

#header
{
    width: 100%;
    margin: 0;";
    if($option[5] != 3)
    {
        echo"
    padding: 0 0 40px 0;
    background-color: $dark;";
    }else
    {
        echo"
    padding: 40px 0 40px 0;
    border-bottom: 3px solid $dark ;";
    }
echo" 
}";
}

if($option[3] == 3)
{
    echo"
#header
{
    width: 100%;
    margin: 0;
    padding: 0;";
    if($option[5] != 3)
    {
        echo"
    background-color: $dark;
    padding-bottom: 40px;";
    }else 
    {
        echo"
    border-bottom: 4px solid $dark;
    border-top: 4px solid $dark;
    padding: 40px 0 40px 0;";
    }
echo"
}";
}

echo"

/* ---------------------------Content---------------------------*/
/* ---------------------------Content---------------------------*/

h1,h2
{
    color: $heading;
}

p
{
    font-size: 1.2em;
}

.section
{
    clear: left;
    margin: 50px 0 50px 0;
    display: block;
    padding: 0px 20px; 
}

.part
{
    float: left;
    max-width: 33%;
    text-align: center;
}

.sec
{
    padding: 0 50px 30px 50px;
}

.textWimg
{
    min-height: 370px;
}

.textImg
{
    float: left;
    margin:  3px 20px 0 0 ;
    padding: 0;
}

.text
{
    overflow: auto;
}

.galleryImg
{
    max-width: 960px;
    margin: 0 auto;
}

.galImg
{
    width: 33%;
    float: left;
    text-align: center;
    margin-top: .7em;
}

.galImg img
{
    width: 96%;
}

.bottom
{
    margin-bottom: 50px;
}"; 

echo"

/*--------------------------------------------------------*/
/*--------------------------Footer------------------------*/
/*--------------------------------------------------------*/

";

if($option[5] == 1)
{
    echo"
#footer
{
    padding: 10px;
    clear: left;
    background-color: $dark;
    color: white;
    min-height: 20px;
}";
}else if($option[5] == 2)
{
    echo"
#footer
{
    clear: left;
    background-color: $dark;
    color: white;
    min-height: 10px;
    margin: 0;
    padding: 2px;
}";
}else
{
    echo"
#footer
{
    clear: left;
    color: black ;
    min-height: 10px;
    margin: 0;
    padding: 2px;
    border-top: 3px solid $dark ;
}";
}

echo"

#footer p
{
    text-align: center;
    font-size: 1em;
}";

if($option[5] == 1 || $option[5] == 2)
{
    echo"
    
#footer a
{
    color: white;
    text-decoration: none;
    padding: 0 20px 0 20px;
}";
}else
{
    echo"
#footer a
{
    color: black ;
    text-decoration: none;
    padding: 0 20px 0 20px;
}";
}

echo"

#footer a:hover
{
    color: $bright;
}";
?>