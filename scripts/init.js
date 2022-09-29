VanillaTilt.init(document.querySelector(".menu a"), {
    max: 50,
    speed: 600
});

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-80px";
    }
    if(prevScrollpos <= 1){
        document.getElementById("navbar").classList.remove("transparent")
    }
    else{
        document.getElementById("navbar").classList.add("transparent")
    }
    console.log(prevScrollpos)
    prevScrollpos = currentScrollPos;
}

document.querySelector('.works .star').addEventListener("click", (event) => {
    document.querySelector('.star.content').classList.add('d-none');
})


