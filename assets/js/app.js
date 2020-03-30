$(function(){
    
    $(document).on('click','.btn-start',function(){
        $('body').removeClass('intro');
    });

    $('#form-start-quiz').on('submit',function(){
        var nama = $('input[name="nama"]').val();
        $('.nama').text(nama);
        $('.form-nama').hide().next().show();
        $('html').scrollTop(1000);
        startQuiz();
        return false;
    });

    var total = 0;
    
    $(document).on('click','.btn-ya',function(){
        typingText($(this),'ya');
    });

    $(document).on('click','.btn-tidak',function(){
        typingText($(this),'tidak');
    });
    
    $(document).on('click','.btn-start-over',function(){
        $('.chatbox').hide().find('.item').not('.default').remove();
        $('.chatbox').find('.item').removeClass('confirm').find('.btn').removeClass('active');
        $('.form-nama').show();
    });

    var template = ''+
        '<div class="item mb-5 active loading">'+
            '<div class="row mb-3">'+
                '<div class="col-auto">'+
                    '<div class="avatar"><img src="assets/images/background/avatar.svg" alt="" width="60"></div>'+
                '</div>'+
                '<div class="col">'+
                    '<div class="chatbubble">'+
                        '<div class="typing"><span></span><span></span><span></span></div>'+
                        '<div class="text"></div>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="form-jawaban text-right">'+
                '<button class="btn-tidak btn btn-outline-info py-2 px-4 radius-50" type="button">Tidak</button>'+
                '<button class="btn-ya btn btn-outline-info py-2 px-4 radius-50 ml-2" type="button">Ya</button>'+
            '</div>'+
        '</div>';

    var finish = ''+
        '<div class="item finish mb-5 active loading">'+
            '<div class="row mb-3">'+
                '<div class="col-auto">'+
                    '<div class="avatar"><img src="assets/images/background/avatar.svg" alt="" width="60"></div>'+
                '</div>'+
                '<div class="col">'+
                    '<div class="chatbubble">'+
                        '<div class="typing"><span></span><span></span><span></span></div>'+
                        '<div class="text"></div>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="form-jawaban text-right mt-5" style="display:none">'+
                '<button class="btn-start-over btn btn-outline-info py-2 px-4 radius-50 ml-2" type="button">Ulangi Lagi</button>'+
            '</div>'+
        '</div>';

    function startQuiz(){
        $('.chatbox').append(template).find('.item').eq(1).find('.text').html(question[0].question);
        setTimeout(() => {
            $('.chatbox .item.loading .typing').remove();
            $('.chatbox .item.loading').removeClass('loading')
            window.scroll({
                top: 10000, 
                left: 0, 
                behavior: 'smooth'
            });
        }, 1200);
    }

    function typingText(self,button){
        var index = self.parents('.item').index();
        var length = question.length;
        var scroll = self.parents('.chatbox').innerHeight();
        self.addClass('active').parents('.item').addClass('confirm');
        if(index < length){
            var point = question[index - 1].point;

            if(point == 1){
                if(button == 'ya'){
                    total = total+1
                }
            } else{
                if(button == 'tidak'){
                    total = total+1
                }
            }
            console.log(total);
            $('.chatbox').append(template).find('.item').eq(index+1).find('.text').html(question[index].question);
        } else{
            var nama = $('input[name="nama"]').val();
            if(total < 8){
                result = '<strong>'+nama+ '</strong>, Anda memiliki <strong>Resiko Rendah</strong>.';
                result = result+ 'Tetap jaga kesehatan ya. dan sekiranya langkah ini bisa menjadi kebiasaaan sehari-hari, tentu membantu perubahan pola hidup sehat dari dampak paska pandemic COVID19 ini.'
            }
            if(total > 7 && total < 15){
                result = '<strong>'+nama+ '</strong>, Anda memiliki <strong>Resiko Sedang</strong>.';
                result = result+ 'Segera lakukan isolasi diri. tetep jaga kesehatan.'
            }
            if(total > 14 && total < 22){
                result = '<strong>'+nama+ '</strong>, Anda memiliki <strong>Resiko Tinggi</strong>.';
                result = result+ 'Segera periksakan diri ke puskesmas / rumah sakit terdekat. Atau hubungi hotline covid19 untuk penanganan selanjutnya.'
            }
            $('.chatbox').append(finish).find('.item.finish .text').html(result);
            
            setTimeout(() => {
                $('.chatbox .item.finish .form-jawaban').fadeIn();
                $('.quiz-content').scrollTop(10000);
                window.scroll({
                    top: 10000, 
                    left: 0, 
                    behavior: 'smooth'
                });
            }, 5000);
        }
        $('.quiz-content,html').scrollTop(scroll);
        
        setTimeout(() => {
            $('.chatbox .item.loading .typing').remove();
            $('.chatbox .item.loading').removeClass('loading')
            window.scroll({
                top: 10000, 
                left: 0, 
                behavior: 'smooth'
            });
        }, 1200);
    }
});