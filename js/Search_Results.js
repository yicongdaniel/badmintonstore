window.onload = function() {
    productListing(product);

};

//Converting rating number to stars. Not implemented yet
// function getRating(RATING){
//     var ratingDiv = "";
//     for(var i = 0; i<4 ; i++){
//         ratingDiv += `<span class='fa fa-star ${RATING < i ? "checked" : ""}'></span>`;
//     }
//     return ratingDiv
// }

function productListing(productArray){

    var search_term = window.location.search.split('text=')[1];
    
    document.querySelector('#search_box').value = search_term;

    var productDiv=
        `<div class="col-md-4">
                <div class="outer">
                        <div class="upper">
                            <a href = "product.html?id=<ID>"> <img src="IMAGE" alt="rajkumar" class="imgh"></img> </a> 
                            </div>

                            <div class="medium">
                            <h4> <a href = "product.html?id=<ID>"> TITLE </a> </h4>
                            <p>Price: CAD$ PRICE </p>
                            <p>Rating: RATING /5</p> 
                        </div>
                </div>
            </div>`;
    
        document.querySelector('#all-products').innerHTML = '';

        productArray.forEach(function(product) {
            if(product.title.toLowerCase().includes(search_term.toLowerCase())) {// For search
    
                var p = productDiv.replaceAll('<ID>', product.id);
                p = p.replace('IMAGE', product.image);
                p = p.replace('TITLE', product.title);
                p = p.replace('PRICE', product.price);
                p = p.replace('RATING', product.rating);

                // append on HTML     
                document.querySelector('#all-products').innerHTML += p;
             }
         });
                
}

//Filter and Sorting part
function filter(field){
    //Filter case 1: filtering rating
    if(field == 'rating'){
        var low = document.querySelector('#lowRating').value || 0;
        var high = document.querySelector('#highRating').value || 5;

        productListing(product.filter(function(a){
            if(a.rating >= low && a.rating <= high){
                return true;
            }
            else{
                return false;
            }
        }));
    }

    //Filter case 2: filtering price
    else if(field == 'price'){
        var low = document.querySelector('#lowPrice').value || 0;
        var high = document.querySelector('#highPrice').value || 1000;

        productListing(product.filter(function(a){
            if(a.price >= low && a.price <= high){
                return true;
            }
            else{
                return false;
            }
        }));

    }
}

function sort(field, order){
    // Sorting case 1: sort by price
    if(field == 'price'){
        if(order == "lowTohigh"){
            productListing(product.sort(function(a,b){
                return a.price - b.price;
            }));
        }

        else if(order == "highTolow"){
            productListing(product.sort(function(a,b){
                return b.price - a.price;
            }));
        }
    }

    // Sorting case 2: sort by rating
    else if(field == 'rating'){
        if(order == "lowTohigh"){
            productListing(product.sort(function(a,b){
                return a.rating - b.rating;
            }));
        }

        else if(order == "highTolow"){
            productListing(product.sort(function(a,b){
                return b.rating - a.rating;
            }));
        }
    }

}

































