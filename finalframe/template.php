<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    
    ?>
</head>
    
<body onload="download()"> 
<?php
    
    $link = "$_SERVER[REQUEST_URI]";
    $option = preg_split("/[=&]/", $link);
    
    $_SESSION["UserChoice"] = $option;
    $_SESSION["url"] = $link;
    
    if($option[5] == 2 || $option[5] == 3)
    {
    echo '
    <div id="pageBorder">';
    }
    
    //navigation-------------------------------------------------
    //navigation-------------------------------------------------
    //navigation-------------------------------------------------
    echo '
    <div id="navigation">';
    if($option[3] == 1 && $option[5] == 1)
    {
        
        echo '
        <div id="nav">
            <a href="#" class="logo menu"><img src="img/randomLogo.gif" height="32px"></a>
            <a href="#" class="menu">item1</a>
            <a href="#" class="menu">item2</a>
            <a href="#" class="menu">item3</a>
            <a href="#" class="menu">item4</a>
        </div>';
        
    }else if($option[3] == 1 && ($option[5] == 2 || $option[5] == 3))
    {
        
        
        echo '
        <div id="nav">
            <a href="#" class="logo menu"><img src="img/randomLogo-Black.gif" height="32px"></a>
            <a href="#" class="menu">item1</a>
            <a href="#" class="menu">item2</a>
            <a href="#" class="menu">item3</a>
            <a href="#" class="menu">item4</a>
        </div>';
    }
    else if($option[3] == 2)
    {
        
        
        echo '
        <div id="nav">
            <div  id="logo">
                <a href="#"><img src="img/randomLogo-Black.gif" height="100px"></a>
            </div>
            |
            <a href="#" class="menu">item1</a>
            |
            <a href="#" class="menu">item2</a>
            |
            <a href="#" class="menu">item3</a>
            |
            <a href="#" class="menu">item4</a>
            |
        </div>';
    }
    else if($option[3] == 3)
    {
        
        
        echo '
        <div id="nav">
            <div  id="logo">
                <a href="#"><img src="img/randomLogo-Black.gif" height="80px"></a>
            </div>
            <a href="#" class="menu left">item1</a>
            <a href="#" class="menu left">item2</a>
            <a href="#" class="menu left">item3</a>
            <a href="#" class="menu left">item4</a>
        </div>';
    }
    echo '
    </div>';
    
    echo '
    
    <img src="img/oceanResize.jpg" id="header">';
    
    //content----------------------------------------------------
    //content----------------------------------------------------
    //content----------------------------------------------------
    if($option[5] == 1)
    {
    echo '
        
    <div id="content">';
    }

    for($i = 7; $i<=15; $i+=2)
    {
        
        if($option[$i] == 1)
        {
            
            echo '
            
            <div class="section">
            
                <div class="part">
                    <div class="sec">
                        <img src="img/star.gif">
                        <h2>Lorem ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                </div>
                
                <div class="part">
                    <div class="sec">
                        <img src="img/gear.gif">
                        <h2>Lorem ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                </div>
                    
                <div class="part">
                    <div class="sec">
                        <img src="img/tool.gif">
                        <h2>Lorem ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                </div>
                    
            </div>'; 

        }else if($option[$i] == 2)
        {
                echo '
                
                <div class="section textWimg">
                
                    <h1>Lorem ipsum</h1>
                
                    <p class="text">
                    <img class="textImg" src="img/butterfly.jpg">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<br>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    
                </div>'; 

        }else if($option[$i] == 3)
        {
            
                echo '
                
                <div class="section gallery">
                
                    <h1>Gallery</h1>
                    
                    <div class="galleryImg">
                        <div class="galleryrow">
                            <div class="galImg"><img src="img/grassSmall.jpg"></div>
                            <div class="galImg"><img src="img/leafSmall.jpg" ></div>
                            <div class="galImg"><img src="img/mountainSmall.jpg" ></div>
                        </div>
                        
                        <div class="galleryrow">
                            <div class="galImg"><img src="img/roadSmall.jpg" ></div>
                            <div class="galImg"><img src="img/sunGrassSmall.jpg" ></div>
                            <div class="galImg"><img src="img/blueMTNSmall.jpg" ></div>
                        </div>
                        
                        <div class="galleryrow">
                            <div class="galImg bottom"><img src="img/bunchleafSmall.jpg" ></div>
                            <div class="galImg bottom"><img src="img/rockSmall.jpg" ></div>
                            <div class="galImg bottom"><img src="img/sunsetSmall.jpg" ></div>
                        </div>
                    </div>
                    
                </div>'; 

        }else if($option[$i] == 4)
        {
            
                echo '
                
                <div class="section textSec">
                    <h1>Lorem ipsum</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                </div>'; 
        }else{}
    }
    
    if($option[5] == 1)
    {
    echo '
        
    </div>';
    }
    
    //footer-----------------------------------------------------
    //footer-----------------------------------------------------
    //footer-----------------------------------------------------
    echo '
    <div id="footer">
        <p>© 2018 Your Domain Name | ALL RIGHTS RESERVED  |
            <a href="#">Private Policy</a>|
            <a href="#">Policy</a>|
        </p>
    </div>';
    
    if($option[5] == 2 || $option[5] == 3)
    {
    echo '
    </div>';
    }
?>
    
    
</body>
    
</html>