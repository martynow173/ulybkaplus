var btn_prev;
var btn_next;

var images = document.querySelectorAll('#gallery #photos img');

var i = 0;

btn_prev = function(){
    images[i].style.display = 'none';
    i = i - 1;
    if(i < 0){
        i = images.length-1;
    }
    images[i].style.display = 'block';

}


btn_next = function(){
    images[i].style.display = 'none';
    i = i + 1;
    if( i >= images.length ){
        i = 0;
    }
    images[i].style.display= 'block';	
}


