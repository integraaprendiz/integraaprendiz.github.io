// function adm(){
//     const meuBt = document.getElementById("lista0");
//     // document.getElementById("lista").style.background-color = black;
//     meuBt.style.backgroundColor = "#18C8FF";
//     meuBt.style.fontWeight = "bold";
//     meuBt.style.transform = "scale(1.1)";
//     meuBt.style.borderRadius = "0px 5px 5px 0px";
//     meuBt.style.color = "black";
// }

// function informatica(){
//     const meuBt1 = document.getElementById("lista1");
//     // document.getElementById("lista").style.background-color = black;
//     meuBt1.style.backgroundColor = "#18C8FF";
//     meuBt1.style.fontWeight = "bold";
//     meuBt1.style.transform = "scale(1.1)";
//     meuBt1.style.borderRadius = "0px 5px 5px 0px";
//     meuBt1.style.color = "black";
// }

var tabs = document.querySelectorAll('.lista');

// Adicione um ouvinte de eventos a cada aba
tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      // Desmarque todas as abas
      tabs.forEach(function(tab) {
        tab.classList.remove('active');
        tab.style.fontSize = '16px'; // Tamanho normal
        tab.style.fontWeight = 'normal';
        tab.style.color = '#fff';
        tab.style.backgroundColor = '#1D83A3';
        tab.style.transform = 'scale(1)'; // Escala normal
        tab.style.borderRadius = '0px';
      });
  
      // Marque a aba clicada como ativa
      this.classList.add('active');
      this.style.fontSize = '17px'; // Tamanho aumentado
      this.style.fontWeight = 'bold';
      this.style.backgroundColor = '#18C8FF';
      this.style.color = '#000';
      this.style.transform = 'scale(1.05)'; // Escala aumentada
      this.style.borderRadius = '0px 5px 5px 0px';
      this.style.boxShadow = '0px 0px black';
  
      // Oculte todo o conteúdo
      var contents = document.querySelectorAll('.cursosConteudo');
      contents.forEach(function(content) {
        content.style.display = 'none';
      });
  
      // Mostre o conteúdo correspondente à aba ativa
      var tabContent = document.querySelector(this.dataset.target);
      tabContent.style.display = 'block';
    });
});

tabs[0].click();