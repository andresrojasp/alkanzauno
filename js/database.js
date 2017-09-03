/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function () {
    var database = firebase.database();
    const btnVotaUno = document.getElementById('btnVotaUno');
    const btnVotaDos = document.getElementById('btnVotaDos');
    const imgUno_ = document.getElementById('imgUno');

    btnVotaUno.addEventListener('click', function () {
        var img = imgUno_.src.substr(46);

        var find = '-';
        var re = new RegExp(find, 'g');
              
        //img = 'img_' + img.replace(re, '').substr(0, (img.length - 5));
        img = 'img_' + img.replace(re, '');
        img = img.replace('.', '');

        var voto = 0;
        //console.log(img);
        var objVotar = {
            imagen: img,
            voto: voto + 1
        };
        
        //Verficamos si ya está agreagada una imagen como la que se está enviando
        var votos = database.ref('imagenes');
        votos.on('value', function(ss){
//            console.log('valores: ');
//            console.log(ss.val());
            ss.forEach(function(snap){
                //console.log(snap.key);
                if(snap.key === img){
                    //console.log('iguales!!!!!!!!!!');
                    objVotar.voto++;
                    
                }
            });
        });
                        
        var refImagen = database.ref('imagenes').child(img);
        refImagen.set(objVotar)
                .then(function(){
                    console.log('OK');
                })
                .catch (function(err){
                    console.log(err);
                }); 

    });
    btnVotaDos.addEventListener('click', function () {
        var img = imgUno_.src.substr(46);

        var find = '-';
        var re = new RegExp(find, 'g');
              
        //img = 'img_' + img.replace(re, '').substr(0, (img.length - 5));
        img = 'img_' + img.replace(re, '');
        img = img.replace('.', '');

        var voto = 0;
        //console.log(img);
        var objVotar = {
            imagen: img,
            voto: voto + 1
        };
        
        //Verficamos si ya está agreagada una imagen como la que se está enviando
        var votos = database.ref('imagenes');
        votos.on('value', function(ss){
//            console.log('valores: ');
//            console.log(ss.val());
            ss.forEach(function(snap){
                //console.log(snap.key);
                if(snap.key === img){
                    //console.log('iguales!!!!!!!!!!');
                    objVotar.voto++;
                    
                }
            });
        });
                        
        var refImagen = database.ref('imagenes').child(img);
        refImagen.set(objVotar)
                .then(function(){
                    console.log('OK');
                })
                .catch (function(err){
                    console.log(err);
                }); 

    });
    //
}());






