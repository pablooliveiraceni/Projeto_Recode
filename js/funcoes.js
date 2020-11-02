let exibir_categoria = (categoria) => {
    //alert(categoria);
    let elementos = document.getElementsByClassName('box_produto');
    for(let i = 0; i < elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria == elementos[i].id){
            elementos[i].style = "display:block;";
        }else{
            elementos[i].style = "display:none;";
        }
    }
};
let exibir_todos = () =>{
    let elementos = document.getElementsByClassName('box_produto');

    for(let i = 0; i < elementos.length; i++){
        elementos[i].style = "display:block";
    }
};

let aumentar = (imagem) =>{
    console.log(imagem);
    imagem.width = 240; 
    imagem.style = "cursor:pointer";
};

let diminuir = (imagem) =>{
    imagem.width = 120;
}

let aumentarMenu = (menu) =>{
    menu.style = "color:red; cursor:pointer; font-weight: bold;"
}

let diminuirMenu = (menu) => {
    menu.style = "color:black cursor:pointer;"
}
