/**
 *  seleccion(idButaca) - LLamo a enlace butaca y pregunto por su clase
 *      libre           -> añade a carrito hasta un máximo de 6
 *      seleccionada    -> elimina del carrito la butaca
 * @param idButaca
 */
function seleccion(idButaca) {
    var total = document.getElementById("total").innerHTML;
    var total = document.getElementById("txtTotal").value;
    // console.log(total);

    var carrito = document.getElementById("carrito");
        console.log(idButaca);
        let butaca = document.getElementById(idButaca);
        let estado = butaca.getAttribute("class");
        // console.log(estado);

    if (estado === "libre" && total<6) {
        total++;
        butaca.setAttribute("class","seleccionada");
        // console.log("seleccionada");

        let input1 = document.createElement("input");
        input1.setAttribute("type", "hidden");
        let label1 = document.createElement("label");

        switch (total) {
            case 1:
                input1.setAttribute("name", "txtEntrada1");
                input1.setAttribute("id", "txtEntrada1");
                label1.setAttribute("id", "lblEntrada1");
                break;
            case 2:
                input1.setAttribute("name", "txtEntrada2");
                input1.setAttribute("id", "txtEntrada2");
                label1.setAttribute("id", "lblEntrada2");
                break;
            case 3:
                input1.setAttribute("name", "txtEntrada3");
                input1.setAttribute("id", "txtEntrada3");
                label1.setAttribute("id", "lblEntrada3");
                break;
            case 4:
                input1.setAttribute("name", "txtEntrada4");
                input1.setAttribute("id", "txtEntrada4");
                label1.setAttribute("id", "lblEntrada4");
                break;
            case 5:
                input1.setAttribute("name", "txtEntrada5");
                input1.setAttribute("id", "txtEntrada5");
                label1.setAttribute("id", "lblEntrada5");
                break;
            case 6:
                input1.setAttribute("name", "txtEntrada6");
                input1.setAttribute("id", "txtEntrada6");
                label1.setAttribute("id", "lblEntrada6");
                break;

        }
        input1.setAttribute("value", idButaca);
        label1.setAttribute("value", idButaca);
        let texto = document.createTextNode(idButaca);
        label1.appendChild(texto);

        carrito.appendChild(label1);
        carrito.appendChild(input1);

        document.getElementById("total").innerHTML = parseInt(total);
        document.getElementById("txtTotal").value = total;
        console.log(total);
    }
    else if (estado === "seleccionada" && total>0) {
        if(total==1 && document.getElementById("lblEntrada1").innerText ==idButaca) {
            butaca.setAttribute("class","libre");
            document.getElementById("txtEntrada1").remove();
            document.getElementById("lblEntrada1").remove();
            total--;
        }
        else if(total==2 &&  document.getElementById("lblEntrada2").innerText ==idButaca) {
            butaca.setAttribute("class","libre");
            document.getElementById("txtEntrada2").remove();
            document.getElementById("lblEntrada2").remove();
            total--;
        }
        else if(total==3 && document.getElementById("lblEntrada3").innerText ==idButaca) {
            butaca.setAttribute("class","libre");
            document.getElementById("txtEntrada3").remove();
            document.getElementById("lblEntrada3").remove();
            total--;
        }
        else if(total==4 && document.getElementById("lblEntrada4").innerText ==idButaca) {
            butaca.setAttribute("class","libre");
            document.getElementById("txtEntrada4").remove();
            document.getElementById("lblEntrada4").remove();
            total--;
        }
        else if(total==5 && document.getElementById("lblEntrada5").innerText ==idButaca) {
            butaca.setAttribute("class","libre");
            document.getElementById("txtEntrada5").remove();
            document.getElementById("lblEntrada5").remove();
            total--;
        }
        else if(total==6 && document.getElementById("lblEntrada6").innerText ==idButaca) {
            butaca.setAttribute("class","libre");
            document.getElementById("txtEntrada6").remove();
            document.getElementById("lblEntrada6").remove();
            total--;
        }
        document.getElementById("total").innerHTML = parseInt(total);
        document.getElementById("txtTotal").value = total;
        console.log(total);
    }
}

/**
 *  cancelarSeleccion() - Actualizo la página, por lo que se borran todos los datos que se habían cargado
 *      para elo utilizo un enlace
 */
function cancelarSeleccion(){
    document.location.reload();
}