
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript">
    function changeImage()
{
    var img = document.getElementById("img");
    img.src = images[x];
    x++;

    if(x >= images.length){
        x = 0;
    } 

    fadeImg(img, 100, true);
    setTimeout("changeImage()", 30000);
}

function fadeImg(el, val, fade){
    if(fade === true){
        val--;
    }else{
        val ++;
    }

    if(val > 0 && val < 100){
        el.style.opacity = val / 100;
        setTimeout(function(){fadeImg(el, val, fade);}, 10);
    }
}

var images = [],
x = 0;

images[0] = "image1.jpg";
images[1] = "image2.jpg";
images[2] = "image3.jpg";
setTimeout("changeImage()", 30000);
    </script>
      
  </head>
  <body>
    <img id="img" src="startpicture.jpg">
  </body>
</html>