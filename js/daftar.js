const phone = document.querySelector('#phone');
const error = document.querySelector(".error");
function cekPhone (){
    if (phone.value.length === 12 || phone.value.length === 13){
        for (var i = 0; i <= phone.value.length - 1; i++) {
            console.log(phone.value[i]);
            console.log(Number.isInteger(phone.value[i]));
            if (phone.value[0]==0){
                if (Number.isInteger(parseInt(phone.value[i])) == false){
                error.innerHTML="Phone number must be number!";
                break;
                }
            else {
                console.log("Tersubmit");
                error.innerHTML=' '
                }
            }
    else{
        error.innerHTML="Awalan Nomor telepon harus 0";
        break;
        }
        }
    }
    if (phone.value.length != 12 && phone.value.length !=13 ) {
        error.innerHTML="Jumlah Digit Nomor Telephone Salah (12 atau 13 digit)";
    }
}
