function showlist(){
    document.querySelector('.nav-links').classList.toggle('active');
}

// Smooth scroller start Right
const observer = new IntersectionObserver((entries)=> {
    entries.forEach((entry)=> {
    console.log(entry);
    if(entry.isIntersecting){
        entry.target.classList.add('Rshow');
    } 
    else{
        entry.target.classList.remove('Rshow');
    }
    });
});

const rhiddenElements = document.querySelectorAll('.rhidden');
rhiddenElements.forEach((el)=> observer.observe(el));


// Smooth scroller start Left
const lobserver = new IntersectionObserver((entries)=> {
    entries.forEach((entry)=> {
    if(entry.isIntersecting){
        entry.target.classList.add('lshow')
    } else{
        entry.target.classList.remove('lshow')
    }
    });
});
const lhiddenElements = document.querySelectorAll('.lhidden');
lhiddenElements.forEach((el)=> lobserver.observe(el));

let loader = `
<style>

.loader{
    top:0px;
    right:0px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    z-index:99;
    background-color:rgba(238, 238, 238, 0.212);
    width:100%;
    height:100%;
}

.loader.hidden{
    animation:loader 1s ;
    animation-fill-mode:forwards;
    transition: fade 1s;
    width:0%;
    height:0%;
}
.cont-load{
    display:flex;
}
.cont-load.show{
    display:none;
}
.cont-load div{
    display: inline-block;
    border-radius: 50%;
    background-color: rgb(0, 243, 109);
    width:30px;
    height: 30px;
    margin: 5px;  
    animation-name: loader;
    animation-duration: 0.6s;
    animation-iteration-count: infinite;
    animation-direction:alternate ;
}
.cont-load div:nth-of-type(1){
    animation-delay: 0.3s;
}
.cont-load div:nth-of-type(2){
    animation-delay: 0.6s;
}
.cont-load div:nth-of-type(3){
    animation-delay: 0.9s;
}
@keyframes loader{
    from {
        opacity: 1;
        background-color: rgb(4, 175, 255);
    }
    to{
        opacity: 0.4;
        transform: translateY(-15px);
    }
}
</style>
<div class="loader">
    <div class="cont-load">
        <div class="dot1"></div>
        <div class="dot2"></div>
        <div class="dot3"></div>
    </div>
</div>
`
    document.write(loader);
    window.addEventListener("load", function(){
    const loader1 = document.querySelector(".loader");
    const loader2 = document.querySelector(".cont-load");
    loader2.className += (" show");
    loader1.className += (" hidden");
});
//loader end 


//up to top button start
let upToStart = `
<div class="up-to-start">
    <span class="arrow-up">	&and;</span>
</div>

<style>
.up-to-start{
    position: fixed;
    display: none;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    background-color: rgb(231, 253, 248);
    font-weight: 800;
    color: rgb(0, 90, 180);
    font-size: 24px;
    bottom: 50px;
    right: 50px;
    padding: 10px;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    box-shadow: 0px 0px 3px 0px #000;
    z-index: 9999;
    transition: 0.5s;
}
.up-to-start.active{
    display: flex;
}
.up-to-start:hover{
    background-color: rgb(150, 150, 150);
}
</style>
`
document.write(upToStart);
const upToStartt = document.querySelector(".up-to-start");
upToStartt.addEventListener("click", function () {
    window.scrollTo({
        top:0,
        left:0,
        behavior:"smooth"
    });
});

window.addEventListener("scroll", function(){
    if(window.pageYOffset >= 200 ) {
    upToStartt.classList.add("active");
    }else{
        upToStartt.classList.remove("active");
    }
});
    const goToStartt = document.querySelector(".go-to-start");
    goToStartt.addEventListener("click", function () {
        window.scrollTo({
            top:600,
            left:0,
            behavior:"smooth"
        });
    });
