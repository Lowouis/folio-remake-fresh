
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
    prevScrollpos = currentScrollPos;
}


window.onclick = e => {
        let Allclass = e.target.classList
        Allclass.forEach(element =>{
            SelectedButton(element,e.target,"ab")
        })
}

function SelectedButton(selectedClass,target,classToCompare){
    if (selectedClass === classToCompare){
        let brothers =  target.parentNode.children
        for (let i=0; i < brothers.length ; i++){
            if(target.innerHTML !== brothers[i].innerHTML){
                clearBorder(brothers[i],target)
            }
        }
        target.classList.add("hold-left-border")

    }
}

function clearBorder(element,target){
    element.classList.remove("hold-left-border")
    element.classList.add("transparent-border")
}




VanillaTilt.init(document.querySelector(".menu a"), {
    max: 50,
    speed: 600
});



let articles = [algo,nim, bw, morpion]
let names = ['algo','nim', 'bw', 'morpion']


let algo = '<article class="star content">\n' +
    '                <h2>A* Solver Algorithm</h2>\n' +
    '                <h3>2021</h3>\n' +
    '                <p>Worked with a team of three designers to build a marketing website and e-commerce\n' +
    '                    platform for blistabloc, an ambitious startup originating from Northeastern\n' +
    '                    Helped solidify a brand direction for blistabloc that spans both packaging and web\n' +
    '                    Interfaced with clients on a weekly basis, providing technological expertise\n' +
    '                </p>\n' +
    '                <div class="add">\n' +
    '                    <a  href="https://github.com/Lowouis/ricochet-robot" target=”_blank” class="fade btn hover">Watch on github</a>\n' +
    '                    <a target=”_blank” href="data/files/astarreport_fr.pdf" class="btn fade hover"> PDF Report</a>\n' +
    '                </div>\n' +
    '\n' +
    '            </article> '

let nim = '<article class="nim content">\n' +
    '                <h2>Jeux de Nim IA</h2>\n' +
    '                <h3>2019</h3>\n' +
    '                <p>Worked with a team of three designers to build a marketing website and e-commerce\n' +
    '                    platform for blistabloc, an ambitious startup originating from Northeastern\n' +
    '                    Helped solidify a brand direction for blistabloc that spans both packaging and web\n' +
    '                    Interfaced with clients on a weekly basis, providing technological expertise\n' +
    '                </p>\n' +
    '                <div class="add">\n' +
    '                    <a  href="https://github.com/Lowouis/ricochet-robot" target=”_blank” class="fade btn hover">Watch on github</a>\n' +
    '                    <a target=”_blank” href="data/files/astarreport_fr.pdf" class="btn fade hover"> PDF Report</a>\n' +
    '                </div>\n' +
    '\n' +
    '            </article> '


let bw = '<article class="bw content">\n' +
    '                <h2>Boat War Java App</h2>\n' +
    '                <h3>2021</h3>\n' +
    '                <p>Worked with a team of three designers to build a marketing website and e-commerce\n' +
    '                    platform for blistabloc, an ambitious startup originating from Northeastern\n' +
    '                    Helped solidify a brand direction for blistabloc that spans both packaging and web\n' +
    '                    Interfaced with clients on a weekly basis, providing technological expertise\n' +
    '                </p>\n' +
    '                <div class="add">\n' +
    '                    <a  href="https://github.com/Lowouis/ricochet-robot" target=”_blank” class="fade btn hover">Watch on github</a>\n' +
    '                    <a target=”_blank” href="data/files/astarreport_fr.pdf" class="btn fade hover"> PDF Report</a>\n' +
    '                </div>\n' +
    '\n' +
    '            </article> '

let morpion = '<article class="morpion content">\n' +
    '                <h2>Boat War Java App</h2>\n' +
    '                <h3>2021</h3>\n' +
    '                <p>Worked with a team of three designers to build a marketing website and e-commerce\n' +
    '                    platform for blistabloc, an ambitious startup originating from Northeastern\n' +
    '                    Helped solidify a brand direction for blistabloc that spans both packaging and web\n' +
    '                    Interfaced with clients on a weekly basis, providing technological expertise\n' +
    '                </p>\n' +
    '                <div class="add">\n' +
    '                    <a  href="https://github.com/Lowouis/ricochet-robot" target=”_blank” class="fade btn hover">Watch on github</a>\n' +
    '                    <a target=”_blank” href="data/files/astarreport_fr.pdf" class="btn fade hover"> PDF Report</a>\n' +
    '                </div>\n' +
    '\n' +
    '            </article> '