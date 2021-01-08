window.onload = function(){
  
    var url_id = window.location.search.split('id=')[1];
    if(url_id !== ''){

        product.forEach(function(product) {

        if(product.id == url_id){
            document.querySelector('#title').innerHTML = product.title;
            document.querySelector('#price').innerHTML = product.price;
            document.querySelector('#rating').innerHTML = product.rating;
            document.querySelector('#image').src = product.image;
            document.querySelector('#des').innerHTML = product.des;
            }

        });

    }

    //Caling Zoom in Picture function
    zoomInpicture("image", 2);
    
}
    //quality selector
    function calculteTotal(evt){
        var price = $("." + evt.target.id + "-Item-price").text();
        var quantity = $('#'+evt.target.id).val();
        $("." + evt.target.id + "-total-price").text(quantity * price)
        }

    // Zoom frame
    function zoomInpicture(image, zoom) {
        var img, glass, w, h, bw;
        img = document.getElementById(image);
        /*create magnifier glass:*/
        glass = document.createElement("DIV");
        glass.setAttribute("class", "img-magnifier-glass");
        /*insert magnifier glass:*/
        img.parentElement.insertBefore(glass, img);
        /*set background properties for the magnifier glass:*/
        glass.style.backgroundImage = "url('" + img.src + "')";
        glass.style.backgroundRepeat = "no-repeat";
        glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
        bw = 3;
        w = glass.offsetWidth / 2;
        h = glass.offsetHeight / 2;
        /*execute a function when someone moves the magnifier glass over the image:*/
        glass.addEventListener("mousemove", moveMagnifier);
        img.addEventListener("mousemove", moveMagnifier);
        /*and also for touch screens:*/
        glass.addEventListener("touchmove", moveMagnifier);
        img.addEventListener("touchmove", moveMagnifier);
        function moveMagnifier(e) {
          var pos, x, y;
          /*prevent any other actions that may occur when moving over the image*/
          e.preventDefault();
          /*get the cursor's x and y positions:*/
          pos = getCursorPos(e);
          x = pos.x;
          y = pos.y;
          /*prevent the magnifier glass from being positioned outside the image:*/
          if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
          if (x < w / zoom) {x = w / zoom;}
          if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
          if (y < h / zoom) {y = h / zoom;}
          /*set the position of the magnifier glass:*/
          glass.style.left = (x - w) + "px";
          glass.style.top = (y - h) + "px";
          /*display what the magnifier glass "sees":*/
          glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
        }
        function getCursorPos(e) {
          var a, x = 0, y = 0;
          e = e || window.event;
          /*get the x and y positions of the image:*/
          a = img.getBoundingClientRect();
          /*calculate the cursor's x and y coordinates, relative to the image:*/
          x = e.pageX - a.left;
          y = e.pageY - a.top;
          /*consider any page scrolling:*/
          x = x - window.pageXOffset;
          y = y - window.pageYOffset;
          return {x : x, y : y};
        }
      }



      
      


