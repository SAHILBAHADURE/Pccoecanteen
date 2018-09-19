document.getElementById("final").onclick=function () {
    var d = new Date();
    var ad="Address: "+document.getElementById("add").value+"  " +"Mobile no: "+ document.getElementById("mo").value;

    alert("Order details " + d+ad);
alert("Bon appetite,your order is successfully placed!");
};
