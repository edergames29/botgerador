var cartas = []
var cores = 0 //vermelho
var pegarCartaE = [] //pce "PEGAR CARTA POR ELEMENTO"
const coresArray = ['red','blue','green','yellow','darkblue','MediumSeaGreen','Fuchsia','OrangeRed'] //numero de cartas "cores, funciona tambem exadecimal"
var posicaoArray = 0

for (var i =0; i < coresArray.length*2;i++){ //formata as arrays
    cartas[i]=0
    pegarCartaE[i]=0
}
for(var i = 0; i < coresArray.length*2; i++){
    
    if(cores == 2){
    cores=0
    ++posicaoArray //muda cores for igual a dois, assim cores reseta depois
    }

    
    cartas[i] = document.createElement('section')
    cartas[i].setAttribute('id','carta'+i)

    //partes dos if
    cartas[i].style.backgroundColor=coresArray[posicaoArray] //simplesmente atribui a cor da array
    //fim


    cartas[i].setAttribute('onclick','clicar('+i+','+'"'+coresArray[posicaoArray]+'")')
     //adiciona o elemento no final
    cores++
    console.log(cartas[i])	
}


//----------------------------------//

var novaArrayAletoria = [0]
for(var i =0; i < coresArray.length*2 ; i++){
    var ale = Math.floor(Math.random()*coresArray.length*2)
    if(ediferente(ale)){
        novaArrayAletoria[i]=ale
    }else{
        i--
    }
}


function ediferente(n) {
    for(var i = 0; i < novaArrayAletoria.length; i++){
        if(n != novaArrayAletoria[i]){
        }else{
            return false
        }
    }
    return true
}



for (var i = 0; i < coresArray.length*2 ; i++) {
    //
    console.log('oi')
    document.body.appendChild(cartas[novaArrayAletoria[i]])
    pegarCartaE[novaArrayAletoria[i]]=(document.getElementById('carta'+novaArrayAletoria[i]))
};

//----------------------------------//


setTimeout(() => {
for (var i = 0; i < coresArray.length*2 ; i++) {
    cartas[i].setAttribute('class','tudopreto')
}
  
}, 2500)







var pontos=0
var falhas=0
var eFinal=0
var clicar = (x,corve) => {
    coresId(x)
    contagem+=1
    //outra parte da funcao
    if (contagem == 1) {
        a=x
        ultimaCorA=corve
        console.log(ultimaCorA)
        console.log('foi a primeira')
    }else if(contagem == 2){
        b=x
        contagem=0
        ultimo=0
        ultimaCorB=corve
        console.log(ultimaCorB)
        setTimeout(function(){

        pegarCartaE[a].setAttribute('class','tudopreto')
        pegarCartaE[b].setAttribute('class','tudopreto')

            },400)
    

        console.log('acore'+ultimaCorA)
        if(ultimaCorA == ultimaCorB && ultimaCorB == ultimaCorA){//verificar se cores sao iguals
            if(a == b){
                falhas+=1
                document.getElementById('tf').innerHTML=falhas
            }else{
                console.log('cores sao iguais')
                console.log(ultimaCorA+'é igual '+ultimaCorB)
            
                pegarCartaE[a].removeAttribute('onclick')
                pegarCartaE[b].removeAttribute('onclick')

                setTimeout(function(){

                pegarCartaE[a].setAttribute('class','verde')
                pegarCartaE[b].setAttribute('class','verde')

                },401)
                
                ++eFinal
                if (eFinal == coresArray.length) {
                    const f = pontos - (falhas*10)
                    document.getElementById('pontos').style.backgroundColor='green'
                    document.getElementById('pontos').innerHTML+=' Pontos Finais: '+f
                };
                pontos+=10
                document.getElementById('pt').innerHTML=pontos
            }
                
        }else{
        falhas+=1
        document.getElementById('tf').innerHTML=falhas
            
        }
    }
        console.log('resetou')
    console.log(a,b)
}

var ultimo = 0
var contagem = 0
var a=0;
var b=0;
var ultimaCorA='';
var ultimaCorB='';

var coresId  = ( v , corve ) => {
    pegarCartaE[v].style.opacity='0.7'
    pegarCartaE[v].removeAttribute('class','tudopreto')
    setTimeout(function(){pegarCartaE[v].style.opacity=1},100)
}
