function backTop() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function habilitarBotones(){
  $(".menu").removeAttr("disabled");
  collapseAll();
}

function collapseAll(){
  alert('Hola Mundo');
  $(".collapsible-header").removeClass(function(){
    return "active";
  });
  $(".collapsible").collapsible({accordion: true});
  $(".collapsible").collapsible({accordion: false});
}
