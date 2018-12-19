// checar portas 
    if (proto != "qualquer" && proto != "icmp"){ 
      if (portadestin == "") 
      if (portadestin == ""){ 
        msgErr += '<br>-<b>Destino Externo</b>, Deve ser informado uma porta para o protocolo selecionado.'; 



        regex = /^\d+(,\d+)*$/; 
        if (!regex.test(portadestin)) { //se portadestin for DIFERENTE do regex separdo por , // 
          var porta_des = portadestin; // PORTADES recebe PORTADESTIN //
          porta_des = porta_des.split(","); // PORTA_DES recebe PORTADESTIN separado POR , //
          var portas = portadestin; // PORTAS recebe PORTADESTIN // 
          for (var i = 0; i < porta_des.length; i++) { // LOOP do tamanho da PORTA_DES da quantidade de vec NA SEPARACAO POR , //
            if (((porta_des[i].value * 1) < 1) || ((porta_des[i].value * 1) > 65535)) { // VERIFICA AS POSICOES PARA VER SE É < 1 OU < 65535 // 
          regex = /^\d+(:\d+)?$/  // REGEX QUE SEPARA POR : // 
          if (!regex.test(portadestin)){ // SE A PORTA FOR DIFERENTE MSG DE ERROR : // 
            msgErr += '<br>-<b>Destino Externo</b>, porta informada é inválida.'; // SE FOR DIFRENTE APRESENTA A MSG. // 
          } 
        } 
      } 
    } 



    if (portadestin.length) { // SE A VAREAVEL TIVER TAMANHO // 
      if (portadestin.indexOf(",") > -1) // SE NAO ACHAR A , RETORNA -1 SE ACHAR RETORNA O NUMERO DA POSICAO - INDEX//
        theports = portadestin.split(","); // RECEBE VALORES SEPARADOS POR , //
      else if (portadestin.indexOf(":") > -1) // SE NAO ACHAR O : RETORNA -1 SE ACHAR RETORNA O NUMERO DA POSICAO - INDEX // 
        theports = portadestin.split(":"); // RECEBE OS VALORES POR ":" // 
      else {
        var theports = new Array(); // CRIA UM NOVO ARRAY //
        theports[0] = portadestin;  // PORTADESTIN ENTRA NA POSICAO 0 DO ARRAY // 
      } 
      if (theports.length > 15) { // SE A QUANTIDADES DE PORTAS FOR > 15 //
        msgErr += "<br>-<b>Destino Externo</b>, Deve ser especificadas, no máximo, 15 portas de destino em uma só regra."; // APRESENTA MENSAGEM DE ERRO //
      } 
      for (var i = 0; i < theports.length; i++) { // LOOP COM O TAMANHO DAS QUANTIDADES DE PORTAS // 
        if (((theports[i] * 1) < 1) || ((theports[i]) * 1) > 65535) { // PASSA EM CADA POSICAO E VERIFICA SE E < 1 OU > 65535 //
          msgErr += "<br>-<b>Destino Externo</b>, a porta deve ter um valor entre 1 e 65535."; // SE FOR APRESENTA A MENSAGEM //
          break; // PARA O SISTEMA PARA NAO APRESENTAR VARIAS MENSAGENS // 
        }  
      } 
      regex = /^\d+(,\d+)*$/;  // SEPARA POR : // 
      if (!regex.test(portadestin)) { // SE A PORTADESTIN FOR DIFERENTE DO REGEX //
        var porta_des = portadestin; // PORTA_DES RECEBE PORTADESTIN // 
        porta_des = porta_des.split(","); // PORTADESTIN É SEPARADA POR , // 
        var portas = portadestin;  // PORTAS RECEBE PORTADESTIN // 
        for (var i = 0; i < porta_des.length; i++) { // LOOP DO TAMANHO DA QUANTIDADE DE POSICOES DA PORTA_DES //
          if (((porta_des[i].value * 1) < 1) || ((porta_des[i].value * 1) > 65535)) { // VERIFICAR SE A PORTA É < 1 OU > 65535 // 
            msgErr += '<br>-<b>Destino Externo</b>, o número da porta deve estar entre 1 e 65535.'; // APRESENTA MENSAGEM DE ERROR // 
            break; // PARA PARA NAO APARECER MAIS VEZES //
          } 
          portas = porta_des[i].split(":"); // PORTAS RECEBE CADA PORTA SEPARADAS POR : // 
          var portas2 = 0; 
          if(porta_des[i + 1]) // VERIFICA SE TEM A PROXIMA POSICAO //
            portas2 = porta_des[i + 1].split(":");  // SEPARA A PROXIMA POSICAO POR : // 
          if(portas.length >= 2) { // SE A QUANTIDADE DE POSICOES FOREM >= 2 //
            // if(portas.length >= 2 && portas2.length >= 2) /
            //   msgErr += '<br>-<b>Destino Externo</b>, deve haver somente um range de portas.'; 
            if(portas[0]*1 > portas[1]*1)  // SE FOR SEPARADO POR : VERIFICA SE A PRIMEIRA POSICAO É MAIOR QUE A PRIMEIRA // 
              msgErr += '<br>-<b>Destino Externo</b>, range de portas inválido, a porta inicial deve ser menor que a porta final.'; // SE FOR APRESENTA ERRO //
            if(portas[0]*1 > 65535 || portas[1]*1 > 65535){ // SE A PORTA FOR > 65535 OU < 1 // 
              msgErr += '<br>-<b>Destino Externo</b>, o número da porta deve estar entre 1 e 65535.'; // APRESENTA ERRO //
            } 
            portas = porta_des[i].split(":"); // PORTAS RECEBE OS NUMERO SEPARADOS POR :
            var portas2 = 0; 
            if(portas.length >= 2) {// SE PORTAS >= 2 // 
              if(portas[0]*1 > portas[1]*1) // A PRIMEIRA POSICAO E MAIOR QUE A SEGUNDA //
                msgErr += '<br>-<b>Destino Externo</b>, range de portas inválido, a porta inicial deve ser menor que a porta final.'; // APRESENTA ERRO //
              if(portas[0]*1 > 65535 || portas[1]*1 > 65535) // SE PORTA FOR > 65535 OU < 1 // 
                msgErr += '<br>-<b>Destino Externo</b>, o número da porta deve estar entre 1 e 65535.'; APRESENTA ERROR  
              break; // PARA O LOOP // 
            } 
          } 
        } FINAL DO LOOP 
        }FINAL DO IF
      }
     }