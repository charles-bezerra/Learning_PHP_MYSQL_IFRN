var qrcode = new QRCode(document.getElementById("qrcode"),{
    text: '',
    width: 150,
    height: 150,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});
function makeValue(){
    var valor = document.getElementById("valor");
    qrcode.makeCode(valor.value) <!--Modifica o valor do QrCode e gera outro-->
}
makeValue();
