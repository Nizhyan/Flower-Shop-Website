var slides=document.querySelectorAll('.slide')
var i=0

function nextslide(){
    i=i+1;
    if(i >=slides.length){
        i=0;
    }
    document.querySelector('figure').style.left=`-${i*100}%`
}

function prevslide(){
    i = i - 1;
    if(i < 0){
        i = slides.length - 1;
    }
    document.querySelector('figure').style.left=`-${i*100}%`
}

// ${} waki psql de expressionake wargrit dnav string da BAS `${}` nachebit single quotes bn ila backticks bn `` da shul kat

