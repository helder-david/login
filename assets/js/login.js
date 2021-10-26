console.log('Hola');
var usr =  document.getElementById("usr");
var psw =  document.getElementById("psw");
function ingreso(){
	//alert(usr.value);
	var cif = cifMurcielago(psw.value);
	desMurcielago(cif);

}

function cifMurcielago(st){
	var clave = ['M','U','R','C','I','E','L','A','G','O'];
	var cad = st.toUpperCase();
	var cifrado = "";
	var i=0;
	var j=0;
	do{
		do{
			if(cad[i]== clave[j]){
				cifrado += j;
				j=clave.lenght;
				i++;
			}else if(j == clave.lenght) {
				cifrado += cad[i];
				i++;
			}else{
				j++;
			}
		}while(j<clave.length);
	} while(i<cad.length);
	alert(cifrado);
	return cifrado;
}


function desMurcielago(ps){
	var clave = ['M','U','R','C','I','E','L','A','G','O'];
	var cad = ps.toUpperCase();
	var descifrado = "";
	var i=0;
	var j=0;
	do{
		do{
			if(cad[i]== j){
				descifrado += clave[j];
				j=clave.lenght;
				i++;
			}else if(j == clave.lenght) {
				descifrado += cad[i];
				i++;
			}else{
				j++;
			}
		}while(j<clave.length);
	} while(i<cad.length);
	alert(descifrado);
}
