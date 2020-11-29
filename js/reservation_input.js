$(function(){

$('.floor').on('click',function(){
                                   if($('.okBox').hasClass('trigger') == false)
                                   {$('.okBox').addClass('trigger')
                                    return false; 
                                   }

                                   if($('#input1').val()== "")
                                    {alert('日にちを選んでください')
                                    return false;  
                                    }
                                   else{ $('.okBox').removeClass('trigger') }
                                 }
              )

$('.floor1').on('click',function(){
                                    if($('.errorBox').hasClass('trigger') == false)
                                    {$('.errorBox').addClass('trigger')
                                    return false; 
                                    }                         

                                  if($('#input1').val()== "")
                                    {alert('日にちを選んでください')
                                    return false;  
                                    }
                                  else{ $('.errorBox').removeClass('trigger') }
                                 }
              )





})