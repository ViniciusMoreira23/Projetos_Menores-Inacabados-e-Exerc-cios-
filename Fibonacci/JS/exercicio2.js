				function palindromo(){
                                          var word1 = document.getElementById("word").value;
                                          var wordResp = "";
                                          console.log(word1);
                      for(var cont=word1.length;cont>=0;cont--){
                        wordResp += word1.charAt(cont);
                        console.log(wordResp);
                      }
                                          if(word1 == wordResp){
                                                document.getElementById("resp").innerText = "É um Palindromo: "+word1+" = "+wordResp;
                                          }else{
                                                document.getElementById("resp").innerText = "Não é um Palindromo: "+word1+" --invertendo-- "+wordResp;
                                          }
                    }
