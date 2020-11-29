$(function(){

$('.floor').on('click',function(){
                                   if($('#input1').val()== "")
                                    {alert('日にちを選んでください')
                                    return false;  
                                    }
                                   else{ $('.okBox').removeClass('trigger') }
                                 }
              )

$('.floor1').on('click',function(){
                                  if($('#input1').val()== "")
                                    {alert('日にちを選んでください')
                                    return false;  
                                    }
                                  else{ $('.okBox').removeClass('trigger') }
                                 }
              )





})