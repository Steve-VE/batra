let generateBarcode = ()=>{
    //recupération valeur input
    let input = $('#cible').data("barcode") + "";
    console.log(input);
    let i = 0;
    let checksum = 0;
    //attribution digit
    while (i < 12) {
        let digit = input.charAt(i);
        $('.inp' + i + ' > .digit').html(digit);
        let psum = parseInt(digit);
        //verifier si i est impair ou pair
        if (i % 2 == 0) {
            //chiffre pair, poid de 1
            psum = psum * 1;
        } else {
            //chiffre impair, poid de 3
            psum = psum * 3;
        }
        // ajouter les ensembles
        checksum = checksum + psum;
        i++;
    }
    //proche multiple de dix
    let check = Math.round(checksum / 10) * 10;
    //verification pour le digit
    check = check - checksum;
    if (check == 0 || check < 0) {
        check = check * -1;
        check = 10 - check;
    }
    if (check == 10) {
        check = 0;
    }
    $('.inp12 > .digit').html(check);
    let fdin = input.charAt(0);
    getStructure(fdin);
};
generateBarcode();


function getStructure(fd) {
    //pattern premier chiffre
    if (fd == 0) {
         f6 = 'LLLLLL';
    } 
    else if (fd == 1) {
         f6 = 'LLGLGG';
    } 
    else if (fd == 2) {
         f6 = 'LLGGLG';
    } 
    else if (fd == 3) {
         f6 = 'LLGGGL';
    } 
    else if (fd == 4) {
         f6 = 'LGLLGG';
    } 
    else if (fd == 5) {
         f6 = 'LGGLLG';
    } 
    else if (fd == 6) {
         f6 = 'LGGGLL';
    } 
    else if (fd == 7) {
         f6 = 'LGLGLG';
    } 
    else if (fd == 8) {
         f6 = 'LGLGGL';
    } 
    else if (fd == 9) {
         f6 = 'LGGLGL';
    }
    $('.f6').removeClass(function (index, className) {
        return (className.match(/(^|\s)L\S+/g) || []).join(' ');
    }).removeClass(function (index, className) {
        return (className.match(/(^|\s)G\S+/g) || []).join(' ');
    }).addClass(f6);

    let i = 1;

    while (i <= 7) {
        let x = i - 1;
        let fcx = f6.charAt(x);
        let target = '#fc' + i;
        let targetl = '#lc' + i;
        i++;
        let digit = $(target).children('.digit').text();
        let digitl = $(targetl).children('.digit').text();
        $(target).removeClass(function (index, className) {
            return (className.match(/(^|\s)L\S+/g) || []).join(' ');
        }).removeClass(function (index, className) {
            return (className.match(/(^|\s)G\S+/g) || []).join(' ');
        }).addClass(fcx + digit);
        // L Bars
        if (fcx == 'L') {
            $(target + ' > .bar > div').css('background', '#fff');
            // 1
            if (digit == '3' || digit == '4' || digit == '5' || digit == '6' || digit == '7' || digit == '8') {
                $(target + ' > .bar .d2').css('background', '#000');
            }
            // 2
            if (digit == '1' || digit == '2' || digit == '3' || digit == '5' || digit == '7' || digit == '8') {
                $(target + ' > .bar .d3').css('background', '#000');
            }
            // 3
            if (digit == '0' || digit == '1' || digit == '3' || digit == '6' || digit == '7' || digit == '9') {
                $(target + ' > .bar .d4').css('background', '#000');
            }
            // 4
            if (digit == '0' || digit == '3' || digit == '6' || digit == '8') {
                $(target + ' > .bar .d5').css('background', '#000');
            }
            // 5
            if (digit == '2' || digit == '4' || digit == '6' || digit == '7' || digit == '8' || digit == '9') {
                $(target + ' > .bar .d6').css('background', '#000');
            }
            $(target + ' > .bar .d7').css('background', '#000');
        } 
        else if (fcx == 'G') { // G Bars
            $(target + ' > .bar > div').css('background', '#fff');
            // 1
            if (digit == '0' || digit == '1' || digit == '3' || digit == '5') {
                $(target + ' > .bar .d2').css('background', '#000');
            }
            // 2
            if (digit == '1' || digit == '2' || digit == '4' || digit == '5' || digit == '7' || digit == '9') {
                $(target + ' > .bar .d3').css('background', '#000');
            }
            // 3
            if (digit == '2' || digit == '4' || digit == '5' || digit == '8') {
                $(target + ' > .bar .d4').css('background', '#000');
            }
            // 4
            if (digit == '0' || digit == '4' || digit == '6' || digit == '9') {
                $(target + ' > .bar .d5').css('background', '#000');
            }
            // 5
            if (digit == '0' || digit == '1' || digit == '2' || digit == '9') {
                $(target + ' > .bar .d6').css('background', '#000');
            }
            $(target + ' > .bar .d7').css('background', '#000');
        }
        // Last 6
        $(targetl + ' > .bar > div').addClass('R' + digitl);
        $(targetl + ' > .bar > div').css('background', '#fff');
        // 1
        if (digitl == '0' || digitl == '1' || digitl == '2' || digitl == '9') {
            $(targetl + ' > .bar .d2').css('background', '#000');
        }
        // 2
        if (digitl == '0' || digitl == '4' || digitl == '6' || digitl == '9') {
            $(targetl + ' > .bar .d3').css('background', '#000');
        }
        // 3
        if (digitl == '2' || digitl == '4' || digitl == '5' || digitl == '8') {
            $(targetl + ' > .bar .d4').css('background', '#000');
        }
        // 4
        if (digitl == '1' || digitl == '2' || digitl == '4' || digitl == '5' || digitl == '7' || digitl == '9') {
            $(targetl + ' > .bar .d5').css('background', '#000');
        }
        // 5
        if (digitl == '0' || digitl == '1' || digitl == '3' || digitl == '5' || digitl == '7') {
            $(targetl + ' > .bar .d6').css('background', '#000');
        }
        $(targetl + ' > .bar .d1').css('background', '#000');
    }
}
$('#capturebtn').click(function () { // Conversion Canvas
    html2canvas(document.querySelector("#capture")).then(canvas => {
        document.body.appendChild(canvas);
    });
    $('.close').addClass('show');
    $('.overlay').addClass('show');
});
$('.close').click(function () { // Conversion PDF
    let capture = document.querySelector('canvas');
    let img = capture.toDataURL('image/jpeg, 1.0');
    let doc = new jsPDF();
    doc.addImage(img, 'JPEG', 10, 10, 100, 50);
    doc.save('barcode.pdf');
    console.log(capture);
    // $('canvas').remove();
    // $(this).removeClass('show');
    // $('.overlay').removeClass('show');
    // cible.classList.add('invisible');
});

let captureCodebar = ()=>{
    html2canvas(document.querySelector("#capture")).then(canvas => {
        let section = document.querySelector('#cible');
        section.appendChild(canvas);
        $('.box').css('opacity', 0);
    });
    $('.close').addClass('show');
    // $('.overlay').addClass('show');
};
captureCodebar();