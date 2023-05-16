const nav = document.getElementById("nav");//div que tem todos os items e o botão e sair do menu
var showMenu = document.getElementById("showMenu");//id do botão de abrir menu
var hideMenu = document.getElementById("hideMenu");//id do botão de fechar menu 

showMenu.addEventListener("click", function () {
  nav.classList.add("show");
});//se clicar no botão de abrir menu, vai adicionar a classe "show" nele que já está estilizada no css

hideMenu.addEventListener("click", function () {
  nav.classList.remove("show");// se clachar em fechar vai remover esse classe
});


// barra de menu muda de cor quando o usuário saí da home page 
const sobreNosSection = document.querySelector("#sobre_nos");
const menuBar = document.querySelector("#conteudo");

window.addEventListener("scroll", function() {
  if (window.scrollY >= sobreNosSection.offsetTop) {
    menuBar.style.backgroundColor = "white";
    menuBar.style.boxShadow = "0px 0px 10px black";
  } else {
   menuBar.style.backgroundColor = "";
   menuBar.style.boxShadow = "";
  }
});



// ler mais 
const btnLerMais = document.getElementById('ler_mais');
btnLerMais.addEventListener('click', function(event) {
  event.preventDefault();
  const proximaSecao = document.getElementById('sobre_nos');
  proximaSecao.scrollIntoView({ behavior: 'smooth' });
});


//slides serviços
const panels = document.querySelectorAll('.panel')

panels.forEach(panel => {
    panel.addEventListener('click', () => {
        removeActiveClasses()
        panel.classList.add('active')
    })
})

function removeActiveClasses() {
    panels.forEach(panel => {
        panel.classList.remove('active')
    })
}

// cards nossos planos
const card = document.querySelector('.card');
card.addEventListener('click', function() {
  card.classList.toggle('flipped');
});